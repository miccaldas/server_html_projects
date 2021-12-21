<?php 
$question = $_GET['query'];

$where = "localhost";
$user = "root";
$password = "xxxx";
$dbname = "notes";
$pdo = new PDO("mysql:host=$where;dbname=$dbname", $user, $password);    

$a=1;
$stmt = $pdo->prepare("SELECT ntid, title, k1, k2, k3, note, time FROM notes WHERE MATCH(title, k1, k2, k3, note, url) AGAINST ('$question')");
$stmt->execute();
$notes = $stmt->fetchAll();

foreach($notes as $note) 
{  
?>


<article class="cf ph3 ph5-ns pv5">
    <header class="fn fl-ns w-50-ns pr4-ns">
        <h1 class="f2 lh-title fw9 mb3 mt0 pt3 bt bw2"><?php echo $note['title']; ?>
        </h1>
        <h2 class="f3 mid-gray lh-litle">
        <form action"" method="get" target="_blank">
        <input type='hidden' id='tag_name' name='tag_name' value="<?php echo $note['k1']; ?>">
        <input type="submit"  value="<?php echo $note['k1']; ?>"  style="border-width:0 0 0 0">
        </form>
        <form action"" method="get" target="_blank">
        <input type='hidden' id='tag_name' name='tag_name' value="<?php echo $note['k2']; ?>">
        <input type="submit"  value="<?php echo $note['k2']; ?>"  style="border-width:0 0 0 0">
        </form>
        <form action"" method="get" target="_blank">
        <input type='hidden' id='tag_name' name='tag_name' value="<?php echo $note['k3']; ?>">
        <input type="submit"  value="<?php echo $note['k3']; ?>"  style="border-width:0 0 0 0">
         </form>
        </h2> 
        <time class="f6 ttu tracked gray"><?php echo $note['time']; ?></time>
    </header>
    <div class="fn fl-ns w-50-ns">
        <p class="normal f5 lh-copy measure-wide mt0-ns pt0"><?php echo $note['note']; ?>
        </p>
    </div>
</article>
<br>


<?php } ?>

