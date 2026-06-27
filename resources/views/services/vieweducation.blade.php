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
</style>

<div class="content-wrapper">
    <section class="content-header">
      <h1>Education Program Management</h1>
    </section>

    <section class="content">
        <!-- Section 1: Our Core Focus Areas -->
        <div class="action-bar" style="margin-bottom: 16px;">
            <div>
                <h3 style="font-weight: 700; color: #101828; margin: 0 0 4px 0; font-size: 18px;">Our Core Focus Areas</h3>
                <div style="color: #667085; font-size: 13px;">
                    Manage the main intervention focus area cards displayed on the Education page.
                </div>
            </div>
            <div>
                <a href="<?php echo action('ServiceController@addeducation')?>" class="btn-premium">
                    <i class="fa fa-plus"></i> Add Focus Card
                </a>
            </div>
        </div>

        <div class="table-container" style="margin-bottom: 40px;">
            <table class="premium-table">
                <thead>
                    <tr>
                        <th style="width: 80px;">S.No</th>
                        <th>Icon/Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th style="width: 200px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(isset($alleducation) && !empty($alleducation)){
                            $i = 0;
                            foreach($alleducation as $tt){ 
                                $i++;
                                $idget = $tt->id;
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td>
                            <?php if(!empty($tt->image)) { ?>
                                <img src="<?php echo URL::asset('uploads/gallery/'.$tt->image); ?>" style="width: 50px; height: 50px; object-fit: cover; border-radius: 6px;" alt="Icon">
                            <?php } else { ?>
                                <div style="width: 50px; height: 50px; background: #f8fafc; border-radius: 6px; display: flex; align-items: center; justify-content: center; color: #E31E24; font-size: 20px; border: 1px solid #eaecf0;">
                                    <i class="fas <?php echo $tt->icon; ?>"></i>
                                </div>
                            <?php } ?>
                        </td>
                        <td style="font-weight: 700; color: #101828;"><?php echo $tt->name; ?></td>
                        <td style="max-width: 300px; color: #667085; font-size: 13px;">
                            <?php echo strip_tags(substr($tt->description, 0, 100)); ?>...
                        </td>
                        <td>
                            <div class="action-flex">
                                <a href="<?php echo action('ServiceController@editeducation',$idget)?>" class="btn-table-action" title="Edit">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="<?php echo url('admin/deleteeducation/'.$idget)?>" 
                                   onclick="return confirm('Are you sure you want to delete this education card?')" 
                                   class="btn-table-action btn-table-delete" title="Delete">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php } } else { ?>
                    <tr>
                        <td colspan="5" style="text-align: center; padding: 48px; color: #98a2b3;">
                            <i class="fa fa-book" style="font-size: 32px; margin-bottom: 12px; display: block;"></i>
                            No education focus cards found.
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- Section 2: Glimpses of Impact -->
        <div class="action-bar" style="margin-bottom: 16px;">
            <div>
                <h3 style="font-weight: 700; color: #101828; margin: 0 0 4px 0; font-size: 18px;">Glimpses of Impact</h3>
                <div style="color: #667085; font-size: 13px;">
                    Manage the gallery images and impact moments of type 'Activity' or 'Donate' shown on the Education page.
                </div>
            </div>
            <div>
                <a href="<?php echo action('ServiceController@addgallery')?>" class="btn-premium" style="background: #1f2f46;">
                    <i class="fa fa-camera"></i> Add Impact Image
                </a>
            </div>
        </div>

        <div class="table-container">
            <table class="premium-table">
                <thead>
                    <tr>
                        <th style="width: 80px;">S.No</th>
                        <th>Image</th>
                        <th style="width: 200px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(isset($allgallery) && !empty($allgallery)){
                            $j = 0;
                            foreach($allgallery as $item){ 
                                $j++;
                                $galleryId = $item->id;
                    ?>
                    <tr>
                        <td><?php echo $j; ?></td>
                        <td>
                            <img src="<?php echo URL::asset('uploads/gallery/'.$item->image); ?>" style="width: 60px; height: 60px; object-fit: cover; border-radius: 6px;" alt="Gallery Image">
                        </td>
                        <td>
                            <div class="action-flex">
                                <a href="<?php echo action('ServiceController@editgallery', $galleryId)?>" class="btn-table-action" title="Edit">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="<?php echo action('ServiceController@deletegallery', $galleryId)?>" 
                                   onclick="return confirm('Are you sure you want to delete this gallery item?')" 
                                   class="btn-table-action btn-table-delete" title="Delete">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php } } else { ?>
                    <tr>
                        <td colspan="3" style="text-align: center; padding: 48px; color: #98a2b3;">
                            <i class="fa fa-image" style="font-size: 32px; margin-bottom: 12px; display: block;"></i>
                            No glimpses of impact images found.
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
</div>

@include('includes.admin-footer');
