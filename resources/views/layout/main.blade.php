<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">
<head>
    <!-- Basic need -->
    <title>Open Pediatrics</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="profile" href="#">
    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
    <!-- Mobile specific meta -->
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone-no">
    <!-- CSS files -->
    @include('layout/path_header')
</head>
<body>
{{--header--}}
@include('layout/header')
{{--header--}}
{{--main--}}
@yield('main')
{{--end main--}}
<!--end of latest new v1 section-->
<!-- footer section-->
@include('layout/footer')
<!-- end of footer section-->
@include('layout/path_footer')
</body>

<!-- Mirrored from haintheme.com/demo/html/bustter/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Apr 2020 14:40:24 GMT -->
</html>
