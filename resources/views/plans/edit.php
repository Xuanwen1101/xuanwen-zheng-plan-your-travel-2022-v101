<?= view('layout.header') ?>

<section class="main">

    <h2 class="title">Edit Plan</h2>

    <div class="objects-container">
        <form method="post" action="/console/plans/edit/<?= $plan->id ?>" novalidate class="form">
            <?= csrf_field() ?>
            <div class="form__field">
                <label for="plan_name" class="form__label">* Name:</label>
                <input type="text" class="form__input" name="plan_name" id="plan_name" value="<?= old('plan_name', $plan->plan_name) ?>" required>

                <?php if ($errors->first('plan_name')) : ?>
                    <br>
                    <span class="w3-text-red"><?= $errors->first('plan_name'); ?></span>
                <?php endif; ?>
            </div>
            <div class="form__field">
                <label for="type_id" class="form__label">* Transportation Type:</label>
                <select name="type_id" id="type_id" class="form__select">
                    <option></option>
                    <?php foreach ($types as $type) : ?>
                        <option value="<?= $type->id ?>" <?= $type->id == old('type_id', $plan->type_id) ? 'selected' : '' ?>>
                            <?= $type->title ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <?php if ($errors->first('type_id')) : ?>
                    <br>
                    <span class="w3-text-red"><?= $errors->first('type_id'); ?></span>
                <?php endif; ?>
            </div>
            <div class="form__field">
                <label for="departure" class="form__label">* Departure:</label>
                <input type="text" class="form__input" name="departure" id="departure" value="<?= old('departure', $plan->departure) ?>" required>

                <?php if ($errors->first('departure')) : ?>
                    <br>
                    <span class="w3-text-red"><?= $errors->first('departure'); ?></span>
                <?php endif; ?>
            </div>
            <div class="form__field">
                <label for="destination" class="form__label">* Destination:</label>
                <input type="text" class="form__input" name="destination" id="destination" value="<?= old('destination', $plan->destination) ?>" required>

                <?php if ($errors->first('destination')) : ?>
                    <br>
                    <span class="w3-text-red"><?= $errors->first('destination'); ?></span>
                <?php endif; ?>
            </div>
            <div class="form__field">
                <label for="note" class="form__label">Note:</label>
                <textarea name="note" class="form__textarea" id="note" required rows="10"><?= old('note', $plan->note) ?></textarea>
                <?php if ($errors->first('note')) : ?>
                    <br>
                    <span class="w3-text-red"><?= $errors->first('note'); ?></span>
                <?php endif; ?>
            </div>
            <div class="form__field">
                <label for="start_date" class="form__label">* Start Date:</label>
                <input type="date" class="form__input" name="start_date" id="start_date" value="<?= old('start_date', $plan->start_date) ?>" required>

                <?php if ($errors->first('start_date')) : ?>
                    <br>
                    <span class="w3-text-red"><?= $errors->first('start_date'); ?></span>
                <?php endif; ?>
            </div>
            <div class="form__field">
                <label for="end_date" class="form__label">* End Date:</label>
                <input type="date" class="form__input" name="end_date" id="end_date" value="<?= old('end_date', $plan->end_date) ?>" required>

                <?php if ($errors->first('end_date')) : ?>
                    <br>
                    <span class="w3-text-red"><?= $errors->first('end_date'); ?></span>
                <?php endif; ?>
            </div>
            <button type="submit" class="form__button">Edit Plan</button>
        </form>
    </div>

    <div class="object__link">
        <a href="/console/plans/list">Back to Plan List</a>
    </div>

</section>

<?= view('layout.footer') ?>