
<!-- jQuery 2.2.3 -->
<script src="<?php echo URL::asset('js/admin/jquery-2.2.3.min.js')?>"></script>
<script src="<?php echo URL::asset('js/admin/bootstrap.min.js')?>"></script>
<script src="<?php echo URL::asset('js/ckeditor/ckeditor.js')?>"></script>
<script src="<?php echo URL::asset('js/admin/select2.full.min.js')?>"></script>
<script src="<?php echo URL::asset('js/front/jquery-ui.js')?>"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.semanticui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo URL::asset('js/admin/app.min.js')?>"></script>
<script src="<?php echo URL::asset('js/admin/demo.js')?>"></script>
	<script src="<?php echo URL::asset('js/admin/jquery.datetimepicker.full.js')?>"></script>
	
	
	<!---geo location-->
	
<script type="text/javascript">
	$(function() {
		$('#your_textarea').ckeditor({
			toolbar: 'Full',
			enterMode : CKEDITOR.ENTER_BR,
			shiftEnterMode: CKEDITOR.ENTER_P
		});
	});
</script>
	
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script>
      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        autocomplete.addListener('place_changed', fillInAddress);
 
 
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();
        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTwb2bjqMoPePF_RQc1BaybGbGQPnRM5c&libraries=places&callback=initAutocomplete" async defer></script>
       
<script type="text/javascript">
	
	<!---geo location-->
	<script>
		$("#datetimepickerss").datetimepicker({
		   datepicker:true,
		   timepicker:false,
		});
	
	</script>
		<script>
		$("#datetimepickerssdob").datetimepicker({
		   datepicker:true,
		   timepicker:false,
		});
	
	</script>
	<script>
		$("#filterdate").datetimepicker({
		   datepicker:true,
		   timepicker:false,
		});
	</script>
	<script>
		$("#filterdateto").datetimepicker({
		   datepicker:true,
		   timepicker:false,
		});
	
	</script>
	<script>
		$("#faculty_join_date").datetimepicker({
		   datepicker:true,
		   timepicker:false,
		});
	
	</script>
		<script>
		$("#facultyDOB").datetimepicker({
		   datepicker:true,
		   timepicker:false,
		});
	
	</script>
		<script>
		$("#start_date").datetimepicker({
		   datepicker:true,
		   timepicker:false,
		});
	
	</script>
		<script>
		$("#end_date").datetimepicker({
		   datepicker:true,
		   timepicker:false,
		});
	
	</script>
	<script>
		$("#batch_time").datetimepicker({
		   datepicker:false,
		   timepicker:true,
		   formatTime: 'g:i A',
			defaultTime: '11',
			startTime: '10:00',
			interval: 30,
			step: 15
		});
	
	</script>
		<script>
		$("#stop_time").datetimepicker({
		   datepicker:false,
		   timepicker:true,
		   formatTime: 'g:i A',
			defaultTime: '11',
			startTime: '10:00',
			interval: 30,
			step: 15
		});
	
	</script>
	<script>
	
		$("#payment_date").datetimepicker({
		   datepicker:true,
		   timepicker:false,
		});
	</script>
		<script>
		$("#start_session").datetimepicker({
		   datepicker:true,
		   timepicker:false,
		});
	</script>
		<script>
		$("#end_session").datetimepicker({
		   datepicker:true,
		   timepicker:false,
		});
	</script>
			<script>
		$("#transport_renews").datetimepicker({
		   datepicker:true,
		   timepicker:false,
		});
	</script>
	
				<script>
		$("#dstart_date").datetimepicker({
		   datepicker:true,
		   timepicker:false,
		});
	</script>
				<script>
		$("#ddue_date").datetimepicker({
		   datepicker:true,
		   timepicker:false,
		});
	</script>
				<script>
		$("#dend_date").datetimepicker({
		   datepicker:true,
		   timepicker:false,
		});
	</script>
<script>
	var j=2;
	var jj=2;
	var you1 = [];
	$(document).ready(function(){
		$("#add").click(function(e){
			var jj = j++;
			$("#items").append('<div class="col-md-12 col-sm-12" style="margin-top:10px;padding:0px;"><div class="col-md-6 col-sm-6" style="padding-left:0px;"><input id="p_'+jj+'" onchange="seeresult('+jj+')" required="required" placeholder="Enter Extra information label here"   class="form-control col-md-7 col-xs-12 youtubevvv aa" name="extrainfolabel[]"></div><div class="col-md-6 col-sm-6" style="padding-left:0px;padding-right:0px;"><input name="extrainfovalue[]" onchange="seeresultvalue('+jj+')" placeholder="Enter Extra information value here" class="form-control col-md-7 col-xs-12 youtubevv" id="p_1" required="required"  type="text"></div><button class="delete remove-text-field bg-yellow" id="pp_'+jj+'" style="float:right;border:0px none;">Delete</button></div>');
		});
		$("body").on("click", ".delete", function (e) {
			$(this).parent("div").remove();
		});		
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
		});
	});
	</script>
