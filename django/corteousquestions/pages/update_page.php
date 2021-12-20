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
                    <h1 class='f1 lh-title mb6'>What Column Do You Want To Update?</h1>
                    <ul class="accordion">
                        <li class="accordion-item">
                            <input id="title_form" class="hide" type="checkbox"> 
                            <label for="title_form" id="title_label" class="accordion-label">Title</label>
                                <ul class="accordion-child">
                                    <li>
                                        <label>
                                             <form action="../actions/update.php" method="get" id="title_form">
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input
                                             class="bg-near-white b-mid-gray bl-0 br-0 bt-0 bb-4 pa3 ma2"
                                             type="number"
                                             id="title_id"
                                             name="ntid"
                                             placeholder="What is the id? ">
                                            </input>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input
                                             type="hidden"
                                             id="column_name"
                                             name="clmn_name"
                                             value="title">
                                            </input>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input
                                             class="bg-near-white b-mid-gray bl-0 br-0 bt-0 bb-4 pa3 ma2"
                                             type="text"
                                             id="title_change"
                                             name="chng"
                                             placeholder="What is the change?">
                                            </input>
                                        </label>

                                    <li>
                                        <label>
                                            <input class="f6 bg-near-black white-80 pa3 ma2 bw0" type="submit" value="Send"></submit>
                                        </label>
                                    </li>
                                              </form>
                                </ul>
                        </li>
                     
                        <li class="accordion-item">
                            <input id="k1_form" class="hide" type="checkbox">
                            <label for="k1_form" class="accordion-label">K1</label>
                                <ul class="accordion-child">
                                    <li>
                                        <label>
                                            <form action="../actions/update.php" method="get" id="k1_form">
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input
                                             class="bg-near-white b-mid-gray bl-0 br-0 bt-0 bb-4 pa3 ma2"
                                             type="number"
                                             id="k1_id"
                                             name="ntid"
                                             placeholder="What is the id?">
                                            </input>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input
                                             type="hidden"
                                             id="column_name"
                                             name="clmn_name"
                                             value="k1">
                                            </input>
                                        </label>
                                    </li>

                                    <li>
                                        <label>
                                            <input
                                             class="bg-near-white b-mid-gray bl-0 br-0 bt-0 bb-4 pa3 ma2"
                                             type="text"
                                             id="k1_change"
                                             name="chng"
                                             placeholder="What is the change?">
                                            </input>
                                        </label>
                                    </li>
                                        </label>
                                    <li>
                                        <label>
                                            <input class="f6 bg-near-black white-80 pa3 ma2 bw0" type="submit" value="Send"></submit>
                                        </label>
                                    </li>
                                            </form>
                                    </li>
                                </ul>
                        </li>

                    <li class="accordion-item">
                        <input id="k2_form" class="hide" type="checkbox">
                        <label for="k2_form" class="accordion-label">K2</label>
                            <ul class="accordion-child">
                                <li>
                                    <label>
                                        <form action="../actions/update.php" method="get" id="k2_form">
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input
                                         class="bg-near-white b-mid-gray bl-0 br-0 bt-0 bb-4 pa3 ma2"
                                         type="number"
                                         id="k2_id"
                                         name="ntid"
                                         placeholder="What is the id?">
                                       </input>
                                     </label>
                                </li>
                                    <li>
                                        <label>
                                            <input
                                             type="hidden"
                                             id="column_name"
                                             name="clmn_name"
                                             value="k2">
                                            </input>
                                        </label>
                                    </li>

                                <li>
                                    <label>
                                        <input
                                         class="bg-near-white b-mid-gray bl-0 br-0 bt-0 bb-4 pa3 ma2"
                                         type="text"
                                         id="k2_change"
                                         name="chng"
                                         placeholder="What is the change?">
                                        </input>
                                    </label>
                                </li> 
                                    <li>
                                        <label>
                                            <input class="f6 bg-near-black white-80 pa3 ma2 bw0" type="submit" value="Send"></submit>
                                        </label>
                                    </li>
                                         </form>
                                </li>
                            </ul>
                    </li>

                    <li class="accordion-item">
                        <input id="k3_form" class="hide" type="checkbox">
                        <label for="k3_form" class="accordion-label">K3</label>
                            <ul class="accordion-child">
                                <li>
                                    <label>
                                        <form action="../actions/update.php" method="get" id="k3_form">
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input
                                         class="bg-near-white  b-mid-gray bl-0 br-0 bt-0 bb-4 pa3 ma2"
                                         type="number"
                                         id="k3_id"
                                         name="ntid"
                                         placeholder="What is the id?">
                                        </input>
                                    </label>
                                </li>
                                    <li>
                                        <label>
                                            <input
                                             type="hidden"
                                             id="column_name"
                                             name="clmn_name"
                                             value="k3">
                                            </input>
                                        </label>
                                    </li>

                                <li>
                                    <label>
                                        <input
                                         class="bg-near-white  b-mid-gray bl-0 br-0 bt-0 bb-4 pa3 ma2"
                                         type="text"
                                         id="k3_change"
                                         name="chng"
                                         placeholder="What is the change?">
                                       </input>
                                    </label>
                                </li>
                                        </label>
                                    <li>
                                        <label>
                                            <input class="f6 bg-near-black white-80 pa3 ma2 bw0" type="submit" value="Send"></submit>
                                        </label>
                                    </li>
                                        </form>
                                </li>
                            </ul>
                    </li>

                    <li class="accordion-item">
                        <input id="note_form" class="hide" type="checkbox">
                        <label for="note_form" class="accordion-label">Note</label>
                            <ul class="accordion-child">
                                <li>
                                    <label>
                                        <form action="../actions/update.php" method="get" id="note_form">
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input
                                         class="bg-near-white  b-mid-gray bl-0 br-0 bt-0 bb-4 pa3 ma2"
                                         type="number"
                                         id="note_id"
                                         name="ntid"
                                         placeholder="What is the id? ">
                                       </input>
                                    </label>
                                </li>
                                    <li>
                                        <label>
                                            <input
                                             type="hidden"
                                             id="column_name"
                                             name="clmn_name"
                                             value="note">
                                            </input>
                                        </label>
                                    </li>

                                <li>
                                    <label>
                                       <input
                                        class="bg-near-white  b-mid-gray bl-0 br-0 bt-0 bb-4 pa3 ma2"
                                        type="text"
                                        id="note_change"
                                        name="chng"
                                        placeholder="What is the change?">
                                      </input>
                                    </label>
                                </li>
                                        </label>
                                    <li>
                                        <label>
                                            <input class="f6 bg-near-black white-80 pa3 ma2 bw0" type="submit" value="Send"></submit>
                                        </label>
                                    </li>
                                         </form>
                                </li>
                            </ul>
                        </ul>
                </div>
                </div>
            </div>
        </div>
        <footer class="bg-near-black white-80 pvo pv1-l ph4 bottom-0 absolute w-100">
            <small class="f7-ns db tc">© 2021 MCLDS. All Rights Reserved ❰❱ mclds@protonmail.com</small>
        </footer> 
    </div>
</body>
</html>
