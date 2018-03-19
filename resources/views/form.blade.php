<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div align="center">
      <h1>INSERT DATA</h1>
      <form  action="/register" method="post">
        {{ csrf_field() }}
        <table border="1">
          <tr>
            <td>Name</td>
            <td><input type="text" name="inputname" required>  </td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input type="text" name="inputemail" required>  </td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" name="inputpassword" required>  </td>
          </tr>
          <tr align="center">
            <td colspan="2"><input type="submit" value="submit" >  </td>
          </tr>
        </table>
      </form>
    </div>
  </body>
</html>
