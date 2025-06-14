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
    .product-intro {
      max-width: 900px;
      margin: 48px 0 0 64px; /* Align left with left margin, no right margin */
      padding: 0 24px 0 0;
      text-align: left;
      word-break: break-word;
    }
    .product-intro h1 {
      font-size: 2.8rem;
      font-weight: 1500;
      margin-bottom: 16px;
      font-family: 'Prompt', 'Kanit', sans-serif;
    }
    .heading-underline {
      width: 180px;
      height: 2.5px;
      background: #1976d2;
      margin-bottom: 28px;
    }
    .product-intro p {
      font-size: 1.25rem;
      color: #222;
      line-height: 1.7;
      margin: 0;
      font-family: 'Prompt', 'Kanit', sans-serif;
      max-width: 3000px;
      
      white-space: normal;
    }
    .product-cards {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 24px;
    }
    .product-card {
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin: 16px;
      padding: 16px;
      flex: 1 1 340px; /* Fixed min width for consistency */
      max-width: 340px; /* Prevents cards from growing too wide */
      min-width: 300px;
      display: flex;
      flex-direction: column;
      align-items: center;
      box-sizing: border-box;
      transition: box-shadow 0.3s, transform 0.3s;
      cursor: pointer;
      height: 520px; /* Set a fixed height for all cards */
      justify-content: flex-start;
    }
    .product-card:hover {
      box-shadow: 0 8px 32px rgba(25, 118, 210, 0.18), 0 2px 8px rgba(0,0,0,0.12);
      transform: translateY(-8px) scale(1.03);
      z-index: 2;
    }
    .product-card:hover .card-btn {
      background: #1976d2;
      color: #fff;
    }
    .product-card img {
      width: 240px;
      height: 240px;
      object-fit: contain;
      border-radius: 4px;
      display: block;
      margin: 0 auto 16px auto;
    }
    .product-card h2 {
      font-size: 1.15rem;
      margin: 16px 0 8px;
      font-family: 'Prompt', 'Kanit', sans-serif;
      text-align: center;
      font-weight: 700;
    }
    .product-card p {
      font-size: 0.95rem;
      color: #666;
      line-height: 1.5;
      margin: 0 0 16px;
      font-family: 'Prompt', 'Kanit', sans-serif;
      text-align: center;
      padding: 0 6px;
      word-break: break-word;
    }
    .card-btn {
      display: inline-block;
      padding: 10px 20px;
      background: #1976d2;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      transition: background 0.3s;
    }
    .card-btn:hover {
      background: #155a8a;
    }
  </style>
