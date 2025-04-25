    <style>
        .nav-link-hover:hover{
          color: #0dcaf0;
          }
        .nav-link-hover::after{
          content: ""; /* Contenido generado por CSS */
          display: block; /* Lo convierte en un elemento bloque */
          width: 100%; /* Anchura igual al 100% del ancho del enlace */
          height: 2px; /* Altura del subrayado */
          background-color: #0dcaf0;
          opacity: 0;
          transition: opacity 0.3 ease;
        }
        .nav-link-hover:hover::after{
          opacity: 1;
        }
        .dropdown-item-hover:hover{
          color: #0dcaf0;
        }
    </style>
    <nav class="navbar navbar-expand-lg" style="background-color: #f4f3e5;">
        <div class="container mt-4 mb-3">
            <a href="#" class="navbar-brand">
                <img width="250" ; height="39" ; src="img/winnow-logo.svg" alt="logo chafa">
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto" style="font-size: 13px;">
                    <li class="nav-item"><a id="a1" href="" class="nav-link nav-link-hover">Nosotros</a></li>
                    <li class="nav-item"><a id="a1" href="" class="nav-link nav-link-hover">Soluciones</a></li>
                    <li class="nav-item"><a id="a1" href="" class="nav-link nav-link-hover">Impacto</a></li>
                    <li class="nav-item"><a id="a1" href="" class="nav-link nav-link-hover">Unite al equipo</a></li>
                    <li class="nav-item"><a id="a1" href="" class="nav-link nav-link-hover">Blog</a></li>
                    <li class="nav-item"><a id="a1" href="" class="nav-link nav-link-hover">Contacto</a></li>
                    <li class="nav-item dropdown">
                        <a id="a1" class="nav-link dropdown-toggle nav-link-hover" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Español
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item nav-link-hover" id="a1" href="#">Español</a></li>
                            <li><a class="dropdown-item nav-link-hover" id="a1" href="#">English</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href=""><img width="76"; height="36.7"; src="img/Winnow-portal-1.svg" alt="portal"></a></li>
                </ul>
            </div>
           
        </div>
    </nav>