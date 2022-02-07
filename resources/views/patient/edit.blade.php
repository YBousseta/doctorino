@extends('layouts.master')

@section('title')
{{ __('sentence.Edit Patient') }}
@endsection

@section('content')
    <div class="row">
      <div class="col">
         @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
      </div>
      
    </div>


<div class="row justify-content-center">
  <div class="col-md-8">
    <form method="post" action="{{ route('patient.store_edit') }}">

      <div class="card shadow mb-4">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">{{ __('sentence.Edit Patient') }}</h6>
              </div>
                <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">{{ __('sentence.Full Name') }}<font color="red">*</font></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail3" name="name" value="{{ $patient->name }}">
                        <input type="hidden" class="form-control" id="inputEmail3" name="user_id" value="{{ $patient->id }}">
                        {{ csrf_field() }}
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">{{ __('sentence.CIN') }}<font color="red">*</font></label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" id="inputPassword3" name="CIN" value="{{ $patient->CIN }}" placeholder="{{ __('sentence.Phone') }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">{{ __('sentence.Birthday') }}<font color="red">*</font></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="birthday" name="birthday"  value="{{ $patient->Patient->birthday }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">{{ __('sentence.Phone') }}</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputPassword3" name="phone" value="{{ $patient->Patient->phone }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">{{ __('sentence.Gender') }}<font color="red">*</font></label>
                      <div class="col-sm-9">
                        <select class="form-control" name="gender">
                          <option value="{{ $patient->Patient->gender }}" selected="selected">{{ $patient->Patient->gender }}</option>
                          <option value="Male">{{ __('sentence.Male') }}</option>
                          <option value="Female">{{ __('sentence.Female') }}</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row" >
                      <label for="inputPassword3" class="col-sm-3 col-form-label">{{ __('sentence.City') }}</label>
                      <div class="col-sm-9 autocomplete">
                      <input  class="form-control" id="myInput" type="text" name="myCountry" placeholder="{{ __('sentence.City') }}">
                                     
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">{{ __('sentence.Address') }}</label>
                      <div class="col-sm-9">
                        <textarea type="text" class="form-control" id="inputPassword3" placeholder="{{ __('sentence.Address') }}" name="adress" value="{{ $patient->Patient->adress }}">  </textarea>
                      </div>
                    </div>
              </div>
      </div>
               <!------------------------------------>
        <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">{{ __('sentence.Mutuelle') }}</h6>
                </div>
                <div class="card-body">
                
                    
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">{{ __('sentence.Mutuelle') }}</label>
                      <div class="col-sm-9">
                      <textarea type="text" class="form-control" id="inputPassword3" placeholder="{{ __('sentence.Mutuelle') }}" name="mutuelle">{{ $patient->Patient->mutuelle }}</textarea>
                      </div>
                    </div>
                 
                </div>
          </div>
          
       <!------------------------------------>
          <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">{{ __('sentence.Other') }}</h6>
                </div>
                <div class="card-body">

                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">{{ __('sentence.Other') }}</label>
                      <div class="col-sm-9">
                        <textarea type="text" class="form-control" id="inputPassword3"  name="other">{{ $patient->Patient->other }}</textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-9">
                        <button type="submit" class="btn btn-primary">{{ __('sentence.Save') }}</button>
                      </div>
                    </div>
                 
                </div>
            </div>
            <div class="card shadow mb-4">  </div>  
              

    </form>
     
  </div>
</div>


@endsection

@section('header')

@endsection

@section('footer')

@endsection