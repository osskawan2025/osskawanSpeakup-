<?php
include 'koneksi.php';
?>
<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Panel Admin — Pesan & Aspirasi OSIS</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<style>
  body{
    margin:0;
    font-family:'Poppins',sans-serif;
    background:#0b1020;
    color:#e6eef8;
    min-height:100vh;
    padding:32px;
  }
  .container{max-width:900px;margin:auto}
  h1{text-align:center;margin-bottom:20px}
  .msg{
    background:rgba(255,255,255,0.05);
    border-radius:12px;
    padding:14px;
    margin-bottom:10px;
    cursor:pointer;
    transition:0.2s;
  }
  .msg:hover{background:rgba(255,255,255,0.08);transform:scale(1.01)}
  .meta{font-size:13px;color:#9aa6b2;margin-top:6px;display:flex;justify-content:space-between}
  .empty{text-align:center;color:#9aa6b2;margin-top:40px}

  /* Popup style */
  .popup{
    position:fixed;
    inset:0;
    background:rgba(0,0,0,0.6);
    display:flex;
    align-items:center;
    justify-content:center;
    z-index:999;
    backdrop-filter:blur(4px);
    animation:fadeIn .25s ease;
  }
  .popup-card{
    background:#fff;
    color:#111;
    padding:32px 24px;
    border-radius:20px;
    max-width:500px;
    width:90%;
    text-align:center;
    box-shadow:0 10px 30px rgba(0,0,0,0.3);
    position:relative;
    animation:zoomIn .25s ease;
  }
  .popup-card h2{margin-bottom:12px;font-size:18px;color:#333}
  .popup-card p{font-size:16px;margin-bottom:10px;white-space:pre-wrap;color:#222}
  .popup-card small{color:#555;font-size:13px}
  .popup-card button.close-btn{
    position:absolute;
    top:8px;
    right:8px;
    background:#ef4444;
    color:#fff;
    padding:6px 10px;
    border:none;
    border-radius:8px;
    cursor:pointer;
  }
  .popup-card button.screenshot-btn{
    background:#3b82f6;
    color:#fff;
    margin-top:16px;
    border:none;
    border-radius:8px;
    padding:8px 14px;
    cursor:pointer;
  }
  .popup-card.clean-mode .close-btn,
  .popup-card.clean-mode .screenshot-btn{display:none}
  @keyframes fadeIn{from{opacity:0}to{opacity:1}}
  @keyframes zoomIn{from{transform:scale(0.95)}to{transform:scale(1)}}
</style>
</head>
<body>
<div class="container">
  <h1>Panel Admin SPEAK UP! by OSIS</h1>
  <div id="pesanContainer">
    <div class="empty">Memuat pesan...</div>
  </div>
</div>

<script>
// --- MUAT PESAN SECARA OTOMATIS DARI tampil_pesan.php ---
async function muatPesan() {
  const res = await fetch('tampil_pesan.php');
  const html = await res.text();
  document.getElementById('pesanContainer').innerHTML = html;
  attachPopupEvent();
}
muatPesan();
setInterval(muatPesan, 2000); // auto-refresh tiap 2 detik

// --- TAMBAHKAN EVENT UNTUK POPUP SETELAH PESAN DIMUAT ---
function attachPopupEvent() {
  document.querySelectorAll('.msg').forEach(card => {
    card.addEventListener('click', () => {
      const teks = card.querySelector('.isi').innerText;
      const waktu = card.querySelector('.waktu').innerText;
      showPopup(teks, waktu);
    });
  });
}

// --- FUNGSI POPUP UNTUK SCREENSHOT MODE ---
function showPopup(teks, waktu) {
  const popup = document.createElement('div');
  popup.className = 'popup';
  popup.innerHTML = `
    <div class="popup-card">
      <button class="close-btn">&times;</button>
      <h2>SPEAK UP! by OSIS</h2>
      <p>${escapeHtml(teks)}</p>
      <small>${escapeHtml(waktu)}</small>
      <button class="screenshot-btn">📸 Screenshot</button>
    </div>`;
  document.body.appendChild(popup);

  const card = popup.querySelector('.popup-card');
  const closeBtn = popup.querySelector('.close-btn');
  const ssBtn = popup.querySelector('.screenshot-btn');

  closeBtn.onclick = () => popup.remove();
  ssBtn.onclick = () => {
    card.classList.add('clean-mode');
    setTimeout(() => alert('Mode screenshot aktif — silakan ambil tangkapan layar sekarang!'), 100);
  };

  popup.addEventListener('click', e => {
    if (e.target === popup) popup.remove();
  });
}

// --- ESCAPE HTML ---
function escapeHtml(s) {
  return String(s).replace(/[&<>"']/g, m => ({
    '&':'&amp;', '<':'&lt;', '>':'&gt;', '"':'&quot;', "'":'&#39;'
  }[m]));
}
</script>
</body>
</html>