<script>
function seeresult(id){
	var featurelabelvalue = $("#p_"+id).val();
	if(featurelabelvalue!=""){
		$('#pp_'+id).attr('required', 'required');
	}else{
		$('#pp_'+id).removeAttr('required');
	}
}
</script>
<script>
function seeresultvalue(id){
	var featurevalue = $("#pp_"+id).val();
	if(featurevalue!=""){
		$('#p_'+id).attr('required', 'required');
	}else{
		$('#p_'+id).removeAttr('required');
	}
}
</script>	
<script>
		$(document).ready(function(){
				$.ajaxSetup({
					headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
				});
			});
</script>

<script>
function showmcategory()
{
		$("#mcategorydiv").html();
		var value = $("#type").val();
		 $("#mcategorydiv").css('display','none');
		if(value=="all")
        {
			$("#mcategorydiv").css('display','none');
			return true;
		}
		$.ajax({
		   type:'POST',
		   url:'<?php echo Config::get('constants.PROJECT_URL');?>getmetrialdata/'+value,
		   success:function(data)
		   {
			 	 if(data!=""){
							$("#mcategorydiv").css('display','block');
							 $("#mcategory").html(data);
					 }
		   }
		});
}
</script>

	<script>
	function showtype()
	{
		 $("#citys").html();
		 $("#filterdate").html();
		var value = $("#type").val();

		 $("#showdate").css('display','none');
		 $("#showdates").css('display','none');
		 $("#showcourse").css('display','none');

		if(value=="date")
        {
			
		 $("#showdate").css('display','block');
		 $("#showdates").css('display','block');
		 $("#showcourse").css('display','none');
			return true;
		}
		$.ajax({
		   type:'POST',
		   url:'`getcoursedataa/'+value,
		   success:function(data)
		   {
			 if(data!=""){
					 $("#showdate").css('display','none');
					 $("#showdates").css('display','none');
					 $("#showcourse").css('display','block');
					 $("#citys").html(data);
			 }
		   }
		});

	}
	</script>

