<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';

?>

<div class="container">


  <?php include_once './parts/header.php'; ?>

  <div class="container">

    <div class="position-relative overflow-hidden text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto ">
        
        <p class="lead fw-normal">مسابقة عبدالعزيز شارك الان</p>

        <p class="text-secondary">
          اشترك الآن وساهم في المسابقة للحصول على فرصة الفوز بجوائز قيمة! لا تفوت الفرصة وكن من المشاركين الأوائل.
        </p>
        

        <ul class="list-group list-group-flush">
          <li class="list-group-item">شروط المسابقة:</li>
          <li class="list-group-item">التسجيل في هذه الصفحه</li>
          <p class="text-muted" style="font-size: 12px; margin-top: 10px;">
  سيتم استخدام معلوماتك فقط لأغراض المسابقة ولن يتم مشاركتها مع أي جهة خارجية.
</p>

          <li class="list-group-item">تبقى على السحب</li>
        </ul>

        <h3 id="#countdown"></h3>
      </div>
    </div>

    <div class="  text-blac rounded ">
      <div class="col-md-6 px-0">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
          <h3> التسجيل </h3>
          <div class="mb-3">
            <label for="firstname" class="form-label">الاسم الاول</label>
            <input type="text" name="firstname" id="firstname" class="form-control">
            <div class="form-text error"><?php echo $errors['firstnameError'] ?></div>
          </div>

          <div class="mb-3">
            <label for="lastname" class="form-label">الاسم الاخير</label>
            <input type="text" name="lastname" id="lastname" class="form-control">
            <div class="form-text error"><?php echo $errors['lastnameError'] ?></div>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">الايميل</label>
            <input type="text" name="email" id="email" class="form-control">
            <div class="form-text error"><?php echo $errors['emailError'] ?></div>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="agree" name="agree" checked>
            <label class="form-check-label" for="agree">أوافق على شروط المسابقة </label>
          </div>
          <button type="submit" type="submit" class="btn btn-primary">ارسال</button>
        </form>





        <div class="looder-con">
          <div id="loader">
            <canvas id="circularLoader" width="200" height="200"></canvas>
          </div>
        </div>
        <!-- Button trigger modal -->
        <div class="d-grid gap-2 col6 mx-auto my-3">
          <button type="button" id="winner" class="btn btn-primary">
            الرابح في المسابقة
          </button>
        </div>
        <!-- Modal -->

        <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header" style="background-color:#B63346;">
                <h5 id="winnerName" style="color:white; ">الرابح في المسابقة</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <?php

                foreach ($users as $user): ?>


                <?php endforeach; ?>
                <h5 class="display-4 text-center modal-title display-3 text-center" id="modal" style="color:black;">
                  <?php echo htmlspecialchars($user['firstname']) . ' ' . htmlspecialchars($user['lastname']); ?>
                </h5>
              </div>
            </div>


          </div>

        </div>
      </div>
    </div>
  </div>
</div>





<div class="text-center mt-5 mb-4 text-muted" style="font-size: 14px;">
  <footer class="text-center mt-5 py-3 text-muted" style="font-size: 12px;">
    تطوير الموقع بواسطة <strong>عبدالعزيز</strong> | نسخة تجريبية
</footer>
    <p>© 2026 جميع الحقوق محفوظة لمسابقة عبدالعزيز.</p>
    <p>
        <a href="#" style="color: #B63346; text-decoration: none;">سياسة الخصوصية</a> |
        <a href="" style="color: #B63346; text-decoration: none;">شروط الاستخدام</a>
    </p>
</div>



<?php include_once './parts/footer.php'; ?>
</div>