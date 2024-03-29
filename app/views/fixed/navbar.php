<nav class="fixed">
    <div class="container">

    </div>
    <nav class="nav-extended bg-1">
        <div class="container">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo"><?= SITE_NAME; ?></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <?php if(!User::isLogged()) : ?>
                    <li><a href="<?= URL_ROOT; ?>Log/login"><i class="material-icons">person</i> Login</a></li>
                    <li><a href="<?= URL_ROOT; ?>Log/register"><i class="material-icons">person_add</i> Register</a></li>
                    <?php else: ?>
                    <li><a href="<?= URL_ROOT; ?>Users/inbox"><i class="material-icons">mail_outline</i></a></li>
                    <li><a href="<?= URL_ROOT; ?>Users/profile"><i class="material-icons">person_pin</i> </a></li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="nav-content">
                <ul class="tabs tabs-transparent">
                    <li class="tab"><a class="<?= isset($data['param']) ? $data['param'] == 'index' ? 'active' : '' : ''; ?>" href="<?= URL_ROOT; ?>Pages/index">Home</a></li>
                    <li class="tab"><a class="<?= isset($data['param']) ? $data['param'] == 'about' ? 'active' : '' : ''; ?>" href="<?= URL_ROOT; ?>Pages/about">About</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="<?= URL_ROOT; ?>Log/login">Login</a></li>
        <li><a href="<?= URL_ROOT; ?>Log/register">Register</a></li>
    </ul>

<!--    <div id="test1" class="col s12 ml-3">Test 1</div>-->
<!--    <div id="test2" class="col s12">Test 2</div>-->
<!--    <div id="test3" class="col s12">Test 3</div>-->
<!--    <div id="test4" class="col s12">Test 4</div>-->
</nav>