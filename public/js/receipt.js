/**
 * Created by aqua on 2016. 8. 27..
 */

var app = angular.module('receipt',['directive.contextMenu']);


    app.controller('receiptCtrl', function($scope, $http) {

        $scope.clicked = '';
        $scope.ShowContextMenu = function(){
            alert('hello');
        };
        $scope.edit = function() {
            $scope.clicked = 'edit was clicked';
            console.log($scope.clicked);
        };

        $scope.properties = function() {
            $scope.clicked = 'properties was clicked';
            console.log($scope.clicked);
        };

        $scope.link = function() {
            $scope.clicked = 'link was clicked';
            console.log($scope.clicked);
        };

        $scope.delete = function() {
            $scope.clicked = 'delete was clicked';
            console.log($scope.clicked);
        };

    });