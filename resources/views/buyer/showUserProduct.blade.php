<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        /* Global styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Style for product boxes */
        .productBox {
            border: 1px solid black;
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
            background-color: #4CAF50;
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
    </style>
</head>
<body>

<div class="navigationPanel">
    
    <a href="{{url('buyerHome')}}">Home</a>
    <a href="{{url('showUserProduct')}}">Products</a>
    <a href="{{url('showUserPendingOrders')}}">My Orders</a>
    <div class="cartLink">
        <a href="{{url('showBuyerCart')}}">
            <img class="cartImage" src="/product_images/cart_image.png" alt="Cart">
            Cart
        </a>
    </div>
</div>

<div style="clear: both;"></div> <!-- Clear floats -->

@foreach($products as $product)
    <div class="productBox">
        <div class="divImage">
            <img src="/product_images/{{$product->product_image}}" alt="Product Image" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <h3 class="productText">{{$product->product_name}}</h3>
        <h3 class="productText">KSh {{$product->product_price}}</h3>
        <a class="fancyButton" href="{{url('selectOrderAmmount', $product->id)}}">Add to Cart</a>
    </div>
@endforeach

</body>
</html>
