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
                            <strong class="card-title">Date Report</strong>
                        </div>

                        <form  action="/datareportform" method="POST" class="formlogin" enctype="multipart/form-data">
  {{ csrf_field() }}

      <fieldset style="padding: .35em .625em .75em; margin: 0 2px; border: 1px solid silver;">

 


    <div class="col-lg-12">
                   
                       

              <div class="form-row">
              <div class="col-md-12">
              
             <select  tabindex="1" name="employee_id" class="country_id" style="width: 100%" id="employee_id">

             <option selected="" disabled="disabled" >Choose A Employee ... </option>

              @foreach($employees as $emp)
              
              <option value="{{$emp->id}}" >{{$emp->name}}</option>
              @endforeach
              </select>
              </div>
              <label >Date From</label>
              <input type="date" class="form-control" placeholder=" date_from"  name="date_from">
              </div>
              <label >Date To</label>
              <input type="date" class="form-control" placeholder="Date_to"  name="date_to">
              </div>
              </div>
 

            

             
</fieldset> 
 <br/>
   <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          
                          <button type="submit"  name="login_form_submit" class="btn btn-success" value="Save">Show Report</button>
                        </div>
                      </div>


    
      </form>
                             
                                      


                        <div class="card-body">

     
<br></br>

         
                        </div>
                    </div>
                </div>


                </div>
            </div>
            </div>
@endsection



@section('scripts')





@endsection