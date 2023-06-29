<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Invoice</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row p-5 m-5">
            <div class="col-12">
                <h3>Select Invoice</h3>
                <div class="mb-3 mt-3">
                    <label class="form-label">Select an Invoice to Pay</label>
                    <select class="form-select" id="select">
                        <option value="1">IN001</option>
                        <option value="2">IN002</option>
                        <option value="3">IN003</option>
                        <option value="4">IN004</option>
                    </select>
                </div>
            </div>
            <div class="col-6 mt-2">
                <button class="btn btn-primary" onclick="proceed();">Proceed</button>
            </div>
            <div class="col-6 mt-2">
                <h6>Invoice Amount : Rs.<span class="text-danger" id="value">00</span></h6>
            </div>
            <div class="col-12">
            <h3 class="mt-3">Generate Customer Receipt</h3>
            <div class="mb-3">
                <label class="form-label">Customer Name</label>
                <input type="text" class="form-control" placeholder="Enter Name" id="name">
            </div>
            <div class="mb-3">
                <label class="form-label">Cheque Number</label>
                <input type="number" class="form-control" placeholder="Enter Cheque Number" id="cheqno" min="1">
            </div>
            <div class="mb-3">
                <label class="form-label">Check Amount</label>
                <input type="number" class="form-control" placeholder="Enter your Check Amount" id="cheqamount" min="1">
            </div>
            </div>
            <div class="col-4 offset-4 d-grid">
                <button class="btn btn-success" onclick="pay();">Pay</button>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>