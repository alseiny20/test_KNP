<?php
class User
{
    private string $firstName;
    private string $lastName;
    private string $mailAddress;

    public function __construct(string $firstname, string $lastName, string $mailAddress)
    {
        $this->firstName    = $firstname;
        $this->lastName     = $lastName;
        $this->mailAddress= $mailAddress;
    }

    /**
     * cette methode renvoie le prenom de l'utilisateur
     * @return int $firstName
     */
    function getFirstname(): string
    {
        return $this->firstName;
    }

    /**
     * cette methode renvoie le nom de l'utilisateur
     * @return string $lastName
     */
    function getLastname(){
        return $this->lastName;
    }

    /**
     * cette methode renvoie l'adresse mail de l'utilisateur
     * @return string $mailAddress
     */
    function getMailAddress()
    {
        return $this->mailAddress;
    }

    /**
     * cette methode renvoie le nom complet de l'utilisateur
     * @return string $fullName
     */
    function getFullname(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}