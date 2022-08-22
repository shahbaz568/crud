<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Crud Operation</title>
      <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
   </head>
   <body>
      <div class="container mt-2">
      <div class="row">
         <div class="col-lg-12 margin-tb">
            <div class="pull-left">
               <h2>Crud Operation</h2>
            </div>
            <div class="pull-right mb-2">
               <a class="btn btn-success" href="{{ route('open.form') }}"> Add Student</a>
            </div>
         </div>
      </div>
      @if ($message = Session::get('success'))
      <div class="alert alert-success">
         <p>{{ $message }}</p>
      </div>
      @endif
      <table class="table table-bordered">
         <tr>
            <th>S.No</th>
            <th>Student Name</th>
            <th>Student Email</th>
            <th>Student Mobile</th>
            <th>Student Address</th>
            <th width="280px">Action</th>
         </tr>
         @foreach ($students_data as $student_data)
         <tr>
            <td>{{ $student_data->id }}</td>
            <td>{{ $student_data->name }}</td>
            <td>{{ $student_data->email }}</td>
            <td>{{ $student_data->mobile }}</td>
            <td>{{ $student_data->address }}</td>
            <td>
               <form action="{{ route('delete.data', $student_data->id) }}" method="Post">
                  <a class="btn btn-primary" href="{{ route('edit.data',$student_data->id) }}">Edit</a>
                  @csrf
                  @method('POST')
                  <button type="submit" class="btn btn-danger">Delete</button>
               </form>
            </td>
         </tr>
         @endforeach
      </table>
      
   </body>
</html>