<?php 
error_reporting(E_ALL ^ E_WARNING); 
require $_SERVER['DOCUMENT_ROOT']."../ED-Oasis/vendor/autoload.php";

use App\model\Mform;
$formObj= new Mform;

// $ext=end(explode("." , $_FILES['lp_file_name']['name']));
// echo $ext;
// var_dump ($_FILES);

//$_FILES=[ชื่อที่รับค่าrequestมา]= [tmp_name],[name],[size],[type],[error]

if($_FILES['lp_file_name']['tmp_name']){
    $File_name ="/ED-Oasis/upload/" . $_FILES['lp_file_name']['name'];

    move_uploaded_file($_FILES['lp_file_name']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].$File_name);
}

if ($_REQUEST['action']=='delete') {
    $form =$formObj->getformbyid($_REQUEST['id']);
    if($form['lp_file_id']){
        unlink($_SERVER['DOCUMENT_ROOT'].$form['lp_file_id']);
    };
    $formObj->deleteform($_REQUEST['id']);
    header("location:./profile.php?msg=delete suscessfully");

}elseif ($_REQUEST['action']=='edit') {
    $form = $_REQUEST;
    unset($form['action']);

    if($_FILES['lp_file_name']['tmp_name']){
        if ($_SERVER['DOCUMENT_ROOT']. $form['lp_file_id']){

            unlink($_SERVER['DOCUMENT_ROOT']. $form['lp_file_id']);
        }
        $form['lp_file_id'] = $File_name;
    };

    $formObj->updateform($form);
    header("location:./profile.php?msg=update suscessfully");

}elseif ($_REQUEST['action']=='add') {
    $form = $_REQUEST;
    print_r($form);
    
    unset($form['action']);
    unset($form['id']);

    $form['lp_file_id'] = $File_name;
    $formObj->addform($form);
    

    header("location:./profile.php?msg=create suscessfully");

};

?>