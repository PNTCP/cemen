<?php include('menu.php'); ?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>บริการคอนกรีตขัดเงา | พื้นเงาสวย ทนทาน</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;600&family=Kanit:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Prompt', 'Kanit', Tahoma, sans-serif;
      margin: 0;
      background-color: #f8f8f8;
      color: #333;
      line-height: 1.8;
      font-size: 18px;
      letter-spacing: 0.01em;
    }
    header {
      color: #fff;
      padding: 0 0 12px 0;
      text-align: center;
      margin-top: -100px; /* เพิ่มบรรทัดนี้เพื่อดัน header ขึ้นไปชิดเมนูมากขึ้น */
    }
    header h1 {
      margin: 0;
      font-size: 2.2rem;
      letter-spacing: 0.02em;
      font-family: 'Prompt', 'Kanit', sans-serif;
    }
    .overlay-title-mobile-fix {
      max-width: 100%;
      overflow-wrap: break-word;
      white-space: normal !important;
      text-align: center;
      padding: 0 4vw;
      box-sizing: border-box;
    }
    .gallery-row {
      display: flex;
      gap: 18px;
      justify-content: center;
      flex-wrap: wrap;
    }
    .gallery-img {
      width: 23vw;
      max-width: 270px;
      min-width: 70px;
      aspect-ratio: 1/1;
      object-fit: cover;
      border-radius: 12px;
      box-shadow: 0 2px 12px rgba(0,0,0,0.08);
      cursor: pointer;
      margin-bottom: 0;
    }
    .lightbox-bg {
      display: none;
      position: fixed;
      z-index: 9999;
      left: 0; top: 0; width: 100vw; height: 100vh;
      background: rgba(0,0,0,0.85);
      align-items: center;
      justify-content: center;
    }
    .lightbox-bg.active { display: flex; }
    .lightbox-img {
      max-width: 90vw;
      max-height: 80vh;
      border-radius: 12px;
      box-shadow: 0 4px 32px #000a;
      background: #fff;
      touch-action: pinch-zoom;
    }
    .lightbox-close, .lightbox-next, .lightbox-prev {
      position: absolute;
      font-size: 3.6rem;
      color: #fff;
      background: rgba(0,0,0,0.5);
      border: none;
      border-radius: 50%;
      width: 84px;
      height: 84px;
      cursor: pointer;
      z-index: 10001;
      display: flex; align-items: center; justify-content: center;
      transition: background 0.2s, box-shadow 0.2s;
      box-shadow: 0 2px 16px #0006;
    }
    .lightbox-close:hover, .lightbox-next:hover, .lightbox-prev:hover { background: rgba(0,0,0,0.8);}
    .lightbox-close { top: 32px; right: 32px; left: auto; }
    .lightbox-next { top: 50%; right: 32px; left: auto; transform: translateY(-50%);}
    .lightbox-prev { top: 50%; left: 32px; right: auto; transform: translateY(-50%);}
    /* ป้องกัน body เลื่อนเมื่อเปิด Lightbox */
    body.lightbox-open {
      position: fixed;
      width: 100vw;
      overflow: hidden;
      top: 0;
      left: 0;
    }
    /* ----------- MOBILE ----------- */
    @media (max-width: 700px) {
      .place-desc-mobile-fix {
        margin-left: 0 !important;
        font-size: 1.05rem !important;
        text-align: center !important;
        padding: 0 4vw !important;
        max-width: 98vw !important;
        line-height: 1.7 !important;
      }
      .hide-on-mobile {
        display: none !important;
      }
      .overlay-content-box {
        margin: 0 auto !important;
        margin-top: 12vw !important;
        margin-left: 0 !important;
        max-width: 98vw !important;
        padding: 18px 4vw !important;
        text-align: center !important;
        box-shadow: 0 2px 12px rgba(0,0,0,0.10) !important;
        background: rgba(0,0,0,0.45) !important;
        border-radius: 14px !important;
      }
      .gallery-img {
        width: 22vw;
        max-width: 24vw;
        min-width: 60px;
      }
      .gallery-row {
        gap: 2vw;
      }
      .lightbox-img {
        max-width: 98vw;
        max-height: 60vh;
        border-radius: 8px;
      }
      .lightbox-close, .lightbox-next, .lightbox-prev {
        width: 48px;
        height: 48px;
        font-size: 1.7rem;
        box-shadow: 0 1px 6px #0004;
      }
      .lightbox-close { top: 8px; right: 8px; }
      .lightbox-next { top: 50%; right: 8px; transform: translateY(-50%);}
      .lightbox-prev { top: 50%; left: 8px; transform: translateY(-50%);}
      .overlay-title-mobile-fix {
        justify-content: center !important;
        align-items: center !important;
        left: 0 !important;
        top: 0 !important;
        width: 100% !important;
        height: 100% !important;
        font-size: 1.1rem !important;
        padding: 0 4vw !important;
        white-space: normal !important;
        text-align: center !important;
        position: absolute !important;
        box-sizing: border-box !important;
      }
    }
  </style>
