
<!--ventana flotante Horarios-->
<div id="ventanaFlotanteHorario" class="ventana" >
            <div id="modalHorario" class="modal-content">
                <span onClick = "closeModal()" class="close">&times;</span>
                <h4 style="text-align: center;">Horarios:</h4>

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead style="text-align: center;">
                                        <tr> <!--estilos de las de columnas -->
                                            <th style="border: 7px solid #FFFFFF; background-color: #FFD8B8;">DÍA</th>
                                            <th style="border: 7px solid #FFFFFF; background-color: #FFD8B8;">HORARIO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr> <!--estilos de fila de columna 1-->
                                            <td style="border: 7px solid #FFFFFF; background-color: #FFD8B8;">Lunes</td>
                                            <!--estilos de fila de columna 2-->
                                            <td style="border: 7px solid #FFFFFF; background-color: #FEEDDF;">11:30 a.m - 10:30 p.m</td>
                                        </tr>
                                        <tr> <!--estilos de fila de columna 1-->
                                            <td style="border: 7px solid #FFFFFF; background-color: #FFD8B8;">Martes</td>
                                            <!--estilos de fila de columna 2-->
                                            <td style="border: 7px solid #FFFFFF; background-color: #FEEDDF;">11:30 a.m - 10:30 p.m</td>
                                        </tr>
                                        <tr> <!--estilos de fila de columna 1-->
                                            <td style="border: 7px solid #FFFFFF; background-color: #FFD8B8;">Miércoles</td>
                                            <!--estilos de fila de columna 2-->
                                            <td style="border: 7px solid #FFFFFF; background-color: #FEEDDF;">11:30 a.m - 10:30 p.m</td>
                                        </tr>
                                        <tr> <!--estilos de fila de columna 1-->
                                            <td style="border: 7px solid #FFFFFF; background-color: #FFD8B8;">Jueves</td>
                                            <!--estilos de fila de columna 2-->
                                            <td style="border: 7px solid #FFFFFF; background-color: #FEEDDF;">11:30 a.m - 10:30 p.m</td>
                                        </tr>
                                        <tr> <!--estilos de fila de columna 1-->
                                            <td style="border: 7px solid #FFFFFF; background-color: #FFD8B8;">Viernes</td>
                                            <!--estilos de fila de columna 2-->
                                            <td style="border: 7px solid #FFFFFF; background-color: #FEEDDF;">11:30 a.m - 10:30 p.m</td>
                                        </tr>
                                        <tr> <!--estilos de fila de columna 1-->
                                            <td style="border: 7px solid #FFFFFF; background-color: #FFD8B8;">Sábado</td>
                                            <!--estilos de fila de columna 2-->
                                            <td style="border: 7px solid #FFFFFF; background-color: #FEEDDF;">11:30 a.m - 10:30 p.m</td>
                                        </tr>
                                        <tr> <!--estilos de fila de columna 1-->
                                            <td style="border: 7px solid #FFFFFF; background-color: #FFD8B8;">Domingo</td>
                                            <!--estilos de fila de columna 2-->
                                            <td style="border: 7px solid #FFFFFF; background-color: #FEEDDF;">11:30 a.m - 10:30 p.m</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--ventana flotante Horarios-->

        <script>
            const modalHorario = document.getElementById("ventanaFlotanteHorario");
            
            function closeModal(){     
                modalHorario.style.display = "none";
            }
            window.onclick = function(event){
                if(event.target == modalHorario){
                    closeModal()
                }
            }

        </script>
