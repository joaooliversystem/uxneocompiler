<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NEO COMPILER</title>

    <link rel="stylesheet" href="public/css/bootstrap.min-4.5.3.css">
    <link rel="stylesheet" href="public/css/all.min-1.0.3.css">    
    <link rel="stylesheet" href="public/css/green.min-1.0.3.css">    
    <link rel="stylesheet" href="public/css/select2.min-4.1.0.css">
    <script src="https://kit.fontawesome.com/99cb2d722b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/neocompiler.png">
</head>
<!--Big blue-->
<div id="mdb-preloader" class="flex-center preloader">
    <div class="preloader-wrapper active">
        <div class="spinner-layer spinner-blue-only">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div>
            <div class="gap-patch">
                <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
    </div>
</div>
<body>

<div class="preloader" style="position: absolute;left: 0;top: 0;width: 100%;height: 100%;padding: 1px;background: #1D2C30;z-index: 1000000!important;">
    <div class="spinner-grow text-center" style="width: 5rem; height: 5rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div></div>
<header>


    <ul class="nav">


        <li class="nav-item logo-item">
            <a class="nav-link " href=""><img src="assets/neocompiler.png" style="width: 65px"></a>
        </li>


    </ul>

    <div class="opt-options-header">
        <form>
            <select class="compiler-select hw-seta selectclass">
                <option>NeoCompiler-Eco</option>
                <option>Localhost</option>
                <option>NEO MainNet (unsafe)</option>
                <option>NEO TestNet</option>
            </select>

            <select class="compiler-select hw-seta selectclass">
                <option>NeoCompiler-Eco</option>
                <option>NeoLogin</option>
            </select>
        </form>
    </div>
    <ul class="nav menu-vertical" id="nav-tab" role="tablist">

        <li class="nav-item">
            <a class="nav-link active"   style="margin-top: 0!important;" id="nav-home-tab" data-toggle="tab" href="#nav-compilers" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fab fa-500px fa-3x"></i><p>COMPILERS</p></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-sbuild" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fab fa-500px fa-3x"></i><p>Send & Build</p></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-deploy" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fab fa-500px fa-3x"></i><p>Deploy & Invoke</p></a>
        </li>

        <li class="nav-item">
            <a class="nav-link"  id="nav-home-tab" data-toggle="tab" href="#nav-rpc" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fab fa-500px fa-3x"></i><p>Raw RPC</p></a>
        </li>

        <li class="nav-item">
            <a class="nav-link"  id="nav-home-tab" data-toggle="tab" href="#nav-activity" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fab fa-500px fa-3x"></i><p>Activity</p></a>
        </li>

        <li class="nav-item">
            <a class="nav-link"  id="nav-home-tab" data-toggle="tab" href="#nav-storage" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fab fa-500px fa-3x"></i><p>Storage Query</p></a>
        </li>

        <li class="nav-item">
            <a class="nav-link"  id="nav-home-tab" data-toggle="tab" href="#nav-wallet" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fab fa-500px fa-3x"></i><p>Wallet</p></a>
        </li>

        <li class="nav-item">
            <a class="nav-link"  id="nav-home-tab" data-toggle="tab" href="#nav-conversors" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fab fa-500px fa-3x"></i><p>Conversors</p></a>
        </li>

        <li class="nav-item">
            <a class="nav-link"  id="nav-home-tab" data-toggle="tab" href="#nav-consensus" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fab fa-500px fa-3x"></i><p>Consensus</p></a>
        </li>

        <li class="nav-item">
            <a class="nav-link"  id="nav-home-tab" data-toggle="tab" href="#nav-statistics" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fab fa-500px fa-3x"></i><p>Statistics</p></a>
        </li>

        <li class="nav-item">
            <a class="nav-link"  id="nav-home-tab" data-toggle="tab" href="#nav-settings" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fab fa-500px fa-3x"></i><p>Settings</p></a>
        </li>
        <li class="nav-item small-screen">
            <a class="nav-link"  id="nav-home-tab" data-toggle="tab" href="#nav-settings" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fab fa-500px fa-3x"></i><p>Settings</p></a>
        </li>
    </ul>

</header>



<div class="container">
    <div class="row">
        <div class="tab-content">