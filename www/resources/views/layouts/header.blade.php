<!DOCTYPE html>
<html>
<head>
	<!-- Site meta -->
	<meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,300,400,400italic,600,600italic,700,700italic,800,800italic|Source+Sans+Pro:400,900,700" rel="stylesheet" type="text/css">
    <link href="http://nepharia.net/static/css/main.css" rel="stylesheet" type="text/css">
</head>
<body class="light">
    @include('layouts.nav')
    <main class="light">
        @yield('content')
    </main>
    <footer class="light">
        <div class="social">
            <div class="one"><a class="logo" href="/"><h3>{{ config('app.name', 'Laravel') }}</h3></a></div><div class="two">
                <a href="#TopMenu" title="Go to top"><i class="fa fa-2x fa-angle-up"></i></a>
            </div><div class="three">
                <a href="#" title="Facebook profile"><i class="fa fa-facebook-square fa-2x"></i></a>
                <a href="#" title="LindedIn profile"><i class="fa fa-linkedin-square fa-2x"></i></a>
                <a href="#" title="Twitter profile"><i class="fa fa-twitter-square fa-2x"></i></a>
            </div>
        </div>
    </footer>

<!-- JS -->
<script src="https://code.jquery.com/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="/static/js/script.js" type="text/javascript"></script>

</body>
</html>