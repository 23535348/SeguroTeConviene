
<script type="text/javascript">
    function validatePrice()
    {
        var mystring = $("#precio_venta").val();
        var varNuevo = parseInt(mystring.replace(',','') );
        $("#precio_venta").val(varNuevo);

    }

    function checkValidDate(dateStr) {
        var slash1 = dateStr.indexOf("/");
        if (slash1 == -1) { slash1 = dateStr.indexOf("-"); }
        // if no slashes or dashes, invalid date
        if (slash1 == -1) { return false; }

        var dateDay = dateStr.substring(0, slash1)
        var dateMonthAndYear = dateStr.substring(slash1+1, dateStr.length);
        var slash2 = dateMonthAndYear.indexOf("/");
        if (slash2 == -1) { slash2 = dateMonthAndYear.indexOf("-"); }
        // if not a second slash or dash, invalid date
        if (slash2 == -1) { return false; }
        var dateMonth = dateMonthAndYear.substring(0, slash2);
        var dateYear = dateMonthAndYear.substring(slash2+1, dateMonthAndYear.length);

        if ( (dateMonth == "") || (dateDay == "") || (dateYear == "") ) { return false; }
        // if any non-digits in the month, invalid date
        for (var x=0; x < dateMonth.length; x++) {
            var digit = dateMonth.substring(x, x+1);
            if ((digit < "0") || (digit > "9")) { return false; }
        }
        // convert the text month to a number
        var numMonth = 0;
        for (var x=0; x < dateMonth.length; x++) {
            digit = dateMonth.substring(x, x+1);
            numMonth *= 10;
            numMonth += parseInt(digit);
        }
        if ((numMonth <= 0) || (numMonth > 12)) { return false; }
        // if any non-digits in the day, invalid date
        for (var x=0; x < dateDay.length; x++) {
            digit = dateDay.substring(x, x+1);
            if ((digit < "0") || (digit > "9")) { return false; }
        }
        // convert the text day to a number
        var numDay = 0;
        for (var x=0; x < dateDay.length; x++) {
            digit = dateDay.substring(x, x+1);
            numDay *= 10;
            numDay += parseInt(digit);
        }
        if ((numDay <= 0) || (numDay > 31)) { return false; }
        // February can't be greater than 29 (leap year calculation comes later)
        if ((numMonth == 2) && (numDay > 29)) { return false; }
        // check for months with only 30 days
        if ((numMonth == 4) || (numMonth == 6) || (numMonth == 9) || (numMonth == 11)) {
            if (numDay > 30) { return false; }
        }
        // if any non-digits in the year, invalid date
        for (var x=0; x < dateYear.length; x++) {
            digit = dateYear.substring(x, x+1);
            if ((digit < "0") || (digit > "9")) { return false; }
        }
        // convert the text year to a number
        var numYear = 0;
        for (var x=0; x < dateYear.length; x++) {
            digit = dateYear.substring(x, x+1);
            numYear *= 10;
            numYear += parseInt(digit);
        }
        // Year must be a 2-digit year or a 4-digit year
        if ( (dateYear.length != 2) && (dateYear.length != 4) ) { return false; }
        // if 2-digit year, use 50 as a pivot date
        if ( (numYear < 50) && (dateYear.length == 2) ) { numYear += 2000; }
        if ( (numYear < 100) && (dateYear.length == 2) ) { numYear += 1900; }
        if ((numYear <= 0) || (numYear > 9999)) { return false; }
        // check for leap year if the month and day is Feb 29
        if ((numMonth == 2) && (numDay == 29)) {
            var div4 = numYear % 4;
            var div100 = numYear % 100;
            var div400 = numYear % 400;
            // if not divisible by 4, then not a leap year so Feb 29 is invalid
            if (div4 != 0) { return false; }
            // at this point, year is divisible by 4. So if year is divisible by
            // 100 and not 400, then it's not a leap year so Feb 29 is invalid
            if ((div100 == 0) && (div400 != 0)) { return false; }
        }
        // date is valid
        return true;
    }

    function checkBirthday(dateStr) {
        var slash1 = dateStr.indexOf("/");
        if (slash1 == -1) { slash1 = dateStr.indexOf("-"); }
        // if no slashes or dashes, invalid date
        if (slash1 == -1) { return false; }
        var dateDay = dateStr.substring(0, slash1)
        var dateMonthAndYear = dateStr.substring(slash1+1, dateStr.length);
        var slash2 = dateMonthAndYear.indexOf("/");
        if (slash2 == -1) { slash2 = dateMonthAndYear.indexOf("-"); }
        // if not a second slash or dash, invalid date
        if (slash2 == -1) { return false; }
        var dateMonth = dateMonthAndYear.substring(0, slash2);
        var dateYear = dateMonthAndYear.substring(slash2+1, dateMonthAndYear.length);
        var currentTime = new Date()
        //var month = currentTime.getMonth() + 1
        //var day = currentTime.getDate()
        var year = currentTime.getFullYear()
        var diferencia_anio = year - dateYear;
        if (diferencia_anio < 18 ){

            return false;
        }
        // date is valid
        return true;
    }

    function Validador()
    {
        //var precio_actual_validador=document.forms["informacion"]["precio_actual"].value;
        var precio_original_validador=document.forms["informacion"]["precio_venta"].value;
        var fecha_nac_validador=document.forms["informacion"]["fecha_nac"].value;
        var anio_auto=document.forms["informacion"]["anio_auto"].value;
        if (!checkValidDate(fecha_nac_validador)) {
            alert("Por favor ingrese correctamente la fecha (dd/mm/aaaa)");
            return false;
        }
        if (!checkBirthday(fecha_nac_validador)) {
            alert("No se Puede Cotizar para Menores de 18 años");
            return false;
        }
        if (precio_original_validador==null || precio_original_validador=="0" || precio_original_validador=="0.00" || precio_original_validador==0)
        {
            alert("Por favor ingrese el precio del auto.");
            return false;
        }
        var currentTime = new Date()
        var year = currentTime.getFullYear()
        var diferencia_anio = year - anio_auto;
    }

    function echandoPatras(){
        document.getElementById('personal').style.display = 'block';
        document.getElementById('vehiculo').style.display = 'none';
        return true;
    }
    function ActivarTerminos(){
        document.getElementById('row_img_num').style.display = 'none';
        document.getElementById('row_letas').style.display = 'none';
        document.getElementById('personal').style.display = 'none';
        document.getElementById('vehiculo').style.display = 'none';
        document.getElementById('TerminosCondiciones').style.display = 'block';
        document.getElementById("TerminosCondiciones").scrollIntoView();
        return true;
    }

    function DesactivarTerminos(){
        document.getElementById('row_img_num').style.display = 'block';
        document.getElementById('row_letas').style.display = 'block';
        document.getElementById('personal').style.display = 'none';
        document.getElementById('vehiculo').style.display = 'block';
        document.getElementById('TerminosCondiciones').style.display = 'none';
        document.getElementById("personal").scrollIntoView();
        return true;
    }
    function DesactivarTerminos2(){
        document.getElementById('row_img_num').style.display = 'block';
        document.getElementById('row_letas').style.display = 'block';
        document.getElementById('personal').style.display = 'block';
        document.getElementById('vehiculo').style.display = 'none';
        document.getElementById('TerminosCondiciones').style.display = 'none';
        document.getElementById("personal").scrollIntoView();
        return true;
    }


    function ActivarInformacion(plan,id){
        document.getElementById('row_img_num').style.display = 'none';
        document.getElementById('row_letas').style.display = 'none';
        document.getElementById('resultados').style.display = 'none';
        document.getElementById('resultados1').style.display = 'none';
        document.getElementById('resultados2').style.display = 'none';
        document.getElementById('aseguradora_plan_' + plan + id).style.display = 'block';
        document.getElementById('aseguradora_plan_' + plan + id).scrollIntoView();


       // document.getElementById('TerminosCondiciones').style.display = 'block';
        return true;
    }
    function OcultarDiv(plan,id){
        document.getElementById('row_img_num').style.display = 'block';
        document.getElementById('row_letas').style.display = 'block';
        document.getElementById('resultados').style.display = 'block';
        document.getElementById('resultados1').style.display = 'block';
        document.getElementById('resultados2').style.display = 'block';
        document.getElementById('aseguradora_plan_' + plan + id).style.display = 'none';
        document.getElementById('tab_' + id).scrollIntoView();
               // document.getElementById('TerminosCondiciones').style.display = 'block';
        return true;
    }
    function formvalidation() {

        var f_nombre=document.getElementsByName("nombre")[0].value;
        var f_apellido=document.getElementsByName("apellido")[0].value;
        var f_cedula=document.getElementsByName("cedula")[0].value;
        var f_fecha_nac=document.getElementsByName("fecha_nac")[0].value;
        var f_sexo=document.getElementsByName("sexo")[0].value;
        var f_estado_civil=document.getElementsByName("estado_civil")[0].value;
        var f_historial_manejo=document.getElementsByName("historial_manejo")[0].value;
        var f_email=document.getElementsByName("email")[0].value;
        var f_telefono=document.getElementsByName("telefono")[0].value;
        var f_celular=document.getElementsByName("celular")[0].value;

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
        else if( f_sexo == '')
        {
            alert("Introduzca el género");
            //x.focus();
            return false;
        }
        else if( f_fecha_nac == '')
        {
            alert("Introduzca la Fecha de Nacimiento");
            //x.focus();
            return false;
        }
        else if( f_estado_civil == '')
        {
            alert("Introduzca su estado civil");
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
        else if( f_historial_manejo == '')
        {
            alert("Introduzca el historial de manejo");
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


</script>
<!--


-->

<script>
    function getXMLHTTP() { //fuction to return the xml http object
        var xmlhttp=false;
        try{
            xmlhttp=new XMLHttpRequest();
        }
        catch(e)  {
            try{
                xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch(e){
                try{
                    xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
                }
                catch(e1){
                    xmlhttp=false;
                }
            }
        }
        return xmlhttp;
    }

    function getModelos(strURL) {
        var req = getXMLHTTP();
        if (req) {
            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {
                        document.getElementById('modelosdiv1').innerHTML=req.responseText;
                    } else {
                        alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                    }
                }
            }
            req.open("GET", strURL, true);
            req.send(null);
        }
    }

/*
    $(document).ready(function() {
        $('.a_form').postlink();
    });
*/
    </script>