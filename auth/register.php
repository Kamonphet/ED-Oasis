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
    <title>ลงทะเบียน</title>
    <link rel="stylesheet" href="../css/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/font.css">
</head>
<body class=" bg-cyan-100 kanit">
    <main>
        <div class="container w-auto h-screen m-auto grid justify-items-center items-center">
            <div class="p-3 mx-auto border grid grid-cols-2 rounded-lg shadow-lg bg-white">
                <!-- Cols 1  -->
                <div class="flex items-center ">
                    <img class="w-5/5 rounded-md" src="../img/bg5webp.webp" alt="">                        
                </div>

                <!-- Cols 2 -->
                <div class="p-4">
                    <div class="text text-5xl mb-4">
                        <h1> <b>ลงทะเบียน</b> </h1>
                    </div>
                    <div>
                        <form class="space-y-4 md:space-y-6" action="./saveregister.php" method="POST">
                            <div class="mb-6">
                                <label for="type_user" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ประเภทผู้ใช้งาน</label>
                                <select name='user_tier' id='user_tier' class='mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm' required>
                                    <option value=''>---</option>
                                    <option value='teacher'>คุณครู</option>
                                    <option value='student'>นักเรียน</option>
                                </select>
                            </div>
                            <!-- ชื่อ นามสกุล -->
                            <div class="grid grid-cols-2">
                                <div class="mb-6 mr-2">
                                    <label for="user_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ชื่อ</label>
                                    <input type="text" id="user_sname" name="user_sname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  placeholder="ชื่อ" required>
                                </div>
                                <div class="mb-6">
                                    <label for="user_lname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">นามสกุล</label>
                                    <input type="text" id="user_lname" name="user_lname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  placeholder="นามสกุล" required>
                                </div>                                    
                            </div>
                            <hr class="mb-5">
                            <!-- สอนชั้นไหน สอนวิชาอะไร -->
                            <div class="mb-6">
                                <label for="grade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">สอนระดับชั้น/เรียนระดับชั้น</label>
                                <input type="number" id="class_id" name="class_id" min='1' max="6" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  placeholder="ชั้นมัธยมศึกษาปีที่" required>
                            </div>
                            <div class="mb-6">
                                <label for="subject_teach" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">วิชาที่สอน/วิชาที่สนใจ</label>
                                <select name='subject_id' id='subject_id' class='mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm' required>
                                    <option value=''>---</option>
                                    <option value='1'>ภาษาไทย</option>
                                    <option value='2'>คณิตศาสตร์</option>
                                    <option value='3'>วิทยาศาสตร์</option>
                                    <option value='4'>ฟิสิกส์</option>
                                    <option value='5'>เคมี</option>
                                    <option value='6'>ชีววิทยา</option>
                                    <option value='7'>วิทยาการคำนวณ</option>
                                    <option value='8'>ลังคมศึกษา ศาสนา และวัฒนธรรม</option>
                                    <option value='9'>ประวัติศาสตร์</option>
                                    <option value='10'>สุขศึกษา</option>
                                    <option value='11'>พลศึกษา</option>
                                    <option value='12'>ศิลปะ</option>
                                    <option value='13'>การงานอาชีพ</option>
                                    <option value='14'>ภาษาอังกฤษ</option>
                                    <option value='15'>ภาษาต่างประเทศ</option>
                                </select>
                            </div>
                            <hr class="mb-5">
                            <!-- email เบอร์โทรศัพท์ รหัส -->
                            <div class="mb-6">
                                <label for="regis_email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">อีเมล</label>
                                <input type="email" id="user_email" name="user_email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            </div>
                            <div class="mb-6">
                                <label for="regis_tel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">เบอร์โทรศัพท์</label>
                                <input type="text" id="user_tell" name="user_tell" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"   required>
                            </div>
                            <div class="mb-6">
                                <label for="regis_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">รหัสผ่าน</label>
                                <input type="password" id="user_password" name="user_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            </div>
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="terms" class="font-light text-gray-500 dark:text-gray-300" aria-required="">I accept the <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="https://classroom.google.com/u/0/c/NDk3MjczMzE4MzAx/a/NTcyNTkwMzUwMjI2/details">Terms and Conditions</a></label>
                                </div>
                            </div>

                            <!-- submit -->
                            <div class="flex flex-wrap">
                                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-900 p-2 mx-auto w-full rounded-full">ลงทะเบียน</button>
                            </div>
                            <div class="grid justify-items-center mt-2 text-gray-400 hover:text-blue-500">
                                <a href="./login.php">ลงทะเบียนไปแล้วนี่หว่า -w-b</a>
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