/**
 * Created by aqua on 2016-08-31.
 */

angular.module('Mth.BasicBiopsy', ['ngResource', 'ui.router', 'angular-ladda']);

angular.module('Mth.BasicBiopsy')
    .config(function($stateProvider) {
            $stateProvider
                .state('basicbiopsy', {
                    url: "",
                    views: {
                        "basicbiopsyContent": { templateUrl: "/basicbiopsy/view/intro" }
                    }
                });
        }
    );



angular.module('Mth.BasicBiopsy')
    .controller('MainController',['$scope', '$http' , '$state', function($scope, $http, $state) {


    }]);