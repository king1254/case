@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Lawyers
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($lawyers, ['route' => ['lawyers.update', $lawyers->id], 'method' => 'patch']) !!}

                        @include('lawyers.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection