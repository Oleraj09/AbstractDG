<?php
    include "query.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Add Capabilities :: Abstract</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/submit.css">
    <meta name="robots" content="noindex, follow">
</head>

<body>
    <div class="wrapper">
        <div class="inner">
            <img src="https://colorlib.com/etc/regform/colorlib-regform-26/images/image-1.png" alt class="image-1">
            <form action="" method="POST" enctype='multipart/form-data'>
                <h3>Want to <?= $button1==0 ? 'SUBMIT' : 'UPDATED' ?> Item?</h3>
                <div class="form-holder">
                    <input type="text" class="form-control" placeholder="Name" name="name" value="<?= $title ?>"
                        required>
                </div>
                <div class="form-holder">
                    <input type="file" class="" placeholder="Photo" name="icon" <?= $button1 == 0 ? 'required' : ''?>>
                </div>
                <div class="form-holder">
                    <div class="img-soze <?= $icon == NULL ? "d-none" : "" ?>" style="height:100px;width:100px">
                        <img style="height:100%;width:100%" src="./<?= $icon ?>" alt="">
                    </div>
                </div>
                <input type="submit" name="<?= $button1 == 0 ? 'item-submit' : 'item-update'?>"
                    value="<?= $button1 == 0 ? 'SUBMIT' : 'UPDATES'?>">
                <a href="capabilities.php" class="button">GO BACK</a>
            </form>
            <img src="https://colorlib.com/etc/regform/colorlib-regform-26/images/image-2.png" alt class="image-2">
        </div>
    </div>
</body>

</html>