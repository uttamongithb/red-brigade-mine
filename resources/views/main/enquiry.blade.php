@include('includes.sunshine-header')
<section class="container-fluid cont-back">
  <div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 mt-5 mb-5 ">
             <div class="box-enqu enq-box">
                 <div class="row"> 
                 <div class="col-md-6">
                     <h3  class="what-1 mt-5"><span class="font-1">C</span>ustomer <span class="font-1">S</span>uppport <span class="font-1">C</span>enter</h3>
                 </div>
                 <div class="col-md-4">
                     <img src="<?php echo URL::asset('uploads/img/enquir.png')?>">
                    </div>  
                 </div>
                 <div class="row"> 
                        <div class="col-md-12 ml-5 mb-5">
                                    <div class="row ">
                                        <div class="col-md-5 ">
                                           <label> Name</label><input type="email" class="form-control  " id="email" required>
                                          </div>
                                        <div class=" col-md-5 ">
                                                <label> Email</label><input type="email" class="form-control  " id="email" required>
                                            </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col-md-5 form-group ">
                                                <label> Phone</label> <input type="email" class="form-control " id="email" required>
                                            </div>
                                        <div class="col-md-5 form-group ">
                                                <label> Address</label> <input type="email" class="form-control" id="email" required>
                                            </div>
                                    </div>
                                    
                                    <div class=" col-md-10 ">
                                        <label>Enquiry</label><textarea class="form-control" required> message</textarea>
                                         </div>
                                   <div  class=" col-md-10 ">
                                       <input type="Submit" name="" class="btn btn-primary enq-bt float-right mt-5" id=" value="Submit">
                                      
                                        </div>
                                   
                        </div>
                          
                        </div>
             </div>
        </div>
        <div class="col-md-1"></div>
        
      </div>
    </div>

</section>
@include('includes.sunshine-footer')