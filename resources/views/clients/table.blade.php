<div class="table-responsive">
    <table class="table" id="clients-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Division Id</th>
        <th>District Id</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Description</th>
        <th>File</th>
        <th>Date</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clients as $clients)
            <tr>
                <td>{{ $clients->name }}</td>
            <td>{{ $clients->division_id }}</td>
            <td>{{ $clients->district_id }}</td>
            <td>{{ $clients->mobile }}</td>
            <td>{{ $clients->email }}</td>
            <td>{{ $clients->gender }}</td>
            <td>{{ $clients->address }}</td>
            <td>{{ $clients->description }}</td>
            <td>{{ $clients->file }}</td>
            <td>{{ $clients->date }}</td>
                <td>
                    {!! Form::open(['route' => ['clients.destroy', $clients->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('clients.show', [$clients->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('clients.edit', [$clients->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
