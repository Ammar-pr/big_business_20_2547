<?php
/* Smarty version 3.1.33, created on 2019-07-21 20:48:28
  from 'C:\xampp\htdocs\big_business_20_2547\templates\manage_reports.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d34b37c100f82_77294800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26781e190c9373457325898539a3e675810d7167' => 
    array (
      0 => 'C:\\xampp\\htdocs\\big_business_20_2547\\templates\\manage_reports.tpl',
      1 => 1561658098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d34b37c100f82_77294800 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
    </tr>
  </thead>
  <tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
    <tr>
      <th scope="row"><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</th>
      <td><?php echo $_smarty_tpl->tpl_vars['row']->value['Car_plate'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['row']->value['car_period'];?>
</td>
	  <td><?php echo $_smarty_tpl->tpl_vars['row']->value['fuel'];?>
</td>
	  <td><?php echo $_smarty_tpl->tpl_vars['row']->value['ex_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['car_status'];?>
</td>
		 <td><a  href="update.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"   onclick="return confirm('هل انت متأكد من أنك تريد تأكيد هذه السحالة ؟');" > 
تأكيد
</a></td>
    </tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>






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

<?php }
}
