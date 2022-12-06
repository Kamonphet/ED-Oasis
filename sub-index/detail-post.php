<?php
error_reporting(E_ALL ^ E_WARNING);
require $_SERVER['DOCUMENT_ROOT'] . "../CED312/vendor/autoload.php";
require $_SERVER['DOCUMENT_ROOT'] . "../CED312/auth/auth.php";



use App\model\Mpost;


$postObj = new Mpost;

$ppost = $_REQUEST['post'];
$post=$postObj->getpostByid($ppost);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายละเอียดแผนการสอน</title>
    <link rel="stylesheet" href="../css/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/font.css">
</head>
<body class="kanit">
    <?php 
        require $_SERVER['DOCUMENT_ROOT'] . "/CED312/Index/navbar.php";
        if ($_GET['msg']=='create suscessfully') {
            echo '<div id="alert-3" class="flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
                    <svg class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                    สมัครสำเร็จ.
                    </div>
                    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300" data-dismiss-target="#alert-3" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
            ';
        }
    ?>
    <main class="h-full bg-blue-100 p-4 mx-auto">
        <section class="w-1/2 mx-auto bg-white p-6 rounded-lg shadow-lg">
            <!-- Heading -->
            <div class="flex">
                <div class="container text-blue-800 mb-6">
                    <b><h1 class="text-4xl mb-2"><?php echo $post['lp_name']; ?></h1></b>
                    <div class="flex">
                        <img class="h-8 w-8 mr-2 rounded-full" src="../img/logo.png" alt="">
                        <b><h1 class="text-xl">By </b><?php echo $post['user_sname']," ",$post['user_lname']; ?></h1>
                    </div>
                </div> 
                <div class="grid">
                    <a href="./all-post.php" class="text-gray-500 hover:text-blue-500">
                        <button class="flex item-center ">
                            <p>ย้อนกลับ</p>
                            <i class="fa-sharp fa-solid fa-arrow-right self-center"></i>
                        </button>                        
                    </a>


                </div>               
            </div>


            <!-- Content -->
            <div>
                <!-- วิชา -->
                <div>
                    <b><h1 class="text-lg ">รายวิชา : </b><?php echo $post['subject_name']; ?></h1>
                </div>
                <!-- ระดับชั้น -->
                <div>
                    <b><h1 class="text-lg  mb-2">ระดับชั้น : </b><?php echo $post['class_name']; ?></h1>
                </div>
                <!-- รายละเอียด -->
                <div class="mb-6">
                    <b><h1 class="text-lg  mb-2">รายละเอียด : </b></h1>
                    <img src="img/eiger-zoom-background.jpg" alt="">
                    <p>
                        <?php echo $post['lp_info']; ?>
                    </p>

                        
                </div>
                <!-- Comment -->
                <div>
                    <h4 class="text-xl mb-4 "><b>ความคิดเห็น (</b><?php echo"จำนวนความคิดเห็น"; ?><b>)</b> </h4>
                    <!-- 1 กล่องคอมเม้น -->
                    <div class="bg-gray-100 px-5 py-3 rounded-lg mb-6">
                        <div class="flex mb-1">
                            <img class="h-8 w-8 mr-2 rounded-full" src="../img/logo.png" alt="">
                            <h1 class="text-lg "><b><?php echo"Username"; ?></b></h1>
                        </div>
                        <div>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit possimus dignissimos quod deleniti eaque optio id officiis ipsam accusantium, tempora, ipsum autem illo aliquid. Reprehenderit debitis nam laborum exercitationem quam.</p>
                        </div>
                    </div>
                    <!-- กล่องคอมเม้น -->
                    <div class="bg-gray-100 px-5 py-3 rounded-lg mb-6">
                        <div class="flex mb-1">
                            <img class="h-8 w-8 mr-2 rounded-full" src="../img/logo.png" alt="">
                            <h1 class="text-lg "><b><?php echo"Username"; ?></b></h1>
                        </div>
                        <div>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit possimus dignissimos quod deleniti eaque optio id officiis ipsam accusantium, tempora, ipsum autem illo aliquid. Reprehenderit debitis nam laborum exercitationem quam.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>
    
    <!-- โพสต์อื่น ๆ  -->
    <section class="my-6">
        <div class=" container-fluid  bg-white p-6"> 
                <div class="mb-3">
                    <a href="feed_lp.php" class="text-gray-500 hover:text-blue-500"><b>แผนการสอนที่คุณอาจสนใจ</b></a> 
                </div>
                <div class="grid grid-cols-4">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="img/eiger-zoom-background.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <div class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white"> 
                                    <p><?php echo"ชื่อแผนการสอน"; ?></p>
                                </div>
                            </a>
                            <div class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                <div>
                                <p>รายวิชา : <b><?php echo"ชื่อวิชา"; ?></b></p>
                                </div>
                                <div>
                                <p>หน่วยการเรียนรู้ที่ : <b><?php echo"9999999999"; ?></b></p>
                                </div>
                                <div>
                                <p>เรื่อง : <b><?php echo"ของกู"; ?></b></p>
                                </div>
                                <div>
                                <p>ระดับชั้น : <b><?php echo"ชั้น"; ?></b></p>
                                </div>
                                <div>
                                <p>ผู้จัดทำ : <b><?php echo"ชื่อคนเขียน"; ?></b></p>
                                </div>

                            </div>
                            <a href="detail_post.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                ดูรายละเอียด
                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </a>
                        </div>
                    </div>
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="img/eiger-zoom-background.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <div class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white"> 
                                    <p><?php echo"ชื่อแผนการสอน"; ?></p>
                                </div>
                            </a>
                            <div class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                <div>
                                <p>รายวิชา : <b><?php echo"ชื่อวิชา"; ?></b></p>
                                </div>
                                <div>
                                <p>หน่วยการเรียนรู้ที่ : <b><?php echo"9999999999"; ?></b></p>
                                </div>
                                <div>
                                <p>เรื่อง : <b><?php echo"ของกู"; ?></b></p>
                                </div>
                                <div>
                                <p>ระดับชั้น : <b><?php echo"ชั้น"; ?></b></p>
                                </div>
                                <div>
                                <p>ผู้จัดทำ : <b><?php echo"ชื่อคนเขียน"; ?></b></p>
                                </div>

                            </div>
                            <a href="detail_post.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                ดูรายละเอียด
                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </a>
                        </div>
                    </div>                
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="img/eiger-zoom-background.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <div class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white"> 
                                    <p><?php echo"ชื่อแผนการสอน"; ?></p>
                                </div>
                            </a>
                            <div class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                <div>
                                <p>รายวิชา : <b><?php echo"ชื่อวิชา"; ?></b></p>
                                </div>
                                <div>
                                <p>หน่วยการเรียนรู้ที่ : <b><?php echo"9999999999"; ?></b></p>
                                </div>
                                <div>
                                <p>เรื่อง : <b><?php echo"ของกู"; ?></b></p>
                                </div>
                                <div>
                                <p>ระดับชั้น : <b><?php echo"ชั้น"; ?></b></p>
                                </div>
                                <div>
                                <p>ผู้จัดทำ : <b><?php echo"ชื่อคนเขียน"; ?></b></p>
                                </div>

                            </div>
                            <a href="detail_post.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                ดูรายละเอียด
                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </a>
                        </div>
                    </div>
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="img/eiger-zoom-background.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <div class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white"> 
                                    <p><?php echo"ชื่อแผนการสอน"; ?></p>
                                </div>
                            </a>
                            <div class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                <div>
                                <p>รายวิชา : <b><?php echo"ชื่อวิชา"; ?></b></p>
                                </div>
                                <div>
                                <p>หน่วยการเรียนรู้ที่ : <b><?php echo"9999999999"; ?></b></p>
                                </div>
                                <div>
                                <p>เรื่อง : <b><?php echo"ของกู"; ?></b></p>
                                </div>
                                <div>
                                <p>ระดับชั้น : <b><?php echo"ชั้น"; ?></b></p>
                                </div>
                                <div>
                                <p>ผู้จัดทำ : <b><?php echo"ชื่อคนเขียน"; ?></b></p>
                                </div>

                            </div>
                            <a href="detail_post.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                ดูรายละเอียด
                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

        </div>
    </section>
    <hr>
    <?php include("footer.php"); ?>

    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>
</html>