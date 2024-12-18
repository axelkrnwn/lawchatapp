<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing page</title>
    <link rel="icon" href="{{ asset('assets/web_icon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('styles/landing.css') }}">
</head>
<body>
    <header class="header">
        <div class="logo">
        <img src="{{ asset('assets/logo.png') }}" alt="HukumKU Bot Logo" style="width: auto; height: 50px; max-width: 100%;">
            <h2>HukumKU Bot</h2>
        </div>
        <div class="nav-buttons">
            <a href="/login" class="button">Login</a>
            <a href="/register" class="button">SignUp</a>
        </div>
    </header>

    <main class="main-content">
        <div class="date">SEPTEMBER 2024</div>

        <h1>INTRODUCING HUKUMKU BOT</h1>

        <div class="content">
            <p>Perkenalkan <strong>HukumkuBot</strong> – model AI yang dirancang untuk berinteraksi dengan pengguna secara percakapan. HukumkuBot dapat menjawab pertanyaan lanjutan, mengakui kesalahan, menantang premis yang salah, dan menolak permintaan yang tidak pantas, menciptakan pengalaman yang interaktif dan informatif.</p>
            <p>Sebagai model saudara dari InstructGPT, HukumkuBot dilatih untuk mengikuti instruksi dalam sebuah prompt dan memberikan respons yang terperinci. Kemampuannya dalam menangani percakapan memungkinkan pertukaran informasi yang dinamis tentang topik hukum.</p>
            <p>Kami sangat antusias memperkenalkan HukumkuBot dan mengundang Anda untuk memberikan masukan yang berharga untuk membantu kami meningkatkan kemampuannya. Selama masa pratinjau riset ini, Anda bisa menggunakan HukumkuBot sepenuhnya gratis. Coba sekarang di <a href="https://HukumkuBot.com" target="_blank">HukumkuBot.com</a> dan rasakan pengalaman AI hukum yang inovatif.</p>
        </div>
    </main>

    {{-- <div class="try-now-container">
        <a href="#" class="button try-now">Try Now!</a>
    </div> --}}
</body>
<style>
    /* main.css */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    min-height: 100vh;
    background-color: white;
    display: flex;
    flex-direction: column;
}


.header {
    padding: 20px 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    position: fixed;
    top: 0;
    z-index: 100;
}

.logo {
    display: flex;
    align-items: center;
    gap: 10px;
    color: #C3A6A6;
}

.logo img {
    width: 100px;
    height: 100px;
}

.nav-buttons {
    display: flex;
    gap: 10px;
}

.button {
    padding: 8px 20px;
    border: none;
    border-radius: 20px;
    background-color: #C3A6A6;
    color: white;
    cursor: pointer;
    text-decoration: none;
    transition: opacity 0.2s;
}

.button:hover {
    opacity: 0.9;
}

.main-content {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 80px 20px;
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
}

.date {
    color: #999;
    margin-bottom: 20px;
    font-size: 14px;
}

h1 {
    color: #C3A6A6;
    font-size: 32px;
    margin-bottom: 30px;
}

.content {
    color: #888;
    line-height: 1.8;
    margin-bottom: 40px;
}

.content p {
    margin-bottom: 20px;
}

.try-now-container {
    position: fixed;
    bottom: 40px;
    right: 40px;
}

.try-now {
    padding: 12px 30px;
    font-size: 16px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

@media screen and (max-width: 768px) {
    .header {
        padding: 20px;
    }

    h1 {
        font-size: 28px;
    }

    .try-now-container {
        bottom: 20px;
        right: 20px;
    }
}
</style>
</html>
