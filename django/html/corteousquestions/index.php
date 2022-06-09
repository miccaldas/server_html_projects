
    <!DOCTYPE html>
    <html>
    <head>
        <title>HP</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Mclds">
        <meta name="description" content="Homepage">
        <link rel="stylesheet" type="text/css" href="css/tachyons.css" media="screen">
        <meta http-equiv="refresh" content="1800">
    </head>
    <body class="vh-100 pa0 ma0 sans-serif roboto f4 fw6 dark-gray bg-near-white">
        <div id="page_container" class="relative min-h-100 overflow-hidden db">
            <div id="content_wrap" class="pb3">
                <?php require "partials/header.php"; ?>
                <div id="top-spacer" class="h4 mt0.5 mb4">
                </div>
            

    <div id="flex-container" class="flex mt=2 mb=2">
        <div id="col1" class="flex-row items-center self-center justify-center content-center w-10 order-0">
    </div>
        <div id="col2" class="flex-row items-center self-center justify-center content-center w-80 order-1">
          <script>
                    function showResults(str) {
                    if (str.length == 0) {
                    document.getElementById("results_wrapper").innerHTML = "";
                    return;
                    } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("results_wrapper").innerHTML = this.responseText;
                    }
                    };
                    xmlhttp.open("GET", "/support_files/tags/tag_link.php?q=" + str, true);
                    xmlhttp.send();
                    }
                    }
                    </script>
                      
        