<table border="5" style= "background-color: #FFFFFF; color: #000000; margin: 0 auto;" >
    <tr>
        <!-- Colonnes -->
        <th><b>Day</b></th>
        <th><b>Hour</b></th>
        <th><b>Module name</b></th>
        <th><b>Module ID</b></th>
        <th><b>Classroom</b></th>
        <th><b>Professor</b></th>
    </tr>
    <tbody>

    <?php
        session_start();
        if ((isset($_SESSION['passwd']))) //SI la session est ouverte
        {
            //Connexion à la bdd :
            $database = new PDO('mysql:host=localhost;dbname=groupproject', 'root', '');
            //Récupération de la tables des modules :
            $allModules = $database->query('SELECT * FROM modules');
            //Récupération de la table dans un tableau :
            $modulesList = $allModules->fetchAll();
            //Boucle pour parcourir chaque module :
            foreach($modulesList as $module){
            ?>
            <!-- Retour en HTML -->
            <tr>
                <td><?php echo $module['day']; ?></td>
                <td><?php echo $module['hour']; ?></td>
                <td><?php echo $module['ModuleName']; ?></td>
                <td><?php echo $module['IDModule']; ?></td>
                <td><?php echo $module['NumRoom']; ?></td>
            </tr>
            <!-- Retour en PHP -->
            <?php
            }
        }
    ?>
    </tbody>
</table>
