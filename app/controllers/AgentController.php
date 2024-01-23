<?php

class AgentController {
    
    public function getAgents() {
        global $con;

        $query = mysqli_query($con, "SELECT * FROM user WHERE utype='agent'");
        $agents = [];

        while ($row = mysqli_fetch_array($query)) {
            $agents[] = $row;
        }

        return $agents;
    }
}
?>
