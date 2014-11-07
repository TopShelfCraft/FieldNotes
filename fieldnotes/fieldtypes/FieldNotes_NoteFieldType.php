<?php
namespace Craft;

class FieldNotes_NoteFieldType extends BaseFieldType
{

	/**
	 * Block type name
	 */
	public function getName()
	{
		return Craft::t('Field Note');
	}

	/**
	 * Save it
	 */
	public function defineContentAttribute()
	{
		return false;
	}

	/**
	 * Show note field
	 */
	public function getInputHtml($name, $value)
	{
		$settings = $this->getSettings();
		return $settings['noteContent'];
	}

	/**
	 * Returns the field's settings HTML.
	 *
	 * @return string|null
	 */
	public function getSettingsHtml()
	{
		return craft()->templates->render('fieldnotes/settings', array(
			'settings' => $this->getSettings(),
		));
	}

	/**
	 * Defines the field's settings
	 *
	 * @return array
	 */
	protected function defineSettings()
	{
		return array(
			'noteContent' => array(AttributeType::String)
		);
	}

}