<!DOCTYPE html>
<html>
    <head>
        <title>Bookmarks</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Mclds">
    <meta name="description" content="bookmark manager">
    <!--<link href="https://unpkg.com/cirrus-ui" type="text/css" rel="stylesheet"/>-->
    <link href="css/main.css" type="text/css" rel="stylesheet"/>
    <script src="https://kit.fontawesome.com/a2553326d6.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <script src="css/static/confirmation.js"></script>
    <script type="text/javascript">confirmation()</script>
    <?php include 'resources/header.php' ?>
 <div class="flex-container">
        <div class="col1" style="flex-grow:1"></div>
        <div class="col2" style="flex-grow:9">
            <?php require 'actions/add.php' ?>
        <div class="col3" style="flex-grow:1"></div>
    </body>
    <?php include 'resources/footer.php' ?>
 </div>
</html>
