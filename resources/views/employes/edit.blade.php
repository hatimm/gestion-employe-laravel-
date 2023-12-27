@extends('adminlte::page')

@section('title')
    Update new employe | Laravel Employe App
@endsection
@section('content_header')
    <h1>Update new employe</h1>
@endsection
@section('content')
    <div class="container">
    @include('layouts.alert')
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center text-uppercase fw-bold">
                            <h4>Update new employe</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('employes.update',$employe->registration_number)}}" method="post" class="mt-3">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label for="Registration Number">Registration Number</label>
                                <input type="text" class="form-control" name="registration_number" placeholder="Registration Number" value="{{old('registration_number',$employe->registration_number)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="fullname">Fullname</label>
                                <input type="text" class="form-control" name="fullname" placeholder="Fullname" value="{{old('fullname',$employe->fullname)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="Departement">Departement</label>
                                <input type="text" class="form-control" name="departement" placeholder="Departement" value="{{old('departement',$employe->departement)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="Hiring Date">Hiring Date</label>
                                <input type="date" class="form-control" name="hiring_date" placeholder="Hiring Date" value="{{old('hiring_date',$employe->hiring_date)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="Phone">Phone</label>
                                <input type="tel" class="form-control" name="phone" placeholder="Phone" value="{{old('phone',$employe->phone)}}">
                            </div><div class="form-group mb-3">
                                <label for="Adresse">Adresse</label>
                                <input type="text" class="form-control" name="adresse" placeholder="Adresse" value="{{old('adresse',$employe->adresse)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="City">City</label>
                                <input type="text" class="form-control" name="city" placeholder="City" value="{{old('city',$employe->city)}}">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
