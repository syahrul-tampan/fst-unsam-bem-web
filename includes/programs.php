
<?php
// Data program kerja - dalam implementasi nyata, ini bisa diambil dari database
$programs_data = [
    [
        'title' => 'Ramadhan Kareem / Buka Bersama',
        'description' => 'Program keagamaan dalam rangka menyambut dan memperingati bulan suci Ramadhan dengan kegiatan buka puasa bersama sivitas akademika FST.',
        'icon' => 'fas fa-moon',
        'bidang' => 'Agama',
        'waktu' => '26 Maret 2025',
        'status' => 'planned',
        'status_text' => 'Direncanakan'
    ],
    [
        'title' => 'Fun Sport',
        'description' => 'Kegiatan olahraga rekreatif untuk mempererat hubungan antar mahasiswa FST serta meningkatkan kesehatan jasmani melalui berbagai cabang olahraga.',
        'icon' => 'fas fa-futbol',
        'bidang' => 'Minba',
        'waktu' => '04-05 Mei 2025',
        'status' => 'planned',
        'status_text' => 'Direncanakan'
    ],
    [
        'title' => 'BEM FST Peduli',
        'description' => 'Program kepedulian sosial berkelanjutan yang meliputi bantuan untuk masyarakat kurang mampu, korban bencana alam, dan berbagai kegiatan sosial lainnya.',
        'icon' => 'fas fa-heart',
        'bidang' => 'Humas',
        'waktu' => '22 Mei 2025',
        'status' => 'planned',
        'status_text' => 'Direncanakan'
    ],
    [
        'title' => 'Website BEM FST',
        'description' => 'Pengembangan dan pemeliharaan website resmi BEM FST sebagai media informasi dan komunikasi digital yang profesional.',
        'icon' => 'fas fa-globe',
        'bidang' => 'Ristek',
        'waktu' => 'Juni 2025',
        'status' => 'active',
        'status_text' => 'Sedang Berlangsung'
    ],
    [
        'title' => 'Mengelola Sosial Media BEM FST',
        'description' => 'Program pengelolaan media sosial BEM FST secara profesional dan konsisten untuk menyebarkan informasi dan membangun engagement.',
        'icon' => 'fas fa-hashtag',
        'bidang' => 'Kominfo',
        'waktu' => 'Kondisional',
        'status' => 'active',
        'status_text' => 'Sedang Berlangsung'
    ]
];
?>

<!-- Programs Section -->
<section id="programs" class="programs">
    <div class="container">
        <h2 class="section-title">Program Kerja</h2>
        <div class="programs-grid">
            <?php foreach ($programs_data as $program): ?>
            <div class="program-card">
                <div class="program-icon">
                    <i class="<?php echo $program['icon']; ?>"></i>
                </div>
                <h3><?php echo htmlspecialchars($program['title']); ?></h3>
                <p><?php echo htmlspecialchars($program['description']); ?></p>
                <div class="program-meta">
                    <span class="program-bidang">Bidang: <?php echo $program['bidang']; ?></span>
                    <span class="program-waktu"><?php echo $program['waktu']; ?></span>
                </div>
                <div class="program-status">
                    <span class="status-badge <?php echo $program['status']; ?>"><?php echo $program['status_text']; ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
