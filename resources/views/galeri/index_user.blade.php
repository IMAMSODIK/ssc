<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAGIAN SUDIBYO & CO | Mitra Hukum Terpercaya</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('landing_assets/logo/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('landing_assets/logo/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('landing_assets/css/galeri.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
                <li><a href="/">Home</a></li>
                <li><a href="/#about">About</a></li>
                <li><a href="/#service">Services</a></li>
                <li><a href="#" class="active">Gallery</a></li>
                <li><a href="/#attonery">Attorneys</a></li>
                <li><a href="/#contact">Contact</a></li>
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
            <li><a href="index.html">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#service">Services</a></li>
            <li><a href="gallery.html" class="active">Gallery</a></li>
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

        <a href="https://wa.me/{{ $wa_number }}?text={{ $wa_text }}" class="sidebar-contact-btn" style="margin-left: 20px; margin-right: 20px;" target="_blank">
            <i class="fas fa-phone-alt"></i> Hubungi Sekarang
        </a>

        <!-- Mobile Footer Section -->
        <div class="sidebar-footer mobile-only"
            style="
        padding: 1.5rem 20px;
        background-color: rgba(0,0,0,0.2);
        margin-top: auto;
        border-top: 1px solid rgba(255,255,255,0.1);
    ">
            <!-- Layanan Kami Section -->
            <div class="footer-services" style="margin-bottom: 1.5rem;">
                <h4
                    style="
                color: white;
                margin-bottom: 0.8rem;
                font-size: 1rem;
                position: relative;
                padding-bottom: 5px;
            ">
                    Layanan Kami
                    <span
                        style="
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    width: 40px;
                    height: 2px;
                    background-color: var(--secondary);
                "></span>
                </h4>
                <ul
                    style="
                list-style: none;
                padding: 0;
                margin: 0;
                columns: 2;
                column-gap: 1rem;
            ">
                    <li style="margin-bottom: 0.6rem;">
                        <a href="#"
                            style="
                        color: rgba(255,255,255,0.8);
                        text-decoration: none;
                        font-size: 0.85rem;
                        display: flex;
                        align-items: center;
                    ">
                            <i class="fas fa-chevron-right"
                                style="
                            color: var(--secondary);
                            margin-right: 0.5rem;
                            font-size: 0.7rem;
                        "></i>
                            Advokasi
                        </a>
                    </li>
                    <li style="margin-bottom: 0.6rem;">
                        <a href="#"
                            style="
                        color: rgba(255,255,255,0.8);
                        text-decoration: none;
                        font-size: 0.85rem;
                        display: flex;
                        align-items: center;
                    ">
                            <i class="fas fa-chevron-right"
                                style="
                            color: var(--secondary);
                            margin-right: 0.5rem;
                            font-size: 0.7rem;
                        "></i>
                            Hukum Bisnis
                        </a>
                    </li>
                    <li style="margin-bottom: 0.6rem;">
                        <a href="#"
                            style="
                        color: rgba(255,255,255,0.8);
                        text-decoration: none;
                        font-size: 0.85rem;
                        display: flex;
                        align-items: center;
                    ">
                            <i class="fas fa-chevron-right"
                                style="
                            color: var(--secondary);
                            margin-right: 0.5rem;
                            font-size: 0.7rem;
                        "></i>
                            Ketenagakerjaan
                        </a>
                    </li>
                    <li style="margin-bottom: 0.6rem;">
                        <a href="#"
                            style="
                        color: rgba(255,255,255,0.8);
                        text-decoration: none;
                        font-size: 0.85rem;
                        display: flex;
                        align-items: center;
                    ">
                            <i class="fas fa-chevron-right"
                                style="
                            color: var(--secondary);
                            margin-right: 0.5rem;
                            font-size: 0.7rem;
                        "></i>
                            Kekayaan Intelektual
                        </a>
                    </li>
                    <li style="margin-bottom: 0.6rem;">
                        <a href="#"
                            style="
                        color: rgba(255,255,255,0.8);
                        text-decoration: none;
                        font-size: 0.85rem;
                        display: flex;
                        align-items: center;
                    ">
                            <i class="fas fa-chevron-right"
                                style="
                            color: var(--secondary);
                            margin-right: 0.5rem;
                            font-size: 0.7rem;
                        "></i>
                            Hukum Keluarga
                        </a>
                    </li>
                    <li style="margin-bottom: 0.6rem;">
                        <a href="#"
                            style="
                        color: rgba(255,255,255,0.8);
                        text-decoration: none;
                        font-size: 0.85rem;
                        display: flex;
                        align-items: center;
                    ">
                            <i class="fas fa-chevron-right"
                                style="
                            color: var(--secondary);
                            margin-right: 0.5rem;
                            font-size: 0.7rem;
                        "></i>
                            Hukum Waris
                        </a>
                    </li>
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
                <div class="social-links"
                    style="
                display: flex;
                gap: 1rem;
                margin-bottom: 1rem;
            ">
                    <a href="#"
                        style="
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
                    <a href="#"
                        style="
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
                    <a href="#"
                        style="
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
                    <a href="#"
                        style="
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

                <p
                    style="
                color: rgba(255,255,255,0.7);
                font-size: 0.8rem;
                margin-bottom: 0.8rem;
                text-align: center;
            ">
                    &copy; 2025 Siagian Sudibyo & Co. All Rights Reserved.
                </p>

                <div class="footer-links"
                    style="
                display: flex;
                gap: 1rem;
                font-size: 0.75rem;
            ">
                    <a href="#"
                        style="
                    color: rgba(255,255,255,0.7);
                    text-decoration: none;
                ">
                        Kebijakan Privasi
                    </a>
                    <span style="color: var(--secondary);">•</span>
                    <a href="#"
                        style="
                    color: rgba(255,255,255,0.7);
                    text-decoration: none;
                ">
                        Syarat & Ketentuan
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Overlay -->
    <div class="overlay" id="overlay"></div>

    <!-- Hero Slider -->
    <div class="hero-slider" id="home">
        <!-- Slide 1 -->
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
            <h1 class="gallery-title">Galeri Foto Kami</h1>
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
        </div>
    </section>

    <div id="lightbox" class="lightbox">
        <span class="close">&times;</span>
        <img class="lightbox-img" src="" alt="">
        <div class="caption" style="color: white; text-align: center; margin-top: 15px; font-size: 1rem;"></div>
        <button class="nav prev">&#10094;</button>
        <button class="nav next">&#10095;</button>
    </div>

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
                            <h3 style="color: white; margin: 0; font-size: 1.3rem;">SIAGIAN SUDIBYO & CO</h3>
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
                    <span style="color: var(--secondary);">|</span>
                    <a href="#"
                        style="color: rgba(255,255,255,0.7); text-decoration: none; transition: all 0.3s ease;">Kebijakan
                        Privasi</a>
                    <span style="color: var(--secondary);">|</span>
                    <a href="#"
                        style="color: rgba(255,255,255,0.7); text-decoration: none; transition: all 0.3s ease;">Syarat
                        & Ketentuan</a>
                </p>
            </div>
        </div>

        <!-- Back to Top Button -->
        <div class="back-to-top"
            style="position: fixed; bottom: 20px; right: 20px; background-color: var(--secondary); color: var(--primary); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; cursor: pointer; box-shadow: 0 2px 10px rgba(0,0,0,0.2); z-index: 99; opacity: 0; visibility: hidden; transition: all 0.3s ease;">
            <i class="fas fa-arrow-up"></i>
        </div>
    </footer>
    <script src="{{ asset('landing_assets/js/galeri.js') }}"></script>
</body>

</html>
