<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>หน้าหลัก</title>
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
/* Top Info Bar */
.topbar {
  background: #0d6efd;
  color: #fff;
  font-size: 1.05rem;
  padding: 0.5rem 0;
}
.topbar-content {
  max-width: 1600px;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 32px;
}
.topbar-left, .topbar-right {
  display: flex;
  align-items: center;
  gap: 8px;
}
.topbar svg {
  width: 20px;
  height: 20px;
  fill: #fff;
  vertical-align: middle;
}
.topbar-right svg {
  width: 22px;
  height: 22px;
}
/* Header & Nav */
.header-bar {
  width: 100%;
  background: #fff;
  box-shadow: 0 2px 8px rgba(0,0,0,0.04);
  padding: 0;
  position: relative;
  z-index: 10;
}

.header-content {
  display: flex;
  align-items: center;
  flex-direction: row;
  justify-content: flex-start;
  gap: 32px;
  width: 100%;
  min-width: 0;
  padding: 40px 120px 24px 120px; /* Increased padding for more space from edges */
  box-sizing: border-box;
}

.logo-area {
  flex: 0 0 auto;
}

.logo-area img {
  height: 80px;
  max-width: 140px;
  border-radius: 8px;
  box-shadow: 0 4px 16px rgba(0,0,0,0.08);
  background: #fff;
  display: block;
}

.main-nav {
  display: flex;
  gap: 36px;
  margin-left: auto;
}

.main-nav a {
  color: #222;
  text-decoration: none;
  font-size: 1.13rem;
  font-weight: 600;
  position: relative;
  padding: 4px 0;
  transition: color 0.2s;
}

.main-nav a:hover, .main-nav a.active {
  color: #0d6efd;
}

.main-nav a::after {
  content: '';
  display: block;
  width: 0;
  height: 2px;
  background: #0d6efd;
  transition: width 0.2s;
  position: absolute;
  left: 0;
  bottom: -2px;
}
.main-nav a:hover::after, .main-nav a.active::after {
  width: 100%;
}

/* Hamburger Icon */
.hamburger {
  display: flex;
  flex-direction: column;
  justify-content: center;
  width: 36px;
  height: 36px;
  background: none;
  border: none;
  cursor: pointer;
  z-index: 101;
}
.hamburger span {
  display: block;
  height: 4px;
  width: 100%;
  background: #222;
  margin: 5px 0;
  border-radius: 2px;
  transition: 0.3s;
}

/* Overlay Menu */
.menu-overlay {
  display: flex;
  position: fixed;
  z-index: 1000;
  inset: 0;
  background: #fff;
  opacity: 0;
  pointer-events: none;
  transition: opacity 0.35s cubic-bezier(.4,0,.2,1), transform 0.35s cubic-bezier(.4,0,.2,1);
  flex-direction: column;
  align-items: center;
  justify-content: center;
  transform: scale(0.98);
}
.menu-overlay.open {
  opacity: 1;
  pointer-events: auto;
  transform: scale(1);
}
.menu-overlay nav {
  display: flex;
  flex-direction: column;
  gap: 32px;
  align-items: center;
}
.menu-overlay a {
  color: #222;
  text-decoration: none;
  font-size: 2rem;
  font-weight: 600;
  transition: color 0.2s;
}
.menu-overlay a:hover {
  color: #0d6efd;
}
.menu-overlay .close-btn {
  position: absolute;
  top: 32px;
  right: 32px;
  font-size: 2.5rem;
  color: #222;
  background: none;
  border: none;
  cursor: pointer;
  z-index: 1001;
  line-height: 1;
}

/* Mobile Logo Bar */
.mobile-logo-bar {
  display: none;
  width: 100%;
  background: #fff;
  text-align: left;
  padding: 18px 0 10px 24px;
}
.mobile-logo-bar img {
  height: 56px;
  max-width: 120px;
  border-radius: 8px;
  box-shadow: 0 4px 16px rgba(0,0,0,0.08);
  background: #fff;
}
.below-nav-logo {
  width: 100%;
  background: #fff;
  text-align: left;
  padding: 18px 32px 10px 32px;
  box-sizing: border-box;
}
.below-nav-logo img {
  height: 56px;
  max-width: 120px;
  border-radius: 8px;
  box-shadow: 0 4px 16px rgba(0,0,0,0.08);
  background: #fff;
}
.below-nav-row {
  width: 100%;
  background: #fff;
  display: flex;
  align-items: center;
  justify-content: space-between; /* Ensures logo left, hamburger right */
  padding: 18px 64px 10px 64px;
  box-sizing: border-box;
}
.below-nav-logo-img {
  height: 56px;
  max-width: 120px;
  border-radius: 8px;
  box-shadow: 0 4px 16px rgba(0,0,0,0.08);
  background: #fff;
  display: block;
}
.mobile-header-bar {
  display: none;
  width: 100%;
  background: #fff;
  align-items: center;
  justify-content: space-between;
  padding: 14px 20px 10px 20px;
  box-sizing: border-box;
  position: relative;
}
.mobile-logo {
  height: 48px;
  max-width: 100px;
  border-radius: 8px;
  box-shadow: 0 4px 16px rgba(0,0,0,0.08);
  background: #fff;
  display: block;
}
@media (max-width: 1200px) {
  .header-content {
    padding: 32px 56px 16px 56px;
  }
}
@media (max-width: 900px) {
  .mobile-header-bar {
    display: flex;
  }
  .header-bar {
    display: none !important;
  }
  .header-content {
    flex-direction: column;
    align-items: flex-start;
    gap: 12px;
    padding: 16px;
  }
  .logo-area img {
    height: 56px;
    max-width: 100px;
  }
  .main-nav {
    margin-left: 0;
    gap: 20px;
    flex-wrap: wrap;
  }
}
@media (min-width: 901px) {
  .mobile-header-bar {
    display: none !important;
  }
}
  </style>

