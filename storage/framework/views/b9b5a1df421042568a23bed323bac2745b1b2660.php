<?php $__env->startSection('title'); ?>
<?php echo e(__('sentence.New Prescription')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form method="post" action="<?php echo e(route('prescription.store')); ?>">
   <div class="row">
      <div class="col">
         <?php if($errors->any()): ?>
         <div class="alert alert-danger">
            <ul>
               <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <li><?php echo e($error); ?></li>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
         </div>
         <?php endif; ?>
         <?php if(session('success')): ?>
         <div class="alert alert-success">
            <?php echo e(session('success')); ?>

         </div>
         <?php endif; ?>
      </div>
   </div>
   <div class="row justify-content-center">
      <!-- Patient info start -->
      <div class="container-md">
         <div class="card shadow mb-4">
            <div class="card-header py-3">
               <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('sentence.New Prescription')); ?></h6>
            </div>
            <div class="card-body">
               <div class="form-group">
                  <label for="exampleInputEmail1"><?php echo e(__('sentence.Patient')); ?> :</label>
                  <select required class="form-control select2 select2-hidden-accessible" id="drug" tabindex="-1" name="patient_id" aria-hidden="true">
                     <option><?php echo e(__('sentence.Select Patient')); ?></option>
                     <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option value="<?php echo e($patient->id); ?>"><?php echo e($patient->name); ?></option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                  <?php echo e(csrf_field()); ?>

               </div>
              
              
            </div>
         </div>
     
     <!-- Patient info end -->
    </div>
    
      <!-- Drug list start -->
      <div class="container-md">
         <div class="card shadow mb-4">
            <div class="card-header py-3">
               <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('sentence.Drugs list')); ?></h6>
               </div>
            <div class="card-body">   
            <div class="col-md" align="right">
               <fieldset class="todos_labels">
                  <div class="form-group">
                     <a type="button"  class="btn btn-success add text-white" align="center"><i class='fa fa-plus'></i> <?php echo e(__('sentence.Add Drug')); ?></a>
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
               <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('sentence.Tests list')); ?></h6>
            </div>
            <div class="card-body">
               <fieldset class="test_labels">
                 
                  <div class="form-group" style="text-align:right; margin-right:10px">
                     <a type="button" class="btn btn-success add text-white" align="center"><i class='fa fa-plus'></i> <?php echo e(__('sentence.Add Test')); ?></a>
                  </div>
                  <div class="repeatable"></div>
               </fieldset>
            </div>
         </div> 
  <!-- test  end -->

      <div class="form-group" style="text-align:right">
      <button type="submit"   class="btn btn-info text-white" > <?php echo e(__('sentence.Create Prescription')); ?> </button></div>
    </div>
   </div>
 
</form>
<?php $__env->stopSection(); ?>

<!--- repeatable Drugs start ---->
<?php $__env->startSection('footer'); ?>
<script type="text/template" id="todos_labels">
   <div class="field-group row">
    <div class="col-md-3">
    <select class="form-control select2 select2-hidden-accessible" style="margin-bottom:20px" name="trade_name[]" id="drug" required tabindex="-1" aria-hidden="true">
      <option value=""><?php echo e(__('sentence.Select Drug')); ?>...</option>
          <?php $__currentLoopData = $drugs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $drug): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($drug->id); ?>"><?php echo e($drug->trade_name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
    </div>

    <div class="col-md-4">
    <div class="form-group-custom">
      <input type="text" id="dose" name="dose[]" class="form-control" required placeholder="<?php echo e(__('sentence.dosage')); ?>" >
      <label class="control-label"></label><i class="bar"></i>
      </div>
    </div>

    <div class="col-md-4">
    <div class="form-group-custom">
      <input type="text" id="duration" name="duration[]" class="form-control" required placeholder="<?php echo e(__('sentence.Duration')); ?>" required>
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
      <option value=""><?php echo e(__('sentence.Select Test')); ?>...</option>
      <?php $__currentLoopData = $tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo e($test->id); ?>"><?php echo e($test->test_name); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
    </div>

    <div class="col-md-5">
    <div class="form-group-custom">
                                     <input type="text" id="strength" name="description[]" required  class="form-control" placeholder="<?php echo e(__('sentence.Description')); ?>">
                                 </div>
    </div>

    <div class="col-md-1" style="text-align:right">
       <a type="button" class="btn btn-danger  text-white span-2 delete"  ><i class="fa fa-trash"></i></a>
    </div>
   </div>
   
</script>
<?php $__env->stopSection(); ?>
<!--- repeatable Drugs end ---->
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\doctorino\resources\views/prescription/create.blade.php ENDPATH**/ ?>