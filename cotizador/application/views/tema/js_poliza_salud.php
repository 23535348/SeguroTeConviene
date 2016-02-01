<script type="text/javascript">
    $(document).ready(function(){
        
        $(".masInformacion").on("click", function(e){
            $(".ocultar").each(function(){
                $(this).css("display", "none;");
                $(this).attr('style', 'display:none;');
            });
            console.log($(this).data("id"));
            $("#"+$(this).data("id")).attr("style", "display:inline-block;");
            document.getElementById($(this).data("id")).scrollIntoView();
        });
        
        $(".regresar").on("click", function(e){
            $(".ocultar").each(function(){
                $(this).attr('style', 'display:block;');
            });
            $("#"+$(this).data("id")).attr("style", "display:none;");
        });
    });
    //PolVida
    function ActivarTerminosPolSalud(){
        
        document.getElementById('vehiculo').style.display = 'none';
        document.getElementById('TerminosCondiciones').style.display = 'block';
        document.getElementById("TerminosCondiciones").scrollIntoView();
        return true;
    }

    function DesactivarTerminosPolSalud(){
        
        document.getElementById('vehiculo').style.display = 'block';
        document.getElementById('TerminosCondiciones').style.display = 'none';
        document.getElementById("personal").scrollIntoView();
        return true;
    }
</script>