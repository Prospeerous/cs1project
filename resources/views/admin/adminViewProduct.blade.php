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
        .sideBar{
            position: fixed;
            width: 250px;
            height: 100%;
            left: 0;
            top: 10%;
            padding: 30px 15px;
            background-color: aquamarine;
            backdrop-filter: blur(5px);   
            display: none;
        }
        .sideContent{
            padding: 10px 10px;
            font-weight: bold;
            text-align: left;
            border-bottom: 1px solid black;
        }
        .para{
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            border-bottom: 1px solid black;
        }
        .menuButton{
            left: 0;
            top: 10;
            background-color: aquamarine;
            border: 1px solid black;
            color: black;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 30px;
            margin: 4px 4px;
            cursor: pointer;
        }
        .exitMenuButton{
            left: 0;
            top: 0;
            background-color: aquamarine;
            color: black;
            text-align: left;
            text-decoration: none;
            display: inline-block;
            font-size: 30px;
            margin: 4px 4px;
            cursor: pointer;
            
        }
        .homeLink{
            position : absolute;
            left : 45%;
            text-align: center;
            font-size: 20px;
            font-style: italic;
            border: 1px solid black;
            background-color: aquamarine;
            padding: 2px 2px;
        }
        .tableImages{
            width: 200px;
            height: 100px;
        }          
    </style>


    <button class = "menuButton">≡</button>
    <h1 class = "tableHeading">Products table</h1>
    <p class = "tablepara">This is the table for all the products</p>

    <div class = "sideBar">
        <button class = "exitMenuButton">X</button>
        <div>
            <p class = "para" > Admiminstrator Menu</p>
        </div>
        <div class = "sideContent">
            <li><a href = "{{url('viewUsers')}}">View Users</li>
        </div>
        <div class = "sideContent">
            <li><a href = "{{url('adminViewProduct')}}">View Products</li>
        </div>
        <div class = "sideContent">
            <li><a href = "{{url('viewCustomers')}}">View Customers</li>
        </div>
        <div class = "sideContent">
            <li><a href = "{{url('viewFarmers')}}">View Farmers</li>
        </div>
        <div class = "sideContent">
            <li><a href = "{{url('viewAdmins')}}">View Admins</li>
        </div>

    </div>

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
                <td>
                    <img class = "tableImages" src = "/product_images/{{$product->product_image}}">
                </td>
                              
            </tr>
        @endforeach   
        </tbody>
    </table>

    <a class = "homeLink" href = "{{url('adminHome')}}"> Admin home </a>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuButton = document.querySelector('.menuButton');
            const sideBar = document.querySelector('.sideBar');
            const table = document.querySelector('.tempUsersTable');

            menuButton.addEventListener('click', function () {
                sideBar.style.display = (sideBar.style.display === 'none' || sideBar.style.display === '') ? 'block' : 'none';
                table.style.marginLeft = '21%';
                table.style.width = '79%';

            });
            const exitMenuButton = document.querySelector('.exitMenuButton');
            exitMenuButton.addEventListener('click', function () {
                sideBar.style.display = (sideBar.style.display === 'none' || sideBar.style.display === '') ? 'block' : 'none';
                table.style.marginLeft = '0%';
                table.style.width = '100%';
            });
        });
    </script>
</x-app-layout>