<!-- Top Info Bar -->
<div class="topbar">
  <div class="topbar-content">
    <div class="topbar-left">
      <a href="https://www.google.com/maps/place/คอนกรีต+เดคคอร์+ชลบุรี/@12.990668,100.9417363,19.2z/data=!4m6!3m5!1s0x3102bfa0a97908e7:0xa5ce4e2d115cc600!8m2!3d12.9908446!4d100.9416762!16s%2Fg%2F11stsps69w?coh=245189&entry=tts&g_ep=EgoyMDI1MDUxNS4wIPu8ASoJLDEwMjExNDU1SAFQAw%3D%3D&skid=5c7f3fd1-4e0a-4de7-ad1a-9e34215315f5" target="_blank" style="color:inherit; text-decoration:none; display:flex; align-items:center; gap:8px;">
        <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
        <span>24/40 หมู่ 6 ต.หนองปลาไหล อำเภอบางละมุง ชลบุรี 20150</span>
      </a>
    </div>
    <div class="topbar-right">
      <svg viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 011 1V20a1 1 0 01-1 1C10.07 21 3 13.93 3 5a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.2 2.46.57 3.58a1 1 0 01-.24 1.01l-2.2 2.2z"/></svg>
      <span>096-893-5544</span>
    </div>
  </div>
</div>

<!-- Mobile Header Bar -->
<div class="mobile-header-bar">
  <img class="mobile-logo" src="https://cdi.co.th/wp-content/uploads/2020/03/S__6258772-removebg-preview.png" alt="CDI Logo">
  <button class="hamburger" id="hamburger-btn" aria-label="Open menu">
    <span></span>
    <span></span>
    <span></span>
  </button>
</div>

<!-- Logo, header bar, and hamburger have been removed -->
<div class="header-bar">
  <div class="header-content">
    <div class="logo-area">
      <img src="https://cdi.co.th/wp-content/uploads/2020/03/S__6258772-removebg-preview.png" alt="CDI Logo">
    </div>
    <nav class="main-nav">
      <a href="/cemen1/index.php">หน้าหลัก</a>
      <a href="/cemen1/aboutme.php">เกี่ยวกับเรา</a>
      <a href="/cemen1/index1.php">บริการของเรา</a>
      <a href="/cemen1/product.php">ผลิตภัณฑ์ของเรา</a>
      <a href="/cemen1/Contact.php">ติดต่อเรา</a>
    </nav>
  </div>
</div>

<!-- Overlay Menu -->
<div class="menu-overlay" id="menuOverlay">
  <button class="close-btn" id="closeMenuBtn" aria-label="Close menu">&times;</button>
  <nav>
    <a href="/cemen1/index.php">หน้าหลัก</a>
    <a href="/cemen1/aboutme.php">เกี่ยวกับเรา</a>
    <a href="/cemen1/index1.php">บริการของเรา</a>
    <a href="/cemen1/product.php">ผลิตภัณฑ์ของเรา</a>
    <a href="/cemen1/Contact.php">ติดต่อเรา</a>
  </nav>
</div>

<script>
  // JavaScript for menu toggle
  const hamburgerBtn = document.getElementById('hamburger-btn');
  const menuOverlay = document.getElementById('menuOverlay');
  const closeMenuBtn = document.getElementById('closeMenuBtn');

  hamburgerBtn.addEventListener('click', () => {
    menuOverlay.classList.add('open');
  });
  closeMenuBtn.addEventListener('click', () => {
    menuOverlay.classList.remove('open');
  });
  menuOverlay.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => menuOverlay.classList.remove('open'));
  });
</script>
</body>
</html>