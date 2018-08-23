<?php
/**
 * Created by PhpStorm.
 * User: pacoc
 * Date: 23/08/2018
 * Time: 17:39
 */

class User
{
    private  $id_user;
    private $username;
    private $email;
    private $pass;
    private $roles;
    private $created_at;
    private $updated_at;

    /**
     * User constructor.
     * @param $id_user
     * @param $username
     * @param $email
     * @param $pass
     * @param $roles
     * @param $created_at
     * @param $updated_at
     */
    public function __construct($id_user, $username, $email, $pass, $roles, $created_at, $updated_at)
    {
        $this->id_user = $id_user;
        $this->username = $username;
        $this->email = $email;
        $this->pass = $pass;
        $this->roles = $roles;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @param mixed $id_user
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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

    /**
     * @return mixed
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @param mixed $roles
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param mixed $updated_at
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }


}