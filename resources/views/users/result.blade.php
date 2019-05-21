@extends('DashbordAdminPanel.layout.master')

@section('content')

  <style type="text/css">
    
  </style>	
    

   

  <div class="content mt-3">


  
 <div class=" fadeIn">

                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Show Results</strong>
                        </div>
                             
                                	     <!-- model -->
 

                        <div class="card-body">





 

   

     
<br></br>

                  <table id="bootstrap-data-table" class="table table-striped table-bordered Employer">
                    <thead>
                      <tr>
                      	
                        <th>
الإهتمام الواقعى</th>
<th>الإهتمام البحثى</th>
<th>الإهتمام الفنى</th>
<th>الإهتمام الأجتماعى</th>
<th>االإهتمام المبادر </th>
<th>االإهتمام النمطى</th>                    

                      </tr>
                    </thead>
                    <tbody>
                    
                      <tr >
                   <td>{{ $resultR}}</td>
					<td>{{ $resultI}}</td>
          <td>{{ $resultA}}</td>
      
				 <td>{{ $resultS}}</td>
				  <td>{{ $resultE}}</td>
				   <td>{{ $resultC}}</td>
                      </tr>
                   
                      
                   
                    
                    
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


<script type= "text/javascript" src = "/images/js/countries.js"></script>


<script src="/dist/jquery.validate.js"></script>


@endsection