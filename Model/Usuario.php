<?php

/**
 * Created by PhpStorm.
 * User: alfonsogalvanmadera
 * Date: 17/05/17
 * Time: 23:24
 */
class Usuario
{
    private $user;
    private $pass;

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param mixed $pass
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
    }



}