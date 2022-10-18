<?= view('layout.header') ?>

<?php if (session()->has('message')) : ?>
  <div class="w3-padding w3-margin-top w3-margin-bottom">
    <div class="w3-red w3-center w3-padding"><?= session()->get('message') ?></div>
  </div>
<?php endif; ?>

<section class="main">

  <h2 class="title">Search List</h2>

  <div class="objects-container">
    <?php foreach ($results as $result) : ?>
      <div class="object-item">
        <h2 class="object-title"><?= $result['name'] ?></h2>
        <?php if ($result['rating']) : ?>
          <h3 class="object-text"> Rating: <?= $result['rating'] ?></h3>
        <?php endif; ?>
        <div id="object-edit">
          <ul class="edit__list">
            <li class="save__link"><a href="/console/search/save/<?= $result['place_id'] ?>">Save</a></li>
          </ul>
        </div>

      </div>
    <?php endforeach; ?>
  </div>

  <div class="object__link">
    <a href="/console/search/google">Back to Search Page</a>
  </div>

</section>

<?= view('layout.footer') ?>