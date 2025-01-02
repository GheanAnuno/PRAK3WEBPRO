<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil input berat emas dari form
    $beratEmas = floatval($_POST['berat']);
    $cashback = 0;

    // Menentukan cashback berdasarkan berat emas
    if ($beratEmas < 0.5) {
        $cashback = 100000;
    } elseif ($beratEmas >= 0.5 && $beratEmas <= 1) {
        $cashback = 150000;
    } elseif ($beratEmas > 1 && $beratEmas <= 5) {
        $cashback = 200000;
    } elseif ($beratEmas > 5) {
        $cashback = 250000;
    }

    // Menampilkan hasil
    echo "<h3>Hasil:</h3>";
    echo "Berat emas: " . $beratEmas . " gram<br>";
    echo "Cashback yang Anda dapatkan: Rp. " . number_format($cashback, 0, ',', '.') . ",-";
} else {
    // Jika file ini diakses langsung tanpa submit form
    echo "Akses tidak valid. Silakan gunakan form untuk menghitung cashback.";
}
?>