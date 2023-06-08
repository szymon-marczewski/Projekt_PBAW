<?php
/* Smarty version 4.3.1, created on 2023-06-08 17:42:22
  from 'C:\xampp\htdocs\projekt\app\views\ProductsEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6481f6de189c17_57838731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7acd1b252b12128418a784e030b7aa8dfb28ab0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\ProductsEdit.tpl',
      1 => 1686238088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6481f6de189c17_57838731 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2545342346481f6de182da5_34193770', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_2545342346481f6de182da5_34193770 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_2545342346481f6de182da5_34193770',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
productSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>New product</legend>
		<div class="pure-control-group">
            <label for="idProduct">idProduct</label>
            <input id="idProduct" type="text" placeholder="idProduct" name="idProduct" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->idProduct;?>
">
        </div>
		<div class="pure-control-group">
            <label for="manufacturer">manufacturer</label>
            <input id="manufacturer" type="text" placeholder="manufacturer" name="Manufacturer" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Manufacturer;?>
">
        </div>
		<div class="pure-control-group">
            <label for="model">model</label>
            <input id="model" type="text" placeholder="model" name="Model" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Model;?>
">
        </div>
        <div class="pure-control-group">
            <label for="type">type</label>
            <input id="type" type="text" placeholder="type" name="Type" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Type;?>
">
        </div>
        <div class="pure-control-group">
            <label for="price">price</label>
            <input id="price" type="text" placeholder="price" name="Price" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Price;?>
">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Save"/>
			<a class="pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
productList">Back</a>
		</div>
	</fieldset>
</form>	
</div>

<?php
}
}
/* {/block 'top'} */
}
