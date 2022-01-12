<?php $__env->startSection('content'); ?>
    <div id="container" style="background-color: white">
        <div class="container">
            <!-- Breadcrumb Start-->
            <ul class="breadcrumb">
                <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                <li><a href="login.html">حساب کاربری</a></li>
                <li><a href="register.html">ویرایش کاربر</a></li>
            </ul>
            <!-- Breadcrumb End-->
            <div class="row">
                <!--Middle Part Start-->
                <?php echo $__env->make('users.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('users.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-sm-9" id="content">
                    <h1 class="title">ویرایش کاربر</h1>
                    <form class="form-horizontal" method="post">
                        <?php echo e(csrf_field()); ?>

                        <fieldset id="account">

                            <div style="display: none;" class="form-group required">
                                <label class="col-sm-2 control-label">گروه کاربران</label>
                                <div class="col-sm-10">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" checked="checked" value="1" name="customer_group_id">
                                            پیشفرض</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group required ">
                                <label for="username" class="col-sm-2 control-label">نام کاربری </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="username" placeholder="نام کاربری"
                                           value="<?php echo e(old('username',isset($userItem) ? $userItem->username : '')); ?>" name="username">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="F_name" class="col-sm-2 control-label"> نام کامل (فارسی)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="F_name" placeholder="نام"
                                           value="<?php echo e(old('F_name',isset($userItem) ? $userItem->F_name : '')); ?>" name="F_name">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="E_name" class="col-sm-2 control-label">نام کامل(انگلیسی)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="E_name"
                                           placeholder="نام خانوادگی" value="<?php echo e(old('E_name',isset($userItem) ? $userItem->E_name : '')); ?>" name="E_name">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="email" class="col-sm-2 control-label">آدرس ایمیل</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="آدرس ایمیل"
                                           value="<?php echo e(old('email',isset($userItem) ? $userItem->email : '')); ?>" name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="col-sm-2 control-label">شماره تلفن</label>
                                <div class="col-sm-10">
                                    <input type="tel" class="form-control" id="phone" placeholder="شماره تلفن" value="<?php echo e(old('phone',isset($userItem) ? $userItem->phone : '')); ?>"
                                           name="phone">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="role" class="col-sm-2 control-label">نوع کاربر</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="role" name="role">
                                        <option value="عادی" <?php echo e(isset($userItem) && $userItem->role == 'عادی'? 'selected' : ''); ?>>عادی</option>
                                        <option value="خواننده"<?php echo e(isset($userItem) && $userItem->role == 'خواننده'? 'selected' : ''); ?>>خواننده</option>

                                    </select>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset id="address">
                            <div class="form-group ">
                                <label for="city" class="col-sm-2 control-label">شهر</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="city" placeholder="شهر" value="<?php echo e(old('city',isset($userItem) ? $userItem->city : '')); ?>"
                                           name="city">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="state" class="col-sm-2 control-label">شهر / استان</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="state" name="state">
                                        <option value="تهران"<?php echo e(isset($userItem) && $userItem->state == 'تهران'? 'selected' : ''); ?>>تهران</option>
                                        <option value="اصفهان"<?php echo e(isset($userItem) && $userItem->state == 'اصفهان'? 'selected' : ''); ?>>اصفهان</option>
                                        <option value="آذربایجان شرقی"<?php echo e(isset($userItem) && $userItem->state == 'آذربایجان شرقی'? 'selected' : ''); ?>>آذربایجان شرقی</option>
                                        <option value="قم"<?php echo e(isset($userItem) && $userItem->state == 'قم'? 'selected' : ''); ?>>قم</option>
                                        <option value="فارس"<?php echo e(isset($userItem) && $userItem->state == 'فارس'? 'selected' : ''); ?>>فارس</option>
                                        <option value="مرکزی"<?php echo e(isset($userItem) && $userItem->state == 'مرکزی'? 'selected' : ''); ?>>مرکزی</option>
                                        <option value="کرمان"<?php echo e(isset($userItem) && $userItem->state == 'کرمان'? 'selected' : ''); ?>>کرمان</option>
                                        <option value="یزد"<?php echo e(isset($userItem) && $userItem->state == 'یزد'? 'selected' : ''); ?>>یزد</option>
                                        <option value="خراسان رضوی"<?php echo e(isset($userItem) && $userItem->state == 'خراسان رضوی'? 'selected' : ''); ?>>خراسان رضوی</option>
                                        <option value="خوزستان"<?php echo e(isset($userItem) && $userItem->state == 'خوزستان'? 'selected' : ''); ?>>خوزستان</option>
                                        <option value="کردستان"<?php echo e(isset($userItem) && $userItem->state == 'کردستان'? 'selected' : ''); ?>>کردستان</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group required">
                                <label for="password" class="col-sm-2 control-label">رمز عبور</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="password"
                                           placeholder="رمز عبور" name="password">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="confirm" class="col-sm-2 control-label">تکرار رمز عبور</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="confirm"
                                           placeholder="تکرار رمز عبور" name="confirm">
                                </div>
                            </div>
                        </fieldset>

                        <div class="buttons">
                            <div class="pull-right">

                                <input type="submit" class="btn btn-success" value="ذخیره اطلاعات">
                            </div>
                        </div>
                    </form>
                </div>
                <!--Middle Part End -->

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.users', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laramusic\resources\views/admin/user/edit.blade.php ENDPATH**/ ?>