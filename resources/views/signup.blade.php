<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Apex Sales CRM</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Center the form container */
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background-color: #232946;
        }

        .form-container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-size: 16px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login {
            text-align: right;
            margin-bottom: 10px;
        }

        .login a {
            color: #007bff;
            text-decoration: none;
            font-size: 15px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 15px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <!-- Image at the top -->
        <div style="text-align: center; margin-bottom: 20px;">
            <img src="https://i.pinimg.com/originals/60/04/30/600430c1d22c731b94cf4e7dae6b398a.gif"  alt="Apex Sales CRM Logo" style="width: 100px;">
        </div>

        <h2>Sign Up</h2>
        <form action="{{ route('register') }}" method="POST">
            @csrf

            <!-- Name Field -->
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>

            <!-- Email Field -->
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <!-- Password Field -->
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <!-- Confirm Password Field -->
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>

            <!-- Link to Login Page -->
            <div class="login">
                <a href="{{ route('login') }}">Already have an account?</a>
            </div>

            <!-- Submit Button -->
            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>
