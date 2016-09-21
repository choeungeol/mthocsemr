@extends('app.admin.layout.structure')

<!-- 컨텐츠 -->
@section('content')
    <section class="page-content">
        <div ui-view="adminContent"></div>
    </section>
@endsection
