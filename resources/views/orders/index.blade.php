<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .table {
            background-color: white;
            color: #333;
        }
        .table th, .table td {
            vertical-align: middle;
            text-align: center;
        }
        .table img {
            max-width: 100px;
            max-height: 100px;
        }
        .thead-light {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Orders</h1>
        <div class="mb-4">
            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>Product</th>
                        <th>Product name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                        
                        <th>Image</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($orders as $order) : ?>
                        <tr>
                            <td><?= $order->product_id; ?></td>
                            <td><?= $order->name ?></td>
                            <td><?= $order->quantity; ?></td>
                            <td><?= $order->total / $order->quantity; ?></td>
                            <td><?= $order->total; ?></td>
                        <!--    <td><?= $order->buyer_id; ?></td> -->
                            <td>
                                <!-- Uncomment this line to display the image -->
                                <img src="<?= 'storage/products/' . $order->product->image; ?>" alt="<?= $order->product->name; ?>" style="width: 100px; height: 100px;"> 
                                <?= $order->product->image; ?>
                            </td>
                            <td><?= $order->status; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>