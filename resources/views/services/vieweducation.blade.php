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
      <h1>Education Focus Areas</h1>
    </section>

    <section class="content">
        <div class="action-bar">
            <div style="color: #667085; font-size: 14px;">
                Manage the focus area cards displayed on the Balmanch Education page.
            </div>
            <a href="<?php echo action('ServiceController@addeducation')?>" class="btn-premium">
                <i class="fa fa-plus"></i> Add Focus Card
            </a>
        </div>

        <div class="table-container">
            <table class="premium-table">
                <thead>
                    <tr>
                        <th style="width: 80px;">S.No</th>
                        <th>Title</th>
                        <th>Icon Class</th>
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
                        <td style="font-weight: 700; color: #101828;"><?php echo $tt->name; ?></td>
                        <td><i class="fas <?php echo $tt->icon; ?>" style="color: #E31E24; margin-right: 8px;"></i> <?php echo $tt->icon; ?></td>
                        <td style="max-width: 300px; color: #667085; font-size: 13px;">
                            <?php echo strip_tags(substr($tt->description, 0, 100)); ?>...
                        </td>
                        <td>
                            <div class="action-flex">
                                <a href="<?php echo action('ServiceController@editeducation',$idget)?>" class="btn-table-action" title="Edit">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="javascript:void(0)" 
                                   onclick="confirmDelete('<?php echo action('ServiceController@deleteeducation',$idget)?>')" 
                                   class="btn-table-action btn-table-delete" title="Delete">
                                    <i class="fa fa-trash"></i> Delete
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
    </section>
</div>

@include('includes.admin-footer');
