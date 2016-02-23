/**
 * Created by root on 22/2/16.
 */

var LOGINURL = "login/"
var DASHBOARD = "dashboard/"
var app = angular.module("globalapp", ['ngMaterial', 'lumx'], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});
app.controller("globalcontroller", function ($scope) {


});
app.controller("AppCtrl", function ($scope) {


});


app.controller('logincontroller', function ($scope, $http, $window) {

    $scope.submit = function () {
        $http.get(LOGINURL + $scope.input.username + "/" + $scope.input.password).success(function (data) {
            if (data.result == true) {
                $window.location.href = DASHBOARD;
            } else {
                $scope.message = "Invalid Username or Password...";
            }
        });
    };
});