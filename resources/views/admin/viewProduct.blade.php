<x-app-layout>
    <style type = "text/css"> 
        .tempUsersTable {
            width: 100%;
            border-collapse: collapse;
        }
        .tempUsersTable th {
            background-color: #f2f2f2;
        }
        .tempUsersTable th, .tempUsersTable td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        .tableHeading{
            text-align: center;
            font-weight: bold;
            font-size: 24px;
        }
        .tablepara{
            text-align: center;
            font-size: 16px;
        }
        .linkEditButton{
            background-color: blue;
            color: white; 
            padding: 5px 10px; 
            text-decoration: none; 
        }
        .linkDeleteButton{
            background-color: red;
            color: white; 
            padding: 5px 10px; 
            text-decoration: none; 
        }        
    </style>


   <h1 class = "tableHeading">Products table</h1>
       <p class = "tablepara">This is the table for all the products</p>

    <table class = "tempUsersTable">
        <thead>
            <tr>
                <th>Id</th>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Product Quantity</th>
                <th>Product Price</th>
                <th>Product Category</th>
                <th>Product Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->product_name}}</td>
                <td>{{$product->product_description}}</td>
                <td>{{$product->product_quantity}}</td>
                <td>{{$product->product_price}}</td> 
                <td>{{$product->product_category}}</td>  
                <td>{{$product->product_image}}</td>
                <td><a class = "linkEditButton" href = "{{url('editProduct', $product->id)}}">Edit</a></td>
                <td><a class = "linkDeleteButton" href = "{{url('deleteProduct', $product->id)}}">Delete</a></td>
                              
            </tr>
        @endforeach   
        </tbody>
    </table>
    <br>
    <br>
    <li><a href = "{{url('addProduct')}}">Add products</li>
    
</x-app-layout>