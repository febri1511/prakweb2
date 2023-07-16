@extends('theQAF.layout.app')
@section('content')
<div id="layoutSidenav_content">
    <main>
    <div class="container-fluid px-4">
{{-- ini buat naro konten atau main --}}
@yield('content')

</div>
</div>
@endsection