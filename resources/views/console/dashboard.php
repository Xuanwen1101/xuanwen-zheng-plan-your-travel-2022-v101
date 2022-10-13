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
        <link rel="stylesheet" href="/app.css">

        <script src="/app.js"></script>
        
    </head>
    <body>
        <header class="header">
            <img class="nav__btn" src="/" alt="">
            <nav class="header__nav">
              <ul class="nav__wrapper">
                <li class="nav__close">X</li>
                <li class="nav__item"><a href="/console/dashboard">Dashboard</a></li>
                <li class="nav__line">|</li>
                <li class="nav__item"><a href="/">Website Home Page</a></li>
                <li class="nav__line">|</li>
                <li class="nav__item"><a href="/console/logout">Log Out</a></li>
              </ul>
            </nav>
        </header>

        <section class="main">
            <?php if(Auth::check()): ?>
                <div class="dashboard__user">Hello, <?= auth()->user()->first ?> <?= auth()->user()->last ?>!</div> 
                <?php else: ?>
                <a href="/" class="dashboard__user">Return to Home Page</a>
            <?php endif; ?>
            <ul id="dashboard" class="dashboard__container">
                <li class="dashboard__link">
                  <a href="/console/plans/list">
                    <img src="/icons/projects.svg" alt="Icon for Plans List">
                    Your Plan
                  </a>
                </li>
                <li class="dashboard__link">
                  <a href="/console/places/list">
                  <img src="/icons/experience.svg" alt="Icon for Places List">
                    Your Place
                  </a>
                </li>
                <li class="dashboard__link">
                  <a href="/console/search/google">
                  <img src="/icons/blog.svg" alt="Icon for Search Place">
                    Search Place
                  </a>
                </li>
                <li class="dashboard__link">
                  <a href="/console/users/list">
                  <img src="/icons/users.svg" alt="Icon for User Accounts List">
                    Your Accounts
                  </a>
                </li>
                
                <li class="dashboard__link dashboard__link--logout">
                  <a href="/console/logout">
                    <img src="/icons/log-out.svg" alt="Icon for Log Out Button">
                    Log Out
                  </a>
                </li>
            </ul>

        </section>

        <?= view('layout.footer') ?>

    </body>
</html>