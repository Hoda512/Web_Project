<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Egyptian Heritage Explorer</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700;900&family=Lato:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/IndexStyle.css">
    
    
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-landmark"></i>
                <span>Egyptian Heritage Explorer</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="Home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#categories">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-us">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <button class="btn btn-custom"><a href="login.php" style="color: white; text-decoration: none;">Login</a></button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-pattern"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="hero-content" data-aos="fade-up" data-aos-duration="1000">
                        <h1>Unearth the Stories of the Nile</h1>
                        <p>A unified digital guide to explore Egypt's Pharaonic, Roman, Islamic, Coptic, and modern heritage</p>
                        <div class="hero-buttons">
                            <a href="#categories" class="btn btn-custom">Explore Categories</a>
                            <a href="#about-us" class="btn btn-outline-light">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="categories-section" id="categories">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Eras of Civilization</h2>
                <p>Select a historical period to begin your journey</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="category-card">
                        <div class="card-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1503177119275-0aa32b3a9368?q=80&w=800&auto=format&fit=crop" alt="Pharaonic Era">
                            <div class="card-img-overlay-icon">
                                <i class="fas fa-monument"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Pharaonic Era</h3>
                            <p>Explore the age of pyramids, mighty pharaohs, and timeless monuments</p>
                            <a href="#" class="card-link">
                                View Artifacts <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="category-card">
                        <div class="card-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1565594101833-286ae6163351?q=80&w=800&auto=format&fit=crop" alt="Roman Period">
                            <div class="card-img-overlay-icon">
                                <i class="fas fa-columns"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Roman Period</h3>
                            <p>Discover the fusion of Egyptian and Greco-Roman art and architecture</p>
                            <a href="#" class="card-link">
                                View Artifacts <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="category-card">
                        <div class="card-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1553913861-c0fddf26bc71?q=80&w=800&auto=format&fit=crop" alt="Islamic Era">
                            <div class="card-img-overlay-icon">
                                <i class="fas fa-mosque"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Islamic Era</h3>
                            <p>The golden age of minarets, intricate geometric patterns, and citadels</p>
                            <a href="#" class="card-link">
                                View Artifacts <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="category-card">
                        <div class="card-img-wrapper">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR616L_yM-4eICl3P66r4yK5yQYwV3Cg7C3hA&s" alt="Coptic Heritage">
                            <div class="card-img-overlay-icon">
                                <i class="fas fa-cross"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Coptic Heritage</h3>
                            <p>Ancient churches, monasteries, and icons from Egypt's Christian history</p>
                            <a href="#" class="card-link">
                                View Artifacts <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="category-card">
                        <div class="card-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1572252009286-268acec5ca0a?q=80&w=800&auto=format&fit=crop" alt="Modern Egypt">
                            <div class="card-img-overlay-icon">
                                <i class="fas fa-city"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Modern Egypt</h3>
                            <p>From the Khedival era architecture to contemporary cultural symbols</p>
                            <a href="#" class="card-link">
                                View Artifacts <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="category-card">
                        <div class="card-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1590423021966-234237748873?q=80&w=800&auto=format&fit=crop" alt="Museums & Sites">
                            <div class="card-img-overlay-icon">
                                <i class="fas fa-university"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Museums & Sites</h3>
                            <p>Explore collections housed in Egypt's greatest museums</p>
                            <a href="#" class="card-link">
                                View Artifacts <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about-us" class="about-section">
    <footer>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <h4 class="footer-title">Egyptian Heritage Explorer</h4>
                    <p style="opacity: 0.8; line-height: 1.8;">
                        Preserving history for future generations through a unified and sophisticated digital experience
                    </p>
                </div>
                
                <div class="col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <h4 class="footer-title">Explore</h4>
                    <ul class="footer-links">
                        <li><a href="#">Pharaonic</a></li>
                        <li><a href="#">Islamic</a></li>
                        <li><a href="#">Coptic</a></li>
                        <li><a href="#">Modern</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <h4 class="footer-title">Connect</h4>
                    <ul class="footer-links">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Team</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <h4 class="footer-title">Follow Us</h4>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="copyright">
                &copy; 2025 Egyptian Heritage Explorer. All Rights Reserved.
            </div>
        </div>
    </footer>
</section>
    <!-- Scroll to Top Button -->
    <div class="scroll-top" id="scrollTop">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });
        
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
            
            // Scroll to top button
            const scrollTop = document.getElementById('scrollTop');
            if (window.scrollY > 300) {
                scrollTop.classList.add('show');
            } else {
                scrollTop.classList.remove('show');
            }
        });
        
        // Scroll to top functionality
        document.getElementById('scrollTop').addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (href !== '#' && document.querySelector(href)) {
                    e.preventDefault();
                    document.querySelector(href).scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>