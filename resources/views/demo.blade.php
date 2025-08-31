<!DOCTYPE html>
<html>
<head>
    <title>My First Page</title>
    <style>
        body {
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        h1 {
            animation: slideUpDown 2s infinite alternate;
        }
        @keyframes slideUpDown {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(100px);
            }
        }
    </style>
</head>
<body>
    <h1>I am studying Laravel 8</h1>
</body>
</html>