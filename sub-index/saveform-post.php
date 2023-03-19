<?php 
error_reporting(E_ALL ^ E_WARNING); 
require $_SERVER['DOCUMENT_ROOT']."../ED-Oasis/vendor/autoload.php";

use App\model\Mpost;
$formObj= new Mpost;

// $ext=end(explode("." , $_FILES['lp_file_name']['name']));
// echo $ext;
// var_dump ($_FILES);

//$_FILES=[ชื่อที่รับค่าrequestมา]= [tmp_name],[name],[size],[type],[error]

if($_FILES['post_file_name']['tmp_name']){
    $File_name ="/ED-Oasis/upload_cover_image/" . $_FILES['post_file_name']['name'];

    move_uploaded_file($_FILES['post_file_name']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].$File_name);
}

if ($_REQUEST['action']=='delete') {
    $form =$formObj->getpostbyid($_REQUEST['id']);
    if($form['post_file_id']){
        unlink($_SERVER['DOCUMENT_ROOT'].$form['post_file_id']);
    };
    $formObj->deletepost($_REQUEST['id']);
    header("location:./all-post.php?msg=delete suscessfully");

}elseif ($_REQUEST['action']=='edit') {
    $form = $_REQUEST;
    unset($form['action']);

    if($_FILES['post_file_name']['tmp_name']){
        if ($_SERVER['DOCUMENT_ROOT']. $form['post_file_id']){

            unlink($_SERVER['DOCUMENT_ROOT']. $form['post_file_id']);

        }
        $form['post_file_id'] = $File_name;
    };
    print_r($form);
    $formObj->updatepost($form);
    header("location:./all-post.php?msg=update suscessfully");

}elseif ($_REQUEST['action']=='add') {
    $form = $_REQUEST;
    
    unset($form['action']);
    unset($form['id']);

    $form['post_file_id'] = $File_name;
    $formObj->addpost($form);
    

    header("location:./detail-post.php?msg=create suscessfully");

};

?>