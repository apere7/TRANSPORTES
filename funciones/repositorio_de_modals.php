<div id="modal01" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<!-- Contenido del modal -->
				<div class="modal-header" style="background-color:#40bf80;color:white;"> <!-- Cabecera del modal -->
					<button type="button" class="close" data-dismiss="modal"><span style="color:white;" class="glyphicon glyphicon-remove"></span></button>
					<h4 class="modal-title">Terminologia</h4>
				</div>
				<div class="modal-body" style="background-color:#a3c2c2;border: 2px solid #669999;"> <!-- Contenido o cuerpo del modal-->
								
								
								<h3> Nombre de Servidores</H3> 
									<table class="table table-bordered"  style="background-color:#40bf80";>
									  <thead>
										<tr>
										  <th scope="col">Servidor</th>
										  <th scope="col">Ambiente</th>
										  <th scope="col">IP</th>
										</tr>
									  </thead>
									  <tbody>
										<tr class="success">
										  <td>AELWT01</td>
										  <td>WEB</td>
										  <td>10 1.195.49</td>
										</tr>
										<tr class="info">
										  <td>AELWT02</td>
										  <td>WEB </td>
										  <td></td>
										</tr>
										<tr class="success">
										  <td>AELPT01</td>
										  <td>Proceso</td>
										  <td></td>
										</tr>
										<tr class="info">
										  <td>AELPT02</td>
										  <td>Proceso</td>
										  <td></td>
										</tr>
									  </tbody>
									</table>
<hr>										
<!--Final de la 1ra Tabla -->								
									<h3> Consulta de Servicios java-Instalio-jboss</H3> 
									<table class="table table-bordered"  style="background-color:#40bf80";>
									  <thead>
										<tr>
										  <th scope="col">Desde</th>
										  <th scope="col">Hasta</th>
										</tr>
										</thead>
									  <tbody>
										<tr class="success">
										  <td>ps -ef | grep java</td>
										  <td>Aparecen los dos jboss y Intalio</td>
										</tr>
										<tr class="info">
										  <td>ps -ef | grep Intalio</td>
										  <td>Aparecen Intalio</td>
										</tr>
										<tr class="success">
										  <td>ps -ef | grep jboss</td>
										  <td>Aparecen jboss</td>
										</tr>
									  </tbody>
									</table>
<!--Final de la 2da Tabla -->
<hr>
									<h3> Transporte Servidor: wasacalinc01 IP 10.1.192.4 </H3> 
									<table class="table table-bordered"  style="background-color:#40bf80";>
									  <thead>
										  <tr>
										  <th scope="col">1</th>
										  <th scope="col">Pasos Para el Transporte de elementos con Extenciones( .war - .properties - .xml )</th>
										</tr>
										</thead>
									  <tbody>
										<tr class="success">
										  <td>.</td>
						  
				<td>- Conectarse con el usuario SacasAMB  clave: Caracas2011  (putty)<br>
				
					- luego le debes dar el comando <font color="#0000FF"><strong>su – jbst02 clave: Caracas2011</strong></font><br>                                                          
					- Se inactivan los servicios de jboss con el shell<font color="#0000FF"><strong> ./stopJboss.sh</strong></font><strong> Ver Anexo1 y 2</strong> <br>
					
					- Activas el agente de Harvest En el servidor ejecutando el shell<font color="#0000FF"><strong> ./actagente.sh</strong></font> <br>
					
					- Conectas el agente del servidor con harvest <font color="#0000FF"><strong>wasacalinc01 - jbst02  - wasacalinc01 -</strong></font><br>
					
					- En harvest buscas el proyecto SACAS paquete que te indicaron Extenciones( .war - .properties - .xml  ) <br>
					
					- Ejecutar en harvest el checkout Nota: deberá estar pendientes de el tipo de archivo ya que va a diferentes rutas anexo<br>
					
					- Se Activa el de jboss con el shell<font color="#0000FF"><strong> ./starJboss.sh</strong></font> <strong>Ver Anexo3</strong><br> 
				</td>
										<thead>
										  <tr>
										  <th scope="col">Tipo</th>
										  <th scope="col">Ruta/Ubicacion</th>
										</tr>
										</thead>
									<tbody>
										<tr class="success">
										  <td>.war</td>
										  <td>&nbsp;&nbsp;/tcantv/appl/jbst02/jboss-5.1.0.GA/server/ports-02/<font color="#0000FF"><strong>deploy</strong></font><br></td>
										  </tr>
										<tr class="info">
										  <td>.properties</td>
										  <td>&nbsp;&nbsp;/tcantv/appl/jbst02/jboss-5.1.0.GA/server/ports-02/<font color="#0000FF"><strong>conf</strong></font><br></td>
										</tr>
										<tr class="success">
										  <td>.xml</td>
										  <td>&nbsp;&nbsp;/tcantv/appl/jbst02/jboss-5.1.0.GA/server/ports-02/<font color="#0000FF"><strong>conf</strong></font><br></td>
										</tr>
									</tbody>
		<!-- FIN -->
									
									
									
				<!-- inicio -->
										<thead>
										  <tr>
										  <th scope="col">Anexos</th>
										  <th scope="col">A</th>
										</tr>
										</thead>
										</tr>
										<tr class="success">
										  <td><font color="#0000FF"><strong>Anexo1</strong></font></td>
										  <td><strong>Para verificar si el servicio jboss esta activo dar el comando</strong><br>
											ps -ef | grep /usr/java/jdk1.6.0_18/bin/java <br>
											Si aparece esta linea:<font color="#0000FF"><strong>-classpath /tcantv/appl/jbst02/jboss-5.1.0.GA/bin/run.jar:/usr/java/jdk1.6.0_18/lib/tools.jar org.jboss.Main</strong></font><br>
											El servicio se encuentra activo<br></td>
										</tr>
										
										<tr class="info">
										 <td><font color="#0000FF"><strong>Anexo2</strong></font></td>
										  <td><strong> Si aparece este mensaje  y no aparece lo resaltado en azul anteriormente es que esta Inactivo </strong><br>
											[jbst01@wasacalinc01 ~]$  ps -ef | grep /usr/java/jdk1.6.0_18/bin/java <br>
											jbst01   23262 22273  0 09:33 pts/1    00:00:00 grep /usr/java/jdk1.6.0_18/bin/java <br>
											[jbst01@wasacalinc01 ~]$ <br> </td> 
										</tr>
										
										<tr class="success">
										  <td><font color="#0000FF"><strong>Anexo3</strong></font></td>
										  <td><strong>Una vez activado el jboss aparece el mensaje resaltado en azul dar enter </strong><br>
											09:29:06,720 INFO  [ServerImpl] JBoss (Microcontainer) [5.1.0.GA (build: SVNTag=JBoss_5_1_0_GA date=200905221634)] <font color="#0000FF"><strong>Started in 46s:62ms</strong></font><br>
											</td>
										</tr>
									  </tbody>
									</table>
