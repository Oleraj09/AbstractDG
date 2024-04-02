<?php
require 'database.php';
// ------------Show Items---------
$items = "SELECT * FROM `items`";
$icons = $conn->query($items);
$item = mysqli_num_rows($icons);

$itemx = "SELECT * FROM `items` ORDER BY id DESC";
$iconx = $conn->query($itemx);
// ------------Show Teams---------
$teamall = "SELECT * FROM `teams`";
$teamlopp = $conn->query($teamall);
$teams = $conn->query($teamall);
$row = mysqli_num_rows($teams);

$teamalls = "SELECT * FROM `teams` ORDER BY id DESC";
$teamlopps = $conn->query($teamalls);
// --------------Paginate-----------
$limit = "6";
if (isset($_GET["pag"])) {
    $pn  = $_GET["pag"];
} else {
    $pn = 1;
};
$start_from = ($pn - 1) * $limit;
$sql = "SELECT * FROM teams LIMIT $start_from, $limit";
$rs_result = $conn->query($sql);
$rows = mysqli_num_rows($rs_result);
// ------------Insert Teams---------
if(isset($_POST['team-submit'])){
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $bio = $_POST['bio'];
    $directory = "uploads/Teams/";
    $image = $directory.basename($_FILES["image"]["name"]);
    if(!empty($image)){
        move_uploaded_file($_FILES["image"]["tmp_name"], $image);
        $team = "INSERT INTO teams (`name`, `designation`, `bio`, `image`) VALUES('$name','$designation','$bio','$image')";
        $conn->query($team);
        header('Location: admin.php');
    }
}
// ------------Insert Item---------
if(isset($_POST['item-submit'])){
    $name = $_POST['name'];
    $directory = "uploads/Items/";
    $icon = $directory.basename($_FILES["icon"]["name"]);
    if(!empty($icon)){
        move_uploaded_file($_FILES["icon"]["tmp_name"], $icon);
        $item = "INSERT INTO items (`name`, `icon`) VALUES('$name','$icon')";
        $conn->query($item);
        header('Location: capabilities.php');
    }
}


// -------------------Delete-----------------
if (isset($_GET['type']) && $_GET['type'] == 'delete') {
    if (isset($_GET['page']) && $_GET['page'] == 'admin'){
        $id = $_GET['id'];
        $delete = "DELETE FROM `teams` WHERE `id`='$id'";
        $conn->query($delete);
        header("Location: {$_SERVER['PHP_SELF']}");
    }
    if (isset($_GET['page']) && $_GET['page'] == 'cap'){
        $id = $_GET['id'];
        $delete = "DELETE FROM `items` WHERE `id`='$id'";
        $conn->query($delete);
        header("Location: {$_SERVER['PHP_SELF']}");
    }
}
// --------------------EDIT TEAMS----------------------
$button = 0;
$name = '';
$designation = '';
$bio = '';
if (isset($_GET['page']) && $_GET['page']=='admin') {
    $id = $_GET['id'];
    $find = "SELECT * from `teams` WHERE id='$id'";
    $user = $conn->query($find);
    $result = $user->fetch_assoc();
    $name = $result['name'];
    $image = $result['image'];
    $designation = $result['designation'];
    $bio = $result['bio'];
    $button = 1;
}
if(isset($_POST['team-update'])){
    $id = $_GET['id'];
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $bio = $_POST['bio'];
    $directory = "uploads/Teams/";
    if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0){
        $image = $directory . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $image);
        $team = "UPDATE teams SET name='$name', designation='$designation', bio='$bio', image='$image' WHERE id=$id";
    } else {
        $team = "UPDATE teams SET name='$name', designation='$designation', bio='$bio' WHERE id=$id";
    }
    $conn->query($team);
    header('Location: admin.php');
}

// -------------------EDIT ICONS-------------
$button1 = 0;
$title = '';
$icon ='';
if (isset($_GET['page']) && $_GET['page']=='cap') {
    $id = $_GET['id'];
    $find = "SELECT * from `items` WHERE id='$id'";
    $user = $conn->query($find);
    $result = $user->fetch_assoc();
    $title = $result['name'];
    $icon = $result['icon'];
    $button1 = 1;
}
if(isset($_POST['item-update'])){
    $id = $_GET['id'];
    $title = $_POST['name'];
    $directory = "uploads/Teams/oleraj,jpg";
    if(isset($_FILES["icon"]) && $_FILES["icon"]["error"] == 0){
        $icon = $directory.basename($_FILES["icon"]["name"]);
        move_uploaded_file($_FILES["icon"]["tmp_name"], $icon);
        $item = "UPDATE items SET name='$title', icon='$icon' WHERE id=$id";
    } else {
        $item = "UPDATE items SET name='$title' WHERE id=$id";
    }
    $conn->query($item);
    header('Location: capabilities.php');
}
?>