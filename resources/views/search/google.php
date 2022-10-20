<?= view('layout.header') ?>

<section class="main">
  <h2 class="title">Place Search</h2>

  <div class="objects-container">
    <form action="/console/search/list" method="GET" role="search">
      <?= csrf_field() ?>
      <div class="search-content">
        <img src="/images/PlaceSearch.png" alt="travelmap" width="500" class="">
        <div class="input-group">
          <input type="text" class="form-control search-item" name="q" placeholder="Park, Vancouver">
        </div>
      </div>
    </form>
  </div>

</section>

<?= view('layout.footer') ?>
