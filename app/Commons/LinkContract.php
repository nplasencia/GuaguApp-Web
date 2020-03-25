<?php

namespace App\Commons;


final class LinkContract extends GlobalContract
{
    const
        TABLE_NAME   = 'links',
        STOP_ID      = 'stop_id',
        NEXT_STOP_ID = 'next_stop_id',
        LINK_TIME    = 'link_time';
}
