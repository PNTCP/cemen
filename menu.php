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

    <!-- ไอคอนไลน์กับสั่งซื้อ -->
    <div class="mobile-header-row">
        <button class="main-hamburger" id="mainHamburgerBtn" aria-label="Open menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <a href="https://line.me/ti/p/eAmTWa8mkc" class="mobile-header-icon" title="สั่งซื้อออนไลน์">
            <img src="https://static.wixstatic.com/media/51972b_e40282317e6b42ee83ceb2135f39f4d2~mv2.png/v1/fill/w_133,h_39,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/สั่งซื้อออนไลน์.png" alt="Order Online">
        </a>
        <a href="https://line.me/ti/p/eAmTWa8mkc" class="mobile-header-icon" target="_blank" rel="noopener" title="LINE">
            <img src="https://scdn.line-apps.com/n/line_add_friends/btn/en.png" alt="คลิ๊กที่นี่" style="background:#fff;border-radius:6px;">
        </a>
    </div>
</div>
    <div class="menu-overlay" id="menuOverlay"></div>

<!-- ชุดปุ่มเมนูล่างจอของทรศ -->
 <nav class="mobile-bottom-nav">
    <a href="contact.php" class="mobile-bottom-item" title="ติดต่อเรา">
        <img src="https://cdn-icons-png.flaticon.com/512/1077/1077012.png" alt="ติดต่อเรา" class="mobile-bottom-icon">
        <span class="mobile-bottom-label">ติดต่อเรา</span>
    </a>
    <a href="https://line.me/ti/p/eAmTWa8mkc" class="mobile-bottom-item" target="_blank" rel="noopener" title="LINE">
        <img src="https://cdn-icons-png.flaticon.com/512/2111/2111498.png" alt="LINE" class="mobile-bottom-icon">
        <span class="mobile-bottom-label">LINE</span>
    </a>
    <a href="https://www.youtube.com/c/CONCRETEDECORTHAILAND" class="mobile-bottom-item" target="_blank" rel="noopener" title="YouTube">
        <img src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" alt="YouTube" class="mobile-bottom-icon">
        <span class="mobile-bottom-label">YouTube</span>
    </a>
    <a href="#" class="mobile-bottom-item" title="ที่ตั้งร้าน">
        <img src="https://cdn-icons-png.flaticon.com/512/1946/1946436.png" alt="ที่ตั้งร้าน" class="mobile-bottom-icon">
        <span class="mobile-bottom-label">ที่ตั้งร้าน</span>
    </a>
