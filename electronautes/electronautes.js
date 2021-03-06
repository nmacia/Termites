'use strict';

// Declare app level module which depends on views, and components
angular.module('electronautes', [
  'ngRoute'
])
.config(['$locationProvider', '$routeProvider', function($locationProvider, $routeProvider) {
  //$locationProvider.hashPrefix('!');

  $routeProvider.otherwise({redirectTo: '/funfact'});
}])

.controller('electronautesCtrl', function($scope, $rootScope, $location) { 
  

  // VARIABLES
  
  $rootScope.classroom = 'floorplan'; // default value when the page is loaded
  
  // List of sensors following the grid order.
  $rootScope.listOfSensors = [
    ['presence', 'motion', 'proximity'], 
    ['window', 'door', 'curtains'],
    ['temperature', 'humidity', 'pressure'],
    ['co2', 'light']
  ];
  
  // Info regarding bug reports.
  $rootScope.bugReport = {
    'startReporting': false,
    'bugDescription': ""
  };
  
  // Add click event listener to floorplan svg file.
  $rootScope.addClickableEventToClassroomsInSVG = function(svgObjectId) {
    var svgObj = document.getElementById(svgObjectId);
    if (svgObj) {
      svgObj.addEventListener("load", function() { 

        var svgDoc = svgObj.contentDocument;
        var classroomPaths = svgDoc.getElementsByClassName("svg-clickable-classroom");

        for (var i = 0; i < classroomPaths.length; i++) {
          var classroomPath = classroomPaths[i];
          classroomPath.addEventListener("click", function(event) {
            var parentGroup = event.path[1];
            if (parentGroup) {    
              var classId = parentGroup.id;
              $rootScope.classroom = classId;
              goToClass(classId);                  
            }          
          });
          
          classroomPath.addEventListener("touchstart", function(event) {
            var parentGroup = event.path[1];
            if (parentGroup) {    
              var classId = parentGroup.id;
              $rootScope.classroom = classId;
              goToClass(classId);                  
            }          
          });
        }             
      });
    }
  };
  
    // SVG STYLE
  
  $rootScope.importGoogleFontToSVG = function (svgObjectId) {
    var svgObj = document.getElementById(svgObjectId);
    if (svgObj) {
      svgObj.addEventListener("load", function() { 
        var svgDoc = svgObj.contentDocument;

        // Create the style element within the svg and add the import for the right font.
        var importStament = `
            @import url(https://fonts.googleapis.com/css?family=Amatic+SC);
        `;
        var style = svgDoc.createElementNS("http://www.w3.org/2000/svg", "style");        
        style.innerHTML = style.innerHTML + importStament;
        svgDoc.documentElement.appendChild(style);
      }, false);
    }
  };

  
  var goToClass = function(classId) {  
    $scope.classroom = classId;
    $rootScope.$apply();
  }
  
});

