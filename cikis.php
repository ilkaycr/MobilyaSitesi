<?php
@session_start();
session_destroy();
echo "<script language='javascript'>window.location.href='anasayfa.php?sayfa=giris'</script>";
?>

