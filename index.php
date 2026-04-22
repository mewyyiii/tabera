<?php 
    // Data bisnis untuk kemudahan pengelolaan
    $business_data = [
        'name' => 'Tabera Coffee & Eatery',
        'instagram' => 'tabera.coffee.eatery',
        'city' => 'Cilacap',
        'address' => 'Jl. Sulawesi ruko Palm Regency No.2, Tanjungsari, Gunungsimping, Kec. Cilacap Tengah, Kabupaten Cilacap, Jawa Tengah 53211',
        'hours' => '11.00 - 22.00',
        'whatsapp' => '6281578249222',
        'price_range' => 'Rp 25.000 – 50.000',
        'gmaps_query' => 'Tabera Coffee & Eatery Cilacap',
    ];

    include 'includes/header.php'; 
?>

<!-- Loader -->
<div class="loader" id="loader">
    <div class="loader-text">TABERA</div>
    <div class="loader-bar">
        <div class="loader-progress"></div>
    </div>
</div>

<!-- Custom Cursor -->
<div class="cursor"></div>
<div class="cursor-follower"></div>

<!-- Hero Section -->
<section class="hero" id="home">
    <div class="hero-bg">
        <div class="floating-shapes">
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
    </div>
    <div class="hero-content">
        <div class="hero-text">
            <span></span><br>
            <h1 class="hero-title"> <br>
                COFFEE<br>
                <span>&</span>
                EATERY
            </h1>
            <p class="hero-subtitle">
                Menemukan ketenangan dalam secangkir kopi dan hidangan lezat di jantung Cilacap
            </p>
            <div class="hero-stats">
                <div class="stat-item">
                    <span class="stat-number">2.9K+</span>
                    <span class="stat-label">Followers</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">11-22</span>
                    <span class="stat-label">Open Daily</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">25K</span>
                    <span class="stat-label">Start From</span>
                </div>
            </div>
            <div class="hero-cta">
                <a href="#menu" class="btn btn-primary">
                    <span>Explore Menu</span>
                </a>
                <a href="https://wa.me/<?php echo $business_data['whatsapp']; ?>" target="_blank" class="btn btn-outline">
                    <span>Order Now</span>
                </a>
            </div>
        </div>
        <div class="hero-visual"><br>
            <div class="image-grid">
                <div class="img-block">
                    <img src="assets/img/5.jpg" alt="Coffee">
                </div>
                <div class="img-block">
                    <img src="assets/img/6.jpg" alt="Interior">
                </div>
                <div class="img-block">
                    <img src="assets/img/2.jpg" alt="Food">
                </div>
            </div>
            <div class="floating-badge">
                <div class="badge-icon">☕</div>
                <div class="badge-text">FRESH</div>
                <div class="badge-subtext">Daily Roasted</div>
            </div>
        </div>
    </div>
    <div class="scroll-indicator">
        <span class="scroll-text">Scroll</span>
        <div class="scroll-line"></div>
    </div>
</section>

<!-- About Section -->
<section class="about" id="about">
    <div class="section-label">Our Story</div>
    <h2 class="section-title">CRAFTING MOMENTS</h2>
    <div class="about-grid reveal">
        <div class="about-image">
            <img src="assets/img/1.jpg" alt="Tabera Interior" class="about-img-main">
            <img src="assets/img/13.jpg" alt="Coffee Art" class="about-img-float">
        </div>
        <div class="about-text">
            <h3>Setiap Cangkir Menceritakan Kisahnya</h3>
            <p>Berlokasi di jantung kota Cilacap, Tabera Coffee & Eatery hadir sebagai tempat pilihan untuk Anda bersantai dan menikmati momen. Kami menyediakan suasana yang nyaman dan tenang, cocok untuk bekerja, bertemu teman, atau sekadar melepas penat.</p>
            <p>Kami menyajikan berbagai pilihan kopi yang diracik dengan teliti serta beragam hidangan pendamping yang siap memanjakan lidah. Setiap sudut dari tempat kami dirancang untuk memberikan pengalaman yang berkesan bagi setiap pengunjung.</p>
            <div class="info-cards">
                <div class="info-card">
                    <strong>📍 Lokasi</strong>
                    <p><?php echo $business_data['address']; ?></p>
                </div>
                <div class="info-card">
                    <strong>⏰ Jam Buka</strong>
                    <p><?php echo $business_data['hours']; ?> WIB (Setiap Hari)</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Menu Section -->
