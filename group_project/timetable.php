<table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
    <tr>
        <th><b>TIME</b></th>
        <th><b>Monday</b></th>
        <th><b>Tuesday</b></th>
        <th><b>Wednesday</b></th>
        <th><b>Thursday</b></th>
        <th><b>Friday</b></th>
    </tr>
    <tbody>
    <?php
        error_reporting(1);
        session_start();
        if ((isset($_SESSION['passwd'])) && (isset($_REQUEST['cls']))) {
            $classname = $_REQUEST['cls'];
            $conn = mysqli_connect("localhost", "root", "", "groupproject");
            $sql = "select DISTINCT (hour) as hour from modules where ModuleName = "."'$classname'";
            $rest = mysqli_query($conn, $sql);
            while($t = mysqli_fetch_assoc($rest)){
            $sql = "select * from modules where ModuleName = "."'$classname'". " AND hour = '".$t['hour']."'";
            //print_r($sql);exit;
            $res = mysqli_query($conn, $sql);
    ?>
    <tr>
        <td><?php echo $t['hour'] ?></td>
        <?php
                $week_days = array('Monday','Tuesday','wednesday','Thursday','Friday');
                $classes = array();
                while($row = mysqli_fetch_assoc($res)) {
                    $classes[$row['day']] = $row;
                }
                foreach ($week_days as $day) {
        ?>
        <?php if (array_key_exists($day, $classes)) { $row = $classes[$day]; ?>
        <td><?php echo $row['IDModule'] . '<br />' . $row['NumRoom'] ?></td>
        <?php } else { ?>
        <td>No Class</td>
        <?php } ?>
        <?php } ?>
    </tr>
    <?php } ?>
    </tbody>
</table>
