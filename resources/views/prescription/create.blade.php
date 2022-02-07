@extends('layouts.master')
@section('title')
{{ __('sentence.New Prescription') }}
@endsection
@section('content')
<form method="post" action="{{ route('prescription.store') }}">
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
      <!-- Patient info start -->
      <div class="container-md">
         <div class="card shadow mb-4">
            <div class="card-header py-3">
               <h6 class="m-0 font-weight-bold text-primary">{{ __('sentence.New Prescription') }}</h6>
            </div>
            <div class="card-body">
               <div class="form-group">
                  <label for="exampleInputEmail1">{{ __('sentence.Patient') }} :</label>
                  <select required class="form-control select2 select2-hidden-accessible" id="drug" tabindex="-1" name="patient_id" aria-hidden="true">
                     <option>{{ __('sentence.Select Patient') }}</option>
                     @foreach($patients as $patient)
                     <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                     @endforeach
                  </select>
                  {{ csrf_field() }}
               </div>
              
              
            </div>
         </div>
     
     <!-- Patient info end -->
    </div>
    
      <!-- Drug list start -->
      <div class="container-md">
         <div class="card shadow mb-4">
            <div class="card-header py-3">
               <h6 class="m-0 font-weight-bold text-primary">{{ __('sentence.Drugs list') }}</h6>
               </div>
            <div class="card-body">   
            <div class="col-md" align="right">
               <fieldset class="todos_labels">
                  <div class="form-group">
                     <a type="button"  class="btn btn-success add text-white" align="center"><i class='fa fa-plus'></i> {{ __('sentence.Add Drug') }}</a>
                  </div>
                  <div class="repeatable"></div>  
               </div>
               </fieldset>
            </div>       
            
         </div>
  <!-- Drug list end -->

  <!-- test  start -->
         <div class="card shadow mb-4">
            <div class="card-header py-3">
               <h6 class="m-0 font-weight-bold text-primary">{{ __('sentence.Tests list') }}</h6>
            </div>
            <div class="card-body">
               <fieldset class="test_labels">
                 
                  <div class="form-group" style="text-align:right; margin-right:10px">
                     <a type="button" class="btn btn-success add text-white" align="center"><i class='fa fa-plus'></i> {{ __('sentence.Add Test') }}</a>
                  </div>
                  <div class="repeatable"></div>
               </fieldset>
            </div>
         </div> 
  <!-- test  end -->

      <div class="form-group" style="text-align:right">
      <button type="submit"   class="btn btn-info text-white" > {{ __('sentence.Create Prescription') }} </button></div>
    </div>
   </div>
 
</form>
@endsection

<!--- repeatable Drugs start ---->
@section('footer')
<script type="text/template" id="todos_labels">
   <div class="field-group row">
    <div class="col-md-3">
    <select class="form-control select2 select2-hidden-accessible" style="margin-bottom:20px" name="trade_name[]" id="drug" required tabindex="-1" aria-hidden="true">
      <option value="">{{ __('sentence.Select Drug') }}...</option>
          @foreach($drugs as $drug)
          <option value="{{ $drug->id }}">{{ $drug->trade_name }}</option>
            @endforeach
            </select>
    </div>

    <div class="col-md-4">
    <div class="form-group-custom">
      <input type="text" id="dose" name="dose[]" class="form-control" required placeholder="{{ __('sentence.dosage') }}" >
      <label class="control-label"></label><i class="bar"></i>
      </div>
    </div>

    <div class="col-md-4">
    <div class="form-group-custom">
      <input type="text" id="duration" name="duration[]" class="form-control" required placeholder="{{ __('sentence.Duration') }}" required>
     </div>
     </div>

    <div class="col-md-1">
       <a type="button" class="btn btn-danger  text-white span-2 delete" style="margin-bottom:20px" ><i class="fa fa-trash"></i></a>
    </div>
   </div>
</script>



<script type="text/template" id="test_labels">

  <div class="field-group row" style="margin:20px 0;">
    <div class="col-md-6">
      <select class="form-control select2 select2-hidden-accessible" name="test_name[]"  style="margin-bottom:20px" id="test" tabindex="-1" aria-hidden="true" required>
      <option value="">{{ __('sentence.Select Test') }}...</option>
      @foreach($tests as $test)
      <option value="{{ $test->id }}">{{ $test->test_name }}</option>
      @endforeach
      </select>
    </div>

    <div class="col-md-5">
    <div class="form-group-custom">
                                     <input type="text" id="strength" name="description[]" required  class="form-control" placeholder="{{ __('sentence.Description') }}">
                                 </div>
    </div>

    <div class="col-md-1" style="text-align:right">
       <a type="button" class="btn btn-danger  text-white span-2 delete"  ><i class="fa fa-trash"></i></a>
    </div>
   </div>
   
</script>
@endsection
<!--- repeatable Drugs end ---->