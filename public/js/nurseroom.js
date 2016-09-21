/**
 * Created by aqua on 2016-08-31.
 */

angular.module('Mth.Nurseroom', ['ngResource', 'ui.router', 'angular-ladda']);

angular.module('Mth.Nurseroom')
    .config(function($stateProvider) {
            $stateProvider
                .state('nurseroom', {
                    url: "",
                    views: {
                        "nurseroomContent": { templateUrl: "/nurseroom/view/intro" }
                    }
                });
        }
    );



angular.module('Mth.Nurseroom')
    .controller('MainController',['$scope', '$http' , '$state', function($scope, $http, $state) {


    }]);