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

            <h2 class="title">Add Plan</h2>

            <div class="objects-container">
              <form method="post" action="/console/plans/add" novalidate class="form">
              <?= csrf_field() ?>
                  <div class="form__field">
                      <label for="plan_name" class="form__label">* Name:</label>
                      <input type="text" class="form__input" name="plan_name" id="plan_name" value="<?= old('plan_name') ?>" required>
              
                      <?php if($errors->first('plan_name')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('plan_name'); ?></span>
                      <?php endif; ?>
                  </div>
                  <div class="form__field">
                      <label class="form__label" for="trans_type">* Transportation Type:</label>
                      <input type="text" class="form__input" name="trans_type" id="trans_type" value="<?= old('trans_type') ?>" required>
              
                      <?php if($errors->first('trans_type')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('trans_type'); ?></span>
                      <?php endif; ?>
                  </div>
                  <div class="form__field">
                      <label for="departure" class="form__label">* Departure:</label>
                      <input type="text" class="form__input" name="departure" id="departure" value="<?= old('departure') ?>" required>
              
                      <?php if($errors->first('departure')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('departure'); ?></span>
                      <?php endif; ?>
                  </div>
                  <div class="form__field">
                      <label for="destination" class="form__label">* Destination:</label>
                      <input type="text" class="form__input" name="destination" id="destination" value="<?= old('destination') ?>" required>
              
                      <?php if($errors->first('destination')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('destination'); ?></span>
                      <?php endif; ?>
                  </div>
                  <div class="form__field">
                      <label for="note" class="form__label">Note:</label>
                      <textarea class="form__textarea" name="note" id="note" required rows="10"><?= old('note') ?></textarea>
                      <?php if($errors->first('note')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('note'); ?></span>
                      <?php endif; ?>
                  </div>
                  <div class="form__field">
                      <label for="start_date" class="form__label">* Start Date:</label>
                      <input type="date" class="form__input" name="start_date" id="start_date" value="<?= old('start_date') ?>" required>
              
                      <?php if($errors->first('start_date')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('start_date'); ?></span>
                      <?php endif; ?>
                  </div>
                  <div class="form__field">
                      <label for="end_date" class="form__label">* End Date:</label>
                      <input type="date" class="form__input" name="end_date" id="end_date" value="<?= old('end_date') ?>" required>
              
                      <?php if($errors->first('end_date')): ?>
                          <br>
                          <span class="w3-text-red"><?= $errors->first('end_date'); ?></span>
                      <?php endif; ?>
                  </div>
                  <button type="submit" class="form__button">Add Plan</button>
              </form>
            </div>

            <div class="object__link">
              <a href="/console/plans/list">Back to Plan List</a>
            </div>

        </section>

    </body>
</html>