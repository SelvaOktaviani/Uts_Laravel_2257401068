<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Form</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #333;
        }

        .container {
            background-color: #ffffff;
            padding: 40px 30px;
            border-radius: 12px;
            max-width: 400px;
            width: 90%;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .container:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        }

        h1 {
            color: #333333;
            font-size: 30px;
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }

        label {
            font-size: 14px;
            color: #555555;
            margin-bottom: 5px;
            display: block;
        }

        input {
            width: 100%;
            padding: 12px 15px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 16px;
            transition: all 0.3s ease;
            outline: none;
        }

        input:focus {
            border-color: #4facfe;
            box-shadow: 0 0 5px rgba(79, 172, 254, 0.5);
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            margin-top: 20px;
        }

        button {
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            color: #ffffff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        button:hover {
            background: linear-gradient(to right, #00f2fe, #4facfe);
            transform: scale(1.05);
        }

        button:active {
            transform: scale(0.95);
            background: #4facfe;
        }

        footer {
            font-size: 12px;
            text-align: center;
            margin-top: 20px;
            color: #555555;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }

            h1 {
                font-size: 24px;
            }

            .button-container {
                flex-direction: column;
                gap: 15px;
            }

            button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>REGISTER</h1>

        <form action="" method="POST">
            <label for="name">Nama:</label>
            <input type="text" name="name" id="name" placeholder="Masukkan nama Anda">

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Masukkan email Anda">

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Masukkan password Anda">

            <div class="button-container">
                <a href="{{ route('login') }}">
                    <button type="button">Daftar</button>
                </a>
                <a href="{{ route('welcome') }}">
                    <button type="button">Kembali</button>
                </a>
            </div>
        </form>
    </div>
</body>
</html>