<?php
require_once("Expense.php");
class FoodExpense extends Expense
{
    public function __construct(float $amount, string $description, DateTime $happenedAt, User $le_payeur, array $participants)
    {
        parent::__construct($amount, $description, $happenedAt, $le_payeur, $participants);
    }

    /**
     * cette methode renvoie le type de la depense
     * @return string $type
     */
    function getType() {
        return 'FOOD';
    }
}