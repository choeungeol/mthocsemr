@include('app.healthcare.layout.header')
@include('app.healthcare.layout.left')
@include('app.receipt.layout.top')
<section class="page-content">
    @yield('content')
</section>
@include('app.healthcare.layout.footer')