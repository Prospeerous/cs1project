<x-app-layout>

<style type = "text/css"> 
    .tableHeading{
        text-align: center;
        font-weight: bold;
        font-size: 24px;
    }
    .tablepara{
        text-align: center;
        font-size: 16px;
    }
    .inputForm{
        text-align: center;
        
    }
    label {
    display: inline-block;
    width: 100px; 
    text-align: left; 
    margin-right: 10px;   
    }
    .submitButton{
        background-color:green;
        color: white; 
        padding: 5px 10px; 
        text-decoration: none; 
    }
    .imageLabel{
        display: inline-block;
        width: 100px; 
        text-align: left; 
    
    }
    .textInputs{
        width: 200px;
        padding: 5px;
        margin: 5px;
    }
    .links{
        font-style: italic;
        text-decoration: none;
        color: blue;
    }
</style>

<h1 class = "tableHeading">Product Addition Page</h1>
<p class = "tablepara">This is the page for farmers to add their products</p>

<form class = "inputForm" action = "{{url('addProduct')}}" method = "POST" enctype = "multipart/form-data">
    @csrf
    
    <label>Product Name:</label>
    <input class = "textInputs" type = "text" name = "product_name" required> </input>
    <br>
    <br>
    <label>Product Description:</label>
    <textarea class = "textInputs" type = "text" name = "product_description" required> </textarea>
    <br>
    <br>
    <label>Product Quantity:</label>
    <input class = "textInputs" type = "text" name = "product_quantity" required> </input>
    <br>
    <br>
    <label>Product price per kilogram:</label>
    <input class = "textInputs" type = "text" name = "product_price" required> </input>
    <br>
    <br>
    <label>Product Category:</label>
    <select class = "textInputs"  name = "product_category" required>
        <option value = "Fruit">Fruit</option>
        <option value = "Vegetable">Vegetable</option>
        <option value = "Cereals">Cereals</option>
        <option value = "Legumes">Legumes</option>
        <option value = "Tubers">Tubers</option>
    </select>
    <br>
    <br>
    <label class = "imageLabel">Product Image:</label>
    <input class = "textInputs" type = "file" name = "product_image" required> </input>
    <br>
    <br>
    <button class = "submitButton" type = "submit">Add Product</button>
    <br>
    <br>
    <a class = "links" href = "{{url('viewProduct')}}">View products</a>
</form>
    
</x-app-layout>