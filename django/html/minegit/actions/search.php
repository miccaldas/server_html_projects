<?php
        if ($_GET['submit'])
          {
            $question = $_GET['Password'];
            $where = "localhost";
            $user = "root";
            $password = "xxxx";
            $dbname = "bkmks";
            $pdo = new PDO("mysql:host=$where;dbname=$dbname", $user, $password);
            $a=1;
            $stmt = $pdo->prepare("select title, comment, link from bkmks where match(title, comment, link, k1, k2, k3) against ('$question');");
            $stmt->execute();
            $users = $stmt->fetchAll();
            foreach($users as $user)
        {
?>
    <ul>
        <li><?php echo "# - "; echo $user["title"]; ?></li>
        <li><a href='<?php echo $user["link"]; ?>'><?php echo $user["comment"] ?></a></li>
    </ul>
<?php } ?>
<?php } ?>
 

