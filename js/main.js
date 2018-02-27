$(document).ready(function(){

    $("#centersList").on('change', function () {
        $.ajax({
            url: '/desk_list',
            type: 'POST',
            data: {
                id_callcenter: $(this).val()
            },
            success: function (data) {
                $('#deskList').prop('disabled', false);
                $("#deskList").empty().append($('<option>', {value: 0, text: 'Select Desk'}));
                for (var key in data) {
                    $("#deskList").append($('<option>', {value: data[key].id, text: (data[key].desk_name)}));
                }
            }
        });
    });

    $("#deskList").on('change', function () {
        $.ajax({
            url: '/team_list',
            type: 'POST',
            data: {
                id_desk: $(this).val()
            },
            success: function (data) {
                $('#teamList').prop('disabled', false);
                $("#teamList").empty().append($('<option>', {value: 0, text: 'Select Team'}));
                for (var key in data) {
                    $("#teamList").append($('<option>', {value: data[key].id, text: (data[key].team_name)}));
                }
            }
        });
    });

    $("#teamList").on('change', function () {
        $.ajax({
            url: '/user_list',
            type: 'POST',
            data: {
                id_team: $(this).val()
            },
            success: function (data) {
                $('#userList').prop('disabled', false);
                $("#userList").empty().append($('<option>', {value: 0, text: 'Select Salesman'}));
                for (var key in data) {
                    $("#userList").append($('<option>', {value: data[key].id, text: (data[key].stage_name)}));
                }
            }
        });
    });

});