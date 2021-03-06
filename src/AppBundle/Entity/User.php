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
    private $userGender;

    /**
     * @var \DateTime
     */
    private $userSubscribeDate;

    /**
     * @var integer
     */
    private $roleId;

    /**
     * @var \DateTime
     */
    private $userLastConnexion;

    /**
     * @var \DateTime
     */
    private $userBirth;

    /**
     * @var integer
     */
    private $eyesId;

    /**
     * @var integer
     */
    private $originId;

    /**
     * @var string
     */
    private $userDescription;

    /**
     * @var string
     */
    private $userLightDescription;

    /**
     * @var string
     */
    private $userCity;

    /**
     * @var string
     */
    private $userZipcode;

    /**
     * @var string
     */
    private $userPhotoUrl;

    /**
     * @var integer
     */
    private $userAlcohol;

    /**
     * @var integer
     */
    private $userSmoke;

    /**
     * @var integer
     */
    private $userTattoo;

    /**
     * @var integer
     */
    private $userDrugs;

    /**
     * @var integer
     */
    private $styleId;

    /**
     * @var integer
     */
    private $hairId;

    /**
     * @var integer
     */
    private $lookId;

    /**
     * @var integer
     */
    private $userPiercing;

    /**
     * @var string
     */
    private $userProfession;

    /**
     * @var string
     */
    private $userMusic;

    /**
     * @var integer
     */
    private $userPoids;

    /**
     * @var integer
     */
    private $userTaille;

    /**
     * @var integer
     */
    private $weekUser = '0';

    /**
     * @var string
     */
    private $userMail;

    /**
     * @var string
     */
    private $userValid;

    /**
     * @var integer
     */
    private $listId;

    /**
     * @var integer
     */
    private $villeId;


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
     * Set userGender
     *
     * @param integer $userGender
     *
     * @return User
     */
    public function setUserGender($userGender)
    {
        $this->userGender = $userGender;

        return $this;
    }

    /**
     * Get userGender
     *
     * @return integer
     */
    public function getUserGender()
    {
        return $this->userGender;
    }

    /**
     * Set userSubscribeDate
     *
     * @param \DateTime $userSubscribeDate
     *
     * @return User
     */
    public function setUserSubscribeDate($userSubscribeDate)
    {
        $this->userSubscribeDate = $userSubscribeDate;

        return $this;
    }

    /**
     * Get userSubscribeDate
     *
     * @return \DateTime
     */
    public function getUserSubscribeDate()
    {
        return $this->userSubscribeDate;
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
     * Set userLastConnexion
     *
     * @param \DateTime $userLastConnexion
     *
     * @return User
     */
    public function setUserLastConnexion($userLastConnexion)
    {
        $this->userLastConnexion = $userLastConnexion;

        return $this;
    }

    /**
     * Get userLastConnexion
     *
     * @return \DateTime
     */
    public function getUserLastConnexion()
    {
        return $this->userLastConnexion;
    }

    /**
     * Set userBirth
     *
     * @param \DateTime $userBirth
     *
     * @return User
     */
    public function setUserBirth($userBirth)
    {
        $this->userBirth = $userBirth;

        return $this;
    }

    /**
     * Get userBirth
     *
     * @return \DateTime
     */
    public function getUserBirth()
    {
        return $this->userBirth;
    }

    /**
     * Set eyesId
     *
     * @param integer $eyesId
     *
     * @return User
     */
    public function setEyesId($eyesId)
    {
        $this->eyesId = $eyesId;

        return $this;
    }

    /**
     * Get eyesId
     *
     * @return integer
     */
    public function getEyesId()
    {
        return $this->eyesId;
    }

    /**
     * Set originId
     *
     * @param integer $originId
     *
     * @return User
     */
    public function setOriginId($originId)
    {
        $this->originId = $originId;

        return $this;
    }

    /**
     * Get originId
     *
     * @return integer
     */
    public function getOriginId()
    {
        return $this->originId;
    }

    /**
     * Set userDescription
     *
     * @param string $userDescription
     *
     * @return User
     */
    public function setUserDescription($userDescription)
    {
        $this->userDescription = $userDescription;

        return $this;
    }

    /**
     * Get userDescription
     *
     * @return string
     */
    public function getUserDescription()
    {
        return $this->userDescription;
    }

    /**
     * Set userLightDescription
     *
     * @param string $userLightDescription
     *
     * @return User
     */
    public function setUserLightDescription($userLightDescription)
    {
        $this->userLightDescription = $userLightDescription;

        return $this;
    }

    /**
     * Get userLightDescription
     *
     * @return string
     */
    public function getUserLightDescription()
    {
        return $this->userLightDescription;
    }

    /**
     * Set userCity
     *
     * @param string $userCity
     *
     * @return User
     */
    public function setUserCity($userCity)
    {
        $this->userCity = $userCity;

        return $this;
    }

    /**
     * Get userCity
     *
     * @return string
     */
    public function getUserCity()
    {
        return $this->userCity;
    }

    /**
     * Set userZipcode
     *
     * @param string $userZipcode
     *
     * @return User
     */
    public function setUserZipcode($userZipcode)
    {
        $this->userZipcode = $userZipcode;

        return $this;
    }

    /**
     * Get userZipcode
     *
     * @return string
     */
    public function getUserZipcode()
    {
        return $this->userZipcode;
    }

    /**
     * Set userPhotoUrl
     *
     * @param string $userPhotoUrl
     *
     * @return User
     */
    public function setUserPhotoUrl($userPhotoUrl)
    {
        $this->userPhotoUrl = $userPhotoUrl;

        return $this;
    }

    /**
     * Get userPhotoUrl
     *
     * @return string
     */
    public function getUserPhotoUrl()
    {
        return $this->userPhotoUrl;
    }

    /**
     * Set userAlcohol
     *
     * @param integer $userAlcohol
     *
     * @return User
     */
    public function setUserAlcohol($userAlcohol)
    {
        $this->userAlcohol = $userAlcohol;

        return $this;
    }

    /**
     * Get userAlcohol
     *
     * @return integer
     */
    public function getUserAlcohol()
    {
        return $this->userAlcohol;
    }

    /**
     * Set userSmoke
     *
     * @param integer $userSmoke
     *
     * @return User
     */
    public function setUserSmoke($userSmoke)
    {
        $this->userSmoke = $userSmoke;

        return $this;
    }

    /**
     * Get userSmoke
     *
     * @return integer
     */
    public function getUserSmoke()
    {
        return $this->userSmoke;
    }

    /**
     * Set userTattoo
     *
     * @param integer $userTattoo
     *
     * @return User
     */
    public function setUserTattoo($userTattoo)
    {
        $this->userTattoo = $userTattoo;

        return $this;
    }

    /**
     * Get userTattoo
     *
     * @return integer
     */
    public function getUserTattoo()
    {
        return $this->userTattoo;
    }

    /**
     * Set userDrugs
     *
     * @param integer $userDrugs
     *
     * @return User
     */
    public function setUserDrugs($userDrugs)
    {
        $this->userDrugs = $userDrugs;

        return $this;
    }

    /**
     * Get userDrugs
     *
     * @return integer
     */
    public function getUserDrugs()
    {
        return $this->userDrugs;
    }

    /**
     * Set styleId
     *
     * @param integer $styleId
     *
     * @return User
     */
    public function setStyleId($styleId)
    {
        $this->styleId = $styleId;

        return $this;
    }

    /**
     * Get styleId
     *
     * @return integer
     */
    public function getStyleId()
    {
        return $this->styleId;
    }

    /**
     * Set hairId
     *
     * @param integer $hairId
     *
     * @return User
     */
    public function setHairId($hairId)
    {
        $this->hairId = $hairId;

        return $this;
    }

    /**
     * Get hairId
     *
     * @return integer
     */
    public function getHairId()
    {
        return $this->hairId;
    }

    /**
     * Set lookId
     *
     * @param integer $lookId
     *
     * @return User
     */
    public function setLookId($lookId)
    {
        $this->lookId = $lookId;

        return $this;
    }

    /**
     * Get lookId
     *
     * @return integer
     */
    public function getLookId()
    {
        return $this->lookId;
    }

    /**
     * Set userPiercing
     *
     * @param integer $userPiercing
     *
     * @return User
     */
    public function setUserPiercing($userPiercing)
    {
        $this->userPiercing = $userPiercing;

        return $this;
    }

    /**
     * Get userPiercing
     *
     * @return integer
     */
    public function getUserPiercing()
    {
        return $this->userPiercing;
    }

    /**
     * Set userProfession
     *
     * @param string $userProfession
     *
     * @return User
     */
    public function setUserProfession($userProfession)
    {
        $this->userProfession = $userProfession;

        return $this;
    }

    /**
     * Get userProfession
     *
     * @return string
     */
    public function getUserProfession()
    {
        return $this->userProfession;
    }

    /**
     * Set userMusic
     *
     * @param string $userMusic
     *
     * @return User
     */
    public function setUserMusic($userMusic)
    {
        $this->userMusic = $userMusic;

        return $this;
    }

    /**
     * Get userMusic
     *
     * @return string
     */
    public function getUserMusic()
    {
        return $this->userMusic;
    }

    /**
     * Set userPoids
     *
     * @param integer $userPoids
     *
     * @return User
     */
    public function setUserPoids($userPoids)
    {
        $this->userPoids = $userPoids;

        return $this;
    }

    /**
     * Get userPoids
     *
     * @return integer
     */
    public function getUserPoids()
    {
        return $this->userPoids;
    }

    /**
     * Set userTaille
     *
     * @param integer $userTaille
     *
     * @return User
     */
    public function setUserTaille($userTaille)
    {
        $this->userTaille = $userTaille;

        return $this;
    }

    /**
     * Get userTaille
     *
     * @return integer
     */
    public function getUserTaille()
    {
        return $this->userTaille;
    }

    /**
     * Set weekUser
     *
     * @param integer $weekUser
     *
     * @return User
     */
    public function setWeekUser($weekUser)
    {
        $this->weekUser = $weekUser;

        return $this;
    }

    /**
     * Get weekUser
     *
     * @return integer
     */
    public function getWeekUser()
    {
        return $this->weekUser;
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

    /**
     * Set userValid
     *
     * @param string $userValid
     *
     * @return User
     */
    public function setUserValid($userValid)
    {
        $this->userValid = $userValid;

        return $this;
    }

    /**
     * Get userValid
     *
     * @return string
     */
    public function getUserValid()
    {
        return $this->userValid;
    }

    /**
     * Set listId
     *
     * @param integer $listId
     *
     * @return User
     */
    public function setListId($listId)
    {
        $this->listId = $listId;

        return $this;
    }

    /**
     * Get listId
     *
     * @return integer
     */
    public function getListId()
    {
        return $this->listId;
    }

    /**
     * Set villeId
     *
     * @param integer $villeId
     *
     * @return User
     */
    public function setVilleId($villeId)
    {
        $this->villeId = $villeId;

        return $this;
    }

    /**
     * Get villeId
     *
     * @return integer
     */
    public function getVilleId()
    {
        return $this->villeId;
    }
}

