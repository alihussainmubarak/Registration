<!-- Column -->
<div class="col-md-4 m-md-auto p-0">

    <!-- Card -->
    <div class="card bg-light">
        <div class="card-body">

            <!-- Form -->
            <?php echo form_open_multipart('register'); ?>

            <div class="form-group">
                <label>Username</label>
                <input class="form-control" type="text" name="username" />
                <div class="text-danger"><?php echo form_error('username'); ?></div>
            </div>

            <div class="form-group">
                <label for="name">Email</label>
                <input class="form-control" type="email" name="email" />
                <div class="text-danger"><?php echo form_error('email'); ?></div>
            </div>
            <br>

            <!-- Google reCaptcha -->
            <div class="g-recaptcha" data-sitekey="6LftT_0UAAAAAMqtcQf6ydvKIHuVFuANqaqqGV5u"></div>
            <div class="text-danger"><?php echo form_error('g-recaptcha-response'); ?></div>
            <br>

            <p>Registration confirmation will be emailed to you.</p>

            <input class="btn btn-primary float-right" type="submit" name="submit" value="Register" />

            <?php echo form_close(); ?>
            <!-- Form / end -->

        </div>
    </div>
    <!-- Card / end -->

</div>
<!-- Column /end -->
