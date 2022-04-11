<body>
    <article>
        <table border="2" style= "background-color: #FFFFFF; color: #000000; margin: 0 auto;" >
              <tr>
                <th><b>Monday</b></th>
                <th><b>Tuesday</b></th>
                <th><b>Wednesday</b></th>
                <th><b>Thursday</b></th>
                <th><b>Friday</b></th>
              </tr>
            <tbody>
                <h1>Class Wise Time Table</h1>
                <nav>
                    <a href="index.php">Home</a>
                </nav>
                <?php/*
                    $days_data = array();
                    while($row = mysqli_fetch_assoc($res)){
                            $days_data[$row['day']] == $row;
                    }

                    if($days_data):
                        $week_days = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
                        foreach($week_days as $wday){
                            if(!empty($days_data[$wday])){
                                $row_data = $days_data[$wday]; // $row_data contains all of the data from that specific day time,name,teacher and etc...
                                // there is data for this day
                            } else {
                                // no data for the day currently in loop
                            }
                        }
                    endif;        
                */?>
                </tbody>
            </table>