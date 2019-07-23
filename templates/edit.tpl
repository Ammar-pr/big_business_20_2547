
<form name="myForm" action="../htdocs/register.php?register=register" onsubmit="return validateForm()" method="post">
  <div class="container">
    <h1>update exist  User </h1>
     <a href="Manage_users.php" class="btn btn-success" role="button">back </a>

    <p>update screen .</p>
    <hr>

 
{if isset($user_types) && $user_types == 'HR'}
     {


    


    <label for="email"><b>Email</b></label>
    <input  class="email_user" type="email" name="email" value={$email}  required >

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password if you want to change it !" name="psw" >



    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="pswrepeat" >


    <label for="psw"><b>User Type</b></label>
</br>
<select  id="mySelect" name="mySelect"   required>
 <option value={$Validity}>{$Validity}</option>
  <option value="HR">HR</option>
  <option value="manager">Manger</option>
  <option value="assis_manager">Assistant manager</option>
  <option value="employee">Employee</option>
</select>
<br>

    <label for="pswm"><b>Management</b></label>
</br>
<select  id="Management" name="Management"   required>
 <option value={$management}>{$management}</option>
  <option value="Quality Management">Quality Management</option>
  <option value="Development Management">Development Management</option>
  <option value="Revenue Management">Revenue Management</option>
  <option value="financial management">financial management</option>

</select>





<br>
    <label for="secret_question"><b>secret question</b></label>
<br>

<select  id="secret_question" name="secret_question" > 
         <option value={$secret_question}>{$secret_question}</option>
    <option value="Mother's maiden name.">Mother's maiden name.</option> 
    <option value="Name of town where you were born.">Name of town where you were born.</option> 
    <option value="Name of first pet.">Name of first pet.</option> 
</select> 
<br>
    <label for="answer"><b>answer</b></label>
    <input   type="text" value={$answer} name="answer" required>

    <hr>


    <p> this is the form to update the data  <a href="#">Terms & Privacy</a>.</p>

 }
{elseif isset($user_types) && $user_types == 'assis_manager'}
    {
        <br>
    <label for="secret_question"><b>  Assistant manager  evaluation</b></label>
<br>
<select  id="assistant_evaluation" name="assistant_evaluation" > 
 <option value="Please select">Please select</option>

         <option value=1>1</option>
    <option value=2>2</option> 
    <option value=3>3</option> 
    <option value=4>4</option> 
 <option value=5>5</option> 

 <option value=6>6</option> 
<option value=7>7</option> 
<option value=8>8</option>
<option value=9>9</option>
<option value=10>10</option>

</select> 


    }

  {elseif isset($user_types) && $user_types == 'manager'}
    {        <br>
    <label for="secret_question"><b>   Manager  evaluation</b></label>
<br>
<select  id="manger_evaluation" name="manger_evaluation" > 
 <option value="Please select">Please select</option>

         <option value=1>1</option>
    <option value=2>2</option> 
    <option value=3>3</option> 
    <option value=4>4</option> 
 <option value=5>5</option> 

 <option value=6>6</option> 
<option value=7>7</option> 
<option value=8>8</option>
<option value=9>9</option>
<option value=10>10</option>

</select> 
} 
{elseif isset($user_types) && $user_types == 'employee'}
    {} 
{/if}

    <button type="submit" class="registerbtn">update </button>
  </div>
  
  <div class="container signin">
  </div>
</form>
