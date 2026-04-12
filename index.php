<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Akol Family - Home</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #4A3728;
        }
        
        /* Navigation */
        nav {
            background: rgba(251, 245, 236, 0.95);
            padding: 1rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            backdrop-filter: blur(5px);
        }
        
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #9E3D0F;
            text-decoration: none;
        }
        
        .nav-links {
            display: flex;
            gap: 1rem;
            list-style: none;
        }
        
        .nav-links a {
            text-decoration: none;
            color: #4A3728;
            padding: 0.5rem 1rem;
            transition: color 0.3s;
            font-weight: 500;
        }
        
        .nav-links a:hover {
            color: #C4631A;
        }
        
        /* Hero Section with Background Image */
        .hero {
            min-height: 100vh;
            background-image: url('https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=1600'); /* African landscape */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 100px 20px;
        }
        
        /* Dark overlay for better text readability */
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 900px;
            animation: fadeInUp 1s ease-out;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .hero h1 {
            font-size: 4.5rem;
            color: white;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        
        .hero h1 em {
            color: #C4631A;
            font-style: italic;
        }
        
        /* Welcome Message Box */
        .welcome-message {
            background: rgba(196, 99, 26, 0.9);
            padding: 20px 30px;
            border-radius: 60px;
            display: inline-block;
            margin-bottom: 30px;
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }
        
        .welcome-message p {
            color: white;
            font-size: 1.1rem;
            font-weight: 500;
            letter-spacing: 1px;
        }
        
        .welcome-message .wave {
            font-size: 1.3rem;
            display: inline-block;
            animation: wave 1s ease-in-out infinite;
        }
        
        @keyframes wave {
            0%, 100% { transform: rotate(0deg); }
            25% { transform: rotate(20deg); }
            75% { transform: rotate(-10deg); }
        }
        
        .hero p {
            font-size: 1.3rem;
            color: rgba(255,255,255,0.9);
            margin-bottom: 2rem;
            line-height: 1.6;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
        }
        
        .btn {
            display: inline-block;
            padding: 12px 30px;
            margin: 0 10px;
            text-decoration: none;
            border-radius: 50px;
            transition: all 0.3s;
            font-weight: 600;
        }
        
        .btn-primary {
            background: #C4631A;
            color: white;
            box-shadow: 0 4px 15px rgba(196,99,26,0.3);
        }
        
        .btn-primary:hover {
            background: #9E3D0F;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(196,99,26,0.4);
        }
        
        .btn-outline {
            border: 2px solid #C4631A;
            color: #C4631A;
            background: rgba(255,255,255,0.9);
        }
        
        .btn-outline:hover {
            background: #C4631A;
            color: white;
            transform: translateY(-3px);
        }
        
        /* Family Quote Section */
        .family-quote {
            padding: 60px 5%;
            background: #FBF5EC;
            text-align: center;
        }
        
        .family-quote .quote {
            max-width: 800px;
            margin: 0 auto;
            font-size: 1.5rem;
            font-style: italic;
            color: #4A3728;
            line-height: 1.6;
        }
        
        .family-quote .author {
            margin-top: 20px;
            font-size: 1rem;
            color: #C4631A;
            font-weight: 600;
        }
        
        /* Quick Links Section */
        .quick-links {
            padding: 60px 5%;
            background: white;
        }
        
        .quick-links h2 {
            text-align: center;
            font-size: 2rem;
            color: #4A3728;
            margin-bottom: 40px;
        }
        
        .links-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .link-card {
            background: #FBF5EC;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            transition: all 0.3s;
            text-decoration: none;
            display: block;
        }
        
        .link-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .link-card .icon {
            font-size: 3rem;
            margin-bottom: 15px;
        }
        
        .link-card h3 {
            color: #4A3728;
            margin-bottom: 10px;
        }
        
        .link-card p {
            color: #7A6654;
            font-size: 0.9rem;
        }
        
        /* Footer */
        footer {
            background: #0A0806;
            color: white;
            padding: 3rem 5% 2rem;
        }
        
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 2rem;
        }
        
        .footer-content h3, .footer-content h4 {
            margin-bottom: 1rem;
        }
        
        .footer-content a {
            color: #C4631A;
            text-decoration: none;
        }
        
        .footer-content p {
            line-height: 1.6;
            color: rgba(255,255,255,0.7);
        }
        
        .footer-bottom {
            text-align: center;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: rgba(255,255,255,0.3);
        }
        
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            .hero h1 {
                font-size: 2.5rem;
            }
            .hero p {
                font-size: 1rem;
            }
            .welcome-message p {
                font-size: 0.9rem;
            }
            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
            }
            .btn {
                margin: 10px;
                display: block;
            }
        }
    </style>
