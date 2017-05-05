<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Galleri Gustafsson</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Galleri Gustafsson</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Sign in</button>
            </form>
        </div><!--/.navbar-collapse -->
    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Lägg till en konstnär!</h1>
        <div>
            <form action="/create-artist" method="post">
                <div class="form-group">
                    <label>Namn:</label>
                    <input type="text" name="fname" class="form-control">
                </div>
                <div class="form-group">
                    <label>Födelseår: </label>
                    <input type="text" name="fbirthyear" class="form-control">
                </div>
                <div class="form-group">
                    <label>Stad: </label>
                    <input type="text" name="fcity" class="form-control">
                </div>
                <button type="submit" class="btn btn-default">Lägg till</button>
            </form>
        </div>
    </div>
</div>

    <hr>

    <footer>
        <p>&copy; 2016 Company, Inc.</p>
    </footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/vendor/jquery-3.2.1.min.js"></script>
<script src="/js/vendor/bootstrap.min.js"></script>
</body>
</html>
