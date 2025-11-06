<?php
include 'koneksi.php';
$sql = "SELECT * FROM tb_pesan ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<div class='msg'>";
    echo "<div class='isi'>".htmlspecialchars($row['isi_pesan'])."</div>";
    echo "<div class='meta'><span>ID: ".$row['id']."</span><span class='waktu'>".$row['waktu']."</span></div>";
    echo "</div>";
  }
} else {
  echo "<div class='empty'>Belum ada pesan masuk</div>";
}
$conn->close();
?>
