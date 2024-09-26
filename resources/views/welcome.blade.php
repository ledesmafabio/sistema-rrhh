@extends('adminlte::master')

@inject('layoutHelper', 'JeroenNoten\LaravelAdminLte\Helpers\LayoutHelper')
@inject('preloaderHelper', 'JeroenNoten\LaravelAdminLte\Helpers\PreloaderHelper')

@section('adminlte_css')
    @stack('css')
    @yield('css')
@stop

@section('classes_body', $layoutHelper->makeBodyClasses())

@section('body_data', $layoutHelper->makeBodyData())

@section('body')
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-3">
            <a class="navbar-brand" href="/home">Sistema de RRHH</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <div class="mr-auto mt-2 mt-lg-0">
                    <!-- Vacio para acomodar elementos en la derecha-->
                </div>
                <ul class="navbar-nav">
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>


        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center mb-4">Bienvenido al Sistema de Gestión de Recursos Humanos</h1>
                    <p class="lead text-center">Aquí podrás gestionar toda la información relacionada con el personal de
                        la
                        empresa.</p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Gestión de Empleados</h5>
                            <p class="card-text">Administra la información de los empleados, incluyendo datos personales
                                y
                                laborales.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Nómina</h5>
                            <p class="card-text">Gestiona los salarios, bonificaciones y deducciones de los empleados.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Gestión de Asistencias</h5>
                            <p class="card-text">Administra las asistencias de los empleados.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="alert alert-info" role="alert">
                        <h4 class="alert-heading">¡Importante!</h4>
                        <p>Recuerda mantener actualizada la información de los empleados para garantizar una gestión
                            eficiente de los recursos humanos.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-light text-center text-lg-start mt-5">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © Sistema de Gestión de RRHH - 2024
        </div>
    </div>
@stop 

@section('adminlte_js')
    @stack('js')
    @yield('js')
@stop
