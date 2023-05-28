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






        
        
        
        
        
        
        
        
        
        
        
