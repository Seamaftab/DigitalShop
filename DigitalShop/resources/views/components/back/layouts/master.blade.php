<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{$pageTitle}}</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{asset('ui/backend/css/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <x-back.layouts.partials.top_bar />
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <x-back.layouts.partials.side_bar />
            </div>
            <div id="layoutSidenav_content">
                <main>
                    {{ $slot }}
                </main>
                <x-back.layouts.partials.footer />
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <!-- {{asset('ui/backend/js/scripts.js')}}
        {{asset('ui/backend/assets/demo/chart-area-demo.js')}}
        {{asset('ui/backend/assets/demo/chart-bar-demo.js')}}
        {{asset('ui/backend/js/datatables-simple-demo.js')}} -->
        <script src="{{asset('ui/backend/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('ui/backend/assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('ui/backend/assets/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{asset('ui/backend/js/datatables-simple-demo.js')}}"></script>
        <!-- <script>
            function dark_mode()
            {
                var change = document.body;
                change.classList.toggle("dark-mode");
            }
        </script> -->
    </body>
</html>