</head>
<body>
  <header style="margin-top: 8px;">
    <h1>บริการคอนกรีตขัดเงา</h1>
    <img 
      src="https://static.wixstatic.com/media/51972b_07efe56abf024b45ba79d0e953a244f5~mv2.jpg/v1/crop/x_0,y_506,w_2481,h_2774/fill/w_980,h_1096,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/1584954761917.jpg" 
      alt="พื้นคอนกรีตขัดเงา" 
      style="max-width: 100%; height: auto; margin-top: 16px; border-radius: 12px; box-shadow: 0 4px 24px rgba(0,0,0,0.08);"
    >
  </header>
  <div style="max-width: 950px; margin: 0 auto; padding: 24px 8px;">
    <div style="display: flex; flex-wrap: wrap; gap: 24px; justify-content: center; align-items: flex-start;">
      <!-- ภาพ 1 -->
      <div style="flex: 1 1 1200px; min-width: 700px; max-width: 1600px; background: #fff; border-radius: 16px; box-shadow: 0 4px 24px rgba(0,0,0,0.10); padding: 48px;">
        <div style="display: flex; align-items: flex-start; gap: 64px; margin-left: -35px">
          <img src="https://static.wixstatic.com/media/51972b_6a1a67863afa49869016d4f0f148b629~mv2.png/v1/fill/w_532,h_307,al_c,q_85,enc_avif,quality_auto/%E0%B8%9E%E0%B8%B7%E0%B9%88%E0%B8%99%E0%B8%82%E0%B8%B1%E0%B8%94%E0%B9%80%E0%B8%87%E0%B8%B2-%E0%B9%80%E0%B8%84%E0%B8%A3%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%87%E0%B8%82%E0%B8%B1%E0%B8%94%E0%B8%9B%E0%B8%B9%E0%B8%99.png" 
            alt="เครื่องขัดปูน" 
            style="width:600px; max-width:100%; border-radius:14px; margin-bottom:0;">
          <div style="text-align:left; flex:1; margin-left: -35px;">
            <div style="color:#ff0000; font-weight:700; margin-bottom:32px; font-size:1.7rem; margin-top:12px; line-height:1.3; white-space:nowrap;">
              เมื่อซื้อเครื่อง แถมใบขัด ฟรี !!!
            </div>
            <div style="color:#ff0000; font-size:1.7rem; margin-bottom:8px; line-height:1.6; white-space:nowrap;">
              พร้อมสอนการใช้งานเครื่อง<br>
               ลงมือทำหน้างานจริง 0-100%<br>
                เครื่องขัดทุกตัว สินค้าพร้อมส่ง
            </div>
          </div>
        </div>
      </div>
      <!-- ภาพ 2 -->
      <div style="flex: 1 1 420px; min-width: 340px; max-width: 520px; background: #fff; border-radius: 12px; box-shadow: 0 2px 12px rgba(0,0,0,0.07); padding: 20px; text-align: center;">
        <div style="font-size:1.5rem; color:#333; font-weight:600; margin-bottom:16px;">
          ผู้จัดจำหน่าย เครื่องขัดเงาคอนกรีต<br>
          ทำพื้นปูนระบบ โพลิชชิ่ง คอนกรีต<br>
          บริการของเรา ผลิต ขาย รับเหมา สอน
        </div>
        <img src="https://static.wixstatic.com/media/51972b_78cf05e869264069afe1a18ddb1e8195~mv2.jpg/v1/crop/x_0,y_98,w_800,h_502/fill/w_532,h_334,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/%E0%B9%80%E0%B8%84%E0%B8%A3%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%87%E0%B8%82%E0%B8%B1%E0%B8%94%E0%B8%9B%E0%B8%B9%E0%B8%99-%E0%B8%A3%E0%B8%B2%E0%B8%84%E0%B8%B2.jpg" 
          alt="เครื่องขัดปูน ราคา" 
          style="width:100%; border-radius:8px; margin-bottom:0;">
      </div>
      <!-- ภาพ 3 -->
      <div style="flex: 1 1 300px; min-width: 280px; max-width: 340px; background: #fff; border-radius: 12px; box-shadow: 0 2px 12px rgba(0,0,0,0.07); padding: 16px; text-align: center;">
        <img src="https://static.wixstatic.com/media/51972b_af0e6f5b85d4466a9d4064130cb74a98~mv2.jpg/v1/fill/w_352,h_340,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/66075542_2330097433700125_64987852898324.jpg" alt="เครื่องขัดคอนกรีต" style="width:100%; border-radius:8px; margin-bottom:12px;">
        <div style="color:#1976d2; font-weight:600; margin-bottom:8px; font-size:1.3rem;">
          มีเครื่องรุ่นตัวอย่างสินค้า
        </div>
        <div style="font-size:1.2rem;">
          มีให้เลือกกว่า 5 รุ่น<br>
          ตามความต้องการ งานรับเหมา<br>
          รับประกันเครื่อง 1 ปี
        </div>
      </div>
    </div>
  </div>
  <!-- แถบข้อความด้านล่างสุด -->
  <div style="width:100%; display:flex; justify-content:center; margin:40px 0 24px 0;">
    <div style="position:relative; display:inline-block;">
      <img 
        src="https://static.wixstatic.com/media/51972b_312912d9bca44034a046831db914f970~mv2.png/v1/fill/w_674,h_167,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/%E0%B8%9E%E0%B8%B7%E0%B9%88%E0%B8%99%E0%B8%AB%E0%B8%A5%E0%B8%B1%E0%B8%87%E0%B8%82%E0%B9%89%E0%B8%AD%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1.png"
        alt="พื้นหลังข้อความ"
        style="width: 520px; max-width: 95vw; display:block;"
      >
      <div
        class="overlay-title-mobile-fix"
        style="
          position:absolute;
          top:0; left:0; width:100%; height:100%;
          display:flex; align-items:center; justify-content:center;
          font-size:1.45rem; font-weight:bold; color:#fff;
          text-shadow:0 2px 8px #000, 0 1px 0 #333;
          font-family:'Prompt','Kanit',sans-serif;
          letter-spacing:0.04em;
          white-space:nowrap; /* ทำให้เป็นบรรทัดเดียว */
          overflow:hidden;
          text-overflow:ellipsis;
          padding:0 18px;
          box-sizing:border-box;
        "
      >
        พื้นที่เหมาะสมสำหรับคอนกรีตขัดเงา
      </div>
    </div>
  </div>

  <!-- แถวภาพคู่ -->
  <div style="width:100%; display:flex; justify-content:center; gap:0; margin-bottom:48px;">
    <img 
      src="https://scontent.fbkk29-5.fna.fbcdn.net/v/t39.30808-6/502935510_2159011351210783_6279047769259603618_n.jpg?stp=dst-jpg_s600x600_tt6&_nc_cat=107&ccb=1-7&_nc_sid=127cfc&_nc_ohc=aq9H-stH-GsQ7kNvwHmhO1N&_nc_oc=AdltANCnhByjixIq3XrAzeCUBRe42OtQ7ZMk2kaWcYO6lpFjB_Qk-WA2B14qjTH76QaehOKzTMRipLlesqO_tzJN&_nc_zt=23&_nc_ht=scontent.fbkk29-5.fna&_nc_gid=Ih7x75qqczvfWYDa7cXaLg&oh=00_AfIFZdyys12jyaTfjVr3J21DE0YFBGYVf_7nU9yoqnwPiw&oe=684110CC"
      alt="ภาพ1"
      style="width:420px; max-width:48vw; border-radius:14px 0 0 14px; box-shadow:0 2px 12px rgba(0,0,0,0.10); margin:0; display:block;"
    >
    <img 
      src="https://scontent.fbkk29-7.fna.fbcdn.net/v/t39.30808-6/502480646_2159011354544116_6430975532230154201_n.jpg?stp=dst-jpg_s600x600_tt6&_nc_cat=106&ccb=1-7&_nc_sid=127cfc&_nc_ohc=ajdPGfyY2D0Q7kNvwFGBHNu&_nc_oc=Adls1j0JNaMMKmEJFn0Quua1z4b1lkv4Ur7MBRBqg3ijZi_6KMdDPLFNVtemivRru7DWarEyjCQ5TQwPS1WGB9BR&_nc_zt=23&_nc_ht=scontent.fbkk29-7.fna&_nc_gid=Ih7x75qqczvfWYDa7cXaLg&oh=00_AfKIQEdekwIvFKsElkcoHYPjy2h-8igZqri6Z98PX2K9jA&oe=68410D05"
      alt="ภาพ2"
      style="width:420px; max-width:48vw; border-radius:0 14px 14px 0; box-shadow:0 2px 12px rgba(0,0,0,0.10); margin:0; display:block;"
    >
  </div>
  <!-- ขั้นตอนการใช้งาน -->
