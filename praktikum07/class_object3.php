<?php
class BMI
{
    public $beratBadan, $tinggiBadan;

    public function hitungBMI()
    {
        return $this->beratBadan / ($this->tinggiBadan * $this->tinggiBadan);
    }

    public function cekStatusBeratBadan()
    {
        if ($this->hitungBMI() < 18.5) {
            return "kekurangan berat badan";

        } elseif ($this->hitungBMI() >= 18.5 || $this->hitungBMI() <= 24.9){
            return "normal";
        } elseif ($this->hitunganBMI() >= 25 || $this->hitungBMI() <= 29){
            return "kelebihan berat badan";
        } elseif ($this->hitungBMI() >= 30){
            return "obesitas";
        }
    }
}
$objekBMI = new BMI;
$objekBMI->beratBadan = 62;
$objekBMI->tinggiBadan = 1.7;
echo round($objekBMI->hitungBMI());
echo "<br>";
echo $objekBMI->cekStatusBeratBadan();
?>
