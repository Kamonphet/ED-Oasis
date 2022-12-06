<?php
error_reporting(E_ALL ^ E_WARNING);
require $_SERVER['DOCUMENT_ROOT'] . "../CED312/vendor/autoload.php";
require $_SERVER['DOCUMENT_ROOT'] . "../CED312/auth/auth.php";

use App\model\user;
use App\model\Mpost;
use App\model\Mpramern;

$userObj = new user;
$postObj = new Mpost;
$pramernObj = new Mpramern;



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แผนการสอนทั้งหมด</title>
    <link rel="stylesheet" href="../css/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/font.css">
</head>
<body>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/CED312/Index/navbar.php";
    
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
    }elseif ($_GET['msg']=='update suscessfully') {
        echo '<div id="alert-3" class="flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
                <svg class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                แก้ไขสำเร็จ.
                </div>
                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300" data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
        ';
    }elseif ($_GET['msg']=='delete suscessfully'){
        echo '<div id="alert-3" class="flex p-4 mb-4 bg-red-100 rounded-lg" role="alert">
                <svg class="flex-shrink-0 w-5 h-5 text-red-700 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <div class="ml-3 text-sm font-medium text-red-700 ">
                ลบสำเร็จ.
                </div>
                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 " data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
        ';
    }
    ;
?>
<main class="h-full bg-blue-100 p-8">
    <div class="flex">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"  fill="currentColor" class="w-8 h-8 fill-current text-red-300">
            <path fill-rule="evenodd" d="M9.315 7.584C12.195 3.883 16.695 1.5 21.75 1.5a.75.75 0 01.75.75c0 5.056-2.383 9.555-6.084 12.436A6.75 6.75 0 019.75 22.5a.75.75 0 01-.75-.75v-4.131A15.838 15.838 0 016.382 15H2.25a.75.75 0 01-.75-.75 6.75 6.75 0 017.815-6.666zM15 6.75a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" clip-rule="evenodd" />
            <path d="M5.26 17.242a.75.75 0 10-.897-1.203 5.243 5.243 0 00-2.05 5.022.75.75 0 00.625.627 5.243 5.243 0 005.022-2.051.75.75 0 10-1.202-.897 3.744 3.744 0 01-3.008 1.51c0-1.23.592-2.323 1.51-3.008z" />
        </svg>
        <span class="text-2xl inline-block align-middle">แผนการสอนทั้งหมด</span>
    </div>
    <br>
    <div class="grid grid-cols-3 gap-4 ">
            <?php
                $post = $postObj->getpost();
                foreach ($post as $post) {
                    $pramern = $pramernObj->averagepramern($post['post_id']);
                    foreach ($pramern as $pramern) {};
                    echo "
                        <div class='w-auto m-2 '>     
                        <div class='max-w-sm bg-white border border-gray-200 rounded-lg shadow-md'>
                            <a href='./detail-post.php?post={$post['post_id']}'>
                                <img class='rounded-t-lg' src='{$post['post_file_id']}'>
                            </a>
                            <div class='p-5'>
                                <h5 class='mb-2 text-2xl font-bold tracking-tight text-gray-900'>โพสต์ที่ {$post['post_id']} {$post['name']}</h5>
                                <div class='mb-3 font-normal text-gray-700'>
                                    <div>
                                    <p>วันที่โพสต์ : <b>{$post['post_date']}</b></p>
                                    </div>
                                    <div class='flex items-center ml-3 mb-3'>
                                        <svg aria-hidden='true' class='w-5 h-5 text-yellow-400' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><title>Rating star</title><path d='M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z'></path></svg>
                                        <p class='ml-2 text-sm font-bold text-gray-900 dark:text-white'>{$pramern['average_score']}</p>
                                        <span class='w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400'></span>
                                        <a href='#' class='text-sm font-medium text-gray-900 underline hover:no-underline dark:text-white'>{$pramern['commentt']} reviews</a>
                                    </div>
                                </div>
                    ";if ($_SESSION['user_tier']=='teacher'){
                        echo"
                                <a href='./form-post.php?id={$post['post_id']}&action=edit' class='font-medium text-blue-600 hover:underline'><p class='text-end mr-3'>แก้ไข</p> </a>
                                <a href='./saveform-post.php?id={$post['post_id']}&action=delete' class='font-medium text-blue-600 hover:underline'><p class='text-end mr-3'>ลบ</p> </a> 
                        ";     
                    };
                    echo "
                                <a href='./form-pramern.php?id={$post['post_id']}' class='inline-flex items-end px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800'>
                                    ประเมิน
                                    <svg aria-hidden='true' class='w-4 h-4 ml-2 -mr-1' fill='currentColor' viewBox='0 0 20 20'xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z' clip-rule='evenodd'></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    ";   
                };            
            ;?> 
    </div>
</main>
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
                                <a href="https://fontawesome.com/search?s=solid&f=sharp&o=r" class="hover:underline" target="_blank">Yannapat</a>
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
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="#" class="hover:underline">Sorndai™</a>. All Rights Reserved.
                </span>
            </div>
        </footer>
    </div>
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>
</html>