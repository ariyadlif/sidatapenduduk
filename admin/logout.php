<?php

// mengaktifkan session
session_start();

// untuk menghapus semua session
session_destroy();


header("location:../index.php?pesan=logout");

?>
