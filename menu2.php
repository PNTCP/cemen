<?php include('menu.php'); ?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stencil Concrete</title>
  <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@700;400&display=swap" rel="stylesheet">
  <style>
    /* -------------------- DESKTOP STYLES -------------------- */
    body {
      font-family: 'Kanit', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
    }
    .container {
      max-width: 1200px;
      margin: auto;
      padding: 40px 20px;
      overflow-x: hidden;
    }
    .section img {
      display: block;
      max-width: 100%;
      height: auto;
      margin-bottom: 20px;
      margin-left: auto;
      margin-right: auto;
      box-sizing: border-box;
    }
    .highlight {
      color: red;
      font-weight: bold;
    }
    .section {
      display: flex;
      flex-wrap: wrap;
      gap: 40px;
    }
    .section > div {
      flex: 1 1 300px;
    }
    .big-text {
      font-size: 48px;
      font-weight: bold;
      color: #333;
    }
    .sub-text {
      font-size: 24px;
      color: #555;
    }
    .title {
      font-size: 20px;
      color: red;
      font-weight: bold;
      margin-bottom: 10px;
    }
    .content {
      box-sizing: border-box;
    }
    /* Reset some default styles */
    body, html {
      margin: 0;
      padding: 0;
      overflow-x: hidden;
      font-family: 'Prompt', 'Kanit', sans-serif;
    }
    .hero-section {
      position: relative;
      width: 100%;
      max-width: 100%;
      overflow: hidden;
      min-height: 400px;
    }
    .background-image {
      width: 100%;
      height: auto;
      display: block;
      min-height: 220px;
      object-fit: cover;
    }
    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: 2;
    }
    .logo {
      position: absolute;
      top: 12px;
      left: 12px;
      width: 250px;
      pointer-events: auto;
      z-index: 3;
    }
    .object-yellow {
      position: absolute;
      bottom: 0;
      right: 5%;
      width: 500px;
    }
    .object-front {
      position: absolute;
      bottom: 0;
      left: 10%;
      width: 700px;
    }
    .headline-section {
      position: static;
      text-align: left;
      margin: 20px 0 0 40px;
      background: none;
      width: 90vw;
      max-width: 700px;
      padding: 0;
    }
    .headline-section h1 {
      font-size: 4rem;
      font-weight: bold;
      color: #222;
      margin: 0;
      font-family: 'Prompt', 'Kanit', sans-serif;
    }
    .headline-section .subtitle {
      font-size: 3rem;
      color: #000;
      font-family: 'Prompt', 'Kanit', sans-serif;
      margin-top: 0;
    }
    .headline-desc {
      color: #ff9800;
      font-size: 2rem;
      margin: 18px 0 0 40px;
      max-width: 1000px;
      line-height: 1.7;
      font-family: 'Prompt', 'Kanit', sans-serif;
    }
    .headline-desc .highlight {
      color: #e65100;
      font-weight: bold;
    }
    @media screen and (max-width: 900px) {
      .hero-section {
        min-height: 220px;
      }
      .logo {
        width: 200px;
        top: 8px;
        left: 8px;
      }
      .object-yellow {
        width: 250px;
        right: 2%;
      }
      .object-front {
        width: 400px;
        left: 2%;
      }
      .headline-section {
        width: 98vw;
        max-width: 99vw;
        margin: 12px 0 0 8px;
        padding: 0 8px;
      }
      .headline-section h1 {
        font-size: 2rem;
      }
      .headline-section .subtitle {
        font-size: 1.1rem;
      }
      .headline-desc {
        margin-left: 8px;
        font-size: 1rem;
        max-width: 99vw;
      }
      .process-steps {
        gap: 16px 8px;
      }
      .process-step {
        min-width: 0;
        max-width: 340px;
      }
    }
    @media screen and (max-width: 600px) {
      .hero-section {
        min-height: 120px;
      }
      .background-image {
        width: 100%;
        height: auto;
        min-height: 80px;
        object-fit: cover;
        display: block;
      }
      .logo {
        width: 140px;
        top: 4px;
        left: 4px;
      }
      .object-yellow {
        width: 140px;
        right: 1%;
      }
      .object-front {
        width: 180px;
        left: 1%;
      }
      .headline-section {
        width: 99vw;
        max-width: 99vw;
        margin: 10px 0 0 4px;
        padding: 0 4px;
      }
      .headline-section h1 {
        font-size: 1.3rem;
      }
      .headline-section .subtitle {
        font-size: 1rem;
      }
      .headline-desc {
        margin-left: 4px;
        font-size: 0.95rem;
        max-width: 99vw;
      }
      .process-orange-bg-img {
        padding: 18px 2vw 18px 2vw;
      }
      .process-title {
        font-size: 1.1rem;
      }
      .process-title .process-en {
        font-size: 1rem;
      }
      .process-desc {
        font-size: 0.98rem;
        margin-bottom: 18px;
      }
      .process-steps {
        grid-template-columns: 1fr;
        gap: 12px;
        max-width: 99vw;
      }
      .process-step {
        width: 100%;
        max-width: 99vw;
        padding: 8px 2vw 8px 2vw;
        margin-bottom: 10px;
      }
      .process-step img {
        width: 100%;
        height: 140px;
        object-fit: cover;
      }
      .process-caption {
        font-size: 1rem;
      }
    }
    /* Orange background process section with image background */
    .process-orange-bg-img {
      background: url('https://static.wixstatic.com/media/51972b_f1a0a0cd4dce4f40886fca7bdeb3d4ea~mv2.png') center center/cover no-repeat;
      padding: 40px 20px;
      max-width: 1200px;
      margin: 40px auto;
    }
    .process-title {
      font-size: 2.2rem;
      font-weight: bold;
      text-align: center;
      color: #fff;
      margin-bottom: 8px;
    }
    .process-title .process-en {
      display: block;
      font-size: 1.4rem;
      font-weight: normal;
      margin-top: 4px;
    }
    .process-desc {
      text-align: center;
      font-size: 1.2rem;
      color: #fff;
      margin-bottom: 40px;
    }
    .process-steps {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 24px 18px;
      max-width: 1000px;
      margin: 0 auto;
    }

    /* Correct grid for 2x2 + 1 centered layout */
    .process-steps {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
      max-width: 1000px;
      margin: 0 auto;
    }

    .process-step:nth-child(1) { grid-column: 1; grid-row: 1; }
    .process-step:nth-child(2) { grid-column: 2; grid-row: 1; }
    .process-step:nth-child(3) { grid-column: 1; grid-row: 2; }
    .process-step:nth-child(4) { grid-column: 2; grid-row: 2; }
    .process-step:nth-child(5) {
      grid-column: 1 / span 2;
      grid-row: 3;
      justify-self: center;
    }
    .process-step {
      
      border-radius: 12px;
      padding: 15px;
      margin-bottom: 20px;
      font-size: 1.15rem;
      width: 100%;
      max-width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .process-step img {
      width: 260px;
      height: 170px;
      object-fit: cover;
      border-radius: 8px;
      margin-bottom: 10px;
      border: 1.5px solid #eee;
      box-sizing: border-box;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
    .process-caption {
      text-align: center;
      color: #333;
      margin-top: 16px;
      font-size: 1.25rem;
      line-height: 1.7;
      font-weight: 500;
    }

    @media (max-width: 768px) {
      .process-orange-bg-img {
        padding: 30px 15px;
      }
      .process-steps {
        grid-template-columns: 1fr;
        gap: 15px;
      }
      /* Remove all manual grid placement on mobile */
      .process-step {
        grid-column: auto !important;
        grid-row: auto !important;
        width: 100%;
        max-width: 99vw;
        padding: 8px 2vw 8px 2vw;
        margin-bottom: 10px;
      }
      .process-step img {
        width: 100%;
        height: 140px;
        object-fit: cover;
      }
      .process-caption {
        font-size: 1rem;
      }
    }
    /* Cast System process section with image background */
    .process-cast-bg-img {
      background: url('https://static.wixstatic.com/media/51972b_dbcd4c66b5654716b5be08988c3b792f~mv2.png') center center/cover no-repeat;
      padding: 40px 20px;
      max-width: 1200px;
      margin: 40px auto;
      border-radius: 10px;
    }
    .cast-title {
      color: #ffb74d;
      text-shadow: 0 2px 8px rgba(0,0,0,0.15);
    }
    .cast-title .process-en {
      color: #fffde7;
      font-size: 1.2rem;
    }
    .cast-desc {
      color: #fffde7;
      text-shadow: 0 2px 8px rgba(0,0,0,0.10);
    }
    .cast-steps {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 24px 18px;
      max-width: 1000px;
      margin: 0 auto;
    }
    .cast-steps .process-step:nth-child(1) { grid-column: 1; grid-row: 1; }
    .cast-steps .process-step:nth-child(2) { grid-column: 2; grid-row: 1; }
    .cast-steps .process-step:nth-child(3) { grid-column: 1; grid-row: 2; }
    .cast-steps .process-step:nth-child(4) { grid-column: 2; grid-row: 2; }
    .cast-steps .process-step:nth-child(5) { grid-column: 1; grid-row: 3; }
    .cast-steps .process-step:nth-child(6) { grid-column: 2; grid-row: 3; }
    .cast-steps .process-step {
      
      color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.10);
      padding: 12px 10px 10px 10px;
      width: 100%;
      max-width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .cast-steps .process-step img {
      width: 320px;
      height: 180px;
      object-fit: cover;
      border-radius: 8px;
      margin-bottom: 10px;
      border: 1.5px solid #eee;
      background: #fff;
    }
    .cast-steps .process-caption {
      color: #ffb74d;
      font-size: 1.1rem;
      text-align: center;
      margin-top: 8px;
      line-height: 1.5;
      font-family: 'Kanit', sans-serif;
    }
    @media (max-width: 900px) {
      .cast-steps {
        gap: 16px 8px;
      }
      .cast-steps .process-step img {
        width: 100%;
        height: 140px;
      }
    }
    @media (max-width: 600px) {
      .process-cast-bg-img {
        padding: 18px 2vw 18px 2vw;
      }
      .cast-title {
        font-size: 1.2rem;
      }
      .cast-desc {
        font-size: 0.98rem;
      }
      .cast-steps {
        grid-template-columns: 1fr;
        gap: 12px;
        max-width: 99vw;
      }
      .cast-steps .process-step {
        width: 100%;
        max-width: 99vw;
        padding: 8px 2vw 8px 2vw;
        margin-bottom: 10px;
      }
      .cast-steps .process-caption {
        font-size: 1rem;
      }
    }
    /* Product Stencil Concrete Section */
    .stencil-product-section {
      background: #d9c4ec;
      padding: 32px 16px 40px 16px;
      border-radius: 10px;
      max-width: 1100px;
      margin: 40px auto;
    }
    .stencil-product-title {
      text-align: center;
      font-size: 2rem;
      font-weight: bold;
      margin-bottom: 28px;
      color: #222;
      letter-spacing: 1px;
    }
    .stencil-product-grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 24px 18px;
    }
    .stencil-product-item {
      
      border-radius: 6px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.10);
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-bottom: 10px;
      padding: 10px 8px 8px 8px;
      min-width: 120px;
      max-width: 180px;
      flex: 1 1 120px;
    }

    
    

    @media (max-width: 900px) {
      .stencil-product-grid {
        gap: 16px 8px;
      }
      .stencil-product-item {
        min-width: 90px;
        max-width: 140px;
        font-size: 0.95rem;
        flex-basis: 33.33% !important;
      }
    }
    @media (max-width: 600px) {
      .stencil-product-section {
        padding: 16px 2vw 24px 2vw;
      }
      .stencil-product-title {
        font-size: 1.2rem;
        margin-bottom: 18px;
      }
      .stencil-product-grid {
        gap: 10px 4px;
      }
      .stencil-product-item {
        min-width: 80px;
        max-width: 120px;
        padding: 6px 2px 6px 2px;
        flex-basis: 100% !important;
      }
      .stencil-product-label {
        font-size: 0.85rem;
      }
    }
  </style>
