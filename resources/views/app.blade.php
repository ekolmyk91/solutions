{{--<!DOCTYPE html>--}}
{{--<html lang="{{ app()->getLocale() }}">--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    {{--<!-- CSRF Token -->--}}
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}
    {{--<title>Tasksman</title>--}}
    {{--<!-- Styles -->--}}
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--</head>--}}
{{--<body>--}}
{{--<div id="app"></div>--}}

{{--<script src="{{ asset('js/app.js') }}"></script>--}}
{{--</body>--}}
{{--</html>--}}

<!DOCTYPE html>
<html>
<head lang="{{ app()->getLocale() }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Web4Pro Team</title>
    <link rel="shortcut icon" href="favicon.ico">
    <!-- CSS -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/application.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,800" rel="stylesheet">
    <link rel="stylesheet"
          href="https://mk0herothemesdek9380.kinstacdn.com/wp-content/plugins/heroic-social-widget/css/font-awesome.min.css"
          type="text/css" media="all">
</head>
<body>
<div id="app"></div>
<script src="{{ asset('js/app.js') }}"></script>
{{--<div id="svgPlaceholder"></div>--}}
{{--<header>--}}
    {{--<div class="wrapper">--}}
        {{--<div class="divHeader">--}}
            {{--<a title="Logo" href="index.html" class="header-logo">--}}
                {{--<svg>--}}
                    {{--<use xlink:href="#logo"></use>--}}
                {{--</svg>--}}
            {{--</a>--}}
            {{--<ul class="navMenu">--}}
                {{--<li><a href="index.html">Главная</a></li>--}}
                {{--<li><a href="team.html">Команда</a></li>--}}
                {{--<li><a href="#">Разделы</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
        {{--<a class="hamburger js-navOpenMenu">--}}
            {{--<span></span>--}}
        {{--</a></div>--}}
{{--</header>--}}
{{--<div class="content">--}}
    {{--<section class="pageHeaderForm">--}}
        {{--<div class="wrapper">--}}
            {{--<h2>Команда</h2>--}}
            {{--<form class="" method="get" action="search.html">--}}
                {{--<input class="js-widthInput" type="text" value="" placeholder="Поиск сотрудников" name="s" AUTOCOMPLETE="off">--}}
                {{--<button class="" type="submit">--}}
                    {{--Поиск--}}
                {{--</button>--}}
                {{--<div class="hiddenSearch js-widthBlock">--}}
                    {{--<ul>--}}
                        {{--<li><a href="#">vfv</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</form>--}}

        {{--</div>--}}
    {{--</section>--}}
    {{--<section class="team-page">--}}
        {{--<div class="wrapper blockFlex">--}}
            {{--<div class="mainContent">--}}
                {{--<div class="team-box">--}}
                    {{--<div class="team-box__card ">--}}
                        {{--<div class="team-box__item blockFlex">--}}
                            {{--<div class="img">--}}
                                {{--<img src="images/logo8.png" alt="develop image">--}}
                            {{--</div>--}}
                            {{--<div class="info">--}}
                                {{--<div class="dev-name">Develop Developer1</div>--}}
                                {{--<div class="department info__text">Wordpress</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="team-box__popup blockFlex">--}}
                            {{--<div class="close-icon">--}}
                                {{--<svg><use xlink:href="#close-icon"></use></svg>--}}
                            {{--</div>--}}
                            {{--<div class="img">--}}
                                {{--<img src="images/logo8.png" alt="develop image">--}}
                            {{--</div>--}}
                            {{--<div class="info blockFlex">--}}
                                {{--<div class="dev-name">--}}
                                    {{--Develop Developer1--}}
                                {{--</div>--}}
                                {{--<div class="date-birth info__text">--}}
                                    {{--<span class="info__label">Date-birth: </span>--}}
                                    {{--16.10.2019--}}
                                {{--</div>--}}
                                {{--<div class="department info__text">--}}
                                    {{--<span class="info__label">Department: </span>--}}
                                    {{--Wordpress--}}
                                {{--</div>--}}
                                {{--<div class="position info__text">--}}
                                    {{--<span class="info__label">Position: </span>--}}
                                    {{--front-end--}}
                                {{--</div>--}}
                                {{--<div class="skills info__text">--}}
                                    {{--<span class="info__label">Skills: </span>--}}
                                    {{--Html, Css, Js, jQuery, Vue Js--}}
                                {{--</div>--}}
                                {{--<ul class="sertificate">--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src="images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src="images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src=" images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="team-box__card ">--}}
                        {{--<div class="team-box__item blockFlex">--}}
                            {{--<div class="img">--}}
                                {{--<img src="images/logo8.png" alt="develop image">--}}
                            {{--</div>--}}
                            {{--<div class="info">--}}
                                {{--<div class="dev-name">Develop Developer2</div>--}}
                                {{--<div class="department info__text">Wordpress</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="team-box__popup blockFlex">--}}
                            {{--<div class="close-icon">--}}
                                {{--<svg><use xlink:href="#close-icon"></use></svg>--}}
                            {{--</div>--}}
                            {{--<div class="img">--}}
                                {{--<img src="images/logo8.png" alt="develop image">--}}
                            {{--</div>--}}
                            {{--<div class="info blockFlex">--}}
                                {{--<div class="dev-name">--}}
                                    {{--Develop Developer2--}}
                                {{--</div>--}}
                                {{--<div class="date-birth info__text">--}}
                                    {{--<span class="info__label">Date-birth: </span>--}}
                                    {{--16.10.2019--}}
                                {{--</div>--}}
                                {{--<div class="department info__text">--}}
                                    {{--<span class="info__label">Department: </span>--}}
                                    {{--Wordpress--}}
                                {{--</div>--}}
                                {{--<div class="position info__text">--}}
                                    {{--<span class="info__label">Position: </span>--}}
                                    {{--front-end--}}
                                {{--</div>--}}
                                {{--<div class="skills info__text">--}}
                                    {{--<span class="info__label">Skills: </span>--}}
                                    {{--Html, Css, Js, jQuery, Vue Js--}}
                                {{--</div>--}}
                                {{--<ul class="sertificate">--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src="images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src="images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src=" images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="team-box__card ">--}}
                        {{--<div class="team-box__item blockFlex">--}}
                            {{--<div class="img">--}}
                                {{--<img src="images/logo8.png" alt="develop image">--}}
                            {{--</div>--}}
                            {{--<div class="info">--}}
                                {{--<div class="dev-name">Develop Developer3</div>--}}
                                {{--<div class="department info__text">Wordpress</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="team-box__popup blockFlex">--}}
                            {{--<div class="close-icon">--}}
                                {{--<svg><use xlink:href="#close-icon"></use></svg>--}}
                            {{--</div>--}}
                            {{--<div class="img">--}}
                                {{--<img src="images/logo8.png" alt="develop image">--}}
                            {{--</div>--}}
                            {{--<div class="info blockFlex">--}}
                                {{--<div class="dev-name">--}}
                                    {{--Develop Developer3--}}
                                {{--</div>--}}
                                {{--<div class="date-birth info__text">--}}
                                    {{--<span class="info__label">Date-birth: </span>--}}
                                    {{--16.10.2019--}}
                                {{--</div>--}}
                                {{--<div class="department info__text">--}}
                                    {{--<span class="info__label">Department: </span>--}}
                                    {{--Wordpress--}}
                                {{--</div>--}}
                                {{--<div class="position info__text">--}}
                                    {{--<span class="info__label">Position: </span>--}}
                                    {{--front-end--}}
                                {{--</div>--}}
                                {{--<div class="skills info__text">--}}
                                    {{--<span class="info__label">Skills: </span>--}}
                                    {{--Html, Css, Js, jQuery, Vue Js--}}
                                {{--</div>--}}
                                {{--<ul class="sertificate">--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src="images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src="images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src=" images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="team-box__card ">--}}
                        {{--<div class="team-box__item blockFlex">--}}
                            {{--<div class="img">--}}
                                {{--<img src="images/logo8.png" alt="develop image">--}}
                            {{--</div>--}}
                            {{--<div class="info">--}}
                                {{--<div class="dev-name">Develop Developer4</div>--}}
                                {{--<div class="department info__text">Wordpress</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="team-box__popup blockFlex">--}}
                            {{--<div class="close-icon">--}}
                                {{--<svg><use xlink:href="#close-icon"></use></svg>--}}
                            {{--</div>--}}
                            {{--<div class="img">--}}
                                {{--<img src="images/logo8.png" alt="develop image">--}}
                            {{--</div>--}}
                            {{--<div class="info blockFlex">--}}
                                {{--<div class="dev-name">--}}
                                    {{--Develop Developer4--}}
                                {{--</div>--}}
                                {{--<div class="date-birth info__text">--}}
                                    {{--<span class="info__label">Date-birth: </span>--}}
                                    {{--16.10.2019--}}
                                {{--</div>--}}
                                {{--<div class="department info__text">--}}
                                    {{--<span class="info__label">Department: </span>--}}
                                    {{--Wordpress--}}
                                {{--</div>--}}
                                {{--<div class="position info__text">--}}
                                    {{--<span class="info__label">Position: </span>--}}
                                    {{--front-end--}}
                                {{--</div>--}}
                                {{--<div class="skills info__text">--}}
                                    {{--<span class="info__label">Skills: </span>--}}
                                    {{--Html, Css, Js, jQuery, Vue Js--}}
                                {{--</div>--}}
                                {{--<ul class="sertificate">--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src="images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src="images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src=" images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="team-box__card ">--}}
                        {{--<div class="team-box__item blockFlex">--}}
                            {{--<div class="img">--}}
                                {{--<img src="images/logo8.png" alt="develop image">--}}
                            {{--</div>--}}
                            {{--<div class="info">--}}
                                {{--<div class="dev-name">Develop Developer5</div>--}}
                                {{--<div class="department info__text">Wordpress</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="team-box__popup blockFlex">--}}
                            {{--<div class="close-icon">--}}
                                {{--<svg><use xlink:href="#close-icon"></use></svg>--}}
                            {{--</div>--}}
                            {{--<div class="img">--}}
                                {{--<img src="images/logo8.png" alt="develop image">--}}
                            {{--</div>--}}
                            {{--<div class="info blockFlex">--}}
                                {{--<div class="dev-name">--}}
                                    {{--Develop Developer5--}}
                                {{--</div>--}}
                                {{--<div class="date-birth info__text">--}}
                                    {{--<span class="info__label">Date-birth: </span>--}}
                                    {{--16.10.2019--}}
                                {{--</div>--}}
                                {{--<div class="department info__text">--}}
                                    {{--<span class="info__label">Department: </span>--}}
                                    {{--Wordpress--}}
                                {{--</div>--}}
                                {{--<div class="position info__text">--}}
                                    {{--<span class="info__label">Position: </span>--}}
                                    {{--front-end--}}
                                {{--</div>--}}
                                {{--<div class="skills info__text">--}}
                                    {{--<span class="info__label">Skills: </span>--}}
                                    {{--Html, Css, Js, jQuery, Vue Js--}}
                                {{--</div>--}}
                                {{--<ul class="sertificate">--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src="images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src="images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src=" images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="team-box__card ">--}}
                        {{--<div class="team-box__item blockFlex">--}}
                            {{--<div class="img">--}}
                                {{--<img src="images/logo8.png" alt="develop image">--}}
                            {{--</div>--}}
                            {{--<div class="info">--}}
                                {{--<div class="dev-name">Develop Developer6</div>--}}
                                {{--<div class="department info__text">Wordpress</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="team-box__popup blockFlex">--}}
                            {{--<div class="close-icon">--}}
                                {{--<svg><use xlink:href="#close-icon"></use></svg>--}}
                            {{--</div>--}}
                            {{--<div class="img">--}}
                                {{--<img src="images/logo8.png" alt="develop image">--}}
                            {{--</div>--}}
                            {{--<div class="info blockFlex">--}}
                                {{--<div class="dev-name">--}}
                                    {{--Develop Developer6--}}
                                {{--</div>--}}
                                {{--<div class="date-birth info__text">--}}
                                    {{--<span class="info__label">Date-birth: </span>--}}
                                    {{--16.10.2019--}}
                                {{--</div>--}}
                                {{--<div class="department info__text">--}}
                                    {{--<span class="info__label">Department: </span>--}}
                                    {{--Wordpress--}}
                                {{--</div>--}}
                                {{--<div class="position info__text">--}}
                                    {{--<span class="info__label">Position: </span>--}}
                                    {{--front-end--}}
                                {{--</div>--}}
                                {{--<div class="skills info__text">--}}
                                    {{--<span class="info__label">Skills: </span>--}}
                                    {{--Html, Css, Js, jQuery, Vue Js--}}
                                {{--</div>--}}
                                {{--<ul class="sertificate">--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src="images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src="images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src=" images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="team-box__card ">--}}
                        {{--<div class="team-box__item blockFlex">--}}
                            {{--<div class="img">--}}
                                {{--<img src="images/logo8.png" alt="develop image">--}}
                            {{--</div>--}}
                            {{--<div class="info">--}}
                                {{--<div class="dev-name">Develop Developer7</div>--}}
                                {{--<div class="department info__text">Wordpress</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="team-box__popup blockFlex">--}}
                            {{--<div class="close-icon">--}}
                                {{--<svg><use xlink:href="#close-icon"></use></svg>--}}
                            {{--</div>--}}
                            {{--<div class="img">--}}
                                {{--<img src="images/logo8.png" alt="develop image">--}}
                            {{--</div>--}}
                            {{--<div class="info blockFlex">--}}
                                {{--<div class="dev-name">--}}
                                    {{--Develop Developer7--}}
                                {{--</div>--}}
                                {{--<div class="date-birth info__text">--}}
                                    {{--<span class="info__label">Date-birth: </span>--}}
                                    {{--16.10.2019--}}
                                {{--</div>--}}
                                {{--<div class="department info__text">--}}
                                    {{--<span class="info__label">Department: </span>--}}
                                    {{--Wordpress--}}
                                {{--</div>--}}
                                {{--<div class="position info__text">--}}
                                    {{--<span class="info__label">Position: </span>--}}
                                    {{--front-end--}}
                                {{--</div>--}}
                                {{--<div class="skills info__text">--}}
                                    {{--<span class="info__label">Skills: </span>--}}
                                    {{--Html, Css, Js, jQuery, Vue Js--}}
                                {{--</div>--}}
                                {{--<ul class="sertificate">--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src="images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src="images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src=" images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="team-box__card ">--}}
                        {{--<div class="team-box__item blockFlex">--}}
                            {{--<div class="img">--}}
                                {{--<img src="images/logo8.png" alt="develop image">--}}
                            {{--</div>--}}
                            {{--<div class="info">--}}
                                {{--<div class="dev-name">Develop Developer8</div>--}}
                                {{--<div class="department info__text">Wordpress</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="team-box__popup blockFlex">--}}
                            {{--<div class="close-icon">--}}
                                {{--<svg><use xlink:href="#close-icon"></use></svg>--}}
                            {{--</div>--}}
                            {{--<div class="img">--}}
                                {{--<img src="images/logo8.png" alt="develop image">--}}
                            {{--</div>--}}
                            {{--<div class="info blockFlex">--}}
                                {{--<div class="dev-name">--}}
                                    {{--Develop Developer8--}}
                                {{--</div>--}}
                                {{--<div class="date-birth info__text">--}}
                                    {{--<span class="info__label">Date-birth: </span>--}}
                                    {{--16.10.2019--}}
                                {{--</div>--}}
                                {{--<div class="department info__text">--}}
                                    {{--<span class="info__label">Department: </span>--}}
                                    {{--Wordpress--}}
                                {{--</div>--}}
                                {{--<div class="position info__text">--}}
                                    {{--<span class="info__label">Position: </span>--}}
                                    {{--front-end--}}
                                {{--</div>--}}
                                {{--<div class="skills info__text">--}}
                                    {{--<span class="info__label">Skills: </span>--}}
                                    {{--Html, Css, Js, jQuery, Vue Js--}}
                                {{--</div>--}}
                                {{--<ul class="sertificate">--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src="images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src="images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src=" images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="team-box__card ">--}}
                        {{--<div class="team-box__item blockFlex">--}}
                            {{--<div class="img">--}}
                                {{--<img src="images/logo8.png" alt="develop image">--}}
                            {{--</div>--}}
                            {{--<div class="info">--}}
                                {{--<div class="dev-name">Develop Developer9</div>--}}
                                {{--<div class="department info__text">Wordpress</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="team-box__popup blockFlex">--}}
                            {{--<div class="close-icon">--}}
                                {{--<svg><use xlink:href="#close-icon"></use></svg>--}}
                            {{--</div>--}}
                            {{--<div class="img">--}}
                                {{--<img src="images/logo8.png" alt="develop image">--}}
                            {{--</div>--}}
                            {{--<div class="info blockFlex">--}}
                                {{--<div class="dev-name">--}}
                                    {{--Develop Developer9--}}
                                {{--</div>--}}
                                {{--<div class="date-birth info__text">--}}
                                    {{--<span class="info__label">Date-birth: </span>--}}
                                    {{--16.10.2019--}}
                                {{--</div>--}}
                                {{--<div class="department info__text">--}}
                                    {{--<span class="info__label">Department: </span>--}}
                                    {{--Wordpress--}}
                                {{--</div>--}}
                                {{--<div class="position info__text">--}}
                                    {{--<span class="info__label">Position: </span>--}}
                                    {{--front-end--}}
                                {{--</div>--}}
                                {{--<div class="skills info__text">--}}
                                    {{--<span class="info__label">Skills: </span>--}}
                                    {{--Html, Css, Js, jQuery, Vue Js--}}
                                {{--</div>--}}
                                {{--<ul class="sertificate">--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src="images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src="images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src=" images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="team-box__card ">--}}
                        {{--<div class="team-box__item blockFlex">--}}
                            {{--<div class="img">--}}
                                {{--<img src="images/logo8.png" alt="develop image">--}}
                            {{--</div>--}}
                            {{--<div class="info">--}}
                                {{--<div class="dev-name">Develop Developer10</div>--}}
                                {{--<div class="department info__text">Wordpress</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="team-box__popup blockFlex">--}}
                            {{--<div class="close-icon">--}}
                                {{--<svg><use xlink:href="#close-icon"></use></svg>--}}
                            {{--</div>--}}
                            {{--<div class="img">--}}
                                {{--<img src="images/logo8.png" alt="develop image">--}}
                            {{--</div>--}}
                            {{--<div class="info blockFlex">--}}
                                {{--<div class="dev-name">--}}
                                    {{--Develop Developer10--}}
                                {{--</div>--}}
                                {{--<div class="date-birth info__text">--}}
                                    {{--<span class="info__label">Date-birth: </span>--}}
                                    {{--16.10.2019--}}
                                {{--</div>--}}
                                {{--<div class="department info__text">--}}
                                    {{--<span class="info__label">Department: </span>--}}
                                    {{--Wordpress--}}
                                {{--</div>--}}
                                {{--<div class="position info__text">--}}
                                    {{--<span class="info__label">Position: </span>--}}
                                    {{--front-end--}}
                                {{--</div>--}}
                                {{--<div class="skills info__text">--}}
                                    {{--<span class="info__label">Skills: </span>--}}
                                    {{--Html, Css, Js, jQuery, Vue Js--}}
                                {{--</div>--}}
                                {{--<ul class="sertificate">--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src="images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src="images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src=" images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="team-box__card ">--}}
                        {{--<div class="team-box__item blockFlex">--}}
                            {{--<div class="img">--}}
                                {{--<img src="images/logo8.png" alt="develop image">--}}
                            {{--</div>--}}
                            {{--<div class="info">--}}
                                {{--<div class="dev-name">Develop Developer11</div>--}}
                                {{--<div class="department info__text">Wordpress</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="team-box__popup blockFlex">--}}
                            {{--<div class="close-icon">--}}
                                {{--<svg><use xlink:href="#close-icon"></use></svg>--}}
                            {{--</div>--}}
                            {{--<div class="img">--}}
                                {{--<img src="images/logo8.png" alt="develop image">--}}
                            {{--</div>--}}
                            {{--<div class="info blockFlex">--}}
                                {{--<div class="dev-name">--}}
                                    {{--Develop Developer11--}}
                                {{--</div>--}}
                                {{--<div class="date-birth info__text">--}}
                                    {{--<span class="info__label">Date-birth: </span>--}}
                                    {{--16.10.2019--}}
                                {{--</div>--}}
                                {{--<div class="department info__text">--}}
                                    {{--<span class="info__label">Department: </span>--}}
                                    {{--Wordpress--}}
                                {{--</div>--}}
                                {{--<div class="position info__text">--}}
                                    {{--<span class="info__label">Position: </span>--}}
                                    {{--front-end--}}
                                {{--</div>--}}
                                {{--<div class="skills info__text">--}}
                                    {{--<span class="info__label">Skills: </span>--}}
                                    {{--Html, Css, Js, jQuery, Vue Js--}}
                                {{--</div>--}}
                                {{--<ul class="sertificate">--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src="images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src="images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src=" images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="team-box__card ">--}}
                        {{--<div class="team-box__item blockFlex">--}}
                            {{--<div class="img">--}}
                                {{--<img src="images/logo8.png" alt="develop image">--}}
                            {{--</div>--}}
                            {{--<div class="info">--}}
                                {{--<div class="dev-name">Develop Developer12</div>--}}
                                {{--<div class="department info__text">Wordpress</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="team-box__popup blockFlex">--}}
                            {{--<div class="close-icon">--}}
                                {{--<svg><use xlink:href="#close-icon"></use></svg>--}}
                            {{--</div>--}}
                            {{--<div class="img">--}}
                                {{--<img src="images/logo8.png" alt="develop image">--}}
                            {{--</div>--}}
                            {{--<div class="info blockFlex">--}}
                                {{--<div class="dev-name">--}}
                                    {{--Develop Developer12--}}
                                {{--</div>--}}
                                {{--<div class="date-birth info__text">--}}
                                    {{--<span class="info__label">Date-birth: </span>--}}
                                    {{--16.10.2019--}}
                                {{--</div>--}}
                                {{--<div class="department info__text">--}}
                                    {{--<span class="info__label">Department: </span>--}}
                                    {{--Wordpress--}}
                                {{--</div>--}}
                                {{--<div class="position info__text">--}}
                                    {{--<span class="info__label">Position: </span>--}}
                                    {{--front-end--}}
                                {{--</div>--}}
                                {{--<div class="skills info__text">--}}
                                    {{--<span class="info__label">Skills: </span>--}}
                                    {{--Html, Css, Js, jQuery, Vue Js--}}
                                {{--</div>--}}
                                {{--<ul class="sertificate">--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src="images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src="images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                    {{--<li class="sertificate__item">--}}
                                        {{--<img src=" images/sertificate.jpg" alt="sertificate image">--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}

            {{--<sidebar class="sidebar-team">--}}
                {{--<div class="sidebar-team__filter">--}}
                    {{--<div class="sidebar-team__filter--link">--}}
                        {{--<svg><use xlink:href="#filter-icon"></use></svg>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="sidebar-team__wrap">--}}
                    {{--<label>--}}
                        {{--Имя:--}}
                    {{--</label>--}}
                    {{--<input type="text" class="input" placeholder="Введите имя сотрудника">--}}
                    {{--<label>--}}
                        {{--Отдел:--}}
                    {{--</label>--}}
                    {{--<select name="department" class="select">--}}
                        {{--<option value="dog">Worpress</option>--}}
                        {{--<option value="cat">Drupal</option>--}}
                    {{--</select>--}}
                    {{--<label>--}}
                        {{--Комната:--}}
                    {{--</label>--}}
                    {{--<select name="room" id="">--}}
                        {{--<option value="dog">Комната 1</option>--}}
                        {{--<option value="cat">Комната 2</option>--}}
                    {{--</select>--}}

                {{--</div>--}}
            {{--</sidebar>--}}
        {{--</div>--}}
    {{--</section>--}}

{{--</div>--}}

{{--<footer>--}}
    {{--<div class="wrapper">--}}
        {{--<div class="footer-left">--}}
            {{--<div class="copyright">--}}
                {{--© 2018 WEB4PRO. All Rights Reserved.--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="footer-right">--}}
            {{--<a title="Gmail" href="#">--}}
                {{--<svg>--}}
                    {{--<use xlink:href="#gmail"></use>--}}
                {{--</svg>--}}
            {{--</a>--}}
            {{--<a title="Twitter" href="#">--}}
                {{--<svg>--}}
                    {{--<use xlink:href="#Twitter"></use>--}}
                {{--</svg>--}}
            {{--</a>--}}
            {{--<a title="Pinterest" href="#">--}}
                {{--<svg>--}}
                    {{--<use xlink:href="#Pinterest"></use>--}}
                {{--</svg>--}}
            {{--</a>--}}
            {{--<a title="Facebook" href="#">--}}
                {{--<svg>--}}
                    {{--<use xlink:href="#facebook"></use>--}}
                {{--</svg>--}}
            {{--</a>--}}
            {{--<a title="linkedin" href="#">--}}
                {{--<svg>--}}
                    {{--<use xlink:href="#linkedin"></use>--}}
                {{--</svg>--}}
            {{--</a>--}}
            {{--<a title="Logo" href="#">--}}
                {{--<svg>--}}
                    {{--<use xlink:href="#YouTube"></use>--}}
                {{--</svg>--}}
            {{--</a>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</footer>--}}
{{--<div class="overlay"></div>--}}

{{--<div class="navUpMenu js-navUpMenu">--}}
    {{--<ul>--}}
        {{--<li><a href="index.html">Главная</a></li>--}}
        {{--<li><a href="team.html">Команда</a></li>--}}
        {{--<li><a href="#">Разделы</a></li>--}}
    {{--</ul>--}}
{{--</div>--}}
{{--<script src="js/vendor.min.js"></script>--}}
{{--<script src="js/app.min.js"></script>--}}
</body>
</html>


{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
    {{--<head>--}}
        {{--<meta charset="utf-8">--}}
        {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

        {{--<title>Laravel</title>--}}

        {{--<!-- Fonts -->--}}
        {{--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}

        {{--<!-- Styles -->--}}
        {{--<style>--}}
            {{--html, body {--}}
                {{--background-color: #fff;--}}
                {{--color: #636b6f;--}}
                {{--font-family: 'Nunito', sans-serif;--}}
                {{--font-weight: 200;--}}
                {{--height: 100vh;--}}
                {{--margin: 0;--}}
            {{--}--}}

            {{--.full-height {--}}
                {{--height: 100vh;--}}
            {{--}--}}

            {{--.flex-center {--}}
                {{--align-items: center;--}}
                {{--display: flex;--}}
                {{--justify-content: center;--}}
            {{--}--}}

            {{--.position-ref {--}}
                {{--position: relative;--}}
            {{--}--}}

            {{--.top-right {--}}
                {{--position: absolute;--}}
                {{--right: 10px;--}}
                {{--top: 18px;--}}
            {{--}--}}

            {{--.content {--}}
                {{--text-align: center;--}}
            {{--}--}}

            {{--.title {--}}
                {{--font-size: 84px;--}}
            {{--}--}}

            {{--.links > a {--}}
                {{--color: #636b6f;--}}
                {{--padding: 0 25px;--}}
                {{--font-size: 13px;--}}
                {{--font-weight: 600;--}}
                {{--letter-spacing: .1rem;--}}
                {{--text-decoration: none;--}}
                {{--text-transform: uppercase;--}}
            {{--}--}}

            {{--.m-b-md {--}}
                {{--margin-bottom: 30px;--}}
            {{--}--}}
        {{--</style>--}}
    {{--</head>--}}
    {{--<body>--}}
        {{--<div class="flex-center position-ref full-height">--}}
            {{--@if (Route::has('login'))--}}
                {{--<div class="top-right links">--}}
                    {{--@auth--}}
                        {{--<a href="{{ url('/dashboard') }}">Dashboard</a>--}}
                    {{--@else--}}
                        {{--<a href="{{ route('login') }}">Login</a>--}}

                        {{--@if (Route::has('register'))--}}
                            {{--<a href="{{ route('register') }}">Register</a>--}}
                        {{--@endif--}}
                    {{--@endauth--}}
                {{--</div>--}}
            {{--@endif--}}

            {{--<div class="content">--}}
                {{--<div class="title m-b-md">--}}
                    {{--Laravel--}}
                {{--</div>--}}

                {{--<div class="links">--}}
                    {{--<a href="https://laravel.com/docs">Docs</a>--}}
                    {{--<a href="https://laracasts.com">Laracasts</a>--}}
                    {{--<a href="https://laravel-news.com">News</a>--}}
                    {{--<a href="https://blog.laravel.com">Blog</a>--}}
                    {{--<a href="https://nova.laravel.com">Nova</a>--}}
                    {{--<a href="https://forge.laravel.com">Forge</a>--}}
                    {{--<a href="https://github.com/laravel/laravel">GitHub</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</body>--}}
{{--</html>--}}
