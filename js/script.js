$(document).ready(function () {
    
    
 
    $.ajax({
        url: "action/usract.php?req=1",
        type: "GET",
        dataType: "TEXT",
        data: {},
        success: function (data) {
            if(data != "0"){
            var dt = data.split(",");
            $("#txtV1").html(dt[0]);
            $("#txtV2").html(dt[1]);
            $("#txtData").html(dt[2]);
            $("#scon").removeClass('alert alert-info');
            $("#scon").addClass("alert alert-success");
            $("#scon").text("Conexão efetuada com sucesso!");
            $("#scon" ).delay(2000).hide(1000);
            
            }
            else{
                $("#scon").removeClass('alert alert-info');
                $("#scon").addClass("alert alert-danger");
                $("#scon").text("Falha ao conectar, tente novamente.");
            }
        },
        error: function (error) {
            console.log(error);
        }
    });
    $.ajax({
        
        url: "action/usract.php?req=2",
        type: "GET",
        dataType: "TEXT",
        data: {},
        success: function (data) {
            if(data != "0"){
            var dt = data.split(",");
            $("#LU0").html("1");
            $("#LU1").html(dt[0]);
            $("#LU2").html(dt[1]);
            $("#LU3").html(dt[2]);
            $("#scon1").removeClass('alert alert-info');
            $("#scon1").addClass("alert alert-success");
            $("#scon1").text("Exibindo últimas atualizações!");
            $("#scon1" ).delay(1500).hide(1000);
           
            
            }
            else{
                $("#scon1").removeClass('alert alert-info');
                $("#scon1").addClass("alert alert-warning");
                $("#scon1").text("Não há registro de atualizações.");
            }
        },
        error: function (error) {
            console.log(error);
        }
    });

    $("#oget").bind("change", function() {
          $.ajax({
              type: "GET", 
              url: "action/usract.php?req=3",
              data: "oget="+$("#oget option:selected").text()+","+$("#oget").val(),
              success: function(data) {
               var dt = data.split(",");
                 $("#LU0").html(dt[0]);
                 $("#LU1").html(dt[1]);
                 $("#LU2").html(dt[2]);
                 $("#LU3").html(dt[3]);
              }
          });
      });
    
    $("#btnAtualiza").click(function () {
        
            
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "View/ESP32.php", true);
            xhr.onload = function (e) {
              if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    $('#archiv').html(xhr.responseText);
                } else {
                  console.error(xhr.statusText);
                }
              }
            };
            xhr.onerror = function (e) {
              console.error(xhr.statusText);
            };
            xhr.send(null); 
            
            
        
        

    });
    
    
    
});