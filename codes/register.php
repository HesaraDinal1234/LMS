<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | EduLearn Pro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="CSS/register.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
   <div class="auth-card">
        <div class="auth-header">
            <h2>Register</h2>
            <p>Create your account to start learning</p>
        </div>
        <form action="register.php" method="POST">
            
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="input-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
        </form>
        <p class="auth-footer">Already have an account? <a href="#">Login here</a></p>
    </div>

    <footer class="footer">
        <p>&copy; 2025 EduLearn Pro. All rights reserved.</p>
    </footer>
</body>
</html>