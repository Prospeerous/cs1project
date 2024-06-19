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

   <h1 class = "pageTitle">Farmer Home</h1>
    <h1 class = "ol">Welcome to the Farmer's Home Page</h1>

    <h3 class = "ol">Do you want to <a href = "{{url('addProduct')}}">add products?</h3>

    <h3 class = "ol">Or do you want to <a href = "{{url('viewProduct')}}">view products?</h3>

    
</x-app-layout>
