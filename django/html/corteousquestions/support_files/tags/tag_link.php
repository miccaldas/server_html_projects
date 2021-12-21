<?php
$q = $_REQUEST["q"];

$where = "localhost";
$user = "root";
$password = "xxxx";
$dbname = "notes";
$pdo = new PDO("mysql:host=$where;dbname=$dbname", $user, $password); 

$stmt = $pdo->prepare("SELECT ntid, title, note FROM notes WHERE MATCH(title, k1, k2, k3, note, url) AGAINST ('$q' IN NATURAL LANGUAGE MODE)");
$stmt->execute();
$notes = $stmt->fetchAll();
echo '<div id="tag_results" class="center flex mw6 dib ba pa2">';
echo '<div class="pa3 pa5-ns mt0">';
echo '<ul class="list pl0 measure-wide-l center">';
foreach($notes as $note) 
{
    echo '<li class="lh-title-l pv3 ba bl-0 bt-0 br-0 b--dotted b--black-30 mb5">';
    echo '<p class="f4">'; echo $note['ntid']; echo "<br>";
    echo $note["title"]; echo "</p><br>";
    echo "<br>"; 
    echo '<p class="normali f6 f5-ns mv0 mb1"'; echo $note["note"]; 
    echo "</li>";
}
?>