<div style="max-width:900px; margin:48px auto 0 auto; background:#fff; border-radius:14px; box-shadow:0 2px 12px rgba(0,0,0,0.07); padding:36px 28px;">
  <div style="color:#0d2676; font-size:2rem; font-weight:700; margin-bottom:24px;">
    ขั้นตอนการใช้งาน
  </div>
  <div style="color:#222; font-size:1.18rem; line-height:2;">
    1. ขัดปรับสภาพพื้นผิวเก่า ด้วยเครื่องขัด High Speed Grinding เลือกใช้ใบขัดหัวเหล็ก (Metal Bond) เบอร์ 30
    (2ฟัน), 50, 100, 150, 200 ตามลำดับ การจะเลือกใช้เบอร์ใดเริ่มต้น ขึ้นอยู่กับสภาพผิว ตรวจเช็คสภาพพื้นผิว
    คอนกรีตเดิมก่อนเริ่มงานทุกครั้ง<br>
    2. ปรับพื้นผิวให้เรียบเนียน และลบรอยจากการขัด โดยเปลี่ยนไปใช้ใบข้าวโพด Resin Bond Diamond เบอร์ 50, 100,
    200 ไล่ลำดับ <span style="color:#d32f2f; font-weight:bold;">*ไม่ควรข้ามลำดับ*</span><br>
    3. ทำความสะอาด กวาด เช็ด ถู ฝุ่นจากการขัดออกจากพื้นผิวให้หมด<br>
    4. หากต้องการแต่งสี สามารถพ่น/ใช้ลูกกลิ้ง/ทา ด้วยสีกรดย้อมคอนกรีต (Ammata) ได้ในขั้นตอนนี้ ทิ้งให้แห้ง 12 ชม.
    <span style="color:#d32f2f; font-weight:bold;">“ก่อน”</span> การลงน้ำยา Lithium<br>
    5. พ่นน้ำยา Lithium ให้ทั่วพื้นที่ หรือ เทน้ำยาลงบนพื้นแล้วใช้ไม้กวาดยางปาดน้ำยาไปมาให้เรียบเนียนทั่วพื้นผิว ทิ้งให้แห้ง
    ประมาณ 2 – 4 ชม.<br>
    6. ขัดเพื่อเพิ่มความเงางามแก่พื้นผิวคอนกรีต โดยเครื่อง High Speed Grinding อีกครั้ง ด้วยใบขัดข้าวโพด
    (Resin Bond) เริ่มที่เบอร์ 200, 400, 800, 1500, 3000 ตามลำดับ ตามความต้องการ
  </div>
  <div style="color:#d32f2f; font-size:1.1rem; margin-top:24px; font-weight:bold;">
    หมายเหตุ : หากต้องการเพิ่มความเงางามพิเศษ สามารถใช้เครื่อง High Speed Burnisher ขัดแบบปัดเงาเพิ่มเติม
    ด้วยใบขัดปัดเงาละเอียด เบอร์ 400A, 800A, 1500R, 3000R ตามลำดับ
  </div>
