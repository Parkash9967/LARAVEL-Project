<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<title>Ecom-website</title>
</head>
<body>    
</body>
    {{View ::make('Header')}}
    @yield('content')
    {{View ::make('Footer')}}

    <style>
        .custom-login{
            height: 500px;
            padding-top: 100px;
            
        }
      
        img.slider-img{
           height: 400px;
        }
        .custom-product {

            height: 800px
        }
        .slider-text{
            background-color: #8dadad8c; !important
        }
        .trending-image{
            height: 100px;
        }
        .trending-item{
            float: left;
            width: 15%;
        }
        .trending-wrapper{
            margin: 30px;
        }
        .detail-img{
            height: 200px;
        }
        .cart-list-devider{

            border-bottom: 2px solid #cccccc;
            margin-bottom: 20px ;
            padding-bottom: 20px
        }

    </style>
</html>
