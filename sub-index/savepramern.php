<?php 
error_reporting(E_ALL ^ E_WARNING); 
require $_SERVER['DOCUMENT_ROOT']."../ED-Oasis/vendor/autoload.php";

use App\model\Mform;
use App\Model\Mpramern;

$formObj= new Mpramern;


if ($_REQUEST['action']=='delete') {
    $formObj->deletepramern($_REQUEST['id']);
    header("location:./all-post.php?msg=delete suscessfully");

}elseif ($_REQUEST['action']=='edit') {
    $form = $_REQUEST;
    unset($form['action']);

    $formObj->updatepramern($form);
    header("location:./all-post.php?msg=update suscessfully");

}elseif ($_REQUEST['action']=='add') {
    $form = $_REQUEST;
    
    unset($form['action']);
    unset($form['id']);

    $formObj->addpramern($form);
    header("location:./all-post.php?msg=create suscessfully");
};

?>