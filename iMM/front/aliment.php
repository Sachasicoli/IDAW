    <?php
        include 'back/delete/aliment.php';
        include 'back/update/aliment.php';
        include 'front/template/call_data.php';
        global $db;
    ?>
    
    <div class="container">
        <h2>Liste des aliments</h2>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th><input type ="checkbox" id="checkAll"></th>
                    <th>ID_ALIMENT</th>
                    <th>LIB_ALIMENT</th>
                    <th>ID_TYPE</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                
                $q = "SELECT * FROM `aliment`;";

                try {
                    $stmt = $db->query($q);

                    if ($stmt === false) {
                        die("Erreur");
                    }
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ ?>
                    <tr ID_ALIMENT="<?php echo $row['ID_ALIMENT']; ?>">
                        <td><input class="checkbox" type ="checkbox" id="<?php echo $row['ID_ALIMENT']?>"name="id[]"></td>
                        <td data-target="ID_ALIMENT"><?php echo $row['ID_ALIMENT']; ?></td>
                        <td data-target="LIB_ALIMENT"><?php echo $row['LIB_ALIMENT']; ?></td>
                        <td data-target="ID_TYPE"><?php echo $row['ID_TYPE']; ?></td>
                        <td><a href="#" data-role="update" data-id="<?php echo $row['ID_ALIMENT'] ;?>">Update</a></td>
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
            <!-- Modal content-->
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
                        <label>LIB_ALIMENT</label>
                        <input type="text" id="LIB_ALIMENT" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>ID_TYPE</label>
                        <input type="text" id="ID_TYPE" class="form-control">
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
                url : 'back/delete/aliment.php',
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
        var LIB_ALIMENT = $('#'+id).children('td[data-target=LIB_ALIMENT]').text();
        var ID_TYPE = $('#'+id).children('td[data-target=ID_TYPE]').text();
        
        $('#ID_ALIMENT').val(ID_ALIMENT);
        $('#LIB_ALIMENT').val(LIB_ALIMENT);
        $('#ID_TYPE').val(ID_TYPE);
        $('#myModal').modal('toggle');
    });
    // now create event to get data from fields and update in database
    $('#save').click(function(){
        var ID_ALIMENT = $('#ID_ALIMENT').val();
        var LIB_ALIMENT = $('#LIB_ALIMENT').val();
        var ID_TYPE = $('#ID_TYPE').val();
        $.ajax({
        url : 'back/update/aliment.php',
        method : 'post',
        data : {ID_ALIMENT : ID_ALIMENT , LIB_ALIMENT: LIB_ALIMENT , ID_TYPE : ID_TYPE},
        success : function(response){
            // now update user record in table
            $('#' +id).children('td[data-target=ID_ALIMENT]').text(ID_ALIMENT);
            $('#' +id).children('td[data-target=LIB_ALIMENT]').text(LIB_ALIMENT);
            $('#' +id).children('td[data-target=ID_TYPE]').text(ID_TYPE);
            $('#myModal').modal('toggle');
        }
        });
    });
});
</script>