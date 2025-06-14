<?php include "premenu.php"; ?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>เกี่ยวกับเรา</title>
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
    
    .about-section {
      max-width: 1400px;
      margin: 48px auto 0 auto;
      padding: 0 32px 80px 32px; /* More bottom and side padding */
      box-sizing: border-box;
    }
    .about-content {
      display: flex;
      flex-wrap: wrap;
      gap: 48px;
      align-items: flex-start;
    }
    .about-text {
      flex: 1 1 420px;
      min-width: 280px;
      padding: 24px 24px 24px 0;
      box-sizing: border-box;
    }
    .about-title {
      color: #1976d2;
      font-size: 1.05rem;
      font-weight: 600;
      margin-bottom: 18px;
    }
    .about-text h1 {
      font-family: 'Kanit', sans-serif;
      font-size: 2.2rem;
      font-weight: 900;
      margin: 0 0 18px 0;
      line-height: 1.2;
    }
    .about-text hr {
      width: 80px;
      border: 2px solid #1976d2;
      margin: 18px 0 24px 0;
      border-radius: 2px;
    }
    .about-text p {
      font-size: 1.13rem;
      color: #222;
      line-height: 1.8;
      margin: 0;
    }
    .about-image {
      flex: 1 1 420px;
      min-width: 220px;
      display: flex;
      justify-content: flex-end;
      align-items: flex-start;
      padding: 24px 0 24px 24px;
      box-sizing: border-box;
    }
    .about-image img {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
      box-shadow: 0 4px 24px rgba(0,0,0,0.12);
      background: #fff;
    }

    @media (max-width: 900px) {
      .about-section {
        padding: 0 12px 48px 12px;
      }
      .about-content {
        flex-direction: column;
        gap: 24px;
      }
      .about-text,
      .about-image {
        padding: 0;
        min-width: 0;
      }
      .about-image {
        justify-content: center;
        margin-top: 24px;
      }
      .about-text h1 {
        font-size: 1.3rem;
      }
      .about-text p {
        font-size: 1rem;
      }
    }
    @media (max-width: 600px) {
      .about-section {
        padding: 0 4vw 32px 4vw;
      }
      .about-text h1 {
        font-size: 1.1rem;
      }
      .about-title {
        font-size: 0.95rem;
      }
      .about-image img {
        border-radius: 6px;
      }
    }
    </style>
</head>
<body>
 
  <!-- About Section -->
  <div class="about-section">
    <div class="about-content">
      <div class="about-text">
        <div class="about-title">Who We Are</div>
        <h1>
          คอนกรีตเดคคอร์อินโนเวชั่นศูนย์<br>
          จำหน่ายเครื่องมือเพื่อการตกแต่งผิว<br>
          คอนกรีตแนวใหม่แห่งแรกในไทยและ<br>
          ใหญ่ที่สุดบนโลกออนไลน์
        </h1>
        <hr>
        <p>
          เดียวครบครันทั้งแม่พิมพ์ยาง แม่พิมพ์พลาสติกลูกกลิ้งสร้างลาย เพื่อสร้างลวดลายบนผิวคอนกรีตสีเคลือบแกร่งสีกรดย้อมคอนกรีตน้ำยาเคลือบเงาเสริมแรงซิเมนต์เคมีภัณฑ์สำหรับงานคอนกรีตและอื่นอื่นอีกมากกว่า 500 รายการ<br><br>
          บริการรับเหมาทีมงานมืออาชีพด้วยประสบการณ์มากกว่า 15 ปีได้รับความไว้วางใจให้บริการรับเหมางานคอนกรีตพิมพ์ลาย คอนกรีตลอกลายงานพื้นครีตสไตล์ฟอร์ งานติดตั้งผนังตกแต่งสามมิติ MM WALL พร้อมบริการเคลือบสี ตกแต่งพื้นและผนัง โรงงานอุตสาหกรรมต่างๆ<br><br>
          ศูนย์ฝึก สอนสร้างอาชีพ ศูนย์ให้คำปรึกษางานตกแต่งคอนกรีตยินดีให้คำปรึกษาและฝึกสอนเชิงปฏิบัติการวิธีคีย์มือสร้างอาชีพได้งานตกแต่งคอนกรีตแนวใหม่มากกว่า 18 วิชาชีพและคอนกรีตเดคคอร์ไทยแลนด์ มีทีมเชี่ยวชาญรับเหมางานตกแต่งคอนกรีตฝีมือดีเพื่อแลกเปลี่ยนความรู้และประสบการณ์เพราะหัวใจขององค์กรคือการเป็นผู้ให้ ยินดีให้คำปรึกษาและฝึกสอนเชิงปฏิบัติการ
        </p>
      </div>
      <div class="about-image">
        <img src="https://cdi.co.th/wp-content/uploads/2018/12/24.png" alt="Concrete Work">
      </div>
    </div>
  </div>
</body>
</html>
<?php include "footer.php"; ?>