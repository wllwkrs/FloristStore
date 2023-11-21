
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Florist Azzura</title>
    <style>
        body {
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQCVprDxnDzrLQGCIb3cAbiQQWMgKCLu2MrA&usqp=CAU');
            background-repeat: no-repeat;
            background-size: cover;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h1 {
            color: #fff;
            text-align: center;
        }
        form {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 8px;
            color: #fff;
        }
        label {
            font-size: 18px;
            margin-right: 10px;
        }
        input, select {
            padding: 10px;
            margin-bottom: 20px;
            width: 100%;
            border-radius: 4px;
            border: none;
        }
        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <form action="/login" method="post">
        <h1>Selamat datang di Florist Azzura</h1>

        <label for="userType">Pilih Tipe Pengguna:</label>
        <select id="userType" name="userType" required>
            <option value="customer">Customer</option>
            <option value="admin">Admin</option>
        </select>

        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <br>

        <input type="submit" value="Login">

        <p>Belum punya akun? <a href="/signup">Buat Akun</a></p>
    </form>
</body>
</html>