</div>
<!-- ต่อท้ายหลังกล่องขั้นตอนการใช้งาน -->
<div style="width:100%; display:flex; justify-content:flex-start; margin:36px 0 48px 0;">
  <div style="position:relative; display:inline-block;">
    <img 
      src="https://static.wixstatic.com/media/51972b_535a7c50a7ca428cad56d8af0119a9f6~mv2.png/v1/fill/w_533,h_84,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/%E0%B8%82%E0%B8%AD%E0%B8%9A%E0%B8%9E%E0%B8%B7%E0%B9%88%E0%B8%99%E0%B8%AB%E0%B8%A5%E0%B8%B1%E0%B8%87%E0%B8%82%E0%B9%89%E0%B8%AD%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1.png"
      alt="พื้นหลังข้อความ"
      style="width: 420px; max-width: 90vw; display:block;"
    >
    <div style="
      position:absolute;
      top:0; left:0; width:100%; height:100%;
      display:flex; align-items:center; justify-content:center;
      font-size:1.45rem; font-weight:bold; color:#fff;
      text-shadow:0 2px 8px #000, 0 1px 0 #333;
      font-family:'Prompt','Kanit',sans-serif;
      letter-spacing:0.04em;
      white-space:nowrap;
      ">
      พื้นที่เหมาะสมสำหรับคอนกรีตขัดเงา
    </div>
  </div>
