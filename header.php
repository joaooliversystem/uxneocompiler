<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NEO COMPILER</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.3/skins/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.3/skins/flat/green.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/99cb2d722b.js" crossorigin="anonymous"></script>

    <link rel="icon" href="assets/neocompiler.png">


    <style>

        .deploy-bg label{
            font-size: 13px!important;
        }
        .n-padding{
            padding: 0!important;
        }
        .deploy-bg{
            background: #223237!important;
            height: auto;
        }
        .deploy-bg input{
            background: #00AF92;
            border-color: #00AF92;
            color: white!important;
        }

        .deploy-bg select{
            color: white;
            -webkit-appearance: none;
            -moz-appearance:    none;
            appearance:         none;
            background: #00AF92;
            border-color: #00AF92;
            outline: none!important;
            -webkit-box-shadow: none!important;
            box-shadow: none!important;
        }
        .deploy-bg select:focus{
            background: #00AF92;
            border-color: #00AF92;
            color: white;
        }

        .deploy-bg option
        {
            background: #00AF92;
            color: white;
        }

        .deploy-bg input:focus{
            background: #00AF92;
            border-color: #1D2C30;
            color: white!important;
        }

        ::-webkit-input-placeholder { /* WebKit, Blink, Edge */
            color:    #fff!important;
        }
        :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
            color:     #fff!important;
            opacity:  1;
        }
        ::-moz-placeholder { /* Mozilla Firefox 19+ */
            color:    #fff!important;
            opacity:  1;
        }
        :-ms-input-placeholder { /* Internet Explorer 10-11 */
            color:     #fff!important;
        }
        ::-ms-input-placeholder { /* Microsoft Edge */
            color:    #fff!important;
        }

        ::placeholder { /* Most modern browsers support this now. */
            color:     #fff!important;
        }
        .gree-title{

            float: left;
            width: 100%;
            background: #00AF92;
            color: white;
            position: relative;
            top: 0;
            left: 0;
            padding: 10px 10px 10px 30px;
        }
        .tab-pane.fade {
            transition: all 0.2s;
            transform: none;
        }

        .preloader.fade {
            transition: all 0.2s;
            transform: translateX(1rem);
        }

        .preloader.fade.show {
            transform: translateX(0rem);
        }
        html,body{
            background: #263A40;
        }

        .nav{
            background: #223237;
            position: fixed;
            float: left;
            width: 100%;
        }

        .nav li{
            width: 100px;
        }

        .opt-select{
            padding: 20px 0 10px 0;
        }

        .opt-options-header{
            position: fixed;
            float: left;
            right: 0;
            top: 0;
            padding: 15px 25px 0 0;
        }

        .compiler-select{
            padding: 10px 0 10px 0!important;
            float: left!important;;
            margin-left: 15px!important;;
            text-align: center!important;;
        }

        .logo-item{
            background: #1D2C30;
            width: 100px;
        }

        .menu-vertical
        {
            position: fixed;
            top: 80px;
            float: left;
            width: 100px;
            display: block;
            height: 100%!important;
            background: #1D2C30;

        }

        .breadcrumb{
            background: none;
        }

        .breadcrumb a{
            color: white!important;
        }

        .nav-links{
            padding-top: 20px;
        }

        .menu-vertical li{
            display: inline-table;
            text-align: center;
            box-sizing:unset!important;
            height: 8%;
            background: #1D2C30;
        }


        .menu-vertical li a p{
          margin-bottom: 13px!important;
        }
        .menu-vertical li a:hover{
            background: #263A40;
            border-bottom: 5px solid #00AF92;

        }

        .menu-vertical *, ::after, ::before{
            box-sizing:unset;
        }

        .menu-vertical li a{
            color: white;
            height:100%;
            border-bottom: 5px solid transparent;
            padding:  15% 0 0 0!important;
            bottom: 0!important;
            font-size: 10px;
            text-transform: uppercase;
            text-decoration: none;
        }
        .menu-vertical .active{
            background: #263A40;
            border-bottom: 5px solid #00AF92;

        }
        #editor{
            position:relative;
            margin-top: 30px;
            right: 0;
            bottom: 0;
            left: 0;
            float: left;
            width: 100%;
            height: 350px;
            border-top: 10px solid #00AF92;
            background: #223237;

        }
        .tab-content{
            float: left;width: 100%;
        }
        .ace_print-margin{
            display: none!important;

        }
        .ace_gutter-active-line{
            background: #162124 !important;

        }
        .ace_gutter{
            background: #1D2C30!important;
        }
        .ace_active-line{
            background: #1D2C30!important;
        }

        .select2{
            border: none!important;
            color: white!important;
            -webkit-appearance: none!important;
            -moz-appearance:    none!important;
            appearance:         none!important;
            font-weight: bold!important;
            font-size: 12px!important;
            text-align: center!important;
            border-radius: 20px!important;
            outline: none!important;
            -webkit-box-shadow: none!important;
            box-shadow: none!important;
        }

        .compiler-select{
            border: none!important;
            color: white!important;
            -webkit-appearance: none!important;
            -moz-appearance:    none!important;
            appearance:         none!important;
            font-weight: bold!important;
            font-size: 12px!important;
            text-align: center!important;
            border-radius: 20px!important;
            outline: none!important;
            -webkit-box-shadow: none!important;
            box-shadow: none!important;
        }
        .select2-selection__arrow{
            display: none;
        }
        .select2-container--default .select2-selection--single{
            background:#00AF92 url('assets/seta.png') 120% 45% no-repeat!important;
            color: white!important;
            -webkit-appearance: none!important;
            -moz-appearance:    none!important;
            appearance:         none!important;

            border-color: #00AF92;

        }

        .select2-container--default .select2-selection--single .select2-selection__rendered{
            line-height: 38px;
            font-size: 15px;
            float: left;
            text-align-last:center!important;
            width: 80%;
        }
        .select2-selection--single {
            border-radius: 20px!important;
            height: 40px!important;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered{
            color: white!important;
        }
        .select2-container:focus{
            outline: none!important;
            border-color: #00AF92;

        }
        .compiler-select option
        {
            background: #00AF92!important;
            color: white!important;
        }

        .select2-container--default .select2-results__option--highlighted.select2-results__option--selectable{
            background: #00AF92!important;
        }

        .select2-container--default .select2-selection--single{
            border: none!important;
            outline: none!important;

        }
        .select2-container--default .select2-selection--single :focus{
            border: none!important;
            outline: none!important;
        }

        .w-seta{
            padding: 9px 3% 9px 0!important;
            width: 230px!important;
            background: #00AF92 url('assets/seta.png') 115% 45% no-repeat!important;
            text-align-last:center!important;
        }

        .hw-seta{
            padding: 9px 6% 9px 0!important;
            width: 230px!important;
            font-size: 14px!important;
            background: #00AF92 url('assets/seta.png') 115% 45% no-repeat!important;
            text-align-last:center!important;
        }

        .version-compile{

            float: right;
            color: white;

        }



        .btn-compile{

            background: #00AF92;
            color: white;
            margin-top: 30px;
            width: 150px;
            border: 1px solid #1D2C30;
            font-weight: bold;

        }
        .btn-compile:hover{
            background: white;
            border: 1px solid #00AF92;
            color: #00AF92;

        }

        .errors-warnings{
            margin-top: 15px;
            color: white;
        }
        .errors-warnings h4{
            font-size: 16px;
        }

        .errors-warnings  .display-erros{

            margin-top: 20px;
            padding: 10px;
            float: left;
            width: 100%;
            background: #162124;
            height: 200px;

        }
        .preloader .spinner-grow{
            background: #00AF92;
            position: absolute;
            top: 50%;
            float: left;
            width: 100%;
            align-content: center;
            align-items: center;
            align-self: center;
            text-align-last: center;
            left: 50%;
        }

        .collapseMore{

            position: absolute;
            right: 0;
            top: 50%;

        }
        .container-colapse{
            margin-top:20px;
            background: #1D2C30;
            float: left;
            width: 100%;
            padding: 10px;
            border-top: 10px solid #00AF92;

        }

        .container-colapse .container .errors-warnings{


        }
        .collapseMore{
            background: #00AF92;
            border-radius: 50% 0 0 50%;

        }

        .btn-warning{
            background: #162124!important;
            border-color: #162124!important;

        }
        .btn-info{
            background: #00AF92!important;
            border-color: #00AF92!important;
        }

        #collapseMore {
            transition: height 0.5s;
            -moz-transition: height 0.5s;
            /* Firefox 4 */
            -webkit-transition: height 0.5s;
            /* Safari and Chrome */
            -o-transition: height 0.5s;
            /* Opera */
        }

        .row{
            float: left;
            width: 100%;
        }
        .opts-compilers{
          padding-top: 15px;
            max-width: 200px;
            color: white;
            margin-left: 25px;
            float: right;
        }
        .form-control:disabled, .form-control[readonly]{
            background: transparent;
            border-color: transparent;
            border-bottom: 1px dashed #263A40;
        }

        #codeabi{
            resize: none!important;
        }

        input{
            outline: none!important;
        }
        textarea{
            outline: none!important;
        }

        input:focus{
            outline: none!important;
            border-color: transparent!important;

        }
        textarea:focus{
            outline: none!important;
            border-color: transparent!important;
        }

        .opts-compilers input{
            width: 30px;
        }
    </style>


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

    </ul>

</header>



<div class="container">
    <div class="row">
        <div class="tab-content">