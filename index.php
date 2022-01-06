<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
<script src="add.js"></script>
</head>
<body>
<div class="row">
  <div class="col-lg-12">
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">Daily Allowance</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">About Us</a>
            </li>
          </ul>
          <form class="d-flex">
            <button class="btn btn-danger"style="margin-left:10px;" type="submit">Subscribe</button>
          </form>
        </div>
      </div>
    </nav>
  </div>
</div>
      <div class="row">
        <div class="col-lg-12">
          <a href="#" class="btn btn-success m-3" data-bs-toggle="modal" data-bs-target="#add">Add</a>
          <a href="#" class="btn btn-danger">Remove</a>
        </div>
      </div>
      <div class="container">
        <table class="table table-striped table-hover mt-2">
          <tr>
            <th></th><th>S.no</th><th>Date</th><th>Time</th><th>Particulars</th><th>Debit</th><th>Credit</th>
          </tr>
          <tr>
            <td><input type="checkbox"></td><td>1.</td><td><input type="date" id="date1" class="form-control"></td><td><input type="time"  id="time1" class="form-control"></td><td><input type="text" id="par1" class="form-control"></td><td><input type="number" id="d1"class="form-control"></td><td><input type="number" id="c1"class="form-control"></td>
          </tr>
          <tr>
            <td><input type="checkbox"></td><td>2.</td><td><input type="date" id="date2" class="form-control"></td><td><input type="time"  id="time2" class="form-control"></td><td><input type="text" id="par2" class="form-control"></td><td><input type="number" id="d2"class="form-control"></td><td><input type="number" id="c2"class="form-control"></td>
          </tr>
          <tr>
            <td><input type="checkbox"></td><td>3.</td><td><input type="date" id="date3" class="form-control"></td><td><input type="time"  id="time4" class="form-control"></td><td><input type="text" id="par3" class="form-control"></td><td><input type="number" id="d3"class="form-control"></td><td><input type="number" id="c3"class="form-control"></td>
          </tr>
          <tr>
            <td><input type="checkbox"></td><td>4.</td><td><input type="date" id="date4" class="form-control"></td><td><input type="time"  id="time4" class="form-control"></td><td><input type="text" id="par4" class="form-control"></td><td><input type="number" id="d4"class="form-control"></td><td><input type="number" id="c4"class="form-control"></td>
          </tr>
        </table>
      </div>
       <div class="container">
        <div class="row">
          <table class="table table-striped table-hover float-end col-lg-6">
            <tr>
              <td>Total Debit :</td><td><p id="tb"></p></td><td>Total Credit :</td><td><p id="tc"></p></td>
            </tr>
            <tr>
              <td>Total Available Balance :</td><td colspan="3"><p id="tab"></p></td>
            </tr>
            <tr>
              <td>Total Expenditure :</td><td colspan="3"><p id="te"></p></td>
            </tr>
            <tr>
              <td colspan="4"><center><button class="btn btn-success" onclick="load();">Load</button></center></td>
            </tr>
          </table>
        </div>
       </div>
        <!--modal-->
        <div class="modal" tabindex="-1" id="add">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-warning">Add Records</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="input-group mb-3">
                      <span class="input-group-text">@</span>
                      <input type="text" class="form-control" placeholder="S.No" required aria-describedby="basic-addon1"  id="sn">
                    </div>
                    <div class="input-group mb-3">
                      <span class="input-group-text">@</span>
                      <input type="date" class="form-control" required aria-describedby="basic-addon1" id="date">
                    </div>
                    <div class="input-group mb-3">
                      <span class="input-group-text">@</span>
                      <input type="time" class="form-control" required aria-describedby="basic-addon1" id="time">
                    </div>
                    <div class="input-group mb-3">
                      <span class="input-group-text">@</span>
                      <input type="text" class="form-control" placeholder="Particulars" required aria-describedby="basic-addon1" id="particular">
                    </div>
                    <div class="input-group mb-3">
                      <span class="input-group-text">@</span>
                      <input type="number" class="form-control" placeholder="Debit" aria-label="Username" aria-describedby="basic-addon1" id="debit">
                    </div>
                    <div class="input-group mb-3">
                      <span class="input-group-text">@</span>
                      <input type="number" class="form-control" placeholder="Credit" aria-label="Username" aria-describedby="basic-addon1" id="credit">
                    </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="addfunc();">Add</button>
              </div>
            </div>
          </div>
        </div>
</body>
</html>