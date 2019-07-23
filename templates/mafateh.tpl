
		
<center><h1 >نموذج بلاغ عن حالة السيارة</h1></center>
<hr>

<form  action="saveCarStatus.php" name="form" method="post" onsubmit="return validateForm()" >
<center>
<table align="center" border=10PX>
		 





<th><h2> اختيار السيارة  </h2></th>
<tr>

  <td>
 <select  id="car_info"  name="car_info" required>
     <option value"الرجاء الاختيار"> الرجاء الاختيار</option>

 {foreach $users as $r}
<option value='{$r.Car_plate}'>{$r.Car_plate}</option>

 {/foreach}
</select> 
  </td>  
</tr>
  <th><h2> حالة السيارة  </h2></th>
    <tr>

  <td>
 <select  id="car_status"  name="car_status" required>
    <option value"الرجاء الاختيار"> الرجاء الاختيار</option>
 <option value"حادث"> حادث</option>
  <option value"نظافة"> نظافة</option>
   <option value"صيانة"> صيانة</option>

</select> 
</td>
 </tr>
  
  
  
  
  
    <th><h2> البنزين  </h2></th>
    <tr>

  <td>
 <select  id="fuel"  name="fuel" required>
    <option value"الرجاء الاختيار"> الرجاء الاختيار</option>
 <option value"95"> 95</option>
  <option value"90"> 90</option>

</select> 
</td>
 </tr>
  
  
  
     <tr>

  <td>
   اسم المدربة
<input type="text" value="" name="Name_of_Trainer" required>
</td>
 </tr>
  
  
  
  
  
  
    
  <th><h2> الفترة  </h2></th>
  <tr>
   <td>
 <select id="period"  name="period" required>
    <option value"الرجاء الاختيار"> الرجاء الاختيار</option>
 <option value""> 8 - 12 - مساء</option>
  <option value""> 8 - 12 - صباح</option>
  <option value""> 12 - 6 - صباح</option>
    <option value""> 12 - 6 - مساء</option>
  <option value""> 6 - 12 - صباح</option>


</select>   
  </td>
  
   </tr>
  
  
  
  <td><input type="submit" value="Submit"></td>

  
  </form>	

</table>

