<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .forgot-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="forgot-container">
        <h2>Lupa Password</h2>
        <p>Masukkan alamat email Anda Untuk Mendapatkan Link Reset Password.</p>
        <form action="{{ route('forget.password.post') }}" method="POST">
            @csrf

            <div class="form-group">

                <input type="email" id="email" name="email" required>
            </div>

            <button type="submit">Kirim Link Reset Password</button>
            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600">
                    A new email verification link has been emailed to you!
                </div>
            @endif
        </form>
    </div>
</body>

</html>
