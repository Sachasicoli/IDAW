<?php
    include 'front/template/call_data.php';
    global $db;
    if (isset($_POST['data'])){
        $dataArr = $_POST['data'];
        foreach($dataArr as $id){
            $db->exec("DELETE FROM 'CONSOMMER' WHERE ID_ALIMENT='$id';");
        }
    }
?>