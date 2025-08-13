<?php
require_once 'config.php';
$page_title = "BEM FST UNSAM - Badan Eksekutif Mahasiswa Fakultas Sains dan Teknologi";
$current_page = "home";
?>

<?php include 'includes/header.php'; ?>

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

    <?php include 'includes/about.php'; ?>
    
    <?php include 'includes/vision-mission.php'; ?>
    
    <?php include 'includes/news.php'; ?>
    
    <?php include 'includes/programs.php'; ?>
    
    <?php include 'includes/profile.php'; ?>
</main>

<?php include 'includes/footer.php'; ?>