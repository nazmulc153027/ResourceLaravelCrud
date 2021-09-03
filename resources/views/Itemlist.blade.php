<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">



   <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" integrity="sha256-PHcOkPmOshsMBC+vtJdVr5Mwb7r0LkSVJPlPrp/IMpU=" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@700&family=Nanum+Myeongjo:wght@400;700&display=swap" rel="stylesheet">
  
</head>
<body>

<div class="container" style="margin-top:70px;">
<form action="/search" method="get">
<input type="text" class="" placeholder="Search.." name="search">
<button type="submit"><i class="fa fa-search"></i></button>
</form>
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
  
          <!-- {{ $items->links() }}
      
              <style>
              .w-5{display: none; }
            </style> -->

            <nav aria-label="Page navigation example">
  <ul class="pagination">
    
  <li>{{ $items->links() }}</li>
  </ul>
</nav>
         
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<script type="text/javascript" src="https://www.jqueryscript.net/demo/Modern-Circular-jQuery-Countdown-Timer-Plugin-Final-Countdown/jquery.final-countdown.js"></script> 
  <script type="text/javascript" src="https://www.jqueryscript.net/demo/Modern-Circular-jQuery-Countdown-Timer-Plugin-Final-Countdown/js/kinetic.js"></script> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  


<!--PROPERTY SEARCH START-->

  <script type="text/javascript">
        var route = "{{ url('add-item') }}";

        $('#search').typeahead({
            source: function (query, process) {
                return $.get(route, {
                    query: query
                }, function (data) {
                    return process(data);
                });
            }
        });
    </script>


<!--PROPERTY SEARCH END-->
</body>
</html>