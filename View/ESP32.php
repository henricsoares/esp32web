<html>

<head>
    <title>ESP32</title>
    <br>

    
    <!--<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />-->
</head>

<body>
    <div class="alert alert-info" role="alert" id="scon">Conectando ao dispositivo...</div>
    <div class="panel panel-default">
  
        <div class="panel-heading"><h3>ESP32 INFO</h3><p id="txtData">----------</p>
        </div>
            <table class="table"> 
                <tr>
                    <th scope="col"><b>#</b></th>
                    <th scope="col">Sensor</th>
                    <th scope="col">Value</th>
                    
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td><span id="txtS1">Temperature</span></td>
                    <td><span id="txtV1">----------</span></td>
                    
                    
                </tr>
                <tr>
                <th scope="row">2</th>
                    <td><span id="txtS2">Luminosity</span></td>
                    <td><span id="txtV2">----------</span></td>
                    
                </tr>       

            </table> 
            
            
            
    </div>
    <div class="alert alert-info" role="alert" id="scon1">Buscando últimas atualizações...</div>
    <div class="panel panel-default">
<div class="panel-heading" id="linfo"><h3>LAST UPDATES</h3>
    <select class="form-control" id="oget">
    <?php
        include 'C:\\xampp\\htdocs\\esp32panel\\Action\\usract.php';
            if(isset($lasts[0])){
                for ($i = 0; $i < 10; $i++) {
                    if($i < sizeof($lasts)){
                    ?>
                    <option value="<?= ($i + 1); ?>"><?=$lasts[$i]; ?></option>
                    <?php
                    }
                }
            }
                ?>
    </select>
</div>

        <table class="table"> 
            <tr>
                <th scope="col"><b>#</b></th>
                <th scope="col">Temperature</th>
                <th scope="col">Luminosity</th>
                <th scope="col">Date&Time</th>
                
            </tr>
                <tr>
                <th scope="row"><span id="LU0">-</span></th>
                <td><span id="LU1">----------</span></td>
                <td><span id="LU2">----------</span></td>
                <td><span id="LU3">----------</span></td>
                
                
            </tr>
            
        
    

        </table>
        

        </div>
    
        <div class="col-md-12 center-block">  
                            <button id="btnAtualiza" type="button" class="btn btn-default btn-lg center-block" >
                            <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
                            </button>   
                            </div> 
       
    
    
                            <script src="js/jquery-3.4.1.min.js"></script>
                            <script src="js/script.js"></script>

</body>

</html>