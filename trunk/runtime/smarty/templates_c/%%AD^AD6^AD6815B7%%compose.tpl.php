<?php /* Smarty version 2.6.12, created on 2006-02-26 17:45:04
         compiled from C:/web/helloworld/helloworld/modules/examples/emailform/compose.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'WFShowErrors', 'C:/web/helloworld/helloworld/modules/examples/emailform/compose.tpl', 12, false),array('function', 'WFTextField', 'C:/web/helloworld/helloworld/modules/examples/emailform/compose.tpl', 16, false),array('function', 'WFTextArea', 'C:/web/helloworld/helloworld/modules/examples/emailform/compose.tpl', 18, false),array('function', 'WFSubmit', 'C:/web/helloworld/helloworld/modules/examples/emailform/compose.tpl', 19, false),array('block', 'WFForm', 'C:/web/helloworld/helloworld/modules/examples/emailform/compose.tpl', 15, false),array('modifier', 'escape', 'C:/web/helloworld/helloworld/modules/examples/emailform/compose.tpl', 58, false),)), $this); ?>
<p>Simple email module showcases many PHOCOA features. Code below.</p>

<ul>
    <li>Form creation.</li>
    <li>Action handlers.</li>
    <li>Validation - Notice how there are no calls in code to validate. This is done automatically via Key-Value Validation concept.</li>
    <li>Error management - Try entering invalid data. Notice how the system autmatically tracks errors per-field and per-form.</li>
    <li>Bindings - notice how there is no code to move the data from the form to the ExampleEmail object. This is all done via Bindings which are configured graphically (or in a text file).</li>
    <li>Adjusting page title for each page. This is part of the skin infrastructure.</li>
</ul>

<?php echo smarty_function_WFShowErrors(array(), $this);?>


<table border="0">
<?php $this->_tag_stack[] = array('WFForm', array('id' => 'form')); $_block_repeat=true;smarty_block_WFForm($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <tr><td valign="top">To Email:</td><td><?php echo smarty_function_WFTextField(array('id' => 'email'), $this);?>
<br /> <?php echo smarty_function_WFShowErrors(array('id' => 'email'), $this);?>
</td></tr>
    <tr><td valign="top">Subject:</td><td><?php echo smarty_function_WFTextField(array('id' => 'subject'), $this);?>
<br /> <?php echo smarty_function_WFShowErrors(array('id' => 'subject'), $this);?>
</td></tr>
    <tr><td valign="top">Message:</td><td><?php echo smarty_function_WFTextArea(array('id' => 'message'), $this);?>
<br /></td></tr>
    <?php echo smarty_function_WFSubmit(array('id' => 'submit'), $this);?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_WFForm($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</table>

<hr>

<p>Shared instances are objects that are shared among two or more pages in a module. The shared instances mechanism allows multi-page processes to easily share the same instances. For this module, we have 2 shared instances, a WFUNIXDateFormatter, and our ExampleEmail object. PHOCOA automatically instantiates shared objects as members of your module subclass.</p>
<h3>shared.instances file</h3>
<pre>
$__instances = array(
	'dateSentFormatter' => 'WFUNIXDateFormatter',
	'email' => 'ExampleEmail',
);
</pre>
<h3>shared.config file</h3>
<pre>
$__config = array(
	'dateSentFormatter' => array(
		'properties' => array(
			'formatString' => 'F j, Y, g:i a',
		),
	),
);
</pre>

<?php ob_start();  echo '
<table border="0">
{WFForm id="form"}
    <tr><td valign="top">To Email:</td><td>{WFTextField id="email"}<br /> {WFShowErrors id="email"}</td></tr>
    <tr><td valign="top">Subject:</td><td>{WFTextField id="subject"}<br /> {WFShowErrors id="subject"}</td></tr>
    <tr><td valign="top">Message:</td><td>{WFTextArea id="message"}<br /></td></tr>
    {WFSubmit id="submit"}
{/WFForm}
</table>
'; ?>

<?php $this->_smarty_vars['capture']['emailTPL'] = ob_get_contents(); ob_end_clean(); ?>
<h3>.tpl file</h3>
<pre>
<?php echo ((is_array($_tmp=$this->_smarty_vars['capture']['emailTPL'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

</pre>
    
<h3>.instances file</h3>
<pre>
$__instances = array(
	'form' => array('class' => 'WFForm', 'children' => array(
        'subject' => array('class' => 'WFTextField', 'children' => array()),
        'message' => array('class' => 'WFTextArea', 'children' => array()),
        'submit' => array('class' => 'WFSubmit', 'children' => array()),
        'email' => array('class' => 'WFTextField', 'children' => array()),
        )
    ),
);
</pre>
    
<h3>.config file</h3>
<pre>
$__config = array(
	'subject' => array(
		'properties' => array(
			'size' => '50',
		),
		'bindings' => array(
			'value' => array(
				'instanceID' => 'email',
				'controllerKey' => '',
				'modelKeyPath' => 'subject',
			),
		),
	),
	'message' => array(
		'properties' => array(
			'rows' => '10',
			'cols' => '50',
		),
		'bindings' => array(
			'value' => array(
				'instanceID' => 'email',
				'controllerKey' => '',
				'modelKeyPath' => 'message',
			),
		),
	),
	'submit' => array(
		'properties' => array(
			'label' => 'Send Email',
		),
	),
	'email' => array(
		'properties' => array(
			'size' => '50',
		),
		'bindings' => array(
			'value' => array(
				'instanceID' => 'email',
				'controllerKey' => '',
				'modelKeyPath' => 'toEmail',
			),
		),
	),
);
</pre>

<h3>Module Code</h3>
<pre>
<?php echo '
class ExampleEmail extends WFObject
{
    protected $toEmail;
    protected $subject;
    protected $message;
    protected $sendTimestamp;

    function send()
    {
        $sent = mail( $this->toEmail, $this->subject, $this->message );
        $this->sendTimestamp = time();
        return $sent;
    }

    function validateToEmail(&$value, &$edited, &$errors)
    {
        $value = trim($value);
        $edited = true;
        if (preg_match("/[A-z0-9._-]+@[A-z0-9-]+\\.[A-z0-9-\\.]*[A-z]+$/", $value) == 1) return true;

        $errors[] = new WFError("The email you entered is not a properly formatted email address.");
        return false;
    }

    function validateSubject(&$value, &$edited, &$errors)
    {
        $value = trim($value);
        $edited = true;
        if ($value != \'\') return true;
        
        $errors[] = new WFError("The subject cannot be blank.");
        return false;
    }
}

class emailform extends WFModule
{
    /**
      * Tell system which page to show if none specified.
      */
    function defaultPage() { return \'compose\'; }

    function compose_submit_Action($page)
    {
        $this->email->send();
        $this->setupResponsePage(\'emailSuccess\');
    }

    function compose_SetupSkin($skin)
    {
        $skin->setTitle("Compose an email.");
    }

    function emailSuccess_SetupSkin($skin)
    {
        $skin->setTitle("Email sent successfully.");
    }
}
'; ?>

</pre>