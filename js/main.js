$(document).ready(function(){

    $("#select1").on('change', function () {
        $.ajax({
            url: '../script2.php',
            type: 'POST',
            data: {
                id: $(this).val()
            },
            success: function (data) {
                data = JSON.parse(data);
                for (var key in data) {
                    $("#select2").append($('<option>', {value: data[key].id, text: (data[key].name)}));
                }
            }
        });
    });

    $("#select2").on('change', function () {
        $.ajax({
            url: '../script3.php',
            type: 'POST',
            data: {
                id: $(this).val()
            },
            success: function (data) {
                data = JSON.parse(data);
                for (var key in data) {
                    $("#select3").append($('<option>', {value: data[key].id, text: (data[key].name)}));
                }
            }
        });
    });

    $("#select3").on('change', function () {
        $.ajax({
            url: '../script4.php',
            type: 'POST',
            data: {
                id: $(this).val()
            },
            success: function (data) {
                data = JSON.parse(data);
                for (var key in data) {
                    $("#select4").append($('<option>', {value: data[key].id, text: (data[key].name)}));
                }
            }
        });
    });

});