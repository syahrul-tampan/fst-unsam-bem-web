
<?php
// Konfigurasi website
define('SITE_NAME', 'BEM FST UNSAM');
define('SITE_DESCRIPTION', 'Badan Eksekutif Mahasiswa Fakultas Sains dan Teknologi Universitas Samudra');
define('SITE_URL', 'https://bemfstunsam.ac.id'); // Ganti dengan URL sebenarnya

// Konfigurasi database (untuk implementasi masa depan)
define('DB_HOST', 'localhost');
define('DB_NAME', 'bem_fst_unsam');
define('DB_USER', 'username');
define('DB_PASS', 'password');

// Timezone
date_default_timezone_set('Asia/Jakarta');

// Fungsi helper
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function format_date($date, $format = 'd F Y') {
    $months = [
        'January' => 'Januari', 'February' => 'Februari', 'March' => 'Maret',
        'April' => 'April', 'May' => 'Mei', 'June' => 'Juni',
        'July' => 'Juli', 'August' => 'Agustus', 'September' => 'September',
        'October' => 'Oktober', 'November' => 'November', 'December' => 'Desember'
    ];
    
    $formatted = date($format, strtotime($date));
    return str_replace(array_keys($months), array_values($months), $formatted);
}
?>
