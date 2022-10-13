<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Plan Your Travel</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="<?= url('app.css') ?>">

    <script src="<?= url('app.js') ?>"></script>

</head>

<body>

    <header class="w3-padding">

        <div class="flex-container-header">
            <span class="logo">
                <a href="/">
                    <img src="images/plan_your_travel.png" alt="logo" height="120" />
                </a>
            </span>
            <nav class="home_nav">
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

        </div>

    </header>

    <hr>