<script>
function getadmission()
{
	
	 document.getElementById('enteramount').value="";
	 document.getElementById('rem').value="";
	var admission_id = $("#admission_id").val();
	if(admission_id!=""){
			$.ajax({
			   type:'POST',
			   url:'<?php echo Config::get('constants.PROJECT_URL');?>getadmissiondata/'+admission_id,
			   success:function(array){
				 
				 
				 var obj = JSON.parse(array);
				  // console.log(obj.uldata);
				 // document.getElementById('admiss').value=obj.uldata;
				 $("#admiss").html(obj.uldata);
				 document.getElementById('receipt_id').value=obj.receipt_id;
				 document.getElementById('user_id').value=obj.id;
				 document.getElementById('name').value=obj.name;
				 document.getElementById('course_name').value=obj.course_name;
				 document.getElementById('course_amount').value=obj.course_amount;
				 document.getElementById('other_amount').value=obj.other_amount;
				 document.getElementById('ramount').value=obj.ramount;
				 document.getElementById('cgst').value=obj.cgst;
				 document.getElementById('sgst').value=obj.sgst;
				 document.getElementById('amount').value=obj.amount;
			   }
			});
	}
}
</script>
<script>
function gettfeesdata(value,value1)
{
	if(value !="" &&  value1 !="")
	{
			$.ajax({
			   type:'POST',
			   url:'<?php echo Config::get('constants.PROJECT_URL');?>gettfeesdata/'+value+'/'+value1,
			   success:function(array){
				 var obj = JSON.parse(array);
				 $("#admiss").html(obj.uldata);
				 document.getElementById('receipt_id').value=obj.receipt_id;
				 document.getElementById('total').value=obj.total;
				 document.getElementById('paid_amount').value=obj.paid_amount;
				 document.getElementById('remaning_amount').value=obj.remaning_amount;
			   }
			});
	}
}
</script>
<script>
function ulvalue(value)
{
	document.getElementById('admission_id').value=value;
		if(value!=""){
			$.ajax({
			   type:'POST',
			   url:'<?php echo Config::get('constants.PROJECT_URL');?>getadmissiondata/'+value,
			   success:function(array){
				 var obj = JSON.parse(array);
				 $("#admiss").html(obj.uldata);
				 document.getElementById('receipt_id').value=obj.receipt_id;
				 document.getElementById('user_id').value=obj.id;
				 document.getElementById('name').value=obj.name;
				 document.getElementById('course_name').value=obj.course_name;
				 document.getElementById('course_amount').value=obj.course_amount;
				 document.getElementById('other_amount').value=obj.other_amount;
				 document.getElementById('ramount').value=obj.ramount;
				 document.getElementById('cgst').value=obj.cgst;
				 document.getElementById('sgst').value=obj.sgst;
				 document.getElementById('amount').value=obj.amount;
			   }
			});
	}
}
</script>
<script>
function getmetrialdata()
{
var metrial = $("#metrial").val();
		if(metrial!=""){
			$.ajax({
			   type:'POST',
			   url:'<?php echo Config::get('constants.PROJECT_URL');?>metrialpriceshow/'+metrial,
			   success:function(array){
				 var obj = JSON.parse(array);
					console.log(obj);
					 document.getElementById("price").innerHTML = obj.price;
					 document.getElementById("quantity").innerHTML = obj.quantity;
			   }
			});
	}
}
</script>
<script>
function checkForm()
{
	var value = $("#nquantity").val();
	
	if(value !="")
	{
		var quantity = $("#quantity").text();
		var price = $("#price").text();
		document.getElementById("messagem").innerHTML = '';
		document.getElementById("messagemtype").innerHTML = '';
		
		var type = $("#type").val();
		if(type !="")
		{
			if(type=="Outword")
			{
				 document.getElementById('enterprice').value="";
				if(value <=0 || value =="" || Number(quantity) < Number(value))
				{
					 document.getElementById("messagem").innerHTML = 'Please Enter Correct Quantity';
					 return false;
				} else {
					var total= value * price;
					 document.getElementById("nprice").innerHTML = total;
					 document.getElementById('newmlmuser_regis').submit();
				}
			}
			else if(type=="Inword")
			{
				if(value <=0 || value =="")
				{
					 document.getElementById("messagem").innerHTML = 'Please Enter Correct Quantity';
					 return false;
				} else {
					var enterprice = $("#enterprice").val();
					var total= value * enterprice;
					 document.getElementById("nprice").innerHTML = total;
					 document.getElementById('newmlmuser_regis').submit();
				}
			}

		}
		else 
		{
			document.getElementById("messagemtype").innerHTML = 'Please Select Transaction Type';
		}
	}
	else 
	{
			document.getElementById("messagem").innerHTML = 'Please Enter Quantity';
			return false;
	}
}
</script>
<script>
function showpricedivs()
{
	
	document.getElementById('enterprice').value="";
	$("#newprice").css("display","none");
	var type = $("#type").val();
	var price = $("#price").text();
	if(type=="Inword")
	{
		if(price== 0)
		{
			$("#newprice").css("display","block");
		}
		else 
		{
			document.getElementById('enterprice').value=price;
				$("#newprice").css("display","none");
		}
	}
	else {
		$("#newprice").css("display","none");

	}
		
}
</script>
<script>
function showmetprice(value)
{
		
		var quantity = $("#quantity").text();
	var price = $("#price").text();
	document.getElementById("messagem").innerHTML = '';
	if(value !="")
	{
		var type = $("#type").val();
		if(type !=" ")
		{
			document.getElementById("messagemtype").innerHTML = '';
			document.getElementById("messagem").innerHTML = '';
			if(type=='Outword')
			{ 
			document.getElementById('enterprice').value="";
				if(value <=0 || value =="" || Number(quantity) < Number(value))
				{
					 document.getElementById("messagem").innerHTML = 'Please Enter Correct Quantity';
					 return false;
				} else {
					
					var total= value * price;
					 document.getElementById("nprice").innerHTML = total;
				}	
			}
			else if(type=='Inword')
			{
				
				if(value <=0 || value =="")
				{
					 document.getElementById("messagem").innerHTML = 'Please Enter Correct Quantity';
					 return false;
				} else {
						var enterprice = $("#enterprice").val();
					var total= value * enterprice;
					 document.getElementById("nprice").innerHTML = total;
				}
			}
		}
		else
		{
			document.getElementById("messagemtype").innerHTML = 'Please Select Transaction Type';
			return false;
		}
	}
	else 
	{
			document.getElementById("messagem").innerHTML = 'Please Enter Quantity';
			return false;
	}
	
}
</script>
<script>
function showsessioncourse()
{
		var session = $("#session").val();
		if(session!=""){
				$.ajax({
				   type:'POST',
				   url:'<?php echo Config::get('constants.PROJECT_URL');?>getsessioncourse/'+session,
				   success:function(data){
					 if(data!=""){
						 $("#course").html(data);
					  }
				   }
				});
			}	
}
</script>
<script>
function getstudenttype(value)
{
	 $("#userdata").html("");
	 $("#session").html("");
	 $("#course").html("");
}
</script>
<script>
function showallcationtype(value,value1)
{
	 $("#userdata").html("");
	$("#typemessage").css("display","none");
	$("#coursemessage").css("display","none");
		if(value !="")
		{
			$("#typemessage").css("display","none");
			if(value1 !="")
			{
				$("#coursemessage").css("display","none");
				$.ajax({
				   type:'POST',
				   url:'<?php echo Config::get('constants.PROJECT_URL');?>getstudentdata/'+value+'/'+value1,
				   success:function(data){
					 if(data!=""){
						 $("#userdata").html(data);
					  }
				   }
				});

			} else {
				 $("#typemessage").css("display","block");
			}
		}
		else {
			$("#coursemessage").css("display","block");
		}
		
}
</script>
<script>
function getallocationdata(value)
{
	if(value !="")
	{
		$.ajax({
		   type:'POST',
		   url:'<?php echo Config::get('constants.PROJECT_URL');?>gettransportuser/'+value,
		   success:function(data){
		
			 if(data!=""){
				 $("#user").html(data);
			  }
		   }
		});		
	}
}
</script>
<script>
function showdestination()
{
		var route_code = $("#route_code").val();
		if(route_code!=""){
				$.ajax({
				   type:'POST',
				   url:'<?php echo Config::get('constants.PROJECT_URL');?>getdestination/'+route_code,
				   success:function(data){
					 if(data!=""){
						 $("#destination").html(data);
					  }
				   }
				});
			}
			else {
				 $("#destination").html(); }
			
}
</script>
<script>
function getcmetrialdata()
{
		var mcategory = $("#mcategory").val();
		if(mcategory!=""){
				$.ajax({
				   type:'POST',
				   url:'<?php echo Config::get('constants.PROJECT_URL');?>getmetriallist/'+mcategory,
				   success:function(data){
					 if(data!=""){
						 $("#metrial").html(data);
					  }
				   }
				});
			}		
}
</script>
<script>
function showsessiondata()
{
		var ccourse = $("#ccourse").val();
		if(ccourse!=""){
				$.ajax({
				   type:'POST',
				   url:'<?php echo Config::get('constants.PROJECT_URL');?>getsessiondata/'+ccourse,
				   success:function(data){
					 if(data!=""){
						 $("#session").html(data);
					  }
				   }
				});
			}
}
</script>
<script>
function showfaculty()
{
	var batchcourse = $("#course").val();
		if(batchcourse!=""){
				$.ajax({
				   type:'POST',
				   url:'<?php echo Config::get('constants.PROJECT_URL');?>getfacultydata/'+batchcourse,
				   success:function(data){
					 if(data!=""){
						 $("#faculty").html(data);
					  }
				   }
				});
			}
}
</script>
	<script>
		function ssshowcity(value){
			var getcat = $("#state").val();
			if(getcat!=""){
					$.ajax({
					   type:'POST',
					   url:'<?php echo Config::get('constants.PROJECT_URL');?>getcitydata/'+getcat,
					   success:function(data){
						 if(data!=""){
							 $("#citys").html(data);
						  }
					   }
					});
				}
		}
	</script>
