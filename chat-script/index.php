<html>
<head>
<script type="text/javascript" src="jquery-1.2.6.pack.js"></script>
<script type="text/javascript">  
 
function update()
{
    $.post("server.php", {}, function(data){ $("#screen").val(data);});  
 
    setTimeout('update()', 1000);
}
 
$(document).ready(
 
function() 
    {
     update();
 
     $("#button").click(    
      function() 
      {         
       $.post("server.php", 
    { name: $("#name").val(), message: $("#message").val()},
    function(data){ 
    $("#screen").val(data); 
    $("#message").val("");
    }
    );
      }
     );
    });
 
 
</script>
</head>
<body>
 
<textarea id="screen" cols="40" rows="40"> </textarea> <br>  
Name: <input id="name" size="40"><br/>
Message: <input id="message" size="40">
<button id="button"> Send </button>
 
</body>
</html>