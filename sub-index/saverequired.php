<?php 
error_reporting(E_ALL ^ E_WARNING); 
require $_SERVER['DOCUMENT_ROOT']."../ED-Oasis/vendor/autoload.php";

use App\model\Mrequired;
$reqObj= new Mrequired;


if ($_REQUEST['action']=='add') {
    $req = $_REQUEST;
    // print_r($form);
    
    unset($req['action']);
    unset($req['id']);

    $reqObj->addrequire($req);
    

    header("location:../index/main_menu.php?msg=save required sucessfully");

};

?>