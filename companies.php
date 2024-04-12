<?php
require_once("company.php");
  $company1 = new Company("Aulab","Bari", 50);
  $company2 = new Company("Sorbillo","Napoli", 12);
  $company3 = new Company("Bartolini","Milano", 360);
  $company4 = new Company("Zara","Milano", 26);
  $company5 = new Company("Ricola","Zurigo", 620);
  echo $company1->checkEmployees();
  echo Company::checkTotalExpense([$company1,$company2,$company3,$company4,$company5]);
  