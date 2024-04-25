<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <form action="" method="post" id="text-editor">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="name_product" class="form-control" placeholder="News title" required>
                </div>
                <div class="form-group">
                    <textarea name="detail_product" class="form-control" cols="30" rows="10" placeholder="Write a great news!"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="status" value="published" class="btn btn-primary">Publish</button>
                    <button type="submit" name="status" value="draft" class="btn btn-secondary">Save to Draft</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<?= $this->endSection() ?>