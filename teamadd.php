<?php
    include "query.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Add Team Member :: Abstract</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/submit.css">
    <meta name="robots" content="noindex, follow">
</head>

<body>
    <div class="wrapper">
        <div class="inner">
            <img src="https://colorlib.com/etc/regform/colorlib-regform-26/images/image-1.png" alt class="image-1">
            <form action="" method="POST" enctype='multipart/form-data'>
                <h3>Want to <?= $button==0 ? 'SUBMIT' : 'UPDATED' ?> Member?</h3>
                <div class="form-holder">
                    <input type="text" class="form-control" placeholder="Name" name="name" value="<?= $name ?>"
                        required>
                </div>
                <div class="form-holder">
                    <input type="text" class="form-control" placeholder="Designation" name="designation"
                        value="<?= $designation ?>" required>
                </div>
                <div class="form-holder">
                    <!-- <input type="text" class="form-control" placeholder="Bio" name="bio" value="<?= $bio ?>" required> -->
                    <textarea name="bio" id="editor" cols="40" rows="10"><?= $bio ?></textarea>
                </div>
                <div class="form-holder">
                    <input type="file" class="" placeholder="Photo" name="image" <?= $button == 0 ? 'required' : ''?>>
                </div>
                <div class="form-holder <?= $image == NULL ? "d-none" : "" ?>">
                    <img style="height:100px;width:100px" src="./<?= $image ?>" alt="">
                </div>
                <input type="submit" name="<?= $button == 0 ? 'team-submit' : 'team-update'?>"
                    value="<?= $button == 0 ? 'SUBMIT' : 'UPDATES'?>">
                <a href="admin.php" class="button">GO BACK</a>
            </form>
            <img src="https://colorlib.com/etc/regform/colorlib-regform-26/images/image-2.png" alt class="image-2">
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js"></script>
    <script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
    </script>
</body>

</html>