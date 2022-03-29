<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style-sunset.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/images/logo.png') }}" rel="icon" />
    <title>#TeamUsername</title>
    @livewireStyles
</head>

<body id="bodysunset">
    {{--<div id="notificationWrap2" class="bg-sunset-red text-center text-white font-weight-bold py-2 overflow-hidden text-center">--}}
    {{-- <p class="m-0 px-1 text-uppercase font-sm">JOIN IN WITH #TEAMUSERNAME AND TRACK YOUR PROGRESS&emsp;<a class="text-white btn btn-white-outline" href="https://actionnetwork.org/forms/teamseas-signup" target="_blank">SIGN UP</a></p>--}}
    {{--</div>--}}
    <header id="header">
        <div id="navbar-header" class="navbar">
            <div id="menuBar" class="w-100">
                <div class="navbar-logo"></div>
                <div class="navbar-menu-button"><button type="button" class="navbar-button" data-toggle="modal" data-target="#menuMain"><img src="{{ asset('assets/images/logo.png') }}" /></button></div>
            </div>
        </div>
    </header>
    {{$slot}}
    <!-- Javascript -->
    @stack('modals')

    @livewireScripts
    <script src="{{ asset('assets/js/autocomplete.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/sweetalert2.js') }}?v=1.0.0"></script>
    @stack('scripts')
</body>

</html>