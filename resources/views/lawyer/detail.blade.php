<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAGIAN SUDIBYO & CO | Mitra Hukum Terpercaya</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('landing_assets/logo/logo.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('landing_assets/logo/logo.png')}}">
    <style>
        h2 {
            font-family: 'Cormorant Infant';
        }

        :root {
            --primary: #1B1B1B;
            --secondary: #CAA868;
            --accent: #E9D596;
            --light: #f8f9fa;
            --dark: #212529;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Header Top */
        .header-top {
            background-color: var(--primary);
            padding: 1rem 0 4rem 0;
            position: relative;
            z-index: 100;
        }

        .header-top-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1.5rem;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 60px;
            margin-right: 10px;
        }

        .logo-text h3 {
            margin: 0;
            font-size: 1.5rem;
            font-weight: 700;
            color: white;
        }

        .logo-text p {
            margin: 0;
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.8);
        }

        .header-info {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .info-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: white;
        }

        .info-icon {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            color: var(--secondary);
        }

        .info-content h3 {
            font-size: 1rem;
            margin-bottom: 0.2rem;
        }

        .info-content p {
            font-size: 0.9rem;
            margin: 0;
        }

        /* Navigation Menu - Desktop */
        .main-nav {
            background-color: var(--secondary);
            padding: 1rem;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
            width: 90%;
            margin: -3rem auto -3rem auto;
            position: relative;
            z-index: 200;
            border-radius: 2px;
        }

        .nav-container {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .main-nav ul {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            list-style: none;
            gap: 0.5rem;
            margin: 0;
            padding: 0;
        }

        .main-nav ul li a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            padding: 0.5rem;
            position: relative;
            transition: all 0.3s ease;
        }

        .main-nav ul li a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--primary);
            transition: width 0.3s ease;
        }

        .main-nav ul li a:hover::after,
        .main-nav ul li a.active::after {
            width: 100%;
        }

        .contact-btn {
            background-color: var(--primary);
            color: white;
            padding: 0.6rem 1rem;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            margin-top: 0.5rem;
        }

        /* Mobile Menu Button */
        .menu-toggle {
            display: none;
            background: var(--primary);
            color: white;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            margin: 0 auto;
            z-index: 300;
        }

        /* Sidebar Mobile Menu */
        .sidebar-menu {
            position: fixed;
            top: 0;
            right: -300px;
            width: 250px;
            height: 100%;
            background-color: var(--secondary);
            box-shadow: -5px 0 15px rgba(0, 0, 0, 0.2);
            z-index: 400;
            transition: right 0.3s ease;
            padding-top: 5rem;
            overflow-y: auto;
        }

        .sidebar-menu.active {
            right: 0;
        }

        .sidebar-menu ul {
            list-style: none;
            padding: 1rem;
        }

        .sidebar-menu ul li {
            margin-bottom: 1rem;
        }

        .sidebar-menu ul li a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
            display: block;
            padding: 0.5rem;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .sidebar-menu ul li a:hover {
            background-color: rgba(0, 0, 0, 0.1);
        }

        .sidebar-contact-btn {
            background-color: var(--primary);
            color: white;
            padding: 0.8rem;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
            display: block;
            text-align: center;
            margin: 1rem;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 350;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .overlay.active {
            opacity: 1;
            visibility: visible;
        }

        /* Hero Slider */
        .hero-slider {
            position: relative;
            height: 600px;
            overflow: hidden;
            margin-top: 0;
            z-index: 50;
        }

        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            display: flex;
            align-items: center;
        }

        .slide.active {
            opacity: 1;
        }

        .slide::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(54, 57, 61, 0.7);
        }

        .slide-content {
            position: relative;
            z-index: 1;
            color: white;
            max-width: 100%;
            padding: 0 1rem;
            margin-top: 4rem;
            text-align: center;
        }

        .slide-content h2 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            line-height: 1.3;
        }

        .slide-content p {
            font-size: 1rem;
            margin-bottom: 1.5rem;
        }

        .btn {
            display: inline-block;
            background-color: var(--accent);
            color: rgb(39, 39, 39);
            padding: 0.8rem 1.5rem;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .slider-nav {
            position: absolute;
            bottom: 1rem;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 0.8rem;
            z-index: 2;
        }

        .slider-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .slider-dot.active {
            background-color: white;
            transform: scale(1.2);
        }

        /* Mobile Hidden */
        .mobile-hidden {
            display: flex;
        }

        /* Sidebar Contact Info */
        .sidebar-contact-info {
            padding: 1rem;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            margin-bottom: 1rem;
        }

        .sidebar-contact-info .info-item {
            flex-direction: row;
            align-items: center;
            margin-bottom: 1rem;
            color: var(--primary);
        }

        .sidebar-contact-info .info-icon {
            font-size: 1.2rem;
            margin-right: 1rem;
            color: var(--primary);
        }

        .sidebar-contact-info .info-content h3 {
            font-size: 0.9rem;
            margin-bottom: 0.2rem;
        }

        .sidebar-contact-info .info-content p {
            font-size: 0.8rem;
            margin: 0;
        }

        /* Desktop Styles */
        @media (min-width: 768px) {
            .header-top-container {
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
            }

            .header-info {
                flex-direction: row;
                gap: 2rem;
            }

            .info-item {
                flex-direction: row;
                text-align: left;
                align-items: center;
            }

            .info-icon {
                margin-bottom: 0;
                margin-right: 1rem;
                font-size: 1.8rem;
            }

            .main-nav {
                width: 80%;
                padding: 1.2rem 2rem;
            }

            .nav-container {
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
            }

            .main-nav ul {
                flex-wrap: nowrap;
                gap: 1.5rem;
            }

            .main-nav ul li a {
                font-size: 1.1rem;
                padding: 0.5rem 0;
            }

            .contact-btn {
                margin-top: 0;
                padding: 0.8rem 1.8rem;
                font-size: 1.1rem;
            }

            .slide-content {
                max-width: 800px;
                padding: 0 2rem;
                margin-top: 5rem;
                text-align: left;
            }

            .slide-content h2 {
                font-size: 3rem;
                margin-bottom: 1.5rem;
            }

            .slide-content p {
                font-size: 1.3rem;
                margin-bottom: 2rem;
            }

            .btn {
                padding: 1rem 2.5rem;
                font-size: 1.1rem;
            }
        }

        /* Mobile Menu Styles */
        @media (max-width: 767px) {
            .menu-toggle {
                display: block;
                position: fixed;
                top: 1rem;
                right: 1rem;
                z-index: 500;
            }

            .main-nav {
                display: none;
            }

            .mobile-hidden {
                display: none;
            }

            .hero-slider {
                height: 100vh;
                margin-top: 0;
            }

            .slide-content {
                margin-top: 2rem;
            }

            /* Header adjustments */
            .header-top {
                padding: 0.5rem 0;
            }

            .logo img {
                height: 50px;
            }

            .logo-text h3 {
                font-size: 1.2rem;
            }

            .info-icon {
                width: 40px;
                height: 40px;
                font-size: 1.2rem;
            }
        }

        .info-icon {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--primary);
            color: var(--secondary);
            border-radius: 50%;
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            border: 2px solid var(--secondary);
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .info-icon:hover {
            background-color: var(--secondary);
            color: var(--primary);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        /* Style khusus untuk sidebar */
        .sidebar-contact-info .info-icon {
            background-color: var(--secondary);
            color: var(--primary);
            border-color: var(--primary);
            width: 40px;
            height: 40px;
            font-size: 1.2rem;
        }

        .sidebar-contact-info .info-icon:hover {
            background-color: var(--primary);
            color: var(--secondary);
        }

        .clickable-phone {
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .clickable-phone:hover {
            color: var(--secondary);
            text-decoration: underline;
        }

        /* About Section Styles */
        .about-section {
            position: relative;
            overflow: hidden;
        }

        @media (max-width: 768px) {
            .about-container {
                flex-direction: column;
            }

            .about-image,
            .about-content {
                min-width: 100% !important;
            }

            .stats-counter .stat-item {
                min-width: 45% !important;
                margin-bottom: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .stats-counter .stat-item {
                min-width: 100% !important;
            }
        }

        .vmc-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .vmc-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3) !important;
        }

        .vmc-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, transparent 10%, rgba(27, 27, 27, 0.9));
            z-index: 1;
        }

        @media (max-width: 900px) {
            .vmc-cards {
                flex-direction: column;
            }

            .vmc-card {
                min-width: 100% !important;
                min-height: 300px !important;
            }
        }

        .service-card {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .service-card:hover {
            background-color: #1B1B1B;
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        /* Ubah warna semua teks di dalam kartu saat hover */
        .service-card:hover h3,
        .service-card:hover p,
        .service-card:hover li,
        .service-card:hover i {
            color: #ffffff !important;
        }

        /* Ubah warna tombol saat hover di dalam kartu */
        .service-card:hover .service-btn {
            background-color: #ffffff !important;
            color: #1B1B1B !important;
        }
    </style>

    <style>
        /* Mobile Menu Styles */
        @media (max-width: 767px) {

            /* Sidebar Menu Improvements */
            .sidebar-menu {
                width: 85%;
                right: -85%;
                padding-top: 4rem;
                background-color: var(--primary);
                box-shadow: -5px 0 25px rgba(0, 0, 0, 0.3);
            }

            .sidebar-menu ul {
                padding: 0.5rem;
            }

            .sidebar-menu ul li a {
                color: white;
                padding: 1rem;
                margin-bottom: 0.5rem;
                border-radius: 4px;
                background-color: rgba(255, 255, 255, 0.1);
            }

            .sidebar-menu ul li a:hover {
                background-color: rgba(255, 255, 255, 0.2);
            }

            .sidebar-contact-btn {
                margin: 1rem 0.5rem;
                background-color: var(--secondary);
                color: var(--primary);
                font-weight: 700;
            }

            .sidebar-contact-info {
                padding: 1rem 0.5rem;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }

            .sidebar-contact-info .info-item {
                color: white;
                padding: 0.5rem;
                border-radius: 4px;
                background-color: rgba(255, 255, 255, 0.1);
                margin-bottom: 0.8rem;
            }

            .sidebar-contact-info .info-icon {
                background-color: var(--secondary);
                color: var(--primary);
                width: 36px;
                height: 36px;
                font-size: 1rem;
                margin-right: 0.8rem;
            }

            .sidebar-contact-info .info-content h3 {
                color: rgba(255, 255, 255, 0.9);
                font-size: 0.9rem;
            }

            .sidebar-contact-info .info-content p {
                color: rgba(255, 255, 255, 0.7);
                font-size: 0.85rem;
            }

            /* Menu Toggle Button */
            .menu-toggle {
                background-color: var(--secondary);
                color: var(--primary);
                padding: 0.7rem;
                border-radius: 50%;
                width: 50px;
                height: 50px;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
            }

            /* Header adjustments */
            .header-top {
                padding: 0.8rem 0 1.2rem 0;
            }

            .logo img {
                height: 45px;
            }

            .logo-text h3 {
                font-size: 1.1rem;
            }

            .logo-text p {
                font-size: 0.8rem;
            }

            /* Hero Slider adjustments */
            .hero-slider {
                height: 80vh;
            }

            .slide-content {
                padding: 0 1.5rem;
                margin-top: 3rem;
            }

            .slide-content h2 {
                font-size: 1.6rem;
                margin-bottom: 1.2rem;
            }

            .slide-content p {
                font-size: 1rem;
                margin-bottom: 1.8rem;
            }

            .btn {
                padding: 0.9rem 1.8rem;
                font-size: 1rem;
            }

            /* About Section adjustments */
            .about-section {
                padding: 3rem 0;
            }

            .about-image,
            .about-content {
                min-width: 100% !important;
            }

            .vmc-card {
                min-width: 100% !important;
                margin-bottom: 1.5rem;
                height: 350px !important;
            }

            /* Services Section adjustments */
            .services-grid {
                grid-template-columns: 1fr !important;
            }

            .service-card {
                margin-bottom: 1.5rem;
            }

            /* Why Choose Us Section */
            .reasons-grid {
                grid-template-columns: 1fr !important;
            }

            .reason-card {
                margin-bottom: 1.5rem;
            }

            /* Testimonials */
            .testimonial-grid {
                grid-template-columns: 1fr !important;
            }

            .testimonial-card {
                margin-bottom: 1.5rem;
            }

            /* Lawyers Section */
            .lawyers-grid {
                grid-template-columns: 1fr !important;
            }

            .lawyer-card {
                margin-bottom: 2rem;
            }

            /* Footer adjustments */
            .footer-grid {
                grid-template-columns: 1fr !important;
            }

            .footer-col {
                margin-bottom: 2rem;
            }

            /* CTA Section */
            .cta-section .btn {
                width: 100%;
                margin-bottom: 1rem;
            }
        }

        /* Additional Mobile Optimizations */
        @media (max-width: 480px) {

            /* Smaller devices */
            .hero-slider {
                height: 70vh;
            }

            .slide-content h2 {
                font-size: 1.4rem;
            }

            .slide-content p {
                font-size: 0.9rem;
            }

            .btn {
                padding: 0.8rem 1.5rem;
                font-size: 0.9rem;
            }

            /* Stats counter */
            .stats-counter .stat-item {
                min-width: 50% !important;
                margin-bottom: 1.5rem;
            }

            /* Gallery */
            .gallery-grid {
                grid-template-columns: 1fr !important;
            }
        }
    </style>

    <style type="text/css">
        /* Mobile Footer Styles */
        @media (max-width: 767px) {
            .sidebar-menu {
                display: flex;
                flex-direction: column;
                height: 100vh;
            }

            .sidebar-footer.mobile-only {
                display: flex;
                flex-direction: column;
            }

            .footer-services a:hover,
            .footer-links a:hover {
                color: var(--secondary) !important;
            }

            .social-links a:hover {
                background-color: var(--secondary) !important;
                color: var(--primary) !important;
                transform: translateY(-3px);
            }
        }

        @media (min-width: 768px) {
            .sidebar-footer.mobile-only {
                display: none;
            }
        }
    </style>

    <style>
        .lawyers-slider-container {
            width: 100%;
            overflow: hidden;
        }

        .lawyer-card {
            flex-shrink: 0;
        }

        .lawyer-image img {
            transition: transform 0.3s ease;
        }

        .lawyer-card:hover .lawyer-image img {
            transform: scale(1.05);
        }

        .btn {
            transition: all 0.3s ease;
        }

        .btn:hover {
            background-color: var(--secondary) !important;
            color: var(--primary) !important;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- Header Top -->
    <div class="header-top">
        <div class="container header-top-container">
            <div class="logo">
                <img src="{{asset('landing_assets/logo/logo.png')}}" alt="LawFirm Logo">
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


                <!-- <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="info-content">
                        <h3>Jam Kerja</h3>
                        <p>Senin-Jumat: 08.00-17.00</p>
                    </div>
                </div> -->

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
                <li><a href="/" class="active">Home</a></li>
                <li><a href="/#about">About</a></li>
                <li><a href="/#service">Services</a></li>
                <li><a href="/#gallery">Gallery</a></li>
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
            <img src="{{asset('landing_assets/logo/logo.png')}}" alt="LawFirm Logo">
            <div class="logo-text">
                <h3>{{ $web->nama_perusahaan ?? 'SIAGIAN SUDIBYO & CO' }}</h3>
                <p>Lawyer & Law Firm</p>
            </div>
        </div>

        <ul style="margin-left: 20px; margin-right: 20px;">
            <li><a href="/" class="active">Home</a></li>
            <li><a href="/#about">About</a></li>
            <li><a href="/#service">Services</a></li>
            <li><a href="/#gallery">Gallery</a></li>
            <li><a href="/#attonery">Attorneys</a></li>
            <li><a href="/#contact">Contact</a></li>
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
        <div class="sidebar-footer mobile-only" style="padding: 1.5rem 20px; background-color: rgba(0,0,0,0.2); margin-top: auto; border-top: 1px solid rgba(255,255,255,0.1);">
            <!-- Layanan Kami Section -->
            <div class="footer-services" style="margin-bottom: 1.5rem;">
                <h4 style="color: white; margin-bottom: 0.8rem; font-size: 1rem; position: relative; padding-bottom: 5px;">
                    Layanan Kami
                    <span style="position: absolute; bottom: 0; left: 0; width: 40px; height: 2px; background-color: var(--secondary);"></span>
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
            <div class="footer-bottom" style="display: flex; flex-direction: column; align-items: center; margin-top: 1.5rem;">
                
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

                <div class="footer-links" style="display: flex; gap: 1rem; font-size: 0.75rem;">
                    <a href="#" style="color: rgba(255,255,255,0.7); text-decoration: none;">
                        Kebijakan Privasi
                    </a>
                    <span style="color: var(--secondary);">•</span>
                    <a href="#" style="color: rgba(255,255,255,0.7); text-decoration: none;">
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
                        <img src="{{($profile->profile->gambar) ? asset('storage') . '/' . $profile->profile->gambar : asset('own_assets/images/user.png')}}" alt="Law Firm Team"
                            style="width: 100%; border-radius: 5px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    </div>
                </div>

                <!-- About Content -->
                <div class="about-content" style="flex: 2; min-width: 300px;">
                    <span style="color: var(--secondary); font-weight: 600; letter-spacing: 1px;">TENTANG LAWYERS
                        KAMI</span>
                    <h2 style="font-size: 2.2rem; margin: 0.5rem 0 1.5rem; color: var(--primary); line-height: 1.3;">
                        {{$profile->name}}</h2>
                    <div style="font-family: 'Arial', sans-serif; line-height: 1.6; color: #555; max-width: 800px; margin: 0 auto;">
                        {!!$profile->profile->detail!!}</h2>
                    </div>

                    <!-- <div class="about-features" style="margin-bottom: 2rem;">
                            <div style="display: flex; gap: 1rem; margin-bottom: 1rem;">
                                <div style="color: var(--secondary); font-size: 1.2rem;">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div>
                                    <h3 style="margin: 0 0 0.3rem; font-size: 1.1rem; color: var(--primary);">Pendekatan
                                        Personal</h3>
                                    <p style="margin: 0; color: #555;">Setiap klien mendapatkan perhatian penuh dari tim
                                        ahli kami.</p>
                                </div>
                            </div>

                            <div style="display: flex; gap: 1rem; margin-bottom: 1rem;">
                                <div style="color: var(--secondary); font-size: 1.2rem;">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div>
                                    <h3 style="margin: 0 0 0.3rem; font-size: 1.1rem; color: var(--primary);">Solusi Kreatif
                                    </h3>
                                    <p style="margin: 0; color: #555;">Kami memberikan solusi hukum inovatif yang
                                        disesuaikan dengan kebutuhan klien.</p>
                                </div>
                            </div>

                            <div style="display: flex; gap: 1rem;">
                                <div style="color: var(--secondary); font-size: 1.2rem;">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div>
                                    <h3 style="margin: 0 0 0.3rem; font-size: 1.1rem; color: var(--primary);">Integritas
                                        Tinggi</h3>
                                    <p style="margin: 0; color: #555;">Prinsip kejujuran dan transparansi menjadi landasan
                                        setiap layanan kami.</p>
                                </div>
                            </div>
                        </div> -->
                </div>
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
                        <a href="https://wa.me/{{ $web->whatsapp ?? '081218473429' }}?text=Halo, saya ingin berkonsultasi mengenai layanan anda }}"
                            style="text-decoration: none; color: white; background-color: rgba(255,255,255,0.1); width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="mailto:{{ $web->email ?? 'mailto:lawyer@siagiansudibyoandcolawfirm.com' }}" target="_blank"
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
                            <a href="/#about"
                                style="color: rgba(255,255,255,0.8); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;">
                                <i class="fas fa-chevron-right"
                                    style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.8rem;"></i>
                                Tentang Kami
                            </a>
                        </li>
                        <li style="margin-bottom: 0.8rem;">
                            <a href="/#service"
                                style="color: rgba(255,255,255,0.8); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;">
                                <i class="fas fa-chevron-right"
                                    style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.8rem;"></i>
                                Layanan
                            </a>
                        </li>
                        <li style="margin-bottom: 0.8rem;">
                            <a href="#about"
                                style="color: rgba(255,255,255,0.8); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;">
                                <i class="fas fa-chevron-right"
                                    style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.8rem;"></i>
                                Galeri
                            </a>
                        </li>
                        <li style="margin-bottom: 0.8rem;">
                            <a href="/#attonery"
                                style="color: rgba(255,255,255,0.8); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;">
                                <i class="fas fa-chevron-right"
                                    style="color: var(--secondary); margin-right: 0.5rem; font-size: 0.8rem;"></i>
                                Tim Pengacara
                            </a>
                        </li>
                        <li style="margin-bottom: 0.8rem;">
                            <a href="/#contact"
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
                                <a href="/#service"
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
                                <a href="https://wa.me/{{ $web->whatsapp ?? '081218473429' }}?text=Halo, saya ingin berkonsultasi mengenai layanan {{ urlencode($layanan->judul) }}"
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
                            </div>
                        </li>
                        <li style="margin-bottom: 1rem; display: flex; align-items: center;">
                            <div style="color: var(--secondary); margin-right: 1rem; font-size: 1.2rem;">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
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
                    {{-- <span style="color: var(--secondary);">|</span>
                    <a href="#"
                        style="color: rgba(255,255,255,0.7); text-decoration: none; transition: all 0.3s ease;">Kebijakan
                        Privasi</a>
                    <span style="color: var(--secondary);">|</span>
                    <a href="#"
                        style="color: rgba(255,255,255,0.7); text-decoration: none; transition: all 0.3s ease;">Syarat
                        & Ketentuan</a> --}}
                </p>
            </div>
        </div>

        <!-- Back to Top Button -->
        <div class="back-to-top"
            style="position: fixed; bottom: 20px; right: 20px; background-color: var(--secondary); color: var(--primary); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; cursor: pointer; box-shadow: 0 2px 10px rgba(0,0,0,0.2); z-index: 99; opacity: 0; visibility: hidden; transition: all 0.3s ease;">
            <i class="fas fa-arrow-up"></i>
        </div>
    </footer>

    <!-- <script>
        // Mobile Menu Toggle
        const menuToggle = document.getElementById('menuToggle');
        const sidebarMenu = document.getElementById('sidebarMenu');
        const overlay = document.getElementById('overlay');
        
        menuToggle.addEventListener('click', function() {
            sidebarMenu.classList.toggle('active');
            overlay.classList.toggle('active');
        });
        
        overlay.addEventListener('click', function() {
            sidebarMenu.classList.remove('active');
            overlay.classList.remove('active');
        });
        
        // Simple Slider Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.slide');
            const dots = document.querySelectorAll('.slider-dot');
            let currentSlide = 0;
            
            // Function to change slide
            function changeSlide(newSlide) {
                slides[currentSlide].classList.remove('active');
                dots[currentSlide].classList.remove('active');
                
                currentSlide = (newSlide + slides.length) % slides.length;
                
                slides[currentSlide].classList.add('active');
                dots[currentSlide].classList.add('active');
            }
            
            // Dot click event
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    changeSlide(index);
                });
            });
            
            // Auto slide change every 5 seconds
            setInterval(() => {
                changeSlide(currentSlide + 1);
            }, 5000);
        });

        document.addEventListener('DOMContentLoaded', function() {
            // Alternatif: bisa juga menggunakan event listener
            const phoneNumbers = document.querySelectorAll('.clickable-phone');
            phoneNumbers.forEach(number => {
                number.addEventListener('click', function() {
                    window.location.href = 'tel:6281218473429';
                });
            });
        });
    </script>

    <script>
        // Back to Top Button
        const backToTopButton = document.querySelector('.back-to-top');
        
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopButton.style.opacity = '1';
                backToTopButton.style.visibility = 'visible';
            } else {
                backToTopButton.style.opacity = '0';
                backToTopButton.style.visibility = 'hidden';
            }
        });
        
        backToTopButton.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script> -->

    <script>
        // Enhanced Mobile Menu Functionality
        document.addEventListener('DOMContentLoaded', function () {
            const menuToggle = document.getElementById('menuToggle');
            const sidebarMenu = document.getElementById('sidebarMenu');
            const overlay = document.getElementById('overlay');
            const body = document.body;

            // Mobile Menu Toggle
            menuToggle.addEventListener('click', function (e) {
                e.stopPropagation();
                sidebarMenu.classList.toggle('active');
                overlay.classList.toggle('active');
                body.classList.toggle('no-scroll');

                // Change icon
                const icon = menuToggle.querySelector('i');
                if (sidebarMenu.classList.contains('active')) {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-times');
                } else {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            });

            // Close menu when clicking outside
            overlay.addEventListener('click', function () {
                sidebarMenu.classList.remove('active');
                overlay.classList.remove('active');
                body.classList.remove('no-scroll');
                menuToggle.querySelector('i').classList.remove('fa-times');
                menuToggle.querySelector('i').classList.add('fa-bars');
            });

            // Close menu when clicking on a link
            const sidebarLinks = document.querySelectorAll('.sidebar-menu a');
            sidebarLinks.forEach(link => {
                link.addEventListener('click', function () {
                    sidebarMenu.classList.remove('active');
                    overlay.classList.remove('active');
                    body.classList.remove('no-scroll');
                    menuToggle.querySelector('i').classList.remove('fa-times');
                    menuToggle.querySelector('i').classList.add('fa-bars');
                });
            });

            // Prevent body scroll when menu is open
            function preventBodyScroll(prevent) {
                if (prevent) {
                    body.style.overflow = 'hidden';
                    body.style.height = '100vh';
                } else {
                    body.style.overflow = '';
                    body.style.height = '';
                }
            }

            // Simple Slider Functionality
            const slides = document.querySelectorAll('.slide');
            const dots = document.querySelectorAll('.slider-dot');
            let currentSlide = 0;
            let slideInterval;

            // Function to change slide
            function changeSlide(newSlide) {
                slides[currentSlide].classList.remove('active');
                dots[currentSlide].classList.remove('active');

                currentSlide = (newSlide + slides.length) % slides.length;

                slides[currentSlide].classList.add('active');
                dots[currentSlide].classList.add('active');
            }

            // Dot click event
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    changeSlide(index);
                    resetSlideInterval();
                });
            });

            // Auto slide change every 5 seconds
            function startSlideInterval() {
                slideInterval = setInterval(() => {
                    changeSlide(currentSlide + 1);
                }, 5000);
            }

            function resetSlideInterval() {
                clearInterval(slideInterval);
                startSlideInterval();
            }

            startSlideInterval();

            // Pause slider on hover (for desktop)
            if (window.innerWidth > 767) {
                const slider = document.querySelector('.hero-slider');
                slider.addEventListener('mouseenter', () => {
                    clearInterval(slideInterval);
                });

                slider.addEventListener('mouseleave', () => {
                    startSlideInterval();
                });
            }

            // Clickable phone numbers
            const phoneNumbers = document.querySelectorAll('.clickable-phone');
            phoneNumbers.forEach(number => {
                number.addEventListener('click', function () {
                    window.location.href = 'tel:6281218473429';
                });

                // Add visual feedback
                number.addEventListener('touchstart', function () {
                    this.style.transform = 'scale(0.95)';
                });

                number.addEventListener('touchend', function () {
                    this.style.transform = '';
                });
            });

            // Back to Top Button
            const backToTopButton = document.querySelector('.back-to-top');

            window.addEventListener('scroll', function () {
                if (window.pageYOffset > 300) {
                    backToTopButton.style.opacity = '1';
                    backToTopButton.style.visibility = 'visible';
                } else {
                    backToTopButton.style.opacity = '0';
                    backToTopButton.style.visibility = 'hidden';
                }
            });

            backToTopButton.addEventListener('click', function () {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            // Add touch effect for buttons on mobile
            const buttons = document.querySelectorAll('.btn, .service-btn, .sidebar-contact-btn');
            buttons.forEach(button => {
                button.addEventListener('touchstart', function () {
                    this.style.transform = 'scale(0.95)';
                    this.style.opacity = '0.9';
                });

                button.addEventListener('touchend', function () {
                    this.style.transform = '';
                    this.style.opacity = '';
                });
            });
        });
    </script>
</body>

</html>