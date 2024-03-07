<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row justify-content-center mt-5">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">
                   <h4>Headline</h4>
               </div>
               <div class="card-body">
                   <table class="table table-sm table-bordered table-hover table-striped">
                      <thead>
                       <tr>
                           <th>SL</th>
                           <th>Name</th>
                           <th>Email</th>
                           <th>Created at</th>
                           <th>Updated at</th>
                       </tr>
                      </thead>
                       <tbody>
                       @php
                           $sl = 1
                       @endphp
                         @foreach($users as $user)
                             <tr>
                                 <td>{{$sl++}}</td>
                                 <td>{{$user->name}}</td>
                                 <td>{{$user->email}}</td>
                                 <td>{{$user->created_at}}</td>
                                 <td>{{$user->updated_at}}</td>
                             </tr>
                         @endforeach
                       </tbody>
                   </table>
               </div>
           </div>
       </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

