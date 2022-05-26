<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>SPK</title>

                <style>
                    body {
                      background-color: #729900;
                        }
                </style>

                <!-- Google Font: Source Sans Pro -->
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
                <!-- Font Awesome -->
                <link rel="stylesheet" href="{{asset('style/plugins/fontawesome-free/css/all.css')}}">
                <!-- daterange picker -->
                <link rel="stylesheet" href="{{asset('style/plugins/daterangepicker/daterangepicker.css')}}">
                <!-- Tempusdominus Bootstrap 4 -->
                <link rel="stylesheet" href="{{asset('style/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
                <!-- Bootstrap4 Duallistbox -->
                <link rel="stylesheet" href="{{asset('style/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">
                <!-- BS Stepper -->
                <link rel="stylesheet" href="{{asset('style/plugins/bs-stepper/css/bs-stepper.min.css')}}">
                <!-- Select2 -->
                <link rel="stylesheet" href="{{asset('style/plugins/select2/css/select2.min.css')}}">
                <link rel="stylesheet" href="{{asset('style/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
                <!-- dropzonejs -->
                <link rel="stylesheet" href="{{asset('style/plugins/dropzone/min/dropzone.min.css')}}">
                <!-- Ionicons -->
                <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
                <!-- Theme style -->
                <link rel="stylesheet" href="{{asset('style/dist/css/adminlte.min.css')}}">
            </head>
            <body  class="hold-transition layout-top-nav">

            <!-- Site wrapper -->
            <div class="wrapper">
            @yield('navbar')

                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                    <!-- <section class="content-header">
                        @yield('header-main')
                    </section> -->

                <!-- Main content -->
                <section class="content">
                    @yield('main-content')
                </section>
                    <!-- /.content
                </div>
                <!-- /.content-wrapper -->
                @yield('alert-logout')
                @yield('cekKehadiran')
                @yield('alert-hapus')
                @yield('alert-hadir')
                @yield('lihatSurat')
                @yield('tambahPenerima')

                <footer class="main-footer">
                    <div class="float-right d-none d-sm-block">
                    </div>
                    <strong>Copyright &copy; 2022.</strong>
                </footer>
            </div>
            <!-- ./wrapper -->

            <!-- jQuery -->
            <script src="{{asset('style/plugins/jquery/jquery.min.js')}}"></script>
            <!-- Bootstrap 4 -->
            <script src="{{asset('style/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
            <!-- Select2 -->
            <script src="{{asset('style/plugins/select2/js/select2.full.min.js')}}"></script>
            <!-- Bootstrap4 Duallistbox -->
            <script src="{{asset('style/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
            <!-- InputMask -->
            <script src="{{asset('style/plugins/moment/moment.min.js')}}"></script>
            <script src="{{asset('style/plugins/inputmask/jquery.inputmask.js')}}"></script>
            <!-- date-range-picker -->
            <script src="{{asset('style/plugins/daterangepicker/daterangepicker.js')}}"></script>
            <!-- bootstrap color picker -->
            <script src="{{asset('style/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
            <!-- Tempusdominus Bootstrap 4 -->
            <script src="{{asset('style/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
            <!-- Bootstrap Switch -->
            <script src="{{asset('style/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
            <!-- BS-Stepper -->
            <script src="{{asset('style/plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
            <!-- dropzonejs -->
            <script src="{{asset('style/plugins/dropzone/min/dropzone.min.js')}}"></script>
            <!-- AdminLTE App -->
            <script src="{{asset('style/dist/css/adminlte.min.css')}}"></script>
            <!-- Select2 -->
            <script src="{{asset('style/plugins/select2/js/select2.full.min.js')}}"></script>

            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

            <script src="https://kit.fontawesome.com/bf14dc002a.js" crossorigin="anonymous"></script>

            <script>
                $(function () {
                //Initialize Select2 Elements
                $('.select2').select2()

                //Initialize Select2 Elements
                $('.select2bs4').select2({
                theme: 'bootstrap4'
                })

                $('#reservationtime').daterangepicker({
                    timePicker: true,
                    timePickerIncrement: 5,
                    locale: {
                        format: 'hh:mm A'
                    }
                })
            })
            </script>
    </body>
</html>
