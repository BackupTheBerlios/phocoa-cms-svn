<?php /* Smarty version 2.6.12, created on 2006-02-26 17:44:12
         compiled from C:/web/helloworld/helloworld/modules/examples/concepts/formatters/example.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'WFLabel', 'C:/web/helloworld/helloworld/modules/examples/concepts/formatters/example.tpl', 2, false),array('modifier', 'escape', 'C:/web/helloworld/helloworld/modules/examples/concepts/formatters/example.tpl', 18, false),)), $this); ?>
Raw creation DTS: <?php echo smarty_function_WFLabel(array('id' => 'creationDTS'), $this);?>
<br />
Formatted creation DTS: <?php echo smarty_function_WFLabel(array('id' => 'formattedCreationDTS'), $this);?>
<br />
Raw wealth: $<?php echo smarty_function_WFLabel(array('id' => 'wealth'), $this);?>
<br />
Formatted wealth: $<?php echo smarty_function_WFLabel(array('id' => 'formattedWealth'), $this);?>
<br />

<?php ob_start();  echo '
Raw creation DTS: {WFLabel id="creationDTS"}<br />
Formatted creation DTS: {WFLabel id="formattedCreationDTS"}<br />
Raw wealth: ${WFLabel id="wealth"}<br />
Formatted wealth: ${WFLabel id="formattedWealth"}<br />
'; ?>

<?php $this->_smarty_vars['capture']['tplData'] = ob_get_contents(); ob_end_clean(); ?>

<h3>.tpl File</h3>
<pre>
<?php echo ((is_array($_tmp=$this->_smarty_vars['capture']['tplData'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

</pre>

<?php echo '
<h3>shared.instances File</h3>
<pre>
$__instances = array(
	\'unixDateFormatter\' => \'WFUNIXDateFormatter\',
	\'currencyFormatter\' => \'WFNumberFormatter\',
	\'person\' => \'WFObjectController\',
);
</pre>

<h3>shared.config File</h3>
<pre>
$__config = array(
	\'unixDateFormatter\' => array(
		\'properties\' => array(
			\'formatString\' => \'Y M d\',
		),
	),
	\'currencyFormatter\' => array(
		\'properties\' => array(
			\'decimalPlaces\' => \'0\',
		),
	),
	\'person\' => array(
		\'properties\' => array(
			\'class\' => \'Person\',
		),
	),
);
</pre>

<h3>.instances File</h3>
<pre>
$__instances = array(
	\'creationDTS\' => array(\'class\' => \'WFLabel\', \'children\' => array()),
	\'wealth\' => array(\'class\' => \'WFLabel\', \'children\' => array()),
	\'formattedCreationDTS\' => array(\'class\' => \'WFLabel\', \'children\' => array()),
	\'formattedWealth\' => array(\'class\' => \'WFLabel\', \'children\' => array()),
);
</pre>

<h3>.config File</h3>
<pre>
$__config = array(
	\'creationDTS\' => array(
		\'bindings\' => array(
			\'value\' => array(
				\'instanceID\' => \'person\',
				\'controllerKey\' => \'selection\',
				\'modelKeyPath\' => \'creationDTS\',
			),
		),
	),
	\'wealth\' => array(
		\'bindings\' => array(
			\'value\' => array(
				\'instanceID\' => \'person\',
				\'controllerKey\' => \'selection\',
				\'modelKeyPath\' => \'wealth\',
			),
		),
	),
	\'formattedCreationDTS\' => array(
		\'properties\' => array(
			\'formatter\' => \'#module#unixDateFormatter\',
		),
		\'bindings\' => array(
			\'value\' => array(
				\'instanceID\' => \'person\',
				\'controllerKey\' => \'selection\',
				\'modelKeyPath\' => \'creationDTS\',
			),
		),
	),
	\'formattedWealth\' => array(
		\'properties\' => array(
			\'formatter\' => \'#module#currencyFormatter\',
		),
		\'bindings\' => array(
			\'value\' => array(
				\'instanceID\' => \'person\',
				\'controllerKey\' => \'selection\',
				\'modelKeyPath\' => \'wealth\',
			),
		),
	),
);
</pre>

<h3>Module Code</h3>
<pre>
class formatters extends WFModule
{
    function defaultPage()
    {
        return \'example\';
    }

    function sharedInstancesDidLoad()
    {
        $this->person->setContent(Person::personByID(1));
    }
}
</pre>
'; ?>
