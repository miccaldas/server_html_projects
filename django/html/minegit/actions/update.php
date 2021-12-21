<?php

            $id = $_GET['id'];
            $columns = $_GET['columns'];
            $update = $_GET['update'];
            $where = "localhost";
            $user = "root";
            $password = "xxxx";
            $dbname = "bkmks";
            $pdo = new PDO("mysql:host=$where;dbname=$dbname", $user, $password);
            $a=1;
            $stmt = $pdo->prepare("UPDATE bkmks SET $columns = '$update' WHERE id = $id");
            $stmt->execute();
             
?>



