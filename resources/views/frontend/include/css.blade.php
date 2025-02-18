<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="keywords" content="HTML5 Template Andrew Multi-Purpose themeforest">
<meta name="description" content="Andrew - Multi-Purpose HTML5 Template">
<meta name="author" content="">

<!-- Title  -->
<title>@stack('add-title') - {{ getSetting()->site_name }}</title>

<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset(getSetting()->favicon) }}">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

<!-- Plugins -->
<link rel="stylesheet" href="{{ asset('public/frontend/assets/css/plugins.css') }}">

<!-- Core Style Css -->
<link rel="stylesheet" href="{{ asset('public/frontend/assets/css/style.css') }}">

<!-- toaster css plugin -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

@stack('add-css')