<?php
class WordController extends Dlb_Controller
{
    public function formAction() {
        $form  = new Application_Form_Word();
        $word  = new Zend_Db_Table('word');
        $id    = Zend_Filter::filterStatic($this->_getParam('id'), 'int');
        $query = 'novo';
        
        if ($id) {
//            $origin = new Application_Model_Origin();
//            $sense  = new Application_Model_Sense();

            $data = $word->fetchRow(array('id = ?' => $id));
            $query = $data->word;
//            $data = $origin->fetchAll(array('word_id => ?' => $id));
//            $data = $sense->fetchAll(array('word_id => ?' => $id));

            $form->populate($data->toArray());
        }
        
        $init = substr($query, 0, 1);
        $where = array('word LIKE(?)' => $init.'%');
        $this->view->list = $word->fetchAll($where, 'word');

        $this->view->query = $query;
        $this->view->form = $form;
    }

    public function saveAction() {
        $form  = new Application_Form_Word();

        if ($this->_request->isPost()) {
            if ($form->isValid($_POST)) {
                $word  = new Zend_Db_Table('word');
                $id = $this->_getParam('id');
                if ($id) {
                    $row = $word->find($id)->current();
                    $row->setFromArray($form->getValues());
                } else {
                    $row = $word->createRow($form->getValues());
                }
                $id = $row->save();
                $this->_redirect('/word/form/id/'.$id);
            } else {
                $this->view->form = $form;
                $this->render('form');
            }
        }
    }

    public function deleteAction() {
        
    }
}
