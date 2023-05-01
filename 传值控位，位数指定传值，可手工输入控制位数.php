<p><h3>尝试修改以下表单。</p>
​
<div ng-app="myApp" ng-controller="myCtrl">
    
    
  <p><h3>a_ng后区指定位数 : 
  

 <input   style="font-size:30px;color:#FF0000" type="text" name="a_ng[]" id="a1" value="0" ng-model="firstName">   


        <label for="fullname"><h1>2023年5月1，可指定位数传值：</label>
       
</p>
    
  <p><h3>_ng前区指定位数 : 
    
    
<input style="font-size:30px;color:#FF0000" type="text" name="b_ng[]" id

="b1" value="0" ng-model="lastName">

<br>

<br>

<h1>
    
input前区位数值: {{+lastName}}

<br>


<br>


input后区位数值: {{+firstName}}



<br>

<h1>
    
<br>










