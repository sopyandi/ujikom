<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">

    <title>login</title>
</head>
<body>
    <center>
    <h1>Halaman Login</h1>
    <div class="box">
        <br><br><br>
    <form action="/login" method="post">
        @csrf
        <table>
            <tr>
                {{-- <td>Username </td> --}}
                <td><input type="text" name="email" id="input" placeholder="Username"></td>
            </tr>
            <tr>
                {{-- <td>Password </td> --}}
                <td><input type="password" name="password" id="input" placeholder="Password"></td>
            </tr>
            <tr>
                {{-- <td></td>   --}}
                <td>
                <a href="/member"><input type="submit" value="Login"></a>
                <a href="/member">member</a>
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
<style>
    form{
        margin-top:15%;
        margin-bottom:15%;
    }
    #input{
        text-align: center;
        width:100%;
        height:40px;
        /* border-radius: 30%; */
    }
</style>
