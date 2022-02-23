@extends('master')
@section('title')
    Student Information page
@endsection
@section('body')
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card-header">Student Information</div>
                    <div class="card-body">
                        <h4 class="text-success text-center">{{Session::get('message')}}</h4>
                        <form action="{{route('new-student')}}" method="POST">
                            @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Name</label>
                            <div class="col-md-9">
                                <input type="text" name="name" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Email</label>
                            <div class="col-md-9">
                                <input type="text" name="email" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Mobile</label>
                            <div class="col-md-9">
                                <input type="number" name="mobile" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-outline-success" value="Form Submit"/>
                            </div>
                        </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection
