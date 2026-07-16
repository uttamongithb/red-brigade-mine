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

.file-upload-wrapper {
    position: relative;
    border: 2px dashed #eaecf0;
    border-radius: 12px;
    padding: 40px;
    text-align: center;
    transition: all 0.2s;
    cursor: pointer;
    background: #f9fafb;
}

.file-upload-wrapper:hover {
    background: #f2f4f7;
    border-color: #d0d5dd;
}

.file-upload-wrapper i {
    font-size: 32px;
    color: #667085;
    margin-bottom: 12px;
}

.file-upload-text {
    font-size: 14px;
    color: #475467;
}

.file-upload-text span {
    color: #E31E24;
    font-weight: 600;
}

.btn-submit-premium {
    background: #E31E24;
    color: #fff;
    padding: 12px 24px;
    border-radius: 8px;
    font-weight: 600;
    font-size: 16px;
    border: none;
    transition: all 0.2s;
    cursor: pointer;
    width: 100%;
    margin-top: 12px;
}

.btn-submit-premium:hover {
    background: #bc1a1f;
    box-shadow: 0 4px 12px rgba(227, 30, 36, 0.24);
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
</style>

<div class="content-wrapper">
    <section class="content-header">
      <h1>Add Home Hero Slider</h1>
    </section>

    <section class="content">
        <a href="<?php echo action([\App\Http\Controllers\ServiceController::class, 'viewslider'])?>" class="back-link">
            <i class="fa fa-arrow-left"></i> Back to Slider List
        </a>

        <div class="form-card">
            <div class="form-header">
                <h5><i class="fa fa-plus-circle" style="color: #E31E24;"></i> Create New Slide</h5>
            </div>

            {{ Form::open(array('action' => [\App\Http\Controllers\ServiceController::class, 'addslider'],'files' => true)) }}
                {{ csrf_field() }}
                <div class="form-body">

                    <div class="form-group">
                        <label>Slide Image</label>
                        <div id="image_preview_container" style="display: none; margin-bottom: 16px; border-radius: 12px; overflow: hidden; border: 1px solid #eaecf0; width: fit-content;">
                            <img id="image_preview" src="#" alt="Selected Image" style="display: block; max-width: 300px; height: auto;">
                        </div>
                        <div class="file-upload-wrapper" onclick="document.getElementById('image_upload').click();">
                            <i class="fa fa-cloud-upload"></i>
                            <div class="file-upload-text">
                                <span id="upload_status_text">Click to upload</span> or drag and drop<br>
                                <small>SVG, PNG, JPG or GIF (max. 2048x1080px)</small>
                            </div>
                            <input id="image_upload" required type="file" name="image[]" accept="image/*" style="display: none;" onchange="previewImage(this)" />
                        </div>
                    </div>

                    <button type="submit" class="btn-submit-premium">
                        <i class="fa fa-check"></i> Publish Slide
                    </button>
                </div>
            </form>
        </div>
    </section>
</div>

<script>
function previewImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
            document.getElementById('image_preview').src = e.target.result;
            document.getElementById('image_preview_container').style.display = 'block';
            document.getElementById('upload_status_text').innerHTML = 'Change selected image';
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}
</script>

@include('includes.admin-footer');