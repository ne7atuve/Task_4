<?php

$blocks = [
[ 
    "is_first_item" => true,
    "is_last_item" => true,
    "parameter" => "My Tasks",
    "result" => "130 / 500",
    "color" => "bg-fusion-400",
    "width" => "65%",
    "aria-valuenow" => "65",
    "aria-valuemin" => "0",
    "aria-valuemax" => "100"
],

[
    "is_first_item" => false,
    "is_last_item" => true,
    "parameter" => "Transfered",
    "result" => "440 TB",
    "color" => "bg-success-500",
    "width" => "34%",
    "aria-valuenow" => "34",
    "aria-valuemin" => "0",
    "aria-valuemax" => "100"

],

[
    "is_first_item" => false,
    "is_last_item" => true,
    "parameter" => "Bugs Squashed",
    "result" => "77%",
    "color" => "bg-info-400",
    "width" => "77%",
    "aria-valuenow" => "77",
    "aria-valuemin" => "0",
    "aria-valuemax" => "100"
],

[
    "is_first_item" => false,
    "is_last_item" => false,
    "parameter" => "User Testing",
    "result" => "7 days",
    "color" => "bg-primary-300",
    "width" => "84%",
    "aria-valuenow" => "84",
    "aria-valuemin" => "0",
    "aria-valuemax" => "100"
],
];


?>


<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                           <?php foreach($blocks as $list): ?>
                            <div class="d-flex <?php if ($list['is_first_item']) echo 'mt-2'; ?>">
                                    <?php echo $list["parameter"]; ?>
                                    <span class="d-inline-block ml-auto"><?php echo $list["result"]; ?></span>
                            </div>
                            <div class="progress progress-sm <?php if ($list['is_last_item']) echo 'mb-g'; else echo 'mb-3'; ?>">
                                <div class="progress-bar <?php echo $list["color"]; ?>" 
                                    role="progressbar" 
                                    style="width: <?php echo $list["width"]; ?>" 
                                    aria-valuenow="<?php echo $list["aria-valuenow"] ?>"
                                    aria-valuemin="0" 
                                    aria-valuemax="<?php echo $list["aria-valuemax"] ?>"></div>
                                </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>

<!-- <div class="panel-container show">
                        <div class="panel-content">
                          <?php foreach ($blocks as $list): ?>
                            <div class="d-flex <?php if ($list['first_blocks']) echo 'mt-2'; ?>">
                              <?php echo $list["parameter"]; ?>
                              <span class="d-inline-block ml-auto"><?php echo $list['result']; ?></span>
                            </div>
                            <div class="progress progress-sm <?php if ($list['last_blocks']) echo 'mb-g'; else echo 'mb-3'; ?>">
                              <div class="progress-bar <?php echo $list['color']; ?>" 
                                   role="progressbar"
                                   style="width: <?php echo $list['width']; ?>;" 
                                   aria-valuenow="<?php echo $list['aria-valuenow']; ?>"
                                   aria-valuemin="<?php echo $list['aria-valuemin']; ?>"
                                   aria-valuemax="<?php echo $list['aria-valuemax']; ?>">
                                </div>
                            </div>
                          <?php endforeach; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </main> -->
