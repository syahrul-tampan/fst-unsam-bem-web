
<?php
// Data struktur kepengurusan - dalam implementasi nyata, ini bisa diambil dari database
$leadership_data = [
    [
        'name' => 'Rico Yolanda',
        'position' => 'Ketua Umum BEM FST',
        'photo' => '/lovable-uploads/177ada81-39ab-4f74-979d-f543e28ac329.png'
    ],
    [
        'name' => 'Adriya Egi Widana',
        'position' => 'Wakil Ketua BEM FST',
        'photo' => '/lovable-uploads/7fbc3907-0b95-487a-928a-23a34e30a9ac.png'
    ],
    [
        'name' => 'David Ricardo Purba',
        'position' => 'Sekretaris Umum BEM FST',
        'photo' => '/lovable-uploads/9159d10f-db22-4c63-9214-0d4c5f7e33ad.png'
    ],
    [
        'name' => 'Ibbnuagil Prabowo',
        'position' => 'Bendahara Umum BEM FST',
        'photo' => '/lovable-uploads/f961191f-efab-4296-8b27-e025f5e19f28.png'
    ],
    [
        'name' => 'Ari Setia Lubis',
        'position' => 'Ketua Divisi Humas',
        'photo' => '/lovable-uploads/5d29da6c-ab75-47cd-be65-23a87b033536.png'
    ]
];

$contact_data = [
    ['icon' => 'fab fa-instagram', 'text' => '@Bemfstunsam'],
    ['icon' => 'fas fa-envelope', 'text' => 'bemteknikunsam.aceh@gmail.com'],
    ['icon' => 'fab fa-tiktok', 'text' => '@Bemfstunsam'],
    ['icon' => 'fab fa-youtube', 'text' => 'BEM FAKULTAS SAINS DAN TEKNOLOGI'],
    ['icon' => 'fab fa-linkedin', 'text' => 'BEM FST UNSAM'],
    ['icon' => 'fas fa-map-marker-alt', 'text' => 'Lokasi Kampus', 'link' => 'https://maps.google.com/?cid=16456346123908801610&entry=gps']
];
?>

<!-- Profile Section -->
<section id="profile" class="profile">
    <div class="container">
        <h2 class="section-title">Profil Organisasi</h2>
        
        <!-- Struktur Kepengurusan -->
        <div class="leadership-structure">
            <h3 class="leadership-title">Struktur Kepengurusan Inti</h3>
            <div class="leadership-grid">
                <?php foreach ($leadership_data as $leader): ?>
                <div class="leadership-card">
                    <div class="leadership-photo">
                        <img src="<?php echo $leader['photo']; ?>" alt="<?php echo htmlspecialchars($leader['name'] . ' - ' . $leader['position']); ?>">
                    </div>
                    <div class="leadership-info">
                        <h4><?php echo htmlspecialchars($leader['name']); ?></h4>
                        <p><?php echo htmlspecialchars($leader['position']); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        
        <div class="profile-content">
            <div class="contact-info">
                <h3>Hubungi Kami</h3>
                <div class="contact-grid">
                    <?php foreach ($contact_data as $contact): ?>
                    <div class="contact-item">
                        <i class="<?php echo $contact['icon']; ?>"></i>
                        <?php if (isset($contact['link'])): ?>
                            <a href="<?php echo $contact['link']; ?>" target="_blank"><?php echo $contact['text']; ?></a>
                        <?php else: ?>
                            <span><?php echo $contact['text']; ?></span>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
