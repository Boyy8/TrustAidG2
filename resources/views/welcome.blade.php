<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to TrustAid</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f6f9;
            color: #333;
        }
        .container {
            text-align: center;
            background: white;
            padding: 3rem 4rem;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-bottom: 0.5rem;
            color: #1e293b;
        }
        p {
            color: #64748b;
            margin-bottom: 2rem;
        }
        .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            background-color: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .btn:hover {
            background-color: #1d4ed8;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Welcome to TrustAid System</h1>
        <p>Your trusted platform is ready.</p>
        
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}" class="btn">Go to Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn">Log In</a>
            @endauth
        @endif
    </div>

</body>
</html>

//DEFAULT HOME PAGE
