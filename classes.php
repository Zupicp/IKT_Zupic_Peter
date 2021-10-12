<?php
//Ez lesz ős osztály
class Forms{
    protected $uName;
    protected $uPass;
    protected $uNameErr;
    protected $uPassErr;
   
}

//Login űrlap validálásához létrehozott osztály
class LoginCheck extends Forms{
    function __construct($name, $password){
        $this->uName=$name;
        $this->uPass=$password;

        if(empty($name)){
            $this->uNameErr="A név mező nem lehet üres!";
        }
        else if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
            $this->uNameErr="Nem megfelelő formátum!";
        }
        else{
            $this->uNameErr="";
        }   

        $num=8-strlen($password);
        if(empty($password)){
            $this->uPassErr="A jeszó mező nem lehet üres!";
        }
        else if(strlen($password)<8){
            $this->uPassErr="A jeszó legalább 8 karakter legyen! Még: $num karakter kell!";
        }
        else{
            $this->uPassErr="";
        }  

    }

    public function getuName(){
        return $this->uName;
    }

    public function getuPass(){
        return $this->uPass;
    }

    public function getuNameErr(){
        return $this->uNameErr;
    }

    public function getuPassErr(){
        return $this->uPassErr;
    }
}

//Reisztrációs űrlap validálásához létrehozott osztály
class RegCheck extends Forms{
    
}
?>