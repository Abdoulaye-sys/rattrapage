<?php
// controllers/PropertyController.php
include_once("../models/Property.php");

class PropertyController {
    
    public function getRecentProperties() {
        global $con;

        // Sélectionnez explicitement toutes les colonnes de la table property
        $query = mysqli_query($con, "SELECT * FROM `property` ORDER BY date DESC LIMIT 9");
        $properties = [];

        while ($row = mysqli_fetch_array($query)) {
            // Utilisation de la classe Property
            $property = new Property(
                $row['pid'], $row['title'], $row['pcontent'], $row['type'], $row['bhk'],
                $row['stype'], $row['bedroom'], $row['bathroom'], $row['balcony'], $row['kitchen'],
                $row['hall'], $row['floor'], $row['size'], $row['price'], $row['location'], $row['city'],
                $row['state'], $row['feature'], $row['pimage'], $row['pimage1'], $row['pimage2'],
                $row['pimage3'], $row['pimage4'], $row['uid'], $row['status'], $row['mapimage'],
                $row['topmapimage'], $row['groundmapimage'], $row['totalfloor'], $row['date'],
                $row['isFeatured'], $row['disponibilite']
            );
            $properties[] = $property;
        }

        return $properties;
    }
}
