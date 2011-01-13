<?php
class Application_Model_Sense extends Dlb_Model {
	protected $_name = 'sense';
    protected $_primary = 'id';

    public static $grammatical = array('S' => 'Substantivo',
                                       'A' => 'Adjetivo',
                                       'P' => 'Pronome',
                                       'D' => 'Advérbio',
                                       'V' => 'Verbo',
                                       'C' => 'Conjunção',
                                       'R' => 'Preposição',
                                       'I' => 'Interjeição',
                                       'N' => 'Numeral',
                                       'G' => 'Artigo');
}