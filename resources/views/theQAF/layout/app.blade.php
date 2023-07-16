@include('theQAF.layout.top')
@include('theQAF.layout.menu')
<div id="layoutSidenav_content">
    <main>
    <div class="container-fluid px-4">
{{-- ini buat naro konten atau main --}}
@yield('content')
        </div>
    </main>
</div>
</div>
@include('theQAF.layout.bottom')