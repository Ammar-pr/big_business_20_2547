<?php
/* Smarty version 3.1.33, created on 2019-07-21 20:49:01
  from 'C:\xampp\htdocs\big_business_20_2547\templates\‏‏dispplyReportsConfirm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d34b39d945411_47165625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95ed2dd54d6417022617507a1c41b2f3641259a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\big_business_20_2547\\templates\\‏‏dispplyReportsConfirm.tpl',
      1 => 1561910112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d34b39d945411_47165625 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['request_status'];?>
</td>
</a></td>
    </tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>






  </tbody>
</table>
<br>



                <br>
<?php }
}