</div>
<!-- ต่อท้ายกล่อง "พื้นที่เหมาะสมสำหรับคอนกรีตขัดเงา" -->
<div style="width:100%; display:flex; justify-content:flex-start;">
  <div style="color:#0d2676; font-size:1.18rem; font-weight:600; margin-left:150px; margin-top:-35px; max-width:1500px; line-height:1.7; text-align:left; word-break:break-word;" class="place-desc-mobile-fix">
    โรงงานอุตสาหกรรม โกดังไซโล ที่จัดเก็บพืชทางการเกษตร โรงกลั่นน้ำมัน ห้างสรรพสินค้า ศูนย์แสดงสินค้า<br>
    โชว์รูมรถ ร้านอาหาร โรงพยาบาล สนามบิน พิพิธภัณฑ์ สนามกีฬา และ Warehouse โกดังสินค้า ฯลฯ
  </div>
</div>
<!-- ต่อท้ายกล่องข้อความสถานที่ -->
<div style="width:100%; margin:0; padding:0;">
  <img 
    src="https://scontent.fbkk29-7.fna.fbcdn.net/v/t39.30808-6/503107548_2159023404542911_8942682880053844079_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=127cfc&_nc_ohc=VYgkyUR8XlQQ7kNvwFXAlhE&_nc_oc=Adk3JztOnDwx_ejqa_Fbp8V33kEkwh8TV-M0DYevuXo261AvIHt3_Oz7Fu6HSXaCtrkJyA_AZN69zx_y2ysHXWOd&_nc_zt=23&_nc_ht=scontent.fbkk29-7.fna&_nc_gid=u2Yy9B5CB_nxmkw-joZhMg&oh=00_AfJkMbE3aj82o51mRIOXC2qFY6-N5FQaBMvNDAfPyR6xZA&oe=6840EC40"
    alt="ตัวอย่างสถานที่"
    style="width:100%; max-width:100vw; border-radius:0; display:block; margin:0; padding:0;"
  >
  
</div>

