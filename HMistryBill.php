<!DOCTYPE html>

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- CSS only -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link href="Bootstrap/css/bootstrap.min.css">
        <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- JavaScript Bundle with Popper -->
    </head>
    <body>
        <div class="container bg-muted border border-dark">
            <div class="col-12 row">
                <h3 class="text-light text-center col-7 font-italic text-decoration-underline p-1 m-1" style="background:darkslateblue;">TAX INVOICE</h3>
                <h4 class="text-light text-center col-2 p-1 m-1" id="billNo" style="background:darkslateblue;">2021-22/002</h4>
                <h4 class="text-light text-center col-2 p-1 m-1" id="totalAmt" style="background:darkslateblue;">Rs. 8206.00</h4>
            </div>
            <div class="col-12 row">
                <div class="font-italic col-8">
                    <h2 class="text-decoration-underline" style="color:darkslateblue;">H MISTRY & ASSOCIATES</h2>
                    <h4 style="color:darkslateblue;">CHARTERED ACCOUNTANTS</h4>
                    <h6 style="color:darkslateblue;">GSTN: 27 AAJFH7055D 1ZD</h6>
                </div>
                <div class="col-auto mt-1">
                    <img class="img-thumbnail rounded float-right" width="125" src="CAPic.jpg" alt="">
                </div>
            </div>
            <hr>
            <div class="mx-5">
                <h6><i style="color:darkslateblue;"> ✉ : haresh@cahmistry.com | harshal@cahmistry.com | ✆ : (020) - 48610391 | 📱 : +91 - 9822028128 | +91 - 7666570182</i></h6>
            </div>
            <h3 class="text-decoration-underline text-center mx-5 my-2">Billing Details</h3>
            <div class=" row mx-5 col-12">
                <div class="col-8">
                    <h5 class="">Tara Mobile Creches</h5>
                    <p>1st Floor, Parvati Sadan, Lane 14, After Pune International School, Tingrenagar, Pune-411015</p>
                    <h6>GSTN: N.A.</h6>
                    <div class="row col-12">
                        <h6 class="col-6">State: Maharashtra</h6>
                        <h6 class="col-6">Code: 27</h6>
                    </div>
                </div>
                <div class="col-4">
                    <div class="col-6 border border-muted">
                        <b>Payment Terms:</b>
                        <h6>On Receipt</h6>
                    </div>
                    <div class="col-6 border border-muted">
                        <b>Invoice Date:</b>
                        <h6>22/04/2021</h6>
                    </div>                    
                </div>
            </div>
            <div class="col-11 mx-5 my-2">
            
            <table class="table text-center table-bordered table-striped">
                <thead>
                    <tr>
                    <th rowspan="2" scope="col">Sr.</th>
                    <th rowspan="2" scope="col">Item Description</th>
                    <th rowspan="2" scope="col">SAC</th>
                    <th rowspan="2" scope="col">Taxable Value (Rs)</th>
                    <th colspan="2" scope="colgroup">CGST</th>
                    <th colspan="2" scope="colgroup">SGST</th>
                    <th colspan="2" scope="colgroup">IGST</th>
                    <th rowspan="2" scope="col">Total(Rs)</th>
                    </tr>
                    <tr>
                    <th>Rate</th>
                    <th>Amount</th>
                    <th>Rate</th>
                    <th>Amount</th>
                    <th>Rate</th>
                    <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Accounting and Bookkeeping Fees</td>
                        <td>998214</td>
                        <td>7000.00</td>
                        <td>9</td>
                        <td>630.00</td>
                        <td>9</td>
                        <td>630.0</td>
                        <td>18</td>
                        <td>-</td>
                        <td>8260.00</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>INCOME TAX RETURN FILING FEES</td>
                        <td>998214</td>
                        <td>7000.00</td>
                        <td>9</td>
                        <td>630.00</td>
                        <td>9</td>
                        <td>630.0</td>
                        <td>18</td>
                        <td>-</td>
                        <td>8260.00</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>GST RETURN FILING FEES</td>
                        <td>998214</td>
                        <td>7000.00</td>
                        <td>9</td>
                        <td>630.00</td>
                        <td>9</td>
                        <td>630.0</td>
                        <td>18</td>
                        <td>-</td>
                        <td>8260.00</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>E - TDS RETURN FILING FEES</td>
                        <td>998214</td>
                        <td>7000.00</td>
                        <td>9</td>
                        <td>630.00</td>
                        <td>9</td>
                        <td>630.0</td>
                        <td>18</td>
                        <td>-</td>
                        <td>8260.00</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Other legal services</td>
                        <td>998214</td>
                        <td>7000.00</td>
                        <td>9</td>
                        <td>630.00</td>
                        <td>9</td>
                        <td>630.0</td>
                        <td>18</td>
                        <td>-</td>
                        <td>8260.00</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Certification Fees</td>
                        <td>998214</td>
                        <td>7000.00</td>
                        <td>9</td>
                        <td>630.00</td>
                        <td>9</td>
                        <td>630.0</td>
                        <td>18</td>
                        <td>-</td>
                        <td>8260.00</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Certification Fees</td>
                        <td>998214</td>
                        <td>7000.00</td>
                        <td>9</td>
                        <td>630.00</td>
                        <td>9</td>
                        <td>630.0</td>
                        <td>18</td>
                        <td>-</td>
                        <td>8260.00</td>
                    </tr>
                </tbody>
            </table>

            </div>

            <div class="row col-12">
                <div class="col-6">
                    <h6 class="text-center">Certified that the particulars given above are true and correct</h6>
                    <h6 class="text-center">Reverse Charge Applicability: <b><i>No</i></b></h6>
                    <div class="row col-12">
                        <h6 class="col-6 text-center">State: Maharashtra</h6>
                        <h6 class="col-6 text-center">Code: 27</h6>
                    </div>
                    <h5 class="mt-2">Total Amount in Words:</h5>
                    <h5>Rupees Eight Thousand Two Hundred Sixty only</h5>

                    <h6 class="mt-3">Bank Details:</h6>
                    <h5>H Mistry & Associates</h5>
                    <h5>Bank: INDUSIND BANK</h5>
                    <h6>Branch: Pune Branch</h6>
                    <h6 class="mt-2">A/c No.:257666570182</h6>
                    <h6>IFSC : INDB0000002</h6>
                </div>
                <div class="col-6">
                    <table class="text-right mr-5 mb-3" width="100%" align="right">
                        <tr>
                        <td>Total Amount before Tax(Rs)</td>
                        <td class="px-5"></td>
                        <td>7000</td>
                        </tr>
                        <tr>
                        <td>Add: CGST(Rs)</td>
                        <td></td>
                        <td>630.0</td>
                        </tr>
                        <tr>
                        <td>Add: SGST(Rs)</td>
                        <td></td>
                        <td>630.0</td>
                        </tr>
                        <tr>
                        <td>Add: IGST(Rs)</td>
                        <td></td>
                        <td>-</td>
                        </tr>
                        <tr>
                        <td>Total Tax Amount(Rs)</td>
                        <td></td>
                        <td>1260.0</td>
                        </tr>
                        <tr class="font-weight-bold">
                        <td>Total Amount After Tax(Rs)</td>
                        <td></td>
                        <td class=" border-start-0 border-bottom-0 border-end-0 border-4 border-warning">8260.00</td>
                        </tr>
                        <tr>
                        <td>GST on Reverse Charge</td>
                        <td></td>
                        <td>0</td>
                        </tr>
                    </table>
                    <h5 class="text-center">FOR H MISTRY & ASSOCIATES</h5>
                    <h6 class="text-center">CHARTERED ACCOUNTANTS</h6>
                    <img src="HMistry.jpg" class="border-0 mx-auto d-block img-thumbnail" alt="">
                    <h6 class="text-center">Authorized Signature</h6>
                </div>
            </div>
            <h5 class="text-center">Thank you for your Business!</h5>
            
            <h6 class="text-center mt-2">327, C-wing, Clover Center,7, Moledina Road, Camp, Pune-411001.</h6>
        </div>
    </body>
</html>