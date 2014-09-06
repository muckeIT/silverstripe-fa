<?php
class FAIconizedClass extends DataExtension
{
	public function FAIcon ()
	{
		$icon = new FAIcon();
		$icon->setValue($this->owner->config()->get('FAIcon'));
		return $icon;
	}
}
?>