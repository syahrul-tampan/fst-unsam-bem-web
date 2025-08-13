
<?php
$page_title = "BEM FST UNSAM - Badan Eksekutif Mahasiswa Fakultas Sains dan Teknologi";
$current_page = "home";
include 'includes/header.php';
?>

    <!-- Main Content -->
    <main>
        <!-- Home Section -->
        <section id="home" class="hero">
            <div class="hero-container">
                <div class="hero-content">
                    <h1 class="hero-title">Badan Eksekutif Mahasiswa</h1>
                    <h2 class="hero-subtitle">Fakultas Sains dan Teknologi</h2>
                    <p class="hero-description">Universitas Samudra</p>
                    <div class="hero-buttons">
                        <a href="#news" class="btn btn-primary">Lihat Berita</a>
                        <a href="#programs" class="btn btn-secondary">Program Kerja</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="about">
            <div class="container">
                <div class="about-content">
                    <div class="about-text">
                        <h2>Tentang BEM FST UNSAM</h2>
                        <p>Badan Eksekutif Mahasiswa (BEM) adalah lembaga eksekutif tertinggi di lingkungan universitas maupun fakultas. BEM-FT Unsam berkedudukan di Fakultas Teknik Universitas Samudra dan terbentuknya pada tanggal 05 juni 1992 kemudian berubah nama menjadi BEM FST-UNSAM pada tanggal 27 Januari 2025 dan berkedudukan di Fakultas Sains dan Teknologi Universitas Samudra.</p>
                        <p>Terjadinya perubahan nama setelah 32 tahun berdiri dikarenakan adanya perubahan nama Fakultas, dari Fakultas Teknik menjadi Fakultas Sains dan Teknologi. BEM FST memiliki jumlah pengurus sebanyak 20 orang.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Vision Mission -->
        <?php include 'includes/vision-mission.php'; ?>

        <!-- News Section -->
        <?php include 'includes/news.php'; ?>

        <!-- Programs Section -->
        <?php include 'includes/programs.php'; ?>

        <!-- Profile Section -->
        <?php include 'includes/profile.php'; ?>
    </main>

<?php include 'includes/footer.php'; ?>
