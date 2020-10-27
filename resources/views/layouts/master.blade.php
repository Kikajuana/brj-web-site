<!doctype html>
<html lang="en">
    @include('layouts.head')
    <body>
        <div id="wrapper">
            @include('layouts.header')
            @yield('body')
            @include('layouts.footer')
        </div>
        @include('layouts.script')
    </body>
</html>