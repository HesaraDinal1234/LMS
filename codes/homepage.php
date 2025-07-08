<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduLearn - Modern Learning Platform</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="CSS/homepage.css">
</head>
<body>
    <!-- Navigation -->
    <nav>
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <i class="fas fa-graduation-cap"></i>
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
                <!-- Mobile Nav Toggle Button (Hamburger) -->
                <div class="mobile-nav-toggle">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
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
                        <i class="fas fa-laptop"></i>
                    </div>
                    <h3>Interactive Learning</h3>
                    <p>Engage with interactive content, quizzes, and hands-on projects that make learning effective and fun.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <h3>Expert Instructors</h3>
                    <p>Learn from industry professionals with years of experience in their respective fields.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-certificate"></i>
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
            <div class="courses-grid">
                <div class="course-card">
                    <div class="course-image">
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1472&q=80" alt="Web Development">
                    </div>
                    <div class="course-content">
                        <span class="course-category">Development</span>
                        <h3>Complete Web Development Bootcamp</h3>
                        <div class="course-meta">
                            <span><i class="far fa-clock"></i> 60 hours</span>
                            <span><i class="fas fa-user-graduate"></i> 4.8 (1.2k)</span>
                        </div>
                    </div>
                </div>
                <div class="course-card">
                    <div class="course-image">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Data Science">
                    </div>
                    <div class="course-content">
                        <span class="course-category">Data Science</span>
                        <h3>Data Science & Machine Learning</h3>
                        <div class="course-meta">
                            <span><i class="far fa-clock"></i> 80 hours</span>
                            <span><i class="fas fa-user-graduate"></i> 4.9 (980)</span>
                        </div>
                    </div>
                </div>
                <div class="course-card">
                    <div class="course-image">
                        <img src="https://images.unsplash.com/photo-1606326608606-aa0b62935f2b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Digital Marketing">
                    </div>
                    <div class="course-content">
                        <span class="course-category">Marketing</span>
                        <h3>Digital Marketing Masterclass</h3>
                        <div class="course-meta">
                            <span><i class="far fa-clock"></i> 45 hours</span>
                            <span><i class="fas fa-user-graduate"></i> 4.7 (850)</span>
                        </div>
                    </div>
                </div>
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
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
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
                    <p><i class="fas fa-map-marker-alt"></i> 123 Education St, Learning City</p>
                    <p><i class="fas fa-phone"></i> +1 (123) 456-7890</p>
                    <p><i class="fas fa-envelope"></i> info@edulearn.com</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2025 EduLearn. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
            const navLinks = document.querySelector('.nav-links');
            
            // Mobile Navigation Toggle
            mobileNavToggle.addEventListener('click', function() {
                navLinks.classList.toggle('active');
                this.classList.toggle('active');
            });

            // Close mobile menu when a link is clicked
            document.querySelectorAll('.nav-links a').forEach(link => {
                link.addEventListener('click', () => {
                    if (navLinks.classList.contains('active')) {
                        navLinks.classList.remove('active');
                        mobileNavToggle.classList.remove('active');
                    }
                });
            });

            // Add hover effect to course cards using class toggle
            const courseCards = document.querySelectorAll('.course-card');
            courseCards.forEach(card => {
                card.addEventListener('mouseenter', () => card.classList.add('hover-effect'));
                card.addEventListener('mouseleave', () => card.classList.remove('hover-effect'));
            });

            // Add animation to feature cards on scroll using Intersection Observer
            const featureCards = document.querySelectorAll('.feature-card');
            const observerOptions = {
                root: null, // viewport
                threshold: 0.1, // trigger when 10% of the element is visible
                rootMargin: '0px'
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target); // Stop observing after animation
                    }
                });
            }, observerOptions);

            featureCards.forEach(card => {
                observer.observe(card);
            });

            // Update footer year to be current
            document.querySelector('.footer-bottom p').textContent = 
                `© ${new Date().getFullYear()} EduLearn. All rights reserved.`;
        });
    </script>
</body>
</html>