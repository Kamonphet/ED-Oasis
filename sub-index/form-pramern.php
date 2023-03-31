<?php
error_reporting(E_ALL ^ E_WARNING);
require $_SERVER['DOCUMENT_ROOT'] . "../ED-Oasis/vendor/autoload.php";
require $_SERVER['DOCUMENT_ROOT'] . "../ED-Oasis/auth/auth.php";


use App\model\user;
use App\Model\Mform;
use App\model\Mpramern;

$userObj = new user;
$formObj = new Mform;
$pramernObj = new Mpramern;

$post_id = $_REQUEST['id']; 

// $form = $formObj->getform($_SESSION['user_id']);
// $post = $postObj->getpost($form['lp_id']);
if ($_SESSION['user_tier']=='Admin'){
    if ($_REQUEST['action'] == 'edit') {
        $pramernbyid = $pramernObj->getpramernByid($_REQUEST['id']);
    };
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประเมินแผนการสอน</title>
    <link rel="stylesheet" href="../css/output.css">
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
    ?>
    <main class="bg-blue-100 h-screen p-4">
        <section class="container mx-auto w-auto bg-white p-4 rounded-lg shadow-lg p-6">
            <div class="">
                <section class="">
                    <div class="px-4 sm:px-0">
                        <h1 class="text-4xl font-medium leading-6 text-indigo-900"> <b>แบบฟอร์มประเมินแผนการจัดการเรียนรู้</b> </h1>
                        <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p>
                    </div>
                    <div class="container">
                        <?php
                            $form = $formObj->getform($_SESSION['user_id']);
                            //echo $form;
                            $pramern = $pramernObj->getpramern($post_id);
                            // echo $pramern;
                            foreach ($pramern as $pramern){};
                            // print_r($pramern);
                            echo "<a href='{$pramern['lp_file_id']}'>{$pramern['lp_name']}</a>
                                <h1>รายละเอียดแผน</h1>
                                <p class='truncate'>{$pramern['lp_info']}</p>
                            ";
                        ?>
                    </div>
                </section>
                <section class="mt-5 md:col-span-2 md:mt-0">
                    <form action="./savepramern.php" method="POST">
                        <input type="hidden" name="action" value="<?php echo ($_REQUEST['action'] == 'edit') ? "edit" : "add"; ?>">
                        <input type="hidden" name="post_id" value="<?php echo $post_id?>"></input>
                        <input type="hidden" name="id" value="<?php echo $pramern['eva_id']?>"></input>
                        <!-- ตารางการประเมิน -->
                        <div class="p-4 pt-1 border rounded-lg">
                            <table class="table-auto mx-auto w-full">
                                <thead class="border-b">
                                    <tr>
                                        <th>รายละเอียดการประเมิน (สำหรับผู้เรียน)</th>
                                        <th>1 (คะแนน)</th>
                                        <th>2 (คะแนน)</th>
                                        <th>3 (คะแนน)</th>
                                        <th>4 (คะแนน)</th>
                                        <th>5 (คะแนน)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b">
                                        <td class="text-center">แผนการจัดการเรียนรู้มีความสนุก</td>
                                        <td class="text-center">
                                            <input type="radio" name="eva_score" class="default:ring-2" value="1" required/>
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="eva_score" class="default:ring-2" value="2" required/>
                                        </td>
                                        <td class=" text-center">
                                            <input type="radio" name="eva_score" class="default:ring-2" value="3" required/>
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="eva_score" class="default:ring-2" value="4" required/>
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="eva_score" class="default:ring-2" value="5" required/>
                                        </td>
                                    </tr>       
                                    <tr class="mt-2 border-b">
                                        <td class="text-center">มีการจัดการเรียนรู้ให้ได้ความรู้ตรงตามวัตถุประสงค์</td>
                                        <td class="text-center">
                                            <input type="radio" name="eva_score2" class="default:ring-2" value="1" required/>
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="eva_score2" class="default:ring-2" value="2" required/>
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="eva_score2" class="default:ring-2" value="3" required/>
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="eva_score2" class="default:ring-2" value="4" required/>
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="eva_score2" class="default:ring-2" value="5" required/>
                                        </td>
                                    </tr>
                                    <tr class="mt-2 border-b">
                                        <td class="text-center">สามารถนำความรู้ที่ได้รับไปประยุกต์ใช้ต่อได้</td>
                                        <td class="text-center">
                                            <input type="radio" name="eva_score3" class="default:ring-2" value="1" required/>
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="eva_score3" class="default:ring-2" value="2" required/>
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="eva_score3" class="default:ring-2" value="3" required/>
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="eva_score3" class="default:ring-2" value="4" required/>
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="eva_score3" class="default:ring-2" value="5" required/>
                                        </td>
                                    </tr>
                                    <tr class="mt-2 border-b m-3">
                                        <td class="text-center">มีการจัดกิจกรรมการเรียนรู้ที่ช่วยส่งเสริมในการเรียนรู้</td>
                                        <td class="text-center">
                                            <input type="radio" name="eva_score4" class="default:ring-2" value="1" required/>
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="eva_score4" class="default:ring-2" value="2" required/>
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="eva_score4" class="default:ring-2" value="3" required/>
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="eva_score4" class="default:ring-2" value="4" required/>
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="eva_score4" class="default:ring-2" value="5" required/>
                                        </td>
                                    </tr>
                                    <tr class="mt-2">
                                        <td class="text-center">มีการอธิบายวัตถุประสงค์และผลลัพธ์การเรียนรู้</td>
                                        <td class="text-center">
                                            <input type="radio" name="eva_score5" class="default:ring-2" value="1" required/>
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="eva_score5" class="default:ring-2" value="2" required/>
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="eva_score5" class="default:ring-2" value="3" required/>
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="eva_score5" class="default:ring-2" value="4" required/>
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="eva_score5" class="default:ring-2" value="5" required/>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>                            
                        </div>

                        <div class="space-y-6 bg-white sm:p-6">
                                <label for="about" class="block  font-medium text-gray-700">ความคิดเห็นเพิ่มเติม</label>
                                <div class="">
                                    <textarea id="eva_comment" name="eva_comment" rows="10" class="p-3 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="เขียนจุดที่อยากให้ปรับปรุงหรือเพิ่มเติมได้เลย" required>
					                    <?php 					
						                    echo $formbyid['lp_info'];
					                    ?>
					                </textarea>
                                </div>
                            </div>
                        <div class="py-3 text-right sm:px-0 ">
                            <a href="../sub-index/all-post.php" class="hover:-translate-y-1 duration-300 hover:scale-100 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none ">Cancel</a>
                            <button type="reset" class="hover:-translate-y-1 duration-300 hover:scale-100 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-yellow-500 hover:bg-yellow-600 focus:outline-none ">Reset</button>
                            <button type="button" class="mr-3 hover:-translate-y-1 duration-300 hover:scale-100 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none " data-modal-toggle="popup-modal">Save</button>
                        </div>
                        </div>
                        <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                <div class="relative bg-white rounded-lg shadow">
                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-toggle="popup-modal">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <div class="p-6 text-center">
                                    <svg class="mx-auto mb-4 w-14 h-14 text-gray-400 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <h3 class="mb-5 text-lg font-normal text-gray-500">คุณต้องการยืนยันที่จะส่งประเมินใช่ไหม</h3>
                                    <button data-modal-toggle="popup-modal" type="submit" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
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
            </div>
        </section>
        </div>
    </div>
    <script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
</body>
</html>
