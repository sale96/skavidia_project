<?php require APP_ROOT.'\views\fixed\header.php'; ?>
    <div class="title-bar">
        <h1>Login</h1>
    </div>
    <div class="container">
        <div class="row">
            <form class="col s6 offset-s3" action="<?= URL_ROOT ?>Log/login" method="post">
                <div class="input-field">
                    <input type="text" id="login_name" name="login_name">
                    <label for="login_name">Username</label>
                </div>
                <div class="input-field">
                    <input type="text" id="login_password" name="login_password">
                    <label for="login_password">Password</label>
                </div>
                <div class="input-field">
                    <button name="login-submit" type="submit" class="waves-effect waves-light btn-large">Login</button><br><br>
                    <a href="<?= URL_ROOT ?>Log/register">Don't have account?</a><br>
                    <a href="<?= URL_ROOT ?>Log/forgotPassword">Forgot your password?</a>
                </div>
            </form>
        </div>
    </div>

<?php require APP_ROOT.'\views\fixed\footer.php'; ?>