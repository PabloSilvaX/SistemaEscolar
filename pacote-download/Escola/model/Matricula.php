<?php

class Matricula{
    
    public function checarEmail($email){
        return checkdnsrr($email);
    }
}

?>