/**
 * Created by aqua on 2016-08-31.
 */

angular.module('Mth.Healthcare', ['ngResource', 'ui.router', 'angular-ladda']);

angular.module('Mth.Healthcare')
    .config(function($stateProvider) {
            $stateProvider
                .state('healthcare', {
                    url: "",
                    views: {
                        "healthcareContent": { templateUrl: "/healthcare/view/intro" }
                    }
                });
        }
    );



angular.module('Mth.Healthcare')
    .controller('MainController',['$scope', '$http' , '$state', function($scope, $http, $state) {


    }]);