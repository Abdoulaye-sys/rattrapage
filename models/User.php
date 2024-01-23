<?php
class User {
    public $uid;
    public $uname;
    public $uemail;
    public $uphone;
    public $upass;
    public $utype;
    public $uimage;

    // Constructeur
    public function __construct($uid, $uname, $uemail, $uphone, $upass, $utype, $uimage) {
        $this->uid = $uid;
        $this->uname = $uname;
        $this->uemail = $uemail;
        $this->uphone = $uphone;
        $this->upass = $upass;
        $this->utype = $utype;
        $this->uimage = $uimage;
    }

    // Getter et Setter pour uid
    public function getUid() {
        return $this->uid;
    }

    public function setUid($uid) {
        $this->uid = $uid;
    }

    // Getter et Setter pour uname
    public function getUname() {
        return $this->uname;
    }

    public function setUname($uname) {
        $this->uname = $uname;
    }

    // Ajoutez des getters et setters pour les autres propriétés...

    // Getter et Setter pour uimage
    public function getUimage() {
        return $this->uimage;
    }

    public function setUimage($uimage) {
        $this->uimage = $uimage;
    }

    // Ajoutez d'autres getters et setters pour les propriétés manquantes...

}
