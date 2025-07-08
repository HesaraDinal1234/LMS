<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduLearn - Modern Learning Platform</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="CSS/homepage.css">
    <style>
        /* CSS for New Course Filters & Grid - Move this to your homepage.css file */
        .course-filters {
            margin: 30px 0;
            text-align: center;
        }

        .filter-btn {
            background-color: #f0f0f0;
            border: 1px solid #ddd;
            border-radius: 20px;
            padding: 8px 20px;
            margin: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s, color 0.3s;
        }

        .filter-btn:hover {
            background-color: #e0e0e0;
        }

        .filter-btn.active {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }

        .courses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 20px;
        }
        
        @media (max-width: 768px) {
            .courses-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }
        }
        
        .view-more {
            text-align: center;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav>
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                    <span>EduLearn</span>
                </div>
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#features">Services</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#courses">Explore Courses</a></li>
                </ul>
                <div class="auth-buttons">
                    <a href="login.php" class="btn btn-login">Login</a>
                    <a href="register.php" class="btn btn-register">Register</a>
                </div>
                <button class="mobile-nav-toggle" aria-label="Toggle navigation menu">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Advance Your Skills With Online Learning</h1>
                    <p>Join thousands of learners worldwide and gain access to high-quality courses from industry experts. Learn at your own pace, anytime, anywhere.</p>
                    <a href="#courses" class="btn-primary">Start Learning Today</a>
                </div>
                <div class="hero-image">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80" alt="Students learning online">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose Our Platform</h2>
                <p>We provide the best learning experience with our innovative features and expert instructors.</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-laptop" aria-hidden="true"></i>
                    </div>
                    <h3>Interactive Learning</h3>
                    <p>Engage with interactive content, quizzes, and hands-on projects that make learning effective and fun.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chalkboard-teacher" aria-hidden="true"></i>
                    </div>
                    <h3>Expert Instructors</h3>
                    <p>Learn from industry professionals with years of experience in their respective fields.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-certificate" aria-hidden="true"></i>
                    </div>
                    <h3>Certification</h3>
                    <p>Earn recognized certificates upon course completion to boost your career prospects.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Courses Section -->
    <section id="courses" class="courses">
        <div class="container">
            <div class="section-title">
                <h2>Popular Courses</h2>
                <p>Browse through our most popular courses and start your learning journey today.</p>
            </div>
            <!-- Course Filter Buttons will be inserted here by JavaScript -->
            <div class="courses-grid">
                <!-- Course 1 -->
                <div class="course-card" data-category="development">
                    <div class="course-image"><img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1472&q=80" alt="Web Development"></div>
                    <div class="course-content">
                        <span class="course-category">Development</span>
                        <h3>Complete Web Development Bootcamp</h3>
                        <div class="course-meta">
                            <span><i class="far fa-clock" aria-hidden="true"></i> 60 hours</span>
                            <span><i class="fas fa-user-graduate" aria-hidden="true"></i> 4.8 (1.2k)</span>
                        </div>
                    </div>
                </div>
                <!-- Course 2 -->
                <div class="course-card" data-category="datascience">
                    <div class="course-image"><img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Data Science"></div>
                    <div class="course-content">
                        <span class="course-category">Data Science</span>
                        <h3>Data Science & Machine Learning</h3>
                        <div class="course-meta">
                            <span><i class="far fa-clock" aria-hidden="true"></i> 80 hours</span>
                            <span><i class="fas fa-user-graduate" aria-hidden="true"></i> 4.9 (980)</span>
                        </div>
                    </div>
                </div>
                <!-- Course 3 -->
                <div class="course-card" data-category="marketing">
                    <div class="course-image"><img src="https://images.unsplash.com/photo-1606326608606-aa0b62935f2b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Digital Marketing"></div>
                    <div class="course-content">
                        <span class="course-category">Marketing</span>
                        <h3>Digital Marketing Masterclass</h3>
                        <div class="course-meta">
                            <span><i class="far fa-clock" aria-hidden="true"></i> 45 hours</span>
                            <span><i class="fas fa-user-graduate" aria-hidden="true"></i> 4.7 (850)</span>
                        </div>
                    </div>
                </div>
                <!-- Course 4 -->
                <div class="course-card" data-category="development">
                    <div class="course-image"><img src="https://images.unsplash.com/photo-1610563166150-b34df4f3bcd6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1376&q=80" alt="Mobile Development"></div>
                    <div class="course-content">
                        <span class="course-category">Development</span>
                        <h3>Mobile App Development</h3>
                        <div class="course-meta">
                            <span><i class="far fa-clock" aria-hidden="true"></i> 50 hours</span>
                            <span><i class="fas fa-user-graduate" aria-hidden="true"></i> 4.6 (720)</span>
                        </div>
                    </div>
                </div>
                <!-- Course 5 -->
                <div class="course-card" data-category="business">
                    <div class="course-image"><img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1415&q=80" alt="Business Analytics"></div>
                    <div class="course-content">
                        <span class="course-category">Business</span>
                        <h3>Business Analytics Fundamentals</h3>
                        <div class="course-meta">
                            <span><i class="far fa-clock" aria-hidden="true"></i> 35 hours</span>
                            <span><i class="fas fa-user-graduate" aria-hidden="true"></i> 4.5 (610)</span>
                        </div>
                    </div>
                </div>
                <!-- Course 6 -->
                <div class="course-card" data-category="design">
                    <div class="course-image"><img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="UI/UX Design"></div>
                    <div class="course-content">
                        <span class="course-category">Design</span>
                        <h3>UI/UX Design Principles</h3>
                        <div class="course-meta">
                            <span><i class="far fa-clock" aria-hidden="true"></i> 40 hours</span>
                            <span><i class="fas fa-user-graduate" aria-hidden="true"></i> 4.7 (890)</span>
                        </div>
                    </div>
                </div>
                <!-- Course 7 -->
                <div class="course-card" data-category="programming">
                    <div class="course-image"><img src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1632&q=80" alt="Python Programming"></div>
                    <div class="course-content">
                        <span class="course-category">Programming</span>
                        <h3>Python for Beginners</h3>
                        <div class="course-meta">
                            <span><i class="far fa-clock" aria-hidden="true"></i> 30 hours</span>
                            <span><i class="fas fa-user-graduate" aria-hidden="true"></i> 4.8 (1.1k)</span>
                        </div>
                    </div>
                </div>
                <!-- Course 8 -->
                <div class="course-card" data-category="technology">
                    <div class="course-image"><img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Cloud Computing"></div>
                    <div class="course-content">
                        <span class="course-category">Technology</span>
                        <h3>Cloud Computing with AWS</h3>
                        <div class="course-meta">
                            <span><i class="far fa-clock" aria-hidden="true"></i> 55 hours</span>
                            <span><i class="fas fa-user-graduate" aria-hidden="true"></i> 4.9 (950)</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- View More Button -->
            <div class="view-more">
                <a href="dashboard.php" class="btn-primary">View All Courses</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>About EduLearn</h3>
                    <p>EduLearn is a leading online learning platform committed to providing high-quality education to learners worldwide.</p>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#features">Services</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#courses">Courses</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Support</h3>
                    <ul class="footer-links">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Contact Us</h3>
                    <p><i class="fas fa-map-marker-alt" aria-hidden="true"></i> 123 Education St, Learning City</p>
                    <p><i class="fas fa-phone" aria-hidden="true"></i> +1 (123) 456-7890</p>
                    <p><i class="fas fa-envelope" aria-hidden="true"></i> info@edulearn.com</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2025 EduLearn. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // --- Basic Page Interactivity ---

            const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
            const navLinks = document.querySelector('.nav-links');
            
            mobileNavToggle.addEventListener('click', function() {
                navLinks.classList.toggle('active');
                this.classList.toggle('active');
            });

            document.querySelectorAll('.nav-links a').forEach(link => {
                link.addEventListener('click', () => {
                    if (navLinks.classList.contains('active')) {
                        navLinks.classList.remove('active');
                        mobileNavToggle.classList.remove('active');
                    }
                });
            });

            const courseCards = document.querySelectorAll('.course-card');
            courseCards.forEach(card => {
                card.addEventListener('mouseenter', () => card.classList.add('hover-effect'));
                card.addEventListener('mouseleave', () => card.classList.remove('hover-effect'));
            });

            const featureCards = document.querySelectorAll('.feature-card');
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });

            featureCards.forEach(card => {
                observer.observe(card);
            });

            document.querySelector('.footer-bottom p').textContent = 
                `© ${new Date().getFullYear()} EduLearn. All rights reserved.`;

            // --- NEW: Course Filtering Logic ---

            const courseSectionTitle = document.querySelector('#courses .section-title');
            const coursesGrid = document.querySelector('.courses-grid');
            const allCourses = Array.from(coursesGrid.querySelectorAll('.course-card'));
            
            // Create a set of unique categories from data attributes
            const categories = new Set(allCourses.map(course => course.dataset.category.toLowerCase()));

            // Create filter buttons container
            const filterButtonsContainer = document.createElement('div');
            filterButtonsContainer.className = 'course-filters';

            // Create "All" button
            let buttonsHTML = '<button class="filter-btn active" data-category="all">All</button>';
            
            // Create buttons for each unique category
            categories.forEach(category => {
                // Capitalize first letter for display
                const displayName = category.charAt(0).toUpperCase() + category.slice(1);
                buttonsHTML += `<button class="filter-btn" data-category="${category}">${displayName}</button>`;
            });

            filterButtonsContainer.innerHTML = buttonsHTML;
            
            // Insert the buttons after the section title
            courseSectionTitle.insertAdjacentElement('afterend', filterButtonsContainer);

            // Add event listener to the container for delegation
            filterButtonsContainer.addEventListener('click', (e) => {
                if (!e.target.matches('.filter-btn')) return; // Exit if a button wasn't clicked

                // Handle active button state
                filterButtonsContainer.querySelector('.active').classList.remove('active');
                e.target.classList.add('active');

                const selectedCategory = e.target.dataset.category;

                // Filter and display courses
                allCourses.forEach(course => {
                    const courseCategory = course.dataset.category.toLowerCase();
                    if (selectedCategory === 'all' || courseCategory === selectedCategory) {
                        course.style.display = 'block'; // Or 'grid', 'flex', etc. depending on your layout
                    } else {
                        course.style.display = 'none';
                    }
                });
            });
        });
    </script>
</body>
</html>