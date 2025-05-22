<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit&display=swap">
</head>
<body style="margin-left: 17%; margin-right: 17%; margin-top: 0px;">
    <div style="width:100%; max-width:981px; margin:0 auto;">
        <img class="main-menu" src="https://static.wixstatic.com/media/51972b_44796e442e154b6b86100bcaa1177f10~mv2.jpg/v1/fill/w_981,h_371,al_c,q_85,enc_avif,quality_auto/พื้นคอนกรีตพิมพ์ลาย-Cover.jpg" alt="" >

        <button class="main-hamburger" id="mainHamburgerBtn" aria-label="Open menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
    <div class="menu-overlay" id="menuOverlay"></div>
    <style>
        .main-menu {
            width: 100%;
            max-width: 981px;
            height: auto;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .menu-bar {
            display: flex;
            justify-content: space-around;
            background-color:rgb(32, 32, 32);
            padding: 10px 0;
            width: 100%;
            max-width: 981px;
            margin-left: auto;
            margin-right: auto;
            transition: none;
        }
        .menu-bar-item {
            /* flex: 1; */
            text-align: center;
        }
        .menu-bar-item a {
            text-decoration: none;
            color: white;
            font-size: 18px;
            transition: transform 0.3s ease, color 0.3s ease;
        }
        .menu-bar-item a:hover {
            color: blue;
        }
        .menu-bar-item a:active {
            color: red;
        }
        /* เรียงชั้น */
        .hamburger {
            display: none;
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 1002;
            width: 40px;
            height: 40px;
            background: none;
            border: none;
            cursor: pointer;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .hamburger span {
            display: block;
            width: 30px;
            height: 4px;
            margin: 5px 0;
            background: #222;
            border-radius: 2px;
            transition: 0.4s;
        }
        /* เอฟเฟค */
        .menu-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(0,0,0,0.3);
            z-index: 1000;
            opacity: 0;
            transition: opacity 0.3s;
        }
        .menu-overlay.active {
            display: block;
            opacity: 1;
        }
        /* แบบทรศ. */
        .mobile-menu {
            display: none;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 0;
            right: -300px;
            width: 260px;
            height: 100vh;
            background: rgb(32,32,32);
            z-index: 1001;
            box-shadow: -2px 0 8px rgba(0,0,0,0.2);
            transition: right 0.4s cubic-bezier(0.77,0.2,0.05,1), opacity 0.3s;
            opacity: 0;
            padding-bottom: 60px;
        }
        .mobile-menu.active {
            right: 0;
            opacity: 1;
            display: flex;
        }
        .mobile-menu .menu-bar-item {
            width: 100%;
            padding: 18px 0;
            text-align: center;
        }
        .mobile-menu .menu-bar-item a {
            color: white;
            font-size: 22px;
            text-decoration: none;
            display: block;
            width: 100%;
        }
        /* Hamburger styles for mobile, directly below and left-aligned with main-menu */
        .main-hamburger {
            display: none;
            margin-top: 12px;
            margin-left: 0;
            margin-right: auto;
            width: 48px;
            height: 48px;
            background: rgba(32,32,32,0.95);
            border: none;
            /* Remove border-radius for rectangle */
            border-radius: 0;
            cursor: pointer;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.2);
            position: static;
        }
        .main-hamburger span {
            display: block;
            width: 28px;
            height: 4px;
            margin: 4px auto;
            background: #fff;
            border-radius: 2px;
            transition: 0.4s;
        }
        @media (max-width: 768px) {
            .main-hamburger {
                display: flex;
            }
            .menu-bar {
                display: none;
            }
            .menu-icon, .menu-icon-buy {
                display: none !important;
            }
        }
        /* Slide-in menu-bar for mobile */
        .slide-menu-bar {
            display: none;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 0;
            right: -300px;
            width: 260px;
            height: 100vh;
            background: rgb(32,32,32);
            z-index: 1001;
            box-shadow: -2px 0 8px rgba(0,0,0,0.2);
            transition: right 0.4s cubic-bezier(0.77,0.2,0.05,1), opacity 0.3s;
            opacity: 0;
            padding-bottom: 60px;
        }
        .slide-menu-bar.active {
            right: 0;
            opacity: 1;
            display: flex;
        }
        .slide-menu-bar .menu-bar-item {
            width: 100%;
            padding: 18px 0;
            text-align: center;
        }
        .slide-menu-bar .menu-bar-item a {
            color: white;
            font-size: 22px;
            text-decoration: none;
            display: block;
            width: 100%;
        }
    </style>
    <!-- Overlay -->
    <div class="menu-overlay" id="menuOverlay"></div>
    <!-- Desktop Menu Bar -->
    <div class="menu-bar" style="font-family: Kanit;">
        <div class="menu-bar-item"><a href="index.php">หน้าแรก</a></div>
        <div class="menu-bar-item"><a href="course.php">คอร์สอบรม</a></div>
        <div class="menu-bar-item"><a href="#">คอนกรีตพิมพ์ลาย</a></div>
        <div class="menu-bar-item"><a href="#">คอนกรีตลอกลาย</a></div>
        <div class="menu-bar-item"><a href="#">คอนกรีตขัดเงา</a></div>
        <div class="menu-bar-item"><a href="#">ถามตอบ</a></div>
        <div class="menu-bar-item"><a href="#">คลังความรู้</a></div>
        <div class="menu-bar-item"><a href="#">ติดต่อเรา</a></div>
    </div>
    <!-- Mobile  Menu -->
    <nav class="slide-menu-bar" id="slideMenuBar" style="font-family: Kanit;">
        <div class="menu-bar-item"><a href="index.php">หน้าแรก</a></div>
        <div class="menu-bar-item"><a href="course.php">คอร์สอบรม</a></div>
        <div class="menu-bar-item"><a href="#">คอนกรีตพิมพ์ลาย</a></div>
        <div class="menu-bar-item"><a href="#">คอนกรีตลอกลาย</a></div>
        <div class="menu-bar-item"><a href="#">คอนกรีตขัดเงา</a></div>
        <div class="menu-bar-item"><a href="#">ถามตอบ</a></div>
        <div class="menu-bar-item"><a href="#">คลังความรู้</a></div>
        <div class="menu-bar-item"><a href="#">ติดต่อเรา</a></div>
    </nav>
    <script>
        const mainHamburgerBtn = document.getElementById('mainHamburgerBtn');
        const slideMenuBar = document.getElementById('slideMenuBar');
        const menuOverlay = document.getElementById('menuOverlay');
        let menuOpen = false;
        function openSlideMenu() {
            slideMenuBar.classList.add('active');
            menuOverlay.classList.add('active');
            menuOpen = true;
        }
        function closeSlideMenu() {
            slideMenuBar.classList.remove('active');
            menuOverlay.classList.remove('active');
            menuOpen = false;
        }
        mainHamburgerBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            if (menuOpen) {
                closeSlideMenu();
            } else {
                openSlideMenu();
            }
        });
        menuOverlay.addEventListener('click', closeSlideMenu);
        document.addEventListener('mousedown', function(e) {
            if (menuOpen && !slideMenuBar.contains(e.target) && e.target !== mainHamburgerBtn) {
                closeSlideMenu();
            }
        });
        document.addEventListener('touchstart', function(e) {
            if (menuOpen && !slideMenuBar.contains(e.target) && e.target !== mainHamburgerBtn) {
                closeSlideMenu();
            }
        });
    </script>
    
        <style>
            .menu-icon {
                display: center;
                justify-content: space-around;
                padding: 10px;
                text-align: center
            }
            .menu-icon a {
                flex:1;
                text-decoration: none;
                color: white;
                font-size: 50px;
                border-right: 3px solid #ccc;
            }
            .menu-icon img {
                width: 110px;
                height: auto;
            }
            .menu-icon img:hover {
                transform: scale(1.1);
                transition: transform 0.3s ease;
            }
            .menu-icon a:last-child {
                border-right: none;
            }
            .menu-icon-buy {
                display: center;
                justify-content: space-around;
                padding: 0px;
                text-align: center;
                margin-top: 20px
            }
            .menu-icon-buy a {
                flex:1;
                text-decoration: none;
                color: white;
                font-size: 50px;
            }
            .menu-icon-buy img {
                width: 200px;
                height: auto;
            }
            .menu-icon-buy img:hover {
                transform: scale(1.1);
                transition: transform 0.3s ease;
            }
            .menu-icon-buy a:last-child {
                border-right: none;
            }
        </style>

     <div class="menu-icon">
        <a href="" style="padding-right: 10px;"><img src="https://static.wixstatic.com/media/51972b_b284427a7a2f4a77a0c483b4a97d36c0~mv2.png/v1/crop/x_20,y_0,w_800,h_312/fill/w_232,h_82,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/สีคัลเลอร์%20ซีซั่นส์.png" alt=""></a> 
        <a href="" style="padding-right: 10px; padding-left: 10px;"><img src="https://static.wixstatic.com/media/51972b_b8e010869a8c4b938bc6890706482fef~mv2.png/v1/fill/w_240,h_82,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/สีกรดย้อมอมตะ.png" alt=""></a>
        <a href="" style="padding-right: 10px; padding-left: 10px;"><img src="https://static.wixstatic.com/media/51972b_90fef48b1c1f4263b47f4e48eb73d398~mv2.png/v1/fill/w_260,h_98,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/M-100.png" alt=""></a>
        <a href="" style="padding-right: 10px; padding-left: 10px;"><img src="https://static.wixstatic.com/media/51972b_b580e6f933a549088fd3a43f694be7c7~mv2.png/v1/fill/w_250,h_98,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Polishing.png" alt=""></a>
        <a href="" style="padding-right: 10px; padding-left: 10px;"><img src="https://static.wixstatic.com/media/51972b_0cb8663f859a4abab591bc8e824c3ce6~mv2.png/v1/fill/w_260,h_98,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/MMWALL.png" alt=""></a>
        <a href="" style="padding-right: 10px; padding-left: 10px;"><img src="https://static.wixstatic.com/media/51972b_7cba64fde84842bfb80571a0efad2181~mv2.png/v1/fill/w_260,h_98,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/คอนกรีตลอกลาย.png" alt=""></a>
        <a href="" style="padding-right: 10px; padding-left: 10px;"><img src="https://static.wixstatic.com/media/51972b_66595d7081ac4597a763ae1cce5e1914~mv2.png/v1/fill/w_208,h_100,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/โลโก้หินเทียม.png" alt=""></a>
    </div>

    <div class="menu-icon-buy">
            <a href="" style="padding-right: 10px; padding-left: 10px;"><img src="https://static.wixstatic.com/media/51972b_e40282317e6b42ee83ceb2135f39f4d2~mv2.png/v1/fill/w_386,h_112,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/สั่งซื้อออนไลน์.png" alt=""></a>
            <a href="" style="padding-right: 10px; padding-left: 10px;"><img src="https://static.wixstatic.com/media/51972b_82ce5a0a5fda4e5f98c00b619a0099e8~mv2.png/v1/crop/x_13,y_0,w_806,h_226/fill/w_368,h_100,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/LASADA.png" alt=""></a>
            <a href="" style="padding-right: 10px; padding-left: 10px;"><img src="https://static.wixstatic.com/media/51972b_c301e0b355324c81bfd594c06f59e506~mv2.png/v1/fill/w_330,h_100,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Shoppee.png" alt=""></a>        
            <div>
                <a href="" style="padding-right: 10px; padding-left: 10px;"><img src="https://v4i.rweb-images.com/www.sc-broker.com/images/editor/line-click-1.gif" alt=""></a>
            </div>
    </div>    

    
</body>
</html>