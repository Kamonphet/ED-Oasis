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
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
    <title>Home</title>
</head>
<body>
    <?php require $_SERVER['DOCUMENT_ROOT'] . "/CED312/Index/navbar.php";?>
    
    <?php
        // $form = $formObj->getallform();
        $post = $postObj->getpost();
        // $post = $postObj->getpost($form['lp_id']);
        foreach ($post as $post) {
            $pramern = $pramernObj->averagepramern($post['post_id']);
            foreach ($pramern as $pramern) {};
                echo "
                    <br>
                    <div class='container bg-white border rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-gray-100'>
                        <a href='./detail-post.php' class=' relative ... m-6 flex flex-col items-center '>
                            <img class='object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg' src='{$post['post_file_id']}'>
                            <div class='flex flex-col justify-between p-4 leading-normal'>
                                <h5 class='mb-2 text-2xl font-bold tracking-tight text-gray-900'>โพสต์ที่ {$post['post_id']} {$post['name']}</h5>
                                <div class='absolute bottom-2 right-3 ...'>
                                    <p>{$post['post_date']}</p>
                                </div>
                            </div>
                        </a>
                        <a href='./form-post.php?id={$post['post_id']}&action=edit' class='font-medium text-blue-600 hover:underline'><p class='text-end mr-3'>แก้ไข</p> </a>
                        <a href='./saveform-post.php?id={$post['post_id']}&action=delete' class='font-medium text-blue-600 hover:underline'><p class='text-end mr-3'>ลบ</p> </a> 
                        <a href='./form-pramern.php?id={$post['post_id']}' class='font-medium text-blue-600 hover:underline'><p class='text-end mr-3'>ประเมิน</p></a> 

                        <div class='flex items-center ml-3 mb-3'>
                            <svg aria-hidden='true' class='w-5 h-5 text-yellow-400' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><title>Rating star</title><path d='M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z'></path></svg>
                            <p class='ml-2 text-sm font-bold text-gray-900 dark:text-white'>{$pramern['average_score']}</p>
                            <span class='w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400'></span>
                            <a href='#' class='text-sm font-medium text-gray-900 underline hover:no-underline dark:text-white'>{$pramern['commentt']} reviews</a>
                        </div>
                    </div>
                ";
        };            
    ;?>
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
