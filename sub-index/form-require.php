<?php
error_reporting(E_ALL ^ E_WARNING);
require $_SERVER['DOCUMENT_ROOT'] . "../ED-Oasis/vendor/autoload.php";
require $_SERVER['DOCUMENT_ROOT'] . "../ED-Oasis/auth/auth.php";


use App\model\user;

$userObj = new user;

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
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/min.css">
</head>

<body class="kanit">
    <?php
    // require $_SERVER['DOCUMENT_ROOT'] . "/ED-Oasis/Index/navbar.php"; 
    $user = $userObj->getuser($_SESSION['user_id']);

    ?>

    <main class="h-screen  p-6  mx-auto bg-orange-100 ">
        <!-- Header -->
        <section class="w-1/2 mx-auto bg-white rounded-lg p-6 shadow-lg">
            <div class="container text-blue-800 mb-6">
                <b>
                    <h1 class="text-4xl">กรอกสิ่งที่ต้องการในการจัดกิจกรรมการเรียนรู้</h1>
                </b>
                <p>ฉันอยากเรียนด้วยวิธีนี้...</p>
            </div>
            <!-- Form -->
            <form action="./saverequired.php" method="POST">
                <input type="hidden" name="action" value="<?php echo ($_REQUEST['action'] == 'edit') ? "edit" : "add"; ?>">
                <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'] ?>"></input>
                <div class="mx-auto w-full">
                    <div class="grid grid-cols-3 ">
                        <div>
                            <input id="checkbox-2" type="radio" name="req_type" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                            <label for="checkbox-2" class="ml-2 text-md font-medium">ฟังบรรยาย</label>                            
                        </div>
                        <div>
                            <input id="checkbox-2" type="radio" name="req_type" value="2" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                            <label for="checkbox-2" class="ml-2 text-md font-medium text-gray-900 ">การอภิปรายกลุ่ม</label>
                        </div>
                        <div>
                            <input id="checkbox-2" type="radio" name="req_type" value="3" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                            <label for="checkbox-2" class="ml-2 text-md font-medium text-gray-900 ">ใช้เกม</label>                            
                        </div>
                        <div>
                            <input id="checkbox-2" type="radio" name="req_type" value="4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                            <label for="checkbox-2" class="ml-2 text-md font-medium text-gray-900 ">การสาธิต</label>
                        </div>
                        <div>
                            <input id="checkbox-2" type="radio" name="req_type" value="5" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                            <label for="checkbox-2" class="ml-2 text-md font-medium text-gray-900">การแสดงละคร</label>
                        </div>
                        <div>
                            <input id="checkbox-2" type="radio" name="req_type" value="6" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                            <label for="checkbox-2" class="ml-2 text-md font-medium text-gray-900 ">สถานการณ์จำลอง</label>
                        </div>
                        <div>
                            <input id="checkbox-2" type="radio" name="req_type" value="7" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                            <label for="checkbox-2" class="ml-2 text-md font-medium text-gray-900 ">การทดลอง</label>
                        </div>
                        <div>
                            <input id="checkbox-2" type="radio" name="req_type" value="8" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                            <label for="checkbox-2" class="ml-2 text-md font-medium text-gray-900 ">การแสดงบทบาทสมมติ</label>
                        </div>
                        <div>
                            <input id="checkbox-2" type="radio" name="req_type" value="9" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                            <label for="checkbox-2" class="ml-2 text-md font-medium text-gray-900 ">ใช้ศูนย์การเรียน</label>
                        </div>
                        <div>
                            <input id="checkbox-2" type="radio" name="req_type" value="10" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                            <label for="checkbox-2" class="ml-2 text-md font-medium text-gray-900 ">การไปทัศนศึกษา</label>
                        </div>
                        <div>
                            <input id="checkbox-2" type="radio" name="req_type" value="11" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                            <label for="checkbox-2" class="ml-2 text-md font-medium text-gray-900 ">การใช้กรณีตัวอย่าง</label>
                        </div>
                        
                    </div>
                    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                        <label for="about" class="block text-md font-medium text-gray-700">ข้อเสนอแนะเพิ่มเติม</label>
                        <div class="mt-1">
                            <textarea  name="req_detail" rows="10" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-md" placeholder="อยากให้จัดกิจกรรมการเรียนรู้แบบไหนเพิ่มเติมสามารถพิมพ์เข้ามาได้เลย" required></textarea>
                        </div>
                    </div>
                    <div class="flex flex-row-reverse">
                        <button type="submit" class="p-2 bg-blue-400 text-white hover:bg-blue-700 rounded-lg m-1 shadow-lg" data-modal-toggle="popup-modal">บันทึก</button>
                        <button type="reset" class="p-2 bg-yellow-400 text-white hover:bg-orange-400 rounded-lg m-1 shadow-lg">เริ่มใหม่</button>
                        <button class="p-2 bg-red-400 text-white hover:bg-red-700 rounded-lg m-1 shadow-lg"> <a href="../Index/main_menu.php">ยกเลิก</a></button>
                    </div>
                </div>
                <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-md p-1.5 ml-auto inline-flex items-center " data-modal-toggle="popup-modal">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div class="p-6 text-center">
                                <svg class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">คุณต้องการยืนยันที่จะบันทึกแผนการสอนใช่ไหม</h3>
                                <button data-modal-toggle="popup-modal" type="submit" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-red-800 font-medium rounded-lg text-md inline-flex items-center px-5 py-2.5 text-center mr-2">
                                    ใช่, เอาเลย
                                </button>
                                <button data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-md font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 ">ไม่, ยกเลิกก่อน</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>

    </main>


    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>

</html>