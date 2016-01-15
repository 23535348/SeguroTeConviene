</div>
<!-- fin cuepo !-->
<!-- divider -->
<?php $url=base_url();?>
<div class="row">
    <div class="col-xs-12">
        <div class="solidline">
        </div>
    </div>
</div>
<!-- end divider -->
<!-- divider -->
<div class="row hidden-xs">
    <div class="col-lg-12">
        <div id="marquePic" class=" marque-box">
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                <tr>
                    <td data-marqueebox="1">
                        <div class="marque-main">
                            <ul>
                                <li><a href="#" target="_blank"><img src="<?= $url ?>img/logos/sura.png"></a></li>
                                <li><a href="#" target="_blank"><img src="<?= $url ?>img/logos/acerta.png"></a></li>
                                <li><a href="#" target="_blank"><img src="<?= $url ?>img/logos/iseguros.png"></a></li>
                                <li><a href="#" target="_blank"><img src="<?= $url ?>img/logos/assa.png"></a></li>
                                <li><a href="#" target="_blank"><img src="<?= $url ?>img/logos/generali.png"></a></li>
                                <li><a href="#" target="_blank"><img src="<?= $url ?>img/logos/banesco.png"></a></li>
                                <li><a href="#" target="_blank"><img src="<?= $url ?>img/logos/Logo_NASE.JPG"></a></li>
                                <li><a href="#" target="_blank"><img src="<?= $url ?>img/logos/palig.png"></a></li>

                            </ul>
                        </div>
                    </td>
                    <td data-marqueebox="2">
                        <div class="marque-main">
                            <ul>
                                <li><a href="#" target="_blank"><img src="<?= $url ?>img/logos/sura.png"></a></li>
                                <li><a href="#" target="_blank"><img src="<?= $url ?>img/logos/acerta.png"></a></li>
                                <li><a href="#" target="_blank"><img src="<?= $url ?>img/logos/iseguros.png"></a></li>
                                <li><a href="#" target="_blank"><img src="<?= $url ?>img/logos/assa.png"></a></li>
                                <li><a href="#" target="_blank"><img src="<?= $url ?>img/logos/generali.png"></a></li>
                                <li><a href="#" target="_blank"><img src="<?= $url ?>img/logos/banesco.png"></a></li>
                                <li><a href="#" target="_blank"><img src="<?= $url ?>img/logos/Logo_NASE.JPG"></a></li>
                                <li><a href="#" target="_blank"><img src="<?= $url ?>img/logos/palig.png"></a></li>

                            </ul>
                        </div>

                    </td>

                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end divider -->


</div>
</section>

<footer class="hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="widget">
                    <h5 class="widgetheading">Comuniquese con Nosotros</h5>
                    <address>
                        <strong> PARA MAYOR INFORMACIÓN CONTACTENOS</strong><br>
                    </address>
                    <p>
                        <i class="icon-phone"></i>AL 227 7777 O ESCRIBANOS <br>
                        <i class="icon-envelope-alt"></i> A INFO@SEGUROTECONVIENE.COM
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget">
                    <h5 class="widgetheading">Páginas</h5>
                    <ul class="link-list">
                        <li><a href="#">INICIO</a></li>
                        <li><a href="#">QUIENES SOMOS</a></li>
                        <li><a href="#">PREGUNTAS FRECUENTES</a></li>
                        <li><a href="#">PÓLIZA</a></li>
                        <li><a href="#">COTIZADOR</a></li>
                        <li><a href="#">CONTÁCTENOS</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget">
                    <h5 class="widgetheading"></h5>
                    <ul class="link-list">
                        <li><a href="#">EL USO DE ESTE SITIO CONSTITUYE UN ACUERDO A TODOS LOS TÉRMINOS Y CONDICIONES
                                DEL MISMO, LE RECOMENDAMOS LEERLO ANTES DE UTILIZARLO.
                                SEGUROTECONVIENE.COM ES UNA MARCA REGISTRADA EN LA REPÚBLICA DE PANAMA Y FORMA PARTE DE
                                LA EMPRESA DE CORRETAJE JIMFOR, S.A.
                            </a></li>

                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright">
                        <p>
                            <span>&copy; SeguroTeConviene.com </span><a href="http://www.seguroteconviene.com"
                                                                        target="_blank">SeguroTeConviene.com</a>
                        </p>
                        <!--
                            All links in the footer should remain intact.
                            Licenseing information is available at: http://bootstraptaste.com/license/
                            You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Moderna
                        -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="social-network">
                        <li><a href="https://www.facebook.com/SeguroTeConviene?fref=ts" target="_blank"
                               data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.twitter.com/segurotconviene" target="_blank" data-placement="top"
                               title="Twitter"><i class="fa fa-twitter"></i></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<script>
   // $('#myModal').modal('show')