<!-- แทรกข้อความซ้อนในภาพคุณสมบัติ (Overlay) -->
<div style="position:relative; width:100%; max-width:100vw; margin:0; padding:0;">
  <img 
    src="https://static.wixstatic.com/media/51972b_f51c9b188d414053ba98669731f76a3d~mv2.png/v1/crop/x_0,y_474,w_7483,h_5400/fill/w_980,h_707,al_c,q_90,usm_0.66_1.00_0.01,enc_avif,quality_auto/%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%AA%E0%B8%A1%E0%B8%9A%E0%B8%B1%E0%B8%95%E0%B8%B401.png"
    alt="คุณสมบัติ"
    style="width:100%; max-width:100vw; border-radius:0; display:block; margin:0; padding:0;"
  >
  <div style="
    position:absolute;
    top:0; left:0; width:100%; height:100%;
    display:flex; align-items:flex-start; justify-content:flex-start;
    pointer-events:none; z-index:2;
  ">
    <div style="
      max-width:900px;
      
      border-radius:18px;
      padding:32px 36px;
      box-shadow:0 4px 24px rgba(0,0,0,0.10);
      text-align:left;
      margin-top:16px;
      margin-left:48px; /* ขยับกล่องไปทางซ้าย */
    ">
      <!-- ใส่คลาส hide-on-mobile ครอบข้อความที่ต้องการซ่อน -->
      <div class="hide-on-mobile" style="font-size:2rem; font-weight:bold; color:#ffe600; margin-bottom:18px; font-family:'Prompt','Kanit',sans-serif;">
        Concrete Polishing Floor <span style="color:#ffe600;">พื้นคอนกรีตขัดเงา</span>
      </div>
      <div class="hide-on-mobile" style="font-size:1.18rem; line-height:2; color:#fff; margin-bottom:18px;">
        นวัตกรรมคอนกรีตขัดเงา ได้รับความนิยมมากขึ้นในกลุ่มของงานตกแต่งคอนกรีต เพราะให้ทั้งความสวยงาม และสร้างความแข็งแรงต่อระบบพื้น ซึ่งเป็นส่วนที่ต้องมีความทนทานอย่างมากเพื่อรองรับการใช้งานหนักอยู่ตลอดเวลา ในพื้นที่โรงงาน ส่วนผลิต โกดังสินค้า ฯลฯ จึงเกิดเทคโนโลยีเครื่องขัดเงาคอนกรีต High Speed Grinding ที่ทรงประสิทธิภาพ พร้อมด้วยใบขัดเกรดพรีเมียม RESIN BOND และ METAL BOND หัวใจสำคัญที่ทำให้เกิดความเงางามสะท้อนเฉกเช่นกระจก และน้ำยา Calcium Silicate สูตร Lithium ที่ช่วยให้การทำงานเป็นเรื่องง่าย ประหยัด และเสริมความแข็งหน้าผิว ตามแบบฉบับของพื้นคอนกรีตขัดเงา
      </div>
      <div class="hide-on-mobile" style="font-size:1.18rem; line-height:2; color:#ffe600; font-weight:bold; margin-top:12px;">
        “ เสริมความแข็งแกร่ง ต้านแรงกระแทก ทนการขีดข่วน เปลี่ยนพื้นผิวคอนกรีตเดิม สู่ความเรียบเนียน เงางาม ”
      </div>
    </div>
  </div>
</div>
<!-- ต่อด้านล่าง overlay ด้วยภาพใหม่ -->
<div style="width:100%; margin:0; padding:0;">
  <img 
    src="https://static.wixstatic.com/media/51972b_57a69f1d232f4544a132acff272f7e85~mv2_d_2478_3390_s_4_2.jpg/v1/crop/x_0,y_10,w_2478,h_1178/fill/w_980,h_466,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/51972b_57a69f1d232f4544a132acff272f7e85~mv2_d_2478_3390_s_4_2.jpg"
    alt="ต่อด้านล่าง"
    style="width:100%; max-width:100vw; border-radius:0; display:block; margin:0; padding:0;"
  >
</div>
<!-- หัวข้อ "ภาพผลงาน" พร้อมเส้นใต้แบบในภาพตัวอย่าง -->
<div style="text-align:center; margin:56px 0 24px 0;">
  <div style="font-size:2.2rem; color:#8B0000; font-family:'Kanit','Prompt',sans-serif; font-weight:bold; letter-spacing:0.08em;">
    ภาพผลงาน
  </div>
  <div style="width:320px; max-width:90vw; margin:12px auto 0 auto; border-bottom:4px solid #3ccbc4; border-top:2px solid #3ccbc4;"></div>
