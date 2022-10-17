<?= view('layout.header') ?>

<?php if (session()->has('message')) : ?>
  <div class="w3-padding w3-margin-top w3-margin-bottom">
    <div class="w3-red w3-center w3-padding"><?= session()->get('message') ?></div>
  </div>
<?php endif; ?>

<section class="main">

  <h2 class="title">Manage Emails</h2>
  <div class="contact__wrapper">
    <?php foreach ($emails as $email) : ?>
      <div class="contact__card">
        <div class="contact__text">
          <div class="contact__content contact__content--name">
            <h2>Name:</h2>
            <h3><?= $email->name ?></h3>
          </div>
          <div class="contact__content contact__content--email">
            <h2>Email:</h2>
            <h3><?= $email->email ?></h3>
          </div>
          <div class="contact__content contact__content--message">
            <h2>Message:</h2>
            <p><?= $email->message ?></p>
          </div>
        </div>
        <a class="contact__delete" href="/console/emails/delete/<?= $email->id ?>">Delete</a>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<?= view('layout.footer') ?>