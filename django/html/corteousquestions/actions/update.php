<?php 
$ntid = $_GET['ntid'];
$column = $_GET['clmn_name'];
$change = $_GET['chng'];

$where = "localhost";
$user = "root";
$password = "xxxx";
$dbname = "notes";
$pdo = new PDO("mysql:host=$where;dbname=$dbname", $user, $password);    

$stmt = $pdo->prepare("UPDATE notes SET $column = '$change' WHERE ntid = $ntid");
$stmt->execute();

?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <title>UPDATE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Mclds">
    <meta name="description" content="Update Page">
    <link rel="stylesheet" type="text/css" href="https://corteousquestions.club/css/tachyons.css" media="screen">
    <link rel="stylesheet" type="text/css" href="https://corteousquestions.club/css/index.css" media="screen">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <meta http-equiv="refresh" content="1800">
</head>
<body class="vh-100 pa0 ma0 sans-serif roboto f4 fw6 bg-near-white">
    <div id="page_container" class="relative min-h-100 overflow-hidden db">
        <div id="content_wrap" class="min-h-100 pb1">
            <?php require "../partials/header_update.php"; ?>
            <div id="top-spacer" class="h1-l mt0 mb7-l pb0">
            </div>

            <div id="flex-container" class="flex mt=2 mb=2">
                <div id="col1" class="flex flex-row items-center self-center justify-center content-center w-10 order-0">
                </div>

                <div id="col2" class="flex flex-column items-center self-center justify-center content-center w-80 order-1">
                    <h1 class='f-headline lh-solid'>The Database Was Successfully Updated.</h1>
                </div>

                 <div id="col3" class="flex-row items-center self-center justify-center content-center w-10 order-2">
                </div>
            </div>
        </div>
        <footer class="bg-near-black white-80 pvo pv1-l ph4 bottom-0 absolute w-100">
            <small class="f7-ns db tc">© 2021 MCLDS. All Rights Reserved ❰❱ mclds@protonmail.com</small>
        </footer> 
    </div>
</body>
</html>

