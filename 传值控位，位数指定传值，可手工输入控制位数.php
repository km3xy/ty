
//代码片段



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



$arr4=$_POST['c'];  

//可以手工输入位数位数，必须把位数数组转换成字符串

  // php获取  input  value

//$x=$_POST['b_ng'];

$x=$_POST['b_ng'];  

$x2=join($x);   

//把位数数组转换成字符串数字，$x2=join($x);

//可以手工输入位数，把位数数组转换成字符串数字
//
//把c数组赋值给arr4


//$x=mt_rand(5,5);  //取随机数



$y=count($arr4);//获取C数组长度


$xy=$x2-$y;  //减法计算




$b5=mt_rand($xy,$xy); //设定位数值




 $arr5=array_rand($result2,$b5);  

 //在勾选号码中随机




$arr4=$_POST['c'];  


// 把c数组赋值给arr4



$he= array_merge($arr5,$arr4); 

//合并arr5和arr4数组


sort($he);      //按照顺序排列数组

$hejoin=join("+", $he);   


 //把数组转换成字符串
 
echo  $hejoin;



php获取  input  value



$x=$_POST['b_ng'];


js获取  input   value



var a=document.getElementById("a1").value;



<script>


var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.firstName= Math.floor(Math.random()*0+0);
    $scope.lastName=Math.floor(Math.random()*0+0);
});



function myFunction2()
{



var colors = ['aa','bb','cc','dd','ee','ff','gg','hh','ii','jj','kk','ll'];


var xx = colors[(Math.floor(Math.random() * (colors.length)))]


var colors2 = ['a','b','c','d','e','f','g','h','i','j','k','l'];


var xy = colors2[(Math.floor(Math.random() * (colors2.length)))]


var  y=Math.floor(Math.random()*12+0); 

/*

var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.firstName= Math.floor(Math.random()*35+1);
    $scope.lastName=Math.floor(Math.random()*35+1);
});


var  y=Math.floor(Math.random()*35+0); 

//注35+0是取0到35之间随机数



*/

//后区4s5r


var  y3="+"; 


var a=document.getElementById("a1").value;



var y6=Math.random();

var y7=Math.floor(Math.random()*0+0); 

var r=Math.random();


if (r>y6){

    document.getElementById(xx).innerHTML=a+y3+y6; 




}

else{

    document.getElementById(xx).innerHTML=a+y3+y7; 


}



}



</script>





