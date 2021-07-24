<?php 
include("path.php"); // Root path 

include(ROOT_PATH . "/app/controllers/testcovid.php"); 
include(ROOT_PATH . "/app/controllers/pagination.php"); 

?>

<!DOCTYPE html>
<html lang="en">


<?php include(ROOT_PATH . "/app/include/messages.php"); ?> 
<?php include(ROOT_PATH . "/app/include/messagesLogin.php"); ?> 


<!DOCTYPE html>
<html lang="en">
<?php include(ROOT_PATH . "/app/include/header.php"); ?> 
    <div class="container">
        <div class="col-lg-12">
            <div class="card my-5">
                <div class="card-header">
                    <strong>Basic Form</strong> Elements
                </div>
                <?php include(ROOT_PATH . "/app/helpers/formErorrs.php"); ?>
                <div class="card-body card-block">
                    <form action="testing.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Nama Lengkap</label></div>
                            <div class="col-12 col-md-9">
                                <?php if (isset($_SESSION['id'])):?>
                                <p class="form-control-static"><?php echo strtoupper($_SESSION['nama_lengkap']);  ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nomor Telepon</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="nomor_telepon" value="<?php echo $nomor_telepon; ?>" placeholder="Nomor Telepon" class="form-control"><small class="form-text text-muted">Isi nomor telepon yang aktif</small></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                            <div class="col-12 col-md-9"><input type="email" id="text-input" name="email" value="<?php echo $email; ?>" placeholder="Email" class="form-control"><small class="form-text text-muted">Isi nomor telepon yang aktif</small></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Lahir</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="password-input" name="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>" placeholder="Tanggal Lahir" class="form-control"><small class="help-block form-text">Masukkan Tanggal Lahir</small></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nomor KTP</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="password-input" name="nomor_ktp" value="<?php echo $nomor_ktp; ?>"  placeholder="Nomor KTP" class="form-control"><small class="help-block form-text">Masukkan nomor KTP anda</small></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="password-input" name="alamat" value="<?php echo $alamat; ?>" placeholder="Alamat" class="form-control"><small class="help-block form-text">Masukkan Alamat anda</small></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kota/Kabupaten Asal</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="password-input" name="asal" value="<?php echo $asal; ?>" placeholder="Alamat" class="form-control"><small class="help-block form-text">Masukkan Kota asal anda</small></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tipe tes</label></div>
                            <div class="col-12 col-md-9">
                                 <select class="form-control" id="testtype" name="tipe_tes" required="true">
                                    <option value="">Pilih</option> 
                                    <option value="Antigen">Tes Cepat Molekuler (TCM)</option>  
                                    <option value="RT-PCR">Polymerase Chain Reaction (PCR)</option>
                                    <option value="CB-NAAT">Rapid Test</option>    
                                    </select>
                                    <small class="help-block form-text">Masukkan Tipe Tes anda</small>    
                            </div>
                            
                        </div>
                        <div class="card-footer">
                            <button type="submit" name="daftar-btn" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
    
                        </div>
                    </form>
                </div>

            </div>



        </div>
    </div>
<?php include(ROOT_PATH . "/app/include/footer.php"); ?> 
</html>


