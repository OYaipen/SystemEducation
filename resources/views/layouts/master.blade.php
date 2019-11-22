<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>College | Aplicación</title>
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/app.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">
        <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                </li>
            </ul>
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" @keyup="searchit" v-model="search" type="search"
                    placeholder="Buscar" aria-label="Search" style="font-size: 16px;">
                <div class="input-group-append">
                    <button class="btn btn-navbar" @click="searchit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="index3.html" class="brand-link">
                <img src="./img/pencil.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">SystemEducation</span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="./img/profile/{{Auth::user()->photo}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block text-capitalize">
                            {{Auth::user()->name}}
                            <p>{{Auth::user()->type}}</p>
                        </a>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <router-link to="/dashboard" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt blue"></i>
                                <p>
                                    Tablero
                                </p>
                            </router-link>
                        </li>
                        @if(Gate::check('isAdmin') || Gate::check('isDeveloper'))
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-cog green"></i>
                                <p>
                                    administración
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <router-link to="/users" class="nav-link">
                                        <i class="fas fa-users nav-icon"></i>
                                        <p>Usuarios</p>
                                    </router-link>
                                </li>
                            </ul>
                        </li>
                        @endcan
                        @can('isDeveloper')
                        <li class="nav-item">
                            <router-link to="/developer" class="nav-link">
                                <i class="nav-icon fas fa-cogs"></i>
                                <p>
                                    Desarrollador
                                </p>
                            </router-link>
                        </li>
                        @endcan
                        <li class="nav-item">
                            <router-link to="/profile" class="nav-link">
                                <i class="nav-icon fas fa-user orange"></i>
                                <p>
                                    Perfiles
                                </p>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                                <i class="nav-icon fa fa-power-off red"></i>
                                <p>
                                    {{ __('Salir') }}
                                </p>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                    <router-view></router-view>
                    <vue-progress-bar></vue-progress-bar>
                </div>
            </div>
        </div>
        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                2019
            </div>
            <strong>Owen Yaipen Saba</strong>
        </footer>
    </div>
    @auth
    <script>
        window.user = @json(auth() -> user())
    </script>
    @endauth
    <script src="/js/app.js"></script>
</body>

</html>