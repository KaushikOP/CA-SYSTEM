<?php

// require 'fpdf.php';
// require('html2pdf/src/html2pdf.php');
// if(isset($_POST)){
//     $pdf = new FPDF();
//     $pdf -> AddPage();
//     $pdf->MultiCell(190,10,$pdf->WriteHTML($contents));
//     $pdf-> AddFont('Arial','',12);
//     $file = time().'.pdf';
//     $pdf->Output($file,'I');
// }

?>
<!DOCTYPE html>
<html>

<head>
    <title>Webslesson Tutorial | Export HTML Table data to PDF using TCPDF in PHP</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    <div class="text-center" style="margin-top: 3%;">
        <div class="col-md-3"></div>
        <!-- INVOICE Division -->
        <div class="col-md-6">

            <!-- Invoice Header -->
            <div class="row">
                <div style="display: inline-block;">
                    <img style="width:30%; float:left; margin-left:3%;" class="col-md-2" src="images/logo_download.jpg" alt="...">
                    <div style="float: right; font-family:'Book Antiqua'; color:rebeccapurple;">
                        <h1><b>Jinal Waghela & Associates</b></h1>
                        <h3><b>Proprietor : Jinal Mistry</b></h3>
                    </div>
                </div>
                <div>
                    <!-- Date and Invoice Table -->
                    <div style="display: inline-block; background:red; margin-left:5%;" class="col-md-12">
                        <div style="float:right;">
                            <table class="table table-borderless table-responsive">
                                <tbody>
                                    <tr>
                                        <th>Date:</th>
                                        <td style="border: 1px solid black;">[Date]</td>
                                    </tr>
                                    <tr>
                                        <th>Invoice:</th>
                                        <td style="border: 1px solid black;">[Invoice No.]</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <h3 style="float: left;">Invoice</h3>
                    </div>
                </div>
            </div>


            <!-- Bill To -->
            <div>
                <table class="table table-responsive table-bordered">
                    <tbody>
                        <tr>
                            <th colspan="12" style="background-color:rebeccapurple; color:white; padding-left:3%">Bill To:</th>
                        </tr>
                        <tr>
                            <th class="col-md-3 text-center">Name</th>
                            <td class="text-left">[Name]</td>
                        </tr>
                        <tr>
                            <th class="col-md-3 text-center">Address</th>
                            <td class="text-left">[address]</td>
                        </tr>
                        <tr>
                            <th class="col-md-3 text-center">Contact No.</th>
                            <td class="text-left">[contact no]</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Description Particulars -->
            <div class="mt-3">
                <table class="table table-responsive table-bordered table-striped">
                    <thead style="background-color:rebeccapurple; color:white;">
                        <th class="col-md-2 text-center">Sr. No</th>
                        <th class="col-md-7 text-center">Description</th>
                        <th class="col-md-3 text-center">Amount</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td class="text-left">Reply to Notice & Submission</td>
                            <td class="text-right">2,000.00</td>
                        </tr>
                    </tbody>
                </table>

                <b>
                    <p class="text-left">Amount in Words: &nbsp;&nbsp; Rupees Two Thousand Only</p>
                </b>
            </div>


            <!-- Bank/Payment Details -->
            <div style="margin-top: 2%;" class="row">
                <div class="col-md-8">
                    <table id="particulars" class="table table-borderless table-responsive">
                        <thead style="background-color:rebeccapurple; color:white;">
                            <th class="col-md-12 text-left" style="padding-left: 3%;">NEW Bank Details: Jinal Mistry</th>
                        </thead>
                        <tbody class="text-left">
                            <tr>
                                <td class="col-md-2">Bank: Indusind Bank</td>
                                <td rowspan="6" class="col-md-10">
                                    <img src="images/Payment QR.png" alt="...">
                                </td>
                            </tr>
                            <tr>
                                <td>Branch: Pune Camp</td>
                            </tr>
                            <tr>
                                <td><strong>Account No: 100121867251</strong></td>
                            </tr>
                            <tr>
                                <td>IFSC: INDB0000002</td>
                            </tr>
                            <tr>
                                <td>MICR Code: 411234002</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="col-md-4">
                    <hr>
                    <div class="row">
                        <p class="text-left col-md-5"><b>Total Rs.</b></p>
                        <p class="col-md-2"></p>
                        <p class="text-right col-md-5"><b>2,000.00</b></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 text-left">
                    <b>
                        <p>PAN: ATOPV2836L</p>
                    </b>
                </div>
                <div class="col-md-5"></div>
                <div class="col-md-4" style="text-align:left;">
                    <b>
                        <div id="forName">
                            FOR
                            <br><br>
                            Jinal Waghela & Associates
                        </div>
                        <br>
                        <div id="sign" style="margin-left:9.7%; font-family:'Mistral'; font-size:30px;">
                            Jinal Mistry
                        </div><br>
                        <div>
                            AUTHORIZED SIGNATORY
                        </div>
                    </b>
                </div>
            </div>

            <div class="text-center" style="margin: 2%;">
                <p>Make all cheques/Demand Drafts payable to &nbsp; <b style="font-size: 18px;"><u><i> Jinal Mistry</i></u></b></p><br>
                <p><b>Thank you for your business!</b></p>
                <p>Should you have any enquiries concerning this invoice, please contact <b>Jinal Mistry on 7977336144</b></p>
            </div>
            <hr style="background:black;">

            <div id="address" class="text-center">
                <p><b>502/A, Sharmin building, Shanti Park, Vallabh baug cross lane extn., Ghatkopar East, Mumbai 400077.</b></p>
                <p>Tel: +91 - 7977336144/+91 - 7666570182 Office: (020) - 4861 0391 E-mail: cajinalmistry@gmail.com / harshal@cahmistry.com</p>
            </div>

        </div>
        <div class="col-md-3"></div>
        <form method="POST">
            <input type="button" class="btn btn-success" name="create_pdf" onclick="window.print()" value="create_pdf" />
        </form>
</body>

</html>