</div>
<!-- เซ็ตภาพผลงาน บรรทัดละ 4 ภาพ -->
<div style="max-width:1200px; margin:0 auto 56px auto; display:flex; flex-direction:column; gap:24px;">
  <!-- แถวที่ 1 -->
  <div style="display:flex; gap:18px; justify-content:center;">
    <img class="gallery-img" data-index="0" src="https://static.wixstatic.com/media/51972b_bc9c06795919447787c7224eefecec03~mv2.jpg/v1/fill/w_655,h_655,al_c,q_85,enc_auto/51972b_bc9c06795919447787c7224eefecec03~mv2.jpg" alt="" style="width:100%; max-width:270px; aspect-ratio:1/1; object-fit:cover; border-radius:12px; box-shadow:0 2px 12px rgba(0,0,0,0.08); cursor:pointer;">
    <img class="gallery-img" data-index="1" src="https://static.wixstatic.com/media/51972b_1b9c8dc75ccd48bfaba55b4facfdad9d~mv2.jpg/v1/fill/w_721,h_721,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/51972b_1b9c8dc75ccd48bfaba55b4facfdad9d~mv2.jpg" alt="" style="width:100%; max-width:270px; aspect-ratio:1/1; object-fit:cover; border-radius:12px; box-shadow:0 2px 12px rgba(0,0,0,0.08); cursor:pointer;">
    <img class="gallery-img" data-index="2" src="https://static.wixstatic.com/media/51972b_1fc4a0f3a1c54f799020d87283d6190d~mv2.jpg/v1/fill/w_660,h_660,al_c,q_85,enc_auto/51972b_1fc4a0f3a1c54f799020d87283d6190d~mv2.jpg" alt="" style="width:100%; max-width:270px; aspect-ratio:1/1; object-fit:cover; border-radius:12px; box-shadow:0 2px 12px rgba(0,0,0,0.08); cursor:pointer;">
    <img class="gallery-img" data-index="3" src="https://static.wixstatic.com/media/51972b_ea654e7065634f6d84acf49eb1dfab78~mv2.jpg/v1/fill/w_721,h_721,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/51972b_ea654e7065634f6d84acf49eb1dfab78~mv2.jpg" alt="" style="width:100%; max-width:270px; aspect-ratio:1/1; object-fit:cover; border-radius:12px; box-shadow:0 2px 12px rgba(0,0,0,0.08); cursor:pointer;">
  </div>
  <!-- แถวที่ 2 -->
  <div style="display:flex; gap:18px; justify-content:center;">
    <img class="gallery-img" data-index="4" src="https://static.wixstatic.com/media/51972b_44cc4190edff486c87fc43d3c8166d6d~mv2.jpg/v1/fill/w_721,h_721,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/51972b_44cc4190edff486c87fc43d3c8166d6d~mv2.jpg" alt="" style="width:100%; max-width:270px; aspect-ratio:1/1; object-fit:cover; border-radius:12px; box-shadow:0 2px 12px rgba(0,0,0,0.08); cursor:pointer;">
    <img class="gallery-img" data-index="5" src="https://static.wixstatic.com/media/51972b_c8da1b17055a4ea5b81678161647f863~mv2.jpg/v1/fill/w_540,h_721,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/51972b_c8da1b17055a4ea5b81678161647f863~mv2.jpg" alt="" style="width:100%; max-width:270px; aspect-ratio:1/1; object-fit:cover; border-radius:12px; box-shadow:0 2px 12px rgba(0,0,0,0.08); cursor:pointer;">
    <img class="gallery-img" data-index="6" src="https://static.wixstatic.com/media/51972b_d94c6c0c13184b0c87a0d2a7528a4bcd~mv2.jpg/v1/fill/w_721,h_721,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/51972b_d94c6c0c13184b0c87a0d2a7528a4bcd~mv2.jpg" alt="" style="width:100%; max-width:270px; aspect-ratio:1/1; object-fit:cover; border-radius:12px; box-shadow:0 2px 12px rgba(0,0,0,0.08); cursor:pointer;">
    <img class="gallery-img" data-index="7" src="https://static.wixstatic.com/media/51972b_2bb7fb1bba3f4af684a7b82756145436~mv2.jpg/v1/fill/w_721,h_721,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/51972b_2bb7fb1bba3f4af684a7b82756145436~mv2.jpg" alt="" style="width:100%; max-width:270px; aspect-ratio:1/1; object-fit:cover; border-radius:12px; box-shadow:0 2px 12px rgba(0,0,0,0.08); cursor:pointer;">
  </div>
</div>

<!-- Lightbox HTML -->
<div id="lightbox" class="lightbox-bg" onclick="closeLightbox(event)">
  <button class="lightbox-close" type="button" title="ปิด">&times;</button>
  <button class="lightbox-next" type="button" title="ถัดไป">&#8250;</button>
  <button class="lightbox-prev" type="button" title="ก่อนหน้า">&#8249;</button>
  <img id="lightbox-img" class="lightbox-img" src="" alt="ภาพผลงาน">
