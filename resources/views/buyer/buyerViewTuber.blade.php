<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        /* Global styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: tan;
        }

        /* Style for product boxes */
        .productBox {
            border: 1px solid brown;
            border-radius: 8px;
            margin: 10px;
            padding: 10px;
            width: calc(20% - 50px); /* Adjusted to better fit layout */
            height: 50vh;
            float: left;
            box-sizing: border-box; /* Ensures padding doesn't affect width */
        }

        /* Button style */
        .fancyButton {
            background-color: #4CAF50;
            border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            display: block;
            font-size: 16px;
            cursor: pointer;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
        }

        /* Image container style */
        .divImage {
            margin: auto;
            width: 100%;
            height: 55%;
            overflow: hidden; /* Ensures images don't overflow */
        }

        /* Product text style */
        .productText {
            text-align: left;
            padding-left: 5px;
            padding-top: 5px; /* Fixed typo: 'padding top' to 'padding-top' */
            margin: 0; /* Ensures no default margin */
        }

        /* Navigation panel style */
        .navigationPanel {
            background-color: brown;
            overflow: hidden;
        }

        /* Navigation links style */
        .navigationPanel a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        /* Hover effect for navigation links */
        .navigationPanel a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Cart link style */
        .cartLink {
            float: right;
            padding: 14px 20px; /* To match the navigation links */
            text-decoration: none;
            color: white;
        }

        /* Cart image style */
        .cartImage {
            width: 30px;
            height: auto; /* Adjusted for responsiveness */
            vertical-align: middle; /* Aligns image properly */
            margin-right: 5px; /* Provides spacing between image and text */
        }.heading{
            float: left;
            display: block;
            color: white;
            text-align: center;
            
            text-decoration: none;
        }
        .square-button {
            display: inline-block;
            width: 150px;   /* Adjust size as needed */
            height: 50px;  /* Same as width to make it square */
            background-color: brown; /* Button color */
            color: white;   /* Text color */
            border: none;   /* Remove border */
            border-radius: 8px; /* Ensures the button is not rounded */
            font-size: 16px; /* Font size */
            text-align: center; /* Center text horizontally */
            line-height: 60px; /* Center text vertically */
            text-decoration: none; /* Remove underline */
            cursor: pointer; /* Pointer cursor on hover */
        }
    </style>
</head>
<body>

<div class="navigationPanel">
    
    <a href="{{url('buyer/home')}}">Home</a>
    <a href="{{url('buyer/orders')}}">My Orders</a>
    
</div>

<div style="clear: both;"></div> <!-- Clear floats -->

@foreach($tubers as $tuber)
    <div class="productBox">
        <div class="divImage">
            <img src="/product_images/{{$tuber->product_image}}" alt="Product Image" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <h3 class="productText">{{$tuber->product_name}}</h3>
        <h3 class="productText">KSh {{$tuber->product_price}}</h3>
        <a href="{{url('buyer/viewProduct/'.$tuber->id)}}" class="square-button">View Product</a>
       
    </div>
@endforeach

</body>
</html>
