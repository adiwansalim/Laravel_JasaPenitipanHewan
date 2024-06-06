<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Data Pengguna</h1>

<table id="customers">
  <tr>
  <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>

  </tr>
  @foreach($pengguna as $b)
  <tr>
  <td>{{$b->username}}
                        </td>
                        <td>{{$b->email}}</td>
                        <td>{{$b->password}}</td>

  </tr>
  @endforeach
</table>

</body>
</html>
