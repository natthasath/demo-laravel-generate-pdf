<html>
<head>
    <meta http-equiv="Content-Language" content="th" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap 3.x only : DOMPDF support float, not flexbox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!-- thai font -->
    <link href="https://fonts.googleapis.com/css2?family=Sarabun" rel="stylesheet" />
    <style>
        body {
            font-family: 'Sarabun' !important;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <img src="{{ public_path('/images/logo.png') }}" alt="" style="width: 150px; height: 150px;">
    {{ $slot }}
</body>

</html>
