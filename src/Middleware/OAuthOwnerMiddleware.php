<?php namespace AmaroRafael\OAuth2Server\Middleware;

use Closure;
use AmaroRafael\OAuth2Server\Filters\OAuthOwnerFilter;

class OAuthOwnerMiddleware extends OAuthOwnerFilter {

    public function handle($request, Closure $next)
    {
        // Will throw exception on failure
        parent::filter();

        return $next($request);
    }
}