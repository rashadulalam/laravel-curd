@extends('layout.app')

@section('content')

   <div class="jumbotron">
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <h1>Update Data</h1>
                   <p>Update your data.</p>
               </div>
           </div>
       </div>
   </div>


   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
                <form>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Student Name:</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Student Name">
                    
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Admission Class</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Admission Class">
                    
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Admission roll</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Admission roll">
                    
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>





@endsection