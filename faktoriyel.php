<form action="faktoriyel.php" method="post">
	<input type="text" name="sayi">
	<input type="submit" name="hesapla" value="Hesapla">
</form>
<?php
if (isset($_POST['hesapla'])) {
    $sayi=$_POST['sayi'];
    $faktoriyel=1;

    for ($i=1;$i<=$sayi;$i++) {
        $faktoriyel=$faktoriyel*$i;
    }
    echo "Faktöriyel:".$faktoriyel;
}
?>