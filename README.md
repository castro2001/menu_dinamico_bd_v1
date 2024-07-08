# menu_dinamico_bd_v1
practica de un sitio web dinamico usando base de datos 
    <li> Donde ir  <span class="fa-solid fa-caret-down"> </span>
                            <- aqui va el codigo del submenu del mapa >
                        <div class=" menu_map submenu">
                            <ul class="list_show ">
                            <li ><a href="resource/view/nunez/index.php" class=" nav_item  "  id="Id_Nunez" onmouseover="mostrar_1()" onmouseout="No_mostrar_1()">Las Nuñez</a></li>
                            <li><a href="La_Entrada/la_entrada.php" class="nav_item " id="Id_La_Entrada" onmouseover="mostrar_2()" onmouseout="No_mostrar_2()">La Entrada</a>            
                            </li>
                            <li ><a href="resource\view\curia\index.php" class="nav_item " id="Id_Curia"onmouseover="mostrar_3()" onmouseout="No_mostrar_3()" >Curía</a>            
                            </li>
                            <li ><a href="sanjose/sanjose.php" class="nav_item " id="Id_San_Jose" onmouseover="mostrar_4()" onmouseout="No_mostrar_4()">San José</a>                 
                            </li>
                            <li ><a href="olon/olon.php" class="nav_item "  id="Id_Olon" onmouseover="mostrar_5()" onmouseout="No_mostrar_5()">Olón</a>                      
                            </li>
                            <li><a href="resource/view/montanita/index.php" class="nav_item " id="Id_Montanita" onmouseover="mostrar_6()" onmouseout="No_mostrar_6()">Montañita</a>                     
                            </li>
                            <li><a href="anconcito/anconcito.php" class="nav_item " id="Id_Anconcito" onmouseover="mostrar_7()" onmouseout="No_mostrar_7()">Anconcito</a>
                            </li>
                            <li><a href="ancon/ancon.php" class="nav_item  " onmouseover="mostrar_8()" onmouseout="No_mostrar_8()" id="Id_Ancon">Ancón</a>            
                            </li>
                        
                            </ul>
                            <img src=" <?php echo $imagen;?>" alt="" srcset="">
                            <!-- <ul class="localizador_mapa" >
                                <li  title="Nuñez"id="Circle_Nuñez" class="Circle C1"    onmouseover="mostrar_1()" onmouseout="No_mostrar_1()" ></li>
                                <li  >
                                    <a href="lasnunez/lasnunez.php" class="Text Text1 " id="Text_Box_Nuñez" onmouseover="mostrar_1()" onmouseout="No_mostrar_1()"> Las Nuñez</a>
                                </li> 

                                <li title="Entrada" id="Circle_La_Entrada" class="Circle C2 "  onmouseover="mostrar_2()" onmouseout="No_mostrar_2()" ></li>
                                <li  >
                                <a href="La_Entrada/la_entrada.php" id="Text_Box_La_Entrada"  onmouseover="mostrar_2()" onmouseout="No_mostrar_2()"  class="Text Text2">La Entrada</a>
                                </li> 
                                <li title="Curía" id="Circle_Curía" class="Circle C3" onmouseover="mostrar_3()" onmouseout="No_mostrar_3()" ></li>
                                <li  >
                                <a href="curia/curia.php" class="Text Text3" id="Text_Box_Curía"  onmouseover="mostrar_3()" onmouseout="No_mostrar_3()"> Curía</a>
                                </li> 
                                <li title="San Jose" id="Circle_San_José" class="Circle C4" onmouseover="mostrar_4()" onmouseout="No_mostrar_4()" ></li>
                                <li  >
                                <a href="sanjose/sanjose.php" class="Text Text4 " id="Text_Box_San_José"  onmouseover="mostrar_4()" onmouseout="No_mostrar_4()">San Jose</a>
                                </li> 
                                <li title="Olon" id="Circle_Olón" class="Circle C5" onmouseover="mostrar_5()" onmouseout="No_mostrar_5()" ></li>
                                <li  >
                                <a href="olon/olon.php" class="Text Text5" id="Text_Box_Olón"  onmouseover="mostrar_5()" onmouseout="No_mostrar_5()"> Olon</a>
                                </li> 
                                <li title="Montañita" id="Circle_Montañita" class="Circle C6" onmouseover="mostrar_6()" onmouseout="No_mostrar_6()" ></li>
                                <li  >
                                <a href="montanita/montanita.php" class="Text Text6 " id="Text_Box_Montañita"   onmouseover="mostrar_6()" onmouseout="No_mostrar_6()"> Montañita</a>
                                </li> 
                                <li title="Aconcito" id="Circle_Anconcito" class="Circle C7" onmouseover="mostrar_7()" onmouseout="No_mostrar_7()" ></li>
                                <li  >
                                <a href="anconcito/anconcito.php" class="Text Text7 " id="Text_Box_Anconcito"  onmouseover="mostrar_7()" onmouseout="No_mostrar_7()"> Aconcito</a>
                                </li> 
                                <li  title="Ancon" id="Circle_Ancon" class="Circle C8 " onmouseover="mostrar_8()" onmouseout="No_mostrar_8()"  ></li>
                                <li   >
                                <a href="ancon/ancon.php" class="Text Text8" id="Text_Box_Ancón"  onmouseover="mostrar_8()" onmouseout="No_mostrar_8()"> Ancon</a>
                                </li> 
                            </ul> -->
                        </div>  
                    </li>

                    <li>Agenda de Fiesta <span class="fa-solid fa-caret-down"> </span>
                        <ul class=" submenu">
                            <li><span class="fa-solid fa-caret-right"></span><a href="fiestas_febrero.php " >Febrero </a></li>
                            <li><span class="fa-solid fa-caret-right"></span><a href="fiestas_marzo.php " >Marzo </a></li>
                            <li><span class="fa-solid fa-caret-right"></span><a href="fiestas_abril.php " >Abril </a></li>
                            <li><span class="fa-solid fa-caret-right"></span><a href="fiestas_mayo.php " >Mayo</a></li>
                            <li><span class="fa-solid fa-caret-right"></span><a href="fiestas_junio.php " >Junio </a></li>
                            <li><span class="fa-solid fa-caret-right"></span><a href="fiestas_agosto.php " >Agosto </a></li>
                            <li><span class="fa-solid fa-caret-right"></span><a href="fiestas_septiembre.php " >Septiembre </a></li>
                            <li><span class="fa-solid fa-caret-right"></span><a href=" fiestas_octubre.php" >Octubre </a></li>
                            <li><span class="fa-solid fa-caret-right"></span><a href="fiestas_noviembre.php " >Noviembre </a></li>
                            <li><span class="fa-solid fa-caret-right"></span><a href="fiestas_diciembre.php">Diciembre</a></li>
                        
                        </ul>
                    </li>

                    <li>Galeria Turística <span class="fa-solid fa-caret-down"> </span>
                        <ul class=" submenu submenu2">
                            <li><span class="fa-solid fa-caret-right"></span><a href="galeria_turistica_santa_elena.php"> Atractivos Turístico</a></li>
                            <li><span class="fa-solid fa-caret-right"></span><a href="tradiciones_santa_elena.php"  >Leyendas y tradiciones</a></li>
                            <li><span class="fa-solid fa-caret-right"></span><a href="galeria__gastronomia.php">Gastronomía</a></li>
                        </ul>
                    </li>

                    <li>Planifica tu viaje <span class="fa-solid fa-caret-down"> </span>                    
                        <ul class=" submenu submenu2">
                        <li><span class="fa-solid fa-caret-right"></span><a href="home_como_llegar.php">  ¿Cómo llegar?  </a></li>
                        <li><span class="fa-solid fa-caret-right"></span><a href="home_donde_alojarse.php"  >¿Dónde alojarse? </a></li>      
                        <li><span class="fa-solid fa-caret-right"></span><a href="home_itinerarios.php">Itinerario</a></li>                
                        <li><span class="fa-solid fa-caret-right"></span><a href="home_tiempo.php">Tiempo    </a></li>
                        </ul>
                    </li>                  
                        
                    <li>
                        <button type="button" class="btnLogin" data-bs-toggle="modal"  data-bs-target="#staticBackdropLogin" >
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </button>
                        <span class="usuario" style="display:none"  ></span>
                            <?php
                            // if(isset($_SESSION['user'])){
                            // $usuarioIngresado= $_SESSION['user'];
                            // echo ' 
                            // <script >
                            // let btn = document.querySelector(".btnLogin")
                            // btn.style.display= "none";
                            // </script>
                            // ';
                            // echo  "<span class='usuario'  style='display:initial'>" .$usuarioIngresado."</span>" ;
                            // echo  '<a href="cerrar.php"   class="cerrar"> <i class="fa-solid fa-right-from-bracket"></i> <span>salir</span> </a>' ;
                            ?>
                            
                    </li> 