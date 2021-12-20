<?php
/* As I couldn't upload HTML coded notes files to the database because of
 * escaping the characters, I used PHP that solved my problem.
 * Sources:
 * https://tinyurl.com/yycy28hh 
 * https://www.php.net/manual/en/function.fread.php
 * https://www.php.net/manual/en/function.str-replace.php
 * https://www.codegrepper.com/code-examples/php/php+get+all+php+files+in+a+directory
 * https://www.w3schools.com/php/php_looping_foreach.asp */

$path = "/var/www/html/corteousquestions/support_files/html_conversion/note_files/";

$files = scandir($path);  // Scans and retrieves list of files on a folder.
$files = array_diff(scandir($path), array('.', '..')); // I don't know what this does.
foreach($files as $file){
    $fullp =  $path . $file;  // Created a variable with the full path of the files.
    $content = file_get_contents($fullp);  // Retrieves content of file.
    $handle = fopen($fullp, "r");  // Opens file in read mode.
    /* The next few lines are dedicated to getting and cleaning the ntid value I wrote in the file. It is located at the beginning of
        * the file with this format, "13<br>". I need to get only the digits.*/
    $ntid = fread($handle,3);  // Reads 3 bytes, (a character is one byte), only from the file. 
    fclose($handle);  //closes the connection to file.
    $nti = str_replace("<", "", $ntid);  // Delete the "<" character.
    $nt = str_replace("b", "", $nti);  // Delete the "b" character.

    $where = "localhost";
    $user = "root";
    $password = "xxxx";
    $dbname = "new_notes";
    $pdo = new PDO("mysql:host=$where;dbname=$dbname", $user, $password);

    /* Because of the escaping problem, the best way to solve this is to use prepared statements. The $notes list is there for that.
        * The bindParam statement binds the $notes content to the variables.*/
    $notes = [ 
        'note' => $content,
        'ntid'=> $nt
    ];

    $stmt = $pdo->prepare("UPDATE notes SET note = :note WHERE ntid = :ntid");
    $stmt->bindParam(':ntid', $notes['ntid'], PDO::PARAM_INT);  // This last part is there because the value is a int.
    $stmt->bindParam(':note', $notes['note']);
    $stmt->execute();
}
?>

