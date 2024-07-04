
<DOCTYPE html>
<html>
    <head>
        <style type = "text/css">
            
            .productBox{
                border: 1px solid black;
                margin-left: 25px;
                margin-top: 25px;
                padding: 5px;
                width: 20vw;
                height: 50vh;
                float: left;

            }
            .fancyButton{
                background-color: #4CAF50;
                border: none;
                color: white;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                cursor: pointer;
                width: 100%;
            
            }
            .divImage{
                margin-left: auto;
                margin-right: auto;
                width: 100%;
                height: 55%;
            }
            .productText{
                text-align: left;
                padding-left: 5px;
                padding top: 5px;                
            }
            .navigationPanel{
                background-color: #4CAF50;
                overflow: hidden;
            }
            .navigationPanel a {
                float: left; 
                display: block; 
                color: white; 
                text-align: center;
                padding: 14px 20px; 
                text-decoration: none; 
            }
            .navigationPanel a:hover {
                background-color: #ddd; 
                color: black; 
            }
            .cartLink{
                float: right;

            }
            .cartImage{
                width: 30px;
                height: 20px;
            }
                        
        </style>
    
    </head>
    <body>
    
        <div class = "navigationPanel">
                
                    <a href = "{{url('buyerHome')}}">Home</a>
                    <a href = "{{url('showUserProduct')}}">Products</a>
                    <a href = "{{url('showUserOrders')}}">My Orders</a>
                    <div class = "cartLink">
                        <a href = "{{url('showUserCart')}}"><img class = "cartImage" src = "\product_images\cart_image.png" >   Cart</a>
                    </div>
                      
                                                                                                                                                          
        </div>
                    
                      
                
            @foreach($products as $product)
            <div class = productBox>
                <img class = "divImage" src =  "/product_images/{{$product->product_image}}" alt = "product image">
                <h3 class = "productText">
                    {{$product->product_name}}
                </h3>
                <h3 class = "productText">
                    KSh {{$product->product_price}}
                </h3>
                <a class = fancyButton href = "{{url('selectOrderAmmount', $product->id)}}">Add to Cart</a>
            </div>
            @endforeach
            
    </body>
    

</html>

       