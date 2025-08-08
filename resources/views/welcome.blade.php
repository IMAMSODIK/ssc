<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $web->nama_perusahaan }} | Mitra Hukum Terpercaya</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('landing_assets/logo/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('landing_assets/logo/logo.png') }}">

    <link rel="stylesheet" href="{{ asset('landing_assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .swiper-button-next,
        .swiper-button-prev {
            color: #c0a066 !important;
        }

        .swiper-pagination-bullet {
            background: #c0a066 !important;
            opacity: 1 !important;
        }

        .swiper-pagination-bullet-active {
            background: #303030 !important;
        }
    </style>

</head>

<body>
    <!-- Header Top -->
    <div class="header-top">
        <div class="container header-top-container">
            <div class="logo">
                <img src="{{ asset('landing_assets/logo/logo.png') }}" alt="LawFirm Logo">
                <div class="logo-text">
                    <h3>{{ $web->nama_perusahaan ?? 'SIAGIAN SUDIBYO & CO' }}</h3>
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
                        @php
                            $wa = $web->whatsapp ?? '081218473429';
                            $wa_number = preg_replace('/^0/', '62', $wa);
                            $wa_text = urlencode('Halo, saya ingin berkonsultasi mengenai layanan anda');
                        @endphp

                        <a href="https://wa.me/{{ $wa_number }}?text={{ $wa_text }}" target="_blank"
                            class="" style="text-decoration: none; color: inherit;">
                            {{ $wa }}
                        </a>
                    </div>

                </div>

                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="info-content">
                        <h3>Alamat</h3>
                        <p>{{ $web->alamat ?? 'Gedung Blok M Square Lantai 6 JI Melawai 5, Jakarta Selatan' }}</p>
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
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#attonery">Attorneys</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>

            @php
                $wa = $web->whatsapp ?? '081218473429';
                $wa_number = preg_replace('/^0/', '62', $wa);
                $wa_text = urlencode('Halo, saya ingin berkonsultasi mengenai layanan anda');
            @endphp

            <a href="https://wa.me/{{ $wa_number }}?text={{ $wa_text }}" target="_blank" class="contact-btn">
                Hubungi via WhatsApp
            </a>

        </div>
    </nav>

    <!-- Sidebar Mobile Menu -->
    <div class="sidebar-menu" id="sidebarMenu">
        <div class="logo" style="margin-bottom: 50px; margin-left: 30px">
            <img src="{{ asset('landing_assets/logo/logo.png') }}" alt="LawFirm Logo">
            <div class="logo-text">
                <h3>{{ $web->nama_perusahaan ?? 'SIAGIAN SUDIBYO & CO' }}</h3>
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
                    @php
                        $phone = $web->whatsapp ?? '081218473429';
                        $wa_number = preg_replace('/^0/', '62', $phone);
                        $wa_text = urlencode('Halo, saya ingin berkonsultasi mengenai layanan anda');
                    @endphp

                    <a href="https://wa.me/{{ $wa_number }}?text={{ $wa_text }}" target="_blank"
                        class="clickable-phone">
                        +{{ preg_replace('/^0/', '62 ', $phone) }}
                    </a>

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
                    <p>{{ $web->alamat ?? 'Gedung Blok M Square Lantai 6 JI Melawai 5, Jakarta Selatan' }}</p>
                </div>
            </div>
        </div>

        <a href="https://wa.me/{{ $wa_number }}?text={{ $wa_text }}" class="sidebar-contact-btn" target="_blank" style="margin-left: 20px; margin-right: 20px;">
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
                    @foreach ($layanans as $index => $layanan)
                        <li style="margin-bottom: 0.6rem;">
                            <a href="https://wa.me/{{ $wa_number ?? '081218473429' }}?text=Halo, saya ingin berkonsultasi mengenai layanan {{ urlencode($layanan->judul) }}" target="_blank" style="color: rgba(255,255,255,0.8); text-decoration: none; font-size: 0.85rem; display: flex; align-items: center;">
                                <i class="fas fa-chevron-right"
                                    style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.7rem;"></i>
                                {{ strtoupper($layanan->judul) }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Social Media & Copyright -->
            <div class="footer-bottom"
                style="
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 1.5rem;
        ">  
                <div class="social-links" style="display: flex; gap: 1rem; margin-bottom: 1rem;">
                    <a href="https://wa.me/{{ $web->whatsapp ?? '081218473429' }}?text=Halo, saya ingin berkonsultasi mengenai layanan anda }}" style="text-decoration: none; color: white; background-color: rgba(255,255,255,0.1); width: 36px; height: 36px; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="mailto:{{ $web->email }}" style="text-decoration: none; color: white; background-color: rgba(255,255,255,0.1); width: 36px; height: 36px; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                        <i class="fas fa-envelope"></i>
                    </a>
                    <a href="{{$web->instagram}}" style="text-decoration: none; color: white; background-color: rgba(255,255,255,0.1); width: 36px; height: 36px; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>

                <p style="color: rgba(255,255,255,0.7); font-size: 0.8rem; margin-bottom: 0.8rem; text-align: center;">
                    &copy; 2025 Siagian Sudibyo & Co. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>

    <!-- Overlay -->
    <div class="overlay" id="overlay"></div>

    <!-- Hero Slider -->
    <div class="hero-slider" id="home">
        <div class="slide active"
            style="background-image: url('{{ asset('landing_assets/images/banner/image.jpeg') }}');">
            <div class="container">
                <div class="slide-content">
                    <h2>Solusi Hukum Profesional untuk Bisnis Anda</h2>
                    <p>Kami memberikan konsultasi hukum komprehensif untuk melindungi bisnis Anda dari berbagai risiko
                        hukum.</p>
                    <a href="#" class="btn">Konsultasi Sekarang</a>
                </div>
            </div>
        </div>
        @foreach ($banners as $banner)
            <div class="slide" style="background-image: url('{{ asset('storage') . '/' . $banner->gambar }}');">
                <div class="container">
                    <div class="slide-content">
                        <h2>{{ $banner->heading_1 }}</h2>
                        <p>{{ $banner->heading_2 }}</p>
                        <a href="{{ $banner->link_tombol }}" class="btn">{{ $banner->text_tombol }}</a>
                    </div>
                </div>
            </div>
        @endforeach

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
                        <img src="{{ asset('landing_assets/images/banner/ig1.jpeg') }}" alt="Law Firm Team"
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
                <div class="vmc-card"
                    style="
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
                    <div
                        style="
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
                        <div
                            style="width: 40px; height: 3px; background-color: var(--secondary); margin-bottom: 1rem;">
                        </div>
                    </div>
                </div>

                <!-- Mission Card -->
                <div class="vmc-card"
                    style="
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
                    <div
                        style="
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
                        <div
                            style="width: 40px; height: 3px; background-color: var(--secondary); margin-bottom: 1rem;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section" id="service"
        style="padding: 5rem 0; background: url('{{ asset('landing_assets/images/ctr old/landing_01.jpg') }}') no-repeat center center / cover;">
        <div class="container">
            <div class="section-header" style="text-align: center; margin-bottom: 3rem;">
                <span
                    style="color: var(--secondary); font-weight: 600; letter-spacing: 1px; display: block; margin-bottom: 0.5rem;">
                    LAYANAN KAMI</span>
                <h2 style="font-size: 2.2rem; color: white; margin-bottom: 1rem;">Layanan Hukum Profesional
                </h2>
                <p style="max-width: 700px; margin: 0 auto; color: #eee;">
                    Kami menyediakan berbagai layanan hukum komprehensif untuk memenuhi kebutuhan hukum bisnis maupun
                    pribadi Anda.
                </p>
            </div>

            <div class="services-grid">
                @foreach ($layanans as $index => $layanan)
                    <div class="collapse-container" id="collapse-{{ $index }}">
                        <div class="collapse-header" onclick="toggleCollapse(this)">
                            {{ strtoupper($layanan->judul) }}
                        </div>
                        <div class="collapse-body">
                            {{ $layanan->keterangan }}
                            <br>
                            <a href="https://wa.me/{{ $wa_number ?? '081218473429' }}?text=Halo, saya ingin berkonsultasi mengenai layanan {{ urlencode($layanan->judul) }}"
                                target="_blank">
                                Tanya Bang Bardik
                            </a>
                        </div>
                    </div>
                @endforeach
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
                    <h3 style="font-size: 1.3rem; margin-bottom: 1rem; color: var(--primary);">Kerahasiaan Terjamin
                    </h3>
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

                <!-- Swiper Container -->
                <div class="swiper testimonial-swiper">
                    <div class="swiper-wrapper">
                        @foreach ($testis as $testi)
                            <div class="swiper-slide">
                                <div class="testimonial-card"
                                    style="background-color: white; border-radius: 8px; padding: 2rem; box-shadow: 0 5px 15px rgba(0,0,0,0.05); position: relative;">
                                    <div class="quote-icon"
                                        style="position: absolute; top: 20px; right: 20px; color: rgba(202, 168, 104, 0.2); font-size: 3rem;">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                    <div class="testimonial-content" style="margin-bottom: 1.5rem;">
                                        <p style="font-style: italic; color: #555; position: relative; z-index: 1;">
                                            "{{ $testi->testi }}"
                                        </p>
                                    </div>
                                    <div class="testimonial-author" style="display: flex; align-items: center;">
                                        <img src="{{ asset('landing_assets/images/others/default.jpg') }}"
                                            alt="Client"
                                            style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; margin-right: 1rem;">
                                        <div>
                                            <h4 style="margin: 0; color: var(--primary);">{{ $testi->nama }}</h4>
                                            <p style="margin: 0; color: var(--secondary); font-size: 0.9rem;">
                                                {{ $testi->asal }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Swiper Navigation -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <!-- Swiper Pagination -->
                    <div class="swiper-pagination"></div>
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
                    @foreach ($galeris as $item)
                        <div class="image-wrapper" style="position: relative; margin-bottom: 1.5rem;"
                            data-keterangan="{{ $item->keterangan }}">
                            <img style="cursor: pointer; width: 100%; display: block;"
                                src="{{ asset('storage/' . $item->gambar) }}">
                            <div
                                style="
                                position: absolute;
                                bottom: 20px;
                                left: 0;
                                right: 0;
                                margin-left: 20px;
                                margin-right: 20px;
                                background: rgba(0, 0, 0, 0.8);
                                color: white;
                                padding: 6px 10px;
                                border-radius: 5px;
                                font-size: 0.9rem;
                                box-sizing: border-box;
                                text-align: center;
                            ">
                                {{ $item->keterangan }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


            <div style="text-align: center; margin-top: 3rem;">
                <a href="/galeri-kami" class="btn"
                    style="
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
                    @foreach ($lawyers as $l)
                        <div class="lawyer-card" style="flex: 0 0 100%; padding: 0 15px; box-sizing: border-box;">
                            <div
                                style="background-color: #f9f9f9; border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); height: 100%;">
                                <div class="lawyer-image" style="height: 250px; overflow: hidden;">
                                    <img src="{{ $l->profile->gambar ? asset('storage') . '/' . $l->profile->gambar : asset('own_assets/images/user.png') }}"
                                        alt="{{ $l->name }}"
                                        style="width: 100%; height: 100%; object-fit: cover; object-position: top;">

                                </div>
                                <div class="lawyer-info" style="padding: 1.2rem; text-align: center;">
                                    @php
                                        $cleanDetail = strip_tags($l->profile->detail);
                                        $shortDetail = Str::limit($cleanDetail, 150);
                                    @endphp

                                    <h3 style="font-size: 1.3rem; margin-bottom: 0.5rem; color: var(--primary);">
                                        {{ $l->name }}</h3>
                                    <p
                                        style="color: #555; margin-bottom: 1rem; height: 72px; overflow: hidden; font-size: 0.9rem;">
                                        {{ $shortDetail }}
                                    </p>
                                    <div class="lawyer-social"
                                        style="display: flex; justify-content: center; gap: 1rem; margin-bottom: 1rem;">
                                        @if ($l->profile->instagram)
                                            <a href="{{ $l->profile->instagram }}" target="_blank"
                                                style="color: var(--primary); font-size: 1.1rem;"><i
                                                    class="fab fa-instagram"></i></a>
                                        @endif
                                        @if ($l->profile->facebook)
                                            <a href="{{ $l->profile->facebook }}" target="_blank"
                                                style="color: var(--primary); font-size: 1.1rem;"><i
                                                    class="fab fa-facebook"></i></a>
                                        @endif
                                        @if ($l->profile->email)
                                            <a href="mailto:{{ $l->profile->email }}"
                                                style="color: var(--primary); font-size: 1.1rem;"><i
                                                    class="fas fa-envelope"></i></a>
                                        @endif
                                        @if ($l->profile->whatsapp)
                                            @php
                                                $wa = $l->profile->whatsapp ?? '08123456789';
                                                $wa_number = preg_replace('/^0/', '62', $wa);
                                            @endphp

                                            <a href="https://wa.me/{{ $wa_number }}"
                                                style="color: var(--primary); font-size: 1.1rem;" target="_blank">
                                                <i class="fas fa-phone-alt"></i>
                                            </a>
                                        @endif
                                    </div>
                                    <a href="/profile/detail-lawyer?lawyer={{ $l->name }}" class="btn"
                                        style="display: inline-block; padding: 0.5rem 1.2rem; background-color: var(--primary); color: white; text-decoration: none; border-radius: 4px; font-weight: 600; font-size: 0.85rem;">
                                        Lihat Profil Lengkap
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                @foreach ($clients as $client)
                    <div class="client-logo"
                        style="flex: 0 0 auto; display: flex; justify-content: center; align-items: center;">
                        <img src="{{ asset('storage') . '/' . $client->logo }}" alt="{{ $client->logo }}"
                            style="max-width: 150px; max-height: 80px; object-fit: contain;">
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div id="lightbox" class="lightbox">
        <span class="close">&times;</span>
        <img class="lightbox-img" src="" alt="">
        <div class="caption" style="color: white; text-align: center; margin-top: 15px; font-size: 1rem;"></div>
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

                @foreach ($aktifitas as $a)
                    <div class="activity-card">
                        <div class="activity-image">
                            <img src="{{asset('storage') . '/' . $a->thumbnail}}"
                                alt="{{$a->judul}}">
                        </div>
                        <div class="activity-content">
                            <div class="activity-meta">
                                <span class="activity-date">{{ $item->created_at->format('d M Y') }}</span>
                                <span class="activity-category">{{$a->kategori}}</span>
                            </div>
                            <h3>{{$a->judul}}</h3>
                            <p>{!! Str::limit(strip_tags($a->deksripsi), 120) !!}</p>
                            <a href="/aktifitas/detail?judul={{$a->judul}}" class="read-more">Lihat Selengkapnya <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- View All Button -->
            {{-- <div class="view-all">
                <a href="#" class="btn">Lihat Semua Aktivitas <i class="fas fa-arrow-right"></i></a>
            </div> --}}
        </div>
    </section>


    <!-- CTA Section with Parallax Background -->
    <section class="cta-section"
        style="
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
                {{-- <a href="#" class="btn"
                    style="background-color: var(--secondary); color: var(--primary); padding: 1rem 2rem; font-weight: 600; border-radius: 4px; text-decoration: none; transition: all 0.3s ease;">
                    <i class="fas fa-phone-alt" style="margin-right: 0.5rem;"></i> Hubungi Kami
                </a> --}}
                <a href="https://wa.me/{{ $web->whatsapp }}?text=text=Halo, saya ingin berkonsultasi mengenai layanan anda" target="_blank" class="btn"
                    style="background-color: transparent; color: white; padding: 1rem 2rem; font-weight: 600; border-radius: 4px; text-decoration: none; border: 2px solid var(--secondary); transition: all 0.3s ease;">
                    <i class="fas fa-phone-alt" style="margin-right: 0.5rem;"></i> Hubungi Kami
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
                        <img src="{{ asset('landing_assets/logo/logo.png') }}" alt="LawFirm Logo"
                            style="height: 50px; margin-right: 10px;">
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
                        <a href="https://wa.me/{{ $web->whatsapp ?? '081218473429' }}?text=Halo, saya ingin berkonsultasi mengenai layanan anda }}"
                            style="text-decoration: none; color: white; background-color: rgba(255,255,255,0.1); width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="mailto:{{ $web->email }}" target="_blank"
                            style="text-decoration: none; color: white; background-color: rgba(255,255,255,0.1); width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="{{$web->instagram}}" target="_blank"
                            style="text-decoration: none; color: white; background-color: rgba(255,255,255,0.1); width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                            <i class="fab fa-instagram"></i>
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
                            <a href="/"
                                style="color: rgba(255,255,255,0.8); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;">
                                <i class="fas fa-chevron-right"
                                    style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.8rem;"></i>
                                Beranda
                            </a>
                        </li>
                        <li style="margin-bottom: 0.8rem;">
                            <a href="#about"
                                style="color: rgba(255,255,255,0.8); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;">
                                <i class="fas fa-chevron-right"
                                    style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.8rem;"></i>
                                Tentang Kami
                            </a>
                        </li>
                        <li style="margin-bottom: 0.8rem;">
                            <a href="#service"
                                style="color: rgba(255,255,255,0.8); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;">
                                <i class="fas fa-chevron-right"
                                    style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.8rem;"></i>
                                Layanan
                            </a>
                        </li>
                        <li style="margin-bottom: 0.8rem;">
                            <a href="#gallery"
                                style="color: rgba(255,255,255,0.8); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;">
                                <i class="fas fa-chevron-right"
                                    style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.8rem;"></i>
                                Galeri
                            </a>
                        </li>
                        <li style="margin-bottom: 0.8rem;">
                            <a href="#attonery"
                                style="color: rgba(255,255,255,0.8); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;">
                                <i class="fas fa-chevron-right"
                                    style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.8rem;"></i>
                                Tim Pengacara
                            </a>
                        </li>
                        <li style="margin-bottom: 0.8rem;">
                            <a href="#contact"
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
                        @foreach ($layanans as $l)
                            <li style="margin-bottom: 0.8rem;">
                                <a href="#service"
                                    style="color: rgba(255,255,255,0.8); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;">
                                    <i class="fas fa-chevron-right"
                                        style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.8rem;"></i>
                                    {{$l->judul}}
                                </a>
                            </li>
                        @endforeach
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
                                    {{$web->alamat}}
                                </p>
                            </div>
                        </li>
                        <li style="margin-bottom: 1rem; display: flex; align-items: center;">
                            <div style="color: var(--secondary); margin-right: 1rem; font-size: 1.2rem;">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <a href="https://wa.me/{{ $web->whatsapp ?? '081218473429' }}?text=Halo, saya ingin berkonsultasi mengenai layanan anda }}"
                                target="_blank"
                                    style="color: rgba(255,255,255,0.8); text-decoration: none; transition: all 0.3s ease;">
                                    {{ $web->whatsapp ?? '081218473429' }}
                                </a>
                            </div>
                        </li>
                        <li style="margin-bottom: 1rem; display: flex; align-items: center;">
                            <div style="color: var(--secondary); margin-right: 1rem; font-size: 1.2rem;">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <a href="mailto:lawyer@siagiansudibyoandcolawfirm.com"
                                    style="color: rgba(255,255,255,0.8); text-decoration: none; transition: all 0.3s ease;">
                                    lawyer@siagiansudibyoandcolawfirm.com
                                </a>
                                <a href="mailto:admin@siagiansudibyoandcolawfirm.com"
                                    style="color: rgba(255,255,255,0.8); text-decoration: none; transition: all 0.3s ease;">
                                    admin@siagiansudibyoandcolawfirm.com
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
                    &copy; 2025 Siagian Sudibyo & Co. All Rights Reserved.
                </p>
            </div>
        </div>

        <!-- Back to Top Button -->
        {{-- <div class="back-to-top"
            style="position: fixed; bottom: 20px; right: 20px; background-color: var(--secondary); color: var(--primary); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; cursor: pointer; box-shadow: 0 2px 10px rgba(0,0,0,0.2); z-index: 99; opacity: 0; visibility: hidden; transition: all 0.3s ease;">
            <i class="fas fa-arrow-up"></i>
        </div> --}}
    </footer>

    <div id="floating-button" onclick="window.open('https://wa.me/{{ $web->whatsapp ?? '081218473429' }}?text=Halo, saya ingin berkonsultasi mengenai layanan anda', '_blank')">
        <button id="close-btn">×</button>
        <img src="{{ asset('landing_assets/images/others/karakter.png') }}" alt="Floating" />
    </div>

    <script src="{{ asset('landing_assets/js/script.js') }}"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.testimonial-swiper', {
            loop: true,
            spaceBetween: 30,
            slidesPerView: 1,
            autoplay: {
                delay: 4000, // 4 detik
                disableOnInteraction: false
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                }
            }
        });
    </script>

</body>

</html>
