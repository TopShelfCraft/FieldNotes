<?php
namespace Craft;

class FieldNotesPlugin extends BasePlugin
{
    function getName()
    {
        return Craft::t('FieldNotes');
    }

    function getVersion()
    {
        return '0.1.0';
    }

    function getDeveloper()
    {
        return 'Michael Rog';
    }

    function getDeveloperUrl()
    {
        return 'http://michaelrog.com';
    }
}