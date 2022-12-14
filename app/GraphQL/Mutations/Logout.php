<?php

namespace App\GraphQL\Mutations;

use App\Models\User;
use Nuwave\Lighthouse\Schema\Context;

final class Logout
{
    /**
     * @param  null  $_
     * @param  null[]  $args
     * @param  Context  $ctx
     */
    public function __invoke(null $_, array $args, Context $ctx): User
    {
        $guard = auth()->guard();

        /** @var \App\Models\User $user */
        $user = $guard->user();

        $guard->logout();

        $ctx->request->session()->invalidate();
        $ctx->request->session()->regenerateToken();

        return $user;
    }
}
