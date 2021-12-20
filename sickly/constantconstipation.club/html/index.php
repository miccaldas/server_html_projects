<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>HP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Mclds">
    <meta name="description" content="Homepage">
    <link rel="stylesheet" type="text/css" href="css/index.css" media="screen">
</head>
<body>
    <div class="header">
        <?php include "partials/header.php"; ?>
    </div>

    <div class="flex-container">
        <div class="column_left">
        </div>

        <div class="column_center">
            <div class="content">
                <div class="pwdform_container">
                    <?php require "forms/pwd_form.php"; ?>
                </div>

                <div class="pwdaction">
                    <?php require "actions/generator.php"; ?>
                </div>
            </div>
        </div>

        <div class="column-right">
        </div>
        <?php include 'partials/footer.php'; ?>
    </div>
    <!-- https://tinyurl.com/tonwks2 -->
    <script>
    if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
    }
    </script> <!-- https://tinyurl.com/yyeckra6 -->
     
    <script>

    if(typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", "https://constantconstipation.club");
    }
    </script>
</body>
</html>
