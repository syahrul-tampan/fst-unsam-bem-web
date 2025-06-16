
<?php
// Data berita - dalam implementasi nyata, ini bisa diambil dari database
$news_data = [
    [
        'date' => '8 Juni 2025',
        'title' => 'Donasi Korban Kebakaran di Langsa Kota',
        'description' => 'BEM FST UNSAM melakukan aksi kepedulian sosial dengan memberikan bantuan kepada korban kebakaran di Jl. Panglima Polem Gampong Jawa Belakang Lapas, Langsa Kota.',
        'image' => '/lovable-uploads/0c5f95bc-2a44-4147-a4c6-3d81036cf005.png',
        'category' => 'Donasi',
        'tag' => 'Sosial'
    ],
    [
        'date' => '5 Juni 2025',
        'title' => 'Informasi Open Rekrutmen Sanggar Seni',
        'description' => 'BEM FST UNSAM membuka kesempatan bergabung dengan Sanggar Seni untuk mengembangkan kreativitas dan bakat seni mahasiswa FST. Daftar sekarang!',
        'image' => '/lovable-uploads/8220a561-a41b-45fb-8416-9b0fa9830c6c.png',
        'category' => 'Rekrutmen',
        'tag' => 'Organisasi'
    ]
];
?>

<!-- News Section -->
<section id="news" class="news">
    <div class="container">
        <h2 class="section-title">Berita & Informasi</h2>
        <div class="news-grid">
            <?php foreach ($news_data as $news): ?>
            <article class="news-card">
                <div class="news-image">
                    <img src="<?php echo $news['image']; ?>" alt="<?php echo htmlspecialchars($news['title']); ?>">
                </div>
                <div class="news-content">
                    <span class="news-date"><?php echo $news['date']; ?></span>
                    <h3><?php echo htmlspecialchars($news['title']); ?></h3>
                    <p><?php echo htmlspecialchars($news['description']); ?></p>
                    <div class="news-meta">
                        <span class="news-category"><?php echo $news['category']; ?></span>
                        <span class="news-tag"><?php echo $news['tag']; ?></span>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
