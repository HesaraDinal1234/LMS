<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="CSS/dashboard.css">
</head>
<body>
    <!-- Navigation (same as before) -->
    <nav>
        <div class="container">
            <div class="navbar">
                <a href="#" class="logo">
                    <i class="fas fa-graduation-cap"></i>EduDash
                </a>
                
                <ul class="nav-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#" class="active">Courses</a></li>
                    <li><a href="#">Progress</a></li>
                    <li><a href="#">Resources</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                
                <div class="auth-buttons">
                    <a href="#" class="btn btn-login">Log In</a>
                    <a href="#" class="btn btn-register">Sign Up</a>
                </div>
                
                <button class="mobile-nav-toggle">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Dashboard Main Content -->
    <section class="courses">
        <div class="container">
            <div class="dashboard-header">
                <div>
                    <h2>My Courses Dashboard</h2>
                    <p>Browse and manage all your courses in one place</p>
                </div>
                <div class="search-filter">
                    <input type="text" id="searchInput" placeholder="Search courses..." onkeyup="filterCourses()">
                    <select id="categoryFilter" onchange="filterCourses()">
                        <option value="all">All Categories</option>
                        <option value="Web Development">Web Development</option>
                        <option value="Data Science">Data Science</option>
                        <option value="Design">Design</option>
                        <option value="Business">Business</option>
                        <option value="Mobile Development">Mobile Development</option>
                        <option value="Cloud Computing">Cloud Computing</option>
                        <option value="Cybersecurity">Cybersecurity</option>
                        <option value="AI & Machine Learning">AI & Machine Learning</option>
                    </select>
                </div>
            </div>
            
            <div class="courses-grid" id="coursesContainer">
                <!-- Course Card 1 - Web Development -->
                <div class="course-card" data-category="Web Development" data-search="javascript mastery">
                    <div class="course-image">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="JavaScript Course">
                    </div>
                    <div class="course-content">
                        <span class="course-category">Web Development</span>
                        <h3>Complete JavaScript Mastery</h3>
                        <p>Master modern JavaScript from scratch with this comprehensive course covering ES6+, Node.js, and frameworks.</p>
                        <div class="progress-indicator">
                            <div class="progress-bar" style="width: 75%"></div>
                        </div>
                        <div class="course-meta">
                            <span><i class="fas fa-book-open"></i> 12 Modules</span>
                            <span><i class="fas fa-clock"></i> 32 Hours</span>
                        </div>
                        <div class="course-actions">
                            <a href="#" class="btn btn-enroll">Continue</a>
                            <a href="#" class="btn btn-view">Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course Card 2 - Data Science -->
                <div class="course-card" data-category="Data Science" data-search="python data analysis">
                    <div class="course-image">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Data Science">
                    </div>
                    <div class="course-content">
                        <span class="course-category">Data Science</span>
                        <h3>Python for Data Analysis</h3>
                        <p>Learn how to use Python, Pandas, and NumPy for effective data analysis and visualization.</p>
                        <div class="progress-indicator">
                            <div class="progress-bar" style="width: 40%"></div>
                        </div>
                        <div class="course-meta">
                            <span><i class="fas fa-book-open"></i> 8 Modules</span>
                            <span><i class="fas fa-clock"></i> 24 Hours</span>
                        </div>
                        <div class="course-actions">
                            <a href="#" class="btn btn-enroll">Continue</a>
                            <a href="#" class="btn btn-view">Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course Card 3 - Design -->
                <div class="course-card" data-category="Design" data-search="ui ux design">
                    <div class="course-image">
                        <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="UI/UX Design">
                    </div>
                    <div class="course-content">
                        <span class="course-category">Design</span>
                        <h3>UI/UX Design Fundamentals</h3>
                        <p>Learn the principles of user interface and experience design with practical projects.</p>
                        <div class="progress-indicator">
                            <div class="progress-bar" style="width: 15%"></div>
                        </div>
                        <div class="course-meta">
                            <span><i class="fas fa-book-open"></i> 6 Modules</span>
                            <span><i class="fas fa-clock"></i> 18 Hours</span>
                        </div>
                        <div class="course-actions">
                            <a href="#" class="btn btn-enroll">Start</a>
                            <a href="#" class="btn btn-view">Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course Card 4 - Web Development -->
                <div class="course-card" data-category="Web Development" data-search="react js">
                    <div class="course-image">
                        <img src="https://images.unsplash.com/photo-1633356122544-f134324a6cee?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="React JS">
                    </div>
                    <div class="course-content">
                        <span class="course-category">Web Development</span>
                        <h3>React.js Complete Guide</h3>
                        <p>Build modern web applications with React, Redux, and React Router.</p>
                        <div class="progress-indicator">
                            <div class="progress-bar" style="width: 0%"></div>
                        </div>
                        <div class="course-meta">
                            <span><i class="fas fa-book-open"></i> 10 Modules</span>
                            <span><i class="fas fa-clock"></i> 28 Hours</span>
                        </div>
                        <div class="course-actions">
                            <a href="#" class="btn btn-enroll">Start</a>
                            <a href="#" class="btn btn-view">Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course Card 5 - Business -->
                <div class="course-card" data-category="Business" data-search="digital marketing">
                    <div class="course-image">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Digital Marketing">
                    </div>
                    <div class="course-content">
                        <span class="course-category">Business</span>
                        <h3>Digital Marketing Strategy</h3>
                        <p>Learn how to create and implement effective digital marketing campaigns.</p>
                        <div class="progress-indicator">
                            <div class="progress-bar" style="width: 90%"></div>
                        </div>
                        <div class="course-meta">
                            <span><i class="fas fa-book-open"></i> 7 Modules</span>
                            <span><i class="fas fa-clock"></i> 20 Hours</span>
                        </div>
                        <div class="course-actions">
                            <a href="#" class="btn btn-enroll">Continue</a>
                            <a href="#" class="btn btn-view">Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course Card 6 - Web Development -->
                <div class="course-card" data-category="Web Development" data-search="node js backend">
                    <div class="course-image">
                        <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Node JS">
                    </div>
                    <div class="course-content">
                        <span class="course-category">Web Development</span>
                        <h3>Node.js Backend Development</h3>
                        <p>Build scalable server-side applications with Node.js, Express, and MongoDB.</p>
                        <div class="progress-indicator">
                            <div class="progress-bar" style="width: 60%"></div>
                        </div>
                        <div class="course-meta">
                            <span><i class="fas fa-book-open"></i> 9 Modules</span>
                            <span><i class="fas fa-clock"></i> 26 Hours</span>
                        </div>
                        <div class="course-actions">
                            <a href="#" class="btn btn-enroll">Continue</a>
                            <a href="#" class="btn btn-view">Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course Card 7 - Mobile Development -->
                <div class="course-card" data-category="Mobile Development" data-search="flutter app development">
                    <div class="course-image">
                        <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Flutter">
                    </div>
                    <div class="course-content">
                        <span class="course-category">Mobile Development</span>
                        <h3>Flutter App Development</h3>
                        <p>Build beautiful, natively compiled applications for mobile, web, and desktop from a single codebase.</p>
                        <div class="progress-indicator">
                            <div class="progress-bar" style="width: 30%"></div>
                        </div>
                        <div class="course-meta">
                            <span><i class="fas fa-book-open"></i> 11 Modules</span>
                            <span><i class="fas fa-clock"></i> 35 Hours</span>
                        </div>
                        <div class="course-actions">
                            <a href="#" class="btn btn-enroll">Continue</a>
                            <a href="#" class="btn btn-view">Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course Card 8 - Cloud Computing -->
                <div class="course-card" data-category="Cloud Computing" data-search="aws certified solutions architect">
                    <div class="course-image">
                        <img src="https://images.unsplash.com/photo-1620712943543-bcc4688e7485?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="AWS Cloud">
                    </div>
                    <div class="course-content">
                        <span class="course-category">Cloud Computing</span>
                        <h3>AWS Certified Solutions Architect</h3>
                        <p>Learn how to design distributed systems on AWS platform and prepare for the certification exam.</p>
                        <div class="progress-indicator">
                            <div class="progress-bar" style="width: 10%"></div>
                        </div>
                        <div class="course-meta">
                            <span><i class="fas fa-book-open"></i> 14 Modules</span>
                            <span><i class="fas fa-clock"></i> 40 Hours</span>
                        </div>
                        <div class="course-actions">
                            <a href="#" class="btn btn-enroll">Start</a>
                            <a href="#" class="btn btn-view">Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course Card 9 - Cybersecurity -->
                <div class="course-card" data-category="Cybersecurity" data-search="ethical hacking">
                    <div class="course-image">
                        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Ethical Hacking">
                    </div>
                    <div class="course-content">
                        <span class="course-category">Cybersecurity</span>
                        <h3>Ethical Hacking Fundamentals</h3>
                        <p>Learn penetration testing and ethical hacking techniques to secure systems and networks.</p>
                        <div class="progress-indicator">
                            <div class="progress-bar" style="width: 5%"></div>
                        </div>
                        <div class="course-meta">
                            <span><i class="fas fa-book-open"></i> 9 Modules</span>
                            <span><i class="fas fa-clock"></i> 30 Hours</span>
                        </div>
                        <div class="course-actions">
                            <a href="#" class="btn btn-enroll">Start</a>
                            <a href="#" class="btn btn-view">Details</a>
                        </div>
                    </div>
                </div>

                <!-- Course Card 10 - AI & Machine Learning -->
                <div class="course-card" data-category="AI & Machine Learning" data-search="machine learning python">
                    <div class="course-image">
                        <img src="https://images.unsplash.com/photo-1559028012-481c04fa702d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Machine Learning">
                    </div>
                    <div class="course-content">
                        <span class="course-category">AI & Machine Learning</span>
                        <h3>Machine Learning with Python</h3>
                        <p>Build machine learning models using Python, TensorFlow, and scikit-learn for real-world applications.</p>
                        <div class="progress-indicator">
                            <div class="progress-bar" style="width: 25%"></div>
                        </div>
                        <div class="course-meta">
                            <span><i class="fas fa-book-open"></i> 10 Modules</span>
                            <span><i class="fas fa-clock"></i> 36 Hours</span>
                        </div>
                        <div class="course-actions">
                            <a href="#" class="btn btn-enroll">Continue</a>
                            <a href="#" class="btn btn-view">Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer (same as before) -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>About EduDash</h3>
                    <p>EduDash is a modern learning platform that helps you acquire new skills and advance your career.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Courses</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Blog</a></li>
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
                    <p><i class="fas fa-phone"></i> (123) 456-7890</p>
                    <p><i class="fas fa-envelope"></i> info@edudash.com</p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2023 EduDash. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile navigation toggle
        document.querySelector('.mobile-nav-toggle').addEventListener('click', function() {
            this.classList.toggle('active');
            document.querySelector('.nav-links').classList.toggle('active');
        });
        
        // Animate course cards on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const courseCards = document.querySelectorAll('.course-card');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('hover-effect');
                    }
                });
            }, { threshold: 0.1 });
            
            courseCards.forEach(card => {
                observer.observe(card);
            });
        });

        // Filter courses function
        function filterCourses() {
            const searchInput = document.getElementById('searchInput').value.toLowerCase();
            const categoryFilter = document.getElementById('categoryFilter').value;
            const courses = document.querySelectorAll('.course-card');
            
            courses.forEach(course => {
                const courseText = course.getAttribute('data-search').toLowerCase();
                const courseCategory = course.getAttribute('data-category');
                
                const matchesSearch = courseText.includes(searchInput);
                const matchesCategory = categoryFilter === 'all' || courseCategory === categoryFilter;
                
                if (matchesSearch && matchesCategory) {
                    course.style.display = 'block';
                } else {
                    course.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>