<?php
class IndexController extends Dlb_Controller {
    public function indexAction() {
        $query = Zend_Filter::filterStatic($this->_getParam('q'), 'Alpha');
        $order = 'rand()';
        $where = null;
        $word  = new Zend_Db_Table('word');
        $sense = new Zend_Db_Table('sense');

        if ($query) {
            $order = 'word';
            $where = array('word LIKE(?)' => $query.'%');
        }
        
        $data = $word->fetchAll($where, $order, 1)->current();

        $this->view->data  = $data;
        $this->view->query = $query;

        if (isset($data->id)) {
            $this->view->sense = $sense->fetchAll(array('word_id = ?' => $data->id));
            $this->view->query = $query = $data->word;
        }

        $init = substr($query, 0, 1);
        $where = array('word LIKE(?)' => $init.'%');
        $this->view->list = $word->fetchAll($where, 'word');
    }
}
