<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('pageTitle')</title>
    @livewireStyles
    <link rel="stylesheet" href="{{asset('css/ijabo.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
</head>

<body>
    @include('back.partials.header')
    <div class="px-2 md:px-12 min-h-screen">
        @yield('content')
    </div>
    @include('back.partials.footer')
    @livewireScripts

    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}" ></script>
    <script src="{{asset('js/ijabo.min.js')}}" ></script>
    <script>
        window.addEventListener('showToaster', function(event) {
            toastr.remove();
            if(event.detail.type === 'info'){
                toastr.info(event.detail.message);
            }else if (event.detail.type === 'success'){
                toastr.success(event.detail.message); 
            }else if (event.detail.type === 'error'){
                toastr.error(event.detail.message); 
            }else if (event.detail.type === 'warning'){
                toastr.warning(event.detail.message); 
            }else {
                return false;
            }
        })
    </script>
</body>

</html>