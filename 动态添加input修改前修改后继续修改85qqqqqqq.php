代码示例

修改前
<script type="text/javascript">
        
$(document).ready(function() {
var MaxInputs   = 35; //maximum input boxes allowed
var InputsWrapper  = $("#InputsWrapper"); //Input boxes wrapper ID
var AddButton    = $("#AddMoreFileBox"); //Add button ID
var x = InputsWrapper.length; //initlal text box count
var FieldCount= Math.floor(Math.random()*0+0);
 //to keep track of text box added
$(AddButton).click(function (e) //on add input button click
{
    if(x <= MaxInputs) //max input box allowed
    {
   
      FieldCount++; //text box added increment
     //这里是随机++加1 
            
            //add input box
      $(InputsWrapper).append('<div><input  style="font-size:30px;color:#FF0000" type="text" name="a[]" id="a1'+ FieldCount +'" value=" '+ FieldCount +'"/><a href="#" rel="external nofollow" rel="external nofollow" rel="external nofollow" class="removeclass"><input  style="font-size:30px;color:#FF0000"  type="button" value="删除"></a></div>');
      x++; //text box increment
    }
return false;
});
$("body").on("click",".removeclass", function(e){ //user click on remove text
    if( x > 1) {
        $(this).parent('div').remove(); //remove text box
        x--; //decrement textbox
    }
return false;
})
});
</script>
</head>

修改后


<script type="text/javascript">



$(document).ready(function() {

//位数MaxInputs

//随机input位数


var MaxInputs=Math.floor(Math.random()*10+5);


//位数MaxInputs


; //maximum input boxes allowed
var InputsWrapper  = $("#InputsWrapper"); //Input boxes wrapper ID
var AddButton    = $("#AddMoreFileBox"); //Add button ID
var x = InputsWrapper.length; //initlal text box count


//FieldCount随机第一个input



  var $pt= Math.floor(Math.random()*35+0);

var $zt= Math.floor(Math.random()*35+0);





if ($pt<$zt)
{
        
var FieldCount= Math.floor(Math.random()*0+0);

      

}
else
{
    
        
        
var FieldCount= Math.floor(Math.random()*0+0);

      
 
}
 


 //to keep track of text box added
$(AddButton).click(function (e) //on add input button click
{
    if(x <= MaxInputs) //max input box allowed
    {
        
        
 //随机FieldCount第二个依次input更多， //随机第二个第n个input更多
 
 
  var $p= Math.floor(Math.random()*35+1);

var $z= Math.floor(Math.random()*35+1);



 
 
if ($p<$z)
{
        
      FieldCount= Math.floor(Math.random()*35+1);
      
//这里取随机数
}
else
{
    
        
        
      FieldCount++;
      
//这里是随机++加1

 
}
 
 

      
 //随机FieldCount第二个依次input更多， //随机第二个第n个input更多
 
 
; //text box added increment
      //add input box
      
      
      $(InputsWrapper).append('<div><input  style="font-size:30px;color:#FF0000" type="text" name="a[]" id="a1'+ FieldCount +'" value=" '+ FieldCount +'"/><a href="#" rel="external nofollow" rel="external nofollow" rel="external nofollow" class="removeclass"><input  style="font-size:30px;color:#FF0000"  type="button" value="删除"></a></div>');
      x++; //text box increment
    }
return false;
});
$("body").on("click",".removeclass", function(e){ //user click on remove text
    if( x > 1) {
        $(this).parent('div').remove(); //remove text box
        x--; //decrement textbox
    }
return false;
})
});
</script>












































































































































































































































        
        
        
        
        
        
        
        
        
        
        
