<?= view('layout.header') ?>

<section class="main">
  <?php if (Auth::check()) : ?>
    <div class="dashboard__user">Hello, <?= auth()->user()->first ?> <?= auth()->user()->last ?>!</div>
  <?php else : ?>
    <a href="/" class="dashboard__user">Return to Home Page</a>
  <?php endif; ?>
  <ul id="dashboard" class="dashboard__container">
    <li class="dashboard__link">
      <a href="/console/plans/list">
        <img src="/icons/plans.svg" alt="Icon for Plans List">
        Your Plans
      </a>
    </li>
    <li class="dashboard__link">
      <a href="/console/places/list">
        <img src="/icons/places.svg" alt="Icon for Places List">
        Your Places
      </a>
    </li>
    <li class="dashboard__link">
      <a href="/console/search/google">
        <img src="/icons/search.svg" alt="Icon for Search Place">
        Search Place
      </a>
    </li>
    <li class="dashboard__link">
      <a href="/console/users/list">
        <img src="/icons/users.svg" alt="Icon for User Accounts List">
        Your Account
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