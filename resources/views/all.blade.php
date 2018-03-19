<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div align="center">
      <h1>ALL DATA</h1>
        <table border="1">
          <tr>
            <td>Name</td>
            <td>Email</td>
            <td colspan="4" align="center">Options</td>
          </tr>
          <tr>
            @foreach($userlist as $user)
          		<tr>
          			<td>{{ $user->name}}</td>
          			<td>{{ $user->email}}</td>
                <td><a href="/user/{{ $user->id }}">Detail</td>
                <td><a href="/user/{{ $user->id }}/edit">Edit</td>
                <td><a href="user/{{ $user->id }}/delete">Delete</td>
          		</tr>
            @endforeach
          </tr>
        </table>
    </div>
  </body>
</html>
