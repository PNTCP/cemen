<?php include "premenu.php"; ?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>หน้าหลัก</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@900&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Prompt', sans-serif;
      margin: 0;
      background: #fff;
      color: #222;
    }
    svg text {
      font-family: 'Kanit', sans-serif;
      font-weight: 900;
    }
    /* Main Image */
    .main-image {
      width: 90%;
      max-width: 1600px;
      max-height: 520px;
      object-fit: cover;
      display: block;
      margin: 32px auto 32px auto;
      border-radius: 8px;
      box-shadow: 0 4px 24px rgba(0,0,0,0.10);
    }
    .services-title {
      text-align: center;
      color: #222;
      font-size: 2.4rem;
      font-weight: 600;
      margin-bottom: 8px;
      letter-spacing: 0.02em;
      position: relative;
      margin-top: 0;
    }
    .services-title::after {
      content: '';
      display: block;
      margin: 18px auto 0 auto;
      width: 80px;
      height: 4px;
      border-radius: 2px;
      background: #0d6efd;
      opacity: 0.18;
    }
    .services-row {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: flex-start;
      gap: 32px;
      padding: 48px 0 48px 0;
      background: #fff;
      max-width: 1400px;
      margin: 0 auto;
    }
    .service-card {
      background: #fff;
      border-radius: 18px;
      box-shadow: 0 4px 24px rgba(13,110,253,0.10), 0 2px 8px rgba(229,81,0,0.10);
      padding: 48px 36px 40px 36px;
      display: flex;
      flex-direction: column;
      align-items: center;
      position: relative;
      overflow: hidden;
      min-width: 400px;
      max-width: 400px;
      width: 400px;
      margin-bottom: 24px;
      transition: box-shadow 0.2s, transform 0.18s;
      cursor: pointer;
    }
    .service-card:hover {
      box-shadow: 0 8px 32px rgba(13,110,253,0.18), 0 4px 16px rgba(229,81,0,0.18);
      transform: translateY(-4px) scale(1.025);
      z-index: 2;
    }
    .letter-mask {
      width: 300px;
      height: 300px;
      margin-bottom: 24px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .letter-mask img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .service-card h4 {
      color: #e65100;
      font-size: 1.85rem;
      font-weight: 600;
      margin: 0 0 10px 0;
      text-align: center;
    }
    .service-desc {
      color: #222;
      font-size: 1.3rem;
      text-align: center;
      line-height: 1.7;
    }
    /* Product Styles */
    .product-row {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 48px;
      max-width: 1700px;
      margin: 0 auto 80px auto;
    }
    .product-card {
      background: #fff;
      border-radius: 18px;
      box-shadow: 0 4px 24px rgba(0,0,0,0.10);
      padding: 32px 24px 32px 24px;
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 420px;
      min-width: 320px;
      margin-bottom: 0;
      position: relative;
      transition: box-shadow 0.2s, transform 0.18s;
      z-index: 1;
      overflow: visible;
    }
    .product-card:hover {
      box-shadow: 0 8px 32px rgba(13,110,253,0.18), 0 4px 16px rgba(0,86,255,0.18);
      transform: translateY(-4px) scale(1.025);
      z-index: 2;
    }
    .product-img-wrap {
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 16px rgba(0,0,0,0.10);
      padding: 12px;
      margin-bottom: 24px;
      width: 340px;
      height: 260px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .product-img-wrap img {
      max-width: 100%;
      max-height: 100%;
      border-radius: 6px;
      object-fit: contain;
    }
    .product-title {
      font-size: 1.35rem;
      font-weight: 700;
      font-family: 'Kanit', 'Prompt', sans-serif;
      margin: 18px 0 12px 0;
      text-align: center;
    }
    .product-desc {
      font-size: 1.08rem;
      color: #222;
      text-align: center;
      margin-bottom: 32px;
      min-height: 72px;
    }
    .product-btn {
      display: inline-block;
      background: #222;
      color: #fff;
      font-size: 1.18rem;
      font-weight: 600;
      padding: 14px 44px;
      border-radius: 32px;
      box-shadow: 0 8px 32px rgba(13,110,253,0.13);
      text-decoration: none;
      transition: background 0.18s;
      margin-top: 12px;
    }
    .product-card:hover .product-btn {
      background: #0d6efd;
      color: #fff;
    }
    @media (max-width: 1200px) {
      .header-content, .topbar-content, .main-image, .services-row {
        max-width: 100%;
        padding-left: 12px;
        padding-right: 12px;
      }
      .main-image {
        width: 98%;
      }
      .services-row {
        gap: 18px;
      }
      .product-row {
        gap: 24px;
      }
      .product-card {
        width: 98vw;
        min-width: 0;
        max-width: 98vw;
        padding: 18px 4vw 24px 4vw;
      }
      .product-img-wrap {
        width: 90vw;
        max-width: 340px;
        height: 180px;
      }
    }
    @media (max-width: 900px) {
      .header-content, .topbar-content {
        flex-direction: column;
        gap: 8px;
        padding: 10px 4px;
      }
      nav {
        gap: 18px;
        flex-wrap: wrap;
        justify-content: center;
      }
      .logo img {
        height: 56px;
      }
      .main-image {
        max-height: 180px;
        margin-bottom: 18px;
      }
      .services-row {
        flex-direction: column;
        align-items: center;
        gap: 32px;
        padding: 24px 0 10px 0;
      }
      .service-card {
        min-width: 0;
        max-width: 100%;
        width: 100%;
        padding: 24px 8px 20px 8px;
      }
      .letter-mask {
        width: 160px;
        height: 160px;
      }
      .services-title {
        font-size: 1.3rem;
      }
      .why-choose-text {
        text-align: center !important;
      }
    }
    /* Brand Slider Styles */
    .brand-slider-container {
      max-width: 1700px;
      margin: 48px auto 0 auto;
      overflow: hidden;
      background: #fff;
    }
    .brand-slider-title {
      text-align: center;
      font-size: 2.3rem;
      font-weight: 700;
      font-family: 'Kanit','Prompt',sans-serif;
      margin-bottom: 8px;
    }
    .brand-slider-title-bar {
      width: 170px;
      height: 2px;
      background: #1976d2;
      opacity: 0.18;
      margin: 0 auto 32px auto;
    }
    .brand-slider-track {
      display: flex;
      align-items: center;
      gap: 40px;
      animation: brand-scroll 28s linear infinite;
      will-change: transform;
    }
    .brand-slider-logo {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 16px rgba(0,0,0,0.13);
      padding: 24px 36px;
      min-width: 180px;
      min-height: 120px;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: box-shadow 0.2s, transform 0.2s;
    }
    .brand-slider-logo img {
      max-width: 160px;
      max-height: 90px;
      object-fit: contain;
      display: block;
    }
    @keyframes brand-scroll {
      0% { transform: translateX(0); }
      100% { transform: translateX(-50%); }
    }
    .brand-slider-inner {
      display: flex;
      gap: 40px;
    }
    @media (max-width: 900px) {
      .brand-slider-track, .brand-slider-inner {
        gap: 24px;
      }
      .brand-slider-logo {
        min-width: 100px;
        min-height: 60px;
        padding: 12px 12px;
      }
      .brand-slider-logo img {
        max-width: 80px;
        max-height: 40px;
      }
    }
    
@media (max-width: 900px) {
  .footer-container {
    flex-direction: column;
    gap: 32px;
    align-items: flex-start;
    padding: 0 18px;
  }
  .footer-col {
    align-items: flex-start;
    min-width: 0;
  }
  .footer-logo {
    width: 180px;
    padding: 8px;
  }
}
  </style>
</head>
<body>
 
  <!-- Main Image -->
  <img class="main-image" src="https://cdi.co.th/wp-content/uploads/2025/05/349600-1-e1747881859218.jpg" alt="Main Banner">
  <!-- Services Title -->
  <div class="services-title">บริการของเรา</div>
<!-- Services Row -->
  <div class="services-row">
    <!-- Card 1 -->
    <div class="service-card">
      <div class="letter-mask">
        <img src="https://cdi.co.th/wp-content/uploads/2023/04/29-768x768.png" width="220" height="220" alt="C">
      </div>
      <h4>งานรับเหมาพื้นโรงงาน</h4>
      <div class="service-desc">
        พื้น Pu LF MF HF<br>
        ผนังคอนกรีตลวดลาย<br>
        พื้น Epoxy Coating,Self leveling<br>
        พื้นกันซึมดาดฟ้า  PUHybrid<br>
        พื้นคอนกรีตขัดเงา Polishing Crystal Floors
      </div>
    </div>
    <!-- Card 2 -->
    <div class="service-card">
      <div class="letter-mask">
        <img src="https://cdi.co.th/wp-content/uploads/2023/04/30-768x768.png" width="220" height="220" alt="D">
      </div>
      <h4>งานรับเหมาตกแต่งพื้นคอนกรีต</h4>
      <div class="service-desc">
        คอนกรีตพิมพ์ลาย<br>
        คอนกรีตลวดลาย<br>
        พื้น Carpet Stone<br>
        พื้นสำเร็จอ่อนคอนกรีต
      </div>
    </div>
    <!-- Card 3 -->
    <div class="service-card">
      <div class="letter-mask">
        <img src="https://cdi.co.th/wp-content/uploads/2023/10/Modern-Real-Estate-Property-Instagram-Post-3-1024x1024.png" width="220" height="220" alt="I">
      </div>
      <h4>งานรับเหมาติดตั้งผนัง</h4>
      <div class="service-desc">
        ผนังคอนกรีตพิมพ์ลาย<br>
        ผนังคอนกรีตลวดลาย<br>
        ผนังพ่นสีแกรนิต<br>
        ผนังกันความร้อน MM Wall
      </div>
    </div>
  </div>
  <!-- Add this section where you want the layout to appear -->
  <div style="display: flex; flex-wrap: wrap; justify-content: center; align-items: flex-start; gap: 48px; max-width: 1700px; margin: 64px auto 0 auto;">
    <!-- Left: Text and icons -->
    <div style="flex: 1 1 480px; min-width: 340px; max-width: 700px; text-align: right;">
      <div style="color: #1976d2; font-size: 1.05rem; font-weight: 600; margin-bottom: 18px; text-align: right;">Why Choose Us</div>
      <div style="font-family: 'Kanit', 'Prompt', sans-serif; font-size: 2.2rem; font-weight: 1000; line-height: 1.15; margin-bottom: 36px; text-align: right;"
     class="why-choose-text">
        ทีมงานมืออาชีพ ด้วย<br>
        ประสบการณ์มากกว่า 10 ปี<br>
        ที่ได้รับความไว้ วางใจให้<br>
        บริการรับเหมา งานคอนกรีต
      </div>
      <div style="width: 80px; height: 3px; background: #1976d2; opacity: 0.18; margin: 0 auto 28px auto;"></div>
      <div style="display: flex; justify-content: center; gap: 32px; flex-wrap: wrap;">
        <div style="text-align: center;">
          <img src="https://cdi.co.th/wp-content/uploads/2018/12/search-optimize.svg" alt="" style="width:70px; height:70px; margin-bottom: 10px;">
          <div style="font-size: 1rem; margin-top: 6px;">เป็น one stop service ที่เดียวครบครับ</div>
        </div>
        <div style="text-align: center;">
          <img src="https://cdi.co.th/wp-content/uploads/2018/12/web-project.svg" alt="" style="width:70px; height:70px; margin-bottom: 10px;">
          <div style="font-size: 1rem; margin-top: 6px;">เน้นให้บริการด้วยความจริงใจ</div>
        </div>
        <div style="text-align: center;">
          <img src="https://cdi.co.th/wp-content/uploads/2018/12/support.svg" alt="" style="width:70px; height:70px; margin-bottom: 10px;">
          <div style="font-size: 1rem; margin-top: 6px;">ปิดงานได้ไม่ทิ้งงาน</div>
        </div>
      </div>
    </div>
    <!-- Right: YouTube Clip -->
    <div style="flex: 1 1 600px; min-width: 340px; max-width: 800px;">
      <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 12px; box-shadow: 0 4px 24px rgba(0,0,0,0.12); background: #000;">
        <iframe src="https://www.youtube.com/embed/zYW_0GqbwPE?si=iOO3l8JQqgaRkgK8" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
          allowfullscreen
          style="position: absolute; top:0; left:0; width:100%; height:100%; border-radius: 12px;">
        </iframe>
      </div>
    </div>
  </div>
  <div style="text-align:center; margin: 80px 0 60px 0;">
    <div style="font-size:2.6rem; font-weight:700; margin-bottom:18px; font-family:'Kanit','Prompt',sans-serif;">
      สินค้าของเรา
    </div>
    <div style="width:170px; height:2px; background:#1976d2; opacity:0.18; margin:0 auto 32px auto;"></div>
    <a href="product.php" style="display:inline-block; background:#0d6efd; color:#fff; font-size:1.35rem; font-weight:600; padding:18px 44px; border-radius:32px; box-shadow:0 8px 32px rgba(13,110,253,0.13); text-decoration:none; transition:background 0.18s;">
      ดูสินค้าทั้งหมด
    </a>
  </div>
  <!-- Product Row -->
  <div class="product-row">
    <!-- Product 1 -->
    <div class="product-card">
      <div class="product-img-wrap">
        <img 
          src="https://cdi.co.th/wp-content/uploads/2023/04/1-Lithium-Slicate1510L-1-300x300.jpg"
          srcset="
            https://cdi.co.th/wp-content/uploads/2023/04/1-Lithium-Slicate1510L-1-300x300.jpg 300w,
            https://cdi.co.th/wp-content/uploads/2023/04/1-Lithium-Slicate1510L-1-768x768.jpg 768w,
            https://cdi.co.th/wp-content/uploads/2023/04/1-Lithium-Slicate1510L-1-1024x1024.jpg 1024w,
            https://cdi.co.th/wp-content/uploads/2023/04/1-Lithium-Slicate1510L-1-2048w.jpg 2048w
          "
          sizes="(max-width: 600px) 90vw, 340px"
          alt="พื้นคอนกรีตขัดเงา คริสตัลฟลอร์">
      </div>
      <div class="product-title">พื้นคอนกรีตขัดเงา คริสตัลฟลอร์</div>
      <div class="product-desc">
        พื้นที่มีความแข็งแรงไม่ก่อให้เกิดฝุ่น ดูสวยงาม สามารถทำได้กับพื้นใหม่หรือพื้นเก่าที่มีการใช้งานมานานแล้ว
      </div>
      <a href="product/Product001.php" class="product-btn">ดูรายละเอียด</a>
    </div>
    <!-- Product 2 -->
    <div class="product-card">
      <div class="product-img-wrap">
        <img 
          src="https://cdi.co.th/wp-content/uploads/2023/04/3-PU-Screed-300x300.jpg"
          srcset="
            https://cdi.co.th/wp-content/uploads/2023/04/3-PU-Screed-300x300.jpg 300w,
            https://cdi.co.th/wp-content/uploads/2023/04/3-PU-Screed-768x768.jpg 768w,
            https://cdi.co.th/wp-content/uploads/2023/04/3-PU-Screed-1024x1024.jpg 1024w,
            https://cdi.co.th/wp-content/uploads/2023/04/3-PU-Screed.jpg 2048w
          "
          sizes="(max-width: 600px) 90vw, 340px"
          alt="ผลิตภัณฑ์งานพื้น โพลียูรีเทน">
      </div>
      <div class="product-title">ผลิตภัณฑ์งานพื้น โพลียูรีเทน</div>
      <div class="product-desc">
        พื้นโพลียูรีเทน เป็นสารเคมีที่ถูกออกแบบมาทนต่อสารเคมี อาทิ กรดอินทรีย์ กรดอนินทรีย์ กรดเกลือและต่างประเภทต่าง ๆ
      </div>
      <a href="product/Product002.php" class="product-btn">ดูรายละเอียด</a>
    </div>
    <!-- Product 3 -->
    <div class="product-card">
      <div class="product-img-wrap">
        <img 
          src="https://cdi.co.th/wp-content/uploads/2023/04/6-Polyurea-300x300.jpg"
          srcset="
            https://cdi.co.th/wp-content/uploads/2023/04/6-Polyurea-300x300.jpg 300w,
            https://cdi.co.th/wp-content/uploads/2023/04/6-Polyurea-768x768.jpg 768w,
            https://cdi.co.th/wp-content/uploads/2023/04/6-Polyurea-1024x1024.jpg 1024w,
            https://cdi.co.th/wp-content/uploads/2023/04/6-Polyurea.jpg 2048w
          "
          sizes="(max-width: 600px) 90vw, 340px"
          alt="พื้นโพลียูเรีย อีลาสโตเมอร์">
      </div>
      <div class="product-title">พื้นโพลียูเรีย อีลาสโตเมอร์</div>
      <div class="product-desc">
        คุณสมบัติกันน้ำได้ 100% การยึดเกาะที่ดีเยี่ยมกับคอนกรีตและเหล็ก รับน้ำหนัก ทนแรงกระแทก ยืดตัวมากกว่า 500%
      </div>
      <a href="#product/Product003.php" class="product-btn">ดูรายละเอียด</a>
    </div>
  </div>
  <!-- Brand Slider Section -->
  <div class="brand-slider-container">
    <div class="brand-slider-title">ลูกค้าของเรา</div>
    <div class="brand-slider-title-bar"></div>
    <div style="overflow:hidden;">
      <div class="brand-slider-track">
        <div class="brand-slider-inner">
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-42.jpg" alt="ร้านทองทอง"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-06.jpg" alt="Yayoi"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-51.jpg" alt="Cafe Amazon"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-15.jpg" alt="บ้านกลางเมือง"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-61-1.jpg" alt="บ้านพฤกษา"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-25.jpg" alt="MINI"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-37.jpg" alt="The Plant"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-19.jpg" alt="BMW"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-14.jpg" alt="Silom Village"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-60.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-36.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-47.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-29.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-01.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-24.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-13.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-46.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-18.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-12.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-23.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-55.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-28.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-22.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-65.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-54.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-59.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-31.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-41.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-53.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-58.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-30.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-05.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-17.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-52.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-63.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-40.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-16.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-27.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-09.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-62.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-04.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-26.jpg" alt="เฌอ Cher"></div>   
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-35.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-03.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-08.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-02.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-45.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-57.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-39.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-34.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-11.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-56.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-49.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-44.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-21.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-33.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-66.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-10.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-38.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-32.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-43.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-48.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-20.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-07.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-42.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-06.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-51.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-15.jpg" alt="เฌอ Cher"></div>
        
        </div>
        <!-- Duplicate for infinite scroll effect -->
        <div class="brand-slider-inner">
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-42.jpg" alt="ร้านทองทอง"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-06.jpg" alt="Yayoi"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-51.jpg" alt="Cafe Amazon"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-15.jpg" alt="บ้านกลางเมือง"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-61-1.jpg" alt="บ้านพฤกษา"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-25.jpg" alt="MINI"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-37.jpg" alt="The Plant"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-19.jpg" alt="BMW"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-14.jpg" alt="Silom Village"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-60.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-36.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-47.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-29.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-01.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-24.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-13.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-46.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-18.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-12.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-23.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-55.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-28.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-22.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-65.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-54.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-59.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-31.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-41.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-53.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-58.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-30.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-05.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-17.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-52.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-63.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-40.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-16.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-27.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-09.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-62.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-04.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-26.jpg" alt="เฌอ Cher"></div>   
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-35.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-03.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-08.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-02.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-45.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-57.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-39.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-34.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-11.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-56.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-49.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-44.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-21.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-33.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-66.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-10.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-38.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-32.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-43.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-48.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-20.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-07.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-42.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-06.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-51.jpg" alt="เฌอ Cher"></div>
          <div class="brand-slider-logo"><img src="https://cdi.co.th/wp-content/uploads/2023/05/LOGO-ลูกค้า-15.jpg" alt="เฌอ Cher"></div>
        </div>
      </div>
    </div>
   

</div>
    
</body>
</html>
<?php include "footer.php"; ?>