<?php
error_reporting(E_ALL ^ E_WARNING);
require $_SERVER['DOCUMENT_ROOT'] . "../CED312/vendor/autoload.php";
require $_SERVER['DOCUMENT_ROOT'] . "../CED312/auth/auth.php";

use App\model\user;
use App\model\Mform;
use App\Model\Mpost;

$formObj = new Mform;
$postObj = new Mpost;

if ($_REQUEST['action'] == 'edit') {
    $postbyid = $postObj->getpostByid($_REQUEST['id']);
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home</title>
</head>
<body>
    <div class="container mx-auto mt-6">
        <div>
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">แบบฟอร์มโพสต์แผนการจัดการเรียนรู้</h3>
                    <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p>
                </div>
                </div>
                <div class="mt-5 md:col-span-2 md:mt-0">
                <form action="./saveform-post.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="action" value="<?php echo ($_REQUEST['action'] == 'edit') ? "edit" : "add"; ?>">
                    <input type="hidden" name="id" value="<?php echo $postbyid['post_id']?>"></input>
                    <div class="shadow sm:overflow-hidden sm:rounded-md">

                        <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                            <div class="col-span-6 sm:col-span-1">
                                <label for="" class="block text-md font-medium text-gray-700">วันที่โพสต์</label>
                                <input type="date" name="post_date" id="post_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="<?php echo $postbyid['post_date']; ?>" required>
                            </div>
                            <div class="col-span-6 sm:col-span-1">
                                <label for="" class="block text-sm text-gray-700">เลือกแผนการสอนที่ต้องการโพสต์</label>
                                <select name='lp_id' id='lp_id' class='mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm' required>
                                            <option value=''>---</option>
                                            <?php
                                            $form = $formObj->getform($_SESSION['user_id']);
                                            foreach ($form as $fom) {
                                                $selected = ($fom['lp_id'] == $form['lp_id']) ? "selected" : "";
                                                echo "
                                                        <option value='{$fom['lp_id']}' {$selected}> {$fom['lp_name']}</option>
                                                    ";
                                            }
                                            ?>
                                </select>
                            </div>
                        </div>
                        <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                            <label for="about" class="block text-sm font-medium text-gray-700">รายละเอียดการโพสต์</label>
                            <div class="mt-1">
                                <textarea id="post_detail" name="post_detail" rows="10" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="โปรโมตได้เลย" required><?php echo $postbyid['post_detail'] ?></textarea>
                            </div>
                        </div>
                            
                        <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                            <label class="block text-sm text-gray-700"> อัพโหลดรูปสำหรับปกโพสต์ </label>
                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <div class="flex text-sm text-gray-600 ">
                                    <input type="file" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-9 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100" id="post_file_name" name="post_file_name">
                                    <input type="hidden" class="text-sm text-slate-500 bg-slate-100" id="post_file_id" name="post_file_id" value="<?php echo $postbyid['post_file_id'] ?>">
                                    <img src="<?php echo $postbyid['post_file_id'] ?>" class="w-20 " alt="">
                                </div>
                                <p class="text-xs text-gray-500">Jpg, png up to 5MB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 text-right sm:px-0 bg-slate-100">
                        <a href="../Index/main_menu.php" class="hover:-translate-y-1 duration-300 hover:scale-100 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none ">Cancel</a>
                        <button type="reset" class="hover:-translate-y-1 duration-300 hover:scale-100 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-yellow-500 hover:bg-yellow-600 focus:outline-none ">Reset</button>
                        <button type="button" class="hover:-translate-y-1 duration-300 hover:scale-100 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none " data-modal-toggle="popup-modal">โพสต์</button>
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
                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">คุณต้องการยืนยันที่จะโพสต์ใช่ไหม</h3>
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
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>
</html>
