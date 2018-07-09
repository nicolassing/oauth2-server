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

class AuthorizationRequest implements AuthorizationRequestInterface
{
    /**
     * The grant type identifier
     *
     * @var string
     */
    protected $grantTypeId;

    /**
     * The client identifier
     *
     * @var ClientEntityInterface
     */
    protected $client;

    /**
     * The user identifier
     *
     * @var UserEntityInterface
     */
    protected $user;

    /**
     * An array of scope identifiers
     *
     * @var ScopeEntityInterface[]
     */
    protected $scopes = [];

    /**
     * Has the user authorized the authorization request
     *
     * @var bool
     */
    protected $authorizationApproved = false;

    /**
     * The redirect URI used in the request
     *
     * @var string|null
     */
    protected $redirectUri;

    /**
     * The state parameter on the authorization request
     *
     * @var string|null
     */
    protected $state;

    /**
     * The code challenge (if provided)
     *
     * @var string
     */
    protected $codeChallenge;

    /**
     * The code challenge method (if provided)
     *
     * @var string
     */
    protected $codeChallengeMethod;

    /**
     * @inheritdoc
     */
    public function getGrantTypeId()
    {
        return $this->grantTypeId;
    }

    /**
     * @inheritdoc
     */
    public function setGrantTypeId($grantTypeId)
    {
        $this->grantTypeId = $grantTypeId;
    }

    /**
     * @inheritdoc
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @inheritdoc
     */
    public function setClient(ClientEntityInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @inheritdoc
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @inheritdoc
     */
    public function setUser(UserEntityInterface $user)
    {
        $this->user = $user;
    }

    /**
     * @inheritdoc
     */
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     * @inheritdoc
     */
    public function setScopes(array $scopes)
    {
        $this->scopes = $scopes;
    }

    /**
     * @inheritdoc
     */
    public function isAuthorizationApproved()
    {
        return $this->authorizationApproved;
    }

    /**
     * @inheritdoc
     */
    public function setAuthorizationApproved($authorizationApproved)
    {
        $this->authorizationApproved = $authorizationApproved;
    }

    /**
     * @inheritdoc
     */
    public function getRedirectUri()
    {
        return $this->redirectUri;
    }

    /**
     * @inheritdoc
     */
    public function setRedirectUri($redirectUri)
    {
        $this->redirectUri = $redirectUri;
    }

    /**
     * @inheritdoc
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @inheritdoc
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @inheritdoc
     */
    public function getCodeChallenge()
    {
        return $this->codeChallenge;
    }

    /**
     * @inheritdoc
     */
    public function setCodeChallenge($codeChallenge)
    {
        $this->codeChallenge = $codeChallenge;
    }

    /**
     * @inheritdoc
     */
    public function getCodeChallengeMethod()
    {
        return $this->codeChallengeMethod;
    }

    /**
     * @inheritdoc
     */
    public function setCodeChallengeMethod($codeChallengeMethod)
    {
        $this->codeChallengeMethod = $codeChallengeMethod;
    }
}
