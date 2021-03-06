<?php namespace Rapiro\OAuth2Server\Filters;
/**
 * OAuth parameters check route middleware
 *
 */

use Rapiro\OAuth2Server\Authorizer;

class CheckAuthCodeRequestFilter
{
    /**
     * The authorizer instance
     */
    protected $authorizer;

    /**
     * @param Authorizer $authorizer
     */
    public function __construct(Authorizer $authorizer)
    {
        $this->authorizer = $authorizer;
    }

    public function filter()
    {
        $this->authorizer->checkAuthCodeRequest();
    }
}
