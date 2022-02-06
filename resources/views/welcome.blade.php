<!DOCTYPE HTML>
<!--
	Helios de HTML5 ARRIBA
	html5up.net | @ajlkn
	Gratis para uso personal y comercial bajo la licencia CCA 3.0 (html5up.net/license)
-->
< html >
	< cabeza >
		< title >Raul Hernandez Rick y Morty </ title >
		< juego de caracteres meta  = " utf-8 " />
		< meta  name = " viewport "  content = " ancho = ancho del dispositivo, escala inicial = 1, escalable por el usuario = no " />
		< enlace  rel = " hoja de estilo "  href = " /css/main.css " />
		< noscript >< link  rel = " hoja de estilo "  href = " /css/noscript.css " /></ noscript >
	</ cabeza >
	< body  class = " la página de inicio está precargada " >
		< div  id = " envoltura de página " >

			<!-- Encabezado -->
				< div  id = " encabezado " >

					<!-- Interior -->
						< div  clase = " interior " >
							< encabezado >
								< h1 >< a  href = " index.html "  id = " logo " >Helios</ a ></ h1 >
								< h / >
								< p >Otro excelente obsequio de HTML5 UP</ p >
							</ encabezado >
							< pie de página >
								< a  href = " #banner "  class = " botón desplazado en un círculo " >Iniciar</ a >
							</ pie de página >
						</ div >

					<!-- Navegación -->
						< id de navegación  = " navegación " >
							< ul >
								< li >< a  href = " index.html " >Inicio</ a ></ li >
								< li >
									< a  href = " # " >Desplegable</ a >
									< ul >
										< li >< a  href = " # " >Lorem ipsum dolor</ a ></ li >
										< li >< a  href = " # " >fase magna</ a ></ li >
										< li >< a  href = " # " >Etiam dolore nisl</ a ></ li >
										< li >
											< a  href = " # " > Y un submenú & hellip ; </ a >
											< ul >
												< li >< a  href = " # " >Lorem ipsum dolor</ a ></ li >
												< li >< a  href = " # " >Phasellus consequat</ a ></ li >
												< li >< a  href = " # " >fase magna</ a ></ li >
												< li >< a  href = " # " >Etiam dolore nisl</ a ></ li >
											</ ul >
										</ li >
										< li >< a  href = " # " >Veroeros feugiat</ a ></ li >
									</ ul >
								</ li >
								< li >< a  href = " barra-lateral-izquierda.html " >Barra lateral izquierda</ a ></ li >
								< li >< a  href = " right-sidebar.html " >Barra lateral derecha</ a ></ li >
								< li >< a  href = " no-sidebar.html " >Sin barra lateral</ a ></ li >
							</ ul >
						</ nav >

				</ div >

			<!-- Bandera -->
				< id de la sección  = " banner " >
					< encabezado >
						< h2 >Personajes Rick y Morty</ h2 >

					</ encabezado >
				</ sección >

			<!-- Carrusel -->
				< clase de sección  = " carrusel " >
					< div  clase = " carrete " >
                        @foreach ( $personajes  as  $personaje )
                            < artículo >
                                < a  target = " _blank "  href = " {{ ruta ( ' detalle.personaje ' , $personaje [ ' id ' ]) } } "  class = " imagen destacada " >< img  src = " {{ $personaje [ ' imagen ' ] } } "  alt = " " /></ un>
                                < encabezado >
                                    < h3 >< a  target = " _blank "  href = " {{ ruta ( ' detalle.personaje ' , $personaje [ ' id ' ]) } } " > {{ $personaje [ ' nombre ' ] } } </ a > </ h3 >
                                </ encabezado >
                                < p >Especie: {{ $personaje [ ' especie ' ] } } .</ p >
                                < p >Genero: {{ $personaje [ ' genero ' ] } } .</ p >
                                < p >Estatus: {{ $personaje [ ' estatus ' ] } } .</ p >
                            </ artículo >
                        @endforeach
					</ div >
				</ sección >

			<!-- Principal -->
				< clase div  = " estilo contenedor2 " >

					< id del artículo  = " principal " clase = " contenedor especial " > 
						< a  href = " # "  class = " imagen destacada " >< img  src = " images/pic06.jpg "  alt = " " /></ a >
						< encabezado >
							< h2 >< a  href = " # " >Sed massa imperdiet magnis</ a ></ h2 >
							< pag >
								Sociis aenean eu aenean mollis mollis facilisis primis ornare penatibus aenean. Cursus ac enim
								pulvinar curabitur morbi convallis. Lectus malesuada sed fermentum dolore amet.
							</ p >
						</ encabezado >
						< pag >
							Comodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa
							posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus
							sit arcu sociis. Nunc fermentum adipiscing tempor cursus nascetur adipiscing adipiscing. primis aliquam
							Mus lacinia lobortis phasellus suscipit. Fermentum lobortis non tristique ante proin sociis accumsan
							lobortis. Auctor etiam porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermento
							consequat entero interdum entero purus sapiens. Nibh eleifend nulla nascetur pharetra commodo mi augue
							interdum tellus. Ornare cursus augue feugiat sodales velit lorem. Semper elementum ullamcorper lacinia
							natoque aenean scelerisque.
						</ p >
						< pie de página >
							< a  href = " # "  class = " button " >Seguir leyendo</ a >
						</ pie de página >
					</ artículo >

				</ div >

			<!-- Características -->
				< clase div  = " estilo contenedor1 " >

					< sección  id = " características "  clase = " contenedor especial " >
						< encabezado >
							< h2 >Morbi ullamcorper et varius leo lacus</ h2 >
							< p >Ipsum volutpat consectetur orci metus consequat imperdiet duis integer semper magna.</ p >
						</ encabezado >
						< div  clase = " fila " >
							< clase de artículo  = " col-4 col-12-móvil especial " >
								< a  href = " # "  class = " imagen destacada " >< img  src = " images/pic07.jpg "  alt = " " /></ a >
								< encabezado >
									< h3 >< a  href = " # " >Gravida aliquam penatibus</ a ></ h3 >
								</ encabezado >
								< pag >
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. autor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</ p >
							</ artículo >
							< clase de artículo  = " col-4 col-12-móvil especial " >
								< a  href = " # "  class = " imagen destacada " >< img  src = " images/pic08.jpg "  alt = " " /></ a >
								< encabezado >
									< h3 >< a  href = " # " >Sed quis rhoncus placerat</ a ></ h3 >
								</ encabezado >
								< pag >
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. autor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</ p >
							</ artículo >
							< clase de artículo  = " col-4 col-12-móvil especial " >
								< a  href = " # "  class = " imagen destacada " >< img  src = " images/pic09.jpg "  alt = " " /></ a >
								< encabezado >
									< h3 >< a  href = " # " >Magna laoreet et aliquam</ a ></ h3 >
								</ encabezado >
								< pag >
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. autor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</ p >
							</ artículo >
						</ div >
					</ sección >

				</ div >

			<!-- Pie de página -->
				< div  id = " pie de página " >
					< div  clase = " contenedor " >
						< div  clase = " fila " >

							<!-- Tuits -->
								< sección  clase = " col-4 col-12-móvil " >
									< encabezado >
										< h2  class = " icon brand fa-twitter en un círculo " >< span  class = " label " >Tweets</ span ></ h2 >
									</ encabezado >
									< ul  clase = " dividido " >
										< li >
											< clase de artículo  = " tweet " >
												Amet nullam fringilla nibh nulla convallis tique ante sociis accumsan.
												< abarcan  clase = " marca de tiempo " > hace 5 minutos </ abarcan >
											</ artículo >
										</ li >
										< li >
											< clase de artículo  = " tweet " >
												Hendrerit rutrum quisque.
												< abarcan  clase = " marca de tiempo " > hace 30 minutos </ abarcan >
											</ artículo >
										</ li >
										< li >
											< clase de artículo  = " tweet " >
												Curabitur donec nulla massa laoreet nibh. Lorem praesent montes.
												< abarcan  clase = " marca de tiempo " > hace 3 horas </ abarcan >
											</ artículo >
										</ li >
										< li >
											< clase de artículo  = " tweet " >
												Lacus natoque cras rhoncus curae dignissim ultricies. aliqueta de Convallis orci.
												< abarcan  clase = " marca de tiempo " > hace 5 horas </ abarcan >
											</ artículo >
										</ li >
									</ ul >
								</ sección >

							<!-- Publicaciones -->
								< sección  clase = " col-4 col-12-móvil " >
									< encabezado >
										< h2  class = " icono sólido fa-file en un círculo " >< abarcan  clase = " etiqueta " >Publicaciones</ abarcan ></ h2 >
									</ encabezado >
									< ul  clase = " dividido " >
										< li >
											< clase de artículo  = " talon de publicación " >
												< encabezado >
													< h3 >< a  href = " # " >Nisl fermentum integer</ a ></ h3 >
												</ encabezado >
												< abarcan  clase = " marca de tiempo " > hace 3 horas </ abarcan >
											</ artículo >
										</ li >
										< li >
											< clase de artículo  = " talon de publicación " >
												< encabezado >
													< h3 >< a  href = " # " >Phasellus portitor lorem</ a ></ h3 >
												</ encabezado >
												< abarcan  clase = " marca de tiempo " >hace 6 horas</ abarcan >
											</ artículo >
										</ li >
										< li >
											< clase de artículo  = " talon de publicación " >
												< encabezado >
													< h3 >< a  href = " # " >Magna tempus consequat</ a ></ h3 >
												</ encabezado >
												< abarcan  clase = " marca de tiempo " >ayer</ abarcan >
											</ artículo >
										</ li >
										< li >
											< clase de artículo  = " talon de publicación " >
												< encabezado >
													< h3 >< a  href = " # " >Feugiat lorem ipsum</ a ></ h3 >
												</ encabezado >
												< abarcan  clase = " marca de tiempo " > hace 2 días </ abarcan >
											</ artículo >
										</ li >
									</ ul >
								</ sección >

							<!-- Fotos -->
								< sección  clase = " col-4 col-12-móvil " >
									< encabezado >
										< h2  class = " icon solid fa-camera circled " >< abarcan  clase = " etiqueta " >Fotos</ abarcan ></ h2 >
									</ encabezado >
									< clase div  = " fila gtr-25 " >
										< clase div  = " col-6 " >
											< a  href = " # "  class = " ajuste de imagen " >< img  src = " images/pic10.jpg "  alt = " " /></ a >
										</ div >
										< clase div  = " col-6 " >
											< a  href = " # "  class = " ajuste de imagen " >< img  src = " images/pic11.jpg "  alt = " " /></ a >
										</ div >
										< clase div  = " col-6 " >
											< a  href = " # "  class = " ajuste de imagen " >< img  src = " images/pic12.jpg "  alt = " " /></ a >
										</ div >
										< clase div  = " col-6 " >
											< a  href = " # "  class = " ajuste de imagen " >< img  src = " images/pic13.jpg "  alt = " " /></ a >
										</ div >
										< clase div  = " col-6 " >
											< a  href = " # "  class = " ajuste de imagen " >< img  src = " images/pic14.jpg "  alt = " " /></ a >
										</ div >
										< clase div  = " col-6 " >
											< a  href = " # "  class = " ajuste de imagen " >< img  src = " images/pic15.jpg "  alt = " " /></ a >
										</ div >
									</ div >
								</ sección >

						</ div >
						< h / >
						< div  clase = " fila " >
							< clase div  = " col-12 " >

								<!-- Contacto -->
									< sección  clase = " contacto " >
										< encabezado >
											< h3 >Nisl turpis nascetur interdum?</ h3 >
										</ encabezado >
										< p >Urna nisl non quis interdum mus ornare ridiculus egestas ridiculus lobortis vivamus tempor aliquet.</ p >
										< ul  clase = " iconos " >
											< li >< a  href = " # "  class = " icon brand fa-twitter " >< span  class = " label " >Twitter</ span ></ a ></ li >
											< li >< a  href = " # "  class = " icon brand fa-facebook-f " >< span  class = " label " >Facebook</ span ></ a ></ li >
											< li >< a  href = " # "  class = " icon brand fa-instagram " >< span  class = " label " >Instagram</ span ></ a ></ li >
											< li >< a  href = " # "  class = " icon brand fa-pinterest " >< span  class = " label " >Pinterest</ span ></ a ></ li >
											< li >< a  href = " # "  class = " icon brand fa-dribbble " >< span  class = " label " >Dribble</ span ></ a ></ li >
											< li >< a  href = " # "  class = " icon brand fa-linkedin-in " >< span  class = " label " >Linkedin</ span ></ a ></ li >
										</ ul >
									</ sección >

								<!-- Derechos de autor -->
									< clase div  = " derechos de autor " >
										< ul  clase = " menú " >
											< li > & copiar ; Intitulado. Todos los derechos reservados.</ li >< li >Diseño: < a  href = " http://html5up.net " >HTML5 UP</ a ></ li >
										</ ul >
									</ div >

							</ div >

						</ div >
					</ div >
				</ div >

		</ div >

		<!-- Guiones -->
			< guión  src = " /js/jquery.min.js " ></ guión >
			< guión  src = " /js/jquery.dropotron.min.js " ></ guión >
			< guión  src = " /js/jquery.scrolly.min.js " ></ guión >
			< guión  src = " /js/jquery.scrollex.min.js " ></ guión >
			< script  src = " /js/browser.min.js " ></ script >
			< script  src = " /js/breakpoints.min.js " ></ script >
			< guión  src = " /js/util.js " ></ guión >
			< guión  src = " /js/main.js " ></ guión >

	</ cuerpo >
</ html >