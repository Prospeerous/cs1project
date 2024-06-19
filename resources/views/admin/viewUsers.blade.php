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
    </style>


   <h1 class = "tableHeading">User's table</h1>
   <p class = "tablepara">For column usertype, 0 represents normal user and 1 represents admin</p>
    
    <table class = "tempUsersTable">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Location</th>
                <th>User type</th>
                <th>Role</th>
            </tr>
        </thead>
        
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone_no}}</td>
                <td>{{$user->location}}</td> 
                <td>{{$user->usertype}}</td>  
                <td>{{$user->role}}</td>
                              
            </tr>
        @endforeach   
        </tbody>
    </table>
    <li><a class = "tablepara" href = "{{url('home')}}"> Admin home </li>
    
</x-app-layout>
