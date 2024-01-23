<?php
// models/Property.php
class Property {
    // Propriétés publiques
    public $pid;
    public $title;
    public $pcontent;
    public $type;
    public $bhk;
    public $stype;
    public $bedroom;
    public $bathroom;
    public $balcony;
    public $kitchen;
    public $hall;
    public $floor;
    public $size;
    public $price;
    public $location;
    public $city;
    public $state;
    public $feature;
    public $pimage;
    public $pimage1;
    public $pimage2;
    public $pimage3;
    public $pimage4;
    public $uid;
    public $status;
    public $mapimage;
    public $topmapimage;
    public $groundmapimage;
    public $totalfloor;
    public $date;
    public $isFeatured;
    public $disponibilite;

    // Constructeur
    public function __construct($pid, $title, $pcontent, $type, $bhk, $stype, $bedroom, $bathroom, $balcony, $kitchen, $hall, $floor, $size, $price, $location, $city, $state, $feature, $pimage, $pimage1, $pimage2, $pimage3, $pimage4, $uid, $status, $mapimage, $topmapimage, $groundmapimage, $totalfloor, $date, $isFeatured, $disponibilite) {
        $this->pid = $pid;
        $this->title = $title;
        $this->pcontent = $pcontent;
        $this->type = $type;
        $this->bhk = $bhk;
        $this->stype = $stype;
        $this->bedroom = $bedroom;
        $this->bathroom = $bathroom;
        $this->balcony = $balcony;
        $this->kitchen = $kitchen;
        $this->hall = $hall;
        $this->floor = $floor;
        $this->size = $size;
        $this->price = $price;
        $this->location = $location;
        $this->city = $city;
        $this->state = $state;
        $this->feature = $feature;
        $this->pimage = $pimage;
        $this->pimage1 = $pimage1;
        $this->pimage2 = $pimage2;
        $this->pimage3 = $pimage3;
        $this->pimage4 = $pimage4;
        $this->uid = $uid;
        $this->status = $status;
        $this->mapimage = $mapimage;
        $this->topmapimage = $topmapimage;
        $this->groundmapimage = $groundmapimage;
        $this->totalfloor = $totalfloor;
        $this->date = $date;
        $this->isFeatured = $isFeatured;
        $this->disponibilite = $disponibilite;
    }

    // Getter pour pid
    public function getPid() {
        return $this->pid;
    }

    // Setter pour pid
    public function setPid($pid) {
        $this->pid = $pid;
    }

    public function getTitle() {
        return $this->title;
    }

    // Setter pour pcontent
    public function setpcontent($pcontent) {
        $this->pcontent = $pcontent;
    }


    public function getpcontent() {
        return $this->pcontent;
    }
    public function gettype() {
        return $this->type;
    }

    // Setter pour type
    public function settype($type) {
        $this->type = $type;
    }


    public function getbhk() {
        return $this->bhk;
    }

    // Setter pour bhk
    public function setbhk($bhk) {
        $this->bhk = $bhk;
    }


    // Getter pour disponibilite
    public function getDisponibilite() {
        return $this->disponibilite;
    }

    // Setter pour disponibilite
    public function setDisponibilite($disponibilite) {
        $this->disponibilite = $disponibilite;
    }
    // Getter pour la taille
public function getSize() {
    return $this->size;
}

// Setter pour la taille
public function setSize($size) {
    $this->size = $size;
}

// Getter pour le nombre de lits
public function getBeds() {
    return $this->bedroom; // Assumption: bedroom represents the number of beds
}

// Setter pour le nombre de lits
public function setBeds($bedroom) {
    $this->bedroom = $bedroom;
}

// Getter pour le nombre de salles de bains
public function getBaths() {
    return $this->bathroom;
}

// Setter pour le nombre de salles de bains
public function setBaths($bathroom) {
    $this->bathroom = $bathroom;
}
public function getprice() {
    return $this->price;
}

// Setter pour le price
public function setprice($price) {
    $this->price = $price;
}
public function setkitchen($kitchen) {
    $this->kitchen = $kitchen;
}
public function getkitchen() {
    return $this->kitchen;
}
public function setlocation($location) {
    $this->location = $location;
}
public function getlocation() {
    return $this->location;
}
public function setbalcony($balcony) {
    $this->balcony = $balcony;
}
public function getbalcony() {
    return $this->balcony;
}
public function setpimage($pimage) {
    $this->pimage = $pimage;
}
public function getpimage() {
    return $this->pimage;
}
public function setdate($date) {
    $this->date = $date;
}
public function getdate() {
    return $this->date;
}



}
