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
    <img src="https://cdi.co.th/wp-content/uploads/2023/04/3-PU-Screed.jpg" alt="พื้นคอนกรีตขัดเงา คริสตัลฟลอร์">
  </div>
  <div class="product-detail-info">
    <h1>ผลิตภัณฑ์งานพื้น โพลียูรีเทน</h1>
    <div class="heading-underline"></div>
    <div class="feature-block">คุณสมบัติ</div>
    <div class="feature-content">
      พื้นโพลียูรีเทน เป็นสารเคมีที่ถูกออกแบบมาเฉพาะสำหรับพื้นโรงงานอุตสาหกรรม ทนต่อสารเคมี อาทิ กรดอินทรีย์ กรดอนินทรีย์ กรดเกลือและด่างประเภทต่าง ๆ สามารถทนแรงกระแทกการขีดข่วน ได้ดีเยี่ยม สามารถใช้งาน ในบริเวณที่มีน้ำไหลผ่าน พื้นที่เปียก และทนอุณหภูมิ -40 ถึง 120 องศา เป็นวัสดุเคลือบผิวที่มีความแข็งแรง และทนทานเป็นพิเศษ อีกทั้งยังทนแรงกระแทกได้ดี ป้องกันการเพาะเชื้อโรค และอุณหภูมิที่เปลี่ยนแปลง ตลอดจนห้องเย็นต่างๆได้ดี มีหลายรูปแบบสำหรับการเลือกใช้งานตามความเหมาะสม
    </div>
    <details class="accordion">
      <summary>➕ ใช้สำหรับ</summary>
      <div class="accordion-content">
        พื้นห้องเย็น พื้นโรงงานอาหาร พื้นโรงงานเครื่องดื่ม พื้นโรงงานผลิตเหล้า เบียร์ ไวน์ พื้นโรงงานผลิตนมและไอศกรีม พื้นโรงอาหารแช่แข็ง พื้นโรงงานผลิตเครื่องสำอาง พื้นคลังสินค้า พื้นโรงงานผลิตนำ้ผลไม้ โรงงานผลิตสารเคมี อุตสาหกรรม และโกดังเก็บสินค้า
      </div>
    </details>
   <a href="https://line.me/ti/p/eAmTWa8mkc" class="order-btn">สนใจสั่งซื้อสินค้า</a>
  </div>
</div>

<div class="product-supimages" style="justify-content:center;">
  <img 
    src="https://cdi.co.th/wp-content/uploads/2023/06/color-pu-1024x254.jpg" 
    alt="PU Color Chart"
    style="width: 100%; max-width: 500px; height: auto; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); background: #fff; cursor: pointer;"
    onclick="enlargeSupImage(this)"
  >
</div>
<script>
function enlargeSupImage(img) {
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

  const bigImg = document.createElement('img');
  bigImg.src = img.src;
  bigImg.alt = img.alt;
  bigImg.style.maxWidth = '90vw';
  bigImg.style.maxHeight = '90vh';
  bigImg.style.borderRadius = '12px';
  bigImg.style.boxShadow = '0 8px 32px rgba(0,0,0,0.25)';

  overlay.appendChild(bigImg);
  overlay.addEventListener('click', function() {
    document.body.removeChild(overlay);
  });

  document.body.appendChild(overlay);
}
</script>
<div style="height: 48px;"></div>
<?php include "../footer.php"; ?>