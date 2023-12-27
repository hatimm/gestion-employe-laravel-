@extends('adminlte::page')

@section('title')
    Show employe | Laravel Employe App
@endsection
@section('content_header')
    <h1>Show employe</h1>
@endsection
@section('content')
    <div class="container">
    @include('layouts.alert')
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center text-uppercase fw-bold">
                            <h3>{{$employe->fullname}}</h3>
                        </div>
                    </div>
                    <div class="mt-2 text-center text-uppercase fw-bold">
                            <a href="{{route('vacation.request',$employe->registration_number)}}" class="btn btn-outline-dark">Vacation Request</a>
                            <a href="{{route('certificate.request',$employe->registration_number)}}" class="btn btn-outline-danger">Work Certificate</a>
                    </div>
                    <hr>
                    <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="Registration Number">Registration Number</label>
                                <input type="text" class="form-control" disabled name="registration_number" maxlength="8" placeholder="Registration Number" value="{{$employe->registration_number}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="fullname">Fullname</label>
                                <input type="text" class="form-control" disabled name="fullname" placeholder="Fullname" value="{{$employe->fullname}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="Departement">Departement</label>
                                <input type="text" class="form-control" disabled name="departement" placeholder="Departement" value="{{$employe->departement}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="Hiring Date">Hiring Date</label>
                                <input type="date" class="form-control" disabled name="hiring_date" placeholder="Hiring Date" value="{{$employe->hiring_date}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="Phone">Phone</label>
                                <input type="tel" class="form-control" disabled name="phone" placeholder="Phone" value="{{$employe->phone}}">
                            </div><div class="form-group mb-3">
                                <label for="Adresse">Adresse</label>
                                <input type="text" class="form-control" disabled name="adresse" placeholder="Adresse" value="{{$employe->adresse}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="City">City</label>
                                <input type="text" class="form-control" disabled name="city" placeholder="City" value="{{$employe->city}}">
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
