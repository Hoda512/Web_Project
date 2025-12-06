<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharaonic Artifacts - Egyptian Heritage Explorer</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700;900&family=Lato:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/HomeStyle.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <i class="fas fa-landmark"></i>
                <span>Egyptian Heritage Explorer</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <button class="btn btn-custom"><a href="login.php" style="color: white; text-decoration: none;">Login</a></button>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <section class="page-header">
        <div class="page-header-content" data-aos="fade-up">
            <h1>Pharaonic Era</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html" style="color: rgba(255,255,255,0.8); text-decoration: none;">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" style="color: rgba(255,255,255,0.8); text-decoration: none;">Categories</a></li>
                    <li class="breadcrumb-item active">Pharaonic</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content-section">
        <div class="container">
            <div class="row g-4">
                
                <!-- Sidebar Filters -->
                <div class="col-lg-3" data-aos="fade-right">
                    <aside class="filters-sidebar">
                        <div class="filter-group">
                            <div class="filter-title">
                                <i class="fas fa-search"></i>
                                <span>Search</span>
                            </div>
                            <input type="text" class="search-box" placeholder="Artifact name...">
                        </div>

                        <div class="filter-group">
                            <div class="filter-title">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Location</span>
                            </div>
                            <select class="filter-select">
                                <option value="">All Locations</option>
                                <option value="cairo">Egyptian Museum, Cairo</option>
                                <option value="luxor">Luxor Museum</option>
                                <option value="london">British Museum</option>
                            </select>
                        </div>

                        <div class="filter-group">
                            <div class="filter-title">
                                <i class="fas fa-hourglass-half"></i>
                                <span>Period</span>
                            </div>
                            <label class="checkbox-item">
                                <input type="checkbox" checked>
                                <span>Old Kingdom</span>
                            </label>
                            <label class="checkbox-item">
                                <input type="checkbox" checked>
                                <span>New Kingdom</span>
                            </label>
                            <label class="checkbox-item">
                                <input type="checkbox">
                                <span>Ptolemaic</span>
                            </label>
                        </div>

                        <button class="btn-apply-filters">Apply Filters</button>
                    </aside>
                </div>

                <!-- Main Content Area -->
                <div class="col-lg-9">
                    <div class="results-header" data-aos="fade-left">
                        <span class="results-count">Showing 1-6 of 24 Artifacts</span>
                        <select class="sort-select">
                            <option>Sort by: Newest Added</option>
                            <option>Sort by: Oldest Age</option>
                            <option>Sort by: Name A-Z</option>
                        </select>
                    </div>

                    <div class="row g-4">
                        <!-- Artifact Card 1 -->
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="artifact-card">
                                <div class="artifact-img-container">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e3/Tutanchamun_Maske.jpg/800px-Tutanchamun_Maske.jpg" alt="Tutankhamun" class="artifact-img">
                                    <span class="artifact-badge">XVIII Dynasty</span>
                                </div>
                                <div class="artifact-body">
                                    <h3 class="artifact-title">Mask of Tutankhamun</h3>
                                    <p class="artifact-desc">The iconic gold death mask of the 18th-dynasty ancient Egyptian Pharaoh.</p>
                                    <a href="details.html" class="btn-view">View Details</a>
                                </div>
                            </div>
                        </div>

                        <!-- Artifact Card 2 -->
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="artifact-card">
                                <div class="artifact-img-container">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Nofretete_Neues_Museum.jpg/640px-Nofretete_Neues_Museum.jpg" alt="Nefertiti" class="artifact-img">
                                    <span class="artifact-badge">Amarna Period</span>
                                </div>
                                <div class="artifact-body">
                                    <h3 class="artifact-title">Bust of Nefertiti</h3>
                                    <p class="artifact-desc">A painted stucco-coated limestone bust of the Great Royal Wife of Akhenaten.</p>
                                    <a href="#" class="btn-view">View Details</a>
                                </div>
                            </div>
                        </div>

                        <!-- Artifact Card 3 -->
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="artifact-card">
                                <div class="artifact-img-container">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/23/Rosetta_Stone.JPG/640px-Rosetta_Stone.JPG" alt="Rosetta Stone" class="artifact-img">
                                    <span class="artifact-badge">Ptolemaic</span>
                                </div>
                                <div class="artifact-body">
                                    <h3 class="artifact-title">The Rosetta Stone</h3>
                                    <p class="artifact-desc">Stele inscribed with a decree in three scripts: Hieroglyphic, Demotic, and Greek.</p>
                                    <a href="#" class="btn-view">View Details</a>
                                </div>
                            </div>
                        </div>

                        <!-- Artifact Card 4 -->
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="artifact-card">
                                <div class="artifact-img-container">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6d/The_Great_Sphinx_of_Giza_-20080716a.jpg/640px-The_Great_Sphinx_of_Giza-_20080716a.jpg" alt="Sphinx" class="artifact-img">
                                    <span class="artifact-badge">Old Kingdom</span>
                                </div>
                                <div class="artifact-body">
                                    <h3 class="artifact-title">Great Sphinx of Giza</h3>
                                    <p class="artifact-desc">A limestone statue of a reclining sphinx, a mythical creature.</p>
                                    <a href="#" class="btn-view">View Details</a>
                                </div>
                            </div>
                        </div>

                        <!-- Artifact Card 5 -->
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="artifact-card">
                                <div class="artifact-img-container">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Narmer_Palette.jpg/640px-Narmer_Palette.jpg" alt="Narmer Palette" class="artifact-img">
                                    <span class="artifact-badge">Early Dynastic</span>
                                </div>
                                <div class="artifact-body">
                                    <h3 class="artifact-title">Narmer Palette</h3>
                                    <p class="artifact-desc">Contains some of the earliest hieroglyphic inscriptions ever found.</p>
                                    <a href="#" class="btn-view">View Details</a>
                                </div>
                            </div>
                        </div>

                        <!-- Artifact Card 6 -->
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="artifact-card">
                                <div class="artifact-img-container">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Anubis_standing.JPG/640px-Anubis_standing.JPG" alt="Anubis" class="artifact-img">
                                    <span class="artifact-badge">New Kingdom</span>
                                </div>
                                <div class="artifact-body">
                                    <h3 class="artifact-title">Statue of Anubis</h3>
                                    <p class="artifact-desc">The jackal-headed god associated with mummification and the afterlife.</p>
                                    <a href="#" class="btn-view">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="pagination" data-aos="fade-up">
                        <div class="page-item"><i class="fas fa-chevron-left"></i></div>
                        <div class="page-item active">1</div>
                        <div class="page-item">2</div>
                        <div class="page-item">3</div>
                        <div class="page-item"><i class="fas fa-chevron-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p style="margin: 0; opacity: 0.8;">&copy; 2025 Egyptian Heritage Explorer. All Rights Reserved.</p>
        </div>
    </footer>

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
    </script>
</body>
</html>