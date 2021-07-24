<?php 
include("path.php"); // Root path 

include(ROOT_PATH . "/app/controllers/kategori.php"); 
include(ROOT_PATH . "/app/controllers/pagination.php"); 


$posts = array();



if (isset($_GET['t_id'])) {
    $posts = getPostsByTopicId($_GET['t_id']);
    $postsTitle = "Hasil kategori '" . $_GET['name'] . "'";
} else if (isset($_POST['search-term'])) {
    $posts = searchPosts($_POST['search-term']);
}else {
    $posts = getPublishedPosts();

}




?>

<!DOCTYPE html>
<html lang="en">
<?php include(ROOT_PATH . "/app/include/header.php"); ?> 
<?php include(ROOT_PATH . "/app/include/messages.php"); ?> 
<?php include(ROOT_PATH . "/app/include/messagesLogin.php"); ?> 
            <!-- Header-->
            <!-- Header-->
            <header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2 text-center">Live Data COVID-19 Indonesia dan Dunia</h1>
                                <div class="card bg-dark">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between p-md-1">
                                        <div class="d-flex flex-row">
                                            <div class="align-self-center">
                                            <img src="assets/indonesia.png" alt="">
                                            </div>
                                            <div class="ps-2">
                                            <h4 class="text-white">Indonesia</h4>
                                            <div><span class="text-white ps-1">Sembuh:</span><span class="mb-0 ps-1 text-white" id="data-kasus2"></span></div>
                                            <div><span class="text-white">Meninggal:</span><span class="mb-0 ps-1 text-white" id="data-kasus3"></span></div>
                                            </div>
                                        </div>
                                        <div class="align-self-center">
                                            <h2 class="h1 mb-0 text-white" id="data-kasus1"></h2>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>

                    </div>
                    <div class="container">
                    <section>
                        <div class="row">
                        <div class="col-xl-6 col-md-12 mb-4">
                            <div class="card bg-dark">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between p-md-1">
                                    <div class="d-flex flex-row">
                                        <div class="align-self-center">
                                        <img src="assets/coronavirus.png" alt="">
                                        </div>
                                        <div class="ps-2">
                                        <h4 class="text-white">Total Positif</h4>
                                        <p class="mb-0 text-white">Terupdate</p>
                                        </div>
                                    </div>
                                    <div class="align-self-center">
                                        <h2 class="h1 mb-0 text-white" id="data-kasus"></h2>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-12 mb-4">
                            <div class="card bg-dark">
                            <div class="card-body">
                                <div class="d-flex justify-content-between p-md-1">
                                <div class="d-flex flex-row">
                                    <div class="align-self-center">
                                    <img src="assets/spirit.png" alt="">
                                    </div>
                                    <div class="ps-2">
                                    <h4 class="text-white">Total Meninggal</h4>
                                    <p class="mb-0 text-white">Terupdate</p>
                                    </div>
                                </div>
                                <div class="align-self-center">
                                    <h2 class="h1 mb-0 text-white" id="data-meninggal"></h2>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-xl-6 col-md-12 mb-4">
                            <div class="card bg-dark">
                            <div class="card-body">
                                <div class="d-flex justify-content-between p-md-1">
                                <div class="d-flex flex-row">
                                    <div class="align-self-center">
                                    <h2 class="h1 mb-0 me-4 text-white" id="data-sembuh"></h2>
                                    </div>
                                    <div>
                                    <h4 class="text-white">Total Sembuh</h4>
                                    <p class="mb-0 text-white">Terupdate</p>
                                    </div>
                                </div>
                                <div class="align-self-center">
                                    <img src="assets/health-care.png" alt="">
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-12 mb-4">
                            <div class="card bg-dark">
                            <div class="card-body">
                                <div class="d-flex justify-content-between p-md-1">
                                <div class="d-flex flex-row">
                                    <div class="align-self-center">
                                    <h2 class="h1 mb-0 me-4 text-white">7,800,000,000</h2>
                                    </div>
                                    <div>
                                    <h4 class="text-white">Total Populasi</h4>
                                    <p class="mb-0 text-white">Terupdate</p>
                                    </div>
                                </div>
                                <div class="align-self-center">
                                    <img src="assets/crowd.png" alt="">
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </section>
                </div>
                </div>
            </header>
            <header class="bg-dark py-5">

            </header>

            <!-- Post Slider -->
            <div class="post-slider">
            <h1 class="slider-title">Berita Tentang Covid-19</h1>
            <i class="fas fa-chevron-left prev"></i>
            <i class="fas fa-chevron-right next"></i>

            <div class="post-wrapper">

            <?php foreach($posts as $post):?>
                <div class="post">
                <img src="<?php echo BASE_URL. '/admin/gambar/' . $post['image'];?>" alt="" class="slider-image">
                <div class="post-info">
                    <h4><a href="post/<?php echo $post['id']; ?>"><?php echo $post['title']?></a></h4>
                    <i class="far fa-user"><?php echo $post['username']; ?></i>
                    &nbsp;
                    <i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at']));?></i>
                </div>
                </div>
                <?php endforeach; ?>
            </div>

            </div>


            <!-- Page content-->
            <div class="container">
                <div class="row">
                    <!-- Blog entries-->
                    <div class="col-lg-8">
                        <!-- Pagination-->
                        <nav aria-label="Pagination">
                            <ul class="pagination justify-content-end my-4">
                                <?php for ($i=1; $i <= $number_f_pages ; $i++): ?>
                                    <?php if($page==$i):?>
                                    <li class="page-item active"><a class="page-link" href="home?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                    <?php else:?>
                                    <li class="page-item"><a class="page-link" href="home?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                    <?php endif;?>
                                <?php endfor; ?>
                            </ul>
                        </nav>
                        <div class="row ">
                            <h2>Informasi Terbaru</h2>
                            <?php while ($row = mysqli_fetch_array($result)):?>
                            <div class="card mb-4">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img class="card-img h-100" src="<?php echo BASE_URL. '/admin/gambar/' . $row['image'];?>" alt="Card image cap">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h2 class="card-title" style="font-size:18px;"><a href="post/<?php echo $row['id']; ?>"><?php echo $row['title'];?></a></h2>
                                            <div class="text-muted">
                                                <span style="font-size:12px"><i class="fas fa-user fa-fw"></i><?php echo $row['username']; ?></span>
                                                <span style="font-size:12px"><i class="far fa-calendar-alt"></i> <?php echo date('F j, Y', strtotime($row['created_at']));?></span>
                                            </div>
                                            <p class="card-text"><?php echo html_entity_decode(substr($row['overview'], 0, 150).'...');?></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>

                        </div>

                    </div>
                    <!-- Side widgets-->
                    <div class="col-lg-4">
                        <!-- Search widget-->
                        <div class="card mb-4">
                            <h5 class="card-header bg-dark text-white">Search</h5>
                            <div class="card-body">
                                <form action="search.php" method="post">
                                    <div class="input-group">                       
                                        <input class="form-control" name="search-term" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                        <button class="btn btn-primary" type="submit">Go!</button>               
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Categories widget-->
                        <div class="card mb-4">
                            <h5 class="card-header bg-dark text-white">Kategori</h5>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <?php foreach ($kategoris as $key => $kategori):?>
                                            <li><a href="<?php echo BASE_URL . '/kategori.php?t_id=' . $kategori['id'] . '&name=' . $kategori['name']?>"><?php echo $kategori['name']; ?></a></li>
                                        <?php endforeach;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


  
        </main>


    <?php include(ROOT_PATH . "/app/include/footer.php"); ?> 
