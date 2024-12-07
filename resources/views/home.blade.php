<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #f3e7e9, #e3eeff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            width: 350px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
        }

        .container:hover {
            transform: translateY(-5px);
        }

        h1 {
            color: #2a3b47;
            font-size: 26px;
            margin-bottom: 15px;
        }

        p {
            font-size: 16px;
            color: #555555;
            margin: 5px 0;
        }

        button {
            padding: 12px 25px;
            border: none;
            border-radius: 6px;
            background-color: #4285f4;
            color: #ffffff;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(66, 133, 244, 0.3);
        }

        button:hover {
            background-color: #357ae8;
            box-shadow: 0 6px 15px rgba(66, 133, 244, 0.5);
        }

        footer {
            margin-top: 20px;
            font-size: 12px;
            color: #888888;
        }

        .highlight {
            color: #f4a261;
            font-weight: bold;
        }  
    </style>
</head>
<body>
    <div class="container">
        <h1 class="name">{{ $name }}</h1>
        <p class="nim">{{ $nim }}</p>
        <p class="class">{{ $class }}</p>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn-logout">Logout</button>
        </form>
        <footer>&copy; 2024 Welcome Page</footer>
    </div>
</body>
</html>