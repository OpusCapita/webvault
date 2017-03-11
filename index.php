<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="favicon.png">
        <!-- Place favicon.ico in the root directory -->
        <!-- Google Fonts -->
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">

        <!-- CSS Reset -->
        <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">

        <link rel="stylesheet" href="milligram.min.css">
        <style>
            body {
                background-image: url(background_alt.jpg);
            }
            nav {
                border-bottom: 1px solid rgba(236, 236, 236, 0.22);
            }
            .wrapper .container {
                max-width: 80rem
            }
            .navigation .navigation-title {
                display: inline;
                font-size: 1.6rem;
                line-height: 5.2rem;
                padding: 0;
                text-decoration: none
            }
            .navigation .navigation-title .logo {
                height: 2rem;
                position: relative;
                top: .4rem
            }
            .big-icon img {
                height: 200px;
            }
            #download {
                margin-top: 40px;
                text-align: center;
            }
            label {
                color: #F0F0F0;
            }
            input[type="text"] {
                color: black!important;
                background-color: white!important;
            }
            p {
                color: #e2e7e9!important;

            }
            input[type="text"]:focus {
                border-color: #1fa46f!important;
            }
        </style>
    </head>
    <body>
        <main class="wrapper">
            <nav class="navigation">
                <section class="container">
                    <a class="navigation-title" href="#"><img class="logo" src="logo.png"/></a>
                </section>
            </nav>
            <section class="container" id="download">
                <div class="big-icon">
                    <img src="big-icon.png"/>
                </div>
                <form method="POST">
                    <fieldset>
                        <label for="tokenField">id_rsa</label>
                        <br/>
                        <input type="text" placeholder="Please enter access token" id="tokenField">
                        <p>Authentication token can be found in file saved as <strong>vault_token</strong> in
                        <strong>dm</strong> user home
                        directory. It can be accessed only by authorized user.</p>
                        <input type="submit" value="Download"/>
                    </fieldset>
                </form>
            </section>
        </main>
    </body>
</html>