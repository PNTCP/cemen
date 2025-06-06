<?php include "../premenu.php"; ?>

<style>
.product-detail-container {
  display: flex;
  flex-wrap: wrap;
  max-width: 1100px;
  margin: 40px auto 0 auto;
  gap: 32px;
  align-items: flex-start;
}
.product-main-img {
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 4px 24px rgba(0,0,0,0.08);
  padding: 32px;
  width: 420px;
  min-width: 320px;
  text-align: center;
}
.product-main-img img {
  width: 100%;
  max-width: 340px;
  height: auto;
  object-fit: contain;
}
.product-detail-info {
  flex: 1 1 340px;
  min-width: 320px;
}
.product-detail-info h1 {
  font-size: 2rem;
  font-family: 'Prompt', 'Kanit', sans-serif;
  font-weight: 700;
  margin-bottom: 12px;
}
.product-detail-info .heading-underline {
  width: 120px;
  height: 2.5px;
  background: #1976d2;
  margin-bottom: 24px;
}
.product-detail-info .feature-block {
  background: #1976d2;
  color: #fff;
  border-radius: 4px 4px 0 0;
  padding: 12px 20px;
  font-weight: 600;
  margin-bottom: 0;
}
.product-detail-info .feature-content {
  background: #f7f7f7;
  color: #222;
  padding: 18px 20px 18px 20px;
  border-radius: 0 0 4px 4px;
  margin-bottom: 18px;
  font-size: 1rem;
  line-height: 1.7;
}
.product-detail-info .accordion {
  margin-bottom: 10px;
}
.product-detail-info .accordion summary {
  background: #1976d2;
  color: #fff;
  padding: 12px 20px;
  border-radius: 4px;
  font-weight: 600;
  cursor: pointer;
  outline: none;
  margin-bottom: 0;
}
.product-detail-info .accordion[open] summary {
  border-radius: 4px 4px 0 0;
}
.product-detail-info .accordion-content {
  background: #f7f7f7;
  color: #222;
  padding: 16px 20px;
  border-radius: 0 0 4px 4px;
  font-size: 1rem;
  line-height: 1.7;
}
.product-detail-info .order-btn {
  display: inline-block;
  background: #1976d2;
  color: #fff;
  font-weight: 600;
  font-size: 1.1rem;
  padding: 12px 36px;
  border-radius: 24px;
  margin-top: 24px;
  text-decoration: none;
  transition: background 0.2s;
  border: none;
  cursor: pointer;
}
.product-detail-info .order-btn:hover {
  background: #1253a2;
}
.product-supimages {
  display: flex;
  gap: 12px;
  margin: 32px auto 0 auto;
  max-width: 900px;
  justify-content: flex-start;
  flex-wrap: wrap;
}
.product-supimages img {
  width: 110px;
  height: 110px;
  object-fit: cover;
  border-radius: 6px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.08);
  background: #fff;
  transition: transform 0.2s;
}
.product-supimages img:hover {
  transform: scale(1.07);
  box-shadow: 0 6px 24px rgba(25,118,210,0.12);
}
@media (max-width: 900px) {
  .product-detail-container {
    flex-direction: column;
    align-items: center;
    gap: 16px;
  }
  .product-main-img {
    width: 100%;
    min-width: 0;
    padding: 16px;
  }
  .product-detail-info {
    width: 100%;
    min-width: 0;
  }
  .product-supimages {
    justify-content: center;
  }
}
</style>

