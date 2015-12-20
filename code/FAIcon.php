<?php
class FAIcon extends StringField
{
    /**
     * Configuration parameter names.
     */
    const CFG_TAG = 'Tag';
    const CFG_USE_TEMPLATE = 'UseTemplate';
    
    /**
     * Constants for (sub-)sets of famous icons 
     * to use f.e. with FAIconField.
     */
    const ALL = 'All';
    const BRAND = 'Brand';
    const CHART = 'Chart';
    const CURRENCY = 'Currency';
    const DIRECTIONAL = 'Directional';
    const FILETYPE = 'FileType';
    const FORM = 'FormControl';
    const MEDICAL = 'Medical';
    const PAYMENT = 'Payment';
    const SPINNER = 'Spinner';
    const TEXTEDITOR = 'TextEditor';
    const VIDEO = 'VideoPlayer';
    const WEBAPP = 'WebApp';
    
    
    /**
     * (non-PHPdoc)
     * @see DBField::requireField()
     */
    public function requireField()
    {
        $parts = array(
                'datatype' => 'varchar',
                'precision' => 50,
                'character set' => 'utf8',
                'collate' => 'utf8_general_ci',
                'arrayValue' => $this->arrayValue
        );
    
        $values = array(
                'type' => 'varchar',
                'parts' => $parts
        );
            
        DB::requireField($this->tableName, $this->name, $values);
    }
    
    public function Tag()
    {
        return $this->config()->get(FAIcon::CFG_TAG);
    }
    
    public function forTemplate()
    {
        Requirements::css('silverstripe-fa/css/font-awesome.min.css');
        if ($this->config()->get(FAIcon::CFG_USE_TEMPLATE)) {
            return $this->renderWith('FAIcon', array('Icon' => $this->value));
        } else {
            return '<'.$this->Tag().' class="fa fa-'.$this->value.'"></'.$this->Tag().'>';
        }
    }
}
