
     <!--ESSA É A BARRA DE NAVEGAÇÃO-->
      <nav class="navbar navbar-expand-lg">
         <a class="navbar-brand" href="../HOMEPAGE/index.php">estudaENADE</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
           <span class="navbar-toggler-icon mx-auto"><i class="fa-solid fa-bars"></i></span>
         </button>
      
         <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
           <ul class="navbar-nav mr-auto">
             <li class="nav-item">
               <a class="nav-link mr-3" href="../QUESTOES/Questoes.php">Questões</a>
             </li>
             <li class="nav-item">
               <a class="nav-link mr-3" href="../PROVAS/Provas.php">Provas</a>
             </li>
             <li class="nav-item">
                <a class="nav-link mr-3" href="../SALVOS/Salvos.php">Salvos</a>
              </li>
             <!--<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-weight: 700; /* Montserrat Bold */ color: white;">
                  Administrador
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: 3A7CA5;">
                  <a class="dropdown-item" href="../CADASTRO/Cadastro.php">Cadastro</a>
                  <a class="dropdown-item" href="../LOGIN/Login.php">Login</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../PERFIL_ADM/adm.php">Perfil</a>
                </div>
              </li>-->
             <!--<li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle mr-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-weight: 700; /* Montserrat Bold */ color: white;">
                 Usuário
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: 3A7CA5;">
                 <a class="dropdown-item" href="../CADASTRO/Cadastro.php">Cadastro</a>
                 <a class="dropdown-item" href="../LOGIN/Login.php">Login</a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="../PERFIL_USUARIO/Perfil.php">Perfil</a>
               </div>
             </li>-->
             <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle mr-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-weight: 700; /* Montserrat Bold */ color: white;">
                 Idioma <i class="fa-solid fa-earth-americas"></i>
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: 3A7CA5;">
                 <a class="dropdown-item"><?php include 'tradutor.php'; ?></a>
               </div>
             </li>
           </ul>
           <form class="form-inline my-2 my-lg-0">
             <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar" style="height: 15%;">
             <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Pesquisar</button>
           </form>
         </div>
       </nav>
        <!--FIM BARRA DE NAVEGAÇÃO-->