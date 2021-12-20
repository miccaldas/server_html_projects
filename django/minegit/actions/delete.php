<?php

            $delete = $_GET['delete'];
            $where = "localhost";
            $user = "root";
            $password = "xxxx";
            $dbname = "bkmks";
            $pdo = new PDO("mysql:host=$where;dbname=$dbname", $user, $password);
            $a=1;
            $stmt = $pdo->prepare("DELETE FROM bkmks WHERE id= $delete");
            $stmt->execute();
?>


