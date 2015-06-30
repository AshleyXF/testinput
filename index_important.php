<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Test Angular bootstrap</title>
        
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="test.css" type="text/css" />
        <!--<link rel="stylesheet" href="css/bootstrap-theme.min.css" type="text/css" />-->
        
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/angular.min.js"></script>
        <script src="js/ui-bootstrap-tpls-0.13.0.min.js"></script>
        
        <script src="js/config.js"></script>
        
        <script>
            
            function page(){
                var hash = window.location.hash;
                alert(hash);
            }
                
                /*
                document.querySelectorAll('.container').style.background = "blue";
                
                $( "button" ).on( "mouseover", function() {
                    $( this ).css( "color", "red" );
                  });
                
                $('.container').css('background' , 'red');
                
                $('.container ' + hash + '').css('background' , 'red');
                $('.container ' + hash + ' *').css('display' : 'block');*/
    
                

            function myFunction(page) {
                var hash = window.location.hash;
                document.querySelector(hash).style.display = "none";
                document.querySelector(page + '.page').style.display = "block";
                //document.getElementById(page).style.display = "block";
                
            }
</script>
                
        
    </head>
    <body ng-app="app" ng-init="myStyle={'display' : 'block'}">
        <button onclick="myFunction()">Try it</button>
        <a href="#a1" onclick="myFunction('#a1')">A1</a>
        <a href="#a2" onclick="myFunction('#a2')" >A2</a>
        <a href="#a3" onclick="myFunction('#a3')" >A3</a>
        <a href="#a4" onclick="myFunction('#a4')" >A4</a>
        
        <input type="button" value="d" onclick="page()">
        
        <input type="button" value="set background" ng-click="myStyle={'display' : 'block'}">
                <pre>myStyle={{myStyle}}</pre>
            <div class="container" >
                
            <div id="a1" class="page">
                <input type="text"  class="btn btn-default btn-sm"/>

                <div ng-style="myStyle" ng-controller="AlertDemoCtrl">
                  <alert ng-style="myStyle" ng-repeat="alert in alerts" type="{{alert.type}}" close="closeAlert($index)">{{alert.msg}}</alert>
                  <button ng-style="myStyle" class='btn btn-default' ng-click="addAlert()">Add Alert</button>
                </div>

                <div ng-controller="ButtonsCtrl">
                    <pre>{{radioModel || 'null'}}</pre>
                    <div class="btn-group">
                        <label class="btn btn-primary" ng-model="radioModel" btn-radio="'Left'">Left</label>
                        <label class="btn btn-primary" ng-model="radioModel" btn-radio="'Middle'">Middle</label>
                        <label class="btn btn-primary" ng-model="radioModel" btn-radio="'Right'">Right</label>
                    </div>
                </div>

                <div ng-controller="ButtonsCtrl">
                    <pre>{{radioModel || 'null'}}</pre>
                    <button class="btn btn-warning" ng-model="radioModel" btn-radio="'Left'">Left</button>
                    <button class="btn btn-danger" ng-model="radioModel" btn-radio="'Middle'">Middle</button>
                    <button class="btn btn-success" ng-model="radioModel" btn-radio="'Right'">Right</button>
                </div>
            </div>
                
               
                <div id="a4" class="page" ng-controller="DatepickerDemoCtrl">
                    <pre>Selected date is: <em>{{dt | date:'fullDate' }}</em></pre>

                    <h4>Inline</h4>
                    <div style="display:inline-block; min-height:290px;">
                      <datepicker ng-model="dt" min-date="minDate" show-weeks="true" class="well well-sm" custom-class="getDayClass(date, mode)"></datepicker>
                    </div>
                </div>




                <script type="text/ng-template" id="customTemplate.html">
                  <a>
                      <img ng-src="http://upload.wikimedia.org/wikipedia/commons/thumb/{{match.model.flag}}" width="16">
                      <span bind-html-unsafe="match.label | typeaheadHighlight:query"></span>
                  </a>
                </script>
                <div id="a3" class="page" class='container-fluid' ng-controller="TypeaheadCtrl">

                    <h4>Static arrays</h4>
                    <pre>Model: {{selected | json}}</pre>
                    <input type="text" ng-model="selected" typeahead="state for state in states | filter:$viewValue | limitTo:8" class="form-control">

                    <h4>Asynchronous results</h4>
                    <pre>Model: {{asyncSelected | json}}</pre>
                    <input type="text" ng-model="asyncSelected" placeholder="Locations loaded via $http" typeahead="address for address in getLocation($viewValue)" typeahead-loading="loadingLocations" class="form-control">
                    <i ng-show="loadingLocations" class="glyphicon glyphicon-refresh"></i>

                    <h4>Custom templates for results</h4>
                    <pre>Model: {{customSelected | json}}</pre>
                    <input type="text" ng-model="customSelected" placeholder="Custom template" typeahead="state as state.name for state in statesWithFlags | filter:{name:$viewValue}" typeahead-template-url="customTemplate.html" class="form-control">
                </div>




            <div id="a2" class="page" ng-controller="TimepickerDemoCtrl">

              <timepicker ng-model="mytime" ng-change="changed()" hour-step="hstep" minute-step="mstep" show-meridian="ismeridian"></timepicker>

              <pre class="alert alert-info">Time is: {{mytime | date:'shortTime' }}</pre>

              <div class="row"> 
                <div class="col-xs-6">
                    Hours step is:
                  <select class="form-control" ng-model="hstep" ng-options="opt for opt in options.hstep"></select>
                </div>
                <div class="col-xs-6">
                    Minutes step is:
                  <select class="form-control" ng-model="mstep" ng-options="opt for opt in options.mstep"></select>
                </div>
              </div>

              <hr>

              <button class="btn btn-info" ng-click="toggleMode()">12H / 24H</button>
              <button class="btn btn-default" ng-click="update()">Set to 14:00</button>
              <button class="btn btn-danger" ng-click="clear()">Clear</button>

            </div>






            </div>
            
        
    </body>
</html>
