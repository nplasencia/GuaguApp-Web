<?php

namespace App\Commons;


final class UserContract extends GlobalContract
{
    const
        TABLE_NAME     = 'users',
        NAME           = 'name',
        EMAIL          = 'email',
        EMAIL_VERIFIED = 'email_verified_at',
        PASSWORD       = 'password',
        IS_ADMIN       = 'is_admin';
}
