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
    <img src="https://cdi.co.th/wp-content/uploads/2023/04/7-DecorCleaning-Product.jpg" alt="น้ำยาทำความสะอาด">
  </div>
  <div class="product-detail-info">
    <h1>น้ำยาทำความสะอาด</h1>
    <div class="heading-underline"></div>
    <div class="cleaner-list">
      <details>
        <summary>➖ Cement Remover น้ำยาขจัดคราบซีเมนต์</summary>
        <div style="background:#fff; color:#222; padding:18px 20px 18px 20px; border-radius:0 0 4px 4px; margin-bottom:18px; font-size:1rem; line-height:1.7;">
          <b>คุณสมบัติพิเศษ</b><br><br>
          <ul style="margin:0 0 12px 18px; padding:0;">
            <li>น้ำยาขจัดคราบซีเมนต์ พร้อมใช้งาน</li>
            <li>ขจัดคราบปูนซีเมนต์ คราบยาแนว ฝุ่นผง หรือคราบสกปรก ที่เกิดจากการก่อสร้างที่สะสมบนพื้นผิว</li>
            <li>น้ำยาประสิทธิภาพสูง ช่วยขจัดคราบซีเมนต์ที่แห้งสนิทแล้วให้หลุดออกง่าย</li>
            <li>ไม่ทำลายพื้นผิวปูน กระเบื้อง</li>
          </ul>
          <b>เหมาะกับพื้นที่ใดบ้าง</b><br><br>
          ตัวช่วยขจัดปูนซีเมนต์คราบยาแนว ฝุ่นผง คราบสกปรกต่างๆ ที่เกิดจากการก่อสร้างหรือที่อาจเก็บกวาดไม่เรียบร้อยบนพื้นผิวบริเวณต่างๆ อาทิ พื้น – ผนังปูนกระเบื้องและบริเวณอื่นๆที่คราบซีเมนต์แห้งสนิทติดแล้ว<br><br>
          <b>คำแนะนำการใช้งาน</b><br><br>
          <ul style="margin:0 0 0 18px; padding:0;">
            <li>ควรใช้น้ำขจัดคราบปูนซีเมนต์ที่แห้งสนิทดีแล้ว</li>
            <li>สวมถุงมือป้องกันขณะการใช้งาน</li>
            <li>ไม่ควรให้สัมผัสผิวที่ไม่ทนต่อกรด</li>
            <li>ระวังน้ำยากระเด็นเข้าตาและหน้ากากปากขณะใช้งาน</li>
          </ul>
        </div>
      </details>
      <details>
        <summary>➖ White Stain Remover น้ำยาทำความสะอาดคราบขาว</summary>
        <div style="background:#fff; color:#222; padding:18px 20px 18px 20px; border-radius:0 0 4px 4px; margin-bottom:18px; font-size:1rem; line-height:1.7;">
          <b>คุณสมบัติพิเศษ</b><br><br>
          <ul style="margin:0 0 12px 18px; padding:0;">
            <li>น้ำยาทำความสะอาดคราบขาว พร้อมใช้งาน</li>
            <li>ขจัดคราบขาว คราบเกลือปูน</li>
            <li>น้ำยาประสิทธิภาพสูง ขจัดง่าย คราบขาวสะอาดหมดจด</li>
            <li>ไม่ทำลายพื้นผิว กระเบื้อง หรือหินธรรมชาติ</li>
          </ul>
          <b>เหมาะกับพื้นที่ใดบ้าง</b><br><br>
          ตัวช่วยขจัดคราบขาว คราบเกลือ คราบปูน บนพื้นผิวบริเวณต่างๆ อาทิ พื้น ผนังปูน กระเบื้อง และบริเวณอื่นที่มีปัญหาคราบขาวสะสมอยู่<br><br>
          <b>คำแนะนำการใช้งาน</b><br><br>
          <ul style="margin:0 0 0 18px; padding:0;">
            <li>ต้องแน่ใจว่าคราบขาวที่ต้องการขจัด เกิดจากคราบหินปูน คราบเกลือปูนเท่านั้น</li>
            <li>สวมถุงมือป้องกันขณะการใช้งาน</li>
            <li>ไม่ควรให้สัมผัสผิวที่ไม่ทนต่อกรด</li>
            <li>ระวังน้ำยากระเด็นเข้าตาและหน้ากากปากขณะใช้งาน</li>
          </ul>
        </div>
      </details>
      <details>
        <summary>➖ Moss and Mold Remover น้ำยาขจัดตะไคร่น้ำและเชื้อรา</summary>
        <div style="background:#fff; color:#222; padding:18px 20px 18px 20px; border-radius:0 0 4px 4px; margin-bottom:18px; font-size:1rem; line-height:1.7;">
          <b>คุณสมบัติพิเศษ</b><br><br>
          <ul style="margin:0 0 12px 18px; padding:0;">
            <li>น้ำยาขจัดตะไคร่น้ำและเชื้อรา</li>
            <li>ขจัดคราบตะไคร่ สำหรับผิวสีเขียว เชื้อรา คราบดำฝังแน่น</li>
            <li>น้ำยาประสิทธิภาพสูง ขจัด ขัดง่าย ไม่เปลืองแรง</li>
            <li>ขจัดคราบได้โดยไม่ทำให้พื้นผิวเสียหาย ไม่เกิดคราบต่างๆ</li>
            <li>หลังขจัดคราบหลุดหมดจด พื้นผิวแห้งสนิทแล้ว สามารถรีบเทได้ทันที</li>
          </ul>
          <b>เหมาะกับพื้นที่ใดบ้าง</b><br><br>
          ตัวช่วยขจัดคราบตะไคร่ เชื้อรา คราบดำฝังแน่น บนพื้นผิวบริเวณต่างๆ อาทิ พื้น ผนังปูน กระเบื้อง เพดาน โรงจอดรถ ทางเดิน ขอบบ่อ ห้องน้ำ ห้องครัว ผิวหินอ่อน หินแกรนิต หินธรรมชาติ และบริเวณอื่นๆ<br><br>
          <b>คำแนะนำการใช้งาน</b><br><br>
          <ul style="margin:0 0 0 18px; padding:0;">
            <li>ควรขจัดด้วยประสิทธิภาพที่เหมาะสมกับพื้นผิว</li>
            <li>สวมถุงมือป้องกันขณะตลอดการใช้งาน</li>
            <li>หลีกเลี่ยงการสัมผัสผิวหนังโดยตรง</li>
            <li>ระวังน้ำยา ควรสวมแว่นและหน้ากากปากขณะใช้งาน</li>
          </ul>
        </div>
      </details>
      <details >
        <summary>➖ Natural Stone Cleaner น้ำยาทำความสะอาดคราบบนหินอ่อน หินแกรนิต</summary>
        <div style="background:#fff; color:#222; padding:18px 20px 18px 20px; border-radius:0 0 4px 4px; margin-bottom:18px; font-size:1rem; line-height:1.7;">
          <b>คุณสมบัติพิเศษ</b><br><br>
          <ul style="margin:0 0 12px 18px; padding:0;">
            <li>น้ำยาทำความสะอาดหินธรรมชาติ พร้อมใช้งาน</li>
            <li>ขจัดคราบฝังแน่น คราบกาแฟ คราบไขมัน คราบน้ำมัน คราบน้ำอัดลม</li>
          </ul>
          <b>เหมาะกับพื้นที่ใดบ้าง</b><br><br>
          ตัวช่วยขจัดคราบฝังแน่นทั่วไป บนพื้นหินธรรมชาติ ที่ยากต่อการล้างออกด้วยวิธีปกติ เช่น คราบกาแฟ คราบไขมัน คราบน้ำมัน คราบน้ำอัดลม<br><br>
          <b>คำแนะนำการใช้งาน</b><br><br>
          <ul style="margin:0 0 0 18px; padding:0;">
            <li>ควรทดสอบประสิทธิภาพในพื้นที่เล็กๆก่อน</li>
            <li>สวมถุงมือป้องกันขณะตลอดการใช้งาน</li>
            <li>หลีกเลี่ยงการสัมผัสผิวหนังโดยตรง</li>
            <li>ไม่ควรให้สัมผัสผิวที่เกิดคราบต่างๆ</li>
          </ul>
        </div>
      </details>
      <details>
        <summary>➖ Tile Grout Cleaner น้ำยาทำความสะอาดร่องยาแนว</summary>
        <div style="background:#fff; color:#222; padding:18px 20px 18px 20px; border-radius:0 0 4px 4px; margin-bottom:18px; font-size:1rem; line-height:1.7;">
          <b>คุณสมบัติพิเศษ</b><br><br>
          <ul style="margin:0 0 12px 18px; padding:0;">
            <li>น้ำยาทำความสะอาดร่องยาแนว พร้อมใช้งาน</li>
            <li>ขจัดคราบสกปรกสะสม คราบดำ คราบเหลือง คราบฝังแน่นในร่องยาแนว</li>
            <li>น้ำยาประสิทธิภาพสูง คราบหลุดง่าย ไม่เปลืองแรง</li>
            <li>ทำความสะอาดร่องยาแนว โดยไม่ทำลายพื้นผิวกระเบื้อง</li>
          </ul>
          <b>เหมาะกับพื้นที่ใดบ้าง</b><br><br>
          ตัวช่วยขจัดคราบสกปรกในร่องยาแนว ให้ร่องยาแนวกลับมาขาวสะอาดอีกครั้ง โดยไม่ทำลายพื้นผิวกระเบื้อง ใช้ได้ทั้งบริเวณห้องน้ำ ห้องครัว ห้องนั่งเล่น ห้องซักล้าง<br><br>
          <b>คำแนะนำการใช้งาน</b><br><br>
          <ul style="margin:0 0 0 18px; padding:0;">
            <li>ควรฉีดน้ำยาลงในร่อง 1 ครั้ง ต่อกระเบื้อง 3-4 แผ่น</li>
            <li>สวมถุงมือป้องกันตลอดการใช้งาน</li>
            <li>ไม่ควรให้สัมผัสพื้นผิวอื่น</li>
          </ul>
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
</script>