</head>
<body>

<!-- 1. HERO SECTION -->
<div class="hero-section">
  <!-- พื้นหลัง -->
  <img src="https://static.wixstatic.com/media/51972b_5c5288c97b1444a0a40fc01363de08cd~mv2.png/v1/fill/w_1639,h_804,al_c,q_90,enc_avif,quality_auto/51972b_5c5288c97b1444a0a40fc01363de08cd~mv2.png" alt="พื้นหลัง" class="background-image">

  <div class="overlay">
    <!-- โลโก้ -->
    <img src="https://static.wixstatic.com/media/51972b_89e5505b5bc64cdaa2c5ded3c69cf1ed~mv2.png/v1/fill/w_479,h_142,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Stencil%20Concrete_edited.png" alt="โลโก้" class="logo">

    <!-- วัตถุสีเหลือง -->
    <img src="https://static.wixstatic.com/media/51972b_eaf9468395664b4fba3eaee6f18514c7~mv2.png/v1/crop/x_142,y_0,w_883,h_893/fill/w_669,h_676,al_c,q_90,usm_0.66_1.00_0.01,enc_avif,quality_auto/%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B8%94%E0%B8%B2%E0%B8%A9%E0%B8%96%E0%B8%B8%E0%B8%87.png" alt="วัตถุสีเหลือง" class="object-yellow">

    <!-- วัตถุหน้า (กระสอบ, เครื่องพ่น) -->
    <img src="https://static.wixstatic.com/media/51972b_c5e9de7aa9ac401aab636ebd846f65a5~mv2.png/v1/crop/x_0,y_339,w_1066,h_553/fill/w_881,h_460,al_c,q_90,usm_0.66_1.00_0.01,enc_avif,quality_auto/%E0%B8%81%E0%B8%B2%E0%B8%9E%E0%B9%88%E0%B8%99.png" alt="วัตถุหน้า" class="object-front">
  </div>
