<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
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
        .settings-section {
            margin-bottom: 20px;
        }
        .settings-section h2 {
            font-size: 20px;
            color: #333333;
            margin-bottom: 10px;
        }
        .settings-section .setting {
            margin-bottom: 15px;
        }
        .settings-section .setting label {
            display: block;
            font-size: 14px;
            color: #666666;
            margin-bottom: 5px;
        }
        .settings-section .setting input,
        .settings-section .setting select {
            width: 100%;
            padding: 8px;
            font-size: 14px;
            border: 1px solid #cccccc;
            border-radius: 5px;
        }
        .save-btn {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            color: #ffffff;
            background-color: #28a745;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .save-btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Settings</h1>
        </div>
        <div class="settings-section">
            <h2>Profile Settings</h2>
            <div class="setting">
                <label for="name">Name</label>
                <input type="text" id="name" placeholder="Enter your name">
            </div>
            <div class="setting">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Enter your email">
            </div>
            <div class="setting">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Enter new password">
            </div>
        </div>
        <div class="settings-section">
            <h2>Notification Settings</h2>
            <div class="setting">
                <label for="notifications">Receive Notifications</label>
                <select id="notifications">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
        </div>
        <button class="save-btn">Save Settings</button>
    </div>
</body>
</html>
