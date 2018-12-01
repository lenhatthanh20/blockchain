$(document).ready(function(){
    $('#read').click(function(){
        var value = $('#inputAction').val();
        if(value === 'information') {
            var recordEncrypt = $('#sym1').text();
            globleVar = 'information';
        }
        if(value === 'health') {
            var recordEncrypt = $('#sym2').text();
            globleVar = 'health';
        }
        if(value === 'action') {
            var recordEncrypt = $('#sym3').text();
            globleVar = 'action';
        }
        if(value === 'latest') {
            var recordEncrypt = $('#sym4').text();
            globleVar = 'latest';
        }

        $.post('dashboard.php', {field: value, record: recordEncrypt},
            function(returnedData){
                    if(value === 'information') {
                        //$('#sym1').html(returnedData);
                        globleVar3 = returnedData;
                    }
                    if(value === 'health') {
                        //$('#sym2').html(returnedData);
                        globleVar3 = returnedData;
                    }
                    if(value === 'action') {
                        //$('#sym3').html(returnedData);
                        globleVar3 = returnedData;
                    }
                    if(value === 'latest') {
                        //$('#sym4').html(returnedData);
                        globleVar3 = returnedData;
                    }
            }).fail(function(){
            console.log("error");
        });
    });

    $(document).on("click", "#accept", function() {
        $.post('confirm.php', {confirm: 'ok'},
        function(returnedData){
            alert('asdfsdfasdf');
        });
    });
});