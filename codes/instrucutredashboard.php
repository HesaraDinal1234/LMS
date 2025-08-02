<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructor Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary: #4e73df;
            --secondary: #858796;
            --success: #1cc88a;
            --info: #36b9cc;
            --warning: #f6c23e;
            --danger: #e74a3b;
            --light: #f8f9fc;
            --dark: #5a5c69;
        }
        
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8f9fc;
            margin: 0;
            padding: 0;
            display: flex;
            min-height: 100vh;
        }
        
        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            background: linear-gradient(180deg, #2c3e50 10%, #1a252f 100%);
            color: white;
            min-height: 100vh;
            transition: all 0.3s;
        }
        
        .sidebar-header {
            padding: 1.5rem;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .sidebar-menu {
            padding: 1rem 0;
        }
        
        .sidebar-menu a {
            color: rgba(255, 255, 255, 0.8);
            padding: 0.75rem 1.5rem;
            display: block;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .sidebar-menu a:hover {
            color: white;
            background: rgba(255, 255, 255, 0.1);
        }
        
        .sidebar-menu a.active {
            color: white;
            background: rgba(255, 255, 255, 0.2);
        }
        
        .sidebar-menu i {
            margin-right: 0.5rem;
            width: 20px;
            text-align: center;
        }
        
        /* Main Content Styles */
        .main-content {
            flex: 1;
            padding: 1.5rem;
            overflow-x: hidden;
        }
        
        .top-navbar {
            background: white;
            padding: 1rem 1.5rem;
            border-radius: 0.35rem;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
            margin-bottom: 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .page-title h1 {
            margin: 0;
            font-size: 1.5rem;
            color: var(--dark);
        }
        
        .user-menu {
            display: flex;
            align-items: center;
        }
        
        .user-menu img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 0.5rem;
        }
        
        /* Cards */
        .card {
            border: none;
            border-radius: 0.35rem;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.1);
            margin-bottom: 1.5rem;
        }
        
        .card-header {
            background-color: #f8f9fc;
            border-bottom: 1px solid #e3e6f0;
            padding: 1rem 1.35rem;
            font-weight: 600;
            color: var(--dark);
        }
        
        .card-body {
            padding: 1.5rem;
        }
        
        .stat-card {
            border-left: 0.25rem solid;
            padding: 1rem;
        }
        
        .stat-card.primary {
            border-left-color: var(--primary);
        }
        
        .stat-card.success {
            border-left-color: var(--success);
        }
        
        .stat-card.warning {
            border-left-color: var(--warning);
        }
        
        .stat-card.info {
            border-left-color: var(--info);
        }
        
        .stat-card .stat-title {
            font-size: 0.8rem;
            color: var(--secondary);
            text-transform: uppercase;
            font-weight: 600;
        }
        
        .stat-card .stat-value {
            font-size: 1.5rem;
            font-weight: 700;
        }
        
        /* Tables */
        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: var(--dark);
        }
        
        .table th {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #e3e6f0;
            background-color: #f8f9fc;
            font-weight: 600;
        }
        
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #e3e6f0;
        }
        
        .badge {
            display: inline-block;
            padding: 0.35em 0.65em;
            font-size: 0.75em;
            font-weight: 700;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0.25rem;
        }
        
        .badge-primary {
            background-color: var(--primary);
        }
        
        .badge-success {
            background-color: var(--success);
        }
        
        .badge-warning {
            background-color: var(--warning);
        }
        
        .badge-danger {
            background-color: var(--danger);
        }
        
        .badge-info {
            background-color: var(--info);
        }
        
        .btn {
            padding: 0.375rem 0.75rem;
            border-radius: 0.35rem;
            font-size: 0.9rem;
            font-weight: 400;
            line-height: 1.5;
            cursor: pointer;
            border: 1px solid transparent;
        }
        
        .btn-primary {
            background-color: var(--primary);
            color: white;
        }
        
        .btn-success {
            background-color: var(--success);
            color: white;
        }
        
        .btn-danger {
            background-color: var(--danger);
            color: white;
        }
        
        .btn-sm {
            padding: 0.25rem 0.5rem;
            font-size: 0.8rem;
        }
        
        /* Progress bars */
        .progress {
            height: 1rem;
            border-radius: 0.35rem;
            background-color: #eaecf4;
        }
        
        .progress-bar {
            height: 100%;
            border-radius: 0.35rem;
            background-color: var(--primary);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                width: 80px;
                overflow: hidden;
            }
            
            .sidebar-header h3, .sidebar-menu span {
                display: none;
            }
            
            .sidebar-menu i {
                margin-right: 0;
                font-size: 1.2rem;
            }
            
            .sidebar-menu a {
                text-align: center;
                padding: 1rem 0;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <h3>Instructor Panel</h3>
        </div>
        <div class="sidebar-menu">
            <a href="#" class="active" id="dashboard-link">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
            <a href="#" id="courses-link">
                <i class="fas fa-fw fa-book"></i>
                <span>My Courses</span>
            </a>
            <a href="#" id="students-link">
                <i class="fas fa-fw fa-users"></i>
                <span>Students</span>
            </a>
            <a href="#" id="analytics-link">
                <i class="fas fa-fw fa-chart-bar"></i>
                <span>Analytics</span>
            </a>
            <a href="#" id="messages-link">
                <i class="fas fa-fw fa-envelope"></i>
                <span>Messages</span>
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
                <span>Instructor Name</span>
            </div>
        </div>

        <!-- Dashboard Content -->
        <div id="dashboard-content">
            <!-- Stats Cards -->
            <div class="row" style="display: flex; flex-wrap: wrap; gap: 1.5rem; margin-bottom: 1.5rem;">
                <div class="card stat-card primary" style="flex: 1; min-width: 200px;">
                    <div class="stat-title">Total Courses</div>
                    <div class="stat-value" id="total-courses">5</div>
                </div>
                <div class="card stat-card success" style="flex: 1; min-width: 200px;">
                    <div class="stat-title">Active Students</div>
                    <div class="stat-value" id="total-students">324</div>
                </div>
                <div class="card stat-card warning" style="flex: 1; min-width: 200px;">
                    <div class="stat-title">Total Earnings</div>
                    <div class="stat-value" id="total-earnings">$8,245</div>
                </div>
                <div class="card stat-card info" style="flex: 1; min-width: 200px;">
                    <div class="stat-title">Avg. Rating</div>
                    <div class="stat-value" id="avg-rating">4.7/5</div>
                </div>
            </div>

            <!-- Recent Courses -->
            <div class="card">
                <div class="card-header">
                    My Courses
                    <button class="btn btn-primary btn-sm float-right" id="create-course-btn">Create New Course</button>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Course</th>
                                <th>Students</th>
                                <th>Revenue</th>
                                <th>Rating</th>
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

            <!-- Recent Students -->
            <div class="card">
                <div class="card-header">
                    Recent Students
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Student</th>
                                <th>Course</th>
                                <th>Enrolled</th>
                                <th>Progress</th>
                                <th>Last Active</th>
                            </tr>
                        </thead>
                        <tbody id="students-table">
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
                    <span>My Courses</span>
                    <button class="btn btn-primary" id="create-course-btn-2">Create New Course</button>
                </div>
                <div class="card-body">
                    <div class="row" id="course-cards">
                        <!-- Course cards will be populated here -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Students Content (Hidden by default) -->
        <div id="students-content" style="display: none;">
            <div class="card">
                <div class="card-header">
                    My Students
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="student-search" placeholder="Search students...">
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Student</th>
                                <th>Email</th>
                                <th>Courses</th>
                                <th>Joined</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="all-students-table">
                            <!-- Will be populated by JavaScript -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Analytics Content (Hidden by default) -->
        <div id="analytics-content" style="display: none;">
            <div class="card">
                <div class="card-header">
                    Course Analytics
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="course-select">Select Course</label>
                        <select class="form-control" id="course-select">
                            <!-- Will be populated by JavaScript -->
                        </select>
                    </div>
                    <div class="row" style="display: flex; flex-wrap: wrap; gap: 1.5rem; margin-bottom: 1.5rem;">
                        <div class="card stat-card primary" style="flex: 1; min-width: 200px;">
                            <div class="stat-title">Enrollments</div>
                            <div class="stat-value" id="course-enrollments">0</div>
                        </div>
                        <div class="card stat-card success" style="flex: 1; min-width: 200px;">
                            <div class="stat-title">Completion Rate</div>
                            <div class="stat-value" id="completion-rate">0%</div>
                        </div>
                        <div class="card stat-card warning" style="flex: 1; min-width: 200px;">
                            <div class="stat-title">Avg. Rating</div>
                            <div class="stat-value" id="course-rating">0/5</div>
                        </div>
                        <div class="card stat-card info" style="flex: 1; min-width: 200px;">
                            <div class="stat-title">Revenue</div>
                            <div class="stat-value" id="course-revenue">$0</div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            Enrollment Trends
                        </div>
                        <div class="card-body">
                            <div id="enrollment-chart" style="height: 300px;">
                                <!-- Chart will be rendered here -->
                                <p class="text-center text-muted">Enrollment chart will appear here</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Create Course Modal -->
        <div id="create-course-modal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000; justify-content: center; align-items: center;">
            <div class="card" style="width: 80%; max-width: 800px; max-height: 90vh; overflow-y: auto;">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Create New Course</span>
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
                        <button type="submit" class="btn btn-primary">Create Course</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Navigation
            const navLinks = document.querySelectorAll('.sidebar-menu a');
            const contentSections = {
                'dashboard-link': 'dashboard-content',
                'courses-link': 'courses-content',
                'students-link': 'students-content',
                'analytics-link': 'analytics-content'
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
                { 
                    id: 1, 
                    title: 'Advanced JavaScript', 
                    students: 145, 
                    revenue: 3625, 
                    rating: 4.8, 
                    status: 'published',
                    thumbnail: 'https://via.placeholder.com/300x200?text=JavaScript'
                },
                { 
                    id: 2, 
                    title: 'React Masterclass', 
                    students: 98, 
                    revenue: 2450, 
                    rating: 4.9, 
                    status: 'published',
                    thumbnail: 'https://via.placeholder.com/300x200?text=React'
                },
                { 
                    id: 3, 
                    title: 'Node.js Fundamentals', 
                    students: 76, 
                    revenue: 1900, 
                    rating: 4.6, 
                    status: 'published',
                    thumbnail: 'https://via.placeholder.com/300x200?text=Node.js'
                },
                { 
                    id: 4, 
                    title: 'Python for Data Science', 
                    students: 42, 
                    revenue: 1050, 
                    rating: 4.5, 
                    status: 'draft',
                    thumbnail: 'https://via.placeholder.com/300x200?text=Python'
                }
            ];
            
            const mockStudents = [
                { 
                    id: 1, 
                    name: 'John Smith', 
                    email: 'john@example.com', 
                    avatar: 'https://via.placeholder.com/40', 
                    course: 'Advanced JavaScript', 
                    enrolled: '2023-05-15', 
                    progress: 75,
                    lastActive: '2 days ago'
                },
                { 
                    id: 2, 
                    name: 'Sarah Johnson', 
                    email: 'sarah@example.com', 
                    avatar: 'https://via.placeholder.com/40', 
                    course: 'React Masterclass', 
                    enrolled: '2023-06-02', 
                    progress: 90,
                    lastActive: '1 day ago'
                },
                { 
                    id: 3, 
                    name: 'Michael Brown', 
                    email: 'michael@example.com', 
                    avatar: 'https://via.placeholder.com/40', 
                    course: 'Node.js Fundamentals', 
                    enrolled: '2023-06-10', 
                    progress: 60,
                    lastActive: '5 days ago'
                },
                { 
                    id: 4, 
                    name: 'Emily Davis', 
                    email: 'emily@example.com', 
                    avatar: 'https://via.placeholder.com/40', 
                    course: 'Advanced JavaScript', 
                    enrolled: '2023-06-15', 
                    progress: 30,
                    lastActive: '1 hour ago'
                }
            ];
            
            // Populate tables with mock data
            function populateTables() {
                // Courses table in dashboard
                const coursesTable = document.getElementById('courses-table');
                coursesTable.innerHTML = mockCourses.map(course => `
                    <tr>
                        <td>${course.title}</td>
                        <td>${course.students}</td>
                        <td>$${course.revenue.toFixed(2)}</td>
                        <td>${course.rating}/5</td>
                        <td><span class="badge ${course.status === 'published' ? 'badge-success' : 'badge-warning'}">${course.status}</span></td>
                        <td>
                            <button class="btn btn-sm btn-primary">Manage</button>
                        </td>
                    </tr>
                `).join('');
                
                // Students table in dashboard
                const studentsTable = document.getElementById('students-table');
                studentsTable.innerHTML = mockStudents.map(student => `
                    <tr>
                        <td>
                            <img src="${student.avatar}" alt="${student.name}" style="width: 30px; height: 30px; border-radius: 50%; margin-right: 0.5rem;">
                            ${student.name}
                        </td>
                        <td>${student.course}</td>
                        <td>${student.enrolled}</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar" style="width: ${student.progress}%"></div>
                            </div>
                            <small>${student.progress}% complete</small>
                        </td>
                        <td>${student.lastActive}</td>
                    </tr>
                `).join('');
                
                // Course cards in courses section
                const courseCards = document.getElementById('course-cards');
                courseCards.innerHTML = mockCourses.map(course => `
                    <div class="col-md-4 mb-4" style="flex: 1; min-width: 300px;">
                        <div class="card">
                            <img src="${course.thumbnail}" class="card-img-top" alt="${course.title}">
                            <div class="card-body">
                                <h5 class="card-title">${course.title}</h5>
                                <p class="card-text">${course.students} students • $${course.revenue.toFixed(2)} revenue</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge ${course.status === 'published' ? 'badge-success' : 'badge-warning'}">${course.status}</span>
                                    <div>
                                        <button class="btn btn-sm btn-primary">Edit</button>
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `).join('');
                
                // All students table
                const allStudentsTable = document.getElementById('all-students-table');
                allStudentsTable.innerHTML = mockStudents.map(student => `
                    <tr>
                        <td>
                            <img src="${student.avatar}" alt="${student.name}" style="width: 30px; height: 30px; border-radius: 50%; margin-right: 0.5rem;">
                            ${student.name}
                        </td>
                        <td>${student.email}</td>
                        <td>${student.course}</td>
                        <td>${student.enrolled}</td>
                        <td>
                            <button class="btn btn-sm btn-primary">Message</button>
                            <button class="btn btn-sm btn-info">View Progress</button>
                        </td>
                    </tr>
                `).join('');
                
                // Course select dropdown in analytics
                const courseSelect = document.getElementById('course-select');
                courseSelect.innerHTML = '<option value="">Select a course</option>' + 
                    mockCourses.map(course => `
                        <option value="${course.id}">${course.title}</option>
                    `).join('');
            }
            
            // Modal handling
            document.getElementById('create-course-btn').addEventListener('click', showCourseModal);
            document.getElementById('create-course-btn-2').addEventListener('click', showCourseModal);
            
            document.getElementById('close-course-modal').addEventListener('click', function() {
                document.getElementById('create-course-modal').style.display = 'none';
            });
            
            function showCourseModal() {
                document.getElementById('create-course-modal').style.display = 'flex';
            }
            
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
            
            // Delegated event for removing sections and adding lessons
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
                alert('Course created successfully!');
                document.getElementById('create-course-modal').style.display = 'none';
                // In a real app, you would send this data to your backend
            });
            
            // Course selection in analytics
            document.getElementById('course-select').addEventListener('change', function() {
                const courseId = this.value;
                if (courseId) {
                    const course = mockCourses.find(c => c.id == courseId);
                    if (course) {
                        document.getElementById('course-enrollments').textContent = course.students;
                        document.getElementById('completion-rate').textContent = '72%'; // Mock completion rate
                        document.getElementById('course-rating').textContent = course.rating + '/5';
                        document.getElementById('course-revenue').textContent = '$' + course.revenue.toFixed(2);
                    }
                }
            });
            
            // Initialize the page
            populateTables();
        });
    </script>
</body>
</html>