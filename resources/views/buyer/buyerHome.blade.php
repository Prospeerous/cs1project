<x-app-layout>
    <style>
        /* Global styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            overflow-x: hidden; /* Hide horizontal scrollbar */
        }
        
        /* Container for the image */
        .imageContainer {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }
        
        /* Image styles */
        .pageImage {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
        }
        
        /* Style for the text overlay */
        .textOverlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            background-color: rgba(0, 0, 0, 0.7);
            color: lightgrey;
            border-radius: 8px;
            padding: 20px;
            max-width: 80%;
            z-index: 1; /* Ensure the overlay appears above the image */
        }
        
        /* Button style */
        .productsLink {
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            padding: 10px 20px;
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        
        .productsLink:hover {
            background-color: #45a049;
        }
        
        /* Responsiveness */
        @media (max-width: 768px) {
            .textOverlay {
                max-width: 90%;
            }
        }
    </style>

    <div class="imageContainer">
        <img class="pageImage" src="product_images/green.webp" alt="Buyer Home Page Image">
        <div class="textOverlay">
            <h1>Welcome</h1>
            <p>Equifarm is a platform that bridges the gap between farmers and buyers, facilitating direct connections and transactions. Designed for seamless interaction, it empowers farmers to showcase their produce and pricing, fostering transparency and fair trade. Buyers gain access to a diverse range of agricultural products, ensuring quality and reliability. With user-friendly features like real-time updates and secure payment options, our website prioritizes convenience and trust. Whether you're a small-scale grower or a large distributor, our marketplace offers a level playing field, promoting sustainable farming practices and economic empowerment. Join us in revolutionizing agricultural commerce, one harvest at a time.</p>
            <p><a href="{{ url('showUserProduct') }}" class="productsLink">View Products</a></p>
        </div>
    </div>
</x-app-layout>
