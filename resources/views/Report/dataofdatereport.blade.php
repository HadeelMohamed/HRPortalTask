@extends('layout.master')

@section('content')

  <style type="text/css">
    
  </style>	
    

   

  <div class="content mt-3">


  
 <div class=" fadeIn">

                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Report</strong>
                        </div>
                             
                                	    
  

                        <div class="card-body">

     
<br></br>

                  <table id="bootstrap-data-table" class="table table-striped table-bordered Employer">
                    <thead>
                      <tr>
                      	
                        <th>Name</th>
                         <th>Date</th>
                         <th>Time From</th>
                          <th>Time To</th>
                          
                          

                      

                      </tr>
                    </thead>
                    <tbody>
                    	@foreach($alldata as $all)
                      <tr >
              <td>{{ $all->getemployee->name}}</td>
              <td>{{ $all->date}}</td>
              <td>{{ $all->time_from}}</td>
              <td>{{ $all->time_to}}</td>
              

				
                      </tr>
                      @endforeach
                      
                   
                    
                    
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div>
            </div>
@endsection



@section('scripts')





@endsection