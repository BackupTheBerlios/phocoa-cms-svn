<?php /* Smarty version 2.6.12, created on 2006-02-26 17:40:41
         compiled from C:/web/helloworld/helloworld/skins/simple/simple2/template_normal.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'WFSkinCSS', 'C:/web/helloworld/helloworld/skins/simple/simple2/template_normal.tpl', 5, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<?php echo $this->_tpl_vars['skinHead']; ?>

<?php echo smarty_function_WFSkinCSS(array('file' => "main.css"), $this);?>

</head>
<body>
    <div id="header">
        <?php $_from = $this->_tpl_vars['skin']->namedContent('mainMenu'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['mainMenu'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['mainMenu']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['url']):
        $this->_foreach['mainMenu']['iteration']++;
?>
            <?php if (! ($this->_foreach['mainMenu']['iteration'] <= 1)): ?> | <?php endif; ?>
            <a href="<?php echo $this->_tpl_vars['url']; ?>
"><?php echo $this->_tpl_vars['name']; ?>
</a>
        <?php endforeach; endif; unset($_from); ?>
    </div>

    <div id="content">
    <?php echo $this->_tpl_vars['skinBody']; ?>

    </div>

    <div id="footer">
    <p><?php echo $this->_tpl_vars['skin']->namedContent('copyright'); ?>
</p>
    </div>
</body>
</html>