<?php
error_reporting(E_ALL ^ E_WARNING);
require $_SERVER['DOCUMENT_ROOT'] . "../ED-Oasis/vendor/autoload.php";
require $_SERVER['DOCUMENT_ROOT'] . "../ED-Oasis/auth/auth.php";


use App\model\user;
use App\model\Mform;

$userObj = new user;
$formObj = new Mform;


if ($_REQUEST['action'] == 'edit') {
    $formbyid = $formObj->getformByid($_REQUEST['id']);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบกรอกสิ่งที่ต้องการในการจัดกิจกรรมการเรียนรู้</title>
    <link rel="stylesheet" href="../dist/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/font.css">
</head>
<body class="kanit">
    <?php 
        $user = $userObj->getuser($_SESSION['user_id']);
    ?>
    <main class="h-full bg-blue-100 p-6  mx-auto  ">
        <!-- Header -->
        <section class="w-1/2 mx-auto bg-white p-6 rounded-lg shadow-lg">
            <div class="container text-blue-800 mb-6">
                <b><h1 class="text-4xl">กรอกสิ่งที่ต้องการในการจัดกิจกรรมการเรียนรู้</h1></b>
                <p>กรอกตามรายละเอียดที่กำหนด</p>
            </div>
            <!-- Form -->
            <div>
                <form action="" method="POST" enctype="multipart/form-data">
                    
                </form>
            </div>
        </section>

    </main>


    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>
</html>