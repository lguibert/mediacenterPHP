<!DOCTYPE html>
<html ng-app="mediacenter">
    <head>      
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">  
        <title>
            Liste des fichiers disponibles
        </title>

        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script src="media/js/header.js"></script>

     	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>-->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular-resource.min.js"></script>-->
         <!--<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular-route.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular-animate.js"></script>-->
        <!--<script src="https://cdn.firebase.com/js/client/2.0.4/firebase.js"></script>
       <script src="https://cdn.firebase.com/libs/angularfire/0.9.0/angularfire.min.js"></script>-->

         <!--<link rel="stylesheet" href="media/css/style.css">
        <link rel="stylesheet" href="media/css/animate.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">-->

        <!-- ______________________________________________________________________________________________ -->


        <script src="media/js/jquery.min.js"></script>
        <script src="media/js/bootstrap.min.js"></script>
        <script src="media/js/header.js"></script>

        <script src="media/js/angular.min.js"></script>
        <!--<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular-resource.min.js"></script>-->
        <script src="media/js/angular-route.min.js"></script>
        <script src="media/js/angular-animate.js"></script>
        <!--<script src="https://cdn.firebase.com/js/client/2.0.4/firebase.js"></script>
       <script src="https://cdn.firebase.com/libs/angularfire/0.9.0/angularfire.min.js"></script>-->

        <link rel="stylesheet" href="media/css/style.css">
        <link rel="stylesheet" href="media/css/animate.css">
        <link rel="stylesheet" href="media/css/bootstrap.min.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <a href="#/" class="navbar-brand">Mediacenter</a> 
                    </div>                    
                    <div id="navbar" class="navbar-collapse collapse">                        
                            <div class="navbar_header">
                            	<a href="#/settings" class="navbar-brand">Réglages</a>                                 
                            </div>
                            <div class="navbar-form navbar-right">
                            	<a href="#" class="form-control">Déconnexion</a> 
                            </div>
                    </div>                   
                </div>
            </nav>
        </header>
        <section id="wrap">            
            <div id="main">
                <div ng-view></div>  
            </div>	
        </section>
        <script>
            var app = angular.module('mediacenter', ['ngRoute', 'ngAnimate']);

            app.config(['$routeProvider', function($routeProvider){
                $routeProvider
                    .when('/', {templateUrl: 'templates/home.html'})
                    .when('/settings', {templateUrl: 'templates/settings.html'})
                    .otherwise({redirectTo : '/'});
            }]);

            app.controller('SettingsController', ['$scope', '$http', function($scope, $http){
               
                $http.get('media/file/settings.json')
                .success(function(data){
                    $scope.settings = data;
                }).error(function(){
                    alert("Erreur lors de l'ouverture du fichier de configuration.");
                });
                              

                $scope.submit = function(){
                    var value = $scope.newData;
                    var type = $scope.category;

                    $http.get('/mediacenter/update/'+type+'/'+value+'/').success(function(data){
                        alert(data);
                    }).error(function(data){
                        alert("error...");
                        $('#main').html(data);
                    });

                    //alert($scope.settings)
                };
            }]);


    	</script>
    </body>
</html>
