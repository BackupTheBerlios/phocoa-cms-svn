<?php /* Smarty version 2.6.12, created on 2006-02-26 17:42:01
         compiled from C:/web/helloworld/helloworld/modules/examples/widgets/jumpSelect.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'WFJumpSelect', 'C:/web/helloworld/helloworld/modules/examples/widgets/jumpSelect.tpl', 5, false),)), $this); ?>

<p>The WFJumpSelect is a subclass of WFSelect that adds "redirect on select" functionality via javascript.</p>

<?php echo smarty_function_WFJumpSelect(array('id' => 'city'), $this);?>


<?php echo '
<hr>
<h3>.tpl file</h3>
<pre>
{WFJumpSelect id="city"}
</pre>
    
<h3>.instances file</h3>
<pre>
$__instances = array(
	\'city\' => array(\'class\' => \'WFJumpSelect\', \'children\' => array()),
);
</pre>
    
<h3>.config file</h3>
<pre>
$__config = array(
	\'city\' => array(
		\'properties\' => array(
			\'baseURL\' => \'http://google.com/search?q=\',
		),
		\'bindings\' => array(
			\'contentLabels\' => array(
				\'instanceID\' => \'cities\',
				\'controllerKey\' => \'arrangedObjects\',
				\'modelKeyPath\' => \'name\',
				\'options\' => array(
					\'NullPlaceholder\' => \'Select a city to search for...\',
					\'InsertsNullPlaceholder\' => \'true\',
				),
			),
			\'contentValues\' => array(
				\'instanceID\' => \'cities\',
				\'controllerKey\' => \'arrangedObjects\',
				\'modelKeyPath\' => \'name\',
				\'options\' => array(
					\'InsertsNullPlaceholder\' => \'true\',
				),
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

