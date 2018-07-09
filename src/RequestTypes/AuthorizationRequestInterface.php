<?php
/**
 * @author      Alex Bilbie <hello@alexbilbie.com>
 * @copyright   Copyright (c) Alex Bilbie
 * @license     http://mit-license.org/
 *
 * @link        https://github.com/thephpleague/oauth2-server
 */

namespace League\OAuth2\Server\RequestTypes;

use League\OAuth2\Server\Entities\ClientEntityInterface;
use League\OAuth2\Server\Entities\ScopeEntityInterface;
use League\OAuth2\Server\Entities\UserEntityInterface;

interface AuthorizationRequestInterface
{
    /**
     * @return string
     */
    public function getGrantTypeId();

    /**
     * @param string $grantTypeId
     */
    public function setGrantTypeId($grantTypeId);

    /**
     * @return ClientEntityInterface
     */
    public function getClient();

    /**
     * @param ClientEntityInterface $client
     */
    public function setClient(ClientEntityInterface $client);

    /**
     * @return UserEntityInterface
     */
    public function getUser();

    /**
     * @param UserEntityInterface $user
     */
    public function setUser(UserEntityInterface $user);
    /**
     * @return ScopeEntityInterface[]
     */
    public function getScopes();

    /**
     * @param ScopeEntityInterface[] $scopes
     */
    public function setScopes(array $scopes);

    /**
     * @return bool
     */
    public function isAuthorizationApproved();

    /**
     * @param bool $authorizationApproved
     */
    public function setAuthorizationApproved($authorizationApproved);

    /**
     * @return string|null
     */
    public function getRedirectUri();

    /**
     * @param string|null $redirectUri
     */
    public function setRedirectUri($redirectUri);

    /**
     * @return string|null
     */
    public function getState();

    /**
     * @param string $state
     */
    public function setState($state);

    /**
     * @return string
     */
    public function getCodeChallenge();

    /**
     * @param string $codeChallenge
     */
    public function setCodeChallenge($codeChallenge);

    /**
     * @return string
     */
    public function getCodeChallengeMethod();

    /**
     * @param string $codeChallengeMethod
     */
    public function setCodeChallengeMethod($codeChallengeMethod);
}
