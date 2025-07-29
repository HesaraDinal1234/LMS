<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="CSS/admindashboard.css">
    <!-- <style>
        /* CSS will go here */
       
    </style> -->
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <h3>LMS Admin</h3>
        </div>
        <div class="sidebar-menu">
            <a href="#" class="active" id="dashboard-link">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
            <a href="#" id="courses-link">
                <i class="fas fa-fw fa-book"></i>
                <span>Courses</span>
            </a>
            <a href="#" id="instructors-link">
                <i class="fas fa-fw fa-chalkboard-teacher"></i>
                <span>Instructors</span>
            </a>
            <a href="#" id="students-link">
                <i class="fas fa-fw fa-users"></i>
                <span>Students</span>
            </a>
            <a href="#" id="payments-link">
                <i class="fas fa-fw fa-credit-card"></i>
                <span>Payments</span>
            </a>
            <a href="#" id="reports-link">
                <i class="fas fa-fw fa-chart-bar"></i>
                <span>Reports</span>
            </a>
            <a href="#" id="settings-link">
                <i class="fas fa-fw fa-cog"></i>
                <span>Settings</span>
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Navbar -->
        <div class="top-navbar">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
            <div class="user-menu">
                <img src="https://via.placeholder.com/40" alt="User">
                <span>Admin User</span>
            </div>
        </div>

        <!-- Dashboard Content -->
        <div id="dashboard-content">
            <!-- Stats Cards -->
            <div class="row" style="display: flex; flex-wrap: wrap; gap: 1.5rem; margin-bottom: 1.5rem;">
                <div class="card stat-card primary" style="flex: 1; min-width: 200px;">
                    <div class="stat-title">Total Courses</div>
                    <div class="stat-value" id="total-courses">24</div>
                </div>
                <div class="card stat-card success" style="flex: 1; min-width: 200px;">
                    <div class="stat-title">Active Students</div>
                    <div class="stat-value" id="total-students">1,234</div>
                </div>
                <div class="card stat-card warning" style="flex: 1; min-width: 200px;">
                    <div class="stat-title">Instructors</div>
                    <div class="stat-value" id="total-instructors">15</div>
                </div>
                <div class="card stat-card danger" style="flex: 1; min-width: 200px;">
                    <div class="stat-title">Monthly Revenue</div>
                    <div class="stat-value" id="monthly-revenue">$12,345</div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="card">
                <div class="card-header">
                    Recent Activity
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Action</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody id="activity-table">
                            <!-- Will be populated by JavaScript -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Courses Content (Hidden by default) -->
        <div id="courses-content" style="display: none;">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>All Courses</span>
                    <button class="btn btn-primary" id="add-course-btn">Add New Course</button>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Instructor</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="courses-table">
                            <!-- Will be populated by JavaScript -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Add Course Modal -->
        <div id="add-course-modal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000; justify-content: center; align-items: center;">
            <div class="card" style="width: 80%; max-width: 800px; max-height: 90vh; overflow-y: auto;">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Add New Course</span>
                    <button class="btn btn-danger btn-sm" id="close-course-modal">X</button>
                </div>
                <div class="card-body">
                    <form id="course-form">
                        <div class="form-group">
                            <label for="course-title">Course Title</label>
                            <input type="text" class="form-control" id="course-title" required>
                        </div>
                        <div class="form-group">
                            <label for="course-description">Description</label>
                            <textarea class="form-control" id="course-description" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="course-category">Category</label>
                            <select class="form-control" id="course-category" required>
                                <option value="">Select Category</option>
                                <option value="programming">Programming</option>
                                <option value="business">Business</option>
                                <option value="design">Design</option>
                                <option value="marketing">Marketing</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="course-instructor">Instructor</label>
                            <select class="form-control" id="course-instructor" required>
                                <option value="">Select Instructor</option>
                                <!-- Will be populated by JavaScript -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="course-price">Price ($)</label>
                            <input type="number" class="form-control" id="course-price" min="0" step="0.01" required>
                        </div>
                        <div class="form-group">
                            <label for="course-thumbnail">Thumbnail Image</label>
                            <input type="file" class="form-control" id="course-thumbnail">
                        </div>
                        <div class="form-group">
                            <label>Course Content</label>
                            <div id="course-sections">
                                <!-- Sections will be added here -->
                            </div>
                            <button type="button" class="btn btn-primary btn-sm mt-2" id="add-section-btn">Add Section</button>
                        </div>
                        <div class="form-group">
                            <label for="course-status">Status</label>
                            <select class="form-control" id="course-status" required>
                                <option value="draft">Draft</option>
                                <option value="published">Published</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Course</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Instructors Content (Hidden by default) -->
        <div id="instructors-content" style="display: none;">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>All Instructors</span>
                    <button class="btn btn-primary" id="add-instructor-btn">Add New Instructor</button>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Courses</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="instructors-table">
                            <!-- Will be populated by JavaScript -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Add Instructor Modal -->
        <div id="add-instructor-modal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000; justify-content: center; align-items: center;">
            <div class="card" style="width: 80%; max-width: 600px;">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Add New Instructor</span>
                    <button class="btn btn-danger btn-sm" id="close-instructor-modal">X</button>
                </div>
                <div class="card-body">
                    <form id="instructor-form">
                        <div class="form-group">
                            <label for="instructor-name">Full Name</label>
                            <input type="text" class="form-control" id="instructor-name" required>
                        </div>
                        <div class="form-group">
                            <label for="instructor-email">Email</label>
                            <input type="email" class="form-control" id="instructor-email" required>
                        </div>
                        <div class="form-group">
                            <label for="instructor-password">Password</label>
                            <input type="password" class="form-control" id="instructor-password" required>
                        </div>
                        <div class="form-group">
                            <label for="instructor-bio">Bio</label>
                            <textarea class="form-control" id="instructor-bio" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="instructor-expertise">Expertise (comma separated)</label>
                            <input type="text" class="form-control" id="instructor-expertise" placeholder="e.g., Web Development, Data Science">
                        </div>
                        <div class="form-group">
                            <label for="instructor-avatar">Profile Picture</label>
                            <input type="file" class="form-control" id="instructor-avatar">
                        </div>
                        <button type="submit" class="btn btn-primary">Save Instructor</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Other sections (Students, Payments, etc.) would go here -->
        <div id="students-content" style="display: none;">
            <!-- Students content would be similar to instructors -->
        </div>
    </div>

    <script>
        // JavaScript will go here
        document.addEventListener('DOMContentLoaded', function() {
            // Navigation
            const navLinks = document.querySelectorAll('.sidebar-menu a');
            const contentSections = {
                'dashboard-link': 'dashboard-content',
                'courses-link': 'courses-content',
                'instructors-link': 'instructors-content',
                'students-link': 'students-content'
            };
            
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Remove active class from all links
                    navLinks.forEach(navLink => navLink.classList.remove('active'));
                    
                    // Add active class to clicked link
                    this.classList.add('active');
                    
                    // Hide all content sections
                    Object.values(contentSections).forEach(section => {
                        document.getElementById(section).style.display = 'none';
                    });
                    
                    // Show the selected content section
                    const sectionId = contentSections[this.id];
                    if (sectionId) {
                        document.getElementById(sectionId).style.display = 'block';
                    }
                    
                    // Update page title
                    const pageTitle = document.querySelector('.page-title h1');
                    pageTitle.textContent = this.querySelector('span').textContent;
                });
            });
            
            // Mock data for demonstration
            const mockCourses = [
                { id: 1, title: 'Introduction to JavaScript', instructor: 'John Doe', price: 49.99, status: 'published' },
                { id: 2, title: 'Advanced React', instructor: 'Jane Smith', price: 79.99, status: 'published' },
                { id: 3, title: 'Python for Beginners', instructor: 'Mike Johnson', price: 59.99, status: 'draft' }
            ];
            
            const mockInstructors = [
                { id: 1, name: 'John Doe', email: 'john@example.com', courses: 5, status: 'active' },
                { id: 2, name: 'Jane Smith', email: 'jane@example.com', courses: 3, status: 'active' },
                { id: 3, name: 'Mike Johnson', email: 'mike@example.com', courses: 2, status: 'inactive' }
            ];
            
            const mockActivity = [
                { id: 1, user: 'student1@example.com', action: 'Purchased "Introduction to JavaScript"', time: '10 mins ago' },
                { id: 2, user: 'instructor2@example.com', action: 'Created new course "Advanced React"', time: '1 hour ago' },
                { id: 3, user: 'admin@example.com', action: 'Updated system settings', time: '2 hours ago' }
            ];
            
            // Populate tables with mock data
            function populateTables() {
                // Activity table
                const activityTable = document.getElementById('activity-table');
                activityTable.innerHTML = mockActivity.map(activity => `
                    <tr>
                        <td>${activity.id}</td>
                        <td>${activity.user}</td>
                        <td>${activity.action}</td>
                        <td>${activity.time}</td>
                    </tr>
                `).join('');
                
                // Courses table
                const coursesTable = document.getElementById('courses-table');
                coursesTable.innerHTML = mockCourses.map(course => `
                    <tr>
                        <td>${course.id}</td>
                        <td>${course.title}</td>
                        <td>${course.instructor}</td>
                        <td>$${course.price.toFixed(2)}</td>
                        <td><span class="badge ${course.status === 'published' ? 'badge-success' : 'badge-warning'}">${course.status}</span></td>
                        <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                `).join('');
                
                // Instructors table
                const instructorsTable = document.getElementById('instructors-table');
                instructorsTable.innerHTML = mockInstructors.map(instructor => `
                    <tr>
                        <td>${instructor.id}</td>
                        <td>${instructor.name}</td>
                        <td>${instructor.email}</td>
                        <td>${instructor.courses}</td>
                        <td><span class="badge ${instructor.status === 'active' ? 'badge-success' : 'badge-danger'}">${instructor.status}</span></td>
                        <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                `).join('');
                
                // Populate instructor dropdown in course form
                const instructorDropdown = document.getElementById('course-instructor');
                instructorDropdown.innerHTML = '<option value="">Select Instructor</option>' + 
                    mockInstructors.map(instructor => `
                        <option value="${instructor.id}">${instructor.name}</option>
                    `).join('');
            }
            
            // Modal handling
            document.getElementById('add-course-btn').addEventListener('click', function() {
                document.getElementById('add-course-modal').style.display = 'flex';
            });
            
            document.getElementById('close-course-modal').addEventListener('click', function() {
                document.getElementById('add-course-modal').style.display = 'none';
            });
            
            document.getElementById('add-instructor-btn').addEventListener('click', function() {
                document.getElementById('add-instructor-modal').style.display = 'flex';
            });
            
            document.getElementById('close-instructor-modal').addEventListener('click', function() {
                document.getElementById('add-instructor-modal').style.display = 'none';
            });
            
            // Add section button
            document.getElementById('add-section-btn').addEventListener('click', function() {
                const sectionId = Date.now();
                const sectionsContainer = document.getElementById('course-sections');
                
                const sectionHtml = `
                    <div class="card mb-3 section-item" data-id="${sectionId}">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <input type="text" class="form-control section-title" placeholder="Section Title" required>
                            <button type="button" class="btn btn-danger btn-sm remove-section">X</button>
                        </div>
                        <div class="card-body">
                            <div class="lessons-container">
                                <!-- Lessons will be added here -->
                            </div>
                            <button type="button" class="btn btn-primary btn-sm mt-2 add-lesson" data-section="${sectionId}">Add Lesson</button>
                        </div>
                    </div>
                `;
                
                sectionsContainer.insertAdjacentHTML('beforeend', sectionHtml);
            });
            
            // Delegated event for removing sections
            document.addEventListener('click', function(e) {
                if (e.target.classList.contains('remove-section')) {
                    e.target.closest('.section-item').remove();
                }
                
                if (e.target.classList.contains('add-lesson')) {
                    const sectionId = e.target.getAttribute('data-section');
                    const lessonsContainer = e.target.previousElementSibling;
                    const lessonId = Date.now();
                    
                    const lessonHtml = `
                        <div class="form-group lesson-item" data-id="${lessonId}">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <input type="text" class="form-control lesson-title" placeholder="Lesson Title" required>
                                <button type="button" class="btn btn-danger btn-sm remove-lesson">X</button>
                            </div>
                            <select class="form-control lesson-type mb-2">
                                <option value="video">Video</option>
                                <option value="pdf">PDF</option>
                                <option value="quiz">Quiz</option>
                                <option value="assignment">Assignment</option>
                            </select>
                            <input type="file" class="form-control lesson-content mb-2">
                            <textarea class="form-control lesson-description" placeholder="Description (optional)" rows="2"></textarea>
                        </div>
                    `;
                    
                    lessonsContainer.insertAdjacentHTML('beforeend', lessonHtml);
                }
                
                if (e.target.classList.contains('remove-lesson')) {
                    e.target.closest('.lesson-item').remove();
                }
            });
            
            // Form submissions
            document.getElementById('course-form').addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Course saved successfully!');
                document.getElementById('add-course-modal').style.display = 'none';
                // In a real app, you would send this data to your backend
            });
            
            document.getElementById('instructor-form').addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Instructor saved successfully!');
                document.getElementById('add-instructor-modal').style.display = 'none';
                // In a real app, you would send this data to your backend
            });
            
            // Initialize the page
            populateTables();
        });
    </script>
</body>
</html>