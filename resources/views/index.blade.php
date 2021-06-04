<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cendyn Php Task Test</title>

    <!-- using online links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet" href="{{ asset('css/app.css')}} ">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
</head>

<body>
    <div id="app">
    <div class="page-wrapper default-theme sidebar-bg bg1 toggled">
        <navbar-component></navbar-component>
        <!-- page-content  -->
        <main class="page-content pt-2">
            <div class="container-fluid">
                <quote-component></quote-component>
                <router-view />
            </div>
        </main>
        <!-- page-content" -->
    </div>
</div>
    <!-- page-wrapper -->

    <!-- using online scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <script src="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
     <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEqrTUXghvS7PCsR2l95pFwXF9BlK2-mc&t=k"></script>
    <script src="{{asset('js/app.js')}}"></script>

</body>

</html>
