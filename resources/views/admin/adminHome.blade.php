<x-app-layout>
<style type = "text/css">
    .ul{
        text-align: center;
        list-style-type: none;
        margin: 0;
        padding: 20px;
        overflow: hidden;
    }
    .ol{
        text-align: center;
        list-style-type: none;
        margin: 0;
        overflow: hidden;
    }
    .pageTitle{
        text-align: center;
        font-weight: bold;
        font-size: 24px;
    }
</style>

   <h1 class = "pageTitle">Admin Home</h1>
    <h1 class = "ol">Welcome to the Admin Home Page</h1>

    <h3 class = "ol">What data do you want to view?</h3>
    <!--<ul class = "ul"> -->
    <div class = "ul">
        <li><a href = "{{url('viewUsers')}}">Users</li>
        <li><a href = "{{url('addProduct')}}">Add products</li>
        <li><a href = "{{url('viewProduct')}}">View products</li>
    <!-- </ul>-->
    </div>
</x-app-layout>
