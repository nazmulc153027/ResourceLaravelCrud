<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
</head>
<body>

<div class="container">
    <div class="row" style="margin-top:50px; margin-left:100px;">
        <div class="col-md-6">
        <h3 class="text-center text-primary">{{Session::get('message')}}</h3>
<form method="POST" action="{{route('add-item.store')}}">
    @csrf
  <div class="form-group mt-5" >
    <label for="exampleInputEmail1">Name:</label>
    <input type="text" class="form-control" id="exampleInputname"  placeholder="Enter name" name="name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Text</label>
    <input type="text" class="form-control" id="exampleInputtext" placeholder="text" name="text">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Sell Price</label>
    <input type="number" class="form-control" id="exampleInputsell" placeholder="01" name="sell">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Purchase Price</label>
    <input type="number" class="form-control" id="exampleInputPurchase" placeholder="01" name="purchase">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>