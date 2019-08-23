<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="Description" content="Bangpu recreation ตากอากาศบางปู ปากน้ำ ชมนก ร้านอาหารสุขใจ ศาลาสุขใจ  บ้านพักบังกะโล เมนูแนะนำ 02-323-9530 สถานตากอากาศบางปู ป่าโกงกาง ถ่ายรูปนก นกนางนวล ที่เที่ยวปากน้ำ ที่เที่ยวสมุทรปราการ
bangpu samutpakarn ทะเล ป่าชายเลน">
    <meta name="robots" content="Bangpu recreation,ตากอากาศบางปู ,ปากน้ำ ,ชมนก ,ร้านอาหารสุขใจ ,ศาลาสุขใจ  ,บ้านพักบังกะโล ,เมนูแนะนำ ,02-323-9530 ,สถานตากอากาศบางปู ,ป่าโกงกาง ,ถ่ายรูปนก นกนางนวล, ที่เที่ยวปากน้ำ ,ที่เที่ยวสมุทรปราการ
bangpu ,samutpakarn ,ทะเล ป่าชายเลน" />
    <meta name="googlebot" content="Bangpu recreation,ตากอากาศบางปู ,ปากน้ำ ,ชมนก ,ร้านอาหารสุขใจ ,ศาลาสุขใจ  ,บ้านพักบังกะโล ,เมนูแนะนำ ,02-323-9530 ,สถานตากอากาศบางปู ,ป่าโกงกาง ,ถ่ายรูปนก นกนางนวล, ที่เที่ยวปากน้ำ ,ที่เที่ยวสมุทรปราการ
bangpu ,samutpakarn ,ทะเล ป่าชายเลน" />
    <title></title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("assets/images/common/favicon.ico") }}">

    <!-- CSS Reset -->
    <link rel="stylesheet" href="{{ asset("assets/css/reset.css") }}" type="text/css" media="all">

    <!-- Jquery Main -->
    <script src="{{ asset("assets/js/jquery.js") }}" type="text/javascript"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.css") }}" type="text/css" media="all">
    <script src="{{ asset("assets/js/bootstrap.js") }}" type="text/javascript"></script>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset("assets/css/font-awesome.min.css") }}" type="text/css" media="all">

    <!-- Menu Smartphone -->
    <link rel="stylesheet" href="{{ asset("assets/css/meanmenu.css") }}" type="text/css" media="all" />

    <!-- CSS Main -->
    <link rel="stylesheet" href="{{ asset("assets/css/layout-style.css") }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset("assets/css/cmn-style.css") }}" type="text/css" media="all">

</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.8";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<div class="wrapper">
    @include("layouts.header")
    @include("layouts.menu")
    @yield("content")
</div>

    @yield("javascript")
<script src="{{ asset("assets/js/meanmenu.js") }}"></script>

<script type="text/javascript">
    $(document).ready(function(){

        // Menu Smartphone
        jQuery('.menu-sp nav').meanmenu();

    });
</script>

</body>
</html>
