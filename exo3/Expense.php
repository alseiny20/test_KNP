<?php

/**
 * cette classe abstraite represente une depense
 */
abstract class Expense {

    private float $amount;

    private string $description;

    private \DateTime $happenedAt;

    private User $le_payeur;

    /**
     * @var array<User>
     */
    private array $participants;

    /**
     * constructeur de la classe Expense
     * @param array <User> $participants la liste des participants a la depense
     * @param float $amount le montant de la depense
     * @param string $description la description de la depense
     * @param \DateTime $happenedAt la date de la depense
     * @param User $le_payeur celui qui a payer la depense
     */
    public function __construct(float $amount, string $description, DateTime $happenedAt, User $le_payeur, array $participants)
    {
        $this->amount = $amount;
        $this->description = $description;
        $this->happenedAt = $happenedAt;
        $this->le_payeur = $le_payeur;
        $this->participants = $participants;
    }


    /**
     * cette methode renvoie les participants a la depense
     * @return array<User> $participants
     */
    public function getParticipants(): array
    {
        return $this->participants;
    }

    /**
     * cette methode renvoie le montant de la depense
     * @return float $amount 
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * cette methode renvoie la description de la depense
     * @return string $description
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * cette methode renvoie la date de la depense
     * @return \DateTime $happenedAt
     */
    public function getHappenedAt(): \DateTime
    {
        return $this->happenedAt;
    }

    /**
     * cette methode renvoie celui qui a payer la depense
     * @return User $le_payeur
     */
    public function getPayer(): User
    {
        return $this->le_payeur;
    }
 

    /**
     * cette methode renvoie le montant de la depense par participant
     * @return float $amount
     */
    function getUnitaryShared(): float
    {
        return $this->amount / count($this->participants);
    }

    /**
     * cette methode renvoie le montant que doit payer l'utilisateur
     * @param User $user
     * @ensure $user != null
     * @return float negative si l'utilisateur doit payer, positive si l'utilisateur doit recevoir
     */
    function getUserShare($user): float
    {
        //si l'utilisateur est le payeur et qu'il est dans la liste des participants
        if ($user == $this->le_payeur && in_array($user, $this->participants)) {
            return $this->amount - $this->getUnitaryShared();
        }
        //si l'utilisateur est le payeur et qu'il n'est pas dans la liste des participants
        else if ($user == $this->le_payeur) {
            return $this->amount;
        }
        //si l'utilisateur n'est pas le payeur et qu'il est dans la liste des participants
        else if (in_array($user, $this->participants)) {
            return -$this->getUnitaryShared();
        }
        //si l'utilisateur n'est pas le payeur et qu'il n'est pas dans la liste des participants
        else{
            return 0;
        }
    }

    /**
     * cette methode renvoie le type de la depense
     * @return string
     */
    abstract function getType();
}
