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

  <!-- Font Awesome JS -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
  </script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
  </script>

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
    <h2 class="title">Place Search</h2>

    <div class="objects-container">
    <form action="/console/search/list" method="GET" role="search">
      <?= csrf_field() ?>
      <div class="search-content">
    <img src="/images/PlaceSearch.png" alt="travelmap" width="300" class="">
      <div class="input-group">
        <input type="text" class="form-control" name="q" placeholder="Search Place">
        <span class="input-group-btn">
          <button type="submit" class="btn btn-default">
            <span class="fas fa-search"></span>
          </button>
        </span>
      </div>
      </div>
    </form>
    </div>

  </section>

</body>

</html>