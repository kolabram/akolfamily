<footer class="site-footer">
    <div class="footer-content">
        <div class="footer-brand">
            <div class="brand-name">🪨 The Akol Family</div>
            <p>Rooted in Nyero Subcounty, Kumi Municipality, Eastern Uganda.<br>Proud Iteso. Neighbours of Uganda's oldest rock art.</p>
        </div>
        
        <div class="footer-col">
            <h4>Pages</h4>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="heritage.php">Nyero Heritage</a></li>
                <li><a href="family.php">Our Family</a></li>
            </ul>
        </div>
        
        <div class="footer-col">
            <h4>More</h4>
            <ul>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
        
        <div class="footer-col">
            <h4>Location</h4>
            <ul>
                <li><a href="heritage.php">Nyero Subcounty</a></li>
                <li><a href="contact.php">Kumi Municipality</a></li>
                <li><a href="contact.php">Kumi District</a></li>
                <li><a href="heritage.php">Eastern Uganda</a></li>
            </ul>
        </div>
    </div>
    
    <div class="footer-bottom">
        <p>&copy; <?php echo date("Y"); ?> The Akol Family — Nyero Subcounty, Kumi District, Eastern Uganda.</p>
    </div>
</footer>

<style>
    .site-footer {
        background: #0A0806;
        color: white;
        padding: 3rem 5% 2rem;
        margin-top: 0;
    }
    
    .footer-content {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 2fr 1fr 1fr 1fr;
        gap: 2rem;
    }
    
    .brand-name {
        font-size: 1.3rem;
        font-weight: bold;
        color: #C4631A;
        margin-bottom: 0.5rem;
    }
    
    .footer-brand p {
        font-size: 0.85rem;
        color: rgba(255,255,255,0.5);
        line-height: 1.6;
    }
    
    .footer-col h4 {
        font-size: 0.85rem;
        font-weight: 600;
        color: #C4631A;
        margin-bottom: 1rem;
        letter-spacing: 1px;
    }
    
    .footer-col ul {
        list-style: none;
        padding: 0;
    }
    
    .footer-col li {
        margin-bottom: 0.5rem;
    }
    
    .footer-col a {
        color: rgba(255,255,255,0.5);
        text-decoration: none;
        font-size: 0.85rem;
        transition: color 0.3s;
    }
    
    .footer-col a:hover {
        color: #C4631A;
    }
    
    .footer-bottom {
        max-width: 1200px;
        margin: 2rem auto 0;
        padding-top: 1.5rem;
        text-align: center;
        border-top: 1px solid rgba(255,255,255,0.1);
        font-size: 0.75rem;
        color: rgba(255,255,255,0.3);
    }
    
    @media (max-width: 768px) {
        .footer-content {
            grid-template-columns: 1fr;
            text-align: center;
            gap: 1.5rem;
        }
        
        .footer-col ul {
            text-align: center;
        }
    }
</style>