<x-app-layout>
<!DOCTYPE html>
<html>
<head>
    <style type = "text/css">
    .pageTitle{
        text-align: center;
        font-weight: bold;
        font-size: 24px;
        padding-top: 20px;
        padding-bottom: 10px;
    }

    .heading{
        padding-left : 22%;
        font-weight: bold;
        font-size: 20px;
        padding-top: 10px;
        padding-bottom: 20px;
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
    }
    .wholePage{
        width : 100%;
        height : 100%;
        background-position: center;
        background-image : url ("public\product_photos\admin background.jpeg");
        background-size: cover;
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
    .explanation{
        padding-left : 22%;
        font-size: 18px;
    }
    </style>
</head>
<body>
    <link rel = "stylesheet" href = "adminSidebar.css">
    <div class = "wholePage">

        <h1 class = "pageTitle">Admin Home</h1>

        <h1 class = "heading">Welcome to the Admin Home Page</h1>

        <p class = "explanation">This is the admin page where administrators can manage and oversee various aspects of the system. Here, you will find relevant links to view and edit essential data such as user information, content updates, and system configurations. This page serves as a central hub for administrators to maintain the integrity and functionality of the platform, ensuring efficient management and seamless operation.</p>
        <p class = "explanation"> Kindly select an option from the sidebar to proceed.</p>
    
        <div class = "sideBar">
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

    </div>
</body>
</html>
</x-app-layout>
