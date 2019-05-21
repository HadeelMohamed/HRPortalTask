@extends('layout.master')

@section('content')

<div class="row">

 <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Attendance Funcation</strong>
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <div class="card-title">
                                      <h3 class="text-center">Attendance Funcation</h3>
                                  </div>
                                   <hr>
  <form  action="{{route('attendedform')}}" method="post"  class="formlogin "   enctype="multipart/form-data">
                    
  <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <fieldset style="    padding: .35em .625em .75em; margin: 0 2px; border: 1px solid silver;">
        
  <legend style="width: fit-content;border: 0px;">Attendance Funcation:</legend>


<div class="col-lg-12">


                <div class="form-row">
 <select  tabindex="1" name="employee_id" class="country_id" style="width: 100%" id="employee_id">

             <option selected="" disabled="disabled" >Choose A Employee ... </option>

              @foreach($employees as $emp)
              
              <option value="{{$emp->id}}" >{{$emp->name}}</option>
              @endforeach
              </select>

             
</div>


               <div class="form-row">
    <div class="col-md-8 ">
      <label >Attendance Status*</label>
    
     <select  tabindex="1" name="status" class="status_id" style="width: 100%" id="status_id">

             <option selected="" disabled="disabled" >Choose A Status ... </option>

              
              <option value="attended" >attended</option>

               <option value="absence " >Absence</option>

  
              </select>

    </div>

    
</div>


               <div class="form-row">
    <div class="col-md-8 ">
      <label >Attendance Date*</label>
    
   <input type="date" class="form-control "  id="date"  name="date">

    </div>

    
</div>


                <div class="form-row">

                   <div class="col-md-6 ">
      <label > Time From</label>
    
     <input type="text" class="form-control "  id="time_from"  name="time_from">

    </div>
    <div class="col-md-6 ">
      <label > Time To</label>
    
     <input type="text" class="form-control "  id="Time_To"  name="time_to">

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

