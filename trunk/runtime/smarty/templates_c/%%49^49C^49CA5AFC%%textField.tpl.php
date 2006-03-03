<?php /* Smarty version 2.6.12, created on 2006-02-26 17:41:04
         compiled from C:/web/helloworld/helloworld/modules/examples/widgets/textField.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'WFTextField', 'C:/web/helloworld/helloworld/modules/examples/widgets/textField.tpl', 5, false),)), $this); ?>

<p>WFTextField is a simple text field.</p>

<?php echo smarty_function_WFTextField(array('id' => 'name'), $this);?>


<?php echo '
<hr>
<h3>.tpl file</h3>
<pre>
{WFTextField id="name"}
</pre>

<h3>.instances file</h3>
<pre>
$__instances = array(
	\'name\' => array(\'class\' => \'WFTextField\', \'children\' => array()),
);
</pre>

<h3>.config file</h3>

<pre>
$__config = array(
	\'name\' => array(
		\'bindings\' => array(
			\'value\' => array(
				\'instanceID\' => \'person\',
				\'controllerKey\' => \'selection\',
				\'modelKeyPath\' => \'name\',
			),
		),
	),
);
</pre>

<h3>Module Code</h3>
<pre>
none
</pre>
'; ?>

