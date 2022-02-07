<?php $__env->startSection('title'); ?>
<?php echo e(__('sentence.Edit Patient')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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
  <div class="col-md-8">
    <form method="post" action="<?php echo e(route('patient.store_edit')); ?>">

      <div class="card shadow mb-4">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('sentence.Edit Patient')); ?></h6>
              </div>
                <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label"><?php echo e(__('sentence.Full Name')); ?><font color="red">*</font></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail3" name="name" value="<?php echo e($patient->name); ?>">
                        <input type="hidden" class="form-control" id="inputEmail3" name="user_id" value="<?php echo e($patient->id); ?>">
                        <?php echo e(csrf_field()); ?>

                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label"><?php echo e(__('sentence.CIN')); ?><font color="red">*</font></label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" id="inputPassword3" name="CIN" value="<?php echo e($patient->CIN); ?>" placeholder="<?php echo e(__('sentence.Phone')); ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label"><?php echo e(__('sentence.Birthday')); ?><font color="red">*</font></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="birthday" name="birthday"  value="<?php echo e($patient->Patient->birthday); ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label"><?php echo e(__('sentence.Phone')); ?></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputPassword3" name="phone" value="<?php echo e($patient->Patient->phone); ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label"><?php echo e(__('sentence.Gender')); ?><font color="red">*</font></label>
                      <div class="col-sm-9">
                        <select class="form-control" name="gender">
                          <option value="<?php echo e($patient->Patient->gender); ?>" selected="selected"><?php echo e($patient->Patient->gender); ?></option>
                          <option value="Male"><?php echo e(__('sentence.Male')); ?></option>
                          <option value="Female"><?php echo e(__('sentence.Female')); ?></option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row" >
                      <label for="inputPassword3" class="col-sm-3 col-form-label"><?php echo e(__('sentence.City')); ?></label>
                      <div class="col-sm-9 autocomplete">
                      <input  class="form-control" id="myInput" type="text" name="myCountry" placeholder="<?php echo e(__('sentence.City')); ?>">
                                     
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label"><?php echo e(__('sentence.Address')); ?></label>
                      <div class="col-sm-9">
                        <textarea type="text" class="form-control" id="inputPassword3" placeholder="<?php echo e(__('sentence.Address')); ?>" name="adress" value="<?php echo e($patient->Patient->adress); ?>">  </textarea>
                      </div>
                    </div>
              </div>
      </div>
               <!------------------------------------>
        <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('sentence.Mutuelle')); ?></h6>
                </div>
                <div class="card-body">
                
                    
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label"><?php echo e(__('sentence.Mutuelle')); ?></label>
                      <div class="col-sm-9">
                      <textarea type="text" class="form-control" id="inputPassword3" placeholder="<?php echo e(__('sentence.Mutuelle')); ?>" name="mutuelle"><?php echo e($patient->Patient->mutuelle); ?></textarea>
                      </div>
                    </div>
                 
                </div>
          </div>
          
       <!------------------------------------>
          <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('sentence.Other')); ?></h6>
                </div>
                <div class="card-body">

                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label"><?php echo e(__('sentence.Other')); ?></label>
                      <div class="col-sm-9">
                        <textarea type="text" class="form-control" id="inputPassword3"  name="other"><?php echo e($patient->Patient->other); ?></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-9">
                        <button type="submit" class="btn btn-primary"><?php echo e(__('sentence.Save')); ?></button>
                      </div>
                    </div>
                 
                </div>
            </div>
            <div class="card shadow mb-4">  </div>  
              

    </form>
     
  </div>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\doctorino\resources\views/patient/edit.blade.php ENDPATH**/ ?>