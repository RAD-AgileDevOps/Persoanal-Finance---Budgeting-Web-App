<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $BudgetCat = $_POST['budget_category'];
     $DateIncur = $_POST['date_incurred'];
     $Estmnt = $_POST['establishment_exp_incurred'];
	 $PurchCost = $_POST['purchase_cost'];
     $MethodPayt = $_POST['method_of_payment']; 
	 $BankName = $_POST['bank_name'];
	 $CardIssr = $_POST['card_issuer'];

    
     $sql = "INSERT INTO `sg_personal_finance`.`tbl_sg_expenses` ( 
    `tbl_sg_expenses`.`budget_category`,
    `tbl_sg_expenses`.`date_incurred`,
    `tbl_sg_expenses`.`establishment_exp_incurred`,
    `tbl_sg_expenses`.`purchase_cost`,
    `tbl_sg_expenses`.`method_of_payment`,
    `tbl_sg_expenses`.`bank_name`,
    `tbl_sg_expenses`.`card_issuer`
) VALUES ('$BudgetCat','$DateIncur', '$Estmnt' ,
	 
			'$PurchCost' , '$MethodPayt', '$BankName' ,'$CardIssr'
	 
	 )";
 
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
		
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>