</div>

<!-- 2. HEADLINE SECTION -->
<div class="headline-section">
  <h1>คอนกรีตลอกลาย</h1>
  <div class="subtitle">Stencil Concrete</div>
</div>
<div class="headline-desc">
  นวัตกรรมตกแต่งผิวคอนกรีต ให้เกิดลวดลายและสีสันที่สวยงาม<br>
  ลักษณะเหมือนผิวหินจริงในธรรมชาติ ผ่านเทคนิคการใช้ <span class="highlight">กระดาษลอกลาย</span><br>
  ร่วมกับผงสีซีเมนต์ เคลือบแกร่ง <span class="highlight">Color Seasons</span> ซึ่งมี วิธีการทำอยู่ 2 ระบบ
</div>

<!-- 3. SPRAY-ON SYSTEM PROCESS -->
<!-- Orange background process section with image background -->
<div class="process-orange-bg-img">
  <div class="process-title">ระบบปูนพ่น <span class="process-en">(Spray - On System)</span></div>
  <div class="process-desc">
    สำหรับพื้นผิวเดิมที่ต้องเทปูนสดใหม่ก่อนการลอกลาย
  </div>
  <div class="process-steps">
    <div class="process-step">
      <img src="https://static.wixstatic.com/media/51972b_4821dbeb9a914f668ac2e6c6309cfe82~mv2.png/v1/fill/w_494,h_310,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/1.png" alt="step 1">
      <div class="process-caption">ติดกระดาษลอกลายด้วยเทปบนพื้นผิวที่ทำความสะอาดเรียบร้อย</div>
    </div>
    <div class="process-step">
      <img src="https://static.wixstatic.com/media/51972b_7a56c2987dbc4936aa283ac6b6d392d6~mv2.png/v1/fill/w_494,h_310,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/2.png" alt="step 2">
      <div class="process-caption">ผสมผงสี Color Seasons กับ Activator อัตราส่วน 1 : 1</div>
    </div>
    <div class="process-step">
      <img src="https://static.wixstatic.com/media/51972b_3c0602a0f76c4a5583d15505fe25bcc4~mv2.png/v1/fill/w_494,h_308,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/3.png" alt="step 3">
      <div class="process-caption">พ่นสีที่ผสมโดยใช้ปูนพ่น (สามารถใช้เกรียงขัดมันบางส่วนได้หากต้องการความเรียบ) ทิ้งให้แห้งอย่างน้อย 1 - 2 ชม.</div>
    </div>
    <div class="process-step small">
      <img src="https://static.wixstatic.com/media/51972b_99bdf72f7c0946f887c3b59b7c865941~mv2.png/v1/fill/w_247,h_154,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/4.png" alt="step 4">
      <div class="process-caption">ดึงกระดาษลอกลายออกอย่างระวัง ทิ้งให้แห้งสนิทอย่างน้อย 4 - 6 ชม.</div>
    </div>
    <div class="process-step small">
      <img src="https://static.wixstatic.com/media/51972b_4d1a6254cb5741ae8885e809229d2af1~mv2.png/v1/fill/w_247,h_154,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/5.png" alt="step 5">
      <div class="process-caption">เคลือบผิวด้วยน้ำยาเคลือบเงา M-100 หรือ PU 9000</div>
    </div>
  </div>
