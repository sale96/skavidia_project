<nav class="fixed">
    <div class="container">

    </div>
    <nav class="nav-extended bg-1">
        <div class="container">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo"><?= SITE_NAME; ?></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="sass.html"><i class="material-icons">person</i> Login</a></li>
                    <li><a href="badges.html"><i class="material-icons">person_add</i> Register</a></li>
                </ul>
            </div>
            <div class="nav-content">
                <ul class="tabs tabs-transparent">
                    <li class="tab"><a class="<?= $data['param'] == 'index' ? 'active' : ''; ?>" href="<?= URL_ROOT; ?>Pages/index">Home</a></li>
                    <li class="tab"><a class="<?= $data['param'] == 'about' ? 'active' : ''; ?>" href="<?= URL_ROOT; ?>Pages/about">About</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
    </ul>

<!--    <div id="test1" class="col s12 ml-3">Test 1</div>-->
<!--    <div id="test2" class="col s12">Test 2</div>-->
<!--    <div id="test3" class="col s12">Test 3</div>-->
<!--    <div id="test4" class="col s12">Test 4</div>-->
</nav>