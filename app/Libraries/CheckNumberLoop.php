<?php
namespace App\Libraries;

/**
 * Description of Helpers
 *
 * @author muri
 */
class CheckNumberLoop {
    
    private $input = 10;
    private $arrayCount = [];
    private $default = [];

    public function __construct($input) {
        $this->input = (int) $input;
    }
    
    /**
     * A. Jika bilangan tersebut kelipatan 3 maka program akan mencetak "Pasar 20"
     * B. Jika bilangan merupakan kelipatan bilangan 5 maka akan mencetak "Belanja pangan"
     * C. Jika bilangan merupakan kelipatan bilangan 3 dan 5 maka akan mencetak "Pasar 20 Belanja Pangan"
     * D. Jika program sudah mencetak kata "Pasar 20 Belanja Pangan" sebanyak 2 kali maka untuk bilangan kelipatan 3 akan mencetak "Belanja pangan" dan bilangan kelipatan 5 akan mencetak "Pasar 20"
     * E. Hentikan program ketika kata "Pasar 20 Belanja Pangan" telah tercetak sebanyak 5 kali.
     */
    public function run() {
        for($i=1;$i<=$this->input;$i++) {
            if(($i % 3 == 0) && ($i % 5 == 0)) {
                $this->default[$i] = "Pasar 20 Belanja Pangan";
                $arrCount = array_count_values($this->default);
                if($arrCount["Pasar 20 Belanja Pangan"] == 5) {
                    break;
                }
            } else {
                $arrCount = array_count_values($this->default);
                $labelP20 = "Pasar 20";
                $labelBp = "Belanja Pangan";

                if(isset($arrCount["Pasar 20 Belanja Pangan"]) && $arrCount["Pasar 20 Belanja Pangan"] == 2) {
                    $labelP20 = "Belanja Pangan";
                    $labelBp = "Pasar 20";
                }

                if($i % 3 == 0) {
                    $this->default[$i] = $labelP20;
                }

                if($i % 5 == 0) {
                    $this->default[$i] = $labelBp;
                }
            }
        }
    }

    public function getResult() {
        return [
            'data' => $this->default,
            'count' => array_count_values($this->default)
        ];
    }
    
}
