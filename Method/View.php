<?php
namespace GDO\Memberlist\Method;

use GDO\Table\MethodQueryList;
use GDO\User\GDO_User;

final class View extends MethodQueryList
{
    public function gdoTable() { return GDO_User::table(); }
    
    public function getQuery()
    {
        return parent::getQuery()->where('user_type="member"');
    }
    
    public function getTitle()
    {
        return t('list_memberlist_view', [$this->table->countItems()]);
    }
    
}

