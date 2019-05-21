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
                            <strong class="card-title">Employees</strong>
                        </div>
                             
                                	    
  <!-- model -->
 

                        <div class="card-body">

<div style="padding-bottom:30px;">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">
     Add New Employer
   </button>
   </div>
                          <div class="modal fade bd-example-modal-lg" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
     <div class="modal-content">
    
      
    <div class="modal-body">
  

<form  action="/employeesstore" method="POST" class="formlogin" enctype="multipart/form-data">
  {{ csrf_field() }}

      <fieldset style="padding: .35em .625em .75em; margin: 0 2px; border: 1px solid silver;">
      <legend style="width: fit-content;border: 0px;">Basic Info:</legend>
 


    <div class="col-lg-12">
                   
                       

              <div class="form-group">
              <div class="col-md-12 mb-3">
              <label >First Name</label>
              <input type="text" class="form-control" placeholder=" First Name"  name="First_Name">
              </div>
              </div>

              <div class="form-group">
              <div class="col-md-12 mb-3">
              <label >Last Name</label>
              <input type="text" class="form-control" placeholder=" Last Name"  name="Last_Name">
              </div>
              </div>
 <div class="form-group">
              <div class="col-md-12 mb-3">
              <label >Phone Number</label>
              <input type="text" class="form-control" placeholder=" Phone Number"  name="phone">
              </div>
              </div>

              <div class="form-group">
              <div class="col-md-12 mb-3">
              <label >Hiring Date</label>
              <input type="date" class="form-control" placeholder="Hiring Date"  name="hiringdate">
              </div>
              </div>

                  <div class="form-group">
           
               <div class="form-group">
              <div class="col-md-12 mb-3">
              <label >Email</label>
              <input type="email" class="form-control" placeholder=" email"  name="email">
              </div>
              </div>


               <div class="form-group">
              <div class="col-md-12 mb-3">
              <label >Password</label>
              <input type="password" class="form-control" placeholder=" Password"  name="password">
              </div>
              </div>


                            </div>
</fieldset> 
 <br/>
   <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="button" class="btn btn-primary " data-dismiss="modal">Cancel</button>
                         <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit"  name="login_form_submit" class="btn btn-success" value="Save">Submit</button>
                        </div>
                      </div>


    
      </form>



</div> <!-- end modal-body -->
</div><!-- end modal-content -->
</div><!-- end modal-dialog -->
</div><!-- end myModal1 -->

                        <div class="card-body">

     
<br></br>

                  <table id="bootstrap-data-table" class="table table-striped table-bordered Employer">
                    <thead>
                      <tr>
                      	
                        <th>Name</th>
                         <th>Last Name</th>
                         <th>Email</th>
                          <th>Phone Number</th>
                          <th>Hiring Date</th>
                          <th>Process</th>
                          

                      

                      </tr>
                    </thead>
                    <tbody>
                    	@foreach($employees as $all)
                      <tr >
              <td>{{ $all->name}}</td>
              <td>{{ $all->last_name}}</td>
              <td>{{ $all->email}}</td>
              <td>{{ $all->phone_number}}</td>
              <td>{{ $all->hiringdate}}</td>
      <td>
   

<a  href="/employees/{{$all->id}}/delete" class="btn btn-default btn-sm" ><span class="fa fa-trash"></span>  </a>
<a  href="/employees/{{$all->id}}/edit" class="btn btn-default btn-sm" ><span class="fa fa-edit"></span>  </a>

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





@endsection