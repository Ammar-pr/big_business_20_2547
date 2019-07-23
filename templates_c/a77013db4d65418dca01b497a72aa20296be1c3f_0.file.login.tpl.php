<?php
/* Smarty version 3.1.33, created on 2019-07-21 20:42:55
  from 'C:\xampp\htdocs\big_business_20_2547\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d34b22f076f03_25398539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a77013db4d65418dca01b497a72aa20296be1c3f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\big_business_20_2547\\templates\\login.tpl',
      1 => 1546098128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d34b22f076f03_25398539 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <link rel="stylesheet" href="../css/login.css">

<h2>تسجيل الدخول</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">تسجيل دخول</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post" action="../htdocs/login.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    <!-- You will not be able to see this text. 



      <img src="img_avatar2.jpg" alt="" class="avatar">

-->
    </div>

    <div class="container">
      <label for="uname"><b>اسم المستخدم</b></label>
      <input type="text" placeholder="اسم الستخدم" name="uname" required>

      <label for="psw"><b>كلمة المرور</b></label>
      <input type="password" placeholder="كلمة المرور" name="psw" required>
        
      <button type="submit">دخول</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> تذكرني
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">نسيان كلمة المرور <a href="#">نسيان كلمة المرور?</a></span>
    </div>
  </form>
</div>

<?php echo '<script'; ?>
>
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
<?php echo '</script'; ?>
>

<?php }
}
