<?php 
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];
$komentar = $_POST['tanggal'];

echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt", "a+");
fputs($fp, "$nama|$alamat|$email|$status|$tanggal\n");
fclose($fp);

header("Location: notif.php");
?>
