<?= view('layout.header') ?>

<?php if (session()->has('message')) : ?>
  <div class="w3-padding w3-margin-top w3-margin-bottom">
    <div class="w3-red w3-center w3-padding"><?= session()->get('message') ?></div>
  </div>
<?php endif; ?>

<section class="users main">

  <h2 class="title">Manage Users</h2>
  <div class="users__container">
    <?php foreach ($users as $user) : ?>
      <div class="users__card">
        <div class="users__text">
          <span class="users__id">ID: <?= $user->id ?></span>
          <h2 class="users__name"><?= $user->first ?> <?= $user->last ?></h2>
          <h3 class="users__email"><?= $user->email ?></h3>
        </div>
        <div class="users__functions">
          <a href="/console/users/edit/<?= $user->id ?>">Edit</a>
          <a href="/console/users/delete/<?= $user->id ?>" class="user__delete">Delete</a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <div class="users__add">
    <a href="/console/users/add">Add User +</a>
  </div>
</section>

<?= view('layout.footer') ?>