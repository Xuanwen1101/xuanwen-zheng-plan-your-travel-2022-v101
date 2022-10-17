<?= view('layout.header') ?>

<?php if (session()->has('message')) : ?>
  <div class="w3-padding w3-margin-top w3-margin-bottom">
    <div class="w3-red w3-center w3-padding"><?= session()->get('message') ?></div>
  </div>
<?php endif; ?>

<section class="main">

  <h2 class="title">Manage Places</h2>
  <div class="objects-container">
    <?php foreach ($places as $place) : ?>
      <?php if ($place->user_id == auth()->user()->id) : ?>
        <div class="object-item">
          <h2 class="object-title"><?= $place->place_name ?></h2>
          <div id="object-edit">
            <ul class="edit__list">
              <li class="edit__link"><a href="/console/places/edit/<?= $place->id ?>">Edit</a></li>
              <li class="delete__link"><a href="/console/places/delete/<?= $place->id ?>">Delete</a></li>
            </ul>
          </div>
        </div>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>

  <div class="object__link">
    <a href="/console/places/add">New Place +</a>
  </div>

</section>

<?= view('layout.footer') ?>