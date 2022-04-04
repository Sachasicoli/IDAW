$(document).ready(function(e){
    $('#submit').click(function(){
        var ID_ALIMENT = $('#ID_ALIMENT').val();
        var LIB_ALIMENT = $('#LIB_ALIMENT').val();
        var ID_TYPE = $('#ID_TYPE').val();
        $.ajax({
            type:'POST',
            data:{ID_ALIMENT:ID_ALIMENT,LIB_ALIMENT:LIB_ALIMENT,ID_TYPE:ID_TYPE},
            url:"insert.php", // php url where we post this data to save in database
            success: function(result){

                alert(result);

            }
        })


    });
});