<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>DATABASE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Mclds">
    <meta name="description" content="Database">
    <link rel="stylesheet" type="text/css" href="https://constantconstipation.club/css/index.css" media="screen">
</head>
<body>
    <div class="header">
        <?php include "https://constantconstipation.club/partials/header.php"; ?>
    </div>

    <div class="flex-container">
        <div class="column_left">
        </div>

        <div class="column_center">
            <div class="content">
                <div class="all_container">
                    <?php require "https://constantconstipation.club/actions/all.php"; ?>
                </div>

            </div>
        </div>

        <div class="column-right">
        </div>
        <?php include 'https://constantconstipation.club/partials/footer.php'; ?>
    </div>
    <script>
    if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
    }
    </script>     
    <script>

    if(typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", "https://constantconstipation.club/pages/database.php");
    }
    </script>
</body>
</html>
