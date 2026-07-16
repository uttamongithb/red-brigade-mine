@include('includes.admin-header');
@include('includes.admin-sidebar');

<style>
.form-card {
    background: #ffffff;
    border-radius: 12px;
    border: 1px solid #eaecf0;
    box-shadow: 0 1px 3px rgba(16, 24, 40, 0.1), 0 1px 2px rgba(16, 24, 40, 0.06);
    overflow: hidden;
    max-width: 800px;
    margin: 0 auto;
}

.form-header {
    padding: 24px;
    border-bottom: 1px solid #eaecf0;
    background: #fcfcfd;
}

.form-header h5 {
    margin: 0;
    font-size: 18px;
    font-weight: 700;
    color: #101828;
    display: flex;
    align-items: center;
    gap: 10px;
}

.form-body {
    padding: 32px;
}

.form-group {
    margin-bottom: 24px;
}

.form-group label {
    display: block;
    font-size: 14px;
    font-weight: 600;
    color: #344054;
    margin-bottom: 8px;
}

.form-control-premium {
    width: 100%;
    padding: 10px 14px;
    background: #ffffff;
    border: 1px solid #d0d5dd;
    border-radius: 8px;
    font-size: 16px;
    color: #101828;
    transition: all 0.2s;
    box-shadow: 0 1px 2px rgba(16, 24, 40, 0.05);
}

.form-control-premium:focus {
    border-color: #E31E24;
    box-shadow: 0 0 0 4px rgba(227, 30, 36, 0.1);
    outline: none;
}

.back-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #667085;
    font-size: 14px;
    font-weight: 500;
    text-decoration: none !important;
    margin-bottom: 24px;
    transition: color 0.2s;
}

.back-link:hover {
    color: #101828;
}

.icon-hint {
    font-size: 12px;
    color: #667085;
    margin-top: 4px;
}
</style>

<div class="content-wrapper">
    <section class="content-header">
      <h1>Update Education Card</h1>
    </section>

    <section class="content">
        <a href="<?php echo action([\App\Http\Controllers\ServiceController::class, 'vieweducation'])?>" class="back-link">
            <i class="fa fa-arrow-left"></i> Back to List
        </a>

        <div class="form-card">
            <div class="form-header">
                <h5><i class="fa fa-edit" style="color: #E31E24;"></i> Edit Education Focus Card</h5>
            </div>

            <form action="<?php echo action([\App\Http\Controllers\ServiceController::class, 'editeducation'], $thisdata->id); ?>" method="POST" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="form-body">
                    <div class="form-group">
                        <label>Card Title</label>
                        <input required type="text" name="name" value="<?php echo $thisdata->name; ?>" class="form-control-premium" />
                    </div>

                    <div class="form-group">
                        <label>Current Image/Icon</label>
                        <?php if(!empty($thisdata->image)) { ?>
                            <div style="margin-bottom: 16px; border-radius: 12px; overflow: hidden; border: 1px solid #eaecf0; width: fit-content;">
                                <img src="<?php echo URL::asset('uploads/gallery/'.$thisdata->image); ?>" alt="Current Image" style="display: block; max-width: 200px; height: auto;">
                            </div>
                        <?php } else { ?>
                            <div style="padding: 12px; background: #f8fafc; border-radius: 8px; color: #667085; font-size: 14px; margin-bottom: 16px;">
                                <i class="fas <?php echo $thisdata->icon; ?>"></i> Using FontAwesome Icon
                            </div>
                        <?php } ?>

                        <div id="new_preview_container" style="display: none; margin-bottom: 16px; border-radius: 12px; overflow: hidden; border: 2px solid #E31E24; width: fit-content;">
                            <label style="padding: 4px 8px; background: #E31E24; color: #fff; font-size: 10px; display: block;">NEW PREVIEW</label>
                            <img id="new_preview" src="#" alt="New Image" style="display: block; max-width: 200px; height: auto;">
                        </div>

                        <label>Replace Image (Optional)</label>
                        <div class="file-upload-wrapper" onclick="document.getElementById('image_upload').click();">
                            <i class="fa fa-cloud-upload"></i>
                            <div class="file-upload-text">
                                <span id="upload_status_text">Click to change image</span> or drag and drop<br>
                                <small>Leave empty to keep current image/icon</small>
                            </div>
                            <input id="image_upload" type="file" name="image" accept="image/*" style="opacity: 0; position: absolute; z-index: -1;" onchange="previewNewImage(this)" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label>FontAwesome Icon Class (Used if no image present)</label>
                        <input type="text" name="icon" value="<?php echo $thisdata->icon; ?>" class="form-control-premium" />
                        <p class="icon-hint">e.g. fa-book-reader, fa-shield-alt</p>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea required name="description" class="form-control-premium" style="height: 120px; resize: none;"><?php echo $thisdata->description; ?></textarea>
                    </div>

                    <button type="submit" class="btn-submit-premium">
                        <i class="fa fa-save"></i> Save Changes
                    </button>
                </div>
            </form>
        </div>
        </section>
        </div>

        <script>
        function previewNewImage(input) {
        if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('new_preview').src = e.target.result;
            document.getElementById('new_preview_container').style.display = 'block';
            document.getElementById('upload_status_text').innerHTML = 'Change new selection';
        }
        reader.readAsDataURL(input.files[0]);
        }
        }
        </script>

@include('includes.admin-footer');
