<x-guest-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('styles/login.css') }}">
    </head>

    <div class="container">
        <div class="burger-menu" id="burgerMenu">
            &#9776;
        </div>

        <ul class="nav-links-mobile" id="navLinksMobile">
            <li><a href="#">Home</a></li>
            <li><a href="#">Features</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Contact</a></li>
        </ul>

        <h1>Welcome Back!</h1>

        @if (session('status'))
            <div class="session-status">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login.post') }}">
            @csrf

            <div class="input-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Enter your email">
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required placeholder="Enter your password">
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="remember-me">
                <input type="checkbox" id="remember_me" name="remember">
                <label for="remember_me">Remember Me</label>
            </div>

            <button type="submit" class="btn-submit">Login</button>

            <p class="sign-up">Don't have an account? <a href="{{ route('register') }}">Sign Up</a></p>

            <div class="or-divider">OR</div>

            <div class="social-login">
                <!-- Login pake Google -->
                <a href="{{ route('google.login') }}" class="social-btn google-btn">
                    <img src="{{ asset('assets/google.png') }}" alt="Google Icon"> Continue with Google
                </a>
            </div>
        </form>
    </div>

    <script>
        const burgerMenu = document.getElementById('burgerMenu');
        const navLinksMobile = document.getElementById('navLinksMobile');

        burgerMenu.addEventListener('click', () => {
            navLinksMobile.classList.toggle('burger-active');
        });
    </script>
    <style>
        body {
    background-color: #f8f3f3;
    font-family: 'Arial', sans-serif;
}

.container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background-color: #f8f3f3;
    padding: 2rem;
}

h1 {
    font-size: 2.2rem;
    color: #c2a1a1;
    font-family: 'Arial', sans-serif;
    margin-bottom: 1.5rem;
    text-align: center;
}

.input-group {
    margin-bottom: 1rem;
    width: 100%;
    max-width: 400px;
    display: flex;
    flex-direction: column;
}

label {
    font-size: 0.9rem;
    color: #b97f7f;
    margin-bottom: 0.3rem;
}

input[type="email"], input[type="password"], input[type="password_confirmation"] {
    width: 100%;
    padding: 0.8rem 1rem;
    border-radius: 30px;
    border: 1px solid #d4b8b8;
    background-color: #e1c3c3;
    font-size: 1rem;
    color: #4f3838;
    outline: none;
    box-shadow: none;
}

input::placeholder {
    color: #7f5e5e;
}

input:focus {
    border-color: #c39b9b;
    background-color: #e8d7d7;
}

.btn-submit {
    width: 100%;
    max-width: 400px;
    padding: 0.9rem;
    font-size: 1rem;
    font-weight: bold;
    background-color: #b28c8c;
    border: none;
    border-radius: 30px;
    color: #fff;
    cursor: pointer;
    margin-top: 1rem;
}

.btn-submit:hover {
    background-color: #a07f7f;
}

.sign-up {
    font-size: 0.9rem;
    color: #7e6464;
    margin-top: 1rem;
}

.sign-up a {
    color: #48c948;
    font-weight: bold;
    text-decoration: none;
}

.sign-up a:hover {
    text-decoration: underline;
}

.or-divider {
    display: flex;
    align-items: center;
    justify-content: center;
    color: #a07f7f;
    margin: 1.5rem 0;
    width: 100%;
    max-width: 400px;
}

.or-divider::before, .or-divider::after {
    content: "";
    flex: 1;
    height: 1px;
    background-color: #d9c0c0;
    margin: 0 0.5rem;
}

.social-login {
    display: flex;
    flex-direction: column;
    width: 100%;
    max-width: 400px;
    gap: 0.75rem;
}

.social-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0.75rem;
    font-size: 1rem;
    border: 1px solid #e0d0d0;
    border-radius: 30px;
    background-color: #f3f0f0;
    color: #7e7e7e;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.social-btn img {
    width: 24px;
    height: 24px;
    margin-right: 0.5rem;
}

.google-btn:hover, .facebook-btn:hover {
    background-color: #e3dada;
}

.burger-menu {
    display: none;
    cursor: pointer;
    font-size: 1.5rem;
    position: absolute;
    top: 1rem;
    right: 1rem;
}

.nav-links-mobile {
    display: none;
    flex-direction: column;
    gap: 1rem;
    position: absolute;
    top: 3rem;
    right: 1rem;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 8px;
    padding: 1rem;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    transition: all 0.3s ease;
}

.burger-active {
    display: flex !important;
}

.nav-links-mobile li a {
    font-size: 1rem;
    color: #000;
    text-decoration: none;
    padding: 0.5rem 1rem;
    background-color: #c5a1a1;
    border-radius: 8px;
    transition: background-color 0.3s ease;
}

.nav-links-mobile li a:hover {
    background-color: #a07f7f;
}

@media (max-width: 768px) {
    .burger-menu {
        display: block;
    }
}
    </style>
</x-guest-layout>
