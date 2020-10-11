@extends('layouts.dashboard')

@section('head')

    <title>Salones</title>

    <!-- Bootstrap CSS CDN -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js" crossorigin="anonymous"></script>


    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />

    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js" crossorigin="anonymous"></script>
@endsection

@section('sidenav-menu')
    @include('administrador.nav')
@endsection

@section('main')
<main>
    <header class="page-header page-header-compact page-header-dark border-bottom bg-white bg-gradient-primary-to-secondary mb-4">
        <div class="container-fluid">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon">
                                <i data-feather="file"></i>
                            </div>
                            Crear salones
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <!-- <div class="container-fluid mt-4">
        <div class="card">
            <div class="card-header">Nivel - Sección</div>
            <div class="card-body">This is a blank page. You can use this page as a boilerplate for creating new pages! This page uses the compact page header format, which allows you to create pages with a very minimal and slim page header so you can get right to showcasing your content.</div>
        </div>
    </div> -->
    <div class="container-fluid mt-4">
    <!-- <div class="container mt-n10"> -->
        <div class="card mb-4">
            <div class="card-header">Nivel - Sección</div>
            <div class="card-body">
                <div class="datatable">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nivel</th>
                                <th>Salones</th>
                                <th>Agregar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($salones as $salon)
                                <tr>
                                    <td>{{ $salon->nombre }}</td>
                                    <td>
                                        @php
                                            $lastLetter = "error";
                                        @endphp
                                        @foreach($secciones as $seccion)
                                            @if($seccion->nivel == $salon->nivel)
                                                {{ $seccion->letra }}
                                                @php
                                                    $lastLetter = $seccion->letra;
                                                @endphp
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        <form action="{{ route('salon.store') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="nivel" value="{{ $salon->nivel }}">
                                            <input type="hidden" name="lastLetter" value="{{ $lastLetter }}">
                                            <button class="btn btn-success btn-sm">
                                                <i class="fas fa-plus"></i>
                                                &nbsp;&nbsp;Agregar sección
                                            </button>
                                        </form>
                                        <!-- <form action="" method="post">
                                            @csrf
                                            <button class="btn btn-warning btn-sm">
                                                <i class="fas fa-trash"></i>
                                                &nbsp;&nbsp;Eliminar sección
                                            </button>
                                        </form> -->
                                        
                                        <!-- <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button> -->
                                    </td>
                                    <td>
                                        <form action="{{ route('salon.destroy', ['salon' => $salon->nivel]) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-warning btn-sm">
                                                <i class="fas fa-trash"></i>
                                                &nbsp;&nbsp;Eliminar sección
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            <!-- <tr>
                                <td>Michael Silva</td>
                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                <td>
                                    <button class="btn btn-success btn-sm">
                                        <i class="fas fa-plus"></i>
                                        &nbsp;&nbsp;Agregar sección
                                    </button>
                                    <button class="btn btn-warning btn-sm">
                                        <i class="fas fa-trash"></i>
                                        &nbsp;&nbsp;Eliminar sección
                                    </button>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>













        



    </div>
</main>
@endsection

@section('scripts')
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    
    <!-- Popper.JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script> -->
    
    <!-- Bootstrap JS -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <script src="{{ asset('js/scripts.js') }}"></script>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>

    <!-- <script src="{{ asset('assets/demo/datatables-demo.js') }}"></script> -->
@endsection