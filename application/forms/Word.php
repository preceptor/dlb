<?php
class Application_Form_Word extends Zend_Form {
    public function init() {
        $this->setAction('word/save')
             ->setMethod(Zend_Form::METHOD_POST);

        $verbal_conjugation = array('' => '[Selecione]', 'AR' => 'AR','ER' => 'ER','IR' => 'IR');
        $tonic_silaba       = array('' => '[Selecione]', 'O' => 'Oxítona','P' => 'Paroxítona','R' => 'Preparoxítona');
        $genero             = array('' => '[Selecione]', 'M' => 'Masculino', 'F' => 'Feminino');
        $number             = array('' => '[Selecione]', 'S' => 'Singular', 'P' => 'Plural');

        $this->addElement('hidden', 'id')
             ->addElement('text','word', array('label' => 'Palavra'))
             ->addElement('select','verbal_conjugation', array('multiOptions' => $verbal_conjugation,
                                                               'label' => 'Conjugação Verbal'))
             ->addElement('select','tonic_silaba', array('multiOptions' => $tonic_silaba,
                                                         'label' => 'Sílaba tônica'))
             ->addElement('select','genero', array('multiOptions' => $genero,
                                                   'label' => 'Gênero'))
             ->addElement('select','number', array('multiOptions' => $number,
                                                   'label' => 'Número'))
             ->addElement('submit', 'Enviar');
    }
}