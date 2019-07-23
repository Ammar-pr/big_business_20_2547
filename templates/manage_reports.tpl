
<center><h2>تقارير الحالة والطلبات </h2></center>
 <br>
 <ol class="breadcrumb">
  <li class="breadcrumb-item active"></li>
</ol>
<table  class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">رقم الطلب</th>
      <th scope="col">لوحة السيارة</th>
      <th scope="col">الفترة</th>
        <th scope="col">البنزين</th>
         <th scope="col">رمز مدخل الطلب</th>
		  <th scope="col">حالة الطلب</th>
		  <th scope="col"> تأكيد الحالة </th>
  <th scope="col"> المدربة </th>
    </tr>
  </thead>
  <tbody>
{foreach $rows as $row}
    <tr>
      <th scope="row">{$row.id}</th>
      <td>{$row.Car_plate}</td>
      <td>{$row.car_period}</td>
	  <td>{$row.fuel}</td>
	  <td>{$row.ex_id}</td>
        <td>{$row.car_status}</td>
		 <td><a  href="update.php?id={$row.id}"   onclick="return confirm('هل انت متأكد من أنك تريد تأكيد هذه السحالة ؟');" > 
تأكيدd
</a></td>
    </tr>
{/foreach}






  </tbody>
</table>
<br>

 <h3>  
<center><a href="update.php?updateall='updateall'" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">تأكيد جميع الحالات</a></center>
				   
                     <br /><br />  
                     <div class="row" id="show_product">  
                      
                     </div>  
                </h3>

                <br>

