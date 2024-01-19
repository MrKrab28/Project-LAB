<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LAB UIM</title>

    @include('includes.styles')
   

</head>

<body>



    <!-- Sidebar Menu Start -->
    @include('includes.admin.sidebar')
    <!-- Sidebar Menu End -->

    <main class="main-content">
        <div class="position-relative iq-banner">
            {{-- navbar Dashboard Start --}}
            {{-- Navbar Component Start --}}
            @include('includes.admin.navbar')
            {{-- Navbar Component End --}}
            {{-- navbar Dashboard End --}}
        </div>
        @yield('content')



        <!-- Footer Section Start -->
        <footer class="footer">
            <div class="footer-body">

                <div class="right-panel">
                    Copyright ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script> Hope UI, Made with
                    <span class="">

                    </span> by IQONIC Design
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->
    </main>

    <!-- Wrapper End-->
    <!-- offcanvas start -->


    @include('includes.scripts')

</body>

</html>
