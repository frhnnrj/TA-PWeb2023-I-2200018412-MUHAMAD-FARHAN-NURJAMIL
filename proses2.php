<?php
// Memeriksa apakah ada data yang dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan nilai yang dikirim melalui formulir
    $gender = $_POST["gender"];

    // Melakukan pemrosesan atau tindakan berdasarkan pilihan gender
    if ($gender == "male") {
        echo "Anda adalah seorang pria.";
    } elseif ($gender == "female") {
        echo "Anda adalah seorang wanita.";
    } elseif ($gender == "other") {
        echo "Anda memiliki identitas gender lainnya.";
    } else {
        echo "Mohon pilih salah satu opsi gender.";
    }
}
?>