</script>
<script>

        
        //$('#datepicker').datetimepicker();
        $('#datepicker').datetimepicker({
            format:'DD/MM/YYYY',
            locale:'es',
            maxDate: moment()
        });

</script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#item1_select_1").on("change",function() {
            $("#item1_select_1 option:selected").each(function() {
                item1_select_1 = $('#item1_select_1').val();
                $.post("<?php echo base_url()?>cotizador/index.php/Autos/llena_modelos", {
                    item1_select_1 : item1_select_1
                }, function(data) {
                    $("#item2_select_2").html(data);
                });
            });
        })
    });
</script>
<script>
    $('#myTab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    })
</script>



<script>
/*



    $(".picker__header").removeClass("desactivar1");
    $(".picker__nav--prev").removeClass("desactivar1");
    $(".picker__nav--next").removeClass("desactivar1");
    $(".picker__select--month").removeClass("desactivar1");
    $(".picker__select--year").removeClass("desactivar1");
    $(".picker__table").removeClass("desactivar1");
    $(".picker__weekday").removeClass("desactivar1");
    $(".picker__footer").removeClass("desactivar1");
    $(".picker__button--today").removeClass("desactivar1");
    $(".picker__button--clear").removeClass("desactivar1");
    $(".picker__day").removeClass("desactivar1");
    // $(".picker__day").removeClass("desactivar1");




    $(".dp2").click(function () {
        //   $(".datepicker").removeClass("dp1"); //Borrar todas las clases "activa"
        // $(".datepicker").addClass("dp2");
       // $(".datepicker").removeClass("dp2");
        $(".picker").removeClass("desactivar1");
        $(".picker__holder").removeClass("desactivar1");
        $(".picker__frame").removeClass("desactivar1");
        $(".picker__wrap").removeClass("desactivar1");
        $(".picker__box").removeClass("desactivar1");
        $(".picker__header").removeClass("desactivar1");
        $(".picker__nav--prev").removeClass("desactivar1");
        $(".picker__nav--next").removeClass("desactivar1");
        $(".picker__select--month").removeClass("desactivar1");
        $(".picker__select--year").removeClass("desactivar1");
        $(".picker__table").removeClass("desactivar1");
        $(".picker__weekday").removeClass("desactivar1");
        $(".picker__footer").removeClass("desactivar1");
        $(".picker__button--today").removeClass("desactivar1");
        $(".picker__button--clear").removeClass("desactivar1");
        $(".picker__day").removeClass("desactivar1");
       // $(".picker__day").removeClass("desactivar1");


        //    $(".picker").hide();
        // $(".tablaTabs").removeClass("");
        // $(".tab-pane").removeClass("active");
        // $(".datepicker").addClass("dp2");//Añadir clase "activa" a la pestaña seleccionada
        //$(".picker").remove("display: none");
        // $(".tab-pane").hide(); //Ocultar todo el contenido de la pestaña
        //  $("picker").show();
        // var activadate = $(this).find("a").attr("href"); //Leer el valor de href para identificar la pestaña activa
        // $(activadate).fadeIn(); //Visibilidad con efecto fade del contenido activo
        return false;
    });
*/
</script>
<script>

    /*
  $('.dp2').pickadate({
        firstDay: 1,
        selectYears: true,
        selectMonths: true,
        selectYears: 200,
        format: 'dd/mm/yyyy'


         language: "es",
         autoclose: true,
         todayBtn: true
         hangeMonth: true,
         changeYear: true


    });*/
//$(".picker").addClass("desactivar1");
</script>
<script>



        //    $(".tab-pane").hide(); //Ocultar capas contenido_tab
        //  $("ul.tabs li:first").addClass("active").show(); //Activar primera pestaña
        // $(".contenido_tab:first").show(); //Mostrar contenido primera pestaña

// Sucesos al hacer click en una pestaña
      /*  $(".picker__day").click(function () {
         //   $(".datepicker").removeClass("dp1"); //Borrar todas las clases "activa"
           // $(".datepicker").addClass("dp2");
            $(".picker").addClass("desactivar1");
           // $(".picker").hide();
            // $(".tablaTabs").removeClass("");
            // $(".tab-pane").removeClass("active");
            // $(".datepicker").addClass("dp2");//Añadir clase "activa" a la pestaña seleccionada
            //$(".picker").remove("display: none");
            // $(".tab-pane").hide(); //Ocultar todo el contenido de la pestaña

        // $("datepicker").show();
            //var activatab = $(this).find("a").attr("href"); //Leer el valor de href para identificar la pestaña activa
            //$(activatab).fadeIn(); //Visibilidad con efecto fade del contenido activo
            return false;
        });*/

</script>


<script>
/*
    //    $(".tab-pane").hide(); //Ocultar capas contenido_tab
    //  $("ul.tabs li:first").addClass("active").show(); //Activar primera pestaña
    // $(".contenido_tab:first").show(); //Mostrar contenido primera pestaña

    // Sucesos al hacer click en una pestaña
     //  $(".dp2").click(function () {
        //   $(".datepicker").removeClass("dp1"); //Borrar todas las clases "activa"
        // $(".datepicker").addClass("dp2");
        $(".picker").removeClass("desactivar");
        $(".datepicker").addClass("activar");
        // $(".picker").hide();
        // $(".tablaTabs").removeClass("");
        // $(".tab-pane").removeClass("active");
        // $(".datepicker").addClass("dp2");//Añadir clase "activa" a la pestaña seleccionada
        //$(".picker").remove("display: none");
        // $(".tab-pane").hide(); //Ocultar todo el contenido de la pestaña

        // $("datepicker").show();
        //var activatab = $(this).find("a").attr("href"); //Leer el valor de href para identificar la pestaña activa
        //$(activatab).fadeIn(); //Visibilidad con efecto fade del contenido activo
        return false;
    });*/

</script>



<script>/*
    $('#tooltip').tooltip('hide')
    $('#tooltip1').tooltip('hide')
    $('#tooltip2').tooltip('hide')
    $('#tooltip3').tooltip('hide')
    $('#tooltip4').tooltip('hide')*/
</script>

<div id="ModalVideo" class="modal fade" aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1"
     style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" aria-hidden="true" data-dismiss="modal" type="button">×</button>
                <h4 class="modal-title">Seguro Te Conviene</h4>
            </div>
            <div class="modal-body">
                <div id="player" class="full-frame " style="width: 100%; height: 500px; overflow: hidden;">
                    <embed id="player1" width="100%" height="100%"
                           flashvars="allow_embed=1&enablejsapi=1&length_seconds=263&advideo=1&eurl=http%3A%2F%2Fwww.help.cms-tool.net%2Fwebapps%2Fi%2F64314%2F71303%2F379062&hl=es_ES&title=100%25%20Pure%20New%20Zealand&iurl=http%3A%2F%2Fi1.ytimg.com%2Fvi%2Feh-0knDpn5g%2Fhqdefault.jpg&allow_ratings=1&avg_rating=4.88370118846&idpj=-1&sw=1.0&fexp=900161%2C902408%2C924222%2C930008%2C934024%2C934030%2C941361&ldpj=-26&iurlmq=http%3A%2F%2Fi1.ytimg.com%2Fvi%2Feh-0knDpn5g%2Fmqdefault.jpg&view_count=1521883&watch_xlb=http%3A%2F%2Fs.ytimg.com%2Fyts%2Fxlbbin%2Fwatch-strings-es_ES-vflfV2KsV.xlb&iurlhq=http%3A%2F%2Fi1.ytimg.com%2Fvi%2Feh-0knDpn5g%2Fhqdefault.jpg&cr=US&video_id=eh-0knDpn5g&index=0&rel=1&el=embedded&is_html5_mobile_device=false&loaderUrl=http%3A%2F%2Fwww.help.cms-tool.net%2Fwebapps%2Fi%2F64314%2F71303%2F379062&playerapiid=player1&framer=http%3A%2F%2Fwww.help.cms-tool.net%2Fwebapps%2Fi%2F64314%2F71303%2F379062"
                           bgcolor="#000000" allowfullscreen="true" allowscriptaccess="always" wmode="opaque"
                           src="https://www.youtube.com/v/DODYmcUtVWo" type="application/x-shockwave-flash" tabindex="0"
                           name="player1">
                </div>
            </div>
        </div>


    </div>
</div>


<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?= $url ?>js/jquery.js"></script>
<script src="<?= $url ?>js/jquery.easing.1.3.js"></script>
<script src="<?= $url ?>js/bootstrap.min.js"></script>
<script src="<?= $url ?>js/jquery.fancybox.pack.js"></script>
<script src="<?= $url ?>js/jquery.fancybox-media.js"></script>
<script src="<?= $url ?>js/google-code-prettify/prettify.js"></script>
<script src="<?= $url ?>js/portfolio/jquery.quicksand.js"></script>
<script src="<?= $url ?>js/portfolio/setting.js"></script>
<script src="<?= $url ?>js/jquery.flexslider.js"></script>
<script src="<?= $url ?>js/animate.js"></script>
<script src="<?= $url ?>js/custom.js"></script>
<script src="<?= $url ?>js/jquery.picMarque.js"></script>
<script type="text/javascript">

    $(document).ready(function () {
        var picData = [
            {
                image: '<?= $url ?>img/logos/sura.png',
                title: '',
                link: '#'
            },
            {
                image: '<?= $url ?>img/logos/acerta.png',
                title: '',
                link: '#'
            },
            {
                image: '<?= $url ?>img/logos/iseguros.png',
                title: '',
                link: '#'
            },
            {
                image: '<?= $url ?>img/logos/assa.png',
                title: '',
                link: '#'
            },
            {
                image: '<?= $url ?>img/logos/generali.png',
                title: '',
                link: '#'
            },
            {
                image: '<?= $url ?>img/logos/banesco.png',
                title: '',
                link: '#'
            },
            {
                image: '<?= $url ?>img/logos/Logo_NASE.JPG',
                title: '',
                link: '#'
            },
            {
                image: '<?= $url ?>img/logos/palig.png',
                title: '',
                link: '#'
            }]

        $("#marquePic").picMarque({
            speed: 60,//scroll speed?ms?
            errorimg: 'nophoto.jpg',//error image path
            data: picData
        })
    });
</script>


<script type='text/javascript'>
    $(document).ready(function () {
        //    $(".tab-pane").hide(); //Ocultar capas contenido_tab
        //  $("ul.tabs li:first").addClass("active").show(); //Activar primera pestaña
        // $(".contenido_tab:first").show(); //Mostrar contenido primera pestaña

// Sucesos al hacer click en una pestaña
        $(".activarPanel").click(function () {
            $("ul.tabs-left li").removeClass("active"); //Borrar todas las clases "activa"
            $(".tablaTabs").removeClass("active");
            $(".tab-pane").removeClass("active");
            $(".link1").addClass("active");//Añadir clase "activa" a la pestaña seleccionada
            $(".link1").remove("display: none");
            $(".tab-pane").hide(); //Ocultar todo el contenido de la pestaña

            $("tablaTabs").show();
            var activatab = $(this).find("a").attr("href"); //Leer el valor de href para identificar la pestaña activa
            $(activatab).fadeIn(); //Visibilidad con efecto fade del contenido activo
            return false;
        });
    });
</script>
</body>
</html>