<!--Final de la EN PROCESO3 Tabla -->
<hr>
									<h3> Rutas de Servicios WEB</H3> 
									<table class="table table-bordered"  style="background-color:#40bf80";>
									  <thead>
										<tr>
										  <th scope="col">URL</th>
										  <th scope="col">Nombre</th>
										</tr>
										</thead>
									  <tbody>
										<tr class="success">
										  <td>https://aelwt01.cantv.com.ve/averias/reporte/inicio</td>
										  <td>Falta NOMBRE</td>
										</tr>
										<tr class="info">
										  <td>https://aelwt02.cantv.com.ve/averias/reporte/inicio</td>
										  <td>Falta Nombre</td>
										</tr>
										<tr class="success">
										  <td>http://aelpt01.cantv.com.ve:443/vp</td>
										  <td>Falta Nombre</td>
										</tr>
									  </tbody>
									</table>
<!--Final de la 2da Tabla -->
<hr>								
									 <h3> Tabla de usuario y password</H3> 
									<table class="table table-bordered"  style="background-color:#40bf80";>
									  <thead>
										<tr>
										  <th scope="col">Servidor</th>
										  <th scope="col">Usuario</th>
										  <th scope="col">Password</th>
										  <th scope="col">SU</th>
										  <th scope="col">Comando</th>
										</tr>
									  </thead>
									  <tbody>
										<tr class="success">
										  <td>aelwt01</td>
										  <td>apere7</td>
										  <td>Caracas_2014</td>
										  <td>su - aelwt01  Cantv2013</td>
										  <td>sudo /usr/bin/passwd cmont3</td>
										</tr>
										<tr class="info">
										  <td>aelwt02</td>
										  <td>apere7 </td>
										  <td>Caracas_2014</td>
										  <td>su - aelwt02  Cantv2013</td>
										  <td>sudo /usr/bin/passwd cmont3</td>
										</tr>
										<tr class="success">
										  <td>aelpt01</td>
										  <td>apere7</td>
										  <td>Caracas_2014</td>
										  <td>su - aelpt01  Cantv2013</td>
										  <td>sudo /usr/bin/passwd cmont3</td>
										</tr>
										<tr class="info">
										  <td>aelpt02</td>
										  <td>apere7</td>
										  <td>Caracas_2014</td>
										  <td>su - aelpt02  Cantv2013</td>
										  <td>sudo /usr/bin/passwd cmont3</td>
										</tr>
									  </tbody>
									</table>
<hr>									
								</div>
							</div>
						</div>
</div>