<?php

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

    }else{

        $url_h="../../reclutamiento/";

        $url=base_url();
    }


}else{
    $url_h="../../reclutamiento/";

    $url=base_url();

}
if (isset($_GET['Xs'])){

 $token=$_GET['Xs'];


}




if (isset($captado)) {
    if ($captado != 'Error') {

        $this->load->view('tema/header.php');
        ?>
         <style type="text/css">
        .bs-example{
            margin: 20px;
        }


        .letras{
            font-weight:bold;
            font-family: Helvetica, Arial;
            font-size:100%;
            outline:0;
            color:#202020;
            /*text-shadow:rgba(0,0,0, 0.7) 0px 4px 3px;*/

            background-size:contain;
            border-radius: 5px;
            box-shadow: 0px 0px 3px rgba(255, 255, 255, 1.0);


        }

    </style>
<?
    }
}else{
   ?>


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="shortcut icon" href="http://www.sportline.com.pa/wp-content/uploads/2015/01/favicon1.png" />
    <title>Sportline America Panamá | Tienda En Linea</title>

    <link rel="stylesheet" href="<?php echo $url?>css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel="stylesheet" href="<?php echo $url?>css/style.css">
</head>





<?
}

?>
            <?
            if (isset($captado)) {
            if ($captado != 'Error') {

            ?>

                <?

                }
                }else {
                ?>
    <Div class="Contenedor-Login">
        <div class="module form-module ">


        <div class="form" >
                <a href="http://www.sportline.com.pa">
                    <img alt="Tienda En Linea" src="http://www.sportline.com.pa/wp-content/uploads/2015/01/logo13.png" width="60%">
                </a>

                <?
                }

                ?>
                 <br>
                <br>

                <Div  class="letras" align="center">

                    <p>  Cambio de Contraseña </p>
                    </Div>
                <form name="new_user" action="<?php echo $url?>login/login/cambio_password" method="post" onSubmit="return validar_clave()">
                       <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12" align="center">

                    <input type="password" id="passwdA" name="form[formula][password]" placeholder="Contraseña Actual"/>
                      </Div>
                    </Div>
                    <div class="row">
                                <div class="col-sm-12" align="center">
            <input type="password" id="passwd1" name="form[formula][password1]" placeholder="Nueva Contraseña"/>

                    </Div>
                    </Div>
                    <div class="row">
                                <div class="col-sm-12" align="center">
            <input type="password" id="passwd2" name="form[formula][password2]" placeholder="Repita Contraseña"/>

            </Div>
                    </Div>
                    <div class="row">
                                <div class="col-sm-12" align="center">
                                <button>Registrar</button>
                                </Div>
                    </Div>


                  <div class="row">
                      <div class="col-sm-12" align="center">
              <a href="<?php echo base_url()?>captacion/ingresado">
                <img alt="Tienda En Linea" src="<?php echo base_url()?>css/images/regresar.jpg" height="30" width="30" title="Regresar">
            </a>

           </Div>
            </Div>
            </Div>
                </form>


<?
    if (isset($captado)) {
    if ($captado != 'Error') {

?>


   <?

    }
    }else {
?>
              </div>

            <div class="form" >

                <a href="http://www.sportline.com.pa">
                    <img alt="Tienda En Linea" src="http://www.sportline.com.pa/wp-content/uploads/2015/01/logo13.png" width="60%">
                </a>
                 <h2>Cambio de Contraseña</h2>
                <form name="new_user" action="<?php echo $url?>login/login/actualizar_password" method="post" onSubmit="return validar_clave()">
                    <input type="hidden" name="form[formula][token]" value="<?php echo $token;?>">
                    <input type="password" id="passwd1" name="form[formula][password]" placeholder="Nueva Contraseña"/>
                    <input type="password" id="passwd2" name="form[formula][password2]" placeholder="Repita Contraseña"/>



                    <button>Registrar</button>
                </form>
            </div>

<div class="cta"></div>
        </div>

        </div>

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





        <?

    }

?>

    <SCRIPT LANGUAGE="JavaScript">
        function validar_clave() {
            var caract_invalido = " ";
            var caract_longitud = 6;
            var cla1 =document.getElementById("passwd1").value;
            var cla2 = document.getElementById("passwd2").value;


            if (cla1 == '' || cla2 == '' || ) {
                alert('Debe Completar Los Items.');
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
            var caract_invalido = " ";
            var caract_longitud = 6;

            var email =document.getElementById("email").value;

            if (email == '') {
                alert('Debe Completar El Items.');
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

if (isset($captado)) {
    if ($captado != 'Error') {

        $this->load->view('tema/footer.php');
    }
}else{
   ?>

<script src='<?php echo $url?>js/login_jquery.min.js'></script>

<script src="<?php echo $url?>js/login.js"></script>

<?
}

 ?>