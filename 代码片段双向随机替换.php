//代码片段
<style>



div {display: inline;}


</style>



<script>


$(document).ready(function(){
  $("#button3").click(function(){
    


var colors = ['a','b','c','d','e','f','g'];




var x = colors[(Math.floor(Math.random() * (colors.length)))]




var colorsxy = [,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','1','2','3','4','5','6','7','8','9'];



var xy = colorsxy[(Math.floor(Math.random() * (colorsxy.length)))]

var y2="+换";

//$("#to").attr('id','xx');//之后变成xx
 
 
 
 var $p= Math.floor(Math.random()*33+0);

var $z= Math.floor(Math.random()*33+0);



 

 
 
if ($p<$z)
{
    
$("#"+x).val("换");

}
else
{



$("#"+x).val(Math.floor(Math.random()*33+1)+y2);




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



 
 <h1>
 
 
 <br>
 

 
<button  style="font-size:60px;color:#FF0000" onclick="function()" id='button3'>前区替换还原</button>  


  
 <h1>
  





