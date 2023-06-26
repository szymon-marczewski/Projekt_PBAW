<?php
/* Smarty version 4.3.1, created on 2023-06-26 12:30:35
  from 'C:\xampp\htdocs\projekt\app\views\ProductsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_649968cb351527_38311961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f1139db75e96d154ef34ba0a0259275b6b32f8a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\ProductsList.tpl',
      1 => 1687775423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649968cb351527_38311961 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_923617690649968cb33d6e8_92406552', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_350876494649968cb342db5_34669171', 'list');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_923617690649968cb33d6e8_92406552 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_923617690649968cb33d6e8_92406552',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
productList">
	<legend>Search</legend>
	<fieldset>
		<input type="text" placeholder="manufacturer" name="sf_Manufacturer" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->Manufacturer;?>
" /><br />
		<button type="submit" class="pure-button pure-button-primary">Search</button>
	</fieldset>
</form>
</div>	

<?php
}
}
/* {/block 'top'} */
/* {block 'list'} */
class Block_350876494649968cb342db5_34669171 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'list' => 
  array (
    0 => 'Block_350876494649968cb342db5_34669171',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="bottom-margin">
<a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
productNew">+ New product</a>
</div>	
<br>
<b>Available products:</b>
<table id="tab_products" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>idProduct</th>
		<th>Manufacturer</th>
		<th>Model</th>
		<th>Type</th>
		<th>Price</th>
		<th>Description</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prod']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["idProduct"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["Manufacturer"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["Model"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["Type"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["Price"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["Description"];?>
</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
productEdit/<?php echo $_smarty_tpl->tpl_vars['p']->value['idProduct'];?>
">Edit  </a><a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
productDelete/<?php echo $_smarty_tpl->tpl_vars['p']->value['idProduct'];?>
">Delete  </a><a class="button-small pure-button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
productBuy/<?php echo $_smarty_tpl->tpl_vars['p']->value['idProduct'];?>
">Buy</a></td></tr>
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
