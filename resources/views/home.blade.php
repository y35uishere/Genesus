<!DOCTYPE html>
<html>
    <head>
        <title>Lift Off</title>
        <meta charset="utf-8" />
        <base href="/">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="Lift Off lets you create your own branded supplement line, risk free.">
        <meta http-equiv="Pragma" content="public">
        <meta http-equiv="Cache-Control" content="public">
        <meta http-equiv="Expires" content="Sat, 01 Dec 2018 00:00:00 GMT">
        <meta name="viewport" content="width=device-width" />
        <link href="//fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link href="/assets/css/app.css" rel="stylesheet">
        <link rel="shortcut icon" href="/favicon2.ico?v=2.0" type="image/x-icon">
        <link rel="icon" href="/favicon2.ico" type="image/x-icon">
    </head>
    <body ng-app="myApp" style="background:#fff;" ng-controller="mainController">
        <div ng-include="'/html/templates/navbar.html?'+template_v"></div>
        <div id="pop-module">
            <div ng-if="now_module == 'login'" ng-include="'/html/templates/login.html?'+template_v"></div>
            <div ng-if="now_module == 'register'" ng-include="'/html/templates/register.html?'+template_v"></div>
        </div>
    <section class="innerpage" ng-view></section>
</body>
<script type="text/javascript" src="/assets/js/app.js"></script>
</html>
