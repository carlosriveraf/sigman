@extends('layouts.dashboard')

@section('head')
    <!-- Bootstrap CSS CDN -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js" crossorigin="anonymous"></script>
@endsection

@section('sidenav-menu')
    @include('administrador.nav')
@endsection

@section('main')
<main>
    <header class="page-header page-header-compact page-header-dark border-bottom bg-white bg-gradient-primary-to-secondary mb-4">
    <!-- <header class="page-header page-header-compact page-header-dark border-bottom bg-white bg-gradient-primary-to-secondary mb-4"> -->
    <!-- <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4"> -->
        <!-- bg-gradient-primary-to-secondary -->
        <div class="container-fluid">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="file"></i></div>
                            Blank Starter (Minimal)
                        </h1>
                    </div>
                    <div class="col-12 col-xl-auto mb-3">Optional page header content</div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">Example Card</div>
            <div class="card-body">This is a blank page. You can use this page as a boilerplate for creating new pages! This page uses the compact page header format, which allows you to create pages with a very minimal and slim page header so you can get right to showcasing your content.</div>
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
@endsection