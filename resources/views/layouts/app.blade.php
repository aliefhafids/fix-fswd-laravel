<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Motorhead | {{ $title }}</title>
    <meta name="description" content="Free bootstrap template Atlas">
    <link rel="icon" href="img/favicon.png" sizes="32x32" type="image/png">
    <!-- custom.css -->
    <link rel="stylesheet" href="/css/home/custom.css">
    <!-- bootstrap.min.css -->
    <link rel="stylesheet" href="/css/home/bootstrap.min.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- AOS -->
    <link rel="stylesheet" href="/css/home/aos.css">
</head>

<body>
    @yield('content')
   

    <!-- AOS -->
    <script src="js/aos.js"></script>
    <script>
        AOS.init({});

    </script>
</body>

</html>
