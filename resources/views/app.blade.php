<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
@include('template.head')
  <title>Laravuespa</title>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper"  id="app">
                <div class="container-fluid">
                    <router-view></router-view>
                </div><!-- /.container-fluid -->
    </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
