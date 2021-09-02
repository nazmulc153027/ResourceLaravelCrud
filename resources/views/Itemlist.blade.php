<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
</head>
<body>
<div class="container" style="margin-top:70px;">
<table class="table">
    <thead>
      <tr>
        <th>SL.No</th>
        <th>Name</th>
        <th>Sell Price</th>
        <th>Purchase Price</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($items as $item)
        <tr>
        <td>{{ $item->id }}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->sell}}</td>
        <td>{{$item->purchase}}</td>
        <td>


        <a href="{{route('add-item.edit', $item->id )}}" class="btn btn-warning btn-xs" title="edit">Edit</a>
        <form  method="POST" action="{{ route('add-item.destroy', $item->id) }}">
                              @csrf
                              @method('DELETE')
                          
                              <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                          </form>
</td>

      </tr>

    @endforeach

    </tbody>
  </table>
  
          {{ $items->links() }}
      
              <style>
              .w-5{display: none; }
            </style>
         
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>