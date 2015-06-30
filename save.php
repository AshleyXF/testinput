<!--<input type="text"  class="btn btn-default btn-sm"/>

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
    </div>-->







<!--<div id="navtest">    
    <a href="#a1" onclick="changepage('#a1')">A1</a>
    <a href="#a2" onclick="changepage('#a2')" >A2</a>
    <a href="#a3" onclick="changepage('#a3')" >A3</a>
    <a href="#a4" onclick="changepage('#a4')" >A4</a>    
</div>-->







<!--<button onclick="myFunction()">Try it</button>-->


<!--<input type="button" value="d" onclick="page()">

<input type="button" value="set background" ng-click="myStyle={'display' : 'block'}">
        <pre>myStyle={{myStyle}}</pre>-->






                /*
                document.querySelectorAll('.container').style.background = "blue";
                
                $( "button" ).on( "mouseover", function() {
                    $( this ).css( "color", "red" );
                  });
                
                $('.container').css('background' , 'red');
                
                $('.container ' + hash + '').css('background' , 'red');
                $('.container ' + hash + ' *').css('display' : 'block');*/
                
                
                
                
                
                
                
                
                
                
                
                
                
<!--<div id="a2" class="page" ng-controller="TimepickerDemoCtrl">

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

                </div>-->







<!--<pre>{{radioModel || 'null'}}</pre>
                    <a role="button" class="btn btn-primary btn-lg sharp" href="#a1" onclick="changepage('#a1')" ng-model="radioModel" btn-radio="'test'">test</a>
                    <a role="button" class="btn btn-primary btn-lg sharp" href="#a1" onclick="changepage('#a1')" ng-model="radioModel" btn-radio="'test2'">test2</a>-->





            var hash = window.location.hash;
                var link = $('a');
                //pass event here
                $('a').click(function(e) {
                  e.preventDefault();
                  hash = "#"+link.attr("href");
                });    
                
                
                
                
                
        function page(){
                var hash = window.location.hash;
                alert(hash);
            }
               
            
            
            
        
            <div id="a4" class="page" ng-controller="DatepickerDemoCtrl">
                <pre>Selected date is: <em>{{dt | date:'fullDate' }}</em></pre>

                <h4>Inline</h4>
                <div style="display:inline-block; min-height:290px;">
                  <datepicker ng-model="dt" min-date="minDate" show-weeks="true" class="well well-sm" custom-class="getDayClass(date, mode)"></datepicker>
                </div>
            </div>


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