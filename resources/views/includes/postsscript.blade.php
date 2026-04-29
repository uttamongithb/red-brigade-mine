<script>
function showmoreposts(value,div){
	$("#loadingshow").show();
	var getvalue= $("#selectsort").val();
	var page = value;
	var take = '<?php echo Config::get('constants.DEFAULT_LIMIT');?>';
	$.ajax({
	   type:'POST',
	   url:'<?php echo Config::get('constants.PROJECT_URL');?>showmoreposts',
	   data:'_token =<?php echo csrf_token();?>&page='+value+'&take='+take+'&div='+div+'&getvalue='+getvalue,
	   success:function(data){
		  $("#loadingshow").hide();
		  $("#"+div+page).html(data);
	   }
	});
}
function showmorefeaturedposts(value,div){
	$("#loadingshow").show();
	var getvalue= $("#selectsort").val();
	var page = value;
	var take = '<?php echo Config::get('constants.DEFAULT_LIMIT');?>';
	$.ajax({
	   type:'POST',
	   url:'<?php echo Config::get('constants.PROJECT_URL');?>showmorefeaturedposts',
	   data:'_token =<?php echo csrf_token();?>&page='+value+'&take='+take+'&div='+div+'&getvalue='+getvalue,
	   success:function(data){
		  $("#loadingshow").hide();
		  $("#"+div+page).html(data);
	   }
	});
}
function showmorepopularposts(value,div){
	$("#loadingshow").show();
	var getvalue= $("#selectsort").val();
	var page = value;
	var take = '<?php echo Config::get('constants.DEFAULT_LIMIT');?>';
	$.ajax({
	   type:'POST',
	   url:'<?php echo Config::get('constants.PROJECT_URL');?>showmorepopularposts',
	   data:'_token =<?php echo csrf_token();?>&page='+value+'&take='+take+'&div='+div+'&getvalue='+getvalue,
	   success:function(data){
		  $("#loadingshow").hide();
		  $("#"+div+page).html(data);
	   }
	});
}
function sortposts(value,div){
	$("#loadingshow").show();
	var getvalue= $("#selectsort").val();
	var page = value;
	var take = '<?php echo Config::get('constants.DEFAULT_LIMIT');?>';
	if(getvalue!=""){
		$.ajax({
		   type:'POST',
		   url:'<?php echo Config::get('constants.PROJECT_URL');?>sortposts',
		   data:'_token =<?php echo csrf_token();?>&getvalue='+getvalue+'&take='+take+'&page='+value+'&div='+div,
		   success:function(data){
			  $("#"+div).html(data);
			  $("#alltabs").addClass("active");
			  $("#tabs_All").addClass("active");
			  $("#tabs_All").addClass("in");
			  $("#tabs_Featured").removeClass("active");
			  $("#featuredtabs").removeClass("active");
			  $("#tabs_Popular").removeClass("active");
			  $("#populartabs").removeClass("active");
			  $("#loadingshow").hide();
		   }
		});
	}
}
</script>