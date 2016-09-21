/**
 * Created by aqua on 2016-09-05.
 */

angular.module('Mth.Disease', ['ngResource', 'ui.router', 'angular-ladda']);

angular.module('Mth.Disease')
    .config(function($stateProvider) {
            $stateProvider
                .state('disease', {
                    url: "",
                    views: {
                        "diseaseContent": { templateUrl: "/disease/view/intro" }
                    }
                });
        }
    );



angular.module('Mth.Disease')
    .controller('MainController',['$scope', '$http' , '$state', function($scope, $http, $state) {

        $scope.as = [1,2,3,4,5,6,7,8,9,10];

    }]);