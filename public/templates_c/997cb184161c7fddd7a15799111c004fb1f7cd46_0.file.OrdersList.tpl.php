<?php
/* Smarty version 4.3.1, created on 2023-06-26 12:26:50
  from 'C:\xampp\htdocs\projekt\app\views\OrdersList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_649967ea8c1c99_38029359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '997cb184161c7fddd7a15799111c004fb1f7cd46' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\OrdersList.tpl',
      1 => 1687775156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649967ea8c1c99_38029359 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_849594800649967ea8b2f13_64081096', 'top');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_222320963649967ea8b4134_38632372', 'list');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_849594800649967ea8b2f13_64081096 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_849594800649967ea8b2f13_64081096',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<br>
<?php
}
}
/* {/block 'top'} */
/* {block 'list'} */
class Block_222320963649967ea8b4134_38632372 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'list' => 
  array (
    0 => 'Block_222320963649967ea8b4134_38632372',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<b>Your orders:</b>
<table id="tab_products" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>idOrder</th>
		<th>Manufacturer</th>
		<th>Model</th>
		<th>Price</th>
		<th>Date</th>
		<th>Status</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ord']->value, 'o');
$_smarty_tpl->tpl_vars['o']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->do_else = false;
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['o']->value["idOrder"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['o']->value["Manufacturer"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['o']->value["Model"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['o']->value["Price"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['o']->value["Date"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['o']->value["Status"];?>
</td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>

<?php
}
}
/* {/block 'list'} */
}
