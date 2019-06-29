<?php require APP_ROOT.'\views\fixed\header.php'; ?>

<div class="container">
    <div id="showcase" class="valign-wrapper">
        <div id="showcase-center">
            <h1>Welcome to <?= SITE_NAME; ?></h1>
        </div>
    </div>

    <div class="row">
        <div class="col s6">
            <h2>Top products by voters: </h2>

            <div class="divider mb-3"></div>

            <?php if(!User::isLogged()) : ?>
            <div id="top-products" class="row">


                <div class="col s4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="http://placehold.it/150x150">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                            <p><a href="#">This is a link</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>
                <div class="col s4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="http://placehold.it/150x150">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                            <p><a href="#">This is a link</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>
                <div class="col s4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="http://placehold.it/150x150">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                            <p><a href="#">This is a link</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>
                <div class="col s4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="http://placehold.it/150x150">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                            <p><a href="#">This is a link</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>
                <div class="col s4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="http://placehold.it/150x150">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                            <p><a href="#">This is a link</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>
                <div class="col s4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="http://placehold.it/150x150">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                            <p><a href="#">This is a link</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>

            <!-- Top products end -->
            </div>
            <?php endif; ?>


        </div>
        <div class="col s6">

        </div>
    </div>
</div>


<?php require APP_ROOT.'\views\fixed\footer.php'; ?>



