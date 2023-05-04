<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TMS') }}</title>

    <!--     Fonts and icons     -->
    <link href="{{ asset('admin/css/material-dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/material-dashboard.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/material-dashboard.css.map') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/loginanimation.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="wrapper">
        @include('layouts.inc.sidebar')
        <div class="main-panel">
            @include('layouts.inc.adminnav')
            <div class="content">
                @yield('content')
            </div>
            @include('layouts.inc.adminfooter')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap-material-design.min.js') }}"></script>
    <script src="{{ asset('admin/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/moment.min.js') }}"></script>
    <script src="{{ asset('admin/js/sweetalert2.js') }}"></script>
    <script src="{{ asset('admin/js/material-dashboard.js') }}"></script>
    <script src="{{ asset('admin/js/chartist.min.js') }}"></script>
    <script src="{{ asset('admin/js/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('admin/js/material-dashboard.js.map') }}"></script>
    <script src="{{ asset('admin/js/material-dashboard.min.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.validate.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    @if (session('status'))
        <script>
            swal("{{ session('status') }}");
        </script>
    @endif

    <script>
        function handleSubmit() {
            document.getElementById('form').submit();
        }
    </script>
    {{-- End  --}}
    <script>
        $(document).ready(function() {

            $('#table').DataTable();

        });

        $(function() {

            $("[data-bs-target='#exampleModal']").click((e)=> {

                $("#exampleModal .card-body img").attr("src", `${e.target.currentSrc}`);
                console.log(e.currentTarget.offsetParent.cells[3].innerText);
                $("#exampleModal #exampleModalLabel").text(`Company Name: ${e.currentTarget.offsetParent.cells[3].innerText}`)

            });



        })

    </script>

    @yield('scripts')
</body>

</html>
