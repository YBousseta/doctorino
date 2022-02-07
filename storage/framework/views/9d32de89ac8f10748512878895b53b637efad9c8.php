<?php $__env->startSection('title'); ?>
<?php echo e(__('sentence.New Patient')); ?>

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
        <form method="post" action="<?php echo e(route('patient.create')); ?>">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('sentence.New Patient')); ?></h6>
                </div>
                <div class="card-body">
             
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label"><?php echo e(__('sentence.Full Name')); ?><font color="red">*</font></label>
                      <div class="col-sm-9">
                        <input type="text" placeholder="<?php echo e(__('sentence.Full Name')); ?>" required class="form-control" id="inputEmail3" name="name">
                        <?php echo e(csrf_field()); ?>

                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label"><?php echo e(__('sentence.CIN')); ?><font color="red">*</font></label>
                      <div class="col-sm-9">
                        <input type="text"  placeholder="<?php echo e(__('sentence.CIN')); ?>"required class="form-control" id="inputPassword3"  name="CIN">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label"><?php echo e(__('sentence.Birthday')); ?><font color="red">*</font></label>
                      <div class="col-sm-9">
                        <input type="text" required placeholder="<?php echo e(__('sentence.Birthday')); ?>" class="form-control" id="birthday" name="birthday" autocomplete="off">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label"><?php echo e(__('sentence.Phone')); ?></label>
                      <div class="col-sm-9">
                        <input type="text" placeholder="<?php echo e(__('sentence.Phone')); ?>" class="form-control" id="inputPassword3" name="phone">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label"><?php echo e(__('sentence.Gender')); ?><font color="red">*</font></label>
                      <div class="col-sm-9">
                        <select class="form-control"   required name="gender">
                          <option value="Male"><?php echo e(__('sentence.Male')); ?></option>
                          <option value="Female"><?php echo e(__('sentence.Female')); ?></option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label"><?php echo e(__('sentence.City')); ?></label>
                      <div class="col-sm-9">
                      <input  class="form-control" id="myInput" type="text" name="myCountry" placeholder="<?php echo e(__('sentence.City')); ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label"><?php echo e(__('sentence.Address')); ?></label>
                      <div class="col-sm-9">
                        <textarea type="text" class="form-control" id="inputPassword3" placeholder="<?php echo e(__('sentence.Address')); ?>" name="address"> </textarea>
                      </div>
                    </div>
               
                </div>
              </div>
            
      
        

   
   
          <!-- end card --->
          <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('sentence.Mutuelle')); ?></h6>
                </div>
                <div class="card-body">
                
                    
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label"><?php echo e(__('sentence.Mutuelle')); ?></label>
                      <div class="col-sm-9">
                      <textarea type="text" class="form-control" id="inputPassword3" placeholder="<?php echo e(__('sentence.Mutuelle')); ?>" name="Mutuelle"></textarea>
                      </div>
                    </div>
                
                </div>
              </div>
            
          <!-- end card --->
          <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('sentence.Other')); ?></h6>
                </div>
                <div class="card-body">

                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label"><?php echo e(__('sentence.Other')); ?></label>
                      <div class="col-sm-9">
                        <textarea type="text" class="form-control" id="inputPassword3" name="other"> </textarea>
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
   <!---------------------------------------------------------------->

   
          <!-- end card ---> 
          </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\doctorino\resources\views/patient/create.blade.php ENDPATH**/ ?>