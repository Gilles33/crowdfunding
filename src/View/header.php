<!DOCTYPE html>
<html class="no-js" lang="FR" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Oui Project</title>
</head>

<body>
<header>
    <div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="medium">
        <button class="menu-icon" type="button" data-toggle="responsive-menu"></button>
        <div class="title-bar-title">Menu</div>
    </div>

    <div class="top-bar" id="responsive-menu">
        <div class="top-bar-left ">
            <ul class="menu">
                <li class="menu-text">Oui Project</li>
                <li><a href="#" alt="notre mission">Notre mission</a></li>
                <li><a href="#" alt="financer son projet">Financer son projet</a></li>
                <li><a href="#" alt="soutenir un projet">Soutenir un projet</a></li>
            </ul>
        </div>
        <div class="top-bar-right">
            <ul class="menu">
                <li><input type="search" placeholder="Search"></li>
                <li><a href="#openModal"><button type="button" class="button">Connexion</button></a></li>

                <div id="openModal" class="modalDialog">
                    <div>
                        <a href="#close" title="Close" class="close">fermer</a>
                        <div class="login-box">
                            <div class="row collapse expanded">
                                <div class="small-12 medium-6 column small-order-2 medium-order-1">
                                    <div class="login-box-form-section">
                                        <h1 class="login-box-title">Sign up</h1>
                                        <form method="post" action="/signin">
                                            <input class="login-box-input" type="text" required pattern="[a-zA-Z]+" name="pseudo"
                                                   placeholder="pseudo" />
                                            <input class="login-box-input" type="email" required pattern="^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}" name="email"
                                                   placeholder="email" />
                                            <input class="login-box-input" type="password" id="password" required
                                                   pattern="[a-zA-Z]+" name="password" placeholder="mot de passe" />

                                            <input class="login-box-input" type="password" required pattern="[a-zA-Z]+"
                                                   data-equalto="password" name="password_conf" placeholder="confirmer votre mot
                                       de passe"/>
                                            <input class="login-box-submit-button" type="submit" name="submit"
                                                   value="valider" />
                                            <input type="checkbox" name="cgu" value="1" placeholder="veuillez accepter les cgu" />
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
            </ul>
        </div>
    </div>
</header>