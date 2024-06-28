<x-app-layout>
    <style type = "text/css"> 
        .tempUsersTable {
            padding-left : 50%;
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
    </style>


    

    <button class = "menuButton">≡</button>
    
    <h1 class = "tableHeading">Buyers table</h1>

    <div class = "sideBar">
            <button class = "exitMenuButton">X</button>
            <div>
                <p class = "para" > Admiminstrator Menu</p>
            </div>
            <div class = "sideContent">
                <li><a href = "{{url('adminHome')}}">Admin Home</li>
            </div>
            <div class = "sideContent">
                <li><a href = "{{url('viewUsers')}}">View Users</li>
            </div>
            <div class = "sideContent">
                <li><a href = "{{url('adminViewProduct')}}">View Products</li>
            </div>
            <div class = "sideContent">
                <li><a href = "{{url('adminViewBuyers')}}">View Buyers</li>
            </div>
            <div class = "sideContent">
                <li><a href = "{{url('adminViewFarmers')}}">View Farmers</li>
            </div>
            <div class = "sideContent">
                <li><a href = "{{url('adminViewAdmins')}}">View Admins</li>
            </div>

        </div>

    <table class = "tempUsersTable">
        <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Location</th>
                <th>Role</th>
            </tr>
        </thead>
        
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->f_name}}</td>
                <td>{{$user->l_name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone_no}}</td>
                <td>{{$user->location}}</td> 
                <td>{{$user->role}}</td>
                              
            </tr>
        @endforeach   
        </tbody>
    </table>

    

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuButton = document.querySelector('.menuButton');
            const sideBar = document.querySelector('.sideBar');
            const table = document.querySelector('.tempUsersTable');

            menuButton.addEventListener('click', function () {
                // Toggle the sidebar visibility
                sideBar.style.display = (sideBar.style.display === 'none' || sideBar.style.display === '') ? 'block' : 'none';
                table.style.marginLeft = '21%';
                table.style.width = '79%';

            });
            const exitMenuButton = document.querySelector('.exitMenuButton');
            exitMenuButton.addEventListener('click', function () {
                // Toggle the sidebar visibility
                sideBar.style.display = (sideBar.style.display === 'none' || sideBar.style.display === '') ? 'block' : 'none';
                table.style.marginLeft = '0%';
                table.style.width = '100%';
            });
        });
    </script>
    
</x-app-layout>
