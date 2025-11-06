<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $tb_pesan = $_POST['pesan'];

  $sql = "INSERT INTO tb_pesan (isi_pesan) VALUES ('$tb_pesan')";
  if ($conn->query($sql) === TRUE) {
    $status = "Pesan berhasil dikirim!";
  } else {
    $status = "Error: " . $conn->error;
  }
}

$conn->close();
?>

<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Kirim Pesan & Aspirasi — OSIS</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: #0b1020;
      color: #e6eef8;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      padding: 20px;
    }
    .card {
      max-width: 600px;
      width: 100%;
      background: rgba(255,255,255,0.04);
      border-radius: 16px;
      padding: 24px;
      box-shadow: 0 8px 24px rgba(0,0,0,0.4);
      text-align: center;
    }
    h1 {
      margin-bottom: 16px;
    }
    textarea {
      width: 100%;
      min-height: 140px;
      border-radius: 12px;
      background: transparent;
      border: 1px dashed rgba(255,255,255,0.1);
      color: #fff;
      padding: 12px;
      resize: vertical;
      margin-bottom: 16px;
    }
    button {
      cursor: pointer;
      font-family: inherit;
      font-weight: 600;
      border: none;
      font-size: 16px;
      border-radius: 10px;
      padding: 10px 24px;
      background: linear-gradient(90deg, #ff6a88, #ff9a6a);
      color: #fff;
      transition: 0.2s;
    }
    button:hover {
      transform: scale(1.04);
    }
    .muted {
      color: #9aa6b2;
      font-size: 13px;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="card">
    <h1>SPEAK UP! by OSIS</h1>
    <form action="kirim_pesan.php" method="POST">
    <textarea name="pesan" placeholder="Tulis pesanmu di sini..." required></textarea><br>
    <button type="submit">Kirim</button>
    <div class="muted">“Berbicara, menyuarakan pendapat, serta menyampaikan saran dan pesan dengan bijak.”</div>
    <div class="muted"> <h5>© 2025 OSIS SMKN 1 WANAYASA | Desain oleh Sekbid TIK</div></h5>
  </div>

  <script>
    const STORAGE_KEY = 'osis_pesan_2025_v1';
    const msgEl = document.getElementById('message');
    const sendBtn = document.getElementById('send');

    function load() {
      const raw = localStorage.getItem(STORAGE_KEY);
      try { return raw ? JSON.parse(raw) : []; } catch { return []; }
    }

    function save(list) {
      localStorage.setItem(STORAGE_KEY, JSON.stringify(list));
    }

    function addMessage(text) {
      if (!text || text.trim().length < 3) {
        alert('Pesan terlalu singkat!');
        return;
      }
      const list = load();
      list.push({ text: text.trim(), ts: Date.now() });
      save(list);
      msgEl.value = '';
      
      // Memberi feedback ringan tanpa alert
      sendBtn.textContent = 'Terkirim ✅';
      sendBtn.disabled = true;
      setTimeout(() => {
        sendBtn.textContent = 'Kirim';
        sendBtn.disabled = false;
      }, 2000);
    }

    sendBtn.addEventListener('click', () => {
      addMessage(msgEl.value);
    });
  </script>
</body>
</html>


