<?php require 'support_files/corrected_list.php';

if (isset($_GET['length'])) {

    $length = $_GET['length'];

    $i = 0;
    $pwd_keys = array();
    $results = array();
    $mail = " ";

    while ($i++ < $length)
    {
        $pass = rand(0, 92);
        $pwd_keys[$i] = $pass;
    }

    foreach($pwd_keys as $key => $key_value)
    {
        $item = $keys[$key_value];
        while ($i++ < $length)
            $results[$i] = $item;
        $mail .= $item;
    }
  
    echo "<h1 class='message'>Your New Password is:</h1>";
    echo "<h1 class='password'>$mail</h1>";
    echo "<form action='' method='get'>";
    echo "<input type='hidden' id='pwd' name='pwd' value=$mail></input>";
    echo "<input type='email' id='email' name='email' placeholder='Password in Email'></input>";
    echo "<input type='submit' value='Send'></input>";
    echo "</form>";

     function mailCreator() {
        if ($_GET) {
            $to = $_GET["email"];
            $from = "root@constantconstipation.club";
            $message = $_GET['pwd'];
            $subject = "New Password";
            $headers = "From: " . $from;
            mail($to,$subject,$message,$headers);
            }
            else { echo "There's nothing here."; };
        }
    mailCreator();
    }
?>

