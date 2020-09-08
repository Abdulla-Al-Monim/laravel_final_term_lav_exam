<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>

        <h2>Login</h2>
        <form method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <table>
                <tr>
                    <td>User name</td>
                    <td><input type="text" name="username" value="User Name"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" value="Password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Log In"></td>
                </tr>
            </table>
        </form>
    </body>
</html>