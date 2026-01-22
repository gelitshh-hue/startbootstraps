<!DOCTYPE html>
<html lang="en">

<head>
 @include('admin.include.head') 
 @stack('scc') 
</head>

<body id="page-top">

    <!-- Page Wrapper -->
 
     <div id="wrapper">

        <!-- Sidebar -->
@include('admin.include.Sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
    @include('admin.include.Navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                 @yield('content')
               
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('admin.include.Footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
           
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
@include('admin.include.Modal')

    <!-- Bootstrap core JavaScript-->
   @include('admin.include.JavaScript')
   @stack('js')
</body>

</html>