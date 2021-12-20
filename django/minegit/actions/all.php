<?php
        $where = "localhost";
        $user = "root";
        $password = "xxxx";
        $dbname = "bkmks";
        $pdo = new PDO("mysql:host=$where;dbname=$dbname", $user, $password);

        $a=1;
        $stmt = $pdo->prepare("SELECT * FROM bkmks ORDER BY RAND()");
        $stmt->execute();
        $users = $stmt->fetchAll();
        foreach($users as $user)
        {
        ?>
        <div class="title" id="all_title">
            <div class="all_list_font_size"><?php echo "# - "; echo $user["title"]; ?></div>
            <div class="all_list_font_size"><a href="<?php echo $user['link'] ?>" target="_blank"><?php echo $user['comment'] ?></a></div>
            <br>
            <br>
        </div> 
<?php } ?>

