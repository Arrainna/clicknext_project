<!DOCTYPE html>
<html>
<head>
    <title>Logs</title>
</head>
<body>

<h2>Logs</h2>

<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>Description</th>
        <th>Changes</th>
        <th>Date</th>
    </tr>
    @foreach($logs as $log)
    <tr>
        <td>{{ $log->description }}</td>
        <td>{{ $log->changes }}</td>
        <td>{{ $log->created_at }}</td>
    </tr>
    @endforeach
</table>

</body>
</html>
