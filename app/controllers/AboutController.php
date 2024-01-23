<?php

class AboutController
{
    private $con;

    public function __construct($con)
    {
        $this->con = $con;
    }

    public function getAboutData()
    {
        $aboutData = [];

        $query = mysqli_query($this->con, "SELECT * FROM about");
        while ($row = mysqli_fetch_array($query)) {
            $aboutData[] = [
                'title' => $row['1'],
                'content' => $row['2'],
                'image' => $row['3']
            ];
        }

        return $aboutData;
    }
}
?>
