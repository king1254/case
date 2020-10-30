<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $lawyers->name }}</p>
</div>

<!-- Mobile No Field -->
<div class="form-group">
    {!! Form::label('mobile_no', 'Mobile No:') !!}
    <p>{{ $lawyers->mobile_no }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $lawyers->description }}</p>
</div>

