<!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-brand">
                <h3>TABERA</h3>
                <p>Menemukan ketenangan dalam secangkir kopi dan hidangan lezat di jantung Cilacap. Setiap cangkir, setiap gigitan, diciptakan dengan passion.</p>
            </div>
            <div class="footer-section">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Contact</h4>
                <ul>
                    <li><a href="https://wa.me/<?php echo $business_data['whatsapp']; ?>">WhatsApp</a></li>
                    <li><a href="https://www.instagram.com/<?php echo $business_data['instagram']; ?>">Instagram</a></li>
                    <li><a href="#contact">Location</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Hours</h4>
                <ul>
                    <li>Mon - Sun</li>
                    <li><?php echo $business_data['hours']; ?></li>
                    <li><?php echo $business_data['city']; ?>, Jawa Tengah</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php echo $business_data['name']; ?>. Crafted with ❤️ in Cilacap.</p>
        </div>
    </footer>

    <!-- Link ke JavaScript -->
    <script src="assets/js/main.js"></script>
</body>
</html>