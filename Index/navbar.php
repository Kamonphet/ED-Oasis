<?php
error_reporting(E_ALL ^ E_WARNING);
?>
<script src="https://cdn.tailwindcss.com"></script>
<nav class="bg-white-500 shadow-sm">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="h-16 w-auto flex lg:flex-row md:flex-col-reverse items-center flex-wrap">
        <!-- Items1,1 -->
        <div class="flex">
          <!-- เชื่อมโยงหน้า -->
          <div class="mx-3">
            <a href="../sub-index/form-pan.php" class="text-black-100 hover:text-blue-600">สร้างแผนการสอน</a>
          </div>
          <div class="mx-3">
            <a href="#" class="text-red-400 hover:text-red-600">สั่งซื้อแผนการสอน</a>
          </div>
          <div class="mx-3">
            <a href="../sub-index/form-pramern.php" class="text-black-100 hover:text-blue-600">ประเมินแผนการสอน</a>
          </div>
        </div>
        <!-- Items1,2 -->
        <!-- Logo -->
        <div class="mx-auto">
          <a href="../Index/main_menu.php"><h1 class="text-3xl font-semibold text-blue-500"><img src="../img/Logo.png" class="w-20" alt=""></h1></a>
        </div>
        <!-- Items 1,3 -->
        <div class="mx-auto flex">
            <div class="flex items-center">
                <form action="#"  method="GET">
                    <div class="flex">
                        <label for="simple-search" class="sr-only">ค้นหาแผนการสอน</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ค้นหาแผนการสอน" required>
                        </div>
                        <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-gray-700 rounded-lg border border-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </button>                        
                    </div>

                </form>            
            </div>

            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-4 sm:pr-0">
                <h3 id="time_span" class="text-black">Time</h3>น.
            </div>
            
            <div class="flex items-center md:order-2 ml-3 ">
                <!-- Profile -->
                <button type="button" data-dropdown-toggle="language-dropdown-menu" class="inline-flex items-center justify-center p-2 text-sm  rounded  bg-white-100 ">
                    <img class="h-8 w-8 mx-2 rounded-full" src="../img/Logo.png" alt="">
                    <?php echo $_SESSION['user_sname']; ?>
                </button>
                <!-- DropDown -->
                <div class="hidden z-40 w-44 bg-white rounded divide-y divide-gray-100 shadow " id="language-dropdown-menu">
                    <ul class="py-1 " role="none">
                        <li class="rounded-lg">
                            <a href="../sub-index/profile.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-300" role="menuitem">
                                <i class="fa-solid fa-user"></i>
                                <div class="inline-flex items-center">
                                    โปรไฟล์ส่วนตัว
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="../sub-index/profile.php" class="block px-4 py-2 text-sm text-gray-700  hover:bg-gray-100" role="menuitem">
                                <i class="fa-solid fa-book"></i>
                                <div class="inline-flex items-center">
                                    แผนการสอนของฉัน
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="../sub-index/dashboard.php" class="block px-4 py-2 text-sm text-gray-700  hover:bg-gray-100" role="menuitem">
                                <i class="fa-solid fa-chart-column"></i>
                                <div class="inline-flex items-center">
                                    ภาพรวมของระบบ
                                </div>
                            </a>
                        </li>
                        <hr>
                        <li>
                            
                            <button type="button" class="block px-4 py-2 text-sm text-red-700  hover:bg-gray-100" data-modal-toggle="popup-modal" role="menuitem">
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                    ออกจากระบบ                           
                            </button>
                              
                            
                        </li>
                    </ul>
                </div>
                <form action="../auth/logout.php">
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
                          <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">คุณต้องการยืนยันที่จะออกจากระบบใช่ไหม</h3>
                          <button data-modal-toggle="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800  font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                            ตกลง
                          </button>
                          <button data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100  rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 ">ยกเลิก</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                                
            </div>
        </div>
      </div>
    </div>

  </nav>
  <script>
    const d = new Date();
    document.getElementById("demo").innerHTML = d.toDateString();
  </script>

  <script>
    timer();

    function timer() {
      var currentTime = new Date()
      var hours = currentTime.getHours()
      var minutes = currentTime.getMinutes()
      var sec = currentTime.getSeconds()
      if (minutes < 10) {
        minutes = "0" + minutes
      }
      if (sec < 10) {
        sec = "0" + sec
      }
      var t_str = hours + ":" + minutes + ":" + sec + " ";
      document.getElementById('time_span').innerHTML = t_str;
      setTimeout(timer, 1000);
    }
  </script>