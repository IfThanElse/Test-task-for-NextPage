@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card>
                <div class="card-header bg-primary text-white">
                    <h2>Employees</h2>
                </div>
                <div class="container">


                                    @include('datatables.includes.simple')
                </div>




            </div>
        </div>
    </div>
</div>
@endsection
