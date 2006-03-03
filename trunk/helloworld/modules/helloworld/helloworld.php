<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */

class helloworld extends WFModule
{
    function defaultPage()
    {
        return 'helloworld';
    }

    function helloWorld_submit_Action($page) {
//        $myTextField = $page->outlet('email');
        $this->email->send();
        $this->setupResponsePage('emailSuccess');
    }
    
    function helloWorld_SetupSkin($skin){
        $skin->setTitle("Hello, World, from PHOCOA!");
        $skin->addMetaKeywords(array('keyword 1', 'keyword 2'));
        $skin->setMetaDescription('Hello world example module in PHOCOA.');
    }
    // Uncomment additional functions as needed
//    function sharedInstancesDidLoad()
//    {
//    }
//
//    function helloworld_ParameterList()
//    {
//        return array();
//    }
//
//    function helloworld_SetupSkin($skin)
//    {
//    }
//
//    function helloworld_PageDidLoad($page, $params)
//    {
//    }
}

class ExampleEmail extends WFObject {
    protected $toEmail;
    protected $subject;
    protected $message;
    protected $sendTimestamp;
    
    function send()    {
        //        $sent = mail( $this->toEmail, $this->subject, $this->message );
        $this->sendTimestamp = time();
        $sent = "ok";
        return $sent;
    }

    function validateToEmail(&$value, &$edited, &$errors) {
        $value = trim($value);
        $edited = true;
        if (preg_match("/[A-z0-9._-]+@[A-z0-9-]+\.[A-z0-9-\.]*[A-z]+$/", $value) == true) return true;
        $errors[] = new WFError("The email you entered is not a properly formatted");
        return false;
    }

    function validateSubject(&$value, &$edited, &$errors){
        $value = trim($value);
        $edited = true;
        if ($value != '') return true;
        $errors[] = new WFError("The subject cannot be blank.");
        return false;
    }
}
?>
