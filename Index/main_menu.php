<?php
error_reporting(E_ALL ^ E_WARNING);
require $_SERVER['DOCUMENT_ROOT'] . "../ED-Oasis/vendor/autoload.php";
require $_SERVER['DOCUMENT_ROOT'] . "../ED-Oasis/auth/auth.php";

use App\Model\Mform;

$formObj = new Mform;
$form = $formObj->getallform();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าหลัก</title>
    <link rel="stylesheet" href="../css/output.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/font.css">
</head>
<body class="kanit">
  <div class="grid justify-items-end">
        <div class="fixed bottom-0 right-0  m-6">
            <a href="../sub-index/form-post.php">
                <button class="p-0 w-16 h-16 bg-blue-600 rounded-full hover:bg-blue-700 active:shadow-lg mouse shadow transition ease-in duration-200 focus:outline-none">
                    <svg viewBox="0 0 20 20" enable-background="new 0 0 20 20" class="w-6 h-6 inline-block">
                        <path fill="#FFFFFF" d="M16,10c0,0.553-0.048,1-0.601,1H11v4.399C11,15.951,10.553,16,10,16c-0.553,0-1-0.049-1-0.601V11H4.601
                                                C4.049,11,4,10.553,4,10c0-0.553,0.049-1,0.601-1H9V4.601C9,4.048,9.447,4,10,4c0.553,0,1,0.048,1,0.601V9h4.399
                                                C15.952,9,16,9.447,16,10z" />
                    </svg>
                </button>
            </a>
            
        </div>
    </div>
  <!-- NavBar -->
  <?php require $_SERVER['DOCUMENT_ROOT'] . "/ED-Oasis/Index/navbar.php";
    if ($_GET['msg']) {
      echo '<div id="alert-3" class="flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
              <svg class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
              <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                เข้าสู่ระบบสำเร็จ.
              </div>
              <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300" data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </button>
            </div>
      ';
    };
  ?>
  <!-- Main-->
  <main>
    <!-- carousal -->
    <div class="container-fluid bg-blue-500">
      <div class="container mx-auto">
        <div id="controls-carousel" class="relative" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                  <a href="#">
                    <img src="../img/bg4.webp" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                  </a>
                </div>

                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <a href="#">
                    <img src="../img/bg1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                  </a>
                    
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <a href="#">
                    <img src="../img/bg2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                  </a>
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <a href="#">
                    <img src="../img/bg3.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                  </a>
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
      </div>  
    </div>
    <!-- หมวดหมู่แผนการสอนยอดนิยม -->
    <section class="p-4 container mx-auto">
      <div class="grid grid-col-2 items-center">
        <div class="flex">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 fill-current text-yellow-300">
            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
          </svg>
          <span class="text-2xl inline-block align-middle ">หมวดหมู่แผนการสอนยอดนิยม</span>
        </div>
        <div class="flex flex-row-reverse">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h- self-center">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
          </svg>
          <p class="text-xl inline-block align-middle justify-self-end"><a href="#">รายวิชาทั้งหมด</a></p>
        </div>
      </div>
      <div class="grid grid-cols-4 gap-3 p-3">
        <!-- แผนยอดนิยม 1-->
        <div class="w-auto grow mx-2">
          <div class="max-w-sm p-4 bg-orange-100 border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
              <a href="#">
                  <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    <b>วิชา : </b><?php echo"วิทยาการคำนวณ"; ?>
                  </h5>
              </a>
              <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                <b>กลุ่มสาระ : </b><?php echo"วิทยาศาสตร์และเทคโนโลยี"; ?>
              </p>
              <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-400 rounded-lg hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  Read more
                  <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </a>
          </div>
        </div>
        <!-- แผนยอดนิยม 2-->
        <div class="w-auto h-auto grow mx-2">
          <div class="max-w-sm p-4 bg-orange-100 border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
              <a href="#">
                  <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    <b>วิชา : </b><?php echo"คณิตศาสตร์"; ?>
                  </h5>
              </a>
              <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                <b>กลุ่มสาระ : </b><?php echo"คณิตศาสตร์"; ?>
              </p>
              <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-400 rounded-lg hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  Read more
                  <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </a>
          </div>          
        </div>
        <!-- แผนยอดนิยม 3-->
        <div class="w-auto h-auto grow mx-2">
          <div class="max-w-sm p-4 bg-orange-100 border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                  <b>วิชา : </b><?php echo"วิทยาศาสตร์"; ?>
                </h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
              <b>กลุ่มสาระ : </b><?php echo"วิทยาศาสตร์และเทคโนโลยี"; ?>
            </p>
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-400 rounded-lg hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Read more
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
          </div>
        </div>
                <!-- แผนยอดนิยม 4-->
        <div class="w-auto h-auto grow mx-2">
          <div class="max-w-sm p-4 bg-orange-100 border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                  <b>วิชา : </b><?php echo"ภาษาอังกฤษ"; ?>
                </h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
              <b>กลุ่มสาระ : </b><?php echo"ภาษาต่างประเทศ"; ?>
            </p>
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-400 rounded-lg hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Read more
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- แผนการสอนที่มีผู้ถูกใจมากที่สุด -->
    <?php
      $form = $formObj->getallform();
      
    ?>
    <section class="p-4 container mx-auto">
      <div class="grid grid-cols-2 items-center ">
        <div class="flex">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"  fill="currentColor" class="w-8 h-8 fill-current text-red-300">
            <path fill-rule="evenodd" d="M9.315 7.584C12.195 3.883 16.695 1.5 21.75 1.5a.75.75 0 01.75.75c0 5.056-2.383 9.555-6.084 12.436A6.75 6.75 0 019.75 22.5a.75.75 0 01-.75-.75v-4.131A15.838 15.838 0 016.382 15H2.25a.75.75 0 01-.75-.75 6.75 6.75 0 017.815-6.666zM15 6.75a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" clip-rule="evenodd" />
            <path d="M5.26 17.242a.75.75 0 10-.897-1.203 5.243 5.243 0 00-2.05 5.022.75.75 0 00.625.627 5.243 5.243 0 005.022-2.051.75.75 0 10-1.202-.897 3.744 3.744 0 01-3.008 1.51c0-1.23.592-2.323 1.51-3.008z" />
          </svg>
          <span class="text-2xl inline-block align-middle">แผนการสอนที่ผู้คนถูกใจมากที่สุด</span>
        </div>
        <div>
          <div class="flex flex-row-reverse">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h- self-center">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
            </svg>
            <p class="text-xl inline-block align-middle justify-self-end"><a href="../sub-index/all-post.php">แผนการสอนทั้งหมด</a></p>
          </div>
        </div>
      </div>

      <div class="grid grid-cols-3 gap-3 p-3 justify-items-center">
        <!-- แผน 1 -->
        <div class="w-auto grow ">     
          <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
              <a href="#">
                  <img class="rounded-t-lg" src="img/eiger-zoom-background.jpg" alt="" />
              </a>
              <div class="p-5">
                  <a href="#">
                      <div class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white"> 
                        <p><?php echo $form[0]['lp_name']; ?></p>
                      </div>
                  </a>
                  <div class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    <div>
                      <p>รายวิชา : <b><?php echo $form[0]['subject_name']; ?></b></p>
                    </div>
                    <div>
                      <p>หน่วยการเรียนรู้ที่ : <b><?php echo $form[0]['lp_unit']; ?></b></p>
                    </div>
                    <div>
                      <p>เรื่อง : <b><?php echo $form[0]['lp_title']; ?></b></p>
                    </div>
                    <div>
                      <p>ระดับชั้น : <b><?php echo $form[0]['class_name']; ?></b></p>
                    </div>
                    <div>
                      <p>ผู้จัดทำ : <b><?php echo 'คุณครู '.$form[0]['user_sname'].' '.$form[0]['user_lname'] ; ?></b></p>
                    </div>

                  </div>
                  <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      ดูรายละเอียด
                      <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </a>
              </div>
          </div>
        </div>
        <!-- แผน 2 -->
        <div class="w-auto grow ">     
          <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
              <a href="#">
                  <img class="rounded-t-lg" src="img/eiger-zoom-background.jpg" alt="" />
              </a>
              <div class="p-5">
              <a href="#">
                      <div class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white"> 
                        <p><?php echo $form[1]['lp_name']; ?></p>
                      </div>
                  </a>
                  <div class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    <div>
                      <p>รายวิชา : <b><?php echo $form[0]['subject_name']; ?></b></p>
                    </div>
                    <div>
                      <p>หน่วยการเรียนรู้ที่ : <b><?php echo $form[1]['lp_unit']; ?></b></p>
                    </div>
                    <div>
                      <p>เรื่อง : <b><?php echo $form[1]['lp_title']; ?></b></p>
                    </div>
                    <div>
                      <p>ระดับชั้น : <b><?php echo $form[1]['class_name']; ?></b></p>
                    </div>
                    <div>
                      <p>ผู้จัดทำ : <b><?php echo 'คุณครู '.$form[1]['user_sname'].' '.$form[1]['user_lname'] ; ?></b></p>
                    </div>

                  </div>
                  <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      ดูรายละเอียด
                      <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </a>
              </div>
          </div>
        </div>
        <!-- แผน 3 -->
        <div class="w-auto grow ">     
          <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
              <a href="#">
                  <img class="rounded-t-lg" src="img/eiger-zoom-background.jpg" alt="" />
              </a>
              <div class="p-5">
              <a href="#">
                      <div class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white"> 
                        <p><?php echo $form[2]['lp_name']; ?></p>
                      </div>
                  </a>
                  <div class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    <div>
                      <p>รายวิชา : <b><?php echo $form[2]['subject_name']; ?></b></p>
                    </div>
                    <div>
                      <p>หน่วยการเรียนรู้ที่ : <b><?php echo $form[2]['lp_unit']; ?></b></p>
                    </div>
                    <div>
                      <p>เรื่อง : <b><?php echo $form[2]['lp_title']; ?></b></p>
                    </div>
                    <div>
                      <p>ระดับชั้น : <b><?php echo $form[2]['class_name']; ?></b></p>
                    </div>
                    <div>
                      <p>ผู้จัดทำ : <b><?php echo 'คุณครู '.$form[2]['user_sname'].' '.$form[2]['user_lname'] ; ?></b></p>
                    </div>

                  </div>
                  <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      ดูรายละเอียด
                      <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </a>
              </div>
          </div>
        </div>
    </section>
    <!-- ไปหน้าสร้างแผน -->
    <?php if ($_SESSION['user_tier']=='teacher'){
      echo '
        <section>
        <div class="container w-auto mx-auto mb-4">
          <div class="w-full p-4 text-center bg-blue-200 shadow-lg rounded-lg">
              <h5 class="mb-2 text-3xl font-bold text-gray-900 ">เริ่มต้นสร้างแผนการสอนของคุณ!</h5>
              <div class="items-center justify-center ">
                <a href="../sub-index/form-pan.php">
                  <button type="button" class="text-gray-500 hover:text-gray-700 border rounded-full bg-white hover:ring-offset-2 ring border-red-500  ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10">
                      <path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                    </svg>
                  </button>
                </a>
              </div>
          </div>
        </div>
      </section>
      ';
    }
    ?>
    
  </main>
  <!-- Footer -->
  <div class="w-auto mx-auto">
    <footer class="p-4 bg-gray-100 sm:p-6">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0 ">
                <a href="" class="flex items-center">
                    <img src="../img/logo.png" class="mr-3 w-2/5" alt="" />
                </a>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Sources</h2>
                    <ul class="text-gray-600 dark:text-gray-400">
                        <li class="mb-4">
                            <a href="https://flowbite.com/" target="_blank" class="hover:underline">Flowbite</a>
                        </li>
                        <li class="mb-4">
                            <a href="https://tailwindcss.com/" target="_blank" class="hover:underline">Tailwind CSS</a>
                        </li>
                        <li class="mb-4">
                            <a href="https://tailwindcss.com/" target="_blank" class="hover:underline">Fontawesome</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Teams</h2>
                    <ul class="text-gray-600 dark:text-gray-400">
                        <li class="mb-4">
                            <a href="https://www.instagram.com/kmp_phet/" class="hover:underline" target="_blank">Kamonphet</a>
                        </li>
                        <li class="mb-4">
                            <a href="https://www.instagram.com/ping_pupinggg/" class="hover:underline" target="_blank">Puping</a>
                        </li>
                        <li class="mb-4">
                            <a href="https://www.instagram.com/gee_2y/" class="hover:underline" target="_blank">Yannapat</a>
                        </li>
                    </ul>   
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Donate</h2>
                    <ul class="text-gray-600 dark:text-gray-400">
                        <li class="mb-4">
                          <p>Prompay</p>
                          <p class="hover:underline" target="_blank">0891149013</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="" class="hover:underline">Sorndai™</a>. All Rights Reserved.
            </span>
        </div>
    </footer>
  </div>  

<script src="app.js"></script>
<script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>

</body>
</html>