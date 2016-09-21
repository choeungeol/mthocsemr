@include('app.pharmacy.layout.header')
@include('app.pharmacy.layout.left')
@include('app.receipt.layout.top')
<section class="page-content">
    @yield('content')
</section>
@include('app.pharmacy.layout.footer')