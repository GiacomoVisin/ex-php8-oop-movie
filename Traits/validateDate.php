<?php 

trait validateDate
{
    // Metodo per verificare se giorno, mese e anno formano una data reale
    public function isValidDate($day, $month, $year)
    {
        // Convertiamo i valori in interi
        $d = (int)$day;
        $m = (int)$month;
        $y = (int)$year;

        // checkdate(mese, giorno, anno) restituisce true se la data esiste
        return checkdate($m, $d, $y);
    }
}



?>