/**
 * Created by aqua on 2016-08-31.
 */

angular.module('Mth.Pharmacy', ['ngResource', 'ui.router', 'angular-ladda']);

angular.module('Mth.Pharmacy')
    .config(function($stateProvider) {
            $stateProvider
                .state('pharmacy', {
                    url: "",
                    views: {
                        "pharmacyContent": { templateUrl: "/pharmacy/view/intro" }
                    }
                });
        }
    );



angular.module('Mth.Pharmacy')
    .controller('MainController',['$scope', '$http' , '$state', function($scope, $http, $state) {

        $scope.as = [1,2,3,4,5,6,7,8,9,10];

    }]);