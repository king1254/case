<div class="table-responsive">
    <table class="table" id="lawyers-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Mobile No</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($lawyers as $lawyers)
            <tr>
                <td>{{ $lawyers->name }}</td>
            <td>{{ $lawyers->mobile_no }}</td>
            <td>{{ $lawyers->description }}</td>
                <td>
                    {!! Form::open(['route' => ['lawyers.destroy', $lawyers->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('lawyers.show', [$lawyers->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('lawyers.edit', [$lawyers->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