</nav>


    <style>
        .mobile-header-icon {
            display: none;
        }
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
        /* Menu แบบทรศ. */
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
        .mobile-bottom-nav {
            display: none;
        }
        /* for MB */
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
            body {
                margin-left: 0 !important;
                margin-right: 0 !important;
                padding: 0 !important;
            }
            .main-menu {
                width: 100vw !important;
                max-width: 100vw !important;
                margin: 0 !important;
                padding: 0 !important;
                display: block;
            }
            /* Optional: Remove container margin for the image's parent */
            body > div[style*="max-width:981px"] {
                margin: 0 !important;
                width: 100vw !important;
                max-width: 100vw !important;
                padding: 0 !important;
            }
            .mobile-header-row {
                display: flex;
                flex-direction: row;
                align-items: center;
                gap: 12px;
                margin-top: 12px;
                margin-left: 0;
            }
            .mobile-header-icon {
                display: flex;
                align-items: center;
            }
            .mobile-header-icon img {
                max-width: 100%;
                height: auto;
                display: block;
                max-height: 40px; /* ควบคุมความสูงสูงสุด */
            }
            .main-hamburger {
                display: flex;
                margin: 0;
            }
            .mobile-header-icon img {
                max-height: 40px;
                height: 40px;
                width: auto;
                display: block;
            }
            .mobile-header-icon {
                display: flex;
                align-items: center;
            }

            /* ปุ่มเมนูด้านล่าง */
            .mobile-bottom-nav {
                display: flex;
                position: fixed;
                left: 0;
                right: 0;
                bottom: 0;
                width: 100vw;
                background: #fff;
                border-top: 1px solid #e0e0e0;
                box-shadow: 0 -2px 10px rgba(0,0,0,0.07);
                z-index: 1200;
                justify-content: space-around;
                align-items: center;
                height: 56px;
            }
            }
            .mobile-bottom-item {
                flex: 1 1 0;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                text-decoration: none;
                color: #222;
                font-family: Kanit, sans-serif;
                font-size: 12px;
                padding: 0;
                transition: background 0.2s;
                min-width: 0;
            }
            .mobile-bottom-item:active {
                background: #f2f2f2;
            }
            .mobile-bottom-icon {
                width: 24px;
                height: 24px;
                margin-bottom: 2px;
                display: block;
            }
            .mobile-bottom-label {
                font-size: 11px;
                line-height: 1.1;
                text-align: center;
                margin-top: 1px;
                color: #222;
                font-family: Kanit, sans-serif;
                display: block;
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
        <div class="menu-bar-item"><a href="/cemen1/index.php">หน้าแรก</a></div>
        <div class="menu-bar-item"><a href="/cemen1/course.php">คอร์สอบรม</a></div>
        <div class="menu-bar-item"><a href="/cemen1/menu1.php">คอนกรีตพิมพ์ลาย</a></div>
        <div class="menu-bar-item"><a href="/cemen1/menu2.php">คอนกรีตลอกลาย</a></div>
        <div class="menu-bar-item"><a href="/cemen1/menu3.php">คอนกรีตขัดเงา</a></div>
        <div class="menu-bar-item"><a href="/cemen1/Q&A.php">ถามตอบ</a></div>
        <div class="menu-bar-item"><a href="/cemen1/info1.php">คลังความรู้</a></div>
        <div class="menu-bar-item"><a href="/cemen1/Contact.php">ติดต่อเรา</a></div>
    </div>
    <!-- Mobile  Menu -->
    <nav class="slide-menu-bar" id="slideMenuBar" style="font-family: Kanit;">
        <div class="menu-bar-item"><a href="/cemen1/index.php">หน้าแรก</a></div>
        <div class="menu-bar-item"><a href="/cemen1/course.php">คอร์สอบรม</a></div>
        <div class="menu-bar-item"><a href="/cemen1/menu1.php">คอนกรีตพิมพ์ลาย</a></div>
        <div class="menu-bar-item"><a href="/cemen1/menu2.php">คอนกรีตลอกลาย</a></div>
        <div class="menu-bar-item"><a href="/cemen1/menu3.php">คอนกรีตขัดเงา</a></div>
        <div class="menu-bar-item"><a href="/cemen1/Q&A.php">ถามตอบ</a></div>
        <div class="menu-bar-item"><a href="/cemen1/info1s.php">คลังความรู้</a></div>
        <div class="menu-bar-item"><a href="/cemen1/Contact.php">ติดต่อเรา</a></div>
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
            <a href="https://line.me/ti/p/eAmTWa8mkc" style="padding-right: 10px; padding-left: 10px;"><img src="https://static.wixstatic.com/media/51972b_e40282317e6b42ee83ceb2135f39f4d2~mv2.png/v1/fill/w_386,h_112,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/สั่งซื้อออนไลน์.png" alt=""></a>
            <a href="" style="padding-right: 10px; padding-left: 10px;"><img src="https://static.wixstatic.com/media/51972b_82ce5a0a5fda4e5f98c00b619a0099e8~mv2.png/v1/crop/x_13,y_0,w_806,h_226/fill/w_368,h_100,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/LASADA.png" alt=""></a>
            <a href="" style="padding-right: 10px; padding-left: 10px;"><img src="https://static.wixstatic.com/media/51972b_c301e0b355324c81bfd594c06f59e506~mv2.png/v1/fill/w_330,h_100,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Shoppee.png" alt=""></a>        
            <div>
                <a href="https://line.me/ti/p/eAmTWa8mkc" style="padding-right: 10px; padding-left: 10px;"><img src="https://v4i.rweb-images.com/www.sc-broker.com/images/editor/line-click-1.gif" alt=""></a>
            </div>
    </div>    


        <!-- button scrool mouse * 200 kub bro ready with animation java script -->
<button onclick="scrollToTop()" id="scrollBtn" title="เลื่อนขึ้นบนสุด">⬆️</button>

<script>
    const scrollBtn = document.getElementById("scrollBtn");

    window.onscroll = function () {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            scrollBtn.classList.add("show");
        } else {
            scrollBtn.classList.remove("show");
        }
    };

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
</script>

<style>
    #scrollBtn {
        position: fixed;
        bottom: 40px;
        right: 40px;
        z-index: 1000;
        font-size: 20px;
        border: none;
        outline: none;
        background-color: #007BFF;
        color: white;
        cursor: pointer;
        padding: 12px 16px;
        border-radius: 50%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        opacity: 0;
        visibility: hidden;
        transform: translateY(50px);
        transition: all 0.4s ease;
    }

    #scrollBtn.show {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    #scrollBtn:hover {
        background-color: #0056b3;
    }
</style>
    
</body>
</html>