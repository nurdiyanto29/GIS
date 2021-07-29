<div class="container">

    <div class="page-header">
    <h1>Tambah Review</h1>
</div>
<div class="row">
    <div class="col-sm-6">
        <?php if($_POST) include'aksi.php'?>
        <form method="post" action="?m=review_tambah" enctype="multipart/form-data">
            <div class="form-group">
                <label>Tempat <span class="text-danger">*</span></label>
                <select class="form-control" name="id_tempat">
                    <?=get_tempat_option($_POST['id_tempat'])?>
                </select>
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input class="form-control" type="text" name="nama" value="<?=$_POST['nama']?>"/>
            </div>
            <div class="form-group">
                <label>Komentar</label>
                <input class="form-control" type="text" name="komentar" value="<?=$_POST['komentar']?>"/>
            </div>
           
            <div class="form-group">
                <button class="btn btn-info"><span class="glyphicon glyphicon-save"></span> Simpan</button>
                <a class="btn btn-danger" href="?m=galeri"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
            </div>
        </form>
    </div>
</div>
</div>