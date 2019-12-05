 
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?=base_url('asseut/AdminLTE-3.0.0/')?>dist/img/LOGO_JCE.svg.png" alt="JCE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Junta Central Electoral JCE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url('asseut/AdminLTE-3.0.0/')?>dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Roberto Herrera</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
               <li class="nav-item">
            <a href="<?=base_url()?>" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Inicio
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-landmark"></i>
              <p>
                Entidades Politicas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                
          <li class="px-2 nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-dot-circle"></i>
              <p>
              Candidato
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav  px-1 nav-treeview">
              <li class=" nav-item">
                <a href="<?=base_url('index.php/Candidato/form')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('index.php/Candidato/')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver lista</p>
                </a>
              </li>
            </ul>
          </li>
    
              </li>
              <li class="nav-item">
              <li class="px-2 nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-dot-circle"></i>
              <p>
              Partido
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav px-1 nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('index.php/partido/form')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('index.php/partido/')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver lista</p>
                </a>
              </li>
            </ul>
          </li>
    
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-graduation-cap"></i>
              <p>
              Colegio Electoral
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('index.php/Colegio/form')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('index.php/Colegio/')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver lista</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-person-booth"></i>
              <p>
                Elecciones Presidenciales 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

            <li class="nav-item">
                <a href="<?=base_url()?>" class="nav-link">
                  <i class="fas fa-search nav-icon"></i>
                  <p>Resultados</p>
                </a>
              </li>
    
              
    <li class="nav-item">
                <a href="<?=base_url('index.php/eleccione')?>" class="nav-link">
                  <i class="fas fa-search nav-icon"></i>
                  <p>Listado</p>
                </a>
              </li>
      
            </ul>
          </li>
          
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-person-booth"></i>
              <p>
                Elecciones Congresuales 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('index.php/eleccione/eleccionesSena')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Senadores</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('index.php/eleccione/eleccionesDipu')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Diputados</p>
                </a>
              </li>
            </ul>
          </li>
          
          
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-person-booth"></i>
              <p>
                Elecciones Municipales
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

            <a href="<?=base_url('')?>" class="nav-link">
                  <i class="fas fa-search nav-icon"></i>
                  <p>Resultados</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('index.php/eleccione/eleccionesAlcalde')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Alcalde</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('index.php/eleccione/eleccionesVAlcalde')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ViceAlcalde</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-person-booth"></i>
              <p>
              Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            
            <li class="nav-item">
                <a href="<?=base_url('index.php/Usuarios/add')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('index.php/Usuarios')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-history"></i>
              <p>
              Historias de Elecciones
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>