<?php 
  require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php'; 
  require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php'; 
  require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php'; 
  require_once PATH_TRUNK . 'gulliver/system/class.controller.php'; 

  /** 
   * Generated by ProcessMaker Test Unit Generator on 2012-05-10 at 20:39:56.
  */ 

  class classControllerTest extends PHPUnit_Framework_TestCase 
  { 
    /**
    * @covers Controller::__set
    * @todo   Implement test__set().
    */
    public function test__set() 
    { 
        if (class_exists('Controller')) {
             $methods = get_class_methods( 'Controller');
            $this->assertTrue( in_array( '__set', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Controller::__get
    * @todo   Implement test__get().
    */
    public function test__get() 
    { 
        if (class_exists('Controller')) {
             $methods = get_class_methods( 'Controller');
            $this->assertTrue( in_array( '__get', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Controller::__isset
    * @todo   Implement test__isset().
    */
    public function test__isset() 
    { 
        if (class_exists('Controller')) {
             $methods = get_class_methods( 'Controller');
            $this->assertTrue( in_array( '__isset', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Controller::__unset
    * @todo   Implement test__unset().
    */
    public function test__unset() 
    { 
        if (class_exists('Controller')) {
             $methods = get_class_methods( 'Controller');
            $this->assertTrue( in_array( '__unset', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Controller::setResponseType
    * @todo   Implement testsetResponseType().
    */
    public function testsetResponseType() 
    { 
        if (class_exists('Controller')) {
             $methods = get_class_methods( 'Controller');
            $this->assertTrue( in_array( 'setResponseType', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Controller::call
    * @todo   Implement testcall().
    */
    public function testcall() 
    { 
        if (class_exists('Controller')) {
             $methods = get_class_methods( 'Controller');
            $this->assertTrue( in_array( 'call', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Controller::setHttpRequestData
    * @todo   Implement testsetHttpRequestData().
    */
    public function testsetHttpRequestData() 
    { 
        if (class_exists('Controller')) {
             $methods = get_class_methods( 'Controller');
            $this->assertTrue( in_array( 'setHttpRequestData', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Controller::setDebug
    * @todo   Implement testsetDebug().
    */
    public function testsetDebug() 
    { 
        if (class_exists('Controller')) {
             $methods = get_class_methods( 'Controller');
            $this->assertTrue( in_array( 'setDebug', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Controller::getDebug
    * @todo   Implement testgetDebug().
    */
    public function testgetDebug() 
    { 
        if (class_exists('Controller')) {
             $methods = get_class_methods( 'Controller');
            $this->assertTrue( in_array( 'getDebug', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Controller::includeExtJSLib
    * @todo   Implement testincludeExtJSLib().
    */
    public function testincludeExtJSLib() 
    { 
        if (class_exists('Controller')) {
             $methods = get_class_methods( 'Controller');
            $this->assertTrue( in_array( 'includeExtJSLib', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Controller::includeExtJS
    * @todo   Implement testincludeExtJS().
    */
    public function testincludeExtJS() 
    { 
        if (class_exists('Controller')) {
             $methods = get_class_methods( 'Controller');
            $this->assertTrue( in_array( 'includeExtJS', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Controller::setView
    * @todo   Implement testsetView().
    */
    public function testsetView() 
    { 
        if (class_exists('Controller')) {
             $methods = get_class_methods( 'Controller');
            $this->assertTrue( in_array( 'setView', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Controller::setJSVar
    * @todo   Implement testsetJSVar().
    */
    public function testsetJSVar() 
    { 
        if (class_exists('Controller')) {
             $methods = get_class_methods( 'Controller');
            $this->assertTrue( in_array( 'setJSVar', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Controller::setVar
    * @todo   Implement testsetVar().
    */
    public function testsetVar() 
    { 
        if (class_exists('Controller')) {
             $methods = get_class_methods( 'Controller');
            $this->assertTrue( in_array( 'setVar', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Controller::getHeadPublisher
    * @todo   Implement testgetHeadPublisher().
    */
    public function testgetHeadPublisher() 
    { 
        if (class_exists('Controller')) {
             $methods = get_class_methods( 'Controller');
            $this->assertTrue( in_array( 'getHeadPublisher', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Controller::setLayout
    * @todo   Implement testsetLayout().
    */
    public function testsetLayout() 
    { 
        if (class_exists('Controller')) {
             $methods = get_class_methods( 'Controller');
            $this->assertTrue( in_array( 'setLayout', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Controller::render
    * @todo   Implement testrender().
    */
    public function testrender() 
    { 
        if (class_exists('Controller')) {
             $methods = get_class_methods( 'Controller');
            $this->assertTrue( in_array( 'render', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Controller::header
    * @todo   Implement testheader().
    */
    public function testheader() 
    { 
        if (class_exists('Controller')) {
             $methods = get_class_methods( 'Controller');
            $this->assertTrue( in_array( 'header', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Controller::redirect
    * @todo   Implement testredirect().
    */
    public function testredirect() 
    { 
        if (class_exists('Controller')) {
             $methods = get_class_methods( 'Controller');
            $this->assertTrue( in_array( 'redirect', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

  } 