<?= view('layout.header') ?>

<section class="w3-padding main">

    <h2 class="title">Add User</h2>

    <div class="objects-container">
        <form method="post" action="/console/users/add" novalidate class="form">
            <?= csrf_field() ?>
            <div class="form__field">
                <label for="first" class="form__label">* First Name:</label>
                <input type="text" class="form__input" name="first" id="first" value="<?= old('first') ?>" required>

                <?php if ($errors->first('first')) : ?>
                    <br>
                    <span class="w3-text-red"><?= $errors->first('first'); ?></span>
                <?php endif; ?>
            </div>
            <div class="form__field">
                <label for="last" class="form__label">* Last Name:</label>
                <input type="text" class="form__input" name="last" id="last" value="<?= old('last') ?>" required>
                <?php if ($errors->first('last')) : ?>
                    <br>
                    <span class="w3-text-red"><?= $errors->first('last'); ?></span>
                <?php endif; ?>
            </div>
            <div class="form__field">
                <label for="email" class="form__label">* Email:</label>
                <input type="email" class="form__input" name="email" id="email" value="<?= old('email') ?>" required>
                <?php if ($errors->first('email')) : ?>
                    <br>
                    <span class="w3-text-red"><?= $errors->first('email'); ?></span>
                <?php endif; ?>
            </div>
            <div class="form__field">
                <label for="password" class="form__label">* Password:</label>
                <input type="password" class="form__input" name="password" id="password">
                <?php if ($errors->first('password')) : ?>
                    <br>
                    <span class="w3-text-red"><?= $errors->first('password'); ?></span>
                <?php endif; ?>
            </div>
            <button type="submit" class="form__button">Add User</button>
        </form>
    </div>

    <div class="object__link">
        <a href="/console/users/list">Back to User List</a>
    </div>

</section>

<?= view('layout.footer') ?>