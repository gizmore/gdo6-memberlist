<?php
namespace GDO\Memberlist;

use GDO\Core\GDO_Module;
use GDO\UI\GDT_Link;
use GDO\UI\GDT_Page;

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

//     public function getConfig()
//     {
//         return [
//             GDT_Checkbox::make('hook_left_bar')->initial('1'),
//         ];
//     }
    
//     public function cfgHookLeftBar() { return $this->getConfigValue('hook_left_bar'); }
 
    public function onInitSidebar()
    {
//         if ($this->cfgHookLeftBar())
        {
            $nav = GDT_Page::$INSTANCE->leftNav;
            $nav->addField(GDT_Link::make('link_members')->href(href('Memberlist', 'View')));
        }
    }
    
}
