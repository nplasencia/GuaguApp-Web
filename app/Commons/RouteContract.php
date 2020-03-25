<?php

namespace App\Commons;


final class RouteContract extends GlobalContract
{
    const
        TABLE_NAME    = 'routes',
        BUS_ID        = 'bus_id',
        FIRST_STOP    = 'first_stop',
        FIRST_STOP_ID = 'first_stop_id',
        LAST_STOP     = 'last_stop',
        LAST_STOP_ID  = 'last_stop_id',
        GO            = 'go';
}