</div>

<!-- 4. CAST SYSTEM PROCESS -->
<!-- Cast System process section with image background -->
<div class="process-cast-bg-img">
  <div class="process-title cast-title">ระบบปูนสด <span class="process-en">(Cast System)</span></div>
  <div class="process-desc cast-desc">
    สำหรับพื้นผิวเดิมที่ต้องเทปูนสดใหม่ก่อนการลอกลาย
  </div>
  <div class="process-steps cast-steps">
    <div class="process-step">
      <img src="https://static.wixstatic.com/media/51972b_f02cb0559c1c46f0b88e35aeb7f1a7c4~mv2.png/v1/fill/w_494,h_310,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/1.png" alt="cast step 1">
      <div class="process-caption">เทปูนสด ปรับระดับ 3 - 5 ซม. ปาดให้เรียบ รอหมาด</div>
    </div>
    <div class="process-step">
      <img src="https://static.wixstatic.com/media/51972b_738ed84e2756444bb2655a9da89e3dfa~mv2.png/v1/fill/w_494,h_310,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/2.png" alt="cast step 2">
      <div class="process-caption">วางกระดาษลอกลาย ใช้ลูกกลิ้งกดให้กระดาษเรียบแนบผิวปูน</div>
    </div>
    <div class="process-step">
      <img src="https://static.wixstatic.com/media/51972b_b186b3200e654330bbef47082a2f8cd4~mv2.png/v1/fill/w_494,h_308,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/3.png" alt="cast step 3">
      <div class="process-caption">ใช้เกรียงร่วมผงสี Color Seasons ให้ทั่ว</div>
    </div>
    <div class="process-step">
      <img src="https://static.wixstatic.com/media/51972b_b4f32ba45b024fc79b2885e40091f973~mv2.png/v1/fill/w_494,h_308,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/4.png" alt="cast step 4">
      <div class="process-caption">ขัดผิวให้เรียบ ทิ้งให้แห้งอย่างน้อย 1 - 2 ชม.</div>
    </div>
    <div class="process-step">
      <img src="https://static.wixstatic.com/media/51972b_cdd93cd41dce40048b28159f49722e79~mv2.png/v1/fill/w_494,h_308,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/5.png" alt="cast step 5">
      <div class="process-caption">ค่อยๆ ดึงกระดาษลอกลายออก ทิ้งให้แห้งสนิท อย่างน้อย 24 ชม.</div>
    </div>
    <div class="process-step">
      <img src="https://static.wixstatic.com/media/51972b_bb26e59840fa429b9dae22285c0862eb~mv2.png/v1/fill/w_494,h_308,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/6.png" alt="cast step 6">
      <div class="process-caption">เคลือบผิวด้วยน้ำยาเคลือบเงา M-100 หรือ PU 9000</div>
    </div>
  </div>
