@include('app.receipt.layout.header')
@include('app.receipt.layout.left')
@include('app.receipt.layout.top')
<section class="page-content">
    @yield('content')
</section>
@include('app.receipt.layout.footer')