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
 

  });
});


//前区

</script>


<script type="text/javascript">


$(document).ready(function(){
  $("#button1").click(function(){
    


var colors = ['a','b','c','d','e','f','g'];


var x = colors[(Math.floor(Math.random() * (colors.length)))]


var colorsxy = [,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','1','2','3','4','5','6','7','8','9'];


var xy = colorsxy[(Math.floor(Math.random() * (colorsxy.length)))]

var y2="+";

//$("#to").attr('id','xx');//之后变成xx
 
 
 var $p= Math.floor(Math.random()*35+0);

 var $z= Math.floor(Math.random()*35+0);


if ($p<$z)
{
    
$("#"+x).val(Math.floor(Math.random()*35+1)+y2);

}
else
{



$("#"+x).after(Math.floor(Math.random()*35+1)+y2);


  }


 //前区


$("#a").attr('id','g');

$("#b").attr('id','f');


$("#c").attr('id','e');


$("#d").attr('id','c');

$("#e").attr('id','d');


$("#f").attr('id','b');


$("#g").attr('id','a');


  });
});
</script>






