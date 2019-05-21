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
                            <strong class="card-title">Users</strong>
                        </div>
                             
                                	     <!-- model -->
 

                        <div class="card-body">





 


     
<br></br>

                  <table id="bootstrap-data-table" class="table table-striped table-bordered Employer">
                    <thead>
                      <tr>
                      	
                        <th>Name</th>
                        <th>Email</th>
                         <th>Code</th>
                          <th>Show Results</th>

                      

                      </tr>
                    </thead>
                    <tbody>
                    	@foreach($users as $all)
                      <tr >
                   <td>{{ $all->name}}</td>
					<td>{{ $all->email}}</td>
          <td>{{ $all->Code}}</td>
      <td>
   
<a  href="/users/{{$all->id}}/show" class="btn btn-default btn-sm" ><span class="fa fa-edit"></span>  </a>
<a  href="/users/{{$all->id}}/delete" class="btn btn-default btn-sm" ><span class="fa fa-trash"></span>  </a>

      </td>
				
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


<script type= "text/javascript" src = "/images/js/countries.js"></script>


<script src="/dist/jquery.validate.js"></script>


@endsection