</html>
<script>


    
    $(document).ready(function(){

        //panggil fungsi menampilkan semua data global
        semuaData();
        dataNegara();

        //untuk refresh otomatis
        setInterval(function(){
            semuaData();
            dataNegara();
        }, 3000);

        function semuaData(){
            $.ajax({
                url : 'https://coronavirus-19-api.herokuapp.com/all',
                success : function(data){
                    try{
                        var json = data;
                        var kasus = data.cases;
                        var meninggal = data.deaths;
                        var sembuh = data.recovered;

                        $('#data-kasus').html(kasus);
                        $('#data-meninggal').html(meninggal);
                        $('#data-sembuh').html(sembuh);



                    }catch{
                        alert('Error');
                    }
                }
            });
        }
        
        function dataNegara(){
            $.ajax({
                url : 'https://coronavirus-19-api.herokuapp.com/countries/indonesia',
                success : function(data){
                    try{
                        var json = data;
                        var kasus = data.cases;
                        var meninggal = data.deaths;
                        var sembuh = data.recovered;
                        var aktif = data.active;

                        $('#data-kasus1').html(kasus);
                        $('#data-kasus3').html(meninggal);
                        $('#data-kasus2').html(sembuh);
                        $('#data-kasus4').html(sembuh);



                    }catch{
                        alert('Error');
                    }
                }
            });
        }
    });
</script>

