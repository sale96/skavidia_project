
    <div class="title-bar">
        <h1>Forgot password?</h1>
    </div>
    <div class="container">
        <div class="row">
            <form class="col s6 offset-s3" action="<?= URL_ROOT ?>Log/forgotPassword" method="post">
                <div class="input-field">
                    <input type="text" id="forgot_name" name="forgot_name">
                    <label for="forgot_name">Enter your username</label>
                </div>
                <div class="input-field">
                    <button name="forgot-submit" type="submit" class="waves-effect waves-light btn-large">Send</button><br><br>
                    <a href="<?= URL_ROOT ?>Log/login">Have account? Login</a>
                </div>
            </form>
        </div>
    </div>
