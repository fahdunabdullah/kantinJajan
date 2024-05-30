@extends('layouts.master')

@section('title', 'Home')

@section('content')


    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Silahkan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    "Ayo Beli produk kami Karena yang lain belum tentu berkualitas"
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary"data-bs-dismiss="modal">Understand</button>
                </div>       
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Ada</p>
                                <h5 class="font-weight-bolder">
                                    {{ $pemasoks }}
                                </h5>
                                <p class="mb-0">
                                    Pemasok
                                </p>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                <i class="ni ni-box-2 text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Ada</p>
                                <h5 class="font-weight-bolder">
                                    {{ $barangs }}
                                </h5>
                                <p class="mb-0">
                                    Barang
                                </p>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                <i class="ni ni-bag-17 text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Ada</p>
                                <h5 class="font-weight-bolder">
                                    {{ $transaksis }}
                                </h5>
                                <p class="mb-0">
                                    Transaksi
                                </p>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <h3 class="text-capitalize"><span id="greet"></span> {{ auth()->user()->name }}</h3>
                    <h6 class="text-capitalize">Bagaimana kabar anda hari ini?</h6>
                </div>
                <div class="card-body p-3">
                    <div class="chart">

                        {{-- makanan --}}
                        <h3 class="text-center">Makanan</h3>
                        <div class="text-center w-50 mx-auto fw-light">Silahkan</div>
                        <div class="row row-cols-md-3 row-cols-2 gx-5 p-5">
                            <div class="col mb-2">
                                <div class="card bg-secondary">
                                    <img src="https://i0.wp.com/www.tokomesin.com/wp-content/uploads/2017/09/Cara-Membuat-Nugget-Ayam-Yang-Praktis-Di-Rumah-tokomesin2.jpg?fit=800%2C534&ssl=1"
                                        class="card-img-top">
                                    <div class="card-body">
                                        <div class align="center">
                                            <p class="card-text text-white">Nugget</p>
                                        </div>
                                    </div>
                                    <div class="card-footer d-md-flex">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop">
                                            Beli
                                        </button>
                                        <span
                                            class="ms-auto text danger fw-bold d-block text-white text-center harga">13.000,00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-5">
                                <div class="card bg-secondary">
                                    <img src="https://asset.kompas.com/crops/lELGZvUDhfkXiM12iGWDpUPwWkI=/0x94:1080x814/750x500/data/photo/2020/10/07/5f7d91b619ab2.jpg"
                                        class="card-img-top">
                                    <div class="card-body">
                                        <div class align="center">
                                            <p class="card-text text-white">Japanese Food</p>
                                        </div>
                                    </div>
                                    <div class="card-footer d-md-flex">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop">
                                            Beli
                                        </button>
                                        <span
                                            class="ms-auto text danger fw-bold d-block text-white text-center harga">18.000,00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-5">
                                <div class="card bg-secondary">
                                    <img src="https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2022/11/15080337/jadi-camilan-favorit-ini-kalori-pisang-goreng-yang-perlu-diketahui-halodoc.jpg.webp"
                                        class="card-img-top">
                                    <div class="card-body">
                                        <div class align="center">
                                            <p class="card-text text-white">Pisang Goreng</p>
                                        </div>
                                    </div>
                                    <div class="card-footer d-md-flex">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop">
                                            Beli
                                        </button>
                                        <span
                                            class="ms-auto text danger fw-bold d-block text-white text-center harga">10.000,00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-5">
                                <div class="card bg-secondary">
                                    <img src="https://img.kurio.network/VYbE04-U3EHekyTf5Ny82V8ytYc=/1200x675/filters:quality(80)/https://kurio-img.kurioapps.com/21/08/09/98ddd8be-bda3-49db-b7b3-3b3d88601bf7.jpe"
                                        class="card-img-top">
                                    <div class="card-body">
                                        <div class align="center">
                                            <p class="card-text text-white">Pisang Goreng</p>
                                        </div>
                                    </div>
                                    <div class="card-footer d-md-flex">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop">
                                            Beli
                                        </button>
                                        <span
                                            class="ms-auto text danger fw-bold d-block text-white text-center harga">3.000,00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-5">
                                <div class="card bg-secondary">
                                    <img src="https://img-global.cpcdn.com/recipes/f8ed17f8cee0cad2/1200x630cq70/photo.jpg"
                                        class="card-img-top">
                                    <div class="card-body">
                                        <div class align="center">
                                            <p class="card-text text-white">Sosis Bakar</p>
                                        </div>
                                    </div>
                                    <div class="card-footer d-md-flex">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop">
                                            Beli
                                        </button>
                                        <span
                                            class="ms-auto text danger fw-bold d-block text-white text-center harga">7.000,00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-5">
                                <div class="card bg-secondary">
                                    <img src="https://cdn.idntimes.com/content-images/post/20210525/eho-maki-c9472015a17a4e80a981cea4092fa592-bd60631a1e28fbeb592d774caebfd9a7.jpg"
                                        class="card-img-top">
                                    <div class="card-body">
                                        <div class align="center">
                                            <p class="card-text text-white">Sushi</p>
                                        </div>
                                    </div>
                                    <div class="card-footer d-md-flex">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop">
                                            Beli
                                        </button>
                                        <span
                                            class="ms-auto text danger fw-bold d-block text-white text-center harga">4.000,00</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mx-auto w-75">
                            <h3 class="text-center">Minuman</h3>
                            <p class align="center">Silahkan</p>
                        </div>
                    </div>
                    <div class="row row-cols-md-3 row-cols-2 gx-5 p-5">
                        <div class="col mb-2">
                            <div class="card bg-secondary">
                                <img src="https://cdn.idntimes.com/content-images/post/20190211/pop-es-f7ece6a75647cbeb7524a5b17213421d.jpg"
                                    class="card-img-top">
                                <div class="card-body">
                                    <div class align="center">
                                        <p class="card-text text-white">Pop Ice</p>
                                    </div>
                                </div>
                                <div class="card-footer d-md-flex">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">
                                        Beli
                                    </button>
                                    <span
                                        class="ms-auto text danger fw-bold d-block text-white text-center harga">5.000,00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card bg-secondary">
                                <img src="https://storage.nu.or.id/storage/post/1_1/mid/es-teh-manis-medium_1661054506.webp"
                                    class="card-img-top">
                                <div class="card-body">
                                    <div class align="center">
                                        <p class="card-text text-white">Es Teh Manis</p>
                                    </div>
                                </div>
                                <div class="card-footer d-md-flex">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">
                                        Beli
                                    </button>
                                    <span
                                        class="ms-auto text danger fw-bold d-block text-white text-center harga">6.000,00</span>
                                </div>
                            </div>  
                        </div>
                        <div class="col mb-5">
                            <div class="card bg-secondary">
                                <img src="https://i.ytimg.com/vi/J9JAY0JwZK4/maxresdefault.jpg" class="card-img-top">
                                <div class="card-body">
                                    <div class align="center">
                                        <p class="card-text text-white">Es Sop Buah Cup</p>
                                    </div>
                                </div>
                                <div class="card-footer d-md-flex">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">
                                        Beli
                                    </button>
                                    <span
                                        class="ms-auto text danger fw-bold d-block text-white text-center harga">9.000,00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card bg-secondary">
                                <img src="https://awsimages.detik.net.id/community/media/visual/2019/09/20/1a5fe9ba-ffa9-4ada-acd9-f2d913e6b06b.jpeg?w=600&q=90"
                                    class="card-img-top">
                                <div class="card-body">
                                    <div class align="center">
                                        <p class="card-text text-white">Jus Alpukat+Topping Chocolate</p>
                                    </div>
                                </div>
                                <div class="card-footer d-md-flex">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">
                                        Beli
                                    </button>
                                    <span
                                        class="ms-auto text danger fw-bold d-block text-white text-center harga">15.000,00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card bg-secondary">
                                <img src="https://i.ytimg.com/vi/-TpnCZ-fVq0/maxresdefault.jpg" class="card-img-top">
                                <div class="card-body">
                                    <div class align="center">
                                        <p class="card-text text-white">Es Jelly Susu Santan</p>
                                    </div>
                                </div>
                                <div class="card-footer d-md-flex">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">
                                        Beli
                                    </button>
                                    <span
                                        class="ms-auto text danger fw-bold d-block text-white text-center harga">7.500,00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card bg-secondary">
                                <img src="https://simplyhomecooked.com/wp-content/uploads/2023/04/Brown-sugar-boba-6.jpg"
                                    class="card-img-top">
                                <div class="card-body">
                                    <div class align="center">
                                        <p class="card-text text-white">Brown Sugar Boba</p>
                                    </div>
                                </div>
                                <div class="card-footer d-md-flex">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">
                                        Beli
                                    </button>
                                    <span
                                        class="ms-auto text danger fw-bold d-block text-white text-center harga">27.000,00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- makanan --}}

@endsection

@section('script')
    <script>
        var now = new Date();
        var hrs = now.getHours();
        var msg = "";

        if (hrs > 6) msg = "Selamat Pagi, "; // After 6am
        if (hrs > 12) msg = "Selamat Siang, "; // After 12pm
        if (hrs > 17) msg = "Selamat Sore, "; // After 5pm
        if (hrs > 22) msg = "Selamat Malam, "; // After 5pm

        document.getElementById('greet').innerHTML = msg;
    </script>
@endsection
