<table>
    <thead>
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>City</td>
        <td>Country</td>
    </tr>
    </thead>
    <tbody>
    @foreach($flights as $flight)
        <tr>
            <td>{{ $flight->id }}</td>
            <td>{{ $flight->name }}</td>
            <td>{{ $flight->city }}</td>
            <td>{{ $flight->country }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
