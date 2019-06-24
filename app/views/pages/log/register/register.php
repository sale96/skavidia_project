<?php require APP_ROOT.'\views\fixed\header.php'; ?>
<div class="title-bar">
    <h1>Register</h1>
</div>
<div class="container">
    <div class="row">
        <form class="col s6 offset-s3" action="<?= URL_ROOT ?>Log/register" method="post">
            <div class="input-field">
                <input type="text" id="register_name" name="register_name">
                <label for="register_name">Username</label>
            </div>
            <div class="input-field">
                <input type="text" id="register_email" name="register_email">
                <label for="register_email">Email</label>
            </div>
            <div class="input-field">
                <input type="text" id="register_password" name="register_password">
                <label for="register_password">Password</label>
            </div>
            <div class="input-field">
                <input type="text" id="register_rep_password" name="register_rep_password">
                <label for="register_rep_password">Repeat Password</label>
            </div>
            <div class="input-field">
                <button name="register-submit" type="submit" class="waves-effect waves-light btn-large">Register</button>
                <br><br>
                <a href="<?= URL_ROOT ?>Log/login">Have account? Login</a>
            </div>
        </form>
    </div>
</div>

<?php require APP_ROOT.'\views\fixed\footer.php'; ?>