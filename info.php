<div class="container">
    <?php include('menu.php'); ?>
    
    <h1>แหล่งรวมข้อมูลการตกแต่งคอนกรีตแนวใหม่</h1>
    
    <div class="card-grid">
        <a class="card" href="info/info1.php">
            <img src="https://static.wixstatic.com/media/51972b_e76b92641aa5485492ecc2ff91964078~mv2.jpg/v1/fill/w_315,h_236,fp_0.50_0.50,q_90,enc_avif,quality_auto/51972b_e76b92641aa5485492ecc2ff91964078~mv2.webp" alt="ภาพ 1">
            <div class="card-content">
                <div class="card-title
">การพิมพ์ลายคอนกรีต ลาย Random ทำไมถึงได้รับความนิยม?</div>
                <div class="card-desc">เรียนรู้เกี่ยวกับการพิมพ์ลายคอนกรีต ลาย Random</div>
            </div>
            <div class="card-footer">
                <i class="fas fa-calendar-alt"></i> 06/06/2025
            </div>
        </a>
        
        <a class="card" href="info/info2.php">
            <img src="https://static.wixstatic.com/media/51972b_e8677a825ef84043a11e3cb02d9dbde2~mv2.jpg/v1/fill/w_315,h_236,fp_0.50_0.50,q_90,enc_avif,quality_auto/51972b_e8677a825ef84043a11e3cb02d9dbde2~mv2.jpg" alt="ภาพ 2">
            <div class="card-content">
                <div class="card-title
">พื้นคอนกรีตพิมพ์ลาย ใช้เวลาทำกี่วัน?</div>
                <div class="card-desc">ระะยเวลา และ ราคา ในการติดตั้ง</div>
            </div>
            <div class="card-footer">
                <i class="fas fa-calendar-alt"></i> 06/06/2025
            </div>
        </a>
        
        <a class="card" href="info/info3.php">
            <img src="https://static.wixstatic.com/media/51972b_7bc45a55d17f43d2bd4a220e2e36e3b2~mv2.jpg/v1/fill/w_315,h_236,fp_0.50_0.50,q_90,enc_avif,quality_auto/51972b_7bc45a55d17f43d2bd4a220e2e36e3b2~mv2.jpg" alt="ภาพ 3">
            <div class="card-content">
                <div class="card-title
">พื้นคอนกรีตพิมพ์ลาย มีกี่แบบ?</div>
                <div class="card-desc">เรียนรู้เกี่ยวกับพื้นคอนกรีตพิมพ์ลาย</div>
            </div>
            <div class="card-footer">
                <i class="fas fa-calendar-alt"></i> 06/06/2025
            </div>
        </a>
        <a class="card" href="info/info4.php">
            <img src="https://static.wixstatic.com/media/51972b_2c8d0f1e3f5c4b9d8a6e7c5f0b3f1c2b~mv2.jpg/v1/fill/w_315,h_236,fp_0.50_0.50,q_90,enc_avif,quality_auto/51972b_2c8d0f1e3f5c4b9d8a6e7c5f0b3f1c2b~mv2.jpg" alt="ภาพ 4">
            <div class="card-content">
                <div class="card-title
">พื้นคอนกรีตพิมพ์ลาย : ราคา และข้อมูลที่ควรรู้</div>
        
        
    </div>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit&display=swap">
  <style>
    body {
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #f5f5f5;
    padding: 20px;
    font-family: 'Sarabun', sans-serif;
}

.container {
    width: 80%; /* กำหนดให้เมนูและเนื้อหามีขนาดเดียวกัน */
    margin: auto;
}

.menu {
    width: 100%; /* ให้เต็ม container */
}

.card-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 20px;
    margin-top: 30px;
    width: 100%; /* ทำให้ขนาดตรงกับเมนู */
}

    h1 {
      color: red;
      text-align: left;
    }

    .card-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 20px;
      margin-top: 30px;
    }

    .card {
      background-color: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      transition: transform 0.2s;
      text-decoration: none;
      color: inherit;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .card-content {
      padding: 15px;
    }

    .card-title {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .card-desc {
      font-size: 14px;
      color: #555;
      height: 40px;
      overflow: hidden;
    }

    .card-footer {
      padding: 10px 15px;
      font-size: 13px;
      color: #999;
      display: flex;
      align-items: center;
      border-top: 1px solid #eee;
    }

    .card-footer i {
      margin-right: 5px;
    }
    
}
  </style>
</head>
<body>
</body>
</html>
