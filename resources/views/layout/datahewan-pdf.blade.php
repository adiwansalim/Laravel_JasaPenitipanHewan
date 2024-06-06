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

<h1>Data Hewan</h1>

<table id="customers">
<thead>
  <tr>
                        <th>Nama Hewan</th>
                        <th>Jenis Hewan</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach($hewan as $b)

                    <tr>
                        <td>{{$b->nama}}</td>
                        </td>
                        <td>{{$b->jenis}}</td>


                    </tr>

                    @endforeach
                </tbody>
            </table>

</body>
</html>
