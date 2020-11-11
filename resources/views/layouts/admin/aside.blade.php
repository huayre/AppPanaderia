
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="">
        <img src="{{asset('images/empresa/logo.jpeg')}}" alt="Logo Toxvic" class=" mx-auto d-block  mt-2 img-circle" width="150px">

    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link bg-warning">
                        <i class="nav-icon far fa-images"></i>
                        <p>
                            Almacen Materia Prima
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('article.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon text-primary"></i>
                                <p>Productos </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('category.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon text-primary"></i>
                                <p>Categorías</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link bg-warning">
                        <i class="nav-icon fas fa-laptop-code"></i>
                        <p>
                            Entrada Materia Prima
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('ingreso.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon text-primary"></i>
                                <p>Registrar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('ingreso.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon text-primary"></i>
                                <p>Lista Entradas</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link bg-warning">
                        <i class="nav-icon fas fa-laptop-code"></i>
                        <p>
                            Salida Materia Prima
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('salida.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon text-primary"></i>
                                <p>Registrar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('salida.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon text-primary"></i>
                                <p>Lista de Salidas</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link bg-warning">
                        <i class="nav-icon far fa-images"></i>
                        <p>
                            Almacen Productos
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('producto.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon text-primary"></i>
                                <p>Productos </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link bg-warning">
                        <i class="nav-icon far fa-images"></i>
                        <p>
                            Gestón Clientes
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('cliente.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon text-primary"></i>
                                <p>Clientes </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link bg-warning">
                        <i class="nav-icon far fa-images"></i>
                        <p>
                            Gestón Ventas
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('venta.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon text-primary"></i>
                                <p>Nueva Venta </p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('venta.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon text-primary"></i>
                                <p>Lista De Ventas </p>
                            </a>
                        </li>
                    </ul>
                </li>



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
