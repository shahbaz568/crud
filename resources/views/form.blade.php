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
            <div class="pull-left mb-2">
               <h2>Add Student</h2>
            </div>
            <div class="pull-right">
               <a class="btn btn-primary" href="{{ route('get.data') }}"> Back</a>
            </div>
         </div>
      </div>
      @if(session('status'))
      <div class="alert alert-success mb-1 mt-1">
         {{ session('status') }}
      </div>
      @endif
      <form action="addData" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                  <strong>Student Name:</strong>
                  <input type="text" name="name" class="form-control" placeholder="Student Name">
                  @error('name')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
               </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                  <strong>Student Email:</strong>
                  <input type="email" name="email" class="form-control" placeholder="Student Email">
                  @error('email')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
               </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                  <strong>Student Mobile:</strong>
                  <input type="number" name="mobile" class="form-control" placeholder="Student Mobile">
                  @error('mobile')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
               </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                  <strong>Student Address:</strong>
                  <input type="text" name="address" class="form-control" placeholder="Student Address">
                  @error('address')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
               </div>
            </div>
            <button type="submit" class="btn btn-primary ml-3">Submit</button>
         </div>
      </form>
   </body>
</html>