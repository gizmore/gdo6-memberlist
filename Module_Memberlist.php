<?php
namespace GDO\Memberlist;

use GDO\Core\GDO_Module;

/**
 * Show a list of members sorted by user level, title, last_activity
 * @author gizmore
 * @version 6.10
 * @since 6.10
 */
final class Module_Memberlist extends GDO_Module
{
    public $module_priority = 64;
    
    public function onLoadLanguage() { return $this->loadLanguage('lang/memberlist'); }

}