</div>

<!-- 5. PRODUCT STENCIL CONCRETE (all items in 4-5-5-3-3 order) -->
<!-- Product Stencil Concrete Section -->
<div class="stencil-product-section">
  <h2 class="stencil-product-title">Product Stencil Concrete</h2>
  <div class="stencil-product-grid">
    <!-- Row 1: 4 items -->
    <div class="stencil-product-item"><img src="https://static.wixstatic.com/media/51972b_a4b343e4a7394503b4c83e968163ff50~mv2.png/v1/fill/w_117,h_118,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Rosette.png" alt="Rosette"><div class="stencil-product-label">Rosette</div></div>
    <div class="stencil-product-item"><img src="https://static.wixstatic.com/media/51972b_ffc998f5c63a49d0940ead91c7d53ea8~mv2.png/v1/fill/w_118,h_118,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Star%20Compass.png" alt="Star Compass"><div class="stencil-product-label">Star Compass</div></div>
    <div class="stencil-product-item"><img src="https://static.wixstatic.com/media/51972b_263d3cc5f1de49339fb6f2fb067e147a~mv2.png/v1/fill/w_117,h_118,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Cobble%20Rosette.png" alt="Cobble Rosette"><div class="stencil-product-label">Cobble Rosette</div></div>
    <div class="stencil-product-item"><img src="https://static.wixstatic.com/media/51972b_371f8537d65d44539d202255b1ad9075~mv2.png/v1/fill/w_118,h_118,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/European%20Fan.png" alt="European Fan"><div class="stencil-product-label">European Fan</div></div>
    <!-- Row 2: 5 items -->
    <div class="stencil-product-item"><img src="https://static.wixstatic.com/media/51972b_34f587193526462f8c0e47c4f45168c5~mv2.png/v1/fill/w_97,h_86,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Ashlar.png" alt="Ashlar"><div class="stencil-product-label">Ashlar</div></div>
    <div class="stencil-product-item"><img src="https://static.wixstatic.com/media/51972b_6f54a6074c834cc082ea89153fa262a9~mv2.png/v1/fill/w_99,h_86,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Key%20Stone.png" alt="Key Stone"><div class="stencil-product-label">Key Stone</div></div>
    <div class="stencil-product-item"><img src="https://static.wixstatic.com/media/51972b_7973771fd2164710b7d67330c6c4dd06~mv2.png/v1/fill/w_98,h_86,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Garden%20Stone.png" alt="Garden Stone"><div class="stencil-product-label">Garden Stone</div></div>
    <div class="stencil-product-item"><img src="https://static.wixstatic.com/media/51972b_61ee52e155774b7dbc366bedc5faddc5~mv2.png/v1/fill/w_99,h_86,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Offset%20tile.png" alt="Offset tile"><div class="stencil-product-label">Offset tile</div></div>
    <div class="stencil-product-item"><img src="https://static.wixstatic.com/media/51972b_a6378478683449eaa5301fd3adfcaf40~mv2.png/v1/fill/w_99,h_86,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Carry%20buff%20cobble.png" alt="Carry buff cobble"><div class="stencil-product-label">Carry buff cobble</div></div>
    <!-- Row 3: 5 items -->
    <div class="stencil-product-item"><img src="https://static.wixstatic.com/media/51972b_8356b6edc48547e2bfdaf8af9c6e8cee~mv2.png/v1/fill/w_98,h_86,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Flag%20Stone.png" alt="Flag Stone"><div class="stencil-product-label">Flag Stone</div></div>
    <div class="stencil-product-item"><img src="https://static.wixstatic.com/media/51972b_f6037c31aa5245ef9e00dfefcff98d18~mv2.png/v1/fill/w_99,h_88,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Sydney%20Stone.png" alt="Sydney Stone"><div class="stencil-product-label">Sydney Stone</div></div>
    <div class="stencil-product-item"><img src="https://static.wixstatic.com/media/51972b_9926951553444bbc94b539c1a17c011b~mv2.png/v1/fill/w_99,h_87,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Brick.png" alt="Brick"><div class="stencil-product-label">Brick</div></div>
    <div class="stencil-product-item"><img src="https://static.wixstatic.com/media/51972b_833ab9acf2404aaea7d4d1358a8cbf57~mv2.png/v1/fill/w_99,h_87,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Face%20Brick.png" alt="Face Brick"><div class="stencil-product-label">Face Brick</div></div>
    <div class="stencil-product-item"><img src="https://static.wixstatic.com/media/51972b_d2ad99b2555549f1b647ef5d0ca9a120~mv2.png/v1/fill/w_99,h_88,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Convict%20rock.png" alt="Convict rock"><div class="stencil-product-label">Convict rock</div></div>
    <!-- Row 4: 3 items -->
    <div class="stencil-product-item"><img src="https://static.wixstatic.com/media/51972b_e3d4d4756bb54a80a26f14a74cf444a0~mv2.png/v1/fill/w_170,h_42,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Brick%20Header.png" alt="Brick Header"><div class="stencil-product-label">Brick Header</div></div>
    <div class="stencil-product-item"><img src="https://static.wixstatic.com/media/51972b_ff6b3abeebe747cca8a9e30801865a7e~mv2.png/v1/fill/w_172,h_42,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/cobble%20header.png" alt="Cobble header"><div class="stencil-product-label">Cobble header</div></div>
    <div class="stencil-product-item"><img src="https://static.wixstatic.com/media/51972b_a73de873c3f242d7b62385af8295f2f2~mv2.png/v1/fill/w_172,h_42,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Bushrock%20header.png" alt="Bushrock header"><div class="stencil-product-label">Bushrock header</div></div>
    <!-- Row 5: 3 items -->
    <div class="stencil-product-item"><img src="https://static.wixstatic.com/media/51972b_fad06d96d95f4689b0c1b29377644776~mv2.png/v1/fill/w_170,h_42,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Mudgee%20stone%20header.png" alt="Mudgee stone header"><div class="stencil-product-label">Mudgee stone header</div></div>
    <div class="stencil-product-item"><img src="https://static.wixstatic.com/media/51972b_7a1e5a037c4d4a54b81464de1de27842~mv2.png/v1/fill/w_172,h_42,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Key%20stone%20header.png" alt="Key stone header"><div class="stencil-product-label">Key stone header</div></div>
    <div class="stencil-product-item"><img src="https://static.wixstatic.com/media/51972b_0cbe6cfad55b4c939b6235a4ee720177~mv2.png/v1/fill/w_172,h_42,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Stretch%20header.png" alt="Stretch header"><div class="stencil-product-label">Stretch header</div></div>
  </div>