</head>
<body>
  
  <section class="product-intro">
    <h1>สินค้าของเรา</h1>
    <div class="heading-underline"></div>
    <p>
      จำหน่ายเครื่องมือเพื่อการตกแต่งผิวคอนกรีตแนวใหม่ แห่งแรกในไทย และใหญ่ที่สุดบนโลกออนไลน์ ที่เดียวครบครัน ทั้งแม่พิมพ์ยาง พลาสติก ลูกกลิ้ง หรือกระดาษเพื่อสร้างลวดลายบนผิวคอนกรีต, สีเคลือบแกร่ง, สีกรดย้อมคอนกรีต, น้ำยาเคลือบเงา, กาวโฟม, น้ำยาเสริมแรงซีเมนต์, เคมีกันซึม สำหรับงานคอนกรีต และอื่นอีกมากกว่า 500 รายการ
    </p>
  </section>
  
  <section class="product-cards">
    <div class="product-card">
      <img 
        src="https://cdi.co.th/wp-content/uploads/2023/04/1-Lithium-Slicate1510L-1-300x300.jpg"
        srcset="
          https://cdi.co.th/wp-content/uploads/2023/04/1-Lithium-Slicate1510L-1-300x300.jpg 300w,
          https://cdi.co.th/wp-content/uploads/2023/04/1-Lithium-Slicate1510L-1-768x768.jpg 768w,
          https://cdi.co.th/wp-content/uploads/2023/04/1-Lithium-Slicate1510L-1-1024x1024.jpg 1024w
        "
        sizes="(max-width: 400px) 100vw, 300px"
        alt="พื้นคอนกรีตขัดเงา คริสตัลฟลอร์"
      >
      <h2>พื้นคอนกรีตขัดเงา คริสตัลฟลอร์</h2>
      <p>พื้นที่มีความแข็งแรงไม่ก่อให้เกิดฝุ่น ดูสวยงาม สามารถทำได้กับพื้นใหม่หรือพื้นเก่าที่มีการใช้งานมานานแล้ว</p>
      <a href="product/Product001.php" class="card-btn">ดูรายละเอียด</a>
    </div>
    <div class="product-card">
      <img 
        src="https://cdi.co.th/wp-content/uploads/2023/04/3-PU-Screed-300x300.jpg"
        srcset="
          https://cdi.co.th/wp-content/uploads/2023/04/3-PU-Screed-300x300.jpg 300w,
          https://cdi.co.th/wp-content/uploads/2023/04/3-PU-Screed-768x768.jpg 768w,
          https://cdi.co.th/wp-content/uploads/2023/04/3-PU-Screed-1024x1024.jpg 1024w
        "
        sizes="(max-width: 400px) 100vw, 300px"
        alt="ผลิตภัณฑ์งานพื้น โพลียูรีเทน"
      >
      <h2>ผลิตภัณฑ์งานพื้น โพลียูรีเทน</h2>
      <p>พื้นโพลียูรีเทน เป็นสารเคมีที่ถูกออกแบบมาทนต่อสารเคมี อาทิ กรดอินทรีย์ กรดอนินทรีย์ กรดเกลือและต่างประเภทต่าง ๆ</p>
      <a href="product/Product002.php" class="card-btn">ดูรายละเอียด</a>
    </div>
    <div class="product-card">
      <img 
        src="https://cdi.co.th/wp-content/uploads/2023/04/6-Polyurea-300x300.jpg"
        srcset="
          https://cdi.co.th/wp-content/uploads/2023/04/6-Polyurea-300x300.jpg 300w,
          https://cdi.co.th/wp-content/uploads/2023/04/6-Polyurea-768x768.jpg 768w,
          https://cdi.co.th/wp-content/uploads/2023/04/6-Polyurea-1024x1024.jpg 1024w
        "
        sizes="(max-width: 400px) 100vw, 300px"
        alt="พื้นโพลียูเรีย ฮาร์ดโค้ทเวอร์"
      >
      <h2>พื้นโพลียูเรีย ฮาร์ดโค้ทเวอร์</h2>
      <p>คุณสมบัติกันน้ำได้ 100% การยึดเกาะที่ดีเยี่ยมกับคอนกรีตและเหล็ก รับน้ำหนัก ทนแรงกระแทก ยืดตัวมากกว่า 500%</p>
      <a href="product/Product003.php" class="card-btn">ดูรายละเอียด</a>
    </div>
   
    <div class="product-card">
      <img 
        src="https://cdi.co.th/wp-content/uploads/2023/04/4-Hybrid-Polyutethane.jpg"
        alt="ไฮบริด ผลิตภัณฑ์กันซึม 100% ยืดหยุ่นตัวสูง"
      >
      <h2>ไฮบริด ผลิตภัณฑ์กันซึม 100% ยืดหยุ่นตัวสูง</h2>
      <p>เป็นของเหลวกันซึมยืดหยุ่นผ่านได้ดี มีความยืดหยุ่นได้มากกว่า 6 เท่า หรือมากกว่า 600% ทนทานต่อสภาวะอากาศและแสงแดด</p>
      <a href="product/Product004.php" class="card-btn">ดูรายละเอียด</a>
    </div>
    <div class="product-card">
      <img 
        src="https://cdi.co.th/wp-content/uploads/2023/04/10-Stencil-Paper.jpg"
        alt="คอนกรีตลวดลาย"
      >
      <h2>คอนกรีตลวดลาย</h2>
      <p>นวัตกรรมตกแต่งผิวคอนกรีต ให้เกิดลวดลายและสีสันที่สวยงามผ่านเทคนิคการใช้ กระดาษลวดลายร่วมกับผงสีซีเมนต์เคลือบแกร่ง ด้วยการทำงานที่ไม่ยุ่งยากซับซ้อน</p>
      <a href="product/Product005.php" class="card-btn">ดูรายละเอียด</a>
    </div>
    <div class="product-card">
      <img 
        src="https://cdi.co.th/wp-content/uploads/2023/04/2-Carpet-Stone5L-768x768.jpg"
        alt="โพลีเมอร์ ประสานกรวดล้าง ทรายล้าง แบบไม่ใช้ปูน"
      >
      <h2>โพลีเมอร์ ประสานกรวดล้าง ทรายล้าง แบบไม่ใช้ปูน</h2>
      <p>เหมาะสำหรับตกแต่งพื้นได้ทั้งภายในภายนอกอาคาร งานทางเดินเท้าและบันไดรถยนต์ ใช้ร่วมกับกรวดลายแบบงานจัดสวน ใช้กับการแต่งภูมิทัศน์ภายในและภายนอก</p>
      <a href="product/Product006.php" class="card-btn">ดูรายละเอียด</a>
    </div>
    <div class="product-card">
      <img 
        src="https://cdi.co.th/wp-content/uploads/2023/04/7-DecorCleaning-Product.jpg"
        alt="น้ำยาทำความสะอาด"
      >
      <h2>น้ำยาทำความสะอาด</h2>
      <p>น้ำยาทำความสะอาด by ช่างเดคคอร์ สามารถ ขจัดคราบซีเมนต์, คราบขาว, คราบตะไคร่น้ำและเชื้อรา, คราบหินธรรมชาติ และคราบทำความสะอาดร่องยาแนว</p>
      <a href="product/Product007.php" class="card-btn">ดูรายละเอียด</a>
      
    </div>
    <div class="product-card">
      <img 
        src="https://cdi.co.th/wp-content/uploads/2023/04/8-GraniteSpray.jpg"
        alt="Granite Spray สีหินแกรนิต"
      >
      <h2>Granite Spray สีหินแกรนิต</h2>
      <p>เมื่อสีผสมสำเร็จ แค่พ่นก็ได้ลาย หนึ่งในนวัตกรรมที่น่าตื่นตาตื่นใจสำหรับการสร้างผิวงานกรณีมีนวัตกรรมใหม่ที่ช่วยให้คุณประหยัดเนื้ออย่างมากมายมหาศาล เมื่อเทียบกับการติดตั้งหินแกรนิตจริง</p>
      <a href="product/Product008.php" class="card-btn">ดูรายละเอียด</a>
    </div>
    <div class="product-card">
      <img 
        src="https://cdi.co.th/wp-content/uploads/2023/04/9-MMwall.jpg"
        alt="MM wall"
      >
      <h2>MM wall</h2>
      <p>ผนังฉนวนกันความร้อนลามีผิวหลากดีไซน์ถึงธรรมชาติ กลับมาสู่บ้านคุณ ด้วยผนังฉนวนกันความร้อนพร้อมลายแบบธรรมชาติ เช่น ลายหินผา หินร่อน ลายไม้ฝา ลายไม้ และ อื่นๆอีกมากมาย</p>
      <a href="product/Product009.php" class="card-btn">ดูรายละเอียด</a>
    </div>
    <div class="product-card">
      <img 
        src="https://cdi.co.th/wp-content/uploads/2023/04/6-ColorSeason-768x768.jpg"
        alt="สีซีเมนต์เคลือบแกร่ง Color Seasons"
      >
      <h2>สีซีเมนต์เคลือบแกร่ง Color Seasons</h2>
      <p>ผงสำเร็จรูป ผสมแร่สีชนิดเหล็ก Iron Oxide พร้อมใช้งานทั้งงานพื้นและผนัง สีเคลือบแกร่งชั้นดีเหมาะกับหลายสภาพงานตกแต่งก่อสร้าง ทนทานต่อการใช้งานในทุกสภาพอากาศ</p>
      <a href="product/Product010.php" class="card-btn">ดูรายละเอียด</a>
    </div>
    <div class="product-card">
      <img 
        src="https://cdi.co.th/wp-content/uploads/2023/10/S__10838039-768x768.jpg"
        alt="ตะแกรงลวดตะข่าย"
      >
      <h2>ตะแกรงลวดตะข่าย</h2>
      <p>ลวดตะข่ายช่างหลากชนิด ผลิตจากลวดชุบสังกะสี แสตนเลส และลวดอาบพีวีซี ใช้สำหรับงานก่อสร้างที่ต้องการความยืดหยุ่นคงทนโปร่งตาและ ระบายอากาศได้ดี มีทั้งแบบสั่งผลิตตามขนาดที่ต้องการและสำเร็จรูป</p>
      <a href="product/Product011.php" class="card-btn">ดูรายละเอียด</a>
    </div>
    
    <div class="product-card">
      <img 
        src="https://cdi.co.th/wp-content/uploads/2023/10/3-768x768.png"
        alt="ยางกันกระแทก ในสนามเด็กเล่น"
      >
      <h2>ยางกันกระแทก ในสนามเด็กเล่น</h2>
      <p>
        ยางกันกระแทกเป็นวัสดุที่มีความสำคัญในการสร้างสรรค์สนามเด็กเล่นที่ปลอดภัยและน่าสนใจเพื่อช่วยป้องกันการได้รับบาดเจ็บซึ่งอาจเกิดขึ้นในกรณีที่เด็กๆ เล่นกันอย่างไม่ระมัดระวัง ด้วยคุณสมบัติที่มีความยืดหยุ่นและสามารถช่วยลดแรงกระแทกได้ดี
      </p>
      <a href="product/Product013.php" class="card-btn">ดูรายละเอียด</a>
    </div>
  </section>
</body>
</html>
<?php include "footer.php"; ?>