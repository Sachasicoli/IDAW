        
     <?php
        include 'back/update/profil.php';
        include 'front/template/call_data.php';
        global $db;
    ?>
        <script src='data.js'></script>        
        <div class="container">
            <p>Votre profil</p>
            <table class="table">
                <thead>
                    <tr>
                        <th>EMAIL</th>
                        <th>PASSWORD</th>
                        <th>DATE_NAISSANCE</th>
                        <th>SEXE</th>
                        <th>NIV_PRATIQUE_SPORT</th>
                        <th>NOM</th>
                        <th>PRENOM</th>
                        <th>POIDS</th>
                        <th>TAILLE</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'template/call_data.php';
                    global $db;
                    $q = "SELECT * FROM `user` WHERE EMAIL='$_SESSION['login']';";

                    try {
                        $stmt = $db->query($q);

                        if ($stmt === false) {
                            die("Erreur");
                        }
                    } catch (PDOException $e) {
                        echo $e->getMessage();
                    }
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ ?>
                        <tr EMAIL="<?php echo $row['EMAIL']; ?>">
                            <td data-target="EMAIL"><?php echo $row['EMAIL']; ?></td>
                            <td data-target="PASSWORD"><?php echo $row['PASSWORD']; ?></td>
                            <td data-target="DATE_NAISSANCE"><?php echo $row['DATE_NAISSANCE']; ?></td>
                            <td data-target="SEXE"><?php echo $row['ID_ALIMENT']; ?></td>
                            <td data-target="NIV_PRATIQUE_SPORT"><?php echo $row['NIV_PRATIQUE_SPORT']; ?></td>
                            <td data-target="NOM"><?php echo $row['NOM']; ?></td>
                            <td data-target="PRENOM"><?php echo $row['PRENOM']; ?></td>
                            <td data-target="POIDS"><?php echo $row['POIDS']; ?></td>
                            <td data-target="TAILLE"><?php echo $row['TAILLE']; ?></td>
                            <td><a href="#" data-role="update" data-id="<?php echo $row['EMAIL'] ;?>">Update</a></td>
                        </tr>

                    <?php }
                    
                    ?>
                </tbody>
            </table>
        </div>
 <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content>-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>EMAIL</label>
                        <input type="email" id="EMAIL" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>PASSWORD</label>
                        <input type="text" id="PASSWORD" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>DATE_NAISSANCE</label>
                        <input type="text" id="DATE_NAISSANCE" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>SEXE</label>
                        <input type="text" id="SEXE" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>NIV_PRATIQUE_SPORT</label>
                        <input type="text" id="NIV_PRATIQUE_SPORT" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>NOM</label>
                        <input type="text" id="NOM" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>PRENOM</label>
                        <input type="text" id="PRENOM" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>POIDS</label>
                        <input type="text" id="POIDS" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>TAILLE</label>
                        <input type="text" id="TAILLE" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" id="save" class="btn btn-primary pull-right">Update</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<script>
    $(document),ready(function(){
    // append values in input fields
        $(document).on('click','a[data-role=update]',function(){
        var id = $(this).data('id');
        var EMAIL = $('#'+id).children('td[data-target=EMAIL]').text();
        var PASSWORD = $('#'+id).children('td[data-target=PASSWORD]').text();
        var DATE_NAISSANCE = $('#'+id).children('td[data-target=DATE_NAISSANCE]').date();
        var SEXE = $('#'+id).children('td[data-target=SEXE]').text();
        var NIV_PRATIQUE_SPORT = $('#'+id).children('td[data-target=NIV_PRATIQUE_SPORT]').text();
        var NOM = $('#'+id).children('td[data-target=NOM]').text();
        var PRENOM = $('#'+id).children('td[data-target=ID_ALIMENT]').text();
        var POIDS = $('#'+id).children('td[data-target=QUANTITE]').text();
        var TAILLE = $('#'+id).children('td[data-target=DATA]').text();
        
        $('#EMAIL').val(EMAIL);
        $('#PASSWORD').val(PASSWORD);
        $('#DATE_NAISSANCE').val(DATE_NAISSANCE);
        $('#SEXE').val(SEXE);
        $('#NIV_PRATIQUE_SPORT').val(NIV_PRATIQUE_SPORT);
        $('#NOM').val(NOM);
        $('#PRENOM').val(PRENOM);
        $('#POIDS').val(POIDS));
        $('#TAILLE').val(TAILLE);
        $('#myModal').modal('toggle');
    });
    // now create event to get data from fields and update in database
    $('#save').click(function(){
        var EMAIL = $('#EMAIL').val();
        var PASSWORD = $('#PASSWORD').val();
        var DATE_NAISSANCE = $('#DATE_NAISSANCE').val();
        var SEXE = $('#SEXE').val();
        var NIV_PRATIQUE_SPORT = $('#NIV_PRATIQUE_SPORT').val();
        var NOM = $('#NOM').val();
        var PRENOM = $('#PRENOM').val();
        var POIDS = $('#POIDS').val();
        var TAILLE = $('#TAILLE').val();


        $.ajax({
        url : 'back/update/historique.php',
        method : 'post',
        data : {EMAIL : EMAIL , PASSWORD : PASSWORD , DATE_NAISSANCE : DATE_NAISSANCE,
        SEXE : SEXE, NIV_PRATIQUE_SPORT : NIV_PRATIQUE_SPORT, NOM : NOM, PRENOM : PRENOM,
        POIDS : POIDS, TAILLE : TAILLE},
        success : function(response){
            // now update user record in table
            $('#' +id).children('td[data-target=EMAIL]').text(EMAIL);
            $('#' +id).children('td[data-target=PASSWORD]').text(PASSWORD);
            $('#' +id).children('td[data-target=DATE_NAISSANCE]').text(DATE_NAISSANCE);
            $('#' +id).children('td[data-target=SEXE]').text(SEXE);
            $('#' +id).children('td[data-target=NIV_PRATIQUE_SPORT]').text(NIV_PRATIQUE_SPORT);
            $('#' +id).children('td[data-target=NOM]').text(NOM);
            $('#' +id).children('td[data-target=PRENOM]').text(PRENOM);
            $('#' +id).children('td[data-target=POIDS]').text(POIDS);
            $('#' +id).children('td[data-target=TAILLE]').text(TAILLE);
            $('#myModal').modal('toggle');
        }
        });
    });
});
</script>