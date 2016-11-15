<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Yield the title if one is specified in a child view, otherwise use default below -->
    <title>@yield('title','Big and Little Cat Rescue')</title>

    <!-- Yield any page specific CSS files or anything else you might want in the <head> -->
    @yield('head')

</head>
<body>
    <div class="wrapper container">


        <header>
            @yield('header_content')
            <a id="cd-logo" href="/">Big and Little Cat Rescue</a>
        </header>

        <div class="cd-main-content">
            <main>
                <!-- Main page content will be yielded here -->
                @yield('main_content')
            </main>
        </div>



        <div class="push"></div>
    </div> <!-- close container/wrapper div -->

    <footer>
        @yield('footer_content')
    </footer>



    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- Yield any page specific JS files or anything else you might want at the end of the body -->
    @yield('scripts')



</body>
</html>
