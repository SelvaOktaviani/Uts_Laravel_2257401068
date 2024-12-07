<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
   /* Reset default styles */
   * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #4facfe, #00f2fe);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
      background: #fff;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 350px;
      text-align: center;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .login-container:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3);
    }

    .login-container h1 {
      margin-bottom: 20px;
      font-size: 28px;
      color: #333;
    }

    .input-group {
      margin-bottom: 20px;
      text-align: left;
    }

    .input-group label {
      display: block;
      margin-bottom: 5px;
      font-size: 14px;
      color: #666;
    }

    .input-group input {
      width: 100%;
      padding: 12px 15px;
      border: 1px solid #ddd;
      border-radius: 6px;
      font-size: 16px;
      transition: border-color 0.3s, box-shadow 0.3s;
    }

    .input-group input:focus {
      border-color: #4facfe;
      box-shadow: 0 0 5px rgba(79, 172, 254, 0.5);
      outline: none;
    }

    .button-container {
      display: flex;
      flex-direction: column;
      gap: 10px;
      margin-top: 20px;
    }

    button {
      padding: 12px;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: all 0.3s;
    }

    button[type="button"] {
      background: linear-gradient(to right, #4facfe, #00f2fe);
      color: #fff;
    }

    button[type="button"]:hover {
      background: linear-gradient(to right, #00f2fe, #4facfe);
      transform: scale(1.05);
    }

    button[type="button"]:active {
      transform: scale(0.95);
    }

    .register-link {
      margin-top: 15px;
      font-size: 14px;
      color: #555;
    }

    .register-link a {
      color: #4facfe;
      text-decoration: none;
      font-weight: bold;
    }

    .register-link a:hover {
      text-decoration: underline;
    }

    /* Responsive Design */
    @media (max-width: 600px) {
      .login-container {
        padding: 20px 30px;
      }

      .login-container h1 {
        font-size: 24px;
      }

      button {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h1>Login</h1>
    <form action="/login" method="post">
      <div class="input-group">
        <label for="username">email</label>
        <input type="text" id="email" name="username" required>
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <a href="{{ route('home') }}">
          <button type="button">Login</button>
          </a>
          <a href="{{ route('welcome') }}">
              <button type="button">Kembali</button>
          </a>
    </form>
  </div>
</body>
</html>