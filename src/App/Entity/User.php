<?php

namespace App\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(
     *     name="idUser", type="integer", nullable=false, unique=true
     * )
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $iduser;


    /**
     * @ORM\Column(type="string", unique=true)
     */
    private $apiKey;


    /**
     * Get idUser
     *
     * @return integer
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    public function getRoles()
    {
        return ['ROLE_USER'];
    }

    public function getSalt()
    {
    }
    public function eraseCredentials()
    {

    }

    /**
     * Returns the username used to authenticate the user.
     *
     * @return string The username
     */
    public function getUsername(){
        return 'username';
    }


    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return 'nopassword';
    }


    /**
     * Get apiKey
     *
     * @return String
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }



}
