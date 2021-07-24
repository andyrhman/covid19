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
                    <br>
                    <br>
                    <br>
                    <br>
                    <h1 class="display-5 fw-bolder text-white mb-2 text-center">Live Data COVID-19 Per-Provinsi</h1>
                    <table class="table table-dark table-striped my-5">
                        <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Provinsi</th>
                                <th scope="col">Positif</th>
                                <th scope="col">Sembuh</th>
                                <th scope="col">Meninggal</th>
                                </tr>
                            </thead>
                            <tbody id="table-data">

                            </tbody>
                        </table>
                </div>
                
            </header>
            <header class="bg-dark py-5">


            </header>


        </main>


    <?php include(ROOT_PATH . "/app/include/footer.php"); ?> 
</html>
<script>


    
    $(document).ready(function(){

        //panggil fungsi menampilkan semua data global
        semuaData();
        dataNegara();
        dataProvinsi();

        //untuk refresh otomatis
        setInterval(function(){
            semuaData();
            dataNegara();
            dataProvinsi();
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

        function dataProvinsi(){
            $.ajax({
                url : 'curl.php',
                type: 'GET',
                success : function(data){
                    try{

                        $('#table-data').html(data);

                    }catch{
                        alert('Error');
                    }
                }
            });
        }
    });
</script>

