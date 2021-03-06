@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Form Subject
                </div>

                <div class="card-body">
                    {!! Form::model($subject, ['method' => 'PUT', 'route' => ['admin.subject.update', $subject->id], 'class' => '']) !!}
                        @include('pages.admin.subject._form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
