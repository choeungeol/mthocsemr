/**
 * Created by aqua on 2016. 8. 27..
 */

angular.module('Mth.Receipt', ['ngResource', 'ui.router', 'angular-ladda']);

angular.module('Mth.Receipt')
    .config(function($stateProvider) {
            $stateProvider
                .state('receipt', {
                    url: "",
                    views: {
                        "receiptContent": { templateUrl: "/receipt/view/intro" },
                    }
                });
        }
    );



angular.module('Mth.Receipt')
    .controller('MainController',['$scope', '$http' , '$state', function($scope, $http, $state) {


    }]);