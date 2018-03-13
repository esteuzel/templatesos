<div class="home_pie">
    <div class="container-fluid">
        <div class="row">
            

            
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 noppading">
            <div class="bajate"><p>Bajate nuestra aplicación y seguí el recorrido del móvil</p></div>


                <div class="aplication">
                    <div class="aplication_inner">
                    <div class="toptexttop"></div>
                    <!--<div class="toptexttop">Bajate nuestra aplicación y seguí el recorrido del móvil</div>-->
                        <div class="toptextright">
                            <h2>Con nuestra <span>aplicación de smartphone</span>, ahora solicitar una asistencia es mas fácil y rápido.</h2>
                            <h3>Descargue la app a través de estas vías:</h3>
                            
                        </div>
                        <div class="boton">
                            <div class="qr">
                                <div class="texto">Escaneando esta imágen</div>
                                <div class="imagen"><img src="images/qr.png"></div>
                            </div>

                        </div>
                    </div>    
                </div>

                <div class="aplication_bottom">
                    <div class="aplication_bottom_inner">
                        <div class="boton">
                            <div class="texto">Desde un smartphone</div>
                            <div class="aplication_bottom_masinfo boton_masinfo">
                                <a target="_blank" href="https://play.google.com/store/apps/details?id=ar.com.redsos.sosmovil">CLICK AQUÍ</a>
                            </div>
                        </div>
                        <div class="boton boton-boton">
                            <div class="texto">Ingrese su celular y recibirá el link de descarga</div>
                            <div class="aplication_bottom_masinfo boton_masinfo">
                                <a href="#" data-toggle="modal" data-target="#myModal">INGRESAR</a>
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="chatonline">
                    <div class="leyenda">TRABAJÁ CON NOSOTROS</div>
                    <div class="sub-leyenda">Nos encontramos en una búsqueda constante de personas talentosas que estén dispuestas a asumir nuevos retos en un ambiente de trabajo agradable y cooperativo.</div>
                    <div class="trabaje_boton_masinfo">
                        <div class="chatonline_masinfo boton_masinfo trabaje_masinfo">
                            <a href="#">DEJAR CV</a>
                        </div>
                    </div>    
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 noppading">
                <div class="trabaje">
                    <div class="sos-sustentable">sos sustentable</div>
                </div>
                <div class="trabaje-bottom"><p>El profesionalismo de quien conduce debe actuar analizando cada estímulo proporcionado por su entorno. En este punto es donde ingresa el aporte de las capacitaciones... en entender por qué debe ser un profesional de la conducción.  Es por eso que Cesvi Argentina brinda capacitaciones al personal SOS.</p></div>
            </div>

        </div>
        <img class="home_pie_celular" src="images/sos-aplicacion-celular.png">
    </div>
</div>




<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modal-title">Ingrese su número de Celular. Sin 0 ni 15</h4>
            </div>
            <div class="modal-body" id="modal-body">
            <form class="sendmessage" name="sendmessage">
                <div class="modal-body-inner">
                    <div class="imagen">
                        <img class="img-fluid" src="images/cuadro_enviar_celular.png">
                    </div>
                    <div id="successmessage" class="successmessage">
                        <div class="celu">
                            <input class="form-control" type="text" name="celu" placeholder="Celular">
                        </div>
                        <div class="boton">
                            <button id="submit" class="btn_btn-danger" type="button" value="enviar">Enviar</button>
                        </div>
                    </div>
                </div>
            </form>
            </div>
            <div class="modal-footer">
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script type="text/javascript">
jQuery(document).ready(function(){
    jQuery("button#submit").click(function(){
        jQuery.ajax({
            type: "POST",
            url: "index.php?option=com_sendmessage&task=send",
            data: jQuery('form.sendmessage').serialize(),
            success: function(message){
                //message = "<p>Su mensaje fue recibido con éxito.</p>";
                jQuery("#successmessage").html(message);
                jQuery("#successmessage.celu").hide();                
                jQuery("#successmessage.boton").hide();
                },
            error: function(){
                alert("Error");
            }
        });
    });
});
</script>