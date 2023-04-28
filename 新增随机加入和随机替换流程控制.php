//代码片段

<script>
 
function displayDate(){
	document.getElementById("demo").innerHTML=$("b").text();
}
</script>



<script type="text/javascript">



$(document).ready(function(){
  $("#buttonaabb").click(function(){
    



var colors = ['a','b','c','d','e','f','g'];




var x = colors[(Math.floor(Math.random() * (colors.length)))]



var colorsxy = [a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,'1','2','3','4','5','6','7','8','9'];



var xy = colorsxy[(Math.floor(Math.random() * (colorsxy.length)))]

var y2="+";




 ////以下是起点于尾巴随机

 
 
var colorsaabb = ['aa','bb'];




var xaabb = colorsaabb[(Math.floor(Math.random() * (colorsaabb.length)))]

//后区



 var $p2= Math.floor(Math.random()*12+0);

var $z2= Math.floor(Math.random()*12+0);



 
if ($p2<$z2)
{

//条件成立随机替换
$("#"+xaabb).val(Math.floor(Math.random()*12+1)+y2);

}
else
{
 //条件成立随机加入
$("#"+xaabb).after(Math.floor(Math.random()*12+1)+y2);



  }



$("#aa").attr('id','bb');

$("#bb").attr('id','aa');


//$("#to").attr('id','xx');//之后变成xx
 




