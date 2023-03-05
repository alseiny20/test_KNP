<?php
require_once("Expense.php");
class DrinkExpense extends Expense
{
    
    public function __construct(float $amount, string $description, DateTime $happenedAt, User $le_payeur, array $participants)
    {
        parent::__construct($amount, $description, $happenedAt, $le_payeur, $participants);
    }

    /**
     * cette methode renvoie le type de la depense
     * @return string $type
     */
    function getType() : string
    {
        return 'DRINK';
    }
}