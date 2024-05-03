<?php
namespace App\Providers;
use Illuminate\Support\Facades\Log;
class RFCValidator
{
    public function validate($inputRFC)
    {
        $RFC = strtoupper($inputRFC);

        // El RFC no puede comenzar con XXX
        if (strpos($RFC, "XXX") === 0) {
            $this->showErrorDialog('El RFC no puede empezar con XXX');
            return false;
        }

        // Validación por longitud del RFC
        $length = strlen($RFC);
        if ($length == 13) {
            return $this->validateRFC13($RFC);
        } elseif ($length == 12) {
            return $this->validateRFC12($RFC);
        } else {
            $this->showErrorDialog('Longitud inválida de RFC');
            return false;
        }
    }
    private function validateRFC13($RFC)
    {
        // Valida del 1 al 4 que sean letras
        if (!ctype_alpha($RFC[0]) || !ctype_alpha($RFC[1]) || !ctype_alpha($RFC[2]) || !ctype_alpha($RFC[3])) {
            $this->showErrorDialog('Los primeros 4 dígitos del RFC deben ser letras');
            return false;
        }
        // Valida del 5 al 10 sean numéricos
        $numericPart = substr($RFC, 4, 6);
        if (!ctype_digit($numericPart)) {
            $this->showErrorDialog('Los dígitos del 5 al 10 del RFC deben ser numéricos');
            return false;
        }
        // Valida que los dos dígitos del mes (7 y 8) no sean mayores a 12
        $month = intval(substr($RFC, 6, 2));
        if ($month > 12) {
            $this->showErrorDialog('Los dígitos 7 y 8 del RFC no deben ser mayores a 12');
            return false;
        }
        // Valida que los dos dígitos del día (9 y 10) no sean mayores a 31
        $day = intval(substr($RFC, 8, 2));
        if ($day > 31) {
            $this->showErrorDialog('Los dígitos 9 y 10 del RFC no deben ser mayores a 31');
            return false;
        }
        // Valida que si el último dígito es I el penúltimo debe ser 1
        $lastChar = substr($RFC, 12, 1);
        if ($lastChar == 'I') {
            $penultimateChar = substr($RFC, 11, 1);
            if ($penultimateChar != '1') {
                $this->showErrorDialog('Si el último dígito del RFC es I, el penúltimo debe ser 1');
                return false;
            }
        }
        return true;
    }
    private function validateRFC12($RFC)
    {
        // Valida que los dígitos del 1 al 3 no sean numéricos (identificador de empresa)
        if (!ctype_alpha($RFC[0]) || !ctype_alpha($RFC[1]) || !ctype_alpha($RFC[2])) {
            $this->showErrorDialog('Los primeros 3 dígitos del RFC deben ser letras');
            return false;
        }
        // Valida que los 6 dígitos del 4 al 9 sean numéricos (Fecha)
        $numericPart = substr($RFC, 3, 6);
        if (!ctype_digit($numericPart)) {
            $this->showErrorDialog('Los dígitos del 4 al 9 del RFC deben ser numéricos');
            return false;
        }
        // Valida que los dos dígitos del mes (6 y 7) no sean mayores a 12
        $month = intval(substr($RFC, 5, 2));
        if ($month > 12) {
            $this->showErrorDialog('Los dígitos 6 y 7 del RFC no deben ser mayores a 12');
            return false;
        }
        // Valida que los dos dígitos del día (8 y 9) no sean mayores a 31
        $day = intval(substr($RFC, 7, 2));
        if ($day > 31) {
            $this->showErrorDialog('Los dígitos 8 y 9 del RFC no deben ser mayores a 31');
            return false;
        }
        // Valida que si el último dígito es I el penúltimo debe ser 1
        $lastChar = substr($RFC, 11, 1);
        if ($lastChar == 'I') {
            $penultimateChar = substr($RFC, 10, 1);
            if ($penultimateChar != '1') {
                $this->showErrorDialog('Si el último dígito del RFC es I, el penúltimo debe ser 1');
                return false;
            }
        }
        return true;
    }
    private function showErrorDialog($message)
    {
        // Aquí puedes implementar la lógica para mostrar el mensaje de error en tu aplicación
        Log::error($message);
    }
}
// Ejemplo de uso
$inputRFC = "Your RFC here";
$validator = new RFCValidator();
$validator->validate($inputRFC);
