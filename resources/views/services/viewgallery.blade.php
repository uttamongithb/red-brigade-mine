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
    padding: 16px;
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
    display: inline-flex;
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

/* DataTables Bootstrap Customizations */
.dataTables_wrapper .dataTables_length,
.dataTables_wrapper .dataTables_filter {
    margin-bottom: 16px;
}
.dataTables_wrapper .dataTables_info,
.dataTables_wrapper .dataTables_paginate {
    margin-top: 16px;
}
</style>

<div class="content-wrapper">
    <section class="content-header">
      <h1>Gallery</h1>
    </section>

    <section class="content">
        <div class="action-bar">
            <div style="color: #667085; font-size: 14px;">
                Manage the media and pictures displayed in the Gallery and sections of the Red Brigade website.
            </div>
            <div>
                <a href="<?php echo action([\App\Http\Controllers\ServiceController::class, 'addgallery'])?>" class="btn-premium">
                    <i class="fa fa-plus-circle"></i> Add New Gallery
                </a>
            </div>
        </div>

        <div class="table-container">
            <table class="premium-table" id="example">
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
                            $i = 0;
                            foreach($allgallery as $tt){ 
                                $i++;
                                $idget = $tt->id;
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td>
                            <img src="<?php echo URL::asset('uploads/gallery/'.$tt->image); ?>" style="width: 60px; height: 60px; object-fit: cover; border-radius: 6px; border: 1px solid #eaecf0;" alt="Gallery Thumbnail">
                        </td>
                        <td>
                            <div class="action-flex">
                                <a href="<?php echo action([\App\Http\Controllers\ServiceController::class, 'editgallery'], $idget)?>" class="btn-table-action" title="Edit">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="<?php echo action([\App\Http\Controllers\ServiceController::class, 'deletegallery'], $idget)?>" 
                                   onclick="return confirm('Are you sure you want to delete this gallery item?')" 
                                   class="btn-table-action btn-table-delete" title="Delete">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php } } ?>
                </tbody>
            </table>
        </div>
    </section>
</div>

@include('includes.admin-footer');