<!-- <script src="../js/jquery-3.6.0.min.js"></script> -->
<?php require $_SERVER['DOCUMENT_ROOT']."/CED312/vendor/autoload.php"; 
use App\Model\user;

$user_obj= new user;

$result=$user_obj->checkuser($_REQUEST);



if ($result) {
    header("location: /CED312/index/main_menu.php?msg=sussess");
}else{
    header("location: login.php?msg=error");
}
?>
