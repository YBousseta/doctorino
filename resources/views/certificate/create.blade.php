@extends('layouts.master')

@section('title')
{{ __('sentence.New Certificate') }}
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
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">{{ __('sentence.New Certificate') }}</h6>
                </div>
                <div class="card-body">
                 <form method="post" action="{{ route('patient.create') }}">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">{{ __('sentence.Full Name') }}<font color="red">*</font></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail3" name="name">
                        {{ csrf_field() }}
                      </div>
                    </div>
                  
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">{{ __('sentence.Birthday') }}<font color="red">*</font></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="birthday" name="birthday" autocomplete="off">
                      </div>
                    </div>
                   
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">{{ __('sentence.Gender') }}<font color="red">*</font></label>
                      <div class="col">
                        <select class="form-control" name="gender">
                          <option value="Male">{{ __('sentence.Male') }}</option>
                          <option value="Female">{{ __('sentence.Female') }}</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">{{ __('sentence.Date') }}<font color="red">*</font></label>
                      <div class="col">
                        <input type="text" class="form-control" id="Date" name="date" autocomplete="off">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">{{ __('sentence.Place') }}<font color="red">*</font></label>
                      <div class="col">
                        <input type="text" class="form-control" id="place" name="place" autocomplete="off">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">{{ __('sentence.Duration') }}<font color="red">*</font></label>
                      <div class="col" >
                        <input type="number" min="1" class="form-control" placeholder="Nombre de jours" id="place" name="place" autocomplete="off">
                      </div>   
                      <label for="inputPassword3"  class="col-form-label de">De<font color="red">*</font></label>
                      <div class="col" >
                        <input type="date" class="form-control" id="place" name="place" autocomplete="off">
                      </div>    
                      <label for="inputPassword3"  class="col-form-label">À<font color="red">*</font></label>
                      <div class="col" >
                        <input type="date" class="form-control" id="" name="place" autocomplete="off">
                      </div>
                      
</div> 
                    <div class="form-group row">
                      <div class="col-sm-9">
                        <button type="submit" class="btn btn-primary">{{ __('sentence.Save') }}</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            
        </div>

    </div>

@endsection

@section('header')

@endsection

@section('footer')

@endsection
