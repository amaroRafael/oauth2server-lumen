<?php namespace Rapiro\OAuth2Server\Facades;
/**
 * Authorizer Facade
 *
 */

use Illuminate\Support\Facades\Facade;

final class AuthorizerFacade extends Facade
{
    /**
     * Get the registered name of the component
     * @return string
     * @codeCoverageIgnore
     */
    protected static function getFacadeAccessor()
    {
        return 'oauth2-server.authorizer';
    }
}