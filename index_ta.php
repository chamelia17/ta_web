<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - GiftSia Shop</title>
    <style>
        body{background-color: white;}
        table{background-color: white; border-radius: 10px; margin-top: 30px; padding: 15px;}
        table:hover{box-shadow: 3px 3px 13px gray;}
    </style>
</head>
<body>
    <form method="POST" action="login.php">
        <table align="center">
            <th colspan="3" align="left">Login...</th>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td colspan="3" align="right">
                    <input type="submit" value="login" name="submit">
                    <input type="reset" value="reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>