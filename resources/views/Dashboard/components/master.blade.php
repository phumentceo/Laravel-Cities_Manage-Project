<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">  
    <title>Document</title>  
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/index.css') }}">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Battambang:wght@100;300;400;700;900&display=swap" rel="stylesheet">
</head>  
<body>  
    <div class="container-fluid p-0">

        @include('Dashboard.components.header')
        
        <div class="contain">  

            {{-- sidebar start --}}
            @include('Dashboard.components.sidebar')
            {{-- sidebar end --}}
          
            <div class="container">  

                @yield('contents')

            </div>   
        </div>  
    </div>  

    <!-- Include jQuery -->  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
    <!-- Include Select2 JS -->  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> 
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @yield('scripts')
    
</body>  
</html>