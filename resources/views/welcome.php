<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Plan Your Travel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700&family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="<?= url('app.css') ?>">

    <script src="<?= url('app.js') ?>"></script>

</head>

<body>

    <header class="header">
        <span class="logo">
            <a href="/">
                <img src="/images/plan_your_travel.png" alt="logo" height="120" />
            </a>
        </span>
        <nav class="header__nav">
            <ul class="nav__wrapper">
                <?php if (Auth::check()) : ?>
                    <li class="nav__close">X</li>
                    <li class="nav__item"> You are logged in as <?= auth()->user()->first ?> <?= auth()->user()->last ?></li>
                    <li class="nav__line">|</li>
                    <li class="nav__item"><a href="/console/logout">Log Out</a></li>
                    <li class="nav__line">|</li>
                    <li class="nav__item"><a href="/console/dashboard">Dashboard</a></li>
                <?php else : ?>
                    <li class="nav__close">X</li>
                    <li class="nav__item"><a href="/console/login">Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <main class="main">

        <!-- Background-image token from:https://www.wallpaperflare.com/illustration-of-mountains-surrounded-by-trees-under-white-clouds-wallpaper-ggm -->

        <div class="objects-container">
            <div class="slogan">
                Time to Travel
            </div>

            <form action="/console/login" class="home_link">
                <button type="submit" class="form__button">Start Your Plan</button>
            </form>
        </div>




    </main>

    <?= view('layout.footer') ?>