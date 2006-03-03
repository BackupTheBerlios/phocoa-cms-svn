<?php /* Smarty version 2.6.12, created on 2006-02-28 14:14:51
         compiled from C:/web/helloworld/helloworld/modules/login/promptLogin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'WFShowErrors', 'C:/web/helloworld/helloworld/modules/login/promptLogin.tpl', 7, false),array('function', 'WFHidden', 'C:/web/helloworld/helloworld/modules/login/promptLogin.tpl', 9, false),array('function', 'WFTextField', 'C:/web/helloworld/helloworld/modules/login/promptLogin.tpl', 13, false),array('function', 'WFPassword', 'C:/web/helloworld/helloworld/modules/login/promptLogin.tpl', 17, false),array('function', 'WFSubmit', 'C:/web/helloworld/helloworld/modules/login/promptLogin.tpl', 20, false),array('function', 'WFURL', 'C:/web/helloworld/helloworld/modules/login/promptLogin.tpl', 25, false),array('block', 'WFForm', 'C:/web/helloworld/helloworld/modules/login/promptLogin.tpl', 8, false),)), $this); ?>
<?php if ($this->_tpl_vars['showLogin']): ?>
    <?php if ($this->_tpl_vars['showLoginMessage']): ?>
    <p>You must log in to access the requested page.</p>
    <?php endif; ?>

    <?php echo smarty_function_WFShowErrors(array(), $this);?>

    <?php $this->_tag_stack[] = array('WFForm', array('id' => 'loginForm')); $_block_repeat=true;smarty_block_WFForm($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <?php echo smarty_function_WFHidden(array('id' => 'continueURL'), $this);?>

        <table border="0">
            <tr>
                <td>Username:</td>
                <td><?php echo smarty_function_WFTextField(array('id' => 'username'), $this);?>
</td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><?php echo smarty_function_WFPassword(array('id' => 'password'), $this);?>
</td>
            </tr>
            <tr>
                <td colspan="2" align="center"><?php echo smarty_function_WFSubmit(array('id' => 'login'), $this);?>
</td>
            </tr>
        </table>
    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_WFForm($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  else: ?>
    <p><a href="<?php echo smarty_function_WFURL(array('page' => 'doLogout'), $this);?>
">Logout</a></p>
<?php endif; ?>