<script>
			function showamounts(value)
			{

				data={};
				if(value!=""){
					$.ajax({
					   type:'POST',
					   url:'<?php echo Config::get('constants.PROJECT_URL');?>getcoursedata/'+value,
					   success:function(array){
						   var obj = JSON.parse(array);
						  var myamount= obj.amount; 
						  var myramount= obj.ramount; 
						   $("#amount").html(myamount);
						   $("#ramount").html(myramount);
					   }
					});
				}
				else {
					
				 $("#amount").html('');
				 $("#ramount").html('');
				}
			}
</script>

  <script>
	  $(document).ready(function() {
		$('#example').DataTable();
	} );
	  $('#datepicker').datepicker({
		  dateFormat: 'yy-mm-dd'
	});
	  $('#datepicker').datepicker({
		  dateFormat: 'yy-mm-dd'
	});
	 $('#date').datepicker({
		  dateFormat: 'yy-mm-dd'
	});
	 $('#todate').datepicker({
		  dateFormat: 'yy-mm-dd'
	});
	 $('#todate').datepicker({
		  dateFormat: 'yy-mm-dd'
	});
	
  </script>
<script>
  $(document).ready(function(){
  $('#select_all').on('click',function(){
      if(this.checked){
          $('.checkbox').each(function(){
              this.checked = true;
          });
      }else{
           $('.checkbox').each(function(){
              this.checked = false;
          });
      }
  });
 
  $('.checkbox').on('click',function(){
      if($('.checkbox:checked').length == $('.checkbox').length){
          $('#select_all').prop('checked',true);
      }else{
          $('#select_all').prop('checked',false);
      }
  });
});
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );
 $('#datepicker').datepicker({
      autoclose: true
    });

   //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
</body>
</html>