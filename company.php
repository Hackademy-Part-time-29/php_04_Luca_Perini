<?php

class Company { 
    public function __construct(public $name, public $location, public $tot_employees=0, public $annualExpense=18000){
    }
     public function checkEmployees(){
      return ($this->tot_employees > 0)? "\nL’ufficio $this->name con sede a $this->location ha ben $this->tot_employees dipendenti.\n\n" : "\nL’ufficio $this->name con sede a $this->location non ha dipendenti\n";
    }
    public function checkAnnualExpense(){
        $total = $this->tot_employees * $this->annualExpense;
        echo "L’ufficio $this->name con sede a $this->location ha una spesa annuale di $total,00$.\n";
        return $total;
    }
    public static function checkTotalExpense($companies){
        $counter = 0;
        foreach($companies as $company){
            $counter += $company->checkAnnualExpense();
        }
        return "La spesa annuale di tutte le aziende è di $counter,00$.";
    }
    }