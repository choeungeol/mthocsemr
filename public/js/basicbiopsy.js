/**
 * Created by aqua on 2016-08-31.
 */
var app = angular.module('basicBiopsy',[]);

app.controller('basicBiopsyCtrl', function($scope, $http) {


    $scope.getInfo = function(){

        var id = $('#id').text();
        var name = $('#name').text();
        var birthday = $('#birthday').text();
        var gender = $('#gender').text();
        var memo = $('#memo').text();
        $scope.cno = id;
        $scope.pname = name;
        $scope.birthday = birthday;
        $scope.gender = gender;
        $scope.memo = memo;

    };

});