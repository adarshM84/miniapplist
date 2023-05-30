<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini App List - Adarsh S. Mishra</title>
    <link rel="stylesheet" href="css/custom.css?v<?php echo rand(); ?>">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css?v<?php echo rand(); ?>">
    <link rel="icon" type="image/x-icon" href="images/house.svg">

</head>

<body onload="loadOperation()" id="documntBody" onclick="playBackMusic()">
    <script src="js/colorArray.js?v<?php echo rand(); ?>"></script>
    <script src="js/common.js?v<?php echo rand(); ?>"></script>

    <div class="container">
        <div class="row">
            <div class="col-3 mt-35 text-center" title="HOME">
                <a href="index.php">
                    <svg xmlns="images/house.svg" fill="currentColor" class="topSvg" width="80" height="80" class="bi bi-house-heart w-60" viewBox="0 0 16 16">
                        <path d="M8 6.982C9.664 5.309 13.825 8.236 8 12 2.175 8.236 6.336 5.309 8 6.982Z" />
                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.707L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.646a.5.5 0 0 0 .708-.707L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                    </svg>
                </a>
            </div>
            <div class="col-6">
                <h1 class="mainTitile" id="mainTitile">Mini App List</h1>
            </div>
            <div class="col-3 mt-35 text-center" title="SETTING" id="settingImageCont">
                <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    <svg xmlns="images/setting.svg" fill="currentColor" id="settingImage" class="topSvg" width="80" height="80" class="bi bi-gear-fill w-60" viewBox="0 0 16 16">
                        <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- setting side bar -->

        <div class="offcanvas offcanvas-end opacity-75" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h1>
                    Settings
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">

                <h5>Background Color</h5>
                <select id="backGroundColorList" class="form-control w-50" onchange="changeBackColor()">
                    <option value="white">WHITE</option>
                </select><br>

                <h5>Heading Color</h5>
                <select id="headingColorList" class="form-control w-50" onchange="changeHeadColor()">
                    <option value="black" selected>BLACK</option>
                </select><br><br>

                <!-- <button class="btn btn-primary">Save</button> -->

            </div>
        </div>
        