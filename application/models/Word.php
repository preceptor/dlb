<?php
class Application_Model_Word extends Application_Model_Abstract
{
	protected $_name = 'word';
    protected $_primary = 'id';

    protected $_dependentTables = array('Application_Model_WordAception' ,
                                        'Application_Model_WordOrigin' ,
                                        'Application_Model_WordUrl'
    );
}
