<!doctype html>
<html lang="en">
    @include('layouts.head')
    <body>
        <div class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 500}">
            <div class="loading-overlay">
                <div class="bounce-loader">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
            </div>
            <div class="body">
                @include('layouts.header')
                @yield('body')
                @include('layouts.footer')
            </div>
        </div>
        @include('layouts.script')
    </body>
</html>