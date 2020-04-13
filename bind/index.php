<?php require('usract1.php');
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Dynamically binding select menus with PHP & jQuery</title>
  <style type="text/css">
  p {
    color: #555555;
    font-size: 0.9em;
    line-height: 1.9em;
    margin: 3px 3px 10px;
  }

  a {
    color: #EF1F2F;
    text-decoration: none;
  }

  a:hover {
    text-decoration: underline;
  }

  form input {
    border: 1px solid #999999;
    border-bottom-color: #cccccc;
    border-right-color: #cccccc;
    padding: 5px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 1.0em;
    margin: 2px;
  }

  #wrapper {
    margin:auto;
    width:900px;
  }
  </style>
</head>
<body> 

<div id="wrapper">

    <h1>Dynamically binding select menus with PHP & jQuery</h1>

    <p>This demo shows two select menus the second is determined by the first.</p>
 
	<form action='' method='post'>

		<p><label>Book Type:</label>
      <select id='oget'>
      <option value=''>Select</option>
      
      <?php
     
      for ($i = 0; $i < count($lasts); $i++) {
        $inf = $lasts[$i];
        ?>
        <option value=''><?= $inf ?></option>
        <?php
    }
      ?>
     </select>
    </p>

    <table class="table"> 
                    <tr>
                        <th scope="col"><b>#</b></th>
                        <th scope="col">Temperature</th>
                        <th scope="col">Luminosity</th>
                        <th scope="col">Date&Time</th>
                        
                    </tr>
                        <tr>
                        <th scope="row">1</th>
                        <td><span id="LU1">----------</span></td>
                        <td><span id="LU2">----------</span></td>
                        <td><span id="LU3">----------</span></td>
                        
                        
                    </tr>
                    
                
            

                </table>

	</form>

</div>
 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
$(function() {
 
 $("#oget").bind("change", function() {
   //alert("ok")
     $.ajax({
         type: "GET", 
         url: "change.php",
         data: "oget="+$("#oget option:selected").text(),
         success: function(data) {
          console.log(data);
          var dt = data.split(",");
            //console.log(dt);
            $("#LU1").html(dt[0]);
            $("#LU2").html(dt[1]);
            $("#LU3").html(dt[2]);
         }
     });
 });
			
 
});
</script>
</body>
</html>