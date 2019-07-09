
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
                <input type="password" id="register_password" name="register_password">
                <label for="register_password">Password</label>
            </div>
            <div class="input-field">
                <input type="password" id="register_rep_password" name="register_rep_password">
                <label for="register_rep_password">Repeat Password</label>
            </div>
            <div class="input-field">
                <button name="register-submit" type="submit" class="waves-effect waves-light btn-large">Register</button>
                <br><br>
                <a href="<?= URL_ROOT ?>Log/login">Have account? Login</a>
            </div>
        </form>
        <div class="col s6 offset-s3">
            <?php
            if(isset($data['error'])){
                if(is_array($data['error'])){
                    foreach($data['error'] as $value){
                        echo "<p class='card-panel red darken-3 white-text'>{$value}</p>";
                    }
                }else{
                    echo "<p class='card-panel red darken-3 white-text'>{$data['error']}</p>";
                }
                unset($data['error']);
            }
            ?>
        </div>
    </div>
</div>