<section class="menu" id="menu">
    <div class="section-label">Our Menu</div>
    <h2 class="section-title">SIGNATURE SELECTION</h2>
    <div class="menu-container">
        <div class="menu-filter">
            <button class="filter-btn active">All</button>
            <button class="filter-btn">Coffee</button>
            <button class="filter-btn">Food</button>
            <button class="filter-btn">Beverages</button>
        </div>
        <div class="menu-grid">
            <div class="menu-card reveal">
                <img src="assets/img/21.jpg" alt="Kopi Aren Latte" class="menu-img">
                <div class="menu-info">
                    <div class="menu-category">Coffee</div>
                    <h3 class="menu-name">Kopi Susu Gula Aren</h3>
                    <p class="menu-desc">Espresso, susu segar, dan manisnya gula aren alami</p>
                    <div class="menu-footer">
                        <span class="menu-price">28K</span>
                    </div>
                </div>
            </div>
            <div class="menu-card reveal">
                <img src="https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?w=600&q=80" alt="Americano" class="menu-img">
                <div class="menu-info">
                    <div class="menu-category">Coffee</div>
                    <h3 class="menu-name">Americano</h3>
                    <p class="menu-desc">Shot espresso klasik dengan tambahan air panas</p>
                    <div class="menu-footer">
                        <span class="menu-price">25K</span>
                    </div>
                </div>
            </div>
            <div class="menu-card reveal">
                <img src="assets/img/17.jpg" alt="Pannacotta Strawbery" class="menu-img">
                <div class="menu-info">
                    <div class="menu-category">Food</div>
                    <h3 class="menu-name">Pannacotta Strawbery</h3>
                    <p class="menu-desc">Puding lembut dan creamy dengan eskrim dan selai stroberi </p>
                    <div class="menu-footer">
                        <span class="menu-price">25K</span>
                    </div>
                </div>
            </div>
            <div class="menu-card reveal">
                <img src="assets/img/23.jpg" alt="Mie Kari" class="menu-img">
                <div class="menu-info">
                    <div class="menu-category">Food</div>
                    <h3 class="menu-name">Mie Kari</h3>
                    <p class="menu-desc">Mie dengan kuah kari khas tabera</p>
                    <div class="menu-footer">
                        <span class="menu-price">25K</span>
                    </div>
                </div>
            </div>
            <div class="menu-card reveal">
                <img src="assets/img/18.png" alt="Matcha Latte" class="menu-img">
                <div class="menu-info">
                    <div class="menu-category">Beverages</div>
                    <h3 class="menu-name">Matcha Latte</h3>
                    <p class="menu-desc">Minuman dingin dari bubuk matcha premium dan susu</p>
                    <div class="menu-footer">
                        <span class="menu-price">22K</span>
                    </div>
                </div>
            </div>
            <div class="menu-card reveal">
                <img src="assets/img/22.jpg" alt="Ribbon Croissant" class="menu-img">
                <div class="menu-info">
                    <div class="menu-category">Food</div>
                    <h3 class="menu-name">Ribbon Croissant</h3>
                    <p class="menu-desc">Kentang goreng renyah disajikan dengan saus pilihan</p>
                    <div class="menu-footer">
                        <span class="menu-price">26K</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="gallery" id="gallery">
    <div class="section-label">Our Space</div>
    <h2 class="section-title">GALLERY & AMBIANCE</h2>
    <div class="gallery-grid reveal">
        <div class="gallery-item">
            <img src="assets/img/14.jpg" alt="Gallery 1">
        </div>
        <div class="gallery-item">
            <img src="assets/img/10.jpg" alt="Gallery 2">
        </div>
        <div class="gallery-item">
            <img src="assets/img/19.jpg" alt="Gallery 3">
        </div>
        <div class="gallery-item">
            <img src="assets/img/20.jpg" alt="Gallery 4">
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact" id="contact">
    <div class="section-label">Get In Touch</div>
    <h2 class="section-title">VISIT US TODAY</h2>
    <div class="contact-container">
        <div class="contact-grid reveal">
            <a href="https://wa.me/<?php echo $business_data['whatsapp']; ?>" target="_blank" class="contact-card">
                <svg class="contact-icon" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2m.01 1.67c2.2 0 4.26.86 5.82 2.42a8.225 8.225 0 0 1 2.41 5.83c0 4.54-3.7 8.23-8.24 8.23-1.48 0-2.93-.39-4.19-1.15l-.3-.17-3.12.82.83-3.04-.2-.32a8.188 8.188 0 0 1-1.26-4.38c.01-4.54 3.7-8.24 8.25-8.24M8.53 7.33c-.16 0-.43.06-.66.31-.22.25-.87.86-.87 2.07 0 1.22.89 2.39 1 2.56.14.17 1.76 2.67 4.25 3.73.59.27 1.05.42 1.41.53.59.19 1.13.16 1.56.1.48-.07 1.46-.6 1.67-1.18.21-.58.21-1.07.15-1.18-.07-.1-.23-.16-.48-.27-.25-.14-1.47-.74-1.69-.82-.23-.08-.37-.12-.56.12-.16.25-.64.81-.78.97-.15.17-.29.19-.53.07-.26-.13-1.06-.39-2-1.23-.74-.66-1.23-1.47-1.38-1.72-.12-.24-.01-.39.11-.5.11-.11.27-.29.37-.44.13-.14.17-.25.25-.41.08-.17.04-.31-.02-.43-.06-.11-.56-1.35-.77-1.84-.2-.48-.4-.42-.56-.43-.14 0-.3-.01-.47-.01z"/>
                </svg>
                <h4>WhatsApp</h4>
                <p>081578249222</p>
            </a>
            <a href="https://www.instagram.com/<?php echo $business_data['instagram']; ?>" target="_blank" class="contact-card">
                <svg class="contact-icon" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4H7.6m9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8 1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5 5 5 0 0 1-5 5 5 5 0 0 1-5-5 5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3z"/>
                </svg>
                <h4>Instagram</h4>
                <p>@<?php echo $business_data['instagram']; ?></p>
            </a>
            <div class="contact-card">
                <svg class="contact-icon" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 20a8 8 0 0 0 8-8 8 8 0 0 0-8-8 8 8 0 0 0-8 8 8 8 0 0 0 8 8m0-18a10 10 0 0 1 10 10 10 10 0 0 1-10 10C6.47 22 2 17.5 2 12A10 10 0 0 1 12 2m.5 5v5.25l4.5 2.67-.75 1.23L11 13V7h1.5z"/>
                </svg>
                <h4>Jam Buka</h4>
                <p><?php echo $business_data['hours']; ?> WIB</p>
            </div>
            <div class="contact-card">
                <svg class="contact-icon" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 11.5A2.5 2.5 0 0 1 9.5 9 2.5 2.5 0 0 1 12 6.5 2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7z"/>
                </svg>
                <h4>Cilacap</h4>
                <p>Ruko Palm Regency</p>
            </div>
        </div>
        <div class="map-wrapper reveal">
            <iframe src="https://maps.google.com/maps?q=<?php echo urlencode($business_data['gmaps_query']); ?>&t=&z=16&ie=UTF8&iwloc=&output=embed" allowfullscreen loading="lazy"></iframe>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>