<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>
<header id="header">
    <div class="container">
        <nav class="navbar">
            <div class="row">
                <div class="col-md-3">
                    <div class="navbar-brand">
                        <a href="#0"><img src="{{asset('/img/logo.png')}}" alt=""/></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="navbar-main">
                        <div class="navbar-main__section">
                            <ul>
                                <li>
                                    <a href="#0">Start a campaign </a>
                                </li>
                                <li>
                                    <a href="#0"> Find a campaign</a>
                                </li>
                            </ul>
                            <ul class="navbar-signin">
                                <li>
                                    <a href="#0">sign in</a>
                                </li>
                                <li>
                                    <a href="#0">sign up</a>
                                </li>
                            </ul>
                        </div>
                        <div class="navbar-main__right">
                            <div class="navbar-menu__button">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="menu-trigger"></span>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <ul class="dropdown-menu__section">
                                            <li><a class="dropdown-item" href="#">create a fundraiser</a></li>
                                            <li><a class="dropdown-item" href="#">how we help</a></li>
                                            <li><a class="dropdown-item" href="#">help</a></li>
                                            <li><a class="dropdown-item" href="#">become an affiliate</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<div class="signup-section">
    <div class="container">
        <div class="offset-md-3 col-md-6 offset-sm-2 col-sm-8 offset-1 col-10">
            <div class="signup-section__block">
                <h1>sign up</h1>
                <p>Please fill out the information below and we will add you to our database. </p>
                <form>
                    <div class="form-group">
                        <label for="exampleInputName1">first name<sup>*</sup></label>
                        <input type="text" placeholder="first name" id="exampleInputName1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputLastName1">password<sup>*</sup></label>
                        <input type="text" id="exampleInputLastName1" placeholder="last name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">email<sup>*</sup></label>
                        <input type="email" placeholder="email" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">password<sup>*</sup></label>
                        <input type="password" placeholder="password" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputConfPassword1">confirm password<sup>*</sup></label>
                        <input type="password" placeholder="confirm password" id="exampleInputConfPassword1">
                    </div>
                    <div class="signin-button">
                        <button type="submit">continue</button>
                    </div>
                    <div class="signup-member">
                        <p>already a member?<a href="#0" class="forgot-password">sign in</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<footer id="footer">
    <div class="container">
        <div class="footer-link__list">
            <div class="row">
                <div class="col-md-2">
                    <div class="footer-single__list">
                        <h1>let us help</h1>
                        <ul>
                            <li><a href="#0">how we help</a></li>
                            <li><a href="#0">checklist</a></li>
                            <li><a href="#0">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-single__list">
                        <h1>campaigns</h1>
                        <ul>
                            <li><a href="#0">start a campaign</a></li>
                            <li><a href="#0">find a campaign</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-single__list">
                        <h1>security</h1>
                        <ul>
                            <li><a href="#0">privacy policy</a></li>
                            <li><a href="#0">terms of use</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-single__list">
                        <h1>links</h1>
                        <ul>
                            <li><a href="#0">sign in</a></li>
                            <li><a href="#0">sign up</a></li>
                            <li><a href="#0">press/newa</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-single__list">
                        <h1>E-Newsletter Sign-Up</h1>
                        <ul>
                            <li class="newsletter-email"><input type="email" placeholder="your email">
                                <button>sign up</button>
                            </li>
                            <li><p><i class="far fa-copyright"></i> 2018</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-partners">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="single-partner">
                        <a href="#0"><img src="{{asset('/img/cnn_money-icon.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-md">
                    <div class="single-partner">
                        <a href="#0"><img src="{{asset('/img/boston_globe-icon.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-md">
                    <div class="single-partner">
                        <a href="#0"><img src="{{asset('/img/time-icon.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-md">
                    <div class="single-partner">
                        <a href="#0"><img src="{{asset('/img/pbs-icon.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-md">
                    <div class="single-partner">
                        <a href="#0"><img src="{{asset('/img/bloomberg-icon.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>


<script src="{{ asset('/js/app.js') }}"></script>
</body>


</html>
