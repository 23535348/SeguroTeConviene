<?php


$this->load->view('tema/loginheader.php');

if (isset($_GET['m'])){
    $mensaje=$_GET['m'];

    if($mensaje==1){
        $url="http://www.sportline.com.pa/reclutamiento/";
        $url_h="http://www.sportline.com.pa/reclutamiento/";
        $valoremsje="REGISTRO EXITOSO.... Verifique su email";
    }elseif($mensaje==2){

        $url="http://www.sportline.com.pa/reclutamiento/";
        $url_h="http://www.sportline.com.pa/reclutamiento/";
        $valoremsje="Verifique sus datos el email ya existe";


    }elseif($mensaje==3){
        $url="http://www.sportline.com.pa/reclutamiento/";
        $url_h="http://www.sportline.com.pa/reclutamiento/";
        $valoremsje="Error verifique sus datos";

    }
elseif($mensaje==4){
    $url="http://www.sportline.com.pa/reclutamiento/";
    $url_h="http://www.sportline.com.pa/reclutamiento/";
    $valoremsje="Cambio Exitoso";

}
    elseif($mensaje==5){
        $url="http://www.sportline.com.pa/reclutamiento/";
        $url_h="http://www.sportline.com.pa/reclutamiento/";
        $valoremsje="Error verifique sus datos la Cedula ya Existe";

    }else{

        $url_h="../../reclutamiento/";

        $url=base_url();
    }


}else{
    $url_h="../../reclutamiento/";

    $url=base_url();

}




?>

    <Div class="Contenedor-Login">
        <div class="module form-module ">
            <div class="toggle">&#8730;
                <div class="tooltip">Registrate</div>
            </div>

            <div class="form" >
                <a href="http://www.sportline.com.pa">
                    <img alt="Tienda En Linea" src="http://www.sportline.com.pa/wp-content/uploads/2015/01/logo13.png" width="60%">
                </a>
                <h2>Accede a tu cuenta</h2>
                <form action="<?php echo $url?>login/login/acceso" method="post" onSubmit="return validar_correo()">
                    <input type="text" id="email" name="form[formula][email]" placeholder="Email"/>
                    <input type="password" name="form[formula][password]" placeholder="Contraseña"/>
                    <button>Login</button>
                </form>
            </div>
            <div class="form " >
                <a href="http://www.sportline.com.pa">
                    <img alt="Tienda En Linea" src="http://www.sportline.com.pa/wp-content/uploads/2015/01/logo13.png" width="60%">
                </a>
                <h2>Crea una cuenta</h2>
                <form name="new_user" action="<?php echo $url?>usuario/usuario/registro" method="post" onSubmit="return validar_clave()">
                    <input type="text" id="nombre" name="form[txt][nombre]" placeholder="Nombre"/>
                    <input type="text" id="apellido" name="form[txt][apellido]" placeholder="Apellido"/>
                    <input  type="text" id="cedula" name="form[int][CEDULA]" placeholder="Cedula de Identidad">
                    <input type="email" id="email" name="form[formula][email]" placeholder="Email"/>
                    <input type="password" id="passwd1" name="form[formula][password]" placeholder="Contraseña"/>
                    <input type="password" id="passwd2" name="form[formula][password2]" placeholder="Repita Contraseña"/>
                    <button>Registrar</button>
                </form>
            </div>
            <div class="cta"><a href="<?php echo $url?>login/login/cambio_password" target="_blank">Olvidaste tu contraseña?</a></div>
        </div>

    </div>

    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>

    <SCRIPT LANGUAGE="JavaScript">
        function validar_clave() {
            var caract_invalido = " ";
            var caract_longitud = 6;

            var cla1 =document.getElementById("passwd1").value;
            var cla2 = document.getElementById("passwd2").value;
            var nom =document.getElementById("nombre").value;
            var cedula = document.getElementById("cedula").value;
            var ape = document.getElementById("apellido").value;
            var email =document.getElementById("email").value;

            if (nom === '') {
                alert('Debe Completar Los Items');
                return false;

            }
            if (ape === '') {
                alert('Debe Completar Los Items');
                return false;

            }
            if (cedula === '') {
                alert('Debe Completar Los Items');
                return false;

            }



            if (cla1 == '' || cla2 == '') {
                alert('Debes introducir tu clave en los dos campos.');
                return false;
            }

            if (document.getElementById("passwd1").value.indexOf(caract_invalido) > -1) {
                alert("Las claves no pueden contener espacios");
                return false;
            }
            else {
                if (cla1 != cla2) {
                    alert ("Las claves introducidas no son iguales");
                    return false;
                }

            }
        }
        function validar_correo() {

            var email =document.getElementById("email").value;
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(email)){

            } else {
                alert("La dirección de email es incorrecta.");
                return false;

            }
        }



    </script>
<?php

if (isset($_GET['m'])){


    echo   "<script>
					alert('$valoremsje');

				</script>";

}



$this->load->view('tema/loginfooter.php'); ?>