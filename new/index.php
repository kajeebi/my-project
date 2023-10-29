<?php 
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';

?>

<?php include_once 'parts/header.php'; ?>


 <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <img src="images/kh1.jpg" wi alt="">
      <h1 class="display-4 fw-normal">اربح مع خالد</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <h3 id="demo"></h3>
      <p class="lead fw-normal">للفوز بأيفون مجانا</p>
      
    </div>
    
  </div>
  <div class="position-relative  text-center bg-light">   
<div class="form-floating mb-3">
</div>
<div class="form-floating">
</div>
 <h2>للفوز بالسحب الرجاء اتبع ما يلي</h2>
  <ul class="list-group list-group-flush">
  <li class="list-group-item">تابع البث المباشرعلى صفحتي على فيسبوك بالتاريخ المذكور اعلاه</li>
  <li class="list-group-item"> ساقوم ببث مباشر لمده ساعه عباره عن اسئله واجوبه حره للجميع</li>
  <li class="list-group-item">خلال فتره ساعه سيتم فتح صفحه التسجيل هنا حيث ستقوم بتسجيل اسمك و ايمليك</li>
  <li class="list-group-item">بنهايه البث سيتم اختيار اسم واحد من قاعده البيانات بشكل عشوائي </li>
  <li class="list-group-item">الرابح سيحصل على الايفون المجاني</li>
</ul>


<form class="mt-5" action="<?php $_SERVER['PHP_SELF']?>" method="POST">
    <h3>الرجاء ادخل معلوماتك</h3>
  <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الاول</label>
    <input type="text" name="firstName" class="form-control" id="firstName" value="<?php echo $firstName?>">
    <div  class="form-text error"><?php echo $errors['firstNameError']?></div>
  </div>

  <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastName"  class="form-control" id="lastName" value="<?php echo $lastName?>">
    <div  class="form-text error"><?php echo $errors['lastNameError']?></div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">البريد الالكتروني</label>
    <input type="text"  name="email" class="form-control" id="email" value="<?php echo $email?>">
    <div  class="form-text error"><?php echo $errors['emailError']?></div>
  </div>
 
  <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
</form>
</div>
  </div>
<br>

<div class="loader-con">
   <div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
   </div>
</div>
<!--         data-bs-toggle="modal" data-bs-target="#Modal"-->
<div class="d-grid gap-2 col-3 mx-auto my-5">
<button type="button" class="btn btn-primary" id="winner" >
 اختيارالرابح
</button>
</div>
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        
        <h5 class="modal-title" id="ModalLabel" > الرابح في المسابقة</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user) : ?>
        <h1 class=" display-1 text-center modal-title" id="ModalLabel" ><?php echo htmlspecialchars($user['firstName']).'  '. htmlspecialchars($user['lastName']) ?></h1>
        <?php endforeach;  ?>
      </div>
     
    </div>
  </div>
</div>

<!--
<div id= "cards"  class="row mb-5 pb-5">

   
      <div class="col-sm-6">
         <div class="card my-2 bg-light">
              <div class="card-body">
<h5 class="card-title">></h5>
      <P class="crad-text"><?php echo htmlspecialchars($user['email'])?></p>
    </div>
    </div>
    </div>

  </div>
      -->
<?php include_once './parts/footer.php';?>
    