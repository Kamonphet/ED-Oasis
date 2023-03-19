<!-- class -->
<?php require $_SERVER['DOCUMENT_ROOT'] . "../ED-Oasis/vendor/autoload.php";

use App\Model\user;

$user_obj= new user;
$result=$user_obj->createUser($_REQUEST);

if ($result) {
    header("location: login.php?msg=suscess");
}else{
    header("location: register.php?msg=error");
}
?>