<!DOCTYPE html>
<html lang="en">
 <head>
   @include('partial.header')
 </head>
 <body>
@include('partial.nav')
@include('partial.header')

@yield('content')

@include('partial.footer')
{{-- @include('partial.footer-scripts') --}}
 </body>
</html>