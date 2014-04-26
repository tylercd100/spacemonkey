<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SPACE MONKEY!!!!!!</title>
	<script type="text/javascript" src="/bower_components/angular/angular.min.js"></script>
	<script type="text/javascript" src="/bower_components/angular-route/angular-route.min.js"></script>

	<script type="text/javascript" src="/bower_components/less/dist/less-1.7.0.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/style.css" />
</head>
<body ng-app="app">
	<div id="content" ng-view>
		<div id="login" class="center-vertical">
			<form>
			<h2>SPACE GAME</h2>
			<input type="text" placeholder="email" />
			<input type="password" placeholder="password" /><br><button type="submit">Login</button>
			</form>
		</div>
	</div>

	<script type="text/javascript" src="/js/app.js"></script>
</body>
</html>
