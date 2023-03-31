<?php
//กันแจ้งเตือน warning
error_reporting(E_ALL ^ E_WARNING);
require $_SERVER['DOCUMENT_ROOT'] . "../ED-Oasis/vendor/autoload.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
    <link rel="stylesheet" href="../css/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/min.css">
</head>
<body class="bg-blue-200 kanit">
    <main>
        <div class="container w-auto h-screen m-auto grid justify-items-center items-center ">
            <div class="p-3 mx-auto w-1/2  border rounded-lg grid grid-cols-2 shadow-lg bg-white">
                <!-- Cols 1  -->
                <div class="flex items-center  bg-blue-100 rounded">
                    <img class="w" src="../img/Logo.png" alt="">      
                </div>

                <!-- Cols 2 -->
                <div class="p-4">
                    <div class="text-center text-5xl mb-4">
                        <h1> <b> เข้าสู่ระบบ</b></h1>
                    </div>
                    <div>
                        <form action="./checklogin.php" method="POST">
                            <div class="mb-3">
                                <label for="user_sname" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">ชื่อผู้ใช้</label>
                                <input type="text" id="user_sname" name="user_sname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="ชื่อผู้ใช้" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">รหัสผ่าน</label>
                                <input type="password" id="user_password" name="user_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="รหัสผ่าน" required>
                            </div>
                            <div>
                            <div class="flex items-start mb-8">
                                <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" value="" class="w-4 h-4 bg-gray-50 rounded border border-gray-300" required>
                                </div>
                                <label for="remember" class="ml-2 text-sm font-medium text-gray-900">Remember me</label>
                            </div>
                            <div>
                                <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <!-- Heroicon name: mini/lock-closed -->
                                    <svg class="h-5 w-5 text-white-500 group-hover:text-blue-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                เข้าสู่ระบบ
                                </button>
                            </div>
                            <div class="grid justify-items-center mt-2 text-gray-400 hover:text-gray-700">
                                <a href="./register.php" class="hover:underline">หากยังไม่ได้ลงทะเบียน</a>
                            </div>
                            
                        </form> 
                    </div>                    
                </div>
            </div>

        </div>


    </main>
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>
</html>