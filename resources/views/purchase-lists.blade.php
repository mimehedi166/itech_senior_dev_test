<html>
<title>Asending Order Buyer List</title>
<body>
<table>
    <thead>
    <tr>
        <th>Buyer id</th>
        <th>Buyer Name</th>
        <th>Total Diary Taken</th>
        <th>Total Pen Taken</th>
        <th>Total Eraser Taken</th>
        <th>Total items Taken</th>
    </tr>
    </thead>
    <tbody>
    @forelse($results as $res)
    <tr>
        <td>{{$res->id}}</td>
        <td>{{$res->name}}</td>
        <td>{{$res->diary}}</td>
        <td>{{$res->pen}}</td>
        <td>{{$res->eraser}}</td>
        <td>{{$res->total_amount}}</td>
    </tr>
    @empty
    @endforelse
    </tbody>
</table>
</body>
</html>
