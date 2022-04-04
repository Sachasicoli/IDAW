        
     <?php
        include 'back/delete/historique.php';
        include 'back/update/historique.php';
        include 'front/template/call_data.php';
        global $db;
    ?>
        <script src='data.js'></script>        
        <div class="container">
            <p>Voilà la liste des repas:</p>
            <table class="table">
                <thead>
                    <tr>
                        <th><input type=checkbox id="CheckAll"></th>
                        <th>ID_ALIMENT</th>
                        <th>QUANTITE</th>
                        <th>DATE</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'template/call_data.php';
                    global $db;
                    $q = "SELECT * FROM `consommer` WHERE EMAIL='$_SESSION['login']';";

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
                            <td><input class="checkbox" type ="checkbox" id="<?php echo $row['EMAIL']?>"name="id[]"></td>
                            <td data-target="ID_ALIMENT"><?php echo $row['ID_ALIMENT']; ?></td>
                            <td data-target="QUANTITE"><?php echo $row['QUANTITE']; ?></td>
                            <td data-target="DATE"><?php echo $row['DATE']; ?></td>
                            <td><a href="#" data-role="update" data-id="<?php echo $row['EMAIL'] ;?>">Update</a></td>
                        </tr>

                    <?php }
                    
                    ?>
                </tbody>
            </table>

            <br/>
            <button type ="button" class="btn btn-danger" id="delete">Supprimer la sélection </button>

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
                        <label>ID_ALIMENT</label>
                        <input type="text" id="ID_ALIMENT" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>QUANTITE</label>
                        <input type="text" id="QUANTITE" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>DATE</label>
                        <input type="date" id="DATE" class="form-control">
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
    $(document).ready(function(){
        $('#checkAll').click(function(){
            if(this.checked){
                $('.checkbox').each(function(){
                    this.checked = true;

                });
            }else{
                $('.checkbox').each(function(){
                    this.checked = false;
                });
            }
            
        });
        $('#delete').click(function(){
            var dataArr = new Array();
            if ($('input:checkbox:checked').length>0){
                $('input:checkbox:checked').each(function(){
                    dataArr.push($(this).attr('id'));
                    $(this).closest('tr').remove();

                });
                sendResponse(dataArr);

            }else{
                alert('Aucun enregistrement sélectionné');
            }

        });
        function sendResponse(dataArr){
            $.ajax({
                type : 'post',
                url : 'back/delete/historique.php',
                data : {'data':dataArr},
                success : function(response){
                    alert(response);
                }
                error: : function(response){
                    alert(errResponse);
                }

            });
        }

    });
    $(document),ready(function(){
    // append values in input fields
        $(document).on('click','a[data-role=update]',function(){
        var id = $(this).data('id');
        var ID_ALIMENT = $('#'+id).children('td[data-target=ID_ALIMENT]').text();
        var QUANTITE = $('#'+id).children('td[data-target=QUANTITE]').text();
        var DATE = $('#'+id).children('td[data-target=DATE]').text();
        
        $('#ID_ALIMENT').val(ID_ALIMENT);
        $('#QUANTITE').val(QUANTITE);
        $('#DATE').val(DATE);
        $('#myModal').modal('toggle');
    });
    // now create event to get data from fields and update in database
    $('#save').click(function(){
        var ID_ALIMENT = $('#ID_ALIMENT').val();
        var QUANTITE = $('#QUANTITE').val();
        var DATE = $('#DATE').val();
        $.ajax({
        url : 'back/update/historique.php',
        method : 'post',
        data : {ID_ALIMENT : ID_ALIMENT , QUANTITE: QUANTITE , DATE : DATE},
        success : function(response){
            // now update user record in table
            $('#' +id).children('td[data-target=ID_ALIMENT]').text(ID_ALIMENT);
            $('#' +id).children('td[data-target=QUANTITE]').text(QUANTITE);
            $('#' +id).children('td[data-target=DATE]').text(DATE);
            $('#myModal').modal('toggle');
        }
        });
    });
});
</script>