<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Construcciones Ramon</title>
        <!-- Fonts -->
        <link rel="icon" href="{{ url('images/logo.png') }}">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.min.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet"> 
    </head>
    <header>
        <div class="flex-container informacion">
            <div class="menu">
                <a href="#quienSoy">¿Quien Soy?</a>
            </div>
            <div class="menu">
                <a href="#oficios">Oficios que realizo</a>
            </div>
            <div class="menu">
                <a href="#contacto">¡Contáctame!</a>
            </div>
            <div class="menu">
                <a href="#CV">¡Descarga mi CV!</a>
            </div>
        </div>
        <div class="logo">
            <img src="/images/logo.png" alt="">
        </div>
        <div class="encabezado">
            <div class="títulos">
                <h1>Construcciones Ramon</h1>
                <h4>Experto en albañilería y todo lo que necesite en su hogar</h4>
            </div>
            <div class="carousel">
                <div class="carousel__contenedor">
                    <button aria-label="Anterior" class="carousel__anterior">
                        <i class="fas fa-chevron-left"></i>
                    </button>
    
                    <div class="carousel__lista">
                        <div class="carousel__elemento">
                            <img src="/images/carrousel1.jpeg" alt="Rock and Roll Hall of Fame">
                        </div>
                        <div class="carousel__elemento">
                            <img src="/images/carrousel2.jpeg" alt="Constitution Square - Tower I">
                        </div>
                        <div class="carousel__elemento">
                            <img src="/images/carrousel3.jpeg" alt="Empire State Building">
                        </div>
                        <div class="carousel__elemento">
                            <img src="/images/carrousel4.jpeg" alt="Harmony Tower">
                        </div>
                        <div class="carousel__elemento">
                            <img src="/images/carrousel5.jpeg" alt="Empire State Building">
                        </div>
                        <div class="carousel__elemento">
                            <img src="/images/carrousel6.jpeg" alt="Harmony Tower">
                        </div>
                        <div class="carousel__elemento">
                            <img src="/images/carrousel7.jpeg" alt="Empire State Building">
                        </div>
                        <div class="carousel__elemento">
                            <img src="/images/carrousel8.jpeg" alt="Harmony Tower">
                        </div>
                    </div>
                    <button aria-label="Siguiente" class="carousel__siguiente">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                    <div role="tablist" class="carousel__indicadores"></div>
                </div>
            </div>
        </div>
        <div class="contactoBoton">
            <p><a href="#contacto">¡Contáctame!</a></p>
        </div>
    </header>
    <body>
        <div class="presentacion">
            <h2 class="tituloh2" id="quienSoy">¿Quien soy?</h2>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint vel unde facere inventore ut quis vero sequi rerum quibusdam! Eius aut aliquam doloremque non fuga libero neque ab quae numquam!</p>
            </div>
            <div class="contenedorImagen">
                <img src="/images/2.jpeg">
            </div>
        </div>
        <div class="oficios" id="oficios">
            <div class="contenedorImagen">
                <img src="/images/indexImage2.jpeg">
                <img src="/images/6.jpeg">
                <img src="/images/7.jpeg">
                <img src="/images/8.jpeg">
                <img src="/images/9.jpeg">
                <img src="/images/10.jpeg">
            </div>
            <div class = "textoOficios">
                <h2 class="tituloh2">Oficios que realizo</h2>
                    <ul class="oficiosRealizados">
                        <li>Albañería en General</li>
                        <li>Plomería</li>
                        <li>Electricidad</li>
                        <li>Colocación de Cerámica</li>
                        <li>Durlock</li>
                        <li>Pintura</li>
                        <li>Techos</li>
                        <li>Losa</li>
                        <li>Etc</li>
                    </ul>
            </div>
        </div>
        <div class="CV" id="CV">
            <p>Descarga mi CV</p>
            <a download="Ramon DG" class="face-button" href="/pdf/series_sumables.pdf">

                <div class="face-primary">
                  <span class="icon fa fa-cloud"></span>
                  Descarga
                </div>
                
                <div class="face-secondary">
                  <span class="icon fa fa-hdd-o"></span>
                  Tamaño: 52 kt
                </div>
              
              </a>
        </div>
        <div class="contacto">
            <h2 class="tituloh2">Contacto</h2>
            <div class="formulario">
                <form class="" action="/" method="post">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label for="validationDefault01">Nombre de usted o de su empresa</label>
                        <input type="text" name="nombreDelContacto" class="form-control" id="validationDefault01" required>
                    </div>
                    @error ('nombreDelContacto')
						{{$message}}<br>
					@enderror
                    <div class="mb-3">
                        <label for="validationDefault01">Correo Electrónico para contactarse</label>
                        <input type="text" name="CorreoDelContacto" class="form-control" id="validationDefault01" required>
                    </div>
                    @error ('correoDelContacto')
						{{$message}}<br>
					@enderror
                    <div class="mb-3">
                        <label for="validationDefault01">Motivo de contacto</label>
                        <input type="text" name="motivoDeContacto" class="form-control" id="validationDefault01" required>
                    </div>
                    @error ('motivoDeContacto')
						{{$message}}<br>
					@enderror
                    <div class="mb-3">
					    <label for="validationDefault01">Mensaje</label>
                        <textarea class="textarea form-control" name="descripcion" id="form-field-message" rows="4"></textarea>				
                    </div>
                    @error ('form_fields')
						{{$message}}<br>
					@enderror
                    <button class="btn btn-primary" id="contacto">Enviar</button>
                  </form>
            </div>
        </div>
        <footer>
            <div>
                <p>Página desarrollada por:<a href="https://www.linkedin.com/in/kevinquinones">Kevin Quiñones</a></p>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.min.js"></script>
        <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
