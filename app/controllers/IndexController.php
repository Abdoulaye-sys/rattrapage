<?php
class IndexController {
  
    // Méthode pour récupérer les statistiques
    public function getStatistics() {
        global $con;

        $statistics = array();

        // Requête pour le nombre total de propriétés disponibles
        $queryTotalProperties = mysqli_query($con, "SELECT COUNT(pid) FROM property");
        $rowTotalProperties = mysqli_fetch_array($queryTotalProperties);
        $statistics['totalProperties'] = $rowTotalProperties[0];

        // Requête pour le nombre de propriétés à vendre disponibles
        $querySaleProperties = mysqli_query($con, "SELECT COUNT(pid) FROM property WHERE stype='sale'");
        $rowSaleProperties = mysqli_fetch_array($querySaleProperties);
        $statistics['totalSaleProperties'] = $rowSaleProperties[0];

        // Requête pour le nombre de propriétés à louer disponibles
        $queryRentProperties = mysqli_query($con, "SELECT COUNT(pid) FROM property WHERE stype='rent'");
        $rowRentProperties = mysqli_fetch_array($queryRentProperties);
        $statistics['totalRentProperties'] = $rowRentProperties[0];

        // Requête pour le nombre d'utilisateurs enregistrés
        $queryTotalUsers = mysqli_query($con, "SELECT COUNT(uid) FROM user");
        $rowTotalUsers = mysqli_fetch_array($queryTotalUsers);
        $statistics['totalUsers'] = $rowTotalUsers[0];

        return $statistics;
    }

    // Méthode pour récupérer les commentaires approuvés
    public function getApprovedFeedback() {
        global $con;

        $approvedFeedback = array();
        $query = mysqli_query($con, "SELECT feedback.*, user.* FROM feedback, user WHERE feedback.uid=user.uid AND feedback.status='1'");

        while ($row = mysqli_fetch_array($query)) {
            $approvedFeedback[] = $row;
        }

        return $approvedFeedback;
    }
}
?>
