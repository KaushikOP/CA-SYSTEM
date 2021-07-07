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
            success: function(result) {
                if(result){
                    obj = JSON.parse(result);
                    $("#clientAddr").val(obj[0]);
                    $("#clientGST").val(obj[1]);
                }

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
            url: 'fetchClientList.php', // your php file
            type: 'POST', // type of the HTTP request
            data: { "id": id },
            success: function(result) {
                if(result){
                    var obj = JSON.parse(result);
                    $("#NclientAddr").val(obj[0]);
                    $("#NclientGST").val(obj[1]);

                }
            }
        });
    });


    $("#addBtn").click(function() {

        var pName = $('#perticularGSTName').val();
        var id = $('#perticulersGST option').filter(function() {
            return this.value == pName;
        }).data('id');

        $("#selectGSTParticular").before("<div class='m-3 col-auto row' id='divPerticularNo" + counterGST + "' ><input type='text' class='col-6 form-control mr-2' name='PerticularNo" + counterGST + "' value='" + $("#perticularGSTName").val() + "'readonly><input type='hidden' name='PerticularNo" + counterGST + "' value='"+id+"'><input type='number' class='form-control col-3 mr-2' name='PerticularAmt" + counterGST + "' required><button type='button' class='btn btn-danger col-auto' id='btnPerticularNo" + counterGST + "'  onclick='removeGSTDivision(" + counterGST + ")' >Remove</button></div>");

        $("#perticularGSTName").val("");
        counterGST++;
    });

    $("#addNBtn").click(function() {

        var pName = $('#NGSTPerticularName').val();
        var id = $('#perticulersNGST option').filter(function() {
            return this.value == pName;
        }).data('id');



        $("#selectNGSTParticular").before("<div class='m-3 col-auto row' id='divPerticularNo" + counterNGST + "' ><input type='text' class='col-6 form-control mr-2' name='PerticularNo" + counterNGST + "' value='" + $("#NGSTPerticularName").val() + "'readonly><input type='hidden' name='PerticularNo" + counterNGST + "' value='"+id+"'><input type='number' class='form-control col-3 mr-2' name='PerticularAmt" + counterNGST + "' required><button type='button' class='btn btn-danger col-auto' id='btnPerticularNo" + counterNGST + "'  onclick='removeNGSTDivision(" + counterNGST + ")' >Remove</button></div>");
        $("#NGSTPerticularName").val("");
        counterNGST++;
    });


    $("#firm").change(function() {
        var firmId = $('#firm').val();
        $.ajax({
            method: 'GET',
            url: "getInvoiceNo.php", 
            data: 'firmId='+firmId,
            success: function(result){
                $('#invoiceNumber').val(result[0]);
                $('#NinvoiceNumber').val(result[0]);
            }
        });
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
