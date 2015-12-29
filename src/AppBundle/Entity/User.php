<?php

namespace AppBundle\Entity;

/**
 * User
 */
class User
{
    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $userLogin;

    /**
     * @var string
     */
    private $userPwd;

    /**
     * @var integer
     */
    private $roleId;

    /**
     * @var string
     */
    private $userMail;


    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set userLogin
     *
     * @param string $userLogin
     *
     * @return User
     */
    public function setUserLogin($userLogin)
    {
        $this->userLogin = $userLogin;

        return $this;
    }

    /**
     * Get userLogin
     *
     * @return string
     */
    public function getUserLogin()
    {
        return $this->userLogin;
    }

    /**
     * Set userPwd
     *
     * @param string $userPwd
     *
     * @return User
     */
    public function setUserPwd($userPwd)
    {
        $this->userPwd = $userPwd;

        return $this;
    }

    /**
     * Get userPwd
     *
     * @return string
     */
    public function getUserPwd()
    {
        return $this->userPwd;
    }

    /**
     * Set roleId
     *
     * @param integer $roleId
     *
     * @return User
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;

        return $this;
    }

    /**
     * Get roleId
     *
     * @return integer
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * Set userMail
     *
     * @param string $userMail
     *
     * @return User
     */
    public function setUserMail($userMail)
    {
        $this->userMail = $userMail;

        return $this;
    }

    /**
     * Get userMail
     *
     * @return string
     */
    public function getUserMail()
    {
        return $this->userMail;
    }
}

