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
      <h1>Add Skill Card</h1>
    </section>

    <section class="content">
        <a href="<?php echo action('ServiceController@viewskills')?>" class="back-link">
            <i class="fa fa-arrow-left"></i> Back to List
        </a>

        <div class="form-card">
            <div class="form-header">
                <h5><i class="fa fa-plus-circle" style="color: #E31E24;"></i> Create Skill Pillar Card</h5>
            </div>

            {{ Form::open(array('action' => 'ServiceController@addskills')) }}
                {{ csrf_field() }}
                <div class="form-body">
                    <div class="form-group">
                        <label>Skill Title</label>
                        <input required type="text" name="name" class="form-control-premium" placeholder="e.g. Chikankari" />
                    </div>

                    <div class="form-group">
                        <label>FontAwesome Icon Class</label>
                        <input required type="text" name="icon" class="form-control-premium" placeholder="e.g. fa-cut" />
                        <p class="icon-hint">Use FontAwesome 5 classes (e.g., fa-cut, fa-th, fa-ellipsis-h).</p>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea required name="description" class="form-control-premium" style="height: 120px; resize: none;" placeholder="Explain this skill or craft..."></textarea>
                    </div>

                    <button type="submit" class="btn-submit-premium">
                        <i class="fa fa-check"></i> Save Skill Card
                    </button>
                </div>
            </form>
        </div>
    </section>
</div>

@include('includes.admin-footer');
