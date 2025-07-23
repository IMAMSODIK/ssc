<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAGIAN SUDIBYO & CO | Mitra Hukum Terpercaya</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('landing_assets/logo/logo.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('landing_assets/logo/logo.png')}}">

    <link rel="stylesheet" href="{{asset('landing_assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- Header Top -->
    <div class="header-top">
        <div class="container header-top-container">
            <div class="logo">
                <img src="{{asset('landing_assets/logo/logo.png')}}" alt="LawFirm Logo">
                <div class="logo-text">
                    <h3>SIAGIAN SUDIBYO & CO</h3>
                    <p>Lawyer & Law Firm</p>
                </div>
            </div>

            <div class="header-info mobile-hidden">
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="info-content">
                        <h3>Telepon</h3>
                        <p class="clickable-phone" onclick="window.location.href='tel:6281218473429'">+62 812 1847 3429
                        </p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="info-content">
                        <h3>Alamat</h3>
                        <p>Gedung Blok M Square Lantai 6 JI Melawai 5, Jakarta Selatan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Burger Menu Button -->
    <button class="menu-toggle" id="menuToggle">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navigation Menu - Desktop -->
    <nav class="main-nav" id="mainNav">
        <div class="nav-container">
            <ul>
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#service">Services</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="#attonery">Attorneys</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <a href="#" class="contact-btn" onclick="window.location.href='tel:6281218473429'">
                <i class="fas fa-phone-alt"></i>
                Hubungi Sekarang
            </a>
        </div>
    </nav>

    <!-- Sidebar Mobile Menu -->
    <div class="sidebar-menu" id="sidebarMenu">
        <div class="logo" style="margin-bottom: 50px; margin-left: 30px">
            <img src="{{asset('landing_assets/logo/logo.png')}}" alt="LawFirm Logo">
            <div class="logo-text">
                <h3>SIAGIAN SUDIBYO & CO</h3>
                <p>Lawyer & Law Firm</p>
            </div>
        </div>

        <ul style="margin-left: 20px; margin-right: 20px;">
            <li><a href="#home" class="active">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#service">Services</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="#attonery">Attorneys</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>

        <div class="sidebar-contact-info" style="margin-left: 20px; margin-right: 20px;">
            <div class="info-item">
                <div class="info-icon">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <div class="info-content">
                    <h3>Telepon</h3>
                    <p class="clickable-phone" onclick="window.location.href='tel:6281218473429'">+62 812 1847 3429</p>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="info-content">
                    <h3>Jam Kerja</h3>
                    <p>Senin-Jumat: 08.00-17.00</p>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="info-content">
                    <h3>Alamat</h3>
                    <p>Gedung Blok M Square Lantai 6 JI Melawai 5, Jakarta Selatan</p>
                </div>
            </div>
        </div>

        <a href="#" class="sidebar-contact-btn" style="margin-left: 20px; margin-right: 20px;"
            onclick="window.location.href='tel:6281218473429'">
            <i class="fas fa-phone-alt"></i> Hubungi Sekarang
        </a>

        <!-- Mobile Footer Section -->
        <div class="sidebar-footer mobile-only"
            style="padding: 1.5rem 20px; background-color: rgba(0,0,0,0.2); margin-top: auto; border-top: 1px solid rgba(255,255,255,0.1);">
            <!-- Layanan Kami Section -->
            <div class="footer-services" style="margin-bottom: 1.5rem;">
                <h4
                    style="color: white; margin-bottom: 0.8rem; font-size: 1rem; position: relative; padding-bottom: 5px;">
                    Layanan Kami
                    <span
                        style="position: absolute; bottom: 0; left: 0; width: 40px; height: 2px; background-color: var(--secondary);"></span>
                </h4>
                <ul style="list-style: none; padding: 0; margin: 0; columns: 2; column-gap: 1rem;">
                    <li style="margin-bottom: 0.6rem;">
                        <a href="#"
                            style="color: rgba(255,255,255,0.8); text-decoration: none; font-size: 0.85rem; display: flex; align-items: center;">
                            <i class="fas fa-chevron-right"
                                style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.7rem;"></i>
                            Hukum Perdata
                        </a>
                    </li>
                    <li style="margin-bottom: 0.6rem;">
                        <a href="#"
                            style="color: rgba(255,255,255,0.8); text-decoration: none; font-size: 0.85rem; display: flex; align-items: center;">
                            <i class="fas fa-chevron-right"
                                style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.7rem;"></i>
                            Hukum Pidana
                        </a>
                    </li>
                    <li style="margin-bottom: 0.6rem;">
                        <a href="#"
                            style="color: rgba(255,255,255,0.8); text-decoration: none; font-size: 0.85rem; display: flex; align-items: center;">
                            <i class="fas fa-chevron-right"
                                style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.7rem;"></i>
                            Hukum Keluarga
                        </a>
                    </li>
                    <li style="margin-bottom: 0.6rem;">
                        <a href="#"
                            style="color: rgba(255,255,255,0.8); text-decoration: none; font-size: 0.85rem; display: flex; align-items: center;">
                            <i class="fas fa-chevron-right"
                                style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.7rem;"></i>
                            Hukum Pertanahan
                        </a>
                    </li>
                    <li style="margin-bottom: 0.6rem;">
                        <a href="#"
                            style="color: rgba(255,255,255,0.8); text-decoration: none; font-size: 0.85rem; display: flex; align-items: center;">
                            <i class="fas fa-chevron-right"
                                style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.7rem;"></i>
                            Hukum Perbankan
                        </a>
                    </li>
                    <li style="margin-bottom: 0.6rem;">
                        <a href="#"
                            style="color: rgba(255,255,255,0.8); text-decoration: none; font-size: 0.85rem; display: flex; align-items: center;">
                            <i class="fas fa-chevron-right"
                                style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.7rem;"></i>
                            Hukum Ketenagakerjaan
                        </a>
                    </li>
                    <li style="margin-bottom: 0.6rem;">
                        <a href="#"
                            style="color: rgba(255,255,255,0.8); text-decoration: none; font-size: 0.85rem; display: flex; align-items: center;">
                            <i class="fas fa-chevron-right"
                                style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.7rem;"></i>
                            Litigasi
                        </a>
                    </li>
                    <li style="margin-bottom: 0.6rem;">
                        <a href="#"
                            style="color: rgba(255,255,255,0.8); text-decoration: none; font-size: 0.85rem; display: flex; align-items: center;">
                            <i class="fas fa-chevron-right"
                                style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.7rem;"></i>
                            Hukum Perusahaan
                        </a>
                    </li>
                    <li style="margin-bottom: 0.6rem;">
                        <a href="#"
                            style="color: rgba(255,255,255,0.8); text-decoration: none; font-size: 0.85rem; display: flex; align-items: center;">
                            <i class="fas fa-chevron-right"
                                style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.7rem;"></i>
                            Hukum Keimigrasian
                        </a>
                    </li>
                    <li style="margin-bottom: 0.6rem;">
                        <a href="#"
                            style="color: rgba(255,255,255,0.8); text-decoration: none; font-size: 0.85rem; display: flex; align-items: center;">
                            <i class="fas fa-chevron-right"
                                style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.7rem;"></i>
                            Dokumen Perjalanan
                        </a>
                    </li>
                    <li style="margin-bottom: 0.6rem;">
                        <a href="#"
                            style="color: rgba(255,255,255,0.8); text-decoration: none; font-size: 0.85rem; display: flex; align-items: center;">
                            <i class="fas fa-chevron-right"
                                style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.7rem;"></i>
                            Pengurusan KITAS
                        </a>
                    </li>
                    <li style="margin-bottom: 0.6rem;">
                        <a href="#"
                            style="color: rgba(255,255,255,0.8); text-decoration: none; font-size: 0.85rem; display: flex; align-items: center;">
                            <i class="fas fa-chevron-right"
                                style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.7rem;"></i>
                            Tindak Pidana Keimigrasian
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Social Media & Copyright -->
            <div class="footer-bottom" style="
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 1.5rem;
        ">
                <div class="social-links" style="
                display: flex;
                gap: 1rem;
                margin-bottom: 1rem;
            ">
                    <a href="#" style="
                    text-decoration: none;
                    color: white;
                    background-color: rgba(255,255,255,0.1);
                    width: 36px;
                    height: 36px;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    transition: all 0.3s ease;
                ">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" style="
                    text-decoration: none;
                    color: white;
                    background-color: rgba(255,255,255,0.1);
                    width: 36px;
                    height: 36px;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    transition: all 0.3s ease;
                ">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" style="
                    text-decoration: none;
                    color: white;
                    background-color: rgba(255,255,255,0.1);
                    width: 36px;
                    height: 36px;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    transition: all 0.3s ease;
                ">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" style="
                    text-decoration: none;
                    color: white;
                    background-color: rgba(255,255,255,0.1);
                    width: 36px;
                    height: 36px;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    transition: all 0.3s ease;
                ">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>

                <p style="
                color: rgba(255,255,255,0.7);
                font-size: 0.8rem;
                margin-bottom: 0.8rem;
                text-align: center;
            ">
                    &copy; 2025 Siagian Sudibyo & Co. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>

    <!-- Overlay -->
    <div class="overlay" id="overlay"></div>

    <!-- Hero Slider -->
    <div class="hero-slider" id="home">
        <!-- Slide 1 -->
        <div class="slide active" style="background-image: url('{{asset('landing_assets/images/ctr old/image.jpeg')}}');">
            <div class="container">
                <div class="slide-content">
                    <h2>Solusi Hukum Profesional untuk Bisnis Anda</h2>
                    <p>Kami memberikan konsultasi hukum komprehensif untuk melindungi bisnis Anda dari berbagai risiko
                        hukum.</p>
                    <a href="#" class="btn">Konsultasi Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide" style="background-image: url('{{asset('landing_assets/images/ctr old/image2.jpeg')}}');">
            <div class="container">
                <div class="slide-content">
                    <h2>Tim Pengacara Berpengalaman</h2>
                    <p>Dengan lebih dari 15 tahun pengalaman, kami siap mendampingi Anda dalam berbagai masalah hukum.
                    </p>
                    <a href="#" class="btn">Lihat Profil Pengacara</a>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="slide" style="background-image: url('{{asset('landing_assets/images/ctr old/image3.jpeg')}}');">
            <div class="container">
                <div class="slide-content">
                    <h2>Konsultasi Hukum Gratis</h2>
                    <p>Manfaatkan konsultasi hukum pertama gratis dengan pengacara spesialis kami.</p>
                    <a href="#" class="btn">Jadwalkan Konsultasi</a>
                </div>
            </div>
        </div>

        <!-- Slider Navigation Dots -->
        <div class="slider-nav">
            <div class="slider-dot active" data-slide="0"></div>
            <div class="slider-dot" data-slide="1"></div>
            <div class="slider-dot" data-slide="2"></div>
        </div>
    </div>


    <!-- About Us Section -->
    <section class="about-section" id="about" style="padding: 5rem 0; background-color: #f9f9f9;">
        <div class="container">
            <div class="about-container" style="display: flex; flex-wrap: wrap; gap: 3rem; align-items: center;">
                <!-- About Image -->
                <div class="about-image" style="flex: 1; min-width: 300px;">
                    <div style="position: relative;">
                        <img src="{{asset('landing_assets/images/banner/ig1.jpeg')}}" alt="Law Firm Team"
                            style="width: 100%; border-radius: 5px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    </div>
                </div>

                <!-- About Content -->
                <div class="about-content" style="flex: 1; min-width: 300px;">
                    <span style="color: var(--secondary); font-weight: 600; letter-spacing: 1px;">TENTANG KAMI</span>
                    <h2 style="font-size: 2.2rem; margin: 0.5rem 0 1.5rem; color: var(--primary); line-height: 1.3;">
                        Siagian Sudibyo & Co - Firma Hukum Profesional</h2>
                    <p style="margin-bottom: 1.5rem; color: #555;">
                        Kami memahami dengan sangat baik bahwa permasalahan dan
                        ketentuan hukum di Indonesia adalah hal yang cukup kompleks.
                        Sebagai praktisi, kami telah melewati dan menyelesaikan berbagaibentuk permasalahan dan/atau isu
                        dengan tingkat kompleksitas
                        yang berbeda-beda.
                    </p>

                    <p style="margin-bottom: 1.5rem; color: #555;">
                        Dengan pengalaman dan profesionalitas
                        yang kami miliki, kami yakin dan percaya bahwa Siagian Sudibyo &Co Lawfirm akan selalu mampu
                        untuk memberikan penyelesaian
                        atas permasalahan-permasalahan hukum yang sedang dialami
                        oleh Klien kami, yang tentunya merupakan jalan keluar yang
                        profesional, kompeten, berkualitas dan dapat diandalkan.
                    </p>
                </div>
            </div>

            <!-- Vision, Mission, Commitment Cards -->
            <div class="vmc-cards"
                style="display: flex; flex-wrap: wrap; gap: 2rem; margin: 4rem 0; justify-content: center;">
                <!-- Vision Card -->
                <div class="vmc-card" style="
                    flex: 1; 
                    min-width: 250px; 
                    max-width: 350px;
                    padding: 2rem; 
                    border-radius: 8px; 
                    position: relative;
                    overflow: hidden;
                    color: white;
                    height: 400px; /* Fixed height for alignment */
                    display: flex;
                    flex-direction: column;
                    background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
                    background-size: cover;
                    background-position: center;
                    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
                ">
                    <div style="
                        width: 60px; 
                        height: 60px; 
                        background-color: rgba(202, 168, 104, 0.9); 
                        display: flex; 
                        align-items: center; 
                        justify-content: center; 
                        border-radius: 50%; 
                        margin-bottom: 1.5rem; 
                        color: white; 
                        font-size: 1.5rem;
                        position: relative;
                        z-index: 2;
                    ">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3 style="font-size: 1.8rem; margin-bottom: 1rem; position: relative; z-index: 2;">Visi</h3>
                    <p style="line-height: 1.6; position: relative; z-index: 2; margin-bottom: auto;">
                        Menjadi salah satu Firma Hukum terbaik di
                        Indonesia dengan mengedepankan
                        profesionalitas, transparansi, komitmen, dan
                        integritas.
                    </p>
                    <div style="position: relative; z-index: 2; margin-top: 2rem;">
                        <div style="width: 40px; height: 3px; background-color: var(--secondary); margin-bottom: 1rem;">
                        </div>
                    </div>
                </div>

                <!-- Mission Card -->
                <div class="vmc-card" style="
                    flex: 1; 
                    min-width: 250px; 
                    max-width: 350px;
                    padding: 2rem; 
                    border-radius: 8px; 
                    position: relative;
                    overflow: hidden;
                    color: white;
                    height: 400px; /* Same fixed height */
                    display: flex;
                    flex-direction: column;
                    background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1521791055366-0d553872125f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
                    background-size: cover;
                    background-position: center;
                    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
                ">
                    <div style="
                        width: 60px; 
                        height: 60px; 
                        background-color: rgba(202, 168, 104, 0.9); 
                        display: flex; 
                        align-items: center; 
                        justify-content: center; 
                        border-radius: 50%; 
                        margin-bottom: 1.5rem; 
                        color: white; 
                        font-size: 1.5rem;
                        position: relative;
                        z-index: 2;
                    ">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3 style="font-size: 1.8rem; margin-bottom: 1rem; position: relative; z-index: 2;">Misi</h3>
                    <p style="line-height: 1.6; position: relative; z-index: 2; margin-bottom: auto;">
                        Memberikan pelayanan terbaik terhadap
                        kepentingan Klien, baik secara hukum maupun
                        secara bisnis.
                    </p>
                    <div style="position: relative; z-index: 2; margin-top: 2rem;">
                        <div style="width: 40px; height: 3px; background-color: var(--secondary); margin-bottom: 1rem;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section" id="service"
        style="padding: 5rem 0; background: url('{{asset('landing_assets/images/ctr old/landing_01.jpg')}}') no-repeat center center / cover;">
        <div class="container">
            <div class="section-header" style="text-align: center; margin-bottom: 3rem;">
                <span
                    style="color: var(--secondary); font-weight: 600; letter-spacing: 1px; display: block; margin-bottom: 0.5rem;">LAYANAN
                    KAMI</span>
                <h2 style="font-size: 2.2rem; color: var(--primary); margin-bottom: 1rem;">Layanan Hukum Profesional
                </h2>
                <p style="max-width: 700px; margin: 0 auto; color: #555;">
                    Kami menyediakan berbagai layanan hukum komprehensif untuk memenuhi kebutuhan hukum bisnis maupun
                    pribadi Anda.
                </p>
            </div>

            <div class="services-grid"
                style="display: flex; flex-wrap: wrap; justify-content: center; gap: 2rem; margin-top: 3rem;">

                <!-- Service 1 - Hukum Perdata -->
                <div class="service-card"
                    style="border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease; width: 100%; max-width: 350px;">
                    <div class="service-icon" style="padding: 1.5rem; text-align: center;">
                        <i class="fas fa-handshake" style="font-size: 2.5rem; color: black;"></i>
                        <h3 style="font-size: 1.5rem; color: var(--primary); margin-top: 0.5rem;">HUKUM PERDATA</h3>
                    </div>
                    <div class="service-content" style="padding: 1.5rem; padding-top: 0;">
                        <p style="color: #555; margin-bottom: 1.5rem;">
                            Penanganan perkara perdata seperti perjanjian, utang-piutang, ganti rugi, dan sengketa hak
                            milik.
                        </p>
                        <a href="https://wa.me/6281218473429?text=Halo%2C%20saya%20ingin%20berkonsultasi%20mengenai%20layanan%20Hukum%20Perdata."
                            target="_blank" class="service-btn"
                            style="display: inline-block; padding: 0.8rem 1.5rem; background-color: var(--primary); color: white; text-decoration: none; border-radius: 4px; font-weight: 600; transition: all 0.3s ease;">
                            Konsultasi Sekarang
                        </a>
                    </div>
                </div>

                <!-- Service 2 - Hukum Pidana -->
                <div class="service-card"
                    style="border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease; width: 100%; max-width: 350px;">
                    <div class="service-icon" style="padding: 1.5rem; text-align: center;">
                        <i class="fas fa-gavel" style="font-size: 2.5rem; color: black;"></i>
                        <h3 style="font-size: 1.5rem; color: var(--primary); margin-top: 0.5rem;">HUKUM PIDANA</h3>
                    </div>
                    <div class="service-content" style="padding: 1.5rem; padding-top: 0;">
                        <p style="color: #555; margin-bottom: 1.5rem;">
                            Pendampingan hukum untuk kasus pidana mulai penyelidikan sampai dengan pengadilan.
                        </p>
                        <a href="https://wa.me/6281218473429?text=Halo%2C%20saya%20ingin%20berkonsultasi%20mengenai%20layanan%20Hukum%20Pidana."
                            target="_blank" class="service-btn"
                            style="display: inline-block; padding: 0.8rem 1.5rem; background-color: var(--primary); color: white; text-decoration: none; border-radius: 4px; font-weight: 600; transition: all 0.3s ease;">
                            Konsultasi Sekarang
                        </a>
                    </div>
                </div>

                <!-- Service 3 - Hukum Keluarga -->
                <div class="service-card"
                    style="border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease; width: 100%; max-width: 350px;">
                    <div class="service-icon" style="padding: 1.5rem; text-align: center;">
                        <i class="fas fa-home" style="font-size: 2.5rem; color: black;"></i>
                        <h3 style="font-size: 1.5rem; color: var(--primary); margin-top: 0.5rem;">HUKUM KELUARGA</h3>
                    </div>
                    <div class="service-content" style="padding: 1.5rem; padding-top: 0;">
                        <p style="color: #555; margin-bottom: 1.5rem;">
                            Penyelesaian masalah keluarga seperti perceraian, hak asuh anak, waris, dan perwalian.
                        </p>
                        <a href="https://wa.me/6281218473429?text=Halo%2C%20saya%20ingin%20berkonsultasi%20mengenai%20layanan%20Hukum%20Keluarga."
                            target="_blank" class="service-btn"
                            style="display: inline-block; padding: 0.8rem 1.5rem; background-color: var(--primary); color: white; text-decoration: none; border-radius: 4px; font-weight: 600; transition: all 0.3s ease;">
                            Konsultasi Sekarang
                        </a>
                    </div>
                </div>

                <!-- Service 4 - Hukum Pertanahan -->
                <div class="service-card"
                    style="border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease; width: 100%; max-width: 350px;">
                    <div class="service-icon" style="padding: 1.5rem; text-align: center;">
                        <i class="fas fa-landmark" style="font-size: 2.5rem; color: black;"></i>
                        <h3 style="font-size: 1.5rem; color: var(--primary); margin-top: 0.5rem;">HUKUM PERTANAHAN</h3>
                    </div>
                    <div class="service-content" style="padding: 1.5rem; padding-top: 0;">
                        <p style="color: #555; margin-bottom: 1.5rem;">
                            Penyelesaian sengketa tanah, pendaftaran hak milik, sertifikasi, dan masalah agraria.
                        </p>
                        <a href="https://wa.me/6281218473429?text=Halo%2C%20saya%20ingin%20berkonsultasi%20mengenai%20layanan%20Hukum%20Pertanahan."
                            target="_blank" class="service-btn"
                            style="display: inline-block; padding: 0.8rem 1.5rem; background-color: var(--primary); color: white; text-decoration: none; border-radius: 4px; font-weight: 600; transition: all 0.3s ease;">
                            Konsultasi Sekarang
                        </a>
                    </div>
                </div>

                <!-- Service 5 - Hukum Perbankan -->
                <div class="service-card"
                    style="border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease; width: 100%; max-width: 350px;">
                    <div class="service-icon" style="padding: 1.5rem; text-align: center;">
                        <i class="fas fa-piggy-bank" style="font-size: 2.5rem; color: black;"></i>
                        <h3 style="font-size: 1.5rem; color: var(--primary); margin-top: 0.5rem;">HUKUM PERBANKAN</h3>
                    </div>
                    <div class="service-content" style="padding: 1.5rem; padding-top: 0;">
                        <p style="color: #555; margin-bottom: 1.5rem;">
                            Pendampingan hukum terkait perjanjian kredit, pembiayaan, dan sengketa perbankan.
                        </p>
                        <a href="https://wa.me/6281218473429?text=Halo%2C%20saya%20ingin%20berkonsultasi%20mengenai%20layanan%20Hukum%20Perbankan."
                            target="_blank" class="service-btn"
                            style="display: inline-block; padding: 0.8rem 1.5rem; background-color: var(--primary); color: white; text-decoration: none; border-radius: 4px; font-weight: 600; transition: all 0.3s ease;">
                            Konsultasi Sekarang
                        </a>
                    </div>
                </div>

                <!-- Service 6 - Hukum Ketenagakerjaan -->
                <div class="service-card"
                    style="border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease; width: 100%; max-width: 350px;">
                    <div class="service-icon" style="padding: 1.5rem; text-align: center;">
                        <i class="fas fa-briefcase" style="font-size: 2.5rem; color: black;"></i>
                        <h3 style="font-size: 1.5rem; color: var(--primary); margin-top: 0.5rem;">HUKUM KETENAGAKERJAAN
                        </h3>
                    </div>
                    <div class="service-content" style="padding: 1.5rem; padding-top: 0;">
                        <p style="color: #555; margin-bottom: 1.5rem;">
                            Penyelesaian perselisihan hubungan industrial antara pekerja dan pengusaha.
                        </p>
                        <a href="https://wa.me/6281218473429?text=Halo%2C%20saya%20ingin%20berkonsultasi%20mengenai%20layanan%20Hukum%20Ketenagakerjaan."
                            target="_blank" class="service-btn"
                            style="display: inline-block; padding: 0.8rem 1.5rem; background-color: var(--primary); color: white; text-decoration: none; border-radius: 4px; font-weight: 600; transition: all 0.3s ease;">
                            Konsultasi Sekarang
                        </a>
                    </div>
                </div>

                <!-- Service 7 - Litigasi -->
                <div class="service-card"
                    style="border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease; width: 100%; max-width: 350px;">
                    <div class="service-icon" style="padding: 1.5rem; text-align: center;">
                        <i class="fas fa-balance-scale" style="font-size: 2.5rem; color: black;"></i>
                        <h3 style="font-size: 1.5rem; color: var(--primary); margin-top: 0.5rem;">LITIGASI</h3>
                    </div>
                    <div class="service-content" style="padding: 1.5rem; padding-top: 0;">
                        <p style="color: #555; margin-bottom: 1.5rem;">
                            Penyelesaian sengketa melalui proses pengadilan dengan pendampingan advokat berpengalaman.
                        </p>
                        <a href="https://wa.me/6281218473429?text=Halo%2C%20saya%20ingin%20berkonsultasi%20mengenai%20layanan%20Litigasi."
                            target="_blank" class="service-btn"
                            style="display: inline-block; padding: 0.8rem 1.5rem; background-color: var(--primary); color: white; text-decoration: none; border-radius: 4px; font-weight: 600; transition: all 0.3s ease;">
                            Konsultasi Sekarang
                        </a>
                    </div>
                </div>

                <!-- Service 8 - Hukum Perusahaan -->
                <div class="service-card"
                    style="border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease; width: 100%; max-width: 350px;">
                    <div class="service-icon" style="padding: 1.5rem; text-align: center;">
                        <i class="fas fa-building" style="font-size: 2.5rem; color: black;"></i>
                        <h3 style="font-size: 1.5rem; color: var(--primary); margin-top: 0.5rem;">HUKUM PERUSAHAAN</h3>
                    </div>
                    <div class="service-content" style="padding: 1.5rem; padding-top: 0;">
                        <p style="color: #555; margin-bottom: 1.5rem;">
                            Pendampingan hukum untuk perusahaan termasuk kontrak, compliance, dan struktur bisnis.
                        </p>
                        <a href="https://wa.me/6281218473429?text=Halo%2C%20saya%20ingin%20berkonsultasi%20mengenai%20layanan%20Hukum%20Perusahaan."
                            target="_blank" class="service-btn"
                            style="display: inline-block; padding: 0.8rem 1.5rem; background-color: var(--primary); color: white; text-decoration: none; border-radius: 4px; font-weight: 600; transition: all 0.3s ease;">
                            Konsultasi Sekarang
                        </a>
                    </div>
                </div>

                <!-- Service 9 - Hukum Keimigrasian -->
                <div class="service-card"
                    style="border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease; width: 100%; max-width: 350px;">
                    <div class="service-icon" style="padding: 1.5rem; text-align: center;">
                        <i class="fas fa-passport" style="font-size: 2.5rem; color: black;"></i>
                        <h3 style="font-size: 1.5rem; color: var(--primary); margin-top: 0.5rem;">HUKUM KEIMIGRASIAN
                        </h3>
                    </div>
                    <div class="service-content" style="padding: 1.5rem; padding-top: 0;">
                        <p style="color: #555; margin-bottom: 1.5rem;">
                            Konsultasi dan bantuan hukum terkait regulasi keimigrasian, deportasi, dan status tinggal
                            warga asing.
                        </p>
                        <a href="https://wa.me/6281218473429?text=Halo%2C%20saya%20ingin%20berkonsultasi%20mengenai%20layanan%20Hukum%20Keimigrasian."
                            target="_blank" class="service-btn"
                            style="display: inline-block; padding: 0.8rem 1.5rem; background-color: var(--primary); color: white; text-decoration: none; border-radius: 4px; font-weight: 600; transition: all 0.3s ease;">
                            Konsultasi Sekarang
                        </a>
                    </div>
                </div>

                <!-- Service 10 - Dokumen Perjalanan -->
                <div class="service-card"
                    style="border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease; width: 100%; max-width: 350px;">
                    <div class="service-icon" style="padding: 1.5rem; text-align: center;">
                        <i class="fas fa-id-card" style="font-size: 2.5rem; color: black;"></i>
                        <h3 style="font-size: 1.5rem; color: var(--primary); margin-top: 0.5rem;">DOKUMEN PERJALANAN
                        </h3>
                    </div>
                    <div class="service-content" style="padding: 1.5rem; padding-top: 0;">
                        <p style="color: #555; margin-bottom: 1.5rem;">
                            Layanan pengurusan paspor, visa, dan dokumen legalitas perjalanan dalam dan luar negeri.
                        </p>
                        <a href="https://wa.me/6281218473429?text=Halo%2C%20saya%20ingin%20berkonsultasi%20mengenai%20pengurusan%20dokumen%20perjalanan."
                            target="_blank" class="service-btn"
                            style="display: inline-block; padding: 0.8rem 1.5rem; background-color: var(--primary); color: white; text-decoration: none; border-radius: 4px; font-weight: 600; transition: all 0.3s ease;">
                            Konsultasi Sekarang
                        </a>
                    </div>
                </div>

                <!-- Service 11 - Pengurusan KITAS -->
                <div class="service-card"
                    style="border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease; width: 100%; max-width: 350px;">
                    <div class="service-icon" style="padding: 1.5rem; text-align: center;">
                        <i class="fas fa-user-check" style="font-size: 2.5rem; color: black;"></i>
                        <h3 style="font-size: 1.5rem; color: var(--primary); margin-top: 0.5rem;">PENGURUSAN KITAS</h3>
                    </div>
                    <div class="service-content" style="padding: 1.5rem; padding-top: 0;">
                        <p style="color: #555; margin-bottom: 1.5rem;">
                            Pendampingan lengkap dalam proses pengajuan dan perpanjangan Izin Tinggal Terbatas (KITAS).
                        </p>
                        <a href="https://wa.me/6281218473429?text=Halo%2C%20saya%20ingin%20berkonsultasi%20mengenai%20pengurusan%20KITAS."
                            target="_blank" class="service-btn"
                            style="display: inline-block; padding: 0.8rem 1.5rem; background-color: var(--primary); color: white; text-decoration: none; border-radius: 4px; font-weight: 600; transition: all 0.3s ease;">
                            Konsultasi Sekarang
                        </a>
                    </div>
                </div>

                <!-- Service 12 - Tindak Pidana Keimigrasian -->
                <div class="service-card"
                    style="border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease; width: 100%; max-width: 350px;">
                    <div class="service-icon" style="padding: 1.5rem; text-align: center;">
                        <i class="fas fa-user-secret" style="font-size: 2.5rem; color: black;"></i>
                        <h3 style="font-size: 1.5rem; color: var(--primary); margin-top: 0.5rem;">TINDAK PIDANA
                            KEIMIGRASIAN</h3>
                    </div>
                    <div class="service-content" style="padding: 1.5rem; padding-top: 0;">
                        <p style="color: #555; margin-bottom: 1.5rem;">
                            Bantuan hukum terhadap pelanggaran hukum keimigrasian seperti overstay, dokumen palsu, dan
                            penyalahgunaan izin tinggal.
                        </p>
                        <a href="https://wa.me/6281218473429?text=Halo%2C%20saya%20ingin%20berkonsultasi%20mengenai%20tindak%20pidana%20keimigrasian."
                            target="_blank" class="service-btn"
                            style="display: inline-block; padding: 0.8rem 1.5rem; background-color: var(--primary); color: white; text-decoration: none; border-radius: 4px; font-weight: 600; transition: all 0.3s ease;">
                            Konsultasi Sekarang
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-us" style="padding: 5rem 0; background-color: #f9f9f9;">
        <div class="container">
            <div class="section-header" style="text-align: center; margin-bottom: 3rem;">
                <span
                    style="color: var(--secondary); font-weight: 600; letter-spacing: 1px; display: block; margin-bottom: 0.5rem;">KEUNGGULAN
                    KAMI</span>
                <h2 style="font-size: 2.2rem; color: var(--primary); margin-bottom: 1rem;">Mengapa Memilih Kami</h2>
                <p style="max-width: 700px; margin: 0 auto; color: #555;">
                    Kami berbeda dari firma hukum lainnya karena komitmen kami terhadap keunggulan, integritas, dan
                    hasil yang terukur.
                </p>
            </div>

            <div class="reasons-grid"
                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-top: 3rem;">
                <!-- Reason 1 -->
                <div class="reason-card"
                    style="background-color: white; border-radius: 8px; padding: 2rem; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                    <div class="reason-icon"
                        style="width: 70px; height: 70px; background-color: rgba(202, 168, 104, 0.1); display: flex; align-items: center; justify-content: center; border-radius: 50%; margin-bottom: 1.5rem;">
                        <i class="fas fa-award" style="font-size: 2rem; color: var(--secondary);"></i>
                    </div>
                    <h3 style="font-size: 1.3rem; margin-bottom: 1rem; color: var(--primary);">Pengalaman Lebih dari 15
                        Tahun</h3>
                    <p style="color: #555;">
                        Dengan pengalaman luas di berbagai bidang hukum, kami memiliki pengetahuan mendalam untuk
                        menangani kasus-kasus kompleks.
                    </p>
                </div>

                <!-- Reason 2 -->
                <div class="reason-card"
                    style="background-color: white; border-radius: 8px; padding: 2rem; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                    <div class="reason-icon"
                        style="width: 70px; height: 70px; background-color: rgba(202, 168, 104, 0.1); display: flex; align-items: center; justify-content: center; border-radius: 50%; margin-bottom: 1.5rem;">
                        <i class="fas fa-users" style="font-size: 2rem; color: var(--secondary);"></i>
                    </div>
                    <h3 style="font-size: 1.3rem; margin-bottom: 1rem; color: var(--primary);">Tim Multidisiplin</h3>
                    <p style="color: #555;">
                        Tim kami terdiri dari spesialis di berbagai bidang hukum, memastikan Anda mendapatkan nasihat
                        yang paling tepat untuk situasi Anda.
                    </p>
                </div>

                <!-- Reason 3 -->
                <div class="reason-card"
                    style="background-color: white; border-radius: 8px; padding: 2rem; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                    <div class="reason-icon"
                        style="width: 70px; height: 70px; background-color: rgba(202, 168, 104, 0.1); display: flex; align-items: center; justify-content: center; border-radius: 50%; margin-bottom: 1.5rem;">
                        <i class="fas fa-lock" style="font-size: 2rem; color: var(--secondary);"></i>
                    </div>
                    <h3 style="font-size: 1.3rem; margin-bottom: 1rem; color: var(--primary);">Kerahasiaan Terjamin</h3>
                    <p style="color: #555;">
                        Kami menjaga kerahasiaan klien dengan sangat serius. Semua informasi yang Anda berikan
                        dilindungi sepenuhnya.
                    </p>
                </div>

                <!-- Reason 4 -->
                <div class="reason-card"
                    style="background-color: white; border-radius: 8px; padding: 2rem; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                    <div class="reason-icon"
                        style="width: 70px; height: 70px; background-color: rgba(202, 168, 104, 0.1); display: flex; align-items: center; justify-content: center; border-radius: 50%; margin-bottom: 1.5rem;">
                        <i class="fas fa-hand-holding-usd" style="font-size: 2rem; color: var(--secondary);"></i>
                    </div>
                    <h3 style="font-size: 1.3rem; margin-bottom: 1rem; color: var(--primary);">Biaya Transparan</h3>
                    <p style="color: #555;">
                        Tidak ada biaya tersembunyi. Kami memberikan perkiraan biaya di awal dan berkomitmen untuk tetap
                        pada perjanjian.
                    </p>
                </div>

                <!-- Reason 5 -->
                <div class="reason-card"
                    style="background-color: white; border-radius: 8px; padding: 2rem; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                    <div class="reason-icon"
                        style="width: 70px; height: 70px; background-color: rgba(202, 168, 104, 0.1); display: flex; align-items: center; justify-content: center; border-radius: 50%; margin-bottom: 1.5rem;">
                        <i class="fas fa-headset" style="font-size: 2rem; color: var(--secondary);"></i>
                    </div>
                    <h3 style="font-size: 1.3rem; margin-bottom: 1rem; color: var(--primary);">Layanan 24/7</h3>
                    <p style="color: #555;">
                        Tim kami siap membantu kapan saja Anda membutuhkan. Darurat hukum bisa terjadi kapan saja, dan
                        kami ada untuk Anda.
                    </p>
                </div>

                <!-- Reason 6 -->
                <div class="reason-card"
                    style="background-color: white; border-radius: 8px; padding: 2rem; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                    <div class="reason-icon"
                        style="width: 70px; height: 70px; background-color: rgba(202, 168, 104, 0.1); display: flex; align-items: center; justify-content: center; border-radius: 50%; margin-bottom: 1.5rem;">
                        <i class="fas fa-chart-line" style="font-size: 2rem; color: var(--secondary);"></i>
                    </div>
                    <h3 style="font-size: 1.3rem; margin-bottom: 1rem; color: var(--primary);">95% Tingkat Kepuasan
                        Klien</h3>
                    <p style="color: #555;">
                        Klien kami sangat puas dengan hasil yang kami berikan. Kepuasan klien adalah prioritas utama
                        kami.
                    </p>
                </div>
            </div>

            <!-- Testimonials -->
            <div class="testimonials" style="margin-top: 5rem;">
                <h3 style="text-align: center; font-size: 1.5rem; margin-bottom: 2rem; color: var(--primary);">Apa Kata
                    Klien Kami</h3>

                <div class="testimonial-grid"
                    style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                    <!-- Testimonial 1 -->
                    <div class="testimonial-card"
                        style="background-color: white; border-radius: 8px; padding: 2rem; box-shadow: 0 5px 15px rgba(0,0,0,0.05); position: relative;">
                        <div class="quote-icon"
                            style="position: absolute; top: 20px; right: 20px; color: rgba(202, 168, 104, 0.2); font-size: 3rem;">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <div class="testimonial-content" style="margin-bottom: 1.5rem;">
                            <p style="font-style: italic; color: #555; position: relative; z-index: 1;">
                                "Tim Siagian Sudibyo sangat profesional dalam menangani kasus hukum perusahaan kami.
                                Mereka memberikan solusi yang tepat dan efisien."
                            </p>
                        </div>
                        <div class="testimonial-author" style="display: flex; align-items: center;">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client"
                                style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; margin-right: 1rem;">
                            <div>
                                <h4 style="margin: 0; color: var(--primary);">Budi Santoso</h4>
                                <p style="margin: 0; color: var(--secondary); font-size: 0.9rem;">Direktur PT Abadi Jaya
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="testimonial-card"
                        style="background-color: white; border-radius: 8px; padding: 2rem; box-shadow: 0 5px 15px rgba(0,0,0,0.05); position: relative;">
                        <div class="quote-icon"
                            style="position: absolute; top: 20px; right: 20px; color: rgba(202, 168, 104, 0.2); font-size: 3rem;">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <div class="testimonial-content" style="margin-bottom: 1.5rem;">
                            <p style="font-style: italic; color: #555; position: relative; z-index: 1;">
                                "Saya sangat merekomendasikan Siagian Sudibyo & Co untuk masalah hukum apa pun.
                                Responsif, kompeten, dan benar-benar memahami kebutuhan klien."
                            </p>
                        </div>
                        <div class="testimonial-author" style="display: flex; align-items: center;">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Client"
                                style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; margin-right: 1rem;">
                            <div>
                                <h4 style="margin: 0; color: var(--primary);">Dewi Lestari</h4>
                                <p style="margin: 0; color: var(--secondary); font-size: 0.9rem;">Pengusaha Properti</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="testimonial-card"
                        style="background-color: white; border-radius: 8px; padding: 2rem; box-shadow: 0 5px 15px rgba(0,0,0,0.05); position: relative;">
                        <div class="quote-icon"
                            style="position: absolute; top: 20px; right: 20px; color: rgba(202, 168, 104, 0.2); font-size: 3rem;">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <div class="testimonial-content" style="margin-bottom: 1.5rem;">
                            <p style="font-style: italic; color: #555; position: relative; z-index: 1;">
                                "Proses pendirian PT kami diselesaikan dengan sangat cepat dan tanpa kendala. Terima
                                kasih atas pelayanan yang luar biasa!"
                            </p>
                        </div>
                        <div class="testimonial-author" style="display: flex; align-items: center;">
                            <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Client"
                                style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; margin-right: 1rem;">
                            <div>
                                <h4 style="margin: 0; color: var(--primary);">Andi Wijaya</h4>
                                <p style="margin: 0; color: var(--secondary); font-size: 0.9rem;">Co-Founder Startup
                                    Tech</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section" id="gallery" style="padding: 4rem 0; background-color: #f8f9fa;">
        <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 1rem;">
            <div style="text-align: center; margin-bottom: 3rem;">
                <h2 style="font-size: 2rem; color: var(--primary); margin-bottom: 1rem;">Galeri Kami</h2>
                <p style="max-width: 700px; margin: 0 auto; color: #555;">Lihat momen-momen penting dan pencapaian kami
                    dalam memberikan layanan hukum terbaik</p>
            </div>

            <div class="mansory-gallery">
                <div class="column">
                    <img style="cursor: pointer;" src="{{asset('landing_assets/images/gallery/1.jpg')}}">
                    <img style="cursor: pointer;" src="{{asset('landing_assets/images/gallery/2.jpg')}}">
                    <img style="cursor: pointer;" src="{{asset('landing_assets/images/gallery/11.jpg')}}">
                    <img style="cursor: pointer;" src="{{asset('landing_assets/images/gallery/19.jpg')}}">
                    <img style="cursor: pointer;" src="{{asset('landing_assets/images/gallery/5.jpg')}}">
                    <img style="cursor: pointer;" src="{{asset('landing_assets/images/gallery/4.jpg')}}">
                    <img style="cursor: pointer;" src="{{asset('landing_assets/images/gallery/7.jpg')}}">
                    <img style="cursor: pointer;" src="{{asset('landing_assets/images/gallery/24.jpg')}}">
                </div>
            </div>

            <div style="text-align: center; margin-top: 3rem;">
                <a href="gallery.html" class="btn" style="
                    background-color: var(--primary);
                    color: white;
                    padding: 0.8rem 2rem;
                    font-weight: 600;
                    border-radius: 4px;
                    text-decoration: none;
                    transition: all 0.3s ease;
                    display: inline-block;
                ">
                    Lihat Galeri Lengkap
                </a>
            </div>
        </div>
    </section>

    <!-- Our Lawyers Section -->
    <section class="our-lawyers" id="attonery" style="padding: 3rem 0; background-color: white;">
        <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
            <div class="section-header" style="text-align: center; margin-bottom: 2rem;">
                <span
                    style="color: var(--secondary); font-weight: 600; letter-spacing: 1px; display: block; margin-bottom: 0.5rem; font-size: 0.9rem;">TIM
                    KAMI</span>
                <h2 style="font-size: 1.8rem; color: var(--primary); margin-bottom: 1rem;">Pengacara Profesional Kami
                </h2>
                <p style="max-width: 700px; margin: 0 auto; color: #555; font-size: 0.95rem;">
                    Tim pengacara berpengalaman siap memberikan solusi hukum terbaik untuk kebutuhan Anda.
                </p>
            </div>

            <div class="lawyers-slider-container" style="position: relative; overflow: hidden; margin: 0 -15px;">
                <div class="lawyers-slider" style="display: flex; transition: transform 0.5s ease; width: 100%;">
                    <!-- Lawyer cards (same as before) -->
                    <!-- Lawyer 1 -->
                    <div class="lawyer-card" style="flex: 0 0 100%; padding: 0 15px; box-sizing: border-box;">
                        <div
                            style="background-color: #f9f9f9; border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); height: 100%;">
                            <div class="lawyer-image" style="height: 250px; overflow: hidden;">
                                <img src="{{asset('landing_assets/images/lawyers/sadrach.jpeg')}}" alt="Sadrach Meilando Siagian, S.H"
                                    style="width: 100%; height: 100%; object-fit: cover; object-position: top;">

                            </div>
                            <div class="lawyer-info" style="padding: 1.2rem; text-align: center;">
                                <h3 style="font-size: 1.3rem; margin-bottom: 0.5rem; color: var(--primary);">Sadrach
                                    Meilando Siagian, S.H</h3>
                                <p
                                    style="color: #555; margin-bottom: 1rem; height: 72px; overflow: hidden; font-size: 0.9rem;">
                                    Sadrach telah secara aktif bekerja untuk urusan-urusan pertanahan dan perumahan
                                    (real-estate), urusan-urusan perbankan, urusanurusan perusahaan, dan urusan-urusan
                                    bisnis selama bertahun-tahun.
                                </p>
                                <div class="lawyer-social"
                                    style="display: flex; justify-content: center; gap: 1rem; margin-bottom: 1rem;">
                                    <a href="#" style="color: var(--primary); font-size: 1.1rem;"><i
                                            class="fab fa-linkedin"></i></a>
                                    <a href="#" style="color: var(--primary); font-size: 1.1rem;"><i
                                            class="fas fa-envelope"></i></a>
                                    <a href="#" style="color: var(--primary); font-size: 1.1rem;"><i
                                            class="fas fa-phone-alt"></i></a>
                                </div>
                                <a href="sadrach.html" class="btn"
                                    style="display: inline-block; padding: 0.5rem 1.2rem; background-color: var(--primary); color: white; text-decoration: none; border-radius: 4px; font-weight: 600; font-size: 0.85rem;">
                                    Lihat Profil Lengkap
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Lawyer 2 -->
                    <div class="lawyer-card" style="flex: 0 0 100%; padding: 0 15px; box-sizing: border-box;">
                        <div
                            style="background-color: #f9f9f9; border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); height: 100%;">
                            <div class="lawyer-image" style="height: 250px; overflow: hidden;">
                                <img src="{{asset('landing_assets/images/lawyers/putra.jpeg')}}" alt="Ardik Putra Pratama Sudibyo, S.H"
                                    style="width: 100%; height: 100%; object-fit: cover; object-position: top;">

                            </div>
                            <div class="lawyer-info" style="padding: 1.2rem; text-align: center;">
                                <h3 style="font-size: 1.3rem; margin-bottom: 0.5rem; color: var(--primary);">Ardik Putra
                                    Pratama Sudibyo, S.H</h3>
                                <p
                                    style="color: #555; margin-bottom: 1rem; height: 72px; overflow: hidden; font-size: 0.9rem;">
                                    Ardik memiliki pengalaman dan pengetahuan yang luas dalam membantu dan mewakili
                                    Klien dalam menangani sengketa-sengketa yang kompleks dan bernilai tinggi di
                                    Pengadilan.
                                </p>
                                <div class="lawyer-social"
                                    style="display: flex; justify-content: center; gap: 1rem; margin-bottom: 1rem;">
                                    <a href="#" style="color: var(--primary); font-size: 1.1rem;"><i
                                            class="fab fa-linkedin"></i></a>
                                    <a href="#" style="color: var(--primary); font-size: 1.1rem;"><i
                                            class="fas fa-envelope"></i></a>
                                    <a href="#" style="color: var(--primary); font-size: 1.1rem;"><i
                                            class="fas fa-phone-alt"></i></a>
                                </div>
                                <a href="ardik.html" class="btn"
                                    style="display: inline-block; padding: 0.5rem 1.2rem; background-color: var(--primary); color: white; text-decoration: none; border-radius: 4px; font-weight: 600; font-size: 0.85rem;">
                                    Lihat Profil Lengkap
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Lawyer 3 -->
                    <div class="lawyer-card" style="flex: 0 0 100%; padding: 0 15px; box-sizing: border-box;">
                        <div
                            style="background-color: #f9f9f9; border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); height: 100%;">
                            <div class="lawyer-image" style="height: 250px; overflow: hidden;">
                                <img src="{{asset('landing_assets/images/lawyers/hosbal.jpeg')}}" alt="Hosbal Maruli Sihombing, S.H"
                                    style="width: 100%; height: 100%; object-fit: cover; object-position: top;">
                            </div>
                            <div class="lawyer-info" style="padding: 1.2rem; text-align: center;">
                                <h3 style="font-size: 1.3rem; margin-bottom: 0.5rem; color: var(--primary);">Hosbal
                                    Maruli Sihombing, S.H</h3>
                                <p
                                    style="color: #555; margin-bottom: 1rem; height: 72px; overflow: hidden; font-size: 0.9rem;">
                                    Berpengalaman lebih dari 8 (delapan) tahun, Hosbal juga banyak menangani klien asing
                                    baik WNA maupun perusahaan asing. Reputasinya sangat tidak diragukan sebagai
                                    seeorang advokat handal.
                                </p>
                                <div class="lawyer-social"
                                    style="display: flex; justify-content: center; gap: 1rem; margin-bottom: 1rem;">
                                    <a href="#" style="color: var(--primary); font-size: 1.1rem;"><i
                                            class="fab fa-linkedin"></i></a>
                                    <a href="#" style="color: var(--primary); font-size: 1.1rem;"><i
                                            class="fas fa-envelope"></i></a>
                                    <a href="#" style="color: var(--primary); font-size: 1.1rem;"><i
                                            class="fas fa-phone-alt"></i></a>
                                </div>
                                <a href="hosbal.html" class="btn"
                                    style="display: inline-block; padding: 0.5rem 1.2rem; background-color: var(--primary); color: white; text-decoration: none; border-radius: 4px; font-weight: 600; font-size: 0.85rem;">
                                    Lihat Profil Lengkap
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Lawyer 4 -->
                    <div class="lawyer-card" style="flex: 0 0 100%; padding: 0 15px; box-sizing: border-box;">
                        <div
                            style="background-color: #f9f9f9; border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); height: 100%;">
                            <div class="lawyer-image" style="height: 250px; overflow: hidden;">
                                <img src="{{asset('landing_assets/images/lawyers/lamrida.jpeg')}}" alt="Lamria Sirait, S.H"
                                    style="width: 100%; height: 100%; object-fit: cover; object-position: top;">
                            </div>
                            <div class="lawyer-info" style="padding: 1.2rem; text-align: center;">
                                <h3 style="font-size: 1.3rem; margin-bottom: 0.5rem; color: var(--primary);">Lamria
                                    Sirait, S.H</h3>
                                <p
                                    style="color: #555; margin-bottom: 1rem; height: 72px; overflow: hidden; font-size: 0.9rem;">
                                    Menjalani profesinya sebagai Advokat sejak tahun 2017 dan memiliki keahlian di
                                    bidang litigasi baik yang berkaitan dengan litigasi pidana maupun perdata.
                                </p>
                                <div class="lawyer-social"
                                    style="display: flex; justify-content: center; gap: 1rem; margin-bottom: 1rem;">
                                    <a href="#" style="color: var(--primary); font-size: 1.1rem;"><i
                                            class="fab fa-linkedin"></i></a>
                                    <a href="#" style="color: var(--primary); font-size: 1.1rem;"><i
                                            class="fas fa-envelope"></i></a>
                                    <a href="#" style="color: var(--primary); font-size: 1.1rem;"><i
                                            class="fas fa-phone-alt"></i></a>
                                </div>
                                <a href="lamria.html" class="btn"
                                    style="display: inline-block; padding: 0.5rem 1.2rem; background-color: var(--primary); color: white; text-decoration: none; border-radius: 4px; font-weight: 600; font-size: 0.85rem;">
                                    Lihat Profil Lengkap
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation arrows -->
                <button class="slider-prev"
                    style="position: absolute; left: 5px; top: 50%; transform: translateY(-50%); background: var(--primary); color: white; border: none; padding: 8px 12px; border-radius: 50%; cursor: pointer; z-index: 10; display: none;">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="slider-next"
                    style="position: absolute; right: 5px; top: 50%; transform: translateY(-50%); background: var(--primary); color: white; border: none; padding: 8px 12px; border-radius: 50%; cursor: pointer; z-index: 10; display: none;">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Client Section -->
    <section class="our-clients" style="padding: 4rem 0; background: #f9f9f9;">
        <div class="container" style="max-width: 1400px; margin: 0 auto; padding: 0 20px;">
            <div class="section-header" style="text-align: center; margin-bottom: 3rem;">
                <h2 style="font-size: 2.5rem; color: #003366; font-weight: bold;">Klien Kami</h2>
                <p style="max-width: 700px; margin: 0 auto; color: #555; font-size: 1rem;">
                    Kami bangga telah bekerja sama dengan berbagai perusahaan ternama
                </p>
            </div>

            <div class="client-logos"
                style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center; gap: 2rem;">
                <!-- Repeat logo blocks -->
                <div class="client-logo"
                    style="flex: 0 0 auto; display: flex; justify-content: center; align-items: center;">
                    <img src="{{asset('landing_assets/images/clients/harum.png')}}" alt="Client 1"
                        style="max-width: 150px; max-height: 80px; object-fit: contain;">
                </div>
                <div class="client-logo"
                    style="flex: 0 0 auto; display: flex; justify-content: center; align-items: center;">
                    <img src="{{asset('landing_assets/images/clients/japasian.jpeg')}}" alt="Client 2"
                        style="max-width: 150px; max-height: 80px; object-fit: contain;">
                </div>
                <div class="client-logo"
                    style="flex: 0 0 auto; display: flex; justify-content: center; align-items: center;">
                    <img src="{{asset('landing_assets/images/clients/latitude.png')}}" alt="Client 3"
                        style="max-width: 150px; max-height: 80px; object-fit: contain;">
                </div>
                <div class="client-logo"
                    style="flex: 0 0 auto; display: flex; justify-content: center; align-items: center;">
                    <img src="{{asset('landing_assets/images/clients/mabora.jpeg')}}" alt="Client 4"
                        style="max-width: 150px; max-height: 80px; object-fit: contain;">
                </div>
                <div class="client-logo"
                    style="flex: 0 0 auto; display: flex; justify-content: center; align-items: center;">
                    <img src="{{asset('landing_assets/images/clients/mandala.jpg')}}" alt="Client 5"
                        style="max-width: 150px; max-height: 80px; object-fit: contain;">
                </div>
                <div class="client-logo"
                    style="flex: 0 0 auto; display: flex; justify-content: center; align-items: center;">
                    <img src="{{asset('landing_assets/images/clients/nk.jpeg')}}" alt="Client 6"
                        style="max-width: 150px; max-height: 80px; object-fit: contain;">
                </div>
                <div class="client-logo"
                    style="flex: 0 0 auto; display: flex; justify-content: center; align-items: center;">
                    <img src="{{asset('landing_assets/images/clients/pungkook.jpg')}}" alt="Client 7"
                        style="max-width: 150px; max-height: 80px; object-fit: contain;">
                </div>
                <div class="client-logo"
                    style="flex: 0 0 auto; display: flex; justify-content: center; align-items: center;">
                    <img src="{{asset('landing_assets/images/clients/vautid.png')}}" alt="Client 8"
                        style="max-width: 150px; max-height: 80px; object-fit: contain;">
                </div>
            </div>
        </div>
    </section>

    <div id="lightbox" class="lightbox">
        <span class="close">&times;</span>
        <img class="lightbox-img" src="" alt="">
        <button class="nav prev">&#10094;</button>
        <button class="nav next">&#10095;</button>
    </div>

    <!-- Activities Section -->
    <section class="our-activities">
        <div class="container">

            <!-- Section Header -->
            <div class="section-header">
                <span>AKTIVITAS KAMI</span>
                <h2>Kegiatan Terkini</h2>
                <p>Dokumentasi kegiatan dan partisipasi kami dalam berbagai acara hukum dan kemasyarakatan.</p>
            </div>

            <!-- Activities Grid -->
            <div class="activities-grid">

                <!-- Activity 1 -->
                <div class="activity-card">
                    <div class="activity-image">
                        <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                            alt="Seminar Hukum">
                    </div>
                    <div class="activity-content">
                        <div class="activity-meta">
                            <span class="activity-date">15 Mei 2023</span>
                            <span class="activity-category">Seminar</span>
                        </div>
                        <h3>Seminar Nasional Perkembangan Hukum Bisnis</h3>
                        <p>Sebagai pembicara utama dalam seminar nasional yang membahas perkembangan terbaru hukum
                            bisnis di Indonesia.</p>
                        <a href="#" class="read-more">Lihat Selengkapnya <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Activity 2 -->
                <div class="activity-card">
                    <div class="activity-image">
                        <img src="https://images.unsplash.com/photo-1521791055366-0d553872125f?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                            alt="Pelatihan Hukum">
                    </div>
                    <div class="activity-content">
                        <div class="activity-meta">
                            <span class="activity-date">28 April 2023</span>
                            <span class="activity-category">Pelatihan</span>
                        </div>
                        <h3>Pelatihan Hukum Ketenagakerjaan</h3>
                        <p>Menyelenggarakan pelatihan hukum ketenagakerjaan bagi HRD perusahaan mitra kami.</p>
                        <a href="#" class="read-more">Lihat Selengkapnya <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Activity 3 -->
                <div class="activity-card">
                    <div class="activity-image">
                        <img src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                            alt="Kegiatan Sosial">
                    </div>
                    <div class="activity-content">
                        <div class="activity-meta">
                            <span class="activity-date">10 April 2023</span>
                            <span class="activity-category">Sosial</span>
                        </div>
                        <h3>Bantuan Hukum Gratis</h3>
                        <p>Memberikan konsultasi hukum gratis kepada masyarakat di daerah terpencil.</p>
                        <a href="#" class="read-more">Lihat Selengkapnya <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>

            <!-- View All Button -->
            <div class="view-all">
                <a href="#" class="btn">Lihat Semua Aktivitas <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>


    <!-- CTA Section with Parallax Background -->
    <section class="cta-section" style="
                padding: 4rem 0;
                background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                            url('https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
                color: white;
            ">
        <div class="container" style="text-align: center; color: white; position: relative; z-index: 2;">
            <h2 style="font-size: 2rem; margin-bottom: 1.5rem;">Butuh Bantuan Hukum?</h2>
            <p style="max-width: 700px; margin: 0 auto 2rem; font-size: 1.1rem;">
                Tim ahli kami siap membantu Anda dengan berbagai masalah hukum yang dihadapi. Hubungi kami sekarang
                untuk konsultasi awal gratis.
            </p>
            <div style="display: flex; justify-content: center; gap: 1.5rem; flex-wrap: wrap;">
                <a href="#" class="btn"
                    style="background-color: var(--secondary); color: var(--primary); padding: 1rem 2rem; font-weight: 600; border-radius: 4px; text-decoration: none; transition: all 0.3s ease;">
                    <i class="fas fa-phone-alt" style="margin-right: 0.5rem;"></i> Hubungi Kami
                </a>
                <a href="#" class="btn"
                    style="background-color: transparent; color: white; padding: 1rem 2rem; font-weight: 600; border-radius: 4px; text-decoration: none; border: 2px solid var(--secondary); transition: all 0.3s ease;">
                    <i class="fas fa-calendar-alt" style="margin-right: 0.5rem;"></i> Jadwalkan Konsultasi
                </a>
            </div>
        </div>
    </section>


    <footer class="footer"
        style="background-color: var(--primary); color: white; padding: 4rem 0 0; position: relative;" id="contact">
        <div class="container">
            <div class="footer-grid"
                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-bottom: 3rem;">
                <!-- Footer Column 1 - About -->
                <div class="footer-col">
                    <div class="footer-logo" style="display: flex; align-items: center; margin-bottom: 1.5rem;">
                        <img src="{{asset('landing_assets/logo/logo.png')}}" alt="LawFirm Logo" style="height: 50px; margin-right: 10px;">
                        <div>
                            <h3 style="color: white; margin: 0; font-size: 1rem;">SIAGIAN SUDIBYO & CO</h3>
                            <p style="color: rgba(255,255,255,0.7); margin: 0; font-size: 0.9rem;">Lawyer & Law Firm
                            </p>
                        </div>
                    </div>
                    <p style="color: rgba(255,255,255,0.8); margin-bottom: 1.5rem; line-height: 1.6;">
                        Firma hukum profesional yang menyediakan layanan hukum komprehensif dengan standar
                        internasional.
                    </p>
                    <div class="footer-social" style="display: flex; gap: 1rem;">
                        <a href="#"
                            style="text-decoration: none; color: white; background-color: rgba(255,255,255,0.1); width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#"
                            style="text-decoration: none; color: white; background-color: rgba(255,255,255,0.1); width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#"
                            style="text-decoration: none; color: white; background-color: rgba(255,255,255,0.1); width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#"
                            style="text-decoration: none; color: white; background-color: rgba(255,255,255,0.1); width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>

                <!-- Footer Column 2 - Quick Links -->
                <div class="footer-col">
                    <h3 style="font-size: 1.3rem; margin-bottom: 1.5rem; position: relative; padding-bottom: 0.5rem;">
                        Tautan Cepat
                        <span
                            style="position: absolute; bottom: 0; left: 0; width: 50px; height: 2px; background-color: var(--secondary);"></span>
                    </h3>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="margin-bottom: 0.8rem;">
                            <a href="#"
                                style="color: rgba(255,255,255,0.8); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;">
                                <i class="fas fa-chevron-right"
                                    style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.8rem;"></i>
                                Beranda
                            </a>
                        </li>
                        <li style="margin-bottom: 0.8rem;">
                            <a href="#"
                                style="color: rgba(255,255,255,0.8); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;">
                                <i class="fas fa-chevron-right"
                                    style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.8rem;"></i>
                                Tentang Kami
                            </a>
                        </li>
                        <li style="margin-bottom: 0.8rem;">
                            <a href="#"
                                style="color: rgba(255,255,255,0.8); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;">
                                <i class="fas fa-chevron-right"
                                    style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.8rem;"></i>
                                Layanan
                            </a>
                        </li>
                        <li style="margin-bottom: 0.8rem;">
                            <a href="#"
                                style="color: rgba(255,255,255,0.8); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;">
                                <i class="fas fa-chevron-right"
                                    style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.8rem;"></i>
                                Tim Pengacara
                            </a>
                        </li>
                        <li style="margin-bottom: 0.8rem;">
                            <a href="#"
                                style="color: rgba(255,255,255,0.8); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;">
                                <i class="fas fa-chevron-right"
                                    style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.8rem;"></i>
                                Kontak
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Footer Column 3 - Services -->
                <div class="footer-col">
                    <h3 style="font-size: 1.3rem; margin-bottom: 1.5rem; position: relative; padding-bottom: 0.5rem;">
                        Layanan Kami
                        <span
                            style="position: absolute; bottom: 0; left: 0; width: 50px; height: 2px; background-color: var(--secondary);"></span>
                    </h3>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="margin-bottom: 0.8rem;">
                            <a href="#"
                                style="color: rgba(255,255,255,0.8); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;">
                                <i class="fas fa-chevron-right"
                                    style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.8rem;"></i>
                                Advokasi & Litigasi
                            </a>
                        </li>
                        <li style="margin-bottom: 0.8rem;">
                            <a href="#"
                                style="color: rgba(255,255,255,0.8); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;">
                                <i class="fas fa-chevron-right"
                                    style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.8rem;"></i>
                                Hukum Bisnis & Korporasi
                            </a>
                        </li>
                        <li style="margin-bottom: 0.8rem;">
                            <a href="#"
                                style="color: rgba(255,255,255,0.8); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;">
                                <i class="fas fa-chevron-right"
                                    style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.8rem;"></i>
                                Hukum Ketenagakerjaan
                            </a>
                        </li>
                        <li style="margin-bottom: 0.8rem;">
                            <a href="#"
                                style="color: rgba(255,255,255,0.8); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;">
                                <i class="fas fa-chevron-right"
                                    style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.8rem;"></i>
                                Hukum Kekayaan Intelektual
                            </a>
                        </li>
                        <li style="margin-bottom: 0.8rem;">
                            <a href="#"
                                style="color: rgba(255,255,255,0.8); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;">
                                <i class="fas fa-chevron-right"
                                    style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.8rem;"></i>
                                Hukum Keluarga & Waris
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Footer Column 4 - Contact Info -->
                <div class="footer-col">
                    <h3 style="font-size: 1.3rem; margin-bottom: 1.5rem; position: relative; padding-bottom: 0.5rem;">
                        Kontak Kami
                        <span
                            style="position: absolute; bottom: 0; left: 0; width: 50px; height: 2px; background-color: var(--secondary);"></span>
                    </h3>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="margin-bottom: 1rem; display: flex; align-items: flex-start;">
                            <div style="color: var(--secondary); margin-right: 1rem; font-size: 1.2rem;">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <p style="margin: 0; color: rgba(255,255,255,0.8); line-height: 1.5;">
                                    Gedung Blok M Square Lantai 6 JI Melawai 5, Jakarta Selatan
                                </p>
                            </div>
                        </li>
                        <li style="margin-bottom: 1rem; display: flex; align-items: center;">
                            <div style="color: var(--secondary); margin-right: 1rem; font-size: 1.2rem;">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <a href="tel:6281218473429"
                                    style="color: rgba(255,255,255,0.8); text-decoration: none; transition: all 0.3s ease;">
                                    +62 812 1847 3429
                                </a>
                            </div>
                        </li>
                        <li style="margin-bottom: 1rem; display: flex; align-items: center;">
                            <div style="color: var(--secondary); margin-right: 1rem; font-size: 1.2rem;">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <a href="mailto:info@siagiansudibyo.com"
                                    style="color: rgba(255,255,255,0.8); text-decoration: none; transition: all 0.3s ease;">
                                    info@siagiansudibyo.com
                                </a>
                            </div>
                        </li>
                        <li style="display: flex; align-items: center;">
                            <div style="color: var(--secondary); margin-right: 1rem; font-size: 1.2rem;">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <p style="margin: 0; color: rgba(255,255,255,0.8); line-height: 1.5;">
                                    Senin-Jumat: 08.00-17.00 WIB<br>
                                    Sabtu-Minggu: Tutup
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom" style="background-color: rgba(0,0,0,0.2); padding: 1.5rem 0; text-align: center;">
            <div class="container">
                <p style="margin: 0; color: rgba(255,255,255,0.7); font-size: 0.9rem;">
                    &copy; 2023 Siagian Sudibyo & Co. All Rights Reserved.
                </p>
            </div>
        </div>

        <!-- Back to Top Button -->
        <div class="back-to-top"
            style="position: fixed; bottom: 20px; right: 20px; background-color: var(--secondary); color: var(--primary); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; cursor: pointer; box-shadow: 0 2px 10px rgba(0,0,0,0.2); z-index: 99; opacity: 0; visibility: hidden; transition: all 0.3s ease;">
            <i class="fas fa-arrow-up"></i>
        </div>
    </footer>

    <script src="{{asset('landing_assets/js/script.js')}}"></script>
</body>

</html>