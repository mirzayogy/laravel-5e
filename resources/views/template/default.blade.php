<!DOCTYPE html>
<html lang="en">
@include('template.components.head')

<body id="page-top">
    <div id="wrapper">
        @include('template.components.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('template.components.topbar')
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            @include('template.components.footer')
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    @include('template.components.scripts')
</body>

</html>
