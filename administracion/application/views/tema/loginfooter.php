<?php if (isset($_GET['m'])){
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

<script src='<?php echo $url?>js/login_jquery.min.js'></script>

<script src="<?php echo $url?>js/login.js"></script>




</body>
</html>