<!doctype html>
<html lang="en">
  <head>
    <title>Customers</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container mb-4 mt-4 justify-content-md-end mb-2">
          <a href="/registration">
            <button class="btn btn-outline-success my-2 my-sm-0 "  type="submit" >
                <i class="material-icons">Add</i> 
            </button>
        </a>
    </div>
    <div class="container mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- <pre>
                    {{print_r($customers)}}
                </pre> -->
                @foreach($customers as $customer)
                <tr>
                    <td scope="row">{{$customer->first_name}}</td>
                    <td>{{$customer->last_name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>
                     <a href="{{route('customer.delete',['id'=>$customer->id])}}">  
                    <button class="btn btn-outline-danger my-2 my-sm-0 "  type="submit" >
                    Delete
                    </button> 
                    </a>
                    <a href="{{route('customer.edit',['id'=>$customer->id])}}"> 
                    <button class="btn btn-outline-success my-2 my-sm-0 "  type="submit" >
                    update
                    </button> 
                    </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>