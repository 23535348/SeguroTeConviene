<script type="text/javascript">
    $(document).ready(function(){
        
        $(".masInformacion").on("click", function(e){
            $(".ocultar").each(function(){
                $(this).css("display", "none;");
                $(this).attr('style', 'display:none;');
            });
            $("#"+$(this).data("id")).attr("style", "display:inline-block;");
        });
        
        $(".regresar").on("click", function(e){
            $(".ocultar").each(function(){
                $(this).attr('style', 'display:block;');
            });
            $("#"+$(this).data("id")).attr("style", "display:none;");
        });
    });
</script>