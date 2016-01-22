<script type="text/javascript">
    $(document).ready(function(){
        //quitarRow
        $(".masInformacion").on("click", function(e){
            $(".ocultar").each(function(){
                $(this).css("display", "none;");
                $(this).attr('style', 'display:none;');
            });
            $(".quitarRow").each(function(){
                $(this).attr('class', 'quitarRow');
            });
            
            $("#"+$(this).data("id")).attr("style", "display:block;");
            document.getElementById($(this).data("id")).scrollIntoView();
        });
        
        $(".regresar").on("click", function(e){
            $(".ocultar").each(function(){
                $(this).attr('style', 'display:block;');
            });
            $(".quitarRow").each(function(){
                $(this).attr('class', 'row well quitarRow');
            });
            console.log($(this).data("id"));
            $("#"+$(this).data("id")).attr("style", "display:none;");
        });
        $(".enviar").on("click", function(e){
            $( "#"+$(this).data("id") ).submit();
        });
    });
    //PolVida
    function ActivarTerminosPolIncendio(){
        document.getElementById('personal').style.display = 'none';
        document.getElementById('TerminosCondiciones').style.display = 'block';
        document.getElementById("TerminosCondiciones").scrollIntoView();
        return true;
    }

    function DesactivarTerminosPolIncendio(){
        document.getElementById('personal').style.display = 'block';
        document.getElementById('TerminosCondiciones').style.display = 'none';
        document.getElementById("personal").scrollIntoView();
        return true;
    }
    function formvalidationincendio() {

        var f_nombre=document.getElementsByName("nombre")[0].value;
        var f_apellido=document.getElementsByName("apellido")[0].value;
        var f_cedula=document.getElementsByName("cedula")[0].value;
        var f_celular=document.getElementsByName("celular")[0].value;
        var f_telefono=document.getElementsByName("telefono")[0].value;
        var f_email=document.getElementsByName("email")[0].value;
        
        var suma_asegurada=document.getElementsByName("suma_asegurada")[0].value;
        var tipo_bien=document.getElementsByName("tipo_bien")[0].value;
        var sector=document.getElementsByName("sector")[0].value;
        var tipo_construccion=document.getElementsByName("tipo_construccion")[0].value;
        
        
        

        if( f_nombre == '')
        {
            alert("Introduzca el Nombre");
            //document.getElementsByName("nombre")[0].focus();
            //x.focus();
            return false;
        }
        if ( f_apellido == '')
        {
            alert("Introduzca el Apellido");
            //x.focus();
            return false;
        }
        else if( f_cedula == '')
        {
            alert("Introduzca la Cédula");
            //x.focus();
            return false;
        }
        else if( tipo_bien == '')
        {
            alert("Introduzca el tipo de bien");
            //x.focus();
            return false;
        }
        else if( suma_asegurada == '')
        {
            alert("Introduzca el valor a asegurar");
            //x.focus();
            return false;
        }
        else if( sector == '')
        {
            alert("Introduzca sector");
            //x.focus();
            return false;
        }
        else if( f_email == '')
        {
            alert("Introduzca el correo");
            //x.focus();
            return false;
        }
        else if( f_telefono == '')
        {
            alert("Introduzca la Telefono");
            //x.focus();
            return false;
        }
        else if( f_celular == '')
        {
            alert("Introduzca la Celular");
            //x.focus();
            return false;
        }
        else if( tipo_construccion == '')
        {
            alert("Introduzca el tipo de construccion");
            //x.focus();
            return false;
        }
        else{
            document.getElementById('divDatosPersonales').style.display = 'none';
            document.getElementById('divActiveVehicle').style.display = 'block';

            document.getElementById('personal').style.display = 'none';
            document.getElementById('vehiculo').style.display = 'block';
            return true;
        }


    }
    function validatePriceincendio()
    {
        var mystring = $("#suma_asegurada").val();
        var varNuevo = parseInt(mystring.replace(',','') );
        if(isNaN(varNuevo) ){
            $("#suma_asegurada").val('');
        }else{
            $("#suma_asegurada").val(varNuevo);
        }
        

    }
</script>