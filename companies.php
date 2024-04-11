<?php
  /*
  - Crea una classe Company che abbia i seguenti attributi pubblici: 
name: nome dell’azienda; 
location: stato in cui  è ubicata la sede dell’azienda; 
tot_employees: numero di dipendenti assunti in quella sede (di default, 0); 

- Crea 5 istanze di 5 aziende diverse Crea un metodo che permetta di stampare a terminale la seguente frase: “L’ufficio Aulab con sede in Italia ha ben 50 dipendenti“; se la sede non ha dipendenti, allora stampa: “L’ufficio Aulab con sede in Italia non ha dipendenti“; 

- Implementa un nuovo metodo che, per ogni oggetto Company istanziati, calcoli la spesa annuale e la stampi per ogni oggetto. 
- Implementa un nuovo metodo che è in grado di calcolare l’insieme totale delle spese di tutte le aziende create. 
- Implementa un metodo statico che permetta di stampare a terminale questo totale assoluto di tutte le aziende messe insieme. 
  */

class Company {

  public $name;
  public $location;
  public $tot_employees;
  public $annualExpense;
  public static $counter=[];

  function __construct($name, $location, $tot_employees=0, $annualExpense=0){
    $this->name = $name;
    $this->location = $location;
    $this->tot_employees = $tot_employees;
    $this->annualExpense = $annualExpense;
  }

  function checkEmployees(){
    if ($this->tot_employees > 0){
      echo "\nL’ufficio $this->name con sede a $this->location ha ben $this->tot_employees dipendenti.\n\n";
    } else {
      echo "\nL’ufficio $this->name con sede a $this->location non ha dipendenti\n";
    }
  }

  function checkExpense(){
    echo "La spesa annuale di $this->name($this->location) ammonta a $this->annualExpense$.\n";
  }

  function totalExpense(){
   $sum = array_push(self::$counter, $this->annualExpense);
  }

  static function totalExpenseSum(){
   $counter = 0;
    foreach(self::$counter as $n){
   $counter += $n;
    }
  echo "\nLa somma totale delle spese aziendali annuali è di $counter.\n";
}
}

$company1 = new Company("Aulab","Bari", 50, 23560);
$company2 = new Company("Sorbillo","Napoli", 12, 567800);
$company3 = new Company("Bartolini","Milano", 360, 459680);
$company4 = new Company("Zara","Milano", 26, 467100);
$company5 = new Company("Ricola","Zurigo", 620, 120001);

$companies = [$company1,$company2,$company3,$company4,$company5];

$company1->checkEmployees();

foreach($companies as $company){
  print_r($company->checkExpense());
  print_r($company->totalExpense());
}

  print_r(Company::totalExpenseSum());