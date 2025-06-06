<?php include "../premenu.php"; ?>

<style>
.product-detail-container {
  display: flex;
  flex-wrap: wrap;
  max-width: 1200px;
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
  display: flex;
  align-items: center;
  justify-content: center;
}
.product-main-img img {
  width: 100%;
  max-width: 340px;
  height: auto;
  object-fit: contain;
}
.product-detail-info {
  flex: 1 1 420px;
  min-width: 320px;
  display: flex;
  flex-direction: column;
  align-items: center;
}
.product-detail-info h1 {
  font-size: 2rem;
  font-family: 'Prompt', 'Kanit', sans-serif;
  font-weight: 700;
  margin-bottom: 12px;
  text-align: center;
}
.heading-underline {
  width: 120px;
  height: 2.5px;
  background: #1976d2;
  margin-bottom: 24px;
}
.cleaner-list {
  width: 100%;
  max-width: 600px;
  margin-bottom: 24px;
}
.cleaner-list details {
  margin-bottom: 0;
}
.cleaner-list summary {
  background: #1976d2;
  color: #fff;
  padding: 16px 24px;
  border-bottom: 1px solid #fff;
  font-weight: 600;
  font-size: 1.08rem;
  cursor: pointer;
  outline: none;
  transition: background 0.2s;
  border-radius: 0;
  list-style: none;
}
.cleaner-list details[open] summary {
  background: #1253a2;
}
.order-btn {
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
  box-shadow: 0 4px 16px rgba(25,118,210,0.08);
}
.order-btn:hover {
  background: #1253a2;
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
  .cleaner-list {
    max-width: 100%;
  }
}
</style>

<div class="product-detail-container">
  <div class="product-main-img">
    <div style="width:100%;">
      <img src="https://cdi.co.th/wp-content/uploads/2023/04/8-GraniteSpray.jpg" alt="น้ำยาทำความสะอาด" style="max-width:340px; width:100%; height:auto; display:block; margin:0 auto;">
      <div class="product-supimages" style="display:flex; justify-content:center; margin-top: 18px;">
        <img 
          src="https://cdi.co.th/wp-content/uploads/2023/04/Granite-1-300x300.jpg" 
          alt="Granite ตัวอย่าง 1"
          style="cursor:pointer; margin-right:8px; max-width:70px; border-radius:8px;"
          onclick="enlargeSupImage(this)"
        >
        <img 
          src="https://cdi.co.th/wp-content/uploads/2023/04/Granite-3-300x300.jpg" 
          alt="Granite ตัวอย่าง 2"
          style="cursor:pointer; margin-right:8px; max-width:70px; border-radius:8px;"
          onclick="enlargeSupImage(this)"
        >
        <img 
          src="https://cdi.co.th/wp-content/uploads/2023/04/Granite-4-300x300.jpg" 
          alt="Granite ตัวอย่าง 3"
          style="cursor:pointer; margin-right:8px; max-width:70px; border-radius:8px;"
          onclick="enlargeSupImage(this)"
        >
        <img 
          src="https://cdi.co.th/wp-content/uploads/2023/04/Granite-4-300x300.jpg" 
          alt="Granite ตัวอย่าง 4"
          style="cursor:pointer; max-width:70px; border-radius:8px;"
          onclick="enlargeSupImage(this)"
        >
      </div>
    </div>
  </div>
  <div class="product-detail-info">
    <h1>น้ำยาทำความสะอาด</h1>
    <div class="heading-underline"></div>
    <div class="cleaner-list">
      <details>
        <summary>➖ คุณสมบัติ</summary>
        <div style="background:#fff; color:#222; padding:18px 20px 18px 20px; border-radius:0 0 4px 4px; margin-bottom:18px; font-size:1rem; line-height:1.7;">
          <ul style="margin:0 0 12px 18px; padding:0;">
            <li>เม็ดสีผสมสำเร็จ แค่พ่นก็ได้ลาย</li>
            <li>หนึ่งในนวัตกรรมที่น่าตื่นเต้นที่สุดสำหรับการสร้างผิวแกรนิตนวัตกรรมใหม่ที่ช่วยให้คุณประหยัดเงินอย่างมากมายมหาศาล เมื่อเทียบกับการติดตั้งหินแกรนิตจริง ประยุกต์ใช้ได้หลากหลาย ลดน้ำหนักโครงสร้าง ประหยัดทั้งเงินทั้งเวลา แต่ยังคงให้ความสวยงาม ที่เป็นเอกลักษณ์เสมือนหินแกรนิตจริง</li>
          </ul>
        </div>
      </details>
      <details>
        <summary>➖ สี Granite Spray</summary>
        <div style="background:#fff; color:#222; padding:18px 20px 18px 20px; border-radius:0 0 4px 4px; margin-bottom:18px; font-size:1rem; line-height:1.7; text-align:center;">
          <img src="https://cdi.co.th/wp-content/uploads/2023/05/granite.jpg" alt="สี Granite Spray" style="max-width:200px; height:auto; border-radius:8px; box-shadow:0 2px 12px rgba(0,0,0,0.08);">
        </div>
      </details>
      
    </div>
    <a href="https://line.me/ti/p/eAmTWa8mkc" class="order-btn">สนใจสั่งซื้อสินค้า</a>
  </div>
</div>
<div style="height: 48px;"></div>
<?php include "../footer.php"; ?>

<script>
document.querySelectorAll('.cleaner-list details').forEach((targetDetail) => {
  targetDetail.addEventListener('toggle', function() {
    if (targetDetail.open) {
      document.querySelectorAll('.cleaner-list details').forEach((detail) => {
        if (detail !== targetDetail) detail.open = false;
      });
    }
  });
});

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
  bigImg.src = img.src.replace('-300x300', '');
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