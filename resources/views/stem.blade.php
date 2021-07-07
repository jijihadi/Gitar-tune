@extends('layout.main')
@section('title', 'Web')

{{-- @yield('container') --}}

@section('container')
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/1-1-1919x388.jpg">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h1 class="breadcrumb-heading">Tune your guitar</h1>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>Stem</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Begin about Area -->
    <div class="about-area section-space-top-95 mb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-content">
                        <h2 class="about-title">How to tune up?</h2>
                        <p class="about-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                            laborum. Sed ut perspiciatis</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End about Area -->
    
</main>
@endsection