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

            <h2 class="title">Add Place</h2>

            <div class="objects-container">
              <form method="post" action="/console/places/add" novalidate class="form">
                  <?= csrf_field() ?>
                  <div class="form__field">
                      <label for="place_name" class="form__label">* Name:</label>
                      <input class="form__input" type="text" name="place_name" id="place_name" value="<?= old('place_name') ?>" required>
              
                      <?php if($errors->first('place_name')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('place_name'); ?></span>
                      <?php endif; ?>
                  </div>
                  <div class="form__field">
                      <label for="address" class="form__label">* Address:</label>
                      <input class="form__input" type="text" name="address" id="address" value="<?= old('address') ?>" required>
              
                      <?php if($errors->first('address')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('address'); ?></span>
                      <?php endif; ?>
                  </div>
                  <div class="form__field">
                      <label for="google_id" class="form__label">Google ID:</label>
                      <input class="form__input" type="text" name="google_id" id="google_id" value="<?= old('google_id') ?>" required>
              
                      <?php if($errors->first('google_id')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('google_id'); ?></span>
                      <?php endif; ?>
                  </div>
                  <div class="form__field">
                      <label for="note" class="form__label">Note:</label>
                      <textarea name="note" class="form__textarea" id="note" rows="10" required><?= old('note') ?></textarea>
                      <?php if($errors->first('note')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('note'); ?></span>
                      <?php endif; ?>
                  </div>
                  <div class="form__field">
                      <label for="plan_id" class="form__label">* Plan:</label>
                      <select name="plan_id" id="plan_id" class="form__select">
                          <option></option>
                          <?php foreach($plans as $plan): ?>
                              <option value="<?= $plan->id ?>"
                                  <?= $plan->id == old('plan_id') ? 'selected' : '' ?>>
                                  <?= $plan->plan_name ?>
                              </option>
                          <?php endforeach; ?>
                      </select>
                      <?php if($errors->first('plan_id')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('plan_id'); ?></span>
                      <?php endif; ?>
                  </div>
                  <button type="submit" class="form__button">Add Place</button>
              </form>
            </div>

            <div class="object__link">
              <a href="/console/places/list">Back to Place List</a>
            </div>

        </section>

        <?= view('layout.footer') ?>

    </body>
</html>