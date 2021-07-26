<div class="container pt-3">
    <div class="row">
        <div class="col"></div>

        <div class="col-4">
            <h3 class="text-center">Register</h3>

            <?php $form = App\Core\Form\Form::begin('/register', 'post') ?>
                <?php echo $form->field($model, 'firstname'); ?>
                <?php echo $form->field($model, 'lastname'); ?>
                <?php echo $form->field($model, 'email'); ?>
                <?php echo $form->field($model, 'password')->passwordField(); ?>
                <?php echo $form->field($model, 'confirmPassword')->passwordField(); ?>
                <div class="d-grid gap-2 mx-auto">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            <?php App\Core\Form\Form::end();?>

        </div>

        <div class="col"></div>
    </div>
</div>