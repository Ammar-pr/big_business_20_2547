
<center><h2> التقرير بعد موافقة المركبات </h2></center>
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
		    <th scope="col">اسم المدربة</th>
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
        <td>{$row.request_status}</td>
</a></td>

<td>{$row.Name_of_Trainer}</td>
    </tr>
{/foreach}






  </tbody>
</table>
<br>



                <br>
