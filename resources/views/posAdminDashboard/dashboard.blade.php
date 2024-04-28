@extends('layouts.main')
@section('content')
<title>Welcome!</title>

<section class="adminDashboardBody kld--display-flex">
    <section class="mobileSidebar kld--display-none">

    </section>
    <section class="kld--site kld--min-width-dvw-100">
        <header class="kld--display-flex kld--align-items-center adminDashboardNavbar custom-pattern">
            <section class="adminNavbarContent kld--navbar kld--display-flex kld--align-items-center">
                <p class="kld--text-color-white kld--site-title dashboardTitle">Sari-Savvy Store</p>
                <ul class="kld--text-color-white kld--display-flex kld--align-items-center navbarLink">
                    <li class="kld--padding-1"><a href="#" class="kld--text-color-white kld--text-hover-info">Products</a></li>|
                    <li class="kld--padding-1"><a href="#" class="kld--text-color-white kld--text-hover-info">Records</a></li>|
                    <li class="kld--padding-1"><a href="#" class="kld--text-color-white kld--text-hover-info">Statistics</a></li>|
                    <li class="kld--padding-1"><a href="#" class="kld--text-color-white kld--text-hover-info">Transactions</a></li>
                </ul>
                <section class="navbarProfile kld--text-color-white">
                    Diestro, Charles Manuel <span class="kld--text-color-info">&#8711</span>
                </section>
            </section>
            <section class="mobileHamburger kld--margin-right-2">
                <button type="button" class="hamburgerIcon">
                    <i class="fa-solid fa-bars kld--font-size-large kld--text-color-white"></i>
                </button>
            </section>
        </header>
        <main>

        </main>
    </section>
</section>

@endsection
