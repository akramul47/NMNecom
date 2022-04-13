<!DOCTYPE html>
<html lang="en">
@include('admin.partial.head')

<body >
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
       @include('admin.partial.headerm')
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        @include('admin.partial.sidebar')
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
           @include('admin.partial.headerd')
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    @include('admin.partial.script')

</body>

</html>
<!-- end document-->
