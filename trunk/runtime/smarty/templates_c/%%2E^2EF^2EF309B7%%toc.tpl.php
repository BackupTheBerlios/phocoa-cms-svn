<?php /* Smarty version 2.6.12, created on 2006-02-26 17:40:40
         compiled from C:/web/helloworld/helloworld/modules/examples/widgets/toc.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'WFURL', 'C:/web/helloworld/helloworld/modules/examples/widgets/toc.tpl', 10, false),)), $this); ?>
<h2>Examples of all Widgets: Table of Contents</h2>

<p>All examples use the same data model for consistency. There is a <b>Person</b> object and a <b>City</b> object. Person has many attributes, one of which, city, is a link to a city object.</p>

<p>Code is included with each example.</p>

<h3>Widget Examples</h3>
<p>The examples below demonstrate how to use each widget, and how to bind the widget's data to a model object. For these examples, there are two shared instances, <b>person</b> and <b>cities</b>. Person is a WFObjectController object with its content set to a single person instance. Cities is a WFObjectController with its content set to a list of all cities. This is a typical setup for a PHOCOA web page.</p> 
<p>Each example below is a different page of the same module. The module's shared setup source is <a href="<?php echo smarty_function_WFURL(array('page' => 'sharedSetup'), $this);?>
">here</a>.</p>
<ul>
    <li><a href="<?php echo smarty_function_WFURL(array('page' => 'textField'), $this);?>
">WFTextField</a></li>
    <li><a href="<?php echo smarty_function_WFURL(array('page' => 'textArea'), $this);?>
">WFTextArea</a></li>
    <li><a href="<?php echo smarty_function_WFURL(array('page' => 'htmlArea'), $this);?>
">WFHTMLArea</a></li>
    <li><a href="<?php echo smarty_function_WFURL(array('page' => 'select'), $this);?>
">WFSelect</a></li>
    <li><a href="<?php echo smarty_function_WFURL(array('page' => 'jumpSelect'), $this);?>
">WFJumpSelect</a></li>
    <li><a href="<?php echo smarty_function_WFURL(array('page' => 'radios'), $this);?>
">WFRadioGroup with WFDynamic WFRadio's</a></li>
    <li><a href="<?php echo smarty_function_WFURL(array('page' => 'simpleForm'), $this);?>
">Putting it all together: A simple form with multiple widgets</a></li>
</ul>

<h3>Advanced Features</h3>
<p>Each of these examples is set up as its own stand-alone example module.</p>
<ul>
    <li><a href="<?php echo smarty_function_WFURL(array('module' => "/examples/concepts/pagination"), $this);?>
">Pagination</a></li>
    <li><a href="<?php echo smarty_function_WFURL(array('module' => "/examples/concepts/formatters"), $this);?>
">Formatters</a></li>
    <li><a href="<?php echo smarty_function_WFURL(array('module' => "/examples/concepts/bindings"), $this);?>
">Bindings - Binding Options and Multi-Value Bindings</a></li>
</ul>