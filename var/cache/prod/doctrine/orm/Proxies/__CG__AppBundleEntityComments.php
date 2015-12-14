<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Comments extends \AppBundle\Entity\Comments implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Comments' . "\0" . 'commentId', '' . "\0" . 'AppBundle\\Entity\\Comments' . "\0" . 'commentContenu', '' . "\0" . 'AppBundle\\Entity\\Comments' . "\0" . 'commentDate', '' . "\0" . 'AppBundle\\Entity\\Comments' . "\0" . 'userId', '' . "\0" . 'AppBundle\\Entity\\Comments' . "\0" . 'newsId');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Comments' . "\0" . 'commentId', '' . "\0" . 'AppBundle\\Entity\\Comments' . "\0" . 'commentContenu', '' . "\0" . 'AppBundle\\Entity\\Comments' . "\0" . 'commentDate', '' . "\0" . 'AppBundle\\Entity\\Comments' . "\0" . 'userId', '' . "\0" . 'AppBundle\\Entity\\Comments' . "\0" . 'newsId');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Comments $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getCommentId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getCommentId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentId', array());

        return parent::getCommentId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCommentContenu($commentContenu)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommentContenu', array($commentContenu));

        return parent::setCommentContenu($commentContenu);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentContenu()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentContenu', array());

        return parent::getCommentContenu();
    }

    /**
     * {@inheritDoc}
     */
    public function setCommentDate($commentDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommentDate', array($commentDate));

        return parent::setCommentDate($commentDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentDate', array());

        return parent::getCommentDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserId($userId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserId', array($userId));

        return parent::setUserId($userId);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserId', array());

        return parent::getUserId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNewsId($newsId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNewsId', array($newsId));

        return parent::setNewsId($newsId);
    }

    /**
     * {@inheritDoc}
     */
    public function getNewsId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNewsId', array());

        return parent::getNewsId();
    }

}
