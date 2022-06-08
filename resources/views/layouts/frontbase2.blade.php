<!DOCTYPE html>
<html lang="en">
<head>
    <!--===============================================
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield("title")</title>
    <meta charset="UTF-8">
    <meta name="description" content="@yield("description")">
    <meta name="keywords" content="@yield("keywords")">
    <meta name="author" content="Canberk Aykanat">
    <link rel="icon" href="@yield("icon")">


    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="/assets/img/wpf-favicon.png"/>


    <!-- CSS
    ================================================== -->
    <!-- Bootstrap css file-->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="/assets/css/superslides.css">
    <!-- Slick slider css file -->
    <link href="/assets/css/slick.css" rel="stylesheet">
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="/assets/css/animate.css">
    <!-- preloader -->
    <link rel="stylesheet" href="/assets/css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="/assets/css/jquery.tosrus.all.css" />
    <!-- Default Theme css file -->
    <link id="switcher" href="/assets/css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="/assets/style.css" rel="stylesheet">

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

   @yield('head')
</head>

<body>
@include('home.header')
@yield('content')

@include('home.footer')


<!-- initialize jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Preloader js file -->
<script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script> //
<!-- For smooth animatin  -->
<script src="/assets/js/wow.min.js"></script>

<script src="/assets/js/bootstrap.min.js"></script>

<script src="/assets/js/slick.min.js"></script>

<script src="/assets/js/jquery.easing.1.3.js"></script>
<script src="/assets/js/jquery.animate-enhanced.min.js"></script>

<script src="/assets/js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>
<!-- for circle counter -->
<script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
<!-- Gallery slider -->
<script type="text/javascript" src="/assets/js/jquery.tosrus.min.all.js"></script>

<!-- Custom js-->
<script src="/assets/js/custom.js"></script>
</body>
</html>
