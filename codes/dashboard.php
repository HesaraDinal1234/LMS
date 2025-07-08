<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Courses - EduLearn</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Shared homepage styles -->
    <link rel="stylesheet" href="CSS/homepage.css">
    
    <!-- ADDED: Link to the new stylesheet for this page -->
    <link rel="stylesheet" href="CSS/dashboard.css">
    
    <!-- REMOVED: The entire inline <style> block has been moved to courses.css -->
</head>
<body>
    <!-- Navigation (Same as homepage) -->
    <nav>
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.html" style="text-decoration: none; color: inherit;">
                        <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                        <span>EduLearn</span>
                    </a>
                </div>
                <ul class="nav-links">
                    <li><a href="index.html#home">Home</a></li>
                    <li><a href="index.html#features">Services</a></li>
                    <li><a href="#">About Us</a></li>
                    <!-- MODIFIED: Added 'active' class to show this is the current page -->
                    <li><a href="#courses" class="active">Explore Courses</a></li>
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

    <!-- Main Courses Section -->
    <main>
        <!-- REMOVED: Inline style="padding-top: 50px;" is now in courses.css -->
        <section id="courses" class="courses">
            <div class="container">
                <div class="section-title">
                    <h2>Explore All Our Courses</h2>
                    <p>Find the perfect course to boost your skills and advance your career.</p>
                </div>
                <!-- Course Filter Buttons will be inserted here by JavaScript -->
                <div class="courses-grid">
                    <!-- FIX: HTML is now properly formatted for readability -->
                    <div class="course-card" data-category="development">
                        <div class="course-image"><img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085" alt="Web Development"></div>
                        <div class="course-content">
                            <span class="course-category">Development</span>
                            <h3>Complete Web Development Bootcamp</h3>
                            <div class="course-meta">
                                <span><i class="far fa-clock" aria-hidden="true"></i> 60 hours</span>
                                <span><i class="fas fa-user-graduate" aria-hidden="true"></i> 4.8 (1.2k)</span>
                            </div>
                        </div>
                    </div>
                    <div class="course-card" data-category="datascience">
                        <div class="course-image"><img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71" alt="Data Science"></div>
                        <div class="course-content">
                            <span class="course-category">Data Science</span>
                            <h3>Data Science & Machine Learning</h3>
                            <div class="course-meta">
                                <span><i class="far fa-clock" aria-hidden="true"></i> 80 hours</span>
                                <span><i class="fas fa-user-graduate" aria-hidden="true"></i> 4.9 (980)</span>
                            </div>
                        </div>
                    </div>
                    <div class="course-card" data-category="marketing">
                        <div class="course-image"><img src="https://images.unsplash.com/photo-1606326608606-aa0b62935f2b" alt="Digital Marketing"></div>
                        <div class="course-content">
                            <span class="course-category">Marketing</span>
                            <h3>Digital Marketing Masterclass</h3>
                            <div class="course-meta">
                                <span><i class="far fa-clock" aria-hidden="true"></i> 45 hours</span>
                                <span><i class="fas fa-user-graduate" aria-hidden="true"></i> 4.7 (850)</span>
                            </div>
                        </div>
                    </div>
                    <div class="course-card" data-category="development">
                        <div class="course-image"><img src="https://images.unsplash.com/photo-1610563166150-b34df4f3bcd6" alt="Mobile Development"></div>
                        <div class="course-content">
                            <span class="course-category">Development</span>
                            <h3>Mobile App Development</h3>
                            <div class="course-meta">
                                <span><i class="far fa-clock" aria-hidden="true"></i> 50 hours</span>
                                <span><i class="fas fa-user-graduate" aria-hidden="true"></i> 4.6 (720)</span>
                            </div>
                        </div>
                    </div>
                    <div class="course-card" data-category="business">
                        <div class="course-image"><img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f" alt="Business Analytics"></div>
                        <div class="course-content">
                            <span class="course-category">Business</span>
                            <h3>Business Analytics Fundamentals</h3>
                            <div class="course-meta">
                                <span><i class="far fa-clock" aria-hidden="true"></i> 35 hours</span>
                                <span><i class="fas fa-user-graduate" aria-hidden="true"></i> 4.5 (610)</span>
                            </div>
                        </div>
                    </div>
                    <div class="course-card" data-category="design">
                        <div class="course-image"><img src="https://images.unsplash.com/photo-1552664730-d307ca884978" alt="UI/UX Design"></div>
                        <div class="course-content">
                            <span class="course-category">Design</span>
                            <h3>UI/UX Design Principles</h3>
                            <div class="course-meta">
                                <span><i class="far fa-clock" aria-hidden="true"></i> 40 hours</span>
                                <span><i class="fas fa-user-graduate" aria-hidden="true"></i> 4.7 (890)</span>
                            </div>
                        </div>
                    </div>
                    <div class="course-card" data-category="programming">
                        <div class="course-image"><img src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45" alt="Python Programming"></div>
                        <div class="course-content">
                            <span class="course-category">Programming</span>
                            <h3>Python for Beginners</h3>
                            <div class="course-meta">
                                <span><i class="far fa-clock" aria-hidden="true"></i> 30 hours</span>
                                <span><i class="fas fa-user-graduate" aria-hidden="true"></i> 4.8 (1.1k)</span>
                            </div>
                        </div>
                    </div>
                    <div class="course-card" data-category="technology">
                        <div class="course-image"><img src="https://images.unsplash.com/photo-1563986768609-322da13575f3" alt="Cloud Computing"></div>
                        <div class="course-content">
                            <span class="course-category">Technology</span>
                            <h3>Cloud Computing with AWS</h3>
                            <div class="course-meta">
                                <span><i class="far fa-clock" aria-hidden="true"></i> 55 hours</span>
                                <span><i class="fas fa-user-graduate" aria-hidden="true"></i> 4.9 (950)</span>
                            </div>
                        </div>
                    </div>
                    <div class="course-card" data-category="business">
                        <div class="course-image"><img src="https://images.unsplash.com/photo-1542744095-291d1f67b221" alt="Project Management"></div>
                        <div class="course-content">
                            <span class="course-category">Business</span>
                            <h3>Agile Project Management</h3>
                            <div class="course-meta">
                                <span><i class="far fa-clock" aria-hidden="true"></i> 25 hours</span>
                                <span><i class="fas fa-user-graduate" aria-hidden="true"></i> 4.7 (550)</span>
                            </div>
                        </div>
                    </div>
                    <div class="course-card" data-category="design">
                        <div class="course-image"><img src="https://images.unsplash.com/photo-1522542550221-35fd19575a2d" alt="Graphic Design"></div>
                        <div class="course-content">
                            <span class="course-category">Design</span>
                            <h3>Graphic Design for Beginners</h3>
                            <div class="course-meta">
                                <span><i class="far fa-clock" aria-hidden="true"></i> 30 hours</span>
                                <span><i class="fas fa-user-graduate" aria-hidden="true"></i> 4.6 (680)</span>
                            </div>
                        </div>
                    </div>
                     <div class="course-card" data-category="programming">
                        <div class="course-image"><img src="https://images.unsplash.com/photo-1627398242454-45a1465c2479" alt="JavaScript"></div>
                        <div class="course-content">
                            <span class="course-category">Programming</span>
                            <h3>Advanced JavaScript Concepts</h3>
                            <div class="course-meta">
                                <span><i class="far fa-clock" aria-hidden="true"></i> 40 hours</span>
                                <span><i class="fas fa-user-graduate" aria-hidden="true"></i> 4.9 (1.5k)</span>
                            </div>
                        </div>
                    </div>
                     <div class="course-card" data-category="marketing">
                        <div class="course-image"><img src="https://images.unsplash.com/photo-1557862921-37829c790f19" alt="SEO"></div>
                        <div class="course-content">
                            <span class="course-category">Marketing</span>
                            <h3>SEO Fundamentals & Strategy</h3>
                            <div class="course-meta">
                                <span><i class="far fa-clock" aria-hidden="true"></i> 20 hours</span>
                                <span><i class="fas fa-user-graduate" aria-hidden="true"></i> 4.8 (710)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer (Same as homepage) -->
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
                        <li><a href="index.html#home">Home</a></li>
                        <li><a href="index.html#features">Services</a></li>
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
        // No changes needed to the script. It is already correct.
        document.addEventListener('DOMContentLoaded', function() {
            const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
            const navLinks = document.querySelector('.nav-links');
            mobileNavToggle.addEventListener('click', function() {
                navLinks.classList.toggle('active');
                this.classList.toggle('active');
            });

            document.querySelector('.footer-bottom p').textContent = 
                `© ${new Date().getFullYear()} EduLearn. All rights reserved.`;

            const courseSectionTitle = document.querySelector('#courses .section-title');
            const coursesGrid = document.querySelector('.courses-grid');
            const allCourses = Array.from(coursesGrid.querySelectorAll('.course-card'));
            
            const categories = new Set(allCourses.map(course => course.dataset.category.toLowerCase()));

            const filterButtonsContainer = document.createElement('div');
            filterButtonsContainer.className = 'course-filters';

            let buttonsHTML = '<button class="filter-btn active" data-category="all">All</button>';
            categories.forEach(category => {
                const displayName = category.charAt(0).toUpperCase() + category.slice(1);
                buttonsHTML += `<button class="filter-btn" data-category="${category}">${displayName}</button>`;
            });
            filterButtonsContainer.innerHTML = buttonsHTML;
            courseSectionTitle.insertAdjacentElement('afterend', filterButtonsContainer);

            filterButtonsContainer.addEventListener('click', (e) => {
                if (!e.target.matches('.filter-btn')) return;
                filterButtonsContainer.querySelector('.active').classList.remove('active');
                e.target.classList.add('active');
                const selectedCategory = e.target.dataset.category;
                allCourses.forEach(course => {
                    const courseCategory = course.dataset.category.toLowerCase();
                    if (selectedCategory === 'all' || courseCategory === selectedCategory) {
                        course.style.display = 'block';
                    } else {
                        course.style.display = 'none';
                    }
                });
            });
        });
    </script>
</body>
</html>