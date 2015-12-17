<?php
class FAIconField extends DropdownField
{
    private static $ICONS = array(
            'person' => 'User',
            'persons' => 'Users'
        );
    
    public function __construct($name, $title=null, $source=array(), $value='', $form=null, $emptyString=null)
    {
        parent::__construct($name, $title, $source, $value, $form, $emptyString);
        $this->setIconsByType(FAIcon::ALL);
    }
    
    public function setIconsByType($iconType)
    {
        $this->setSource(FAIcon::config()->get($iconType));
    }
}
