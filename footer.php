<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>หน้าหลัก</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@900&display=swap" rel="stylesheet">
  <style>
.footer-main {
  background: #232323;
  color: #fff;
  padding: 56px 0 36px 0;
  font-family: 'Prompt', 'Kanit', sans-serif;
}
.footer-container {
  display: flex;
  justify-content: space-between;
  gap: 48px;
  flex-wrap: wrap;
}
.footer-col {
  flex: 1 1 320px;
  min-width: 260px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}
.footer-logo {
  width: 260px;
  margin-bottom: 18px;
  background: #fff;
  border-radius: 8px;
  box-shadow: 0 4px 16px rgba(0,0,0,0.10);
  padding: 12px;
}
.footer-company {
  font-size: 1.08rem;
  font-weight: 600;
  margin-bottom: 10px;
}
.footer-address {
  font-size: 1.08rem;
  line-height: 1.7;
  margin-bottom: 0;
}
.footer-title {
  font-size: 1.18rem;
  font-weight: 700;
  margin-bottom: 18px;
}
.footer-menu {
  list-style: none;
  padding: 0;
  margin: 0;
}
.footer-menu li {
  margin-bottom: 14px;
}
.footer-menu a {
  color: #fff;
  text-decoration: none;
  font-size: 1.08rem;
  font-weight: 500;
  transition: color 0.18s;
}
.footer-menu a:hover {
  color: #0d6efd;
}
.footer-contact-list {
  list-style: none;
  padding: 0;
  margin: 0;
}
.footer-contact-list li {
  margin-bottom: 14px;
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 1.08rem;
}
.footer-contact-list svg {
  width: 22px;
  height: 22px;
  fill: #fff;
  flex-shrink: 0;
}

}
@media (max-width: 900px) {
  .footer-container {
    flex-direction: column;
    gap: 32px;
    align-items: center;
  }
  .footer-col {
    align-items: center;
    text-align: center;
  }
  
}
</style>
</head>
<body>
  <footer class="footer-main">
  <div class="footer-container">
    <!-- Logo & Address -->
    <div class="footer-col">
      <img class="footer-logo" src="https://cdi.co.th/wp-content/uploads/2020/03/S__6258772-removebg-preview.png" alt="CDI Logo">
      <div class="footer-company">บริษัท คอนกรีต เดคคอร์ อินโนเวชั่น จำกัด</div>
      <div class="footer-address">
        24/40 หมู่ 6 ต.หนองปลาไหล อ.บางละมุง<br>
        จ.ชลบุรี 20150
      </div>
    </div>
    <!-- Menu -->
    <div class="footer-col">
      <div class="footer-title">Menu</div>
      <ul class="footer-menu">
        <li><a href="index.php">หน้าหลัก</a></li>
        <li><a href="aboutme.php">เกี่ยวกับเรา</a></li>
        <li><a href="index1.php">บริการของเรา</a></li>
        <li><a href="product.php">ผลิตภัณฑ์ของเรา</a></li>
        
        <li><a href="Contact.php">ติดต่อเรา</a></li>
      </ul>
    </div>
    <!-- Contact -->
    <div class="footer-col">
      <div class="footer-title">Contact</div>
      <ul class="footer-contact-list">
        <li>
          <svg viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 011 1V20a1 1 0 01-1 1C10.07 21 3 13.93 3 5a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.2 2.46.57 3.58a1 1 0 01-.24 1.01l-2.2 2.2z"/></svg>
          Tel : 096-893-5544
        </li>
        
        <li>
          <svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
          E-mail : noom.vorapong99@gmail.com
        </li>
        <li>
          <a href="https://line.me/ti/p/eAmTWa8mkc" target="_blank" style="display:flex;align-items:center;gap:10px;color:inherit;text-decoration:none;">
            <svg viewBox="0 0 24 24"><path d="M21.5 12c0-5.24-4.26-9.5-9.5-9.5S2.5 6.76 2.5 12c0 4.84 3.66 8.84 8.36 9.44.61.08.84-.26.84-.58 0-.29-.01-1.05-.02-2.06-3.4.74-4.12-1.64-4.12-1.64-.56-1.41-1.36-1.79-1.36-1.79-1.11-.76.08-.75.08-.75 1.23.09 1.88 1.26 1.88 1.26 1.09 1.87 2.86 1.33 3.56 1.02.11-.79.43-1.33.78-1.64-2.71-.31-5.56-1.36-5.56-6.06 0-1.34.47-2.44 1.24-3.3-.12-.31-.54-1.56.12-3.25 0 0 1.02-.33 3.34 1.26a11.6 11.6 0 013.04-.41c1.03.01 2.07.14 3.04.41 2.32-1.59 3.34-1.26 3.34-1.26.66 1.69.24 2.94.12 3.25.77.86 1.24 1.96 1.24 3.3 0 4.71-2.86 5.75-5.58 6.06.44.38.83 1.13.83 2.28 0 1.65-.02 2.98-.02 3.39 0 .32.22.67.85.56C18.34 20.84 22 16.84 22 12z"/></svg>
            Line : Dr.VorapongNoom
          </a>
        </li>
        <li>
          <svg viewBox="0 0 24 24"><path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 18H5V8h14v13zm0-15H5V5h14v1z"/></svg>
          เวลาทำการ : จันทร์ - ศุกร์ 8.00-17.00 น.
        </li>
      </ul>
    </div>
    
    
  </div>
</footer>
</body>
</html>