</div>
<script>
  // รวมฟังก์ชัน Desktop & Mobile
  const galleryImages = [
    "https://static.wixstatic.com/media/51972b_bc9c06795919447787c7224eefecec03~mv2.jpg/v1/fill/w_655,h_655,al_c,q_85,enc_auto/51972b_bc9c06795919447787c7224eefecec03~mv2.jpg",
    "https://static.wixstatic.com/media/51972b_1b9c8dc75ccd48bfaba55b4facfdad9d~mv2.jpg/v1/fill/w_721,h_721,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/51972b_1b9c8dc75ccd48bfaba55b4facfdad9d~mv2.jpg",
    "https://static.wixstatic.com/media/51972b_1fc4a0f3a1c54f799020d87283d6190d~mv2.jpg/v1/fill/w_660,h_660,al_c,q_85,enc_auto/51972b_1fc4a0f3a1c54f799020d87283d6190d~mv2.jpg",
    "https://static.wixstatic.com/media/51972b_ea654e7065634f6d84acf49eb1dfab78~mv2.jpg/v1/fill/w_721,h_721,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/51972b_ea654e7065634f6d84acf49eb1dfab78~mv2.jpg",
    "https://static.wixstatic.com/media/51972b_44cc4190edff486c87fc43d3c8166d6d~mv2.jpg/v1/fill/w_721,h_721,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/51972b_44cc4190edff486c87fc43d3c8166d6d~mv2.jpg",
    "https://static.wixstatic.com/media/51972b_c8da1b17055a4ea5b81678161647f863~mv2.jpg/v1/fill/w_540,h_721,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/51972b_c8da1b17055a4ea5b81678161647f863~mv2.jpg",
    "https://static.wixstatic.com/media/51972b_d94c6c0c13184b0c87a0d2a7528a4bcd~mv2.jpg/v1/fill/w_721,h_721,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/51972b_d94c6c0c13184b0c87a0d2a7528a4bcd~mv2.jpg",
    "https://static.wixstatic.com/media/51972b_2bb7fb1bba3f4af684a7b82756145436~mv2.jpg/v1/fill/w_721,h_721,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/51972b_2bb7fb1bba3f4af684a7b82756145436~mv2.jpg"
  ];
  let currentIndex = 0;
  // เปิด lightbox
  document.querySelectorAll('.gallery-img').forEach(img => {
    img.addEventListener('click', function(e) {
      e.stopPropagation();
      currentIndex = parseInt(this.getAttribute('data-index'));
      showLightbox();
    });
  });

  function showLightbox() {
    document.getElementById('lightbox-img').src = galleryImages[currentIndex];
    document.getElementById('lightbox').classList.add('active');
    // บันทึก scroll ปัจจุบัน
    window._scrollY = window.scrollY || window.pageYOffset;
    document.body.classList.add('lightbox-open');
    document.body.style.top = `-${window._scrollY}px`;
  }

  function closeLightbox(e) {
    e.stopPropagation();
    document.getElementById('lightbox').classList.remove('active');
    document.body.classList.remove('lightbox-open');
    // กลับไปตำแหน่งเดิม
    window.scrollTo(0, window._scrollY || 0);
    document.body.style.top = '';
  }

  function nextLightbox(e) {
    e.stopPropagation();
    currentIndex = (currentIndex + 1) % galleryImages.length;
    showLightbox();
  }

  function prevLightbox(e) {
    e.stopPropagation();
    currentIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
    showLightbox();
  }

  document.querySelector('.lightbox-close').onclick = function(e) {
    e.stopPropagation();
    closeLightbox(e);
  };
  document.querySelector('.lightbox-next').onclick = function(e) {
    e.stopPropagation();
    nextLightbox(e);
  };
  document.querySelector('.lightbox-prev').onclick = function(e) {
    e.stopPropagation();
    prevLightbox(e);
  };

  document.addEventListener('keydown', function(e) {
    if (e.key === "Escape") document.getElementById('lightbox').classList.remove('active');
    if (e.key === "ArrowRight" && document.getElementById('lightbox').classList.contains('active')) nextLightbox(e);
    if (e.key === "ArrowLeft" && document.getElementById('lightbox').classList.contains('active')) prevLightbox(e);
  });
</script>
</body>
</html>
