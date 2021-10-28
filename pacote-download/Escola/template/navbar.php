<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container">
    <!-- Navbar brand -->
    <a class="navbar-brand me-2" href="<?= $base_url ?>">
      <img
        src="<?= $base_url ?>assets/img/escola-log.png"
        height="30"
        alt=""
        loading="lazy"
        style="margin-top: -1px;"
      />
    </a>

    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Cursos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">AAPA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Central do Aluno</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Biblioteca</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Palestras</a>
        </li>
      </ul>
      <!-- Left links -->

      <div class="d-flex align-items-center">
          <a href="Login">
        <button type="button" class="btn btn-link px-3 me-2">
         Sou Aluno <i class="fas fa-user-graduate"></i>
        </button>
        </a>
        <button type="button" class="btn btn-primary me-3">
          Seja Aluno <i class="fas fa-university"></i>
        </button>
        <a
          class="btn btn-success px-3"
          href="https://github.com/mdbootstrap/mdb-ui-kit"
          role="button"
          ><i class="fab fa-whatsapp"></i
        ></a>
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->