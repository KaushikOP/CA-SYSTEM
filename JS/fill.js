var counterGST = 1,
    counterNGST = 1;
$(document).ready(function() {

    $("#GSTForm,#NGSTForm").hide();

    $("#firm").change(function() {
        if ($(this).val() == 3) {
            $("#firmName").text("H. Mistry & Associates");
            $("#GSTForm").show();
            $("#NGSTForm").hide();
        } else {
            if ($(this).val() == 1) {
                $("#firmName").text("Jinal Waghela & Associates");
            } else {
                $("#firmName").html("MoneySphere Solutions");
            }
            $("#GSTForm").hide();
            $("#NGSTForm").show();
        }
    });

    $("#clientName").change(function() {
        var name = $(this).val();
        //alert(name);

        var id = $('#cityname option').filter(function() {
            console.log(this.value);
            return this.value == name;
        }).data('id');

        //alert(id);
        $.ajax({
            url: 'fetchClientList.php', // your php file
            type: 'POST', // type of the HTTP request
            data: { "id": id },
            success: function(data) {
                var obj = jQuery.parseJSON(data);
                $("#clientAddr").val(obj[0]);
                $("#clientGST").val(obj[1]);
            }
        });
    });


    $("#NclientName").change(function() {
        var name = $(this).val();
        //alert(name);

        var id = $('#Ncityname option').filter(function() {
            console.log(this.value);
            return this.value == name;
        }).data('id');

        //alert(id);
        $.ajax({
            url: 'test.php', // your php file
            type: 'POST', // type of the HTTP request
            data: { "id": id },
            success: function(data) {
                var obj = jQuery.parseJSON(data);
                $("#NclientAddr").val(obj[0]);
                $("#NclientGST").val(obj[1]);
            }
        });
    });


    $("#addBtn").click(function() {
        $("#selectGSTParticular").before("<div class='m-3 col-auto row' id='divPerticularNo" + counterGST + "' ><input type='text' class='col-6 form-control mr-2' name='PerticularNo" + counterGST + "' value='" + $("#perticularGSTName").val() + "'readonly><input type='number' class='form-control col-3 mr-2' name='PerticularAmt" + counterGST + "' required><button type='button' class='btn btn-danger col-auto' id='btnPerticularNo" + counterGST + "'  onclick='removeGSTDivision(" + counterGST + ")' >Remove</button></div>");
        $("#perticularGSTName").val("");
        counterGST++;
    });

    $("#addNBtn").click(function() {
        console.log($("#NGSTPerticularName").val());

        $("#selectNGSTParticular").before("<div class='m-3 col-auto row' id='divPerticularNo" + counterNGST + "' ><input type='text' class='col-6 form-control mr-2' name='PerticularNo" + counterNGST + "' value='" + $("#NGSTPerticularName").val() + "'readonly><input type='number' class='form-control col-3 mr-2' name='PerticularAmt" + counterNGST + "' required><button type='button' class='btn btn-danger col-auto' id='btnPerticularNo" + counterNGST + "'  onclick='removeNGSTDivision(" + counterNGST + ")' >Remove</button></div>");
        $("#NGSTPerticularName").val("");
        counterNGST++;
    });
});

function removeGSTDivision(cnt) {
    var divId = "#divPerticularNo" + cnt;
    $(divId).remove();
    counterGST--;
}

function removeNGSTDivision(cnt) {
    var divId = "#divPerticularNo" + cnt;
    $(divId).remove();
    counterNGST--;
}