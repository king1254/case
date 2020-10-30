<div class="table-responsive">
    <table class="table" id="divisions-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Bn Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($divisions as $divisions)
            <tr>
                <td>{{ $divisions->name }}</td>
            <td>{{ $divisions->bn_name }}</td>
                <td>
                    {!! Form::open(['route' => ['divisions.destroy', $divisions->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('divisions.show', [$divisions->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('divisions.edit', [$divisions->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
