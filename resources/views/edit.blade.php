<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div align="center">
      <h1>EDIT DATA</h1>
			<form method="POST" action="{{ url('/user/update', array($users->id)) }}">
				{{ csrf_field() }}
        <table border="1">
          <tr>
						<td>Name</td>
						<td><input type="text" name="inputname" value="<?php echo $users->name ?>" placeholder="Name" required></td>
          </tr>
					<tr>
						<td>Email</td>
						<td><input type="text" name="inputemail" value="<?php echo $users->email ?>" placeholder="Email" required></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="inputpassword" placeholder="Enter Current / New Password" required></td>
					</tr>
					<tr align="center">
						<td colspan="2"><input type="submit" value="Update" ></input></td>
					</tr>
        </table>
    </div>
  </body>
</html>
