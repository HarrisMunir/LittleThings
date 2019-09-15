<link href="cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
<!doctype html>
<html lang="en">
<head>
    @include('welcome/bc')
    {{--Favicon----------------------------------------------------------------------------}}
    <link style="width: 600%" href="{{ asset('images/favicon.png') }}" rel="shortcut icon">
    <title>Little Things</title>
</head>
<div style="margin-top:7px;">
    @include('welcome/sliderCss')
    @include('welcome/slider')

</div>

</body>
@include('welcome/bj')

</html>
