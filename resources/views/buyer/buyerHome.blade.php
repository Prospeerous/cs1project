<x-app-layout>
    <style>
        .textOverlay{
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%); 
            text-align: center; 
            background-color: rgba(0, 0, 0, 0.7); 
            color: lightgrey; 
            border-radius: 8px;
            font-size: 24px;
            font-weight: bold;
            width: 100%;
            
            
        }
        .imageContainer{
            position: relative; 
        }
        .pageImage{
            margin-left: auto;
            margin-right: auto;
            width: 100vw;
            height: 100vh;    
        }
        .productsLink{
            background-color: #4CAF50;
            margin-left: 45%;
            font-size: 16px;
            cursor: pointer;          
        }
    </style>

    
    
    <div class = "imageContainer">
        <img class = "pageImage" src = "product_images\green.webp" class = "pageImage" alt = "Buyer Home Page Image">
    </div>
    <div class = "textOverlay">
        <h1>Welcome</h1>
        <p>Equifarm is a platform that bridges the gap between farmers and buyers, facilitating direct connections and transactions. Designed for seamless interaction, it empowers farmers to showcase their produce and pricing, fostering transparency and fair trade. Buyers gain access to a diverse range of agricultural products, ensuring quality and reliability. With user-friendly features like real-time updates and secure payment options, our website prioritizes convenience and trust. Whether you're a small-scale grower or a large distributor, our marketplace offers a level playing field, promoting sustainable farming practices and economic empowerment. Join us in revolutionizing agricultural commerce, one harvest at a time.</p>
        <p>Start by pressing View Products below</p>
        <br>
        <br>
        <br>        
        <a href = "{{url('showUserProduct')}}" >View Products</a>
    </div>
    <br>
    

</x-app-layout>