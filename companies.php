<?php

  class Company {
  
  public function __construct(public $name, public $location, public $tot_employees=0, public $annualExpense=18000){
  }
  
  public function checkEmployees(){
    if ($this->tot_employees > 0){
      return "\nL’ufficio $this->name con sede a $this->location ha ben $this->tot_employees dipendenti.\n\n";
    } else {
      return "\nL’ufficio $this->name con sede a $this->location non ha dipendenti\n";
    }
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
  
  $company1 = new Company("Aulab","Bari", 50);
  $company2 = new Company("Sorbillo","Napoli", 12);
  $company3 = new Company("Bartolini","Milano", 360);
  $company4 = new Company("Zara","Milano", 26);
  $company5 = new Company("Ricola","Zurigo", 620);
  
  echo $company1->checkEmployees();
  echo Company::checkTotalExpense([$company1,$company2,$company3,$company4,$company5]);
  