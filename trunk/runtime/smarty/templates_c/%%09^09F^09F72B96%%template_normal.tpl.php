<?php /* Smarty version 2.6.12, created on 2006-02-28 14:12:22
         compiled from C:/web/helloworld/helloworld/skins/simple/simple1/template_normal.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<?php echo $this->_tpl_vars['skinHead']; ?>

</head>
<body style="background-color: gray; color: white;">
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

    <div style="width: 80%; margin: 15px auto; border: 2px solid brown; padding: 10px">
    <?php echo $this->_tpl_vars['skinBody']; ?>

    </div>

    <div id="footer">
    <p style="font-size: small;"><?php echo $this->_tpl_vars['skin']->namedContent('copyright'); ?>
</p>
    </div>
</body>
</html>