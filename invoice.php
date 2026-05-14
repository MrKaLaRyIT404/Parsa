<?php include 'db.php'; ?>
<h2>Invoice System</h2>
<form method='post'>
<input name='customer' placeholder='Customer Name'><br><br>
<input name='amount' placeholder='Amount'><br><br>
<button name='save'>Save Invoice</button>
</form>
<?php
if(isset($_POST['save'])){
$c=$_POST['customer'];
$a=$_POST['amount'];
$conn->query("INSERT INTO invoices(customer,amount) VALUES('$c','$a')");
echo "Saved";
}
?>