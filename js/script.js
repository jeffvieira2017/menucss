$(document).ready(function() {
    $("#bt-paises").click(function() {
        $.ajax({
            url: 'controller/Paises.php',
            method: 'POST',
            data: {'action':'listar'},
            dataType: 'json',
            success: function(resultado) {
                $("#bt-paises").hide();
                $("#area-bt").append("<button type='button' id='teste'>Fechar</button>");
                var i = 0;
                while(i < resultado.length) {
                    $("#main").append("<iframe src="+resultado[i].link+" frameborder='0' style='width:20%;margim:0;padding:0;float:left;'></iframe>");
                    if($("#main").hide()) {
                        $("#main").show();
                    }
                    i++;
                }
                $("#teste").click(function() {
                    $(this).remove();
                    $("#main").html('');
                    $("#bt-paises").show();
                });
            }
        });
    });
});