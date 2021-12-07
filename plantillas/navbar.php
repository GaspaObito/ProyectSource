
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ExprOut</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link toggle" aria-current="page" href="pagina_principal.php" >Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link toggle" href="pagina_contactanos.php">Contactanos</a>
        </li> 
        <!-- campos -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            Campos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="pagina_tecnologia.php">Tecnología</a></li>
            <li><a class="dropdown-item" href="pagina_deportes.php">Deportes</a></li>
            <li><a class="dropdown-item" href="pagina_productos_naturales.php">Productos Naturales</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="pagina_psicologia.php">Psicología</a></li>
          </ul>
        </li>
        <!-- categorias -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
          Categorías
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="pagina_categorias.php">Asesoria & consultoría</a></li>
          </ul>
        </li>
        <!-- Nosotros -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
          Nosotros
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="pagina_quienes_somos.php">¿ Quieres Saber de nosotros ?</a></li>
          </ul>
        </li>
        <!-- perfiles -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
           perfiles
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="perfil_usuario/form_sesion_usuario.php">usuario</a></li>
            <li><a class="dropdown-item" href="perfil_admin/form_sesion_admin.php">administardor</a></li>
            <li><a class="dropdown-item" href="perfil_profesional/form_sesion_profesional.php">profesional</a></li>
          </ul>
        </li>
      </ul>
      <!-- input -->
      

      <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Consultar..." aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Buscar</button>
      </form> -->

      <form action="buscador.php">
      <button class="btn btn-outline-light" type="submit">Buscador inteligente</button>
      </form>

    </div>
  </div>
</nav>