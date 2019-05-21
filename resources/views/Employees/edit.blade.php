@extends('layout.master')

@section('content')

<div class="row">

 <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Employee</strong>
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <div class="card-title">
                                      <h3 class="text-center">Edit Employee</h3>
                                  </div>
                                   <hr>
  <form  action="{{route('editemp')}}" method="post"  class="formlogin "   enctype="multipart/form-data">
                    
  <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <fieldset style="    padding: .35em .625em .75em; margin: 0 2px; border: 1px solid silver;">
        
  <legend style="width: fit-content;border: 0px;">Basic Info:</legend>


<div class="col-lg-12">




  <input type="hidden" id="empid" name="empid" value="{{$employee->id}}">




                <div class="form-row">
    <div class="col-md-6 ">
      <label > Name*</label>
    
     <input type="text" class="form-control "  id="Name" value="{{$employee->name}}" name="Name">

    </div>

     <div class="col-md-6 ">
       <label > Last Name*</label>
    
     <input type="text" class="form-control "  id="Last_Name" value="{{$employee->last_name}} " name="Last_Name">

    </div>
</div>


               <div class="form-row">
    <div class="col-md-6 ">
      <label >Email*</label>
    
     <input type="email" class="form-control "  id="email" value="{{$employee->email}}" name="email">

    </div>

     <div class="col-md-6 ">
      <label >Password*</label>
    
     <input type="password" class="form-control "  id="password" value="{{$employee->password}}" name="password">

    </div>
</div>


                <div class="form-row">

                   <div class="col-md-6 ">
      <label > Phone</label>
    
     <input type="text" class="form-control "  id="phone" value="{{$employee->phone_number}}" name="phone">

    </div>
    <div class="col-md-6 ">
      <label > Hiring Date</label>
    
     <input type="date" class="form-control "  id="date" value="{{$employee->hiringdate}}" name="hiringdate">

    </div>
    </div>


             

    
                   </div>


</div>
</div>
</fieldset>



<br></br>
       <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
          <a  class="btn btn-primary ">Cancel</a>
                         <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit"  name="login_form_submit" class="btn btn-success"  >Save</button>
                        </div>
                      </div>
</form>









                    

           

               

                  
        </div>
                          </div>

                        </div>
                    </div> <!-- .card -->

                  </div>
              </div>

@endsection



@section('scripts')

<script type="text/javascript">

</script>



 
@endsection

