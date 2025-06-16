
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'BEM FST UNSAM'; ?></title>
    <meta name="description" content="Badan Eksekutif Mahasiswa Fakultas Sains dan Teknologi Universitas Samudra">
    <link rel="icon" href="/lovable-uploads/d028b579-4752-4659-9666-b21d69bd8fcc.png" type="image/png">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="nav">
            <div class="nav-container">
                <div class="nav-logo">
                    <img src="/lovable-uploads/d028b579-4752-4659-9666-b21d69bd8fcc.png" alt="BEM FST UNSAM Logo" class="logo-img">
                    <div class="logo-text">
                        <h1>BEM FST</h1>
                        <p>UNSAM</p>
                    </div>
                </div>
                <ul class="nav-menu">
                    <li><a href="index.php#home" class="nav-link <?php echo ($current_page == 'home') ? 'active' : ''; ?>">Beranda</a></li>
                    <li><a href="index.php#news" class="nav-link <?php echo ($current_page == 'news') ? 'active' : ''; ?>">Berita</a></li>
                    <li><a href="index.php#programs" class="nav-link <?php echo ($current_page == 'programs') ? 'active' : ''; ?>">Program Kerja</a></li>
                    <li><a href="index.php#profile" class="nav-link <?php echo ($current_page == 'profile') ? 'active' : ''; ?>">Profil</a></li>
                </ul>
                <button class="nav-toggle" id="nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </nav>
    </header>
