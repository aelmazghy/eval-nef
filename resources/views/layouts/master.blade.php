<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NEF 22</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Roboto+Condensed:100,300,400,500,700,900">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet"/>
    <style>
        .bg-site {
            background-color: #bce1fe !important;
        }
		.evaluation img {
			border-radius: 50%;
			box-shadow: 27px 14px 24px -10px rgb(0 0 0 / 20%);
			cursor:pointer;
		}
		.evaluation img:hover {
			filter: brightness(0.9);
		}
    </style>
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">

  @livewireStyles
</head>
<body class="bg-site">
<div>
@yield('content')
</div>
<!-- <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script> -->
@livewireScripts
</body>
</html>
