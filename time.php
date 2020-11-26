<?php
$teraz = time();
echo "teraz jest: ".date('H:i:s d.m.Y', $teraz)."<br>";
$losowaLiczbaSekund = rand(0,7200); //od 0 sekund do 2 godzin
$przeszlosc = $teraz - $losowaLiczbaSekund;
echo "W przeszłości ".date('H:i:s d.m.Y', $przeszlosc)." od tego czasu minęło $losowaLiczbaSekund sekund"."<br>";


$produkcjaDrewnaGodzine = 1000;
$produkcja = ($produkcjaDrewnaGodzine / 3600) * $losowaLiczbaSekund;
echo "Od przeszłości do teraz wyprodukowano ".floor($produkcja)." Sztuk Drewna<br>";

$czasUlepszeniaTartaku = 2700; //45min

echo "Rozpoczęto ulepszanie tartaku na następny poziom<br>";
$tartakGotowy = time() + $czasUlepszeniaTartaku;
echo "Tartak będzie gotowy ".date('H:i:s d.m.Y', $tartakGotowy);


$produkcjaZlotaGodzine = 250;
$produkcjaZ = ($produkcjaZlotaGodzine / 900) * $losowaLiczbaSekund;
echo "Od przeszłości do teraz wyprodukowano ".floor($produkcjaZ)." Sztabek Złota<br>";

$czasUlepszeniaSkarbca = 2700; //45min

echo "Rozpoczęto ulepszanie budynku na następny poziom<br>";
$skarbiecGotowy = time() + $czasUlepszeniaSkarbca;
echo "Skarbiec będzie gotowy ".date('H:i:s d.m.Y', $skarbiecGotowy);


$produkcjaZelazaGodzine = 500;
$produkcjaZe = ($produkcjaZelazaGodzine / 1800) * $losowaLiczbaSekund;
echo "Od przeszłości do teraz wyprodukowano ".floor($produkcjaZe)." Sztabek Żelaza<br>";

$czasUlepszeniaKowala = 7200; //2h

echo "Rozpoczęto ulepszanie budynku na następny poziom<br>";
$kowalGotowy = time() + $czasUlepszeniaKowala;
echo "Kowal będzie gotowy ".date('H:i:s d.m.Y', $kowalGotowy);


$produkcjaKamieniaGodzine = 1500; 
$produkcjaK = ($produkcjaKamieniaGodzine / 5400) * $losowaLiczbaSekund;
echo "Od przeszłości do teraz wyprodukowano ".floor($produkcjaK)." Sztuk Kamienia<br>";

$czasUlepszeniaKamieniolomu = 1500; //25min

echo "Rozpoczęto ulepszanie budynku na następny poziom<br>";
$kamieniolomGotowy = time() + $czasUlepszeniaKamieniolomu;
echo "Kamieniołom będzie gotowy ".date('H:i:s d.m.Y', $kamieniolomGotowy);


$produkcjaBroniGodzine = 1500; 
$produkcjaB = ($produkcjaBroniGodzine / 5400) * $losowaLiczbaSekund;
echo "Od przeszłości do teraz wyprodukowano ".floor($produkcjaB)." Sztuk Broni<br>";

$czasUlepszeniaBarakow = 1500; //25min

echo "Rozpoczęto ulepszanie budynku na następny poziom<br>";
$BarakiGotowe = time() + $czasUlepszeniaBarakow;
echo "Baraki będą gotowe ".date('H:i:s d.m.Y', $BarakiGotowe);


$czasUlepszeniaRatusza = 10800; //3h

echo "Rozpoczęto ulepszanie Ratusza na następny poziom<br>";
$ratuszGotowy = time() + $czasUlepszeniaRatusza;
echo "Ratusz jest gotowy".date('H:i:s d.m.Y', $ratuszGotowy);
?>