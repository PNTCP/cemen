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
      <img src="https://cdi.co.th/wp-content/uploads/2023/10/epoxy-01-768x768.png" alt="สีอุตสาหกรรม" style="max-width:340px; width:100%; height:auto; display:block; margin:0 auto;">
      <div class="product-supimages" style="display:flex; justify-content:center; margin-top: 18px;">
        <img 
          src="https://cdi.co.th/wp-content/uploads/2023/10/exterior-e1684890367171-q6wv88leyk37un1dstpwt6t4o51oepbt51tt4mesxs-286x300.png" 
          alt="สีอุตสาหกรรม ตัวอย่าง 1"
          style="cursor:pointer; margin-right:8px; max-width:70px; border-radius:8px;"
          onclick="enlargeSupImage(this)"
        >
        <img 
          src="https://cdi.co.th/wp-content/uploads/2023/10/PS224-300x300.png" 
          alt="สีอุตสาหกรรม ตัวอย่าง 2"
          style="cursor:pointer; margin-right:8px; max-width:70px; border-radius:8px;"
          onclick="enlargeSupImage(this)"
        >
        <img 
          src="https://cdi.co.th/wp-content/uploads/2023/10/Screenshot-2023-10-13-164553-300x300.png" 
          alt="สีอุตสาหกรรม ตัวอย่าง 3"
          style="cursor:pointer; max-width:70px; border-radius:8px;"
          onclick="enlargeSupImage(this)"
        >
      </div>
    </div>
  </div>
  <div class="product-detail-info">
    <h1>สีอุตสาหกรรม สีทาอาคาร</h1>
    <div class="heading-underline"></div>
    <div class="cleaner-list">
      <details>
        <summary>➕ สีอุตสาหกรรม</summary>
        <div style="background:#fff; color:#222; padding:18px 20px; border-radius:0 0 4px 4px; margin-bottom:18px; font-size:1rem; line-height:1.7;">
          <ul style="margin-left: 18px;">
            <li><b>DURAMEL / BEKACURE / LAC-PID / POLYPLAS / ALCOS / EPOCURE</b></li>
          </ul>
          <b>ผลิตภัณฑ์สำหรับโลหะ:</b> อลูมิเนียม ทองแดง สังกะสี เหล็ก และสแตนเลส ฯลฯ | <b>ประเภทยอดนิยม:</b> ชิ้นส่วนรถยนต์ ตู้สินค้า เครื่องจักร และขอบล้ออลูมิเนียม<br><br>
          <b>ผลิตภัณฑ์สำหรับพลาสติก:</b> วัสดุ ABS, PS, PP, PVC, คาร์บอนไฟเบอร์, HIPE | <b>ประเภทยอดนิยม:</b> ชิ้นส่วนอะไหล่รถยนต์ ชิ้นส่วนอุปกรณ์คอมพิวเตอร์ อุปกรณ์ไฟฟ้าภายในบ้าน หมวกกันน็อค<br><br>
          <b>PYROSHIELD 224 INSTUMESCENT PAINT</b><br>
          โครงสร้างเหล็กโดยทั่วไปจะสูญเสียคุณสมบัติความแข็งแรงในการรับแรงเมื่อเกิดเพลิงไหม้ สีไฟร์ชิลด์จะทำหน้าที่ปกป้องโครงสร้างเหล็กในกรณีที่เปลวเพลิงสัมผัสสีไฟร์ชิลด์จะขยายตัวเพื่อรับเปลวไฟไม่ให้ลุกลามสัมผัสกับโครงสร้างเหล็กโดยตรง สีไฟร์ชิลด์ประกอบด้วยอะคริลิค โพลิเมอร์สูตรน้ำและสารเติมแต่งชนิดพิเศษ เมื่อสัมผัสเปลวไฟจะขยายตัวเป็นโฟมสีขาวลักษณะเป็นฉนวนกันไฟเพื่อเพิ่มระยะเวลาทนไฟให้กับโครงสร้างเหล็ก ซึ่งเหมาะจะใช้งานในโรงกลั่นน้ำมัน โรงงานอุตสาหกรรม โรงเรียน คอนโดมิเนียม โชว์รูมขนาด ร้านอาหาร คลังสินค้า และอาคารทั่วไป ตลอดจนงานอื่นที่ต้องการป้องกันการลุกลามของเปลวไฟ เช่น ท่อไฟเบอร์ Fiber board ฝาผนังอิฐกันไฟได้เช่นกัน
        </div>
      </details>
      <details>
        <summary>➕ สีรองพื้นกันสนิม</summary>
        <div style="background:#fff; color:#222; padding:18px 20px; border-radius:0 0 4px 4px; margin-bottom:18px; font-size:1rem; line-height:1.7;">
          <ul style="margin-left: 18px;">
            <li><b>ZINC RICH PRIMER :</b> สีรองพื้นอีพ็อกซี่คุณภาพสูง ประกอบด้วยผงโลหะสังกะสีคุณภาพสูงและสารสังกะสีคาร์บอเนต ซึ่งมีคุณสมบัติในการป้องกันการกัดกร่อนและรอยขีดข่วนชั้นเยี่ยม เหมาะอย่างยิ่งสำหรับการเคลือบพื้นผิวที่มีการเสียดทานหนักมากโดยไม่จำเป็นต้องใช้การเคลือบซ้ำอีกครั้ง จึงถูกนำมาใช้กับอาคารขนาดใหญ่หลายประเภทอาทิ โรงงานอุตสาหกรรม โรงงานอาหารเคมี โรงแยกน้ำมันเชื้อเพลิง โรงกลั่นน้ำมัน โรงผลิตกระแสไฟฟ้า โรงงานกำจัดขยะ หรือแม้แต่โครงสร้างที่ติดกับทุกสภาพแวดล้อม</li>
            <li><b>RED OXIDE PRIMER :</b> สีรองพื้นกันสนิมชนิดเรดออกไซด์ เป็นสีอุตสาหกรรมระดับมืออาชีพ ที่มีคุณสมบัติปกป้องการยึดเกาะและยับยั้งการเปิดสนิม และยังช่วยป้องกันการกัดกร่อน เหมาะสำหรับงานพื้นผิวเหล็กทั้งภายในและภายนอกอาคาร</li>
          </ul>
        </div>
      </details>
      <details>
        <summary>➕ สีน้ำ ARCUS</summary>
        <div style="background:#fff; color:#222; padding:18px 20px; border-radius:0 0 4px 4px; margin-bottom:18px; font-size:1rem; line-height:1.7;">
          <ul style="margin-left: 18px;">
            <li><b>สีน้ำ ARCUS สำหรับภายนอกและภายใน</b><br>
            เป็น สีน้ำอะคริลิคคุณภาพพิเศษ ใช้งานได้ทั้งภายนอกและภายใน เชื้อทาได้หลากหลายพื้นผิว ทนทานต่อการใช้งาน ทนต่อสภาพอากาศ ไม่ลอกล่อน ไม่สะสมความชื้นและประหยัดพลังงาน ช่วยปกป้องผนังบ้านและอาคารให้สวยงามเหมือนของใหม่เสมอ</li>
            <li><b>สีน้ำ ARCUS สำหรับภายนอกเฉพาะภายใน</b><br>
            เป็น สีน้ำอะคริลิคคุณภาพพิเศษ สำหรับภายนอกและภายใน เชื้อทาได้ง่ายทาความสะอาดได้ง่ายทนต่อมลภาวะอุตสาหกรรม ไม่ลอกล่อน ช่วยให้สีสดสวยทนทานต่อแสงแดด ประสิทธิภาพการเคลือบและป้องกันการเกิดเชื้อราต่างๆได้อย่างดีเยี่ยม ทำให้สีไม่ซีดจางได้ในสภาพอากาศร้อนชื้นตลอดทั้งปี</li>
            <li><b>สีน้ำ ARCUS สำหรับทาฝาผนัง</b><br>
            เหมาะสำหรับงานภายใน โดยเน้นเฉดสีสันที่พิเศษต่อสอดแสงและท่อนบนท่อนล่าง แถมป้องกันเชื้อราต่างๆได้ดีเยี่ยม สามารถใช้ได้กับพื้นผิวปูน ผนังอิฐ กระเบื้อง หรืองานผนังเบาอื่น เป็นต้น</li>
            <li><b>สีน้ำ ARCUS รองพื้นปูนเก่าภายใน (สูตรน้ำ)</b><br>
            รองพื้นปูนเก่าภายใน ผลิตจากอะคริลิคเรซิ่นชนิดพิเศษ มีประสิทธิภาพสูงสุดช่วยปกป้องผนังบ้านสีสดสวยทนทานต่อมลภาวะอุตสาหกรรม ไม่ลอกล่อน ช่วยให้สีสดสวยทนทานต่อแสงแดด ประสิทธิภาพการเคลือบและป้องกันการเกิดเชื้อราต่างๆได้อย่างดีเยี่ยม ทำให้สีไม่ซีดจางได้ในสภาพอากาศร้อนชื้นตลอดทั้งปี</li>
            <li><b>สีน้ำ ARCUS รองพื้นปูนใหม่ภายใน (สูตรน้ำ)</b><br>
            รองพื้นปูนใหม่ภายใน ผลิตจากอะคริลิคเรซิ่นชนิดพิเศษ มีประสิทธิภาพสูงสุดช่วยปกป้องผนังบ้านสีสดสวยทนทานต่อมลภาวะอุตสาหกรรม ไม่ลอกล่อน ช่วยให้สีสดสวยทนทานต่อแสงแดด ประสิทธิภาพการเคลือบและป้องกันการเกิดเชื้อราต่างๆได้อย่างดีเยี่ยม ทำให้สีไม่ซีดจางได้ในสภาพอากาศร้อนชื้นตลอดทั้งปี</li>
          </ul>
        </div>
      </details>
      <details>
        <summary>➕ POLYUREA 2K</summary>
        <div style="background:#fff; color:#222; padding:18px 20px; border-radius:0 0 4px 4px; margin-bottom:18px; font-size:1rem; line-height:1.7;">
          <ul style="margin-left: 18px;">
            <li><b>GLEAR P.P.F, 8008 :</b> เป็นระบบสีชนิดที่ดีที่สุด เป็นการผสมของอีพ็อกซี่ชนิด 2K ผสมกับผงสังกะสี Zinc Phosphate การยึดเกาะเป็นเลิศ กันน้ำได้ 100% ทนร้อน ทนชื้น ทนร้อน ทนสารเคมีต่างๆได้ดีเยี่ยม เหมาะสำหรับงานรองพื้นเหล็กและงานโครงสร้างอาคารขนาดกลาง เป็นชั้นรองพื้นสีหลักและสีทับหน้า กันซึมกันสนิมอย่างสมบูรณ์แบบ</li>
            <li><b>GLEAR P.P.F. 4004 / GLEAR P.P.F.7007 (Anti Stp):</b> เป็นชนิดอีป็อกซี่ 2K ที่ดีที่สุด เหมาะสำหรับพื้นผิวเหล็ก 2K ให้การยึดเกาะที่ยอดเยี่ยม อ้างอิง P.E. 3930 S.P. หรือพื้นผิว Phenolic Polyurea 2K หรือ EPOXY 2K สี 7134 S.P. เชื่อว่าต้องใช้งานได้ดีเยี่ยม</li>
          </ul>
          <b>POLYURETHANE 2K & ZINC PHOSPHATE</b><br>
          อุตสาหกรรมสีชนิด 2K ระบบ 2 IN 1 เป็นสีรองพื้นและสีทับในตัว กันสนิมได้ดีเยี่ยม ทนทานต่อการใช้งานได้เป็นเลิศ เหมาะสำหรับอุตสาหกรรมที่ต้องการการปกป้องพื้นผิวเหล็กแบบ 3K เหมาะกับงานอาคารขนาดใหญ่
        </div>
      </details>
    </div>
    <a href="https://line.me/ti/p/eAmTWa8mkc" class="order-btn">สนใจสั่งซื้อสินค้า</a>
  </div>
</div>
<div style="height: 48px;"></div>
<?php include "../footer.php"; ?>

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
  bigImg.src = img.src.replace('-300x300', '').replace('-286x300', '').replace('-768x768', '');
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