</div>

<!-- 6. ADDITIONAL IMAGES (grouped together) -->
<!-- Add this after your Product Stencil Concrete section -->
<div style="text-align:center; margin: 32px 0;">
  <img 
    src="https://static.wixstatic.com/media/51972b_8e28f1dfea6842159d00ce06740c8fa2~mv2.jpg/v1/fill/w_419,h_457,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/%E0%B8%82%E0%B8%B2%E0%B8%A2%E0%B8%9B%E0%B8%B7%E0%B8%99%E0%B8%81%E0%B8%B2%E0%B8%9E%E0%B9%88%E0%B8%99.jpg" 
    alt="ขายปูนกาพ่น" 
    style="max-width:1000px;width:90vw;height:auto;border-radius:12px;box-shadow:0 2px 8px rgba(0,0,0,0.10);"
  >
</div>
<div style="text-align:center; margin: 32px 0;">
  <img 
    src="https://static.wixstatic.com/media/51972b_7dfb3a6022ff42f6bf4f99d53cd0c56f~mv2.png/v1/fill/w_490,h_730,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/22.png"
    alt="22"
    style="max-width:1000px;width:95vw;height:auto;border-radius:12px;box-shadow:0 2px 8px rgba(0,0,0,0.10);"
  >
</div>
</body>
</html>
