
$("form#formdata").submit(function(e) {
    e.preventDefault();    
    var formData = new FormData(this);
    var form_data = new FormData(document.querySelector("#assignmentformcreate"));

    loaded_ass =1;

    $.ajax({

        // url: window.location.pathname,
        url: '<?= Yii::$app->homeUrl ?>assignmentsubmiteddata/assignmentsave/' + loaded_ass,

        type: 'POST',
        data: formData,
        success: function (data) {
            alert("h")
        },
        cache: false,
        contentType: false,
        processData: false
    });
});
///////////////
$('#asignmentDataform').on('submit', 'form', (event) => {
///////////

$('.submit_data').on('click', function(e) {
    
    ass_id  =   $(this).attr('value');
    
        //    $('#assignments').html('<p>res</p>')
        //      $('#asignmentmodal').modal('toggle')
    if(ass_id){

        $.ajax({
            url:   '<?= Yii::$app->homeUrl ?>assignmentsubmiteddata/create/'+ass_id,
            type: 'GET',
        }).done(function(response) {
            $('#asignmentDataform').html(response)
             $('#asignmentmodal').modal('toggle')
            // if (response.data.success == true) {
            //     console.log(response.data.message);
            // }
            // if (response.data.success == false) {
            //     toastr["error"](response.data.message, "Error");
            //     console.log(response.data.message);
            //     console.log(response.data.data);
            //     $('#login_button').prop('disabled', false);
            // }
        }).fail(function(response) {
            console.log('failsss')
            $('#login_button').prop('disabled', false);
        });


    }else{
    
    }

})


<div class="custom-progress progress progress-medium mb-3" id="mypageprogress" style="height: 2px;">
<div class="animated custom-bar progress-bar slideInLeft bg-green" style="width:100%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" role="progressbar"></div>
</div>