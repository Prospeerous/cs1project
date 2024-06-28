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

<form class = "inputForm" action = "{{url('updateUser/' .$user->id)}}" method = "PUT" enctype = "multipart/form-data">
    @csrf
    
    <label>First Name:</label>
    <input class = "textInputs" type = "text" name = "f_name" value = "{{$user->f_name}}" required> </input>
    <br>
    <br>
    <label>Last Name:</label>
    <input class = "textInputs" type = "text" name = "l_name" value = "{{$user->l_name}}" required> </textarea>
    <br>
    <br>
    <label>Email:</label>
    <input class = "textInputs" type = "text" name = "email" value = "{{$user->email}}" required> </input>
    <br>
    <br>
    <label>Phone no:</label>
    <input class = "textInputs" type = "text" name = "phone_no" value = "{{$user->phone_no}}" required> </input>
    <br>
    <br>
    <label>Role:</label>
    <input class = "textInputs" type = "text" name = "role" value = "{{$user->role}}"required> </input>
    <br>
    <br>
    <label>Location:</label>
    <input class = "textInputs" type = "text" name = "location" value = "{{$user->location}}"required> </input>
    <br>
    <br>
    <button class = "submitButton" type = "submit">Edit</button>
    <br>
    <br>
   
    
</form>
    

</x-app-layout>