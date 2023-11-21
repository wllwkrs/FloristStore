

<?php
// Pastikan ini adalah file dengan ekstensi .php

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

// Fungsi untuk membuat akun
function signup(Request $request)
{
    $user = new User;
    $user->user_type = $request->input('userType');
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->password = Hash::make($request->input('password'));
    $user->save();

    return redirect('/login');
}

// Memproses data yang dikirimkan dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userType = $_POST["userType"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Memeriksa apakah tombol signup ditekan
    if (isset($_POST["signup"])) {
        signup($userType, $name, $email, $password);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Florist Azzura</title>
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
        input {
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
    <form action="/signup" method="post">
        <h1>Buat Akun di Florist Azzura</h1>

        <label for="userType">Pilih Tipe Pengguna:</label>
        <select id="userType" name="userType" required>
            <option value="customer">Customer</option>
            <option value="admin">Admin</option>
        </select>

        <br>

        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required>

        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <br>

        <input type="submit" value="Buat Akun">

        <p>Sudah punya akun? <a href='/'>Masuk</a></p>
    </form>
</body>
</html>

