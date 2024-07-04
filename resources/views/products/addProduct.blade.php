
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 2px solid #28a745;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .header h1 {
            color: #28a745;
            font-size: 24px;
            margin: 0;
        }
        .header a {
            text-decoration: none;
            color: #28a745;
            font-size: 14px;
        }
        .form-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .form-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 2px solid #28a745;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .form-header h2 {
            color: #28a745;
            font-size: 24px;
            margin: 0;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            color: #28a745;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            font-size: 14px;
            color: #333333;
        }
        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: #28a745;
            box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
        }
        .form-group button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }
        .form-group button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="form-header">
                <h2>Add New Product</h2>
            </div>
            <form action="{{ url('/products') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="product_name">Product Name</label>
                    <input type="text" id="product_name" name="product_name" required>
                </div>

                <div class="form-group">
                    <label for="product_description">Product Description</label>
                    <textarea id="product_description" name="product_description" required></textarea>
                </div>

                <div class="form-group">
                    <label for="product_quantity">Product Quantity</label>
                    <input type="number" id="product_quantity" name="product_quantity" required>
                </div>

                <div class="form-group">
                    <label for="product_price">Product Price</label>
                    <input type="text" id="product_price" name="product_price" required>
                </div>

                <div class="form-group">
                    <label for="product_category">Product Category</label>
                    <select id="product_category" name="product_category" required>
                        <option value="vegetables">Vegetables</option>
                        <option value="fruits">Fruits</option>
                        <option value="legumes">Legumes</option>
                        <option value="cereals">Cereals</option>
                        <option value="tubers">Tubers</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="product_image">Product Image</label>
                    <input type="file" id="product_image" name="product_image">
                </div>

                <div class="form-group">
                    <button type="submit">Add Product</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

