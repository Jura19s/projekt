<?php
//
echo "Dobro dosšli na stranicu.";
?>

<h1>Novosti</h1>
<?php echo "<p>Zadnja izmjena: 29. 9. 2026.</p>"; ?>

<?php
$nazivTvrtke = "SigurnaMreža d.o.o.";
$godinaOsnutka = 2019;
$cijenaPaketa = 149.90;
$radiDanas = true;

echo $nazivTvrtke;
echo "<p>Osnovani $godinaOsnutka.</p>";
echo "<p>Paket: " . $cijenaPaketa . " eura.</p>";
?>

<form action="https://formspree.io/f/moejzrzv" method="POST">
  <label for="newsletter-email">Prijava na newsletter</label>
  <input id="newsletter-email" type="email" name="email" required
         placeholder="tvoja@adresa.hr">
  <button type="submit">Prijavi me</button>
</form>