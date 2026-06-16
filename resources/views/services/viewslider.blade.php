@include('includes.admin-header');
@include('includes.admin-sidebar');

<style>
/* Premium Table Styling */
.table-container {
    background: #ffffff;
    border-radius: 12px;
    border: 1px solid #eaecf0;
    overflow: hidden;
    box-shadow: 0 1px 3px rgba(16, 24, 40, 0.1);
}

.premium-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
}

.premium-table th {
    background: #f9fafb;
    padding: 12px 24px;
    text-align: left;
    font-size: 12px;
    font-weight: 600;
    color: #667085;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    border-bottom: 1px solid #eaecf0;
}

.premium-table td {
    padding: 16px 24px;
    vertical-align: middle;
    border-bottom: 1px solid #eaecf0;
    color: #475467;
    font-size: 14px;
}

.premium-table tr:last-child td {
    border-bottom: none;
}

.slider-img-preview {
    width: 120px;
    height: 68px;
    object-fit: cover;
    border-radius: 6px;
    border: 1px solid #eaecf0;
    transition: transform 0.2s;
}

.slider-img-preview:hover {
    transform: scale(1.05);
}

/* Action Buttons */
.action-flex {
    display: flex;
    gap: 8px;
}

.btn-table-action {
    padding: 8px 12px;
    border-radius: 6px;
    border: 1px solid #d0d5dd;
    background: #fff;
    color: #344054;
    font-size: 13px;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 6px;
    transition: all 0.2s;
    text-decoration: none !important;
}

.btn-table-action:hover {
    background: #f9fafb;
    color: #E31E24;
    border-color: #E31E24;
}

.btn-table-delete:hover {
    background: #fef3f2;
    color: #d92d20;
    border-color: #f89687;
}

.action-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 24px;
    background: #fff;
    padding: 16px;
    border-radius: 12px;
    border: 1px solid #eaecf0;
}

.btn-premium {
    background: #E31E24;
    color: #fff;
    padding: 10px 18px;
    border-radius: 8px;
    font-weight: 600;
    font-size: 14px;
    display: flex;
    align-items: center;
    gap: 8px;
    border: none;
    transition: all 0.2s;
    text-decoration: none !important;
}

.btn-premium:hover {
    background: #bc1a1f;
    color: #fff;
    box-shadow: 0 4px 12px rgba(227, 30, 36, 0.24);
}

/* Modal Styling */
.modal-content-premium {
    border-radius: 12px;
    overflow: hidden;
    border: none;
}
.modal-header-premium {
    background: #fcfcfd;
    border-bottom: 1px solid #eaecf0;
    padding: 16px 24px;
}
.modal-body-premium {
    padding: 0;
    background: #f2f4f7;
    display: flex;
    justify-content: center;
    align-items: center;
}
.full-img {
    max-width: 100%;
    max-height: 80vh;
    display: block;
}
</style>

<div class="content-wrapper">
    <section class="content-header">
      <h1>Home Hero Slider</h1>
    </section>

    <section class="content">
        <div class="action-bar">
            <div style="color: #667085; font-size: 14px;">
                Manage the high-impact images on your homepage hero section.
            </div>
            <a href="<?php echo action('ServiceController@addslider')?>" class="btn-premium">
                <i class="fa fa-plus"></i> Add New Slide
            </a>
        </div>

        <div class="table-container">
            <table class="premium-table">
                <thead>
                    <tr>
                        <th style="width: 80px;">S.No</th>
                        <th>Image</th>
                        <th style="width: 250px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(isset($allslider) && !empty($allslider)){
                            $i = 0;
                            foreach($allslider as $tt){ 
                                $i++;
                                $idget = $tt->id;
                                $imgUrl = URL::asset('uploads/slider/'.$tt->image);
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td>
                            <img src="<?php echo $imgUrl; ?>" class="slider-img-preview" alt="Slide">
                        </td>
                        <td>
                            <div class="action-flex">
                                <button type="button" class="btn-table-action" 
                                        onclick="viewFullImage('<?php echo $imgUrl; ?>')" 
                                        data-toggle="modal" 
                                        data-target="#imageModal"
                                        title="View Image">
                                    <i class="fa fa-eye"></i> View
                                </button>
                                <a href="<?php echo url('admin/deleteslider/'.$idget)?>" 
                                   onclick="return confirm('Are you sure you want to delete this hero image?')" 
                                   class="btn-table-action btn-table-delete" title="Delete Image">
                                    <i class="fa fa-trash"></i> Delete
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php } } else { ?>
                    <tr>
                        <td colspan="3" style="text-align: center; padding: 48px; color: #98a2b3;">
                            <i class="fa fa-picture-o" style="font-size: 32px; margin-bottom: 12px; display: block;"></i>
                            No hero images found.
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
</div>

<!-- Full Image Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-content-premium">
            <div class="modal-header modal-header-premium">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title" id="imageModalLabel" style="font-weight: 700;">Full Size Preview</h5>
            </div>
            <div class="modal-body modal-body-premium" style="background: #f2f4f7; display: flex; justify-content: center; align-items: center; padding: 0;">
                <img id="fullImage" src="" class="img-responsive" style="max-width: 100%; max-height: 80vh;">
            </div>
        </div>
    </div>
</div>

<script>
function viewFullImage(url) {
    // Small delay to ensure the modal is initialized if triggered via data-attributes
    setTimeout(function() {
        var img = document.getElementById('fullImage');
        if(img) {
            img.src = url;
        }
    }, 100);
}
</script>

@include('includes.admin-footer');