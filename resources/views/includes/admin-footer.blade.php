
<!-- jQuery 2.2.3 -->
<script src="<?php echo URL::asset('js/admin/jquery-2.2.3.min.js')?>"></script>
<script src="<?php echo URL::asset('js/admin/bootstrap.min.js')?>"></script>
<script src="<?php echo URL::asset('js/ckeditor/ckeditor.js')?>"></script>
<script src="<?php echo URL::asset('js/admin/select2.full.min.js')?>"></script>
<script src="<?php echo URL::asset('js/front/jquery-ui.js')?>"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo URL::asset('js/admin/app.min.js')?>"></script>
<script src="<?php echo URL::asset('js/admin/demo.js')?>"></script>
<script src="<?php echo URL::asset('js/admin/jquery.datetimepicker.full.js')?>"></script>

<!-- Global Admin Logic -->
<script type="text/javascript">
  // Core AJAX setup
  $(document).ready(function(){
      $.ajaxSetup({
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
      });
  });

  // Global Delete Confirmation
  window.confirmDelete = function(url) {
      if (typeof jQuery !== 'undefined') {
          jQuery('#confirmDeleteBtn').attr('href', url);
          jQuery('#deleteConfirmModal').modal('show');
      } else {
          if(confirm('Are you sure you want to delete this?')) {
              window.location.href = url;
          }
      }
  };
</script>

<!-- Toastr & UI Initializations -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    // Toastr Config
    toastr.options = {
      "closeButton": true,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "timeOut": "5000"
    };

    // Flash Messages
    <?php if(Session::has('message')): ?>
      toastr.success("<?php echo str_replace('"', '\"', Session::get('message')); ?>");
    <?php endif; ?>

    <?php if(Session::has('error')): ?>
      toastr.error("<?php echo str_replace('"', '\"', Session::get('error')); ?>");
    <?php endif; ?>

    <?php if(isset($errors) && $errors->any()): ?>
      <?php foreach($errors->all() as $error): ?>
        toastr.error("<?php echo str_replace('"', '\"', $error); ?>");
      <?php endforeach; ?>
    <?php endif; ?>

    // Common UI Components
    $('#example').DataTable();
    
    // Select2
    $(".select2").select2();

    // Datepicker generic
    $('.datepicker').datepicker({
      autoclose: true,
      dateFormat: 'yy-mm-dd'
    });

    // Custom Treeview Toggle (Our Work Dropdown)
    $('.sidebar-menu .treeview > a').on('click', function(e) {
        e.preventDefault();
        var $parent = $(this).parent();
        var $submenu = $(this).next('.treeview-menu');
        
        if ($parent.hasClass('menu-open') || $parent.hasClass('active')) {
            $submenu.slideUp(250, function() {
                $parent.removeClass('menu-open active');
            });
        } else {
            // Optional: Close other open menus
            $('.sidebar-menu .treeview.menu-open').removeClass('menu-open active').children('.treeview-menu').slideUp(250);
            
            $submenu.slideDown(250, function() {
                $parent.addClass('menu-open');
            });
        }
    });

    // Sidebar Toggle Check
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){ this.checked = true; });
        }else{
            $('.checkbox').each(function(){ this.checked = false; });
        }
    });
  });
</script>

<!-- Delete Confirmation Modal -->
<div class="modal" id="deleteConfirmModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true" style="z-index: 9999;">
    <div class="modal-dialog" role="document" style="max-width: 400px; margin-top: 15vh;">
        <div class="modal-content" style="border-radius: 12px; border: none; box-shadow: 0 20px 24px -4px rgba(16, 24, 40, 0.08); background: #fff;">
            <div class="modal-body" style="padding: 32px; text-align: center;">
                <div style="width: 48px; height: 48px; background: #fee2e2; color: #d92d20; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 24px;">
                    <i class="fa fa-trash"></i>
                </div>
                <h4 id="deleteModalLabel" style="font-weight: 700; color: #101828; margin-bottom: 8px;">Delete Item?</h4>
                <p style="color: #667085; font-size: 14px; line-height: 1.5; margin-bottom: 32px;">Are you sure you want to delete this? This action cannot be undone.</p>
                <div style="display: flex; gap: 12px;">
                    <button type="button" class="btn" data-dismiss="modal" style="flex: 1; padding: 10px; border-radius: 8px; border: 1px solid #d0d5dd; background: #fff; color: #344054; font-weight: 600;">Cancel</button>
                    <a id="confirmDeleteBtn" href="#" class="btn" style="flex: 1; padding: 10px; border-radius: 8px; border: none; background: #d92d20; color: #fff; font-weight: 600; text-decoration: none;">Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Legacy Functionality (Cleaned) -->
<script type="text/javascript">
function showtype() {
    var value = $("#type").val();
    if(value=="date") {
        $("#showdate, #showdates").css('display','block');
        $("#showcourse").css('display','none');
        return true;
    }
    $.ajax({
       type:'POST',
       url: '<?php echo Config::get('constants.PROJECT_URL');?>getcoursedataa/'+value,
       success:function(data) {
         if(data!="") {
             $("#showdate, #showdates").css('display','none');
             $("#showcourse").css('display','block');
             $("#citys").html(data);
         }
       }
    });
}

function showmcategory() {
    var value = $("#type").val();
    if(value=="all") {
        $("#mcategorydiv").css('display','none');
        return true;
    }
    $.ajax({
       type:'POST',
       url:'<?php echo Config::get('constants.PROJECT_URL');?>getmetrialdata/'+value,
       success:function(data) {
          if(data!="") {
              $("#mcategorydiv").css('display','block');
              $("#mcategory").html(data);
          }
       }
    });
}
</script>

</body>
</html>