<div class="product-detail-container">
  <div class="product-main-img">
    <img src="https://cdi.co.th/wp-content/uploads/2023/04/1-Lithium-Slicate1510L-1-768x768.jpg" alt="พื้นคอนกรีตขัดเงา คริสตัลฟลอร์">
  </div>
  <div class="product-detail-info">
    <h1>พื้นคอนกรีตขัดเงา คริสตัลฟลอร์</h1>
    <div class="heading-underline"></div>
    <div class="feature-block">คุณสมบัติ</div>
    <div class="feature-content">
      พื้นที่มีความแข็งแรงไม่ก่อให้เกิดฝุ่น ดูสวยงาม สามารถทำได้กับพื้นใหม่หรือพื้นเก่าที่มีการใช้งานมานานแล้ว สามารถแก้ปัญหาของพื้นได้ดี และมีความเงามากกว่า คอนกรีตขัดมันธรรมดา มีผิวที่เรียบมันและไม่ลื่น ไม่หลุดล่อน ทำความสะอาดง่าย อายุการใช้งานยาวนาน
    </div>
    <details class="accordion">
      <summary>➕ ใช้สำหรับ</summary>
      <div class="accordion-content">
        ใช้ในพื้นโรงงาน โกดัง ร้านค้า วัสดุก่อสร้าง ห้างสรรพสินค้า โรงงานอุตสาหกรรมรถยนต์ โชว์รูม ฯลฯ
      </div>
    </details>
    <details class="accordion">
      <summary>➕ ขั้นตอนการใช้งาน</summary>
      <div class="accordion-content">
        1. ขัดปรับสภาพพื้นผิวเก่า ด้วยเครื่องขัด High Speed Grinding เลือกใช้ใบขัดหัวเหล็ก (Metal Bond) เบอร์ 30 (2ฟัน), 50, 100, 150, 200 ตามลำดับการจะเลือกใช้เบอร์ใดเริ่มต้น ขึ้นอยู่กับสภาพผิว ตรวจเช็คสภาพพื้นผิวคอนกรีตเดิมก่อนเริ่มงานทุกครั้ง<br>
        2. ปรับพื้นผิวให้เรียบเนียน และรบรอยจากการขัด โดยเปลี่ยนไปใช้ใบข้าวโพด Resin Bond Diamond เบอร์ 50, 100, 200 ไล่ลำดับ ไม่ควรข้ามลำดับ<br>
        3. ทำความสะอาด กวาด เช็ด ถู ฝุ่นจากการขัดออกจากพื้นผิวให้หมด<br>
        4. หากต้องการแต่งสี สามารถพ่น/ใช้ลูกกลิ้ง/ทา ด้วยสีกรดย้อมคอนกรีต (Ammata) ได้ในขั้นตอนนี้ทิ้งให้แห้ง 12 ช.ม. “ก่อน” การลงน้ำยา Lithium<br>
        5. พ่นน้ำยา Lithium ให้ทั่วพื้นที่ หรือ เทน้ำยาลงบนพื้นแล้วใช้ไม้กวาดยางปาดน้ำยาไปมาให้เรียบเนียนทั่วพื้นผิว ทิ้งให้แห้งประมาณ 2-4 ช.ม.<br>
        6. ขัดเพื่อเพิ่มความเงางามแก่พื้นผิวคอนกรีต โดยเครื่อง High Speed Grinding อีกครั้งด้วยใบขัดข้าวโพด (Resin Bond) เริ่มที่เบอร์ 200, 400, 800, 1500, 3000 ตามลำดับตามความต้องการ
      </div>
    </details>
    <a href="https://line.me/ti/p/eAmTWa8mkc" class="order-btn">สนใจสั่งซื้อสินค้า</a>
  </div>
</div>

<div class="product-supimages">
  <img src="https://cdi.co.th/wp-content/uploads/2018/12/PolishingFloor-3-300x300.jpg" alt="พื้นขัดเงาตัวอย่าง 1">
  <img src="https://cdi.co.th/wp-content/uploads/2018/12/PolishingFloor-5-300x300.jpg" alt="พื้นขัดเงาตัวอย่าง 2">
  <img src="https://cdi.co.th/wp-content/uploads/2018/12/PolishingFloor-5-300x300.jpg" alt="พื้นขัดเงาตัวอย่าง 3">
  <img src="https://cdi.co.th/wp-content/uploads/2018/12/PolishingFloor-6-300x300.jpg" alt="พื้นขัดเงาตัวอย่าง 4">
  <img src="https://cdi.co.th/wp-content/uploads/2018/12/PolishingFloor-7-300x300.jpg" alt="พื้นขัดเงาตัวอย่าง 5">
  <img src="https://cdi.co.th/wp-content/uploads/2018/12/PolishingFloor-1-300x300.jpg" alt="พื้นขัดเงาตัวอย่าง 6">
  <img src="https://cdi.co.th/wp-content/uploads/2018/12/PolishingFloor-2-300x300.jpg" alt="พื้นขัดเงาตัวอย่าง 7">
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const supImages = document.querySelectorAll('.product-supimages img');
  supImages.forEach(img => {
    img.addEventListener('click', function() {
      // Create overlay
      const overlay = document.createElement('div');
      overlay.style.position = 'fixed';
      overlay.style.top = 0;
      overlay.style.left = 0;
      overlay.style.width = '100vw';
      overlay.style.height = '100vh';
      overlay.style.background = 'rgba(0,0,0,0.8)';
      overlay.style.display = 'flex';
      overlay.style.alignItems = 'center';
      overlay.style.justifyContent = 'center';
      overlay.style.zIndex = 9999;
      overlay.style.cursor = 'zoom-out';

      // Create enlarged image
      const bigImg = document.createElement('img');
      bigImg.src = img.src.replace('-300x300', ''); // Try to get bigger image if possible
      bigImg.alt = img.alt;
      bigImg.style.maxWidth = '90vw';
      bigImg.style.maxHeight = '90vh';
      bigImg.style.borderRadius = '12px';
      bigImg.style.boxShadow = '0 8px 32px rgba(0,0,0,0.25)';

      overlay.appendChild(bigImg);

      // Remove overlay on click
      overlay.addEventListener('click', function() {
        document.body.removeChild(overlay);
      });

      document.body.appendChild(overlay);
    });
  });
});
</script>
<div style="height: 48px;"></div>
<?php include "../footer.php"; ?>