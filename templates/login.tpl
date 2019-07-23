
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

<script>
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

