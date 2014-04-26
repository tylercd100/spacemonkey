var app = angular.module("app", ['ngRoute']);

//Routing
app.config(function($routeProvider) {
  $routeProvider.when('/login', {
    templateUrl: '/templates/login.html',
  });
  $routeProvider.otherwise({ redirectTo: '/login' });
});

//Run
app.run(function($rootScope, $location) {
  $location.path('/login');
});

