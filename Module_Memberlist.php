<?php
namespace GDO\Memberlist;

use GDO\Core\GDO_Module;
use GDO\DB\GDT_Checkbox;
use GDO\UI\GDT_Link;
use GDO\UI\GDT_Page;
use GDO\DB\Cache;
use GDO\User\GDO_User;

/**
 * Show a list of members sorted by user level, title, last_activity
 * @author gizmore
 * @version 6.10.2
 * @since 6.10.0
 */
final class Module_Memberlist extends GDO_Module
{
    public $module_priority = 64;
    
    public function onLoadLanguage() { return $this->loadLanguage('lang/memberlist'); }

    public function getConfig()
    {
        return [
            GDT_Checkbox::make('hook_left_bar')->initial('1'),
        ];
    }
    
    public function cfgHookLeftBar() { return $this->getConfigValue('hook_left_bar'); }
 
    public function onInitSidebar()
    {
        if ($this->cfgHookLeftBar())
        {
            $nav = GDT_Page::$INSTANCE->leftNav;
            $nav->addField(GDT_Link::make('list_memberlist_view', [$this->getMembercount()])->href(href('Memberlist', 'View')));
        }
    }
    
    public function getMembercount()
    {
        if (false === ($count = Cache::get('memberlist_membercount')))
        {
            $count = GDO_User::table()->countWhere('user_type="member"');
            Cache::set('memberlist_membercount', $count);
        }
        return $count;
    }
    
}
