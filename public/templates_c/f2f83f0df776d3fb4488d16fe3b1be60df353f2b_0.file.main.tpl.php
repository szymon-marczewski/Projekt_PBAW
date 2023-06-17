<?php
/* Smarty version 4.3.1, created on 2023-06-17 18:56:10
  from 'C:\xampp\htdocs\projekt\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_648de5aa871741_30807494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2f83f0df776d3fb4488d16fe3b1be60df353f2b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\templates\\main.tpl',
      1 => 1687020937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648de5aa871741_30807494 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>

<html>

<head>
	<title>Computer's World</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/main.css" />
</head>

<body class="is-preload">
	<div id="page-wrapper">

		<!-- Header -->
		<header id="header">
			<h1><a href="index.php">Computer's World</a></h1>
			<nav id="nav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
ProductsList">Products</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
OrdersList">Orders</a></li>
					<li>
						<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="pure-menu-heading pure-menu-link">Logout</a>
						<?php } else { ?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" class="pure-menu-heading pure-menu-link">Login</a>
						<?php }?>
					</li>
				</ul>
			</nav>
		</header>

		<!-- Banner -->
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2005240807648de5aa861ec8_61633791', 'top');
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92955760648de5aa863063_47497782', 'messages');
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_351116991648de5aa870c96_85866197', 'list');
?>

			<!-- CTA -->
			<section id="cta">

				<h2>Sign up for beta access</h2>
				<p></p>

				<form>
					<div class="row gtr-50 gtr-uniform">
						<div class="col-8 col-12-mobilep">
							<input type="email" name="email" id="email" placeholder="Email Address" />
						</div>
						<div class="col-4 col-12-mobilep">
							<input type="submit" value="Sign Up" class="fit" />
						</div>
					</div>
				</form>

			</section>

			<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
					<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
					<li><a href="#" class="icon brands fa-google-plus"><span class="label">Google+</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; Untitled. All rights reserved.</li>
					<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</footer>

	</div>

	<!-- Scripts -->
	<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
/* {block 'top'} */
class Block_2005240807648de5aa861ec8_61633791 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_2005240807648de5aa861ec8_61633791',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<section id="banner">
			<h2>Welcome!</h2>
			<p>If you are looking for the cheapest computer components on the market, you've come to the right place.
			</p>
			<ul class="actions special">
				<li><a href="products.php" class="button">Shop now</a></li>
			</ul>
		</section>

		<!-- Main -->
		<section id="main" class="container">

			<section class="box special">
				<header class="major">
					<h2>Store run for years with passion. </h2>
					<p>Thousands of positive opinions and satisfied customers. Join them!</p>
				</header>
				<span class="image featured"><img src="images/pic01.jpg" alt="" /></span>
			</section>
		</section>
		<?php
}
}
/* {/block 'top'} */
/* {block 'messages'} */
class Block_92955760648de5aa863063_47497782 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_92955760648de5aa863063_47497782',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


			<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
			<div class="messages bottom-margin">
				<ul>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
					<li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			</div>
			<?php }?>

			<?php
}
}
/* {/block 'messages'} */
/* {block 'list'} */
class Block_351116991648de5aa870c96_85866197 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'list' => 
  array (
    0 => 'Block_351116991648de5aa870c96_85866197',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php
}
}
/* {/block 'list'} */
}
