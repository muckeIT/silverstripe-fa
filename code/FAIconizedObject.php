<?php
class FAIconizedObject extends DataExtension
{
    private static $db = array(
            'FAIcon' => 'FAIcon',
        );
    
    public function updateCMSFields(FieldList $fields)
    {
        $iconField = new FAIconField('FAIcon');
        $fields->addFieldToTab('Root.Main', $iconField);
    }
}
