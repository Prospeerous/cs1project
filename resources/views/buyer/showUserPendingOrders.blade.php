<style>
        .orderSelection {
            max-width: 400px; /* Adjust the maximum width as needed */
            margin: 0 auto; /* Center the div horizontally */
            padding: 20px;
            background-color: lightgray;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 20px; /* Add margin between orderSelection boxes */
            display: inline-block; /* Display as inline-block to arrange horizontally */
            vertical-align: top; /* Align items to the top */
            margin-right: 20px; /* Add margin between orderSelection boxes */
        }
        .orderImage {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
        .orderSelection-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap; /* Enable wrapping of items */
        }
        form {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
        }
        input[type="number"] {
            width: 150px;
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-right: 5px;
        }
        a[type="submit"] {
            padding: 8px 20px;
            font-size: 14px;
            background-color: green;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        a[type="submit"]:hover {
            background-color: limegreen;
        }
        .homeLink {
            background-color: red;
            padding: 8px 20px;
            font-size: 14px;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            left: 30px;
        }
        .homeLink:hover {
            background-color: darkred;
        }
        .proceedLink {
            background-color: limegreen;
            padding: 8px 20px;
            font-size: 14px;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            left: 30px;
        }
        .proceedLink:hover {
            background-color: darkgreen;
        }
        .navigationPanel {
            background-color: #4CAF50;
            overflow: hidden;
        }
        .navigationPanel a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
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
        }

        /* Hover effect for navigation links */
        .navigationPanel a:hover {
            background-color: #ddd;
            color: black;
        }
        
    </style>


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
    @foreach($orders as $order)   
    <div class="orderSelection">
        <img src="\product_images\{{$order->product_image}}" alt="order item" class="orderImage">
        
        <h3>Product Name: {{ $order->product_name }}</h3>
        
        <h3>Product Price: {{ $order->product_price }}</h3>
        
        <h3>Product Ammount: {{ $order-> order_ammount }}</h3>
        
        <h3>Order Status: {{ $order->order_status }}</h3>
        
        <h3>Total Price: {{ $order->total_price }}</h3>
    </div>
    
    @endforeach


