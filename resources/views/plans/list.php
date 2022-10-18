<?= view('layout.header') ?>

<?php if (session()->has('message')) : ?>
  <div class="w3-padding w3-margin-top w3-margin-bottom">
    <div class="w3-red w3-center w3-padding"><?= session()->get('message') ?></div>
  </div>
<?php endif; ?>

<section class="main">

  <h2 class="title">Manage Plans</h2>
  <div class="objects-container">
    <?php foreach ($plans as $plan) : ?>
      <?php if ($plan->user_id == auth()->user()->id) : ?>
        <div class="object-item">
          <?php if ($plan->trans_type) : ?>
            <?php if ($plan->trans_type == "Car") : ?>
              <img src="/images/car.png" width="220" height="220">
            <?php elseif ($plan->trans_type == "Bus") : ?>
              <img src="/images/bus.png" width="220" height="220">
            <?php elseif ($plan->trans_type == "Airplane") : ?>
              <img src="/images/airplane.png" width="220" height="220">
            <?php elseif ($plan->trans_type == "Train") : ?>
              <img src="/images/train.png" width="220" height="220">
            <?php elseif ($plan->trans_type == "Bike") : ?>
              <img src="/images/bike.png" width="220" height="220">
            <?php endif; ?>
          <?php endif; ?>
          <h2 class="object-title"><?= $plan->plan_name ?></h2>
          <ul>
            <?php foreach ($places as $place) : ?>
              <?php if ($place->plan_id == $plan->id) : ?>
                <li class="place__link"><a href="/console/places/edit/<?= $place->id ?>"><?= $place->place_name ?></a></li>
              <?php endif; ?>
            <?php endforeach; ?>
          </ul>
          <div id="object-edit">
            <ul class="edit__list">
              <li class="edit__link"><a href="/console/plans/edit/<?= $plan->id ?>">Edit</a></li>
              <li class="delete__link"><a href="/console/plans/delete/<?= $plan->id ?>">Delete</a></li>
            </ul>
          </div>
        </div>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
  <div class="object__link">
    <a href="/console/plans/add">New Plan +</a>
  </div>
</section>

<?= view('layout.footer') ?>