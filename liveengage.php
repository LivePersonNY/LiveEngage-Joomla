<?php
/**
 * Live Engage Plugin
 */
// No direct access
defined('_JEXEC') or die;
echo "<!--debug plugin loaded -->";
class plgLivePersonLiveEngage extends JPlugin
{

    var $accountnum;

    public function onBeforeRender()
    {
        $document =& JFactory::getDocument();
        echo "<!--debug \n".print_r(get_defined_vars(), true)."\n -->";
        JFactory::getApplication()->enqueueMessage("<!--debug \n".print_r(get_defined_vars(), true)."\n -->");
    }

}