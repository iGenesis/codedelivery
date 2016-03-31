@extends('app')

@section('content')
    <div class="container">
        <h3> Nova Produto</h3>

        @include('errors._check')

        {!! Form::open(['route'=>'admin.products.store', 'class'=>'form']) !!}

            @include('admin.products._form')
            <br />
            <div class="Form-group">
                {!! Form::submit('Criar produto', ['class'=>'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}


    </div>

@endsection