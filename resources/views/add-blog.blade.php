@extends('master')
@section('title')
    add-blog page
@endsection
@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card-header">Student Information</div>
                    <div class="card-body">
                        <h4 class="text-success text-center">{{Session::get('message')}}</h4>
                        <form action="{{route('add-blog')}}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Title</label>
                                <div class="col-md-9">
                                    <input type="text" name="title" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Author</label>
                                <div class="col-md-9">
                                    <input type="text" name="author" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Blog Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="description"></textarea>
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

