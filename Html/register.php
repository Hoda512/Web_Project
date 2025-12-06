<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Egyptian Heritage Explorer</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700;900&family=Lato:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-gold: #D4AF37;
            --secondary-blue: #1a3a52;
            --accent-terracotta: #E07A5F;
            --bg-light: #F9F9F7;
            --text-dark: #2c3e50;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Lato', sans-serif;
            background: linear-gradient(135deg, rgba(26, 58, 82, 0.95), rgba(212, 175, 55, 0.85)),
                        url('https://images.unsplash.com/photo-1539650116455-8efdbcc6c191?q=80&w=1600&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Cinzel', serif;
        }
        
        /* Back to Home Button */
        .back-home {
            position: fixed;
            top: 30px;
            left: 30px;
            display: flex;
            align-items: center;
            gap: 10px;
            color: white;
            text-decoration: none;
            font-weight: 600;
            padding: 12px 24px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 50px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
            z-index: 1000;
        }
        
        .back-home:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateX(-5px);
            color: white;
        }
        
        /* Register Container */
        .register-container {
            background: white;
            border-radius: 24px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            max-width: 550px;
            width: 100%;
            overflow: hidden;
            animation: slideUp 0.6s ease;
        }
        
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Header */
        .register-header {
            background: linear-gradient(135deg, var(--secondary-blue), var(--primary-gold));
            padding: 40px;
            text-align: center;
            color: white;
        }
        
        .logo-icon {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
        }
        
        .logo-icon i {
            font-size: 2.5rem;
            color: white;
        }
        
        .register-header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            font-weight: 700;
        }
        
        .register-header p {
            font-size: 1.1rem;
            opacity: 0.9;
            margin: 0;
        }
        
        /* Body */
        .register-body {
            padding: 50px 40px;
        }
        
        /* Form */
        .form-label {
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 10px;
            font-size: 0.95rem;
        }
        
        .input-group-custom {
            position: relative;
            margin-bottom: 25px;
        }
        
        .form-control {
            padding: 15px 20px 15px 50px;
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            height: auto;
        }
        
        .form-control:focus {
            border-color: var(--primary-gold);
            box-shadow: 0 0 0 4px rgba(212, 175, 55, 0.1);
        }
        
        .input-icon {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            transition: color 0.3s ease;
            pointer-events: none;
            z-index: 10;
        }
        
        .form-control:focus ~ .input-icon {
            color: var(--primary-gold);
        }
        
        .password-toggle {
            position: absolute;
            right: 18px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #999;
            z-index: 10;
        }
        
        .password-toggle:hover {
            color: var(--primary-gold);
        }
        
        /* Password Strength */
        .password-strength {
            margin-top: 10px;
            height: 4px;
            background: #e0e0e0;
            border-radius: 2px;
            overflow: hidden;
            display: none;
        }
        
        .password-strength.active {
            display: block;
        }
        
        .strength-bar {
            height: 100%;
            width: 0;
            transition: all 0.3s ease;
            border-radius: 2px;
        }
        
        .strength-bar.weak {
            width: 33%;
            background: #ff4444;
        }
        
        .strength-bar.medium {
            width: 66%;
            background: #ffa500;
        }
        
        .strength-bar.strong {
            width: 100%;
            background: #00c851;
        }
        
        /* Terms Checkbox */
        .form-check {
            margin: 30px 0;
        }
        
        .form-check-input {
            width: 20px;
            height: 20px;
            cursor: pointer;
            border: 2px solid #e0e0e0;
        }
        
        .form-check-input:checked {
            background-color: var(--primary-gold);
            border-color: var(--primary-gold);
        }
        
        .form-check-input:focus {
            box-shadow: 0 0 0 4px rgba(212, 175, 55, 0.1);
        }
        
        .form-check-label {
            font-size: 0.95rem;
            color: #666;
            margin-left: 10px;
        }
        
        .form-check-label a {
            color: var(--primary-gold);
            text-decoration: none;
            font-weight: 600;
        }
        
        .form-check-label a:hover {
            text-decoration: underline;
        }
        
        /* Register Button */
        .btn-register {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, var(--primary-gold), #c49b2e);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);
        }
        
        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 25px rgba(212, 175, 55, 0.5);
        }
        
        .btn-register:active {
            transform: translateY(0);
        }
        
        /* Divider */
        .divider {
            display: flex;
            align-items: center;
            margin: 35px 0;
            color: #999;
            font-size: 0.9rem;
        }
        
        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: #e0e0e0;
        }
        
        .divider span {
            padding: 0 20px;
        }
        
        /* Social Login */
        .social-btn {
            padding: 14px;
            border: 2px solid #e0e0e0;
            background: white;
            border-radius: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            font-size: 1rem;
        }
        
        .social-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        
        .social-btn.google:hover {
            border-color: #DB4437;
            color: #DB4437;
        }
        
        .social-btn.facebook:hover {
            border-color: #4267B2;
            color: #4267B2;
        }
        
        .social-btn i {
            font-size: 1.2rem;
        }
        
        /* Login Link */
        .login-link {
            text-align: center;
            color: #666;
            font-size: 0.95rem;
            margin-top: 25px;
        }
        
        .login-link a {
            color: var(--primary-gold);
            font-weight: 700;
            text-decoration: none;
        }
        
        .login-link a:hover {
            text-decoration: underline;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            body {
                padding: 20px 10px;
            }
            
            .back-home {
                top: 15px;
                left: 15px;
                padding: 10px 18px;
                font-size: 0.9rem;
            }
            
            .register-container {
                border-radius: 16px;
            }
            
            .register-header {
                padding: 30px 20px;
            }
            
            .register-header h1 {
                font-size: 2rem;
            }
            
            .register-body {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>

    <!-- Back to Home Button -->
    <a href="index.php" class="back-home">
        <i class="fas fa-arrow-left"></i>
        <span>Back to Home</span>
    </a>

    <!-- Register Container -->
    <div class="register-container">
        <!-- Header -->
        <div class="register-header">
            <div class="logo-icon">
                <i class="fas fa-landmark"></i>
            </div>
            <h1>Create Account</h1>
            <p>Join us to explore Egyptian heritage</p>
        </div>
        
        <!-- Body -->
        <div class="register-body">
            <form id="registerForm" action="../Php/User_DB/Register.php" method="post">
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label">First Name</label>
                        <div class="input-group-custom">
                            <input type="text" name="FirstName" class="form-control" placeholder="Enter first name" required>
                            <i class="fas fa-user input-icon"></i>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <label class="form-label">Last Name</label>
                        <div class="input-group-custom">
                            <input type="text" name="LastName" class="form-control" placeholder="Enter last name" required>
                            <i class="fas fa-user input-icon"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Email -->
                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <div class="input-group-custom">
                        <input type="email" name="Email" class="form-control" placeholder="Enter your email" required>
                        <i class="fas fa-envelope input-icon"></i>
                    </div>
                </div>
                
                <!-- Password -->
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <div class="input-group-custom">
                        <input type="password" name="Password" class="form-control" id="passwordInput" placeholder="Create password" required>
                        <i class="fas fa-lock input-icon"></i>
                        <i class="fas fa-eye password-toggle" id="togglePassword"></i>
                    </div>
                    <div class="password-strength" id="passwordStrength">
                        <div class="strength-bar"></div>
                    </div>
                </div>
                
                <!-- Confirm Password -->
                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <div class="input-group-custom">
                        <input type="password" name="ConfirmPassword" class="form-control" id="confirmPasswordInput" placeholder="Confirm password" required>
                        <i class="fas fa-lock input-icon"></i>
                        <i class="fas fa-eye password-toggle" id="toggleConfirmPassword"></i>
                    </div>
                </div>
                
                <!-- Terms & Conditions -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="terms" required>
                    <label class="form-check-label" for="terms">
                        I agree to the <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>
                    </label>
                </div>
                
                <!-- Register Button -->
                <button type="submit" class="btn btn-register" name="Register_Submit">
                    Create Account
                </button>
            </form>
            
            <!-- Divider -->
            <div class="divider">
                <span>Or register with</span>
            </div>
            
            <!-- Social Login -->
            <div class="row g-3">
                <div class="col-6">
                    <button class="social-btn google w-100">
                        <i class="fab fa-google"></i>
                        <span>Google</span>
                    </button>
                </div>
                <div class="col-6">
                    <button class="social-btn facebook w-100">
                        <i class="fab fa-facebook-f"></i>
                        <span>Facebook</span>
                    </button>
                </div>
            </div>
            
            <!-- Login Link -->
            <div class="login-link">
                Already have an account? <a href="login.php">Login</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Password Toggle
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('passwordInput');
        const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
        const confirmPasswordInput = document.getElementById('confirmPasswordInput');
        
        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
        
        toggleConfirmPassword.addEventListener('click', function() {
            const type = confirmPasswordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            confirmPasswordInput.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
        
        // Password Strength Checker
        const passwordStrength = document.getElementById('passwordStrength');
        const strengthBar = passwordStrength.querySelector('.strength-bar');
        
        passwordInput.addEventListener('input', function() {
            const password = this.value;
            let strength = 0;
            
            if (password.length > 0) {
                passwordStrength.classList.add('active');
            } else {
                passwordStrength.classList.remove('active');
                return;
            }
            
            if (password.length >= 8) strength++;
            if (password.match(/[a-z]/) && password.match(/[A-Z]/)) strength++;
            if (password.match(/[0-9]/)) strength++;
            if (password.match(/[^a-zA-Z0-9]/)) strength++;
            
            strengthBar.className = 'strength-bar';
            
            if (strength <= 2) {
                strengthBar.classList.add('weak');
            } else if (strength === 3) {
                strengthBar.classList.add('medium');
            } else {
                strengthBar.classList.add('strong');
            }
        });
        
        // Form Validation
        const registerForm = document.getElementById('registerForm');
        
        registerForm.addEventListener('submit', function(e) {
            const password = passwordInput.value;
            const confirmPassword = confirmPasswordInput.value;
            
            if (password !== confirmPassword) {
                e.preventDefault();
                alert('Passwords do not match!');
                confirmPasswordInput.focus();
                return false;
            }
            
            if (password.length < 8) {
                e.preventDefault();
                alert('Password must be at least 8 characters long!');
                passwordInput.focus();
                return false;
            }
        });
    </script>
</body>
</html>