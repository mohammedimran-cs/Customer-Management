<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Management System</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="card shadow-lg p-5 text-center" style="max-width: 600px;">
            <h1 class="mb-3 text-primary">Customer Management System</h1>

            <p class="text-muted mb-4">
                Manage your customers efficiently with secure authentication,
                easy CRUD operations, and a clean interface.
            </p>

            <div class="d-flex justify-content-center gap-3">
                @auth
                    <a href="{{ route('customers.index') }}" class="btn btn-success">
                        Go to Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-outline-primary">
                        Register
                    </a>
                @endauth
            </div>
        </div>
    </div>

</body>
</html>
