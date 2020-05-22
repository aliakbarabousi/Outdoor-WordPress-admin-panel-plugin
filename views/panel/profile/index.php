<div class="row">
    <div class="col-md-12">
        <div class="basic-form p-10">
            <form action="" method="post">
                <div class="form-group">
                    <label for="userFullName">نام و نام خانوادگی</label>
                    <input id="userFullName" name="userFullName" type="text" value="<?php echo $user_name?>"
                           class="form-control input-default hasPersianPlaceHolder"
                    >
                </div>
                <div class="form-group">
                    <label for="userEmail">آدرس ایمیل</label>
                    <input id="userEmail" name="userEmail" type="text" value="<?php echo $user_email?>"
                           class="form-control input-default hasPersianPlaceHolder" autocomplete="off" disabled>
                </div>
                <div class="form-password">
                    <lable for="pass">رمز عبور</lable>
                    <input id="pass" type="text" name="userPassword" value="<?php echo $user_pass?>"
                           class="form-control input-default hasPersianPlaceHolder" />
                </div>
                <div class="form-group m-t-20">
                    <button type="submit" name="saveData" class="btn btn-primary m-b-10 m-l-5">ثبت اطلاعات
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>