</head>
<body>

<!-- Navigation -->
<nav>
    <a href="index.php" class="logo">🪨 The Akols</a>
    <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="heritage.php">Heritage</a></li>
        <li><a href="family.php">Family</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="events.php">Events</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</nav>

<!-- Hero Section with Background Image -->
<section class="hero">
    <div class="hero-content">
        <!-- Welcome Message -->
        <div class="welcome-message">
            <p><span class="wave">👋🏿</span> Yoga! (Hello in Ateso) <span class="wave">🤝🏿</span></p>
        </div>
        
        <h1>The <em>Akol</em> Family</h1>
        
        <!-- Extended Welcome Message -->
        <div style="margin-bottom: 20px;">
            <p style="font-size: 1.5rem; font-weight: 500; color: #C4631A;">Karibu Nyero! Welcome to Our Home</p>
        </div>
        
        <p>Iteso by blood. Eastern Uganda by heart. Rooted in the red-soil plains of Teso, proud neighbours of the ancient Nyero Rock Paintings — a family building tomorrow while honouring yesterday.</p>
        
        <div style="margin-top: 30px;">
            <a href="family.php" class="btn btn-primary">Meet the Family</a>
            <a href="heritage.php" class="btn btn-outline">Explore Heritage</a>
        </div>
    </div>
</section>

<!-- Family Welcome Section -->
<section class="family-quote">
    <div class="quote">
        "On behalf of the entire Akol family, we warmly welcome you to our digital home. Whether you're a relative reconnecting, a visitor planning to see the Nyero Rock Paintings, or someone interested in our Iteso heritage - you are family here."
    </div>
    <div class="author">
        — Stephen & Immaculate Akol, Family Heads
    </div>
</section>

<!-- Quick Links Section -->
<section class="quick-links">
    <h2>Explore Our Family Story</h2>
    <div class="links-grid">
        <a href="about.php" class="link-card">
            <div class="icon">📖</div>
            <h3>Our Story</h3>
            <p>Learn about three generations of the Akol family and our deep roots in Nyero Subcounty</p>
        </a>
        <a href="heritage.php" class="link-card">
            <div class="icon">🪨</div>
            <h3>Nyero Heritage</h3>
            <p>Discover the ancient rock paintings that have watched over our family for centuries</p>
        </a>
        <a href="family.php" class="link-card">
            <div class="icon">👨‍👩‍👧‍👦</div>
            <h3>Meet the Family</h3>
            <p>Get to know Charles, Immaculate, David, Agnes, Emmanuel, and Mzee Omoding</p>
        </a>
        <a href="gallery.php" class="link-card">
            <div class="icon">📸</div>
            <h3>Photo Gallery</h3>
            <p>Browse through memories of harvests, graduations, and family celebrations</p>
        </a>
        <a href="events.php" class="link-card">
            <div class="icon">📅</div>
            <h3>Upcoming Events</h3>
            <p>Join us for family reunions, heritage days, and community gatherings</p>
        </a>
        <a href="contact.php" class="link-card">
            <div class="icon">✉️</div>
            <h3>Contact Us</h3>
            <p>Plan a visit to Nyero or send a message to the family</p>
        </a>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="footer-content">
        <div>
            <h3>🪨 The Akol Family</h3>
            <p>Rooted in Nyero Subcounty, Kumi Municipality, Eastern Uganda. Proud Iteso. Neighbours of Uganda's oldest rock art.</p>
        </div>
        <div>
            <h4>Quick Links</h4>
            <p><a href="index.php">Home</a></p>
            <p><a href="about.php">About Us</a></p>
            <p><a href="heritage.php">Nyero Heritage</a></p>
            <p><a href="family.php">Our Family</a></p>
        </div>
        <div>
            <h4>Connect</h4>
            <p><a href="gallery.php">Gallery</a></p>
            <p><a href="events.php">Events</a></p>
            <p><a href="contact.php">Contact</a></p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; <?php echo date("Y"); ?> The Akol Family - Koidike village, Koidike Parish, Nyero Subcounty, Kumi District, Eastern Uganda</p>
        <p style="margin-top: 10px;">🇺🇬 Proudly Ugandan | Iteso Heritage</p>
    </div>
</footer>

</body>
</html>