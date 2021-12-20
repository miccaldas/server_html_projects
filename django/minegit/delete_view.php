<!DOCTYPE html>
<html>
    <head>
        <title>Bookmarks</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Mclds">
        <meta name="description" content="bookmark manager">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <!--<link href="https://unpkg.com/cirrus-ui" type="text/css" rel="stylesheet"/>-->
        <link href="css/main.css" type="text/css" rel="stylesheet"/>
        <script src="https://kit.fontawesome.com/a2553326d6.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php include 'resources/header.php' ?>
        <div class="flex-container">
            <div class="col1" style="flex-grow:1"></div>
            <div class="col2" style="flex-grow:9">
                <?php include 'forms/delete_form.php' ?>
                 <div class="add_message" id="del_msg" style="display:none"><h2>ENTRY SUCCESSFULLY DELETED FROM THE DATABASE</h2></div>
                   </div>
            <div class="col3" style="flex-grow:1"></div>
            <?php include 'resources/footer.php' ?>
            <?php include 'actions/delete.php' ?>
        </div>
        <script>
            $("#formdel").keyup(function(event) {
                if (event.keyCode === 13) {
                    $("#myButton").click();
    }
            });
 $("#myButton").click(function() {
  alert("Entry deleted successfully.");
 
            });
</script>
</body>
</html>

