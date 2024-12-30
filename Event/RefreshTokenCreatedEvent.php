<?php

namespace Gesdinet\JWTRefreshTokenBundle\Event;

use Gesdinet\JWTRefreshTokenBundle\Model\RefreshTokenInterface;
use Symfony\Contracts\EventDispatcher\Event;

class RefreshTokenCreatedEvent extends Event
{
    private RefreshTokenInterface $refreshToken;

    public function __construct(RefreshTokenInterface $refreshToken)
    {
        $this->refreshToken = $refreshToken;
    }

    /**
     * @return RefreshTokenInterface
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }
}
