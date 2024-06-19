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
  width: 200px; 
  text-align: left; 
  margin-right: 10px; 
}
</style>

<h1 class = "tableHeading">Product Addition Page</h1>
<p class = "tablepara">This is the page for farmers to add their products</p>

<form class = "inputForm" action = "{{url('addProduct')}}" method = "POST">
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
    <label>Product Price:</label>
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
    <label>Product Image:</label>
    <input class = "textInputs" type = "text" name = "product_image" required> </input>
    <br>
    <br>
    <button type = "submit">Add Product</button>
    <br>
    <br>
    <li><a href = "{{url('viewProduct')}}">View products</li>
</form>
    
</x-app-layout>