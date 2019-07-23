<?php
/* Smarty version 3.1.33, created on 2019-07-22 21:36:50
  from 'C:\xampp\htdocs\big_business_20_2547\templates\mafateh.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d361052b19c34_07490418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edfd7450a8eb081eb85ab936297a1c276b869961' => 
    array (
      0 => 'C:\\xampp\\htdocs\\big_business_20_2547\\templates\\mafateh.tpl',
      1 => 1563823506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d361052b19c34_07490418 (Smarty_Internal_Template $_smarty_tpl) {
?>
		
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

 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
<option value='<?php echo $_smarty_tpl->tpl_vars['r']->value['Car_plate'];?>
'><?php echo $_smarty_tpl->tpl_vars['r']->value['Car_plate'];?>
</option>

 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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

<?php }
}
