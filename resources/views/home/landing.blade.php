<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing page</title>
    <link rel="stylesheet" href={{ asset('styles/landing.css') }}>
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src={{ asset('assets/logo.png') }} alt="HukumKU Bot Logo" style="width: 50px; height:60px">
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
            <p>We've trained a model called HukumkuBot which interacts in a conversational way. The dialogue format makes it possible for HukumkuBot to answer follow-up questions, admit its mistakes, challenge incorrect premises, and reject inappropriate requests.</p>
            <p>HukumkuBot is a sibling model to InstructGPT, which is trained to follow an instruction in a prompt and provide a detailed response.</p>
            <p>We are excited to introduce HukumkuBot to get users' feedback and learn about its strengths and weaknesses. During the research preview, usage of HukumkuBot is free. Try it now at HukumkuBot.com</p>
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
