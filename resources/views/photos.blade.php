@extends('adminlte::page')

@section('title', 'Photos')

@section('content_header')
    <h1>Photos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Photos Section</h3>
            <p>This section contains content different from the home and contact views.</p>

            <div class="row">
                <div class="col-md-4">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h4>Photo 1</h4>
                            <p>Gallery item</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h4>Photo 2</h4>
                            <p>Gallery item</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h4>Photo 3</h4>
                            <p>Gallery item</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('footer')
    <strong>Activity by Nahomi</strong> | Software Development Engineering student
@stop