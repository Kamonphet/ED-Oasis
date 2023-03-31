<!-- <script src="../js/jquery-3.6.0.min.js"></script> -->
<?php require $_SERVER['DOCUMENT_ROOT'] . "../ED-Oasis/vendor/autoload.php";
use App\Model\user;

$user_obj= new user;

$result=$user_obj->checkuser($_REQUEST);



if ($result) {
    header("location: /ED-Oasis/index/main_menu.php?msg=success");
}else{
    header("location: login.php?msg=error");
}
?>
