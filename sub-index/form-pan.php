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
    <title>สร้างแผนการจัดการเรียนรู้</title>
    <link rel="stylesheet" href="../dist/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/min.css">
</head>
<body class="kanit">
    <?php
        require $_SERVER['DOCUMENT_ROOT'] . "/ED-Oasis/Index/navbar.php"; 
        $user = $userObj->getuser($_SESSION['user_id']);

    ?>
    <section class="bg-white p-6 w-1/2 mx-auto">
            <div class="container text-blue-800 mb-6">
                <b><h1 class="text-4xl">สร้างแผนการจัดการเรียนรู้ของคุณ</h1></b>
                <p>สร้างแผนการจัดการเรียนรู้ตามรายละเอียดที่กำหนด</p>
            </div>
            <!-- Form -->
            <div>
                <form action="./saveform.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="action" value="<?php echo ($_REQUEST['action'] == 'edit') ? "edit" : "add"; ?>">
                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']?>"></input>
                    <input type="hidden" name="id" value="<?php echo $formbyid['lp_id']?>"></input>
                    <!-- ชื่อแผน -->
                    <div class="mb-4">
                        <label for="name_plan">ชื่อแผน</label>
                        <input type="text" name="lp_name" id="lp_name" class="w-full border border-gray-300 rounded-lg shadow-sm" placeholder="ชื่อแผนการสอน" value="<?php echo $formbyid['lp_name']; ?>" required>
                    </div>
                    <!-- ชื่อผู้สอน -->
                    <div class="grid grid-cols-2">
                        <div class="mr-3">
                            <label for="name_teacher">ชื่อผู้สอน</label>
                            <input type="text" name="" id="" class="w-full border border-gray-300 rounded-lg shadow-sm" value="<?php echo $user[0]['user_sname']; ?>" disabled>
                        </div>
                        <div class="mb-4">
                            <label for="lname_teacher">นามสกุลผู้สอน</label>
                            <input type="text" name="" id="" class="w-full border border-gray-300 rounded-lg shadow-sm" value="<?php echo $user[0]['user_lname']; ?>" disabled>                            
                        </div>
                    </div>
                    <!-- ระดับชั้น -->
                    <div class="grid grid-cols-2">
                        <div class="mr-3">
                            <label for="name_teacher">ชั้นที่สอน</label>
                            <input type="text" name="" id="" class="w-full border border-gray-300 rounded-lg shadow-sm" value="<?php echo $user[0]['Class']; ?>"  disabled>
                        </div>
                        <div class="mb-4">
                            <label for="lname_teacher">วิชาที่สอน</label>
                            <input type="text" name="" id="" class="w-full border border-gray-300 rounded-lg shadow-sm" value="<?php echo $user[0]['Subject']; ?>"  disabled>                            
                        </div>
                    </div>
                    <!-- รายละเอียดแผนการสอน -->
                    <div class="mb-6">
                        <label for="detail_lp">
                            <b><p class="text-blue-800">รายละเอียดของแผนการจัดการเรียนรู้</p></b>
                            <div class="grid grid-cols-2">
                                <div class="mr-3">
                                    <label for="name_teacher">หน่วยการเรียนรู้ที่ </label>
                                    <input type="number" name="lp_unit" id="lp_unit" class="w-full border border-gray-300 rounded-lg shadow-sm" placeholder="Ex.หน่วยการเรียนรู้ที่ 1" value="<?php echo $formbyid['lp_unit']; ?>" required>
                                </div>
                                <div class="mb-4">
                                    <label for="lname_teacher">ชื่อเรื่อง</label>
                                    <input type="text" name="lp_title" id="lp_title" class="w-full border border-gray-300 rounded-lg shadow-sm" placeholder="Ex.อุปกรณ์คอมพิวเตอร์"value="<?php echo $formbyid['lp_title']; ?>"  required>                            
                                </div>
                            </div>
                            <ul class="text-gray-400">
                                <li>-วัตถุประสงค์ (K,P,A)</li>
                                <li>-การจัดกิจกรรรมการเรียนรู้ (ขั้นนำ,ขั้นสอน,ขั้นสรุป)</li>
                                <li>-วิธีการวัดและประเมินผล</li>
                            </ul>
                        </label>
                        <textarea id="lp_info" name="lp_info" rows="10" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300" required><?php echo $formbyid['lp_info'] ?></textarea>
                    </div>
                    <!-- File drop -->
                    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                            <label class="block text-sm text-gray-700"> อัพโหลดไฟล์เอกสาร/สื่อการสอนเพิ่มเติม </label>
                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <div class="flex text-sm text-gray-600 ">
                                    <input type="file" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-9 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100" id="lp_file_name" name="lp_file_name">
                                    <input type="hidden" class="text-sm text-slate-500 bg-slate-100" id="lp_file_id" name="lp_file_id" value="<?php echo $formbyid['lp_file_id'] ?>">
                                </div>
                                <p class="text-xs text-gray-500">PDF, ZIP up to 20MB</p>
                                </div>
                            </div>
                    </div>
                    <div class="flex flex-row-reverse">
                        <button type="submit" class="p-2 bg-blue-400 text-white hover:bg-blue-700 rounded-lg m-1 shadow-lg" data-modal-toggle="popup-modal">บันทึกแผนการสอน</button>    
                        <button type="reset" class="p-2 bg-yellow-400 text-white hover:bg-orange-400 rounded-lg m-1 shadow-lg">เริ่มใหม่</button>
                        <button class="p-2 bg-red-400 text-white hover:bg-red-700 rounded-lg m-1 shadow-lg"> <a href="../Index/main_menu.php">ยกเลิก</a></button>
                    </div>
                    </div>
                    <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div class="p-6 text-center">
                                <svg class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">คุณต้องการยืนยันที่จะบันทึกแผนการสอนใช่ไหม</h3>
                                <button data-modal-toggle="popup-modal" type="submit" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                ใช่, เอาเลย
                                </button>
                                <button data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 ">ไม่, ยกเลิกก่อน</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
    </section>



    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>
</html>