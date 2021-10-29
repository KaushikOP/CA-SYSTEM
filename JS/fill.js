var counterGST = 1,
    counterNGST = 1,
    firmId = 0;
$(document).ready(function() {



    $("#fYear").change(function() {
        var year = $(this).val();

        $.ajax({
            url: "getInvoiceNo.php", // your php file
            type: "GET", // type of the HTTP request
            data: {
                "fYear": year,
                "firmId": firmId
            },
            success: function(result) {
                if (result) {
                    $("#NinvoiceNumber").val(result);
                }
            },
        });
    });

    $("#GSTForm,#NGSTForm").hide();

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
                if (result) {
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
                if (result) {
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

        $("#selectGSTParticular").before("<div class='m-3 col-auto row' id='divPerticularNo" + counterGST + "' ><input type='text' class='col-5 form-control mr-2' name='PerticularNo" + counterGST + "' value='" + $("#perticularGSTName").val() + "'readonly><input type='hidden' name='PerticularNo" + counterGST + "' value='" + id + "'><input type='text' class='form-control col-3 mr-2' name='PerticularNote" + counterGST + "'placeholder='Note'><input type='number' class='form-control col-2 mr-2' name='PerticularAmt" + counterGST + "' required placeholder='Taxable Amount'><button type='button' class='btn btn-danger col-auto' id='btnPerticularNo" + counterGST + "'  onclick='removeGSTDivision(" + counterGST + ")' >Remove</button></div>");

        $("#perticularGSTName").val("");
        counterGST++;
    });

    $("#addNBtn").click(function() {

        var pName = $('#NGSTPerticularName').val();
        var id = $('#perticulersNGST option').filter(function() {
            return this.value == pName;
        }).data('id');

        $("#selectNGSTParticular").before("<div class='m-3 col-auto row' id='divPerticularNo" + counterNGST + "' ><input type='text' class='col-5 form-control mr-2' name='PerticularNo" + counterNGST + "' value='" + $("#NGSTPerticularName").val() + "'readonly><input type='hidden' name='PerticularNo" + counterNGST + "' value='" + id + "'><input type='text' class='form-control col-3 mr-2' name='PerticularNote" + counterNGST + "' placeholder='Note'><input type='number' class='form-control col-2 mr-2' name='PerticularAmt" + counterNGST + "' required placeholder='Taxable Amount'><button type='button' class='btn btn-danger col-auto' id='btnPerticularNo" + counterNGST + "'  onclick='removeNGSTDivision(" + counterNGST + ")' >Remove</button></div>");
        $("#NGSTPerticularName").val("");
        counterNGST++;
    });


    $("#fYearGST").change(function() {
        var year = $(this).val();

        $.ajax({
            url: "getInvoiceNo.php", // your php file
            type: "GET", // type of the HTTP request
            data: {
                "fYear": year,
                "firmId": firmId
            },
            success: function(result) {
                if (result) {
                    $("#invoiceNumber").val(result);
                }
            },
        });
    });

    $("#firm").change(function() {
        firmId = $('#firm').val();
        var fYear = getFinancialYear();

        $.ajax({
            method: "GET",
            url: "getInvoiceNo.php",
            data: {
                "firmId": firmId,
                "fYear": fYear
            },
            success: function(result) {
                $("#invoiceNumber").val(result);
                $("#NinvoiceNumber").val(result);
                console.log(result);
            },
        });

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

        var id = $("#cityname option")
            .filter(function() {
                console.log(this.value);
                return this.value == name;
            })
            .data("id");

        //alert(id);
        $.ajax({
            url: "fetchClientList.php", // your php file
            type: "POST", // type of the HTTP request
            data: { id: id },
            success: function(result) {
                if (result) {
                    obj = JSON.parse(result);
                    console.log(obj[3]);
                    $("#clientAddr").val(obj[0]);
                    $("#clientGST").val(obj[1]);
                    $("#stateCode").val(obj[3]);
                }
            },
        });
    });

    $("#NclientName").change(function() {
        var name = $(this).val();
        //alert(name);

        var id = $("#Ncityname option")
            .filter(function() {
                console.log(this.value);
                return this.value == name;
            })
            .data("id");

        //alert(id);
        $.ajax({
            url: "fetchClientList.php", // your php file
            type: "POST", // type of the HTTP request
            data: { id: id },
            success: function(result) {
                if (result) {
                    var obj = JSON.parse(result);
                    console.log(obj + " DataN");
                    $("#NclientAddr").val(obj[0]);
                    $("#NclientGST").val(obj[1]);
                }
            },
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

    var divId = "#divPerticularNo" + cnt;
    $(divId).remove();
    counterNGST--;
}

function getFinancialYear() {
    var fiscalyear = "";
    var today = new Date();
    if (today.getMonth() + 1 <= 3) {
        fiscalyear =
            today.getFullYear() - 1 + "-" + ("" + today.getFullYear()).substr(2);
    } else {
        fiscalyear =
            today.getFullYear() + "-" + ("" + (today.getFullYear() + 1)).substr(2);
    }
    return fiscalyear;
}