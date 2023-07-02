<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-4">
    <table id="tableID" class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th> action </th>
            </tr>
            
        </thead>
        <tbody>
        @foreach($data as $datas)
        <tr>
            <td>{{$datas->id}}</td>
            <td>{{$datas->name}}</td>
            <td>{{$datas->email}}</td>
            <td>
            <a href=""><button class="btn btn-primary"> view  </button></a>&nbsp;
                <a href=""><button class="btn btn-warning">Edit </button></a>&nbsp;
                <a href=""><button class="btn btn-danger"> delete </button></a>
        </tr>
        @endforeach
</tbody>
    </table>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#tableID').DataTable()
          
        
    });
</script>
</html>
