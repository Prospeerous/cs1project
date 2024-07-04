<x-app-layout>
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
        }
        .orderImage {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
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
    </style>

    @foreach($products as $product)   
    <div class="orderSelection">
        <img src="\product_images\{{$products->product_image}}" alt="order item" class="orderImage">
        <br>
        <h3>Product Name: {{ $products->product_name }}</h3>
        <br>
        <h3>Product Price: {{ $products->product_price }}</h3>
        <br>
        <form action= "{{ url('addToCart', $products->id) }}" method="post">
            @csrf
            <input type="number" name ="order_quantity" id= "order_quantity" placeholder="Enter Quantity" min="1" required>
            <a href = "{{ url('addToCart', $products->id) }}" type="submit">Order</a>
            <br>
        </form>
        <br>
        <a class = "homeLink" href = "{{url('showUserProduct')}}">Cancel</a>
    </div>
    @break
    @endforeach

</x-app-layout>
