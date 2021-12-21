<!DOCTYPE html>
<html>
<head>
    <title>SEARCH</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Mclds">
    <meta name="description" content="Search Page">
    <link rel="stylesheet" type="text/css" href="https://corteousquestions.club/css/tachyons.css" media="screen">
    <meta http-equiv="refresh" content="1800">
</head>
<body class="vh-100 pa0 ma0 sans-serif roboto f4 fw6 dark-gray bg-near-white">
    <div id="page_container" class="relative min-h-100 overflow-hidden db">
        <div id="content_wrap" class="pb3">
            <?php require "/var/www/html/corteousquestions/partials/header.php"; ?>
            <div id="top-spacer" class="h4 mt0.5 mb4">
            </div>

            <div id="flex-container" class="flex flex-column mt=2 mb=2">
                <div id="col1" class="flex flex-row items-center self-center justify-center content-center w-10 order-0">
                </div>

                <div id="col2" class="flex flex-column items-center self-center justify-center content-center w-80 order-1">
                    <?php require "../forms/search_form.php"; ?>
                    <br>
                    <?php require "../actions/search.php"; ?> <?php

                    $tag = $_GET["tag_name"];
                    $where = "localhost";
                    $user = "root";
                    $password = "xxxx";
                    $dbname = "notes";
                    $pdo = new PDO("mysql:host=$where;dbname=$dbname", $user, $password);

                    $stmt = $pdo->prepare("SELECT ntid, title, note FROM notes WHERE MATCH(title, k1, k2, k3, note, url) AGAINST ('$tag')");
                    $stmt->execute();
                    $notes = $stmt->fetchAll();
                    foreach($notes as $note)
                    {
                    ?>
                    <div id="tag_results_wrapper" name="tag- class=" center="" flex="" flex-column="" mw6="" dib="" ba="" pa2="" bb-0="" bt-0="" bl-0="">
                        <div class="pa3 pa5-ns mt0">
                            <ul class="list pl0 measure-wide-l center">
                                <li class="lh-title-l pv3 ba bl-0 bt-0 br-0 b--dotted b--black-30 mb5">
                                    <p class="f4"><?php echo $note['ntid']; ?>
                                    <br>
                                    <?php echo $note["title"]; ?>
                                    </p>

                                    <p class="normal f6 f5-ns mv0 mb1"><?php echo $note["note"]; ?>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <?php } ?>
                    </div>

                    <div id="col3" class="flex flex-row items-center self-center justify-center content-center w-10 order-2">
                    </div>
                </div>
            </div>

            <footer class="bg-near-black white-80 pvo pv1-l ph4 bottom-0 absolute w-100">
                <small class="f7-ns db tc">© 2021 MCLDS. All Rights Reserved ❰❱ mclds@protonmail.com"</small>
            </footer>
        </div>
    </div>
</body>
</html>
