<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu">
      <li @click="menu = 0"><a><i class="fa fa-home"></i> Inicio <span class="fa fa-chevron-down"></span></a>
      </li>
      <li><a><i class="fa fa-edit"></i> Formularios <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li @click="menu = 1"><a>Nuevo Cliente</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-cogs"></i> Administrar <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a>Usuarios<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li @click="menu = 2" class="sub_menu"><a>Crear/Editar Usuarios</a>
              </li>
              <li @click="menu = 3" class="sub_menu"><a>Lista de Usuarios</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</div>