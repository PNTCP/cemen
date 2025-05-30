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
      background-color: #222;
      color: #fff;
      padding: 32px 0;
      text-align: center;
    }

    header h1 {
      margin: 0;
      font-size: 2.2rem;
      letter-spacing: 0.02em;
      font-family: 'Prompt', 'Kanit', sans-serif;
    }

    nav {
      margin-top: 12px;
    }

    nav a {
      color: #f57c00;
      margin: 0 18px;
      text-decoration: none;
      font-weight: 600;
      font-size: 1.1rem;
      transition: color 0.2s;
    }
    nav a:hover {
      color: #e65100;
      text-decoration: underline;
    }

    .hero {
      background: url('https://images.unsplash.com/photo-1601906251540-77e7fdd44ec1?auto=format&fit=crop&w=1950&q=80') center/cover no-repeat;
      height: 48vh;
      min-height: 340px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
      position: relative;
      margin-bottom: 56px;
    }

    .hero::after {
      content: '';
      position: absolute;
      inset: 0;
      background-color: rgba(0,0,0,0.45);
    }

    .hero-content {
      position: relative;
      z-index: 1;
      max-width: 700px;
      padding: 32px 24px;
    }

    .hero-content h2 {
      font-size: 2.5rem;
      margin-bottom: 16px;
      color: #f57c00;
      font-family: 'Prompt', 'Kanit', sans-serif;
      font-weight: 600;
      letter-spacing: 0.03em;
    }

    .hero-content p {
      font-size: 1.25rem;
      color: #fff;
      margin-bottom: 0;
    }

    .btn {
      display: inline-block;
      margin-top: 28px;
      padding: 12px 32px;
      background-color: #f57c00;
      color: #fff;
      text-decoration: none;
      font-weight: bold;
      border-radius: 6px;
      font-size: 1.1rem;
      box-shadow: 0 2px 8px rgba(0,0,0,0.08);
      transition: background 0.2s, box-shadow 0.2s;
      border: none;
      cursor: pointer;
    }
    .btn:hover {
      background-color: #e65100;
      box-shadow: 0 4px 16px rgba(229,81,0,0.12);
    }

    section {
      padding: 64px 0;
      max-width: 1100px;
      margin: 0 auto;
      background: transparent;
    }

    h3 {
      font-size: 2rem;
      margin-bottom: 32px;
      color: #f57c00;
      font-family: 'Prompt', 'Kanit', sans-serif;
      font-weight: 600;
      letter-spacing: 0.02em;
    }

    .features ul {
      list-style: none;
      padding: 0;
      margin: 0 0 0 0;
    }

    .features li {
      margin-bottom: 18px;
      font-size: 1.1rem;
    }

    .features li::before {
      content: '✅ ';
      color: #e65100;
      font-size: 1.1em;
    }

    .features .highlight {
      color: #e65100;
      font-weight: 600;
    }

    .features-flex {
      display: flex;
      gap: 56px;
      flex-wrap: wrap;
      align-items: flex-start;
      margin-bottom: 0;
    }
    .features-flex ul,
    .features-flex p {
      flex: 1 1 320px;
      min-width: 260px;
    }

    /* Service Boxes */
    .services {
      display: flex;
      flex-wrap: wrap;
      gap: 32px;
      justify-content: center;
      margin-bottom: 0;
    }

    .service-box {
      background: #fff;
      padding: 32px 28px;
      border-radius: 18px;
      box-shadow: 0 2px 16px rgba(229,81,0,0.07), 0 1.5px 6px rgba(0,0,0,0.04);
      flex: 1 1 220px;
      min-width: 220px;
      max-width: 260px;
      transition: box-shadow 0.2s, border 0.2s, transform 0.18s;
      border: 2px solid transparent;
      cursor: pointer;
      margin-bottom: 0;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
    }
    .service-box h4 {
      margin: 0 0 12px 0;
      color: #e65100;
      font-size: 1.18rem;
      font-family: 'Prompt', 'Kanit', sans-serif;
      font-weight: 600;
      letter-spacing: 0.01em;
    }
    .service-box p {
      margin: 0;
      color: #444;
      font-size: 1.05rem;
    }
    .service-box:hover {
      box-shadow: 0 4px 24px rgba(229,81,0,0.16), 0 2px 8px rgba(0,0,0,0.08);
      border: 2px solid #f57c00;
      transform: translateY(-4px) scale(1.025);
      background: #fff7f0;
    }

    /* Contact */
    .contact {
      background-color: #fff;
      padding: 48px 32px;
      border-radius: 16px;
      box-shadow: 0 2px 16px rgba(0,0,0,0.07);
      text-align: center;
      max-width: 600px;
      margin: 0 auto;
    }
    .contact h3 {
      margin-top: 0;
      color: #f57c00;
    }
    .contact strong {
      color: #e65100;
    }

    footer {
      background-color: #222;
      color: #aaa;
      text-align: center;
      padding: 32px 0;
      font-size: 1rem;
      letter-spacing: 0.01em;
      margin-top: 64px;
    }

    .feature-desc {
      font-size: 1.35rem;
      color: #e65100;
      font-weight: 600;
      margin-bottom: 0;
      margin-top: 12px;
      line-height: 2.1;
      font-family: 'Prompt', 'Kanit', sans-serif;
    }

    /* Desktop only */
    @media (max-width: 1023px) {
      .hero-content h2, h3 {
        font-size: 1.3rem;
      }
      .services {
        flex-direction: column;
        gap: 18px;
      }
      .service-box {
        max-width: 100%;
        min-width: 0;
        margin: 0 auto;
      }
      section {
        padding: 36px 0;
      }
      .features-flex {
        flex-direction: column;
        gap: 24px;
      }
    }
    @media (max-width: 600px) {
      .hero {
        min-height: 180px;
        height: 28vh;
      }
      .hero-content {
        padding: 18px 6px;
      }
      .contact {
        padding: 24px 8px;
      }
    }
  </style>
</head>
<body>



<section class="hero">
  <div class="hero-content">
    <h2>พื้นเงาสวย ทนทาน<br>ด้วยคอนกรีตขัดเงามาตรฐาน</h2>
    <p>บริการขัดเงาคอนกรีตสำหรับบ้าน โรงงาน โชว์รูม และคลังสินค้า<br>ผิวเงางาม แข็งแรง ดูแลง่าย</p>
    <a href="Contact.php" class="btn">ติดต่อเรา</a>
  </div>
</section>

<section id="about" class="features">
  <h3>ทำไมต้องเลือกพื้นขัดเงา?</h3>
  <div class="features-flex">
    <ul>
      <li>ผิวเงางามระดับโชว์รูม</li>
      <li>ทนทานต่อรอยขีดข่วน</li>
      <li>ไม่จับฝุ่น <span class="highlight">ทำความสะอาดง่าย</span></li>
      <li>ลดค่าใช้จ่ายระยะยาว</li>
      <li>เหมาะทั้งบ้านและโรงงาน</li>
    </ul>
    <div class="feature-desc">
      คอนกรีตขัดเงาคือกระบวนการขัดพื้นผิวด้วยเครื่องพิเศษ เพื่อให้พื้นเรียบ สะท้อนแสง และมีความแข็งแรงสูง นิยมใช้ในโรงงาน โชว์รูม หรือแม้แต่ร้านกาแฟสไตล์ลอฟต์
    </div>
  </div>
</section>

<section id="services">
  <h3>บริการของเรา</h3>
  <div class="services">
    <div class="service-box">
      <h4>ขัดเงาระดับมาตรฐาน</h4>
      <p>เหมาะกับพื้นบ้าน ร้านกาแฟ หรือพื้นที่ขนาดเล็ก</p>
    </div>
    <div class="service-box">
      <h4>ขัดเงาระดับโชว์รูม</h4>
      <p>เพิ่มความหรูหราและเงางามระดับสูง สำหรับโชว์รูมและห้าง</p>
    </div>
    <div class="service-box">
      <h4>ขัดน้ำ / ขัดผิวเรียบ</h4>
      <p>เหมาะสำหรับพื้นเตรียมทาสีหรือเคลือบ พร้อมลดฝุ่นสะสม</p>
    </div>
    <div class="service-box">
      <h4>ขัดผิวระดับโรงงาน</h4>
      <p>เหมาะสำหรับโรงงานอุตสาหกรรม พื้นที่ใช้งานหนัก ต้องการความทนทานสูง</p>
    </div>
    <div class="service-box">
      <h4>คลังสินค้า</h4>
      <p>บริการขัดเงาพื้นคลังสินค้า รองรับน้ำหนักและการใช้งานต่อเนื่อง</p>
    </div>
  </div>
</section>

<section id="contact">
  <div class="contact">
    <img src="https://cdi.co.th/wp-content/uploads/2020/03/S__6258772-removebg-preview.png" alt="CDI Logo" style="width:300px; height:auto; margin-bottom:18px; display:block; margin-left:auto; margin-right:auto;">
    <h3>ติดต่อเรา</h3>
    <p>บริษัท คอนกรีตเดคคอร์ อินโนเวนชั่น จำกัด</p>
    <p><strong>โทร:</strong> 096-893-5544</p>
    <p><strong>ไลน์:</strong> <a href="https://line.me/ti/p/eAmTWa8mkc" target="_blank" style="color:#06c; text-decoration:underline;">Dr.Vorapong Noom</a></p>
    <p><strong>อีเมล:</strong> noom.vorapong@gmail.com</p>
  </div>
</section>


</body>
</html>
