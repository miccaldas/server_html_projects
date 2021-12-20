<?php
        if ($_GET['submit'])
          {
            $title = $_GET['title'];
            $comment = $_GET['comment'];
            $link = $_GET['link'];
            $k1 = $_GET['k1'];
            $k2 = $_GET['k2'];
            $k3 = $_GET['k3'];

            $where = "localhost";
            $user = "root";
            $password = "xxxx";
            $dbname = "bkmks";
            $pdo = new PDO("mysql:host=$where;dbname=$dbname", $user, $password);

            $a=1;
            $stmt1 = $pdo->prepare("INSERT INTO bkmks (title, comment, link, k1, k2, k3) VALUES ('$title', '$comment', '$link', '$k1', '$k2', '$k3')");
            $stmt1->execute();  {      
?>
<?php
}
?>
<?php } ?>
