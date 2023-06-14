<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>Diskominfo</title>

        @stack("jquery")
        @include("includes.style")
    </head>

    <body id="page-top">
        <div id="wrapper">
            @include("includes.sidebar")
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    @include("includes.navbar")
                    @yield('content')
                </div>
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Muhammad Amirul {{ date("Y") }}</span>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        @include("includes.script")
        @stack("script")
    </body>
</html>
