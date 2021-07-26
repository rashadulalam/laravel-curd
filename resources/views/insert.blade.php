@extends('layout.app')
@section('content')

   <div class="jumbotron">
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <h1>Insert Data</h1>
                   <p>Insert your data.</p>
               </div>
           </div>
       </div>
    </div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="alert alert-success" role="alert" id="result">
                Please insert your data.
            </div>

                <form>
                    <div class="form-group">
                    <label for="st_name">Student Name:</label>
                    <input type="text" class="form-control" id="st_name" aria-describedby="emailHelp" placeholder="Enter Student Name">
                    
                    </div>
                    <div class="form-group">
                    <label for="st_class">Admission Class</label>
                    <input type="text" class="form-control" id="st_class" aria-describedby="emailHelp" placeholder="Enter Admission Class">
                    
                    </div>
                    <div class="form-group">
                    <label for="st_roll">Admission roll</label>
                    <input type="text" class="form-control" id="st_roll" aria-describedby="emailHelp" placeholder="Enter Admission roll">
                    
                    </div>
                    
                    <button type="submit" id="form_submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>




@endsection