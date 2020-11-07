<?php
namespace GDO\Memberlist\Method;

use GDO\Table\MethodQueryList;
use GDO\User\GDO_User;

final class View extends MethodQueryList
{
    public function gdoTable() { return GDO_User::table(); }
    
    public function gdoQuery()
    {
        return parent::gdoQuery()->where('user_type="member"');
    }
    
}

