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


?>

<html lang="es-ES" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="shortcut icon" href="http://www.sportline.com.pa/wp-content/uploads/2015/01/favicon1.png" />
    <title>Sportline America Panamá | Tienda En Linea</title>

    <link rel="stylesheet" href="<?php echo $url?>css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel="stylesheet" href="<?php echo $url?>css/style.css">
</head>
<body>