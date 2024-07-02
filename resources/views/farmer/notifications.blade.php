<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>
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
        .notification {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        .notification .icon {
            color: #28a745;
            font-size: 30px;
            margin-right: 15px;
        }
        .notification .details {
            flex: 1;
        }
        .notification .details .desc {
            font-size: 16px;
            color: #333333;
            margin: 0;
        }
        .notification .details .meta {
            font-size: 12px;
            color: #999999;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Notifications</h1>
            <a href="#">View All</a>
        </div>
        <div class="notification">
            <i class="fas fa-shipping-fast icon"></i>
            <div class="details">
                <p class="desc">Reminder: Your delivery for Emily Smith is scheduled for tomorrow. Please ensure the Heirloom Tomatoes are ready for dispatch.</p>
                <p class="meta">2 hrs ago</p>
            </div>
        </div>
        <div class="notification">
            <i class="fas fa-star icon"></i>
            <div class="details">
                <p class="desc">Great news! Michael Lee has left a 5-star review for your Fresh Kale. Keep up the excellent work!</p>
                <p class="meta">1 day ago</p>
            </div>
        </div>
        <div class="notification">
            <i class="fas fa-chart-line icon"></i>
            <div class="details">
                <p class="desc">Congratulations! You’ve reached a new milestone of 100 completed orders. Thank you for being a valued member of our community.</p>
                <p class="meta">3 days ago</p>
            </div>
        </div>
        <div class="notification">
            <i class="fas fa-envelope icon"></i>
            <div class="details">
                <p class="desc">James sent you a new message.</p>
                <p class="meta">7 days ago</p>
            </div>
        </div>
    </div>
</body>
</html>