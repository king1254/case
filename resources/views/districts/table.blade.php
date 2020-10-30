<div class="table-responsive">
    <table class="table" id="districts-table">
        <thead>
            <tr>
                <th>Division Id</th>
        <th>Name</th>
        <th>Bn Name</th>
        <th>Lat</th>
        <th>Lon</th>
        <th>Website</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($districts as $districts)
            <tr>
                <td>{{ $districts->division_id }}</td>
            <td>{{ $districts->name }}</td>
            <td>{{ $districts->bn_name }}</td>
            <td>{{ $districts->lat }}</td>
            <td>{{ $districts->lon }}</td>
            <td>{{ $districts->website }}</td>
                <td>
                    {!! Form::open(['route' => ['districts.destroy', $districts->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('districts.show', [$districts->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('districts.edit', [$districts->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
