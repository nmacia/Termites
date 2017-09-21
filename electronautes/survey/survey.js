'use strict';

angular.module('electronautes')

.config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/survey', {
    templateUrl: 'survey/survey.html',
    controller: 'SurveyCtrl'
  });
  $routeProvider.when('/survey/:classroom', {
    templateUrl: 'survey/survey.html',
    controller: 'SurveyCtrl'
  });
}])

.controller('SurveyCtrl', function($scope, $rootScope, $location, $routeParams) {
  
  // Format SVG.
  $rootScope.formatSVG("img-school-plan");
  $rootScope.formatSVG("img-las-vegas");
  $rootScope.formatSVG("img-pompeia");
  $rootScope.formatSVG("img-oimiakon");
  $rootScope.formatSVG("img-honolulu");
  $rootScope.formatSVG("img-hong-kong");
  $rootScope.formatSVG("img-monaco");
  
  // clickable SVG school-plan
  $rootScope.addClickableEventToClassroomsInSVG("img-survey-school-plan");
  
  // takes the classroom id from the route param if defined  
  $rootScope.classroom = $routeParams.classroom ? $routeParams.classroom : "school-plan";
  
  // Store values checked on the survey.
  $rootScope.surveyResults = {
    mood: null,
    energy: null,
    temperature: null,
    noise: null,
    group: null
  };
  
  $scope.surveyPassword = null;
  
  // Store classroom.
  $rootScope.surveyClassroom = null;
  
  $scope.errorMessage = {
    mood: null,
    energy: null,
    temperature: null,
    noise: null,
    password: null
  }
  
  $scope.checkPassword = function () {
    // TODO: Search password in database and validate classroom
    // Retrieve group to add to the results from the relation game.
    // $rootScope.surveyResults.group =
    return ($scope.surveyPassword === "12345");
  }
   
  function validateForm() { 
    
    var isCorrect = true;
    
    // Display error messages when radios are not checked or password is incorrect.   
    $rootScope.surveyResults.mood === null ? $scope.errorMessage.mood = true : $scope.errorMessage.mood = false;
    $rootScope.surveyResults.energy === null ? $scope.errorMessage.energy = true : $scope.errorMessage.energy = false;
    $rootScope.surveyResults.temperature === null ? $scope.errorMessage.temperature = true : $scope.errorMessage.temperature = false;
    $rootScope.surveyResults.noise === null ? $scope.errorMessage.noise = true : $scope.errorMessage.noise = false;
    $scope.checkPassword() ? $scope.errorMessage.password = false : $scope.errorMessage.password = true;
    
    for ( var key in $scope.errorMessage ) {
      if ( $scope.errorMessage[key] ) {
        isCorrect = false;
      }
    }
    return isCorrect;
  }
     
  /*function writeUserData() {
    var dt = new Date();

    firebase.database().ref('entry/' + dt).set({
      mood: $scope.surveyResults.mood,
      energy: $scope.surveyResults.energy,
      temperature : $scope.surveyResults.temperature,
      noise : $scope.surveyResults.noise,
      class : $scope.surveyClassroom
    });
  }*/
  
  $scope.submitSurvey = function () { 
    if ( validateForm() ) {
      $rootScope.surveyClassroom = $scope.classroom;
      // TODO: Store values in Jason's database.
      //writeUserData();
      $location.path('/sensors');
    }
  }
  
}); // End controller.