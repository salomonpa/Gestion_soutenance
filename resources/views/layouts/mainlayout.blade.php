<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.style')
</head>
<body>
    @include('require.header')

    <section class="">
        
            <div class="col-lg-2 bg-primary" style="height: 80%">
                
                @include('require.sidebar')
            </div>
            <div class="col-lg-10 text-center mb-5">
                @yield('content')
                <h1>a propos de nous</h1>
            </div>
        
        
     </section>
            @include('layouts.script')
       
         @include('require.footer')


        </body>
</html>
