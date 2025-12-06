<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Egyptian Heritage Explorer</title>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700;900&family=Lato:wght@400;600;700&display=swap" rel="stylesheet">
    
 <link rel="stylesheet" href="../css/LoginStyle.css">
</head>
<body>

    <!-- Back to Home Button -->
    <a href="index.php" class="back-home">
        <i class="fas fa-arrow-left"></i>
        <span>Back to Home</span>
    </a>

    <!-- Login Container -->
    <div class="login-container">
        <!-- Header -->
        <div class="login-header">
            <div class="logo-icon">
                <i class="fas fa-landmark"></i>
            </div>
            <h1>Welcome Back</h1>
            <p>Login to explore Egyptian heritage</p>
        </div>
        
        <!-- Body -->
        <div class="login-body">
            <form id="loginForm" action="../Php/User_DB/Login.php" method="post">
                <!-- Email Field -->
                <div class="form-group">
                    <label class="form-label">Email Address</label>
                    <div class="input-group">
                        <input type="email" name="Email" class="form-input" placeholder="Enter your email" required>
                        <i class="fas fa-envelope"></i>
                    </div>
                </div>
                
                <!-- Password Field -->
                <div class="form-group">
                    <label class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password"name="Password" class="form-input" id="passwordInput" placeholder="Enter your password" required>
                        <i class="fas fa-lock"></i>
                        <i class="fas fa-eye password-toggle" id="togglePassword"></i>
                    </div>
                </div>
                
                <!-- Options -->
                <div class="form-options">
                    <label class="remember-me">
                        <input type="checkbox">
                        <span>Remember me</span>
                    </label>
                    <a href="#" class="forgot-password">Forgot Password?</a>
                </div>
                
                <!-- Login Button -->
                <button type="submit" class="btn-login" name="Login_Submit">
                    Login
                </button>
            </form>
            
            <!-- Divider -->
            <div class="divider">
                <span>Or continue with</span>
            </div>
            
            <!-- Social Login -->
            <div class="social-login">
                <button class="social-btn google">
                    <i class="fab fa-google"></i>
                    <span>Google</span>
                </button>
                <button class="social-btn facebook">
                    <i class="fab fa-facebook-f"></i>
                    <span>Facebook</span>
                </button>
            </div>
            
            <!-- Signup Link -->
            <div class="signup-link">
                Don't have an account? <a href="register.php">Sign Up</a>
            </div>
        </div>
    </div>

    <script>
const togglePassword = document.getElementById('togglePassword');
const passwordInput = document.getElementById('passwordInput');

togglePassword.addEventListener('click', function() {
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);

    this.classList.toggle('fa-eye');
    this.classList.toggle('fa-eye-slash');
});

// Input Focus Effects
const inputs = document.querySelectorAll('.form-input');

inputs.forEach(input => {
    input.addEventListener('focus', function() {
        this.parentElement.querySelector('i').style.color = 'var(--primary-gold)';
    });

    input.addEventListener('blur', function() {
        if (!this.value) {
            this.parentElement.querySelector('i').style.color = '#999';
        }
    });
});

    </script>
</body>
</html>