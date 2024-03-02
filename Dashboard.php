<?php
    session_start();

    $user = ( $_SESSION['admin']);
    if(!isset($_SESSION['admin'])) header('location: Login.php');
     $user = $_SESSION['admin'];
    



?>
<!DOCTYPE html>
<html>
    <head>
        <title> Vending Machine IMS </title>

        <link rel="stylesheet" type="text/css" href="css/IMSstyle.css">
        <script src="https://kit.fontawesome.com/883b8ee9d9.js" crossorigin="anonymous"></script>
        
    </head>
    <body id="DashboardBG">
        <div id="dashboardMainContainer">
            <div class="dashboardSideBar" id="dashboardSideBar">
                <h3 class="dashboardLogo" id="dashboardLogo">Uniform-Inventory</h3>
                <div class="dashboardSideBar_User">
                    <img src="css/Pictures/Users/User1.jpg" alt="user image" id="UserImg"/>
                    <span><?= $user['first_name']?></span>
                    
                
                </div>
                <div class="dashboardSideBar_Menu">
                    <ul class="dashboardSideBar_Menu_lists">
                        <li class = "menuActive">
                            <a href="#"><i class="fa-solid fa-gauge "></i><span class="menuText">Dashboard</span></a>
                        </li>
                        <li>
                            <a href=""><i class="fa-solid fa-arrow-trend-up"></i><span class="menuText">Sales Report</span></a>
                        </li>
                        <li>
                            <a href=""><i class="fa-solid fa-bell"></i><span class="menuText">Notification</span></a>
                        </li>
                        <li>
                            <a href=""><i class="fa-solid fa-gear"></i><span class="menuText">Settings</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dashboardContent_Container" id="dashboardContent_Container">
                <div class="dashboard_topNav">
                    <a href="" id="toggleButton"><i class="fa-solid fa-bars"></i></a>
                    <a href="PHP_Database/logout.php" id="logoutButton"><i class="fa-solid fa-arrow-right-from-bracket"></i>Logout</a>
            
                </div>
                <div class="dashboardContent">
                    <div class="dashboardContent_Main">

                    </div>
                </div>

            </div>
        </div>
    <script src="DashboardScripts.js"></script>
    </body>
</html>
