<html>
<title>Second Highest Buyer</title>
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
    <tr>
        <td>{{$results[0]->id}}</td>
        <td>{{$results[0]->name}}</td>
        <td>{{$results[0]->diary}}</td>
        <td>{{$results[0]->pen}}</td>
        <td>{{$results[0]->eraser}}</td>
        <td>{{$results[0]->total_amount}}</td>
    </tr>
    </tbody>
</table>
</body>
</html>
