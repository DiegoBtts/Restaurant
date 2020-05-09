<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="/" class="brand-link">

        <img src="{{ asset('img/plantilla/menu-image.png') }}" alt="" class="brand-image img-circle elevation-3"
            style="opacity: .8">

        <span class="brand-text font-weight-light">SynLab</span>

    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('img/usuarios/default/anonymous.png') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="crearventa" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home
                            <span class="right badge badge-danger">Building</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('user') }}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Usuarios
                            <span class="right badge badge-danger">Building</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('client') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Pacientes
                            <span class="right badge badge-danger">Building</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('appointment') }}" class="nav-link">
                        <i class="nav-icon fas fa-calendar"></i>
                        <p>
                            Citas
                            <span class="right badge badge-danger">Building</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-vial"></i>
                        <p>
                            Pruebas
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('testtype') }}" class="nav-link">
                                <i class="nav-icon fas fa-vials"></i>
                                <p>Pruebas Clinicas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('samplestype') }}" class="nav-link">
                                <i class="nav-icon fas fa-syringe"></i>
                                <p>Muestras clinicas</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-boxes"></i>
                        <p>
                            Inventarios
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('product') }}" class="nav-link">
                                <i class="nav-icon fas fa-box-open"></i>
                                <p>Productos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('category') }}" class="nav-link">
                                <i class="nav-icon fas fa-pills"></i>
                                <p>Categorias</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-notes-medical"></i>
                        <p>
                            Examenes
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="crearventa" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Examenes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('groups')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Grupos</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>

        </nav>

    </div>

</aside>