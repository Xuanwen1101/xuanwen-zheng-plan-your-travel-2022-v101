<?= view('layout.header') ?>

<section class="main">

    <h2 class="title">Add Place</h2>

    <div class="objects-container">
        <form method="post" action="/console/places/add" novalidate class="form">
            <?= csrf_field() ?>
            <div class="form__field">
                <label for="place_name" class="form__label">* Name:</label>
                <input class="form__input" type="text" name="place_name" id="place_name" value="<?= old('place_name') ?>" required>

                <?php if ($errors->first('place_name')) : ?>
                    <br>
                    <span class="w3-text-red"><?= $errors->first('place_name'); ?></span>
                <?php endif; ?>
            </div>
            <div class="form__field">
                <label for="address" class="form__label">* Address:</label>
                <input class="form__input" type="text" name="address" id="address" value="<?= old('address') ?>" required>

                <?php if ($errors->first('address')) : ?>
                    <br>
                    <span class="w3-text-red"><?= $errors->first('address'); ?></span>
                <?php endif; ?>
            </div>
            <div class="form__field">
                <label for="google_id" class="form__label">Google ID:</label>
                <input class="form__input" type="text" name="google_id" id="google_id" value="<?= old('google_id') ?>" required>

                <?php if ($errors->first('google_id')) : ?>
                    <br>
                    <span class="w3-text-red"><?= $errors->first('google_id'); ?></span>
                <?php endif; ?>
            </div>
            <div class="form__field">
                <label for="note" class="form__label">Note:</label>
                <textarea name="note" class="form__textarea" id="note" rows="10" required><?= old('note') ?></textarea>
                <?php if ($errors->first('note')) : ?>
                    <br>
                    <span class="w3-text-red"><?= $errors->first('note'); ?></span>
                <?php endif; ?>
            </div>
            <div class="form__field">
                <label for="plan_id" class="form__label">* Plan:</label>
                <select name="plan_id" id="plan_id" class="form__select">
                    <option></option>
                    <?php foreach ($plans as $plan) : ?>
                        <option value="<?= $plan->id ?>" <?= $plan->id == old('plan_id') ? 'selected' : '' ?>>
                            <?= $plan->plan_name ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <?php if ($errors->first('plan_id')) : ?>
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