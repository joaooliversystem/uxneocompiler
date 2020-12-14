<?php include_once 'header.php';?>

    <div class="clearfix"></div>
<br>
<br>
<br>

    <!-- PAGINA COMPILERS INICIO -->

    <div class="tab-pane fade show active" id="nav-compilers" role="tabpanel" aria-labelledby="nav-home-tab">
        <nav class="nav-links" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><a><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page"><a>  <span class="spinner-grow spinner-grow-sm preloader" role="status" aria-hidden="true"></span>
                        Compilers</a></li>
            </ol>
        </nav>
        <?php include_once 'paginas/compilers.php';?>

    </div>


    <!-- PAGINA DEPLOY INICIO -->


    <div class="tab-pane fade" id="nav-deploy" role="tabpanel" aria-labelledby="nav-home-tab">
        <nav class="nav-links" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><a><i class="fas fa-home "></i></a></li>
                <li class="breadcrumb-item active" aria-current="page"><a>Deploy</a></li>
            </ol>
        </nav>


        <?php include_once 'paginas/deploy.php';?>

    </div>



    <!-- PAGINA SEND&BUILD INICIO -->


    <div class="tab-pane fade" id="nav-sbuild" role="tabpanel" aria-labelledby="nav-home-tab">
        <nav class="nav-links" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><a><i class="fas fa-home "></i></a></li>
                <li class="breadcrumb-item active" aria-current="page"><a> Send & Build</a></li>
            </ol>
        </nav>


        <?php include_once 'paginas/sbuild.php';?>

    </div>


    <!-- PAGINA RPC INICIO -->


    <div class="tab-pane fade" id="nav-rpc" role="tabpanel" aria-labelledby="nav-home-tab">
        <nav class="nav-links" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><a><i class="fas fa-home "></i></a></li>
                <li class="breadcrumb-item active" aria-current="page"><a>RPC</a></li>
            </ol>
        </nav>



        <?php include_once 'paginas/raw.php';?>

    </div>


    <!-- PAGINA ACTIVITY INICIO -->


    <div class="tab-pane fade" id="nav-activity" role="tabpanel" aria-labelledby="nav-home-tab">
        <nav class="nav-links" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><a><i class="fas fa-home "></i></a></li>
                <li class="breadcrumb-item active" aria-current="page"><a>Activity</a></li>
            </ol>
        </nav>
    </div>


    <!-- PAGINA STORAGE INICIO -->


    <div class="tab-pane fade" id="nav-storage" role="tabpanel" aria-labelledby="nav-home-tab">
        <nav class="nav-links" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><a><i class="fas fa-home "></i></a></li>
                <li class="breadcrumb-item active" aria-current="page"><a>Storage Query</a></li>
            </ol>
        </nav>


        <?php include_once 'paginas/storage.php';?>

    </div>


    <!-- PAGINA WALLET INICIO -->


    <div class="tab-pane fade" id="nav-wallet" role="tabpanel" aria-labelledby="nav-home-tab">
        <nav class="nav-links" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><a><i class="fas fa-home "></i></a></li>
                <li class="breadcrumb-item active" aria-current="page"><a>Wallet</a></li>
            </ol>
        </nav>
    </div>


    <!-- PAGINA CONVERSORS INICIO -->


    <div class="tab-pane fade" id="nav-conversors" role="tabpanel" aria-labelledby="nav-home-tab">
        <nav class="nav-links" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><a><i class="fas fa-home "></i></a></li>
                <li class="breadcrumb-item active" aria-current="page"><a>Conversors</a></li>
            </ol>
        </nav>
        <?php include_once 'paginas/conversus.php';?>

    </div>

    <!-- PAGINA CONSENSUS INICIO -->


    <div class="tab-pane fade" id="nav-consensus" role="tabpanel" aria-labelledby="nav-home-tab">
        <nav class="nav-links" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><a><i class="fas fa-home "></i></a></li>
                <li class="breadcrumb-item active" aria-current="page"><a>Consensus</a></li>
            </ol>
        </nav>
        <?php include_once 'paginas/consensus.php';?>

    </div>


    <!-- PAGINA STATISTICS INICIO -->


    <div class="tab-pane fade" id="nav-statistics" role="tabpanel" aria-labelledby="nav-home-tab">
        <nav class="nav-links" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><a><i class="fas fa-home "></i></a></li>
                <li class="breadcrumb-item active" aria-current="page"><a>Statistics</a></li>
            </ol>
        </nav>
    </div>


    <!-- PAGINA STATISTICS INICIO -->


    <div class="tab-pane fade" id="nav-settings" role="tabpanel" aria-labelledby="nav-home-tab">
        <nav class="nav-links" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><a><i class="fas fa-home "></i></a></li>
                <li class="breadcrumb-item active" aria-current="page"><a>Settings</a></li>
            </ol>
        </nav>

        <?php include_once 'paginas/config.php';?>
    </div>

    <?php include_once 'footer.php';?>