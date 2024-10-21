@extends('layouts.template')

@section('content')

<section style="background-image: url('{{ url('assets/img/new/banner5.jpg')}}');background-size: cover; background-repeat: no-repeat;min-width: 100vh;">
    <div class="container-lg">
      

        
    </div>
</section>


<section class="py-5 overflow-hidden" style="padding-bottom: 0px !important">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ url('assets/img/post-thumbnail-1.jpg')}}" alt="post" class="card-img-top" style="border-radius: 20px">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                        <div class="meta-date">
                            <span class="rating">
                                <svg width="18" height="18" class="text-warning">
                                    <use xlink:href="#star-full"></use>
                                </svg>
                                <svg width="18" height="18" class="text-warning">
                                    <use xlink:href="#star-full"></use>
                                </svg>
                                <svg width="18" height="18" class="text-warning">
                                    <use xlink:href="#star-full"></use>
                                </svg>
                                <svg width="18" height="18" class="text-warning">
                                    <use xlink:href=""></use>
                                </svg>
                                <svg width="18" height="18" class="text-warning">
                                    <use xlink:href=""></use>
                                </svg>
                            </span>

                        </div>

                    </div>
                    <div class="post-header">
                        <h3 class="post-title">
                            <a href="{{ url('storedetail') }}" class="text-decoration-none">Toko Badminton Demian Sport</a>
                        </h3>
                        <p><b>Alamat</b> Cilandak Town Square, Cilandak Bar., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12430, Indonesia<br>
                            <b>Telp.</b> <br> 0897-0920-0020
                        </p>
                        <div class="col">
                            <div class="row text-light">
                                <div class="col-auto" style="background-color: #37A667; border-radius: 5px">
                                    <p class="fs-1 fw-bold lh-sm mb-0" style="font-size:4rem!important; padding:10px">5</p>
                                </div>
                                <div class="col" style="color: #377BA6;">
                                    <p class="text-uppercase lh-sm mb-0">Antrian</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</section>
<section id="popular-products" class="products-carousel">
    <div class="container-lg overflow-hidden py-5">
        <div class="row">
            <div class="col-md-12">

                <div class="section-header d-flex justify-content-between my-4">
                    <h2 class="section-title">Daftar Antrian</h2>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kode Booking</th>
                            <th>Jenis Raket</th>
                            <th>Jenis Perbaikan</th>
                            <th>Status</th>
                            <th>Perkiraan Selesai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Andi</td>
                            <td>RBL-161024-001</td>
                            <td>Yonex Astrox 88s </td>
                            <td>Ganti Senar</td>
                            <td><span class="btn btn-success">In Progress</span></td>
                            <td>16-Oct-2024 14:00</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Rama</td>
                            <td>RBL-161024-002</td>
                            <td>Yonex Arcsaber 11</td>
                            <td>Ganti Senar</td>
                            <td><span class="btn btn-secondary">Waiting</span></td>
                            <td>16-Oct-2024 16:00</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Faris</td>
                            <td>RBL-161024-003</td>
                            <td>Yonex Voltric Z Force 2</td>
                            <td>Perbaikan Frame</td>
                            <td><span class="btn btn-secondary">Waiting</span></td>
                            <td>16-Oct-2024 18:00</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Januar</td>
                            <td>RBL-161024-004</td>
                            <td>Pro Ace Vortex 90</td>
                            <td>Ganti Senar</td>
                            <td><span class="btn btn-secondary">Waiting</span></td>
                            <td>16-Oct-2024 20:00</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Rico</td>
                            <td>RBL-161024-005</td>
                            <td>Li Ning Super Series SS</td>
                            <td>Perbaikan Frame</td>
                            <td><span class="btn btn-secondary">Waiting</span></td>
                            <td>17-Oct-2024 10:00</td>
                        </tr>
                    </tbody>
                </table>
                <!-- / products-carousel -->
            </div>
        </div>
    </div>
</section>

<section id="popular-products" class="products-carousel">
    <div class="container-lg overflow-hidden" style="margin-bottom: 3rem!important">
        <div class="row">
            <div class="col-md-12">

                <div class="section-header d-flex justify-content-between my-4">
                    <h2 class="section-title">Daftar Perbaikan</h2>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h6 style="color:#37A667">Data User</h6>
                    <label for="firstName">Nama</label>
                    <input type="text" class="form-control" id="firstName" placeholder="">
                    <label for="lastName">Alamat</label>
                    <input type="text" class="form-control" id="lastName" placeholder="">
                    <label for="lastName">Telepon</label>
                    <input type="text" class="form-control" id="lastName" placeholder="">
                </div>
                <div class="col-md-4 mb-3">
                    <h6 style="color:#37A667">Jenis Perbaikan</h6>
                    <label for="lastName">Nama Raket</label>
                    <input type="text" class="form-control" id="lastName" placeholder="">
                    <label for="lastName">Perbaikan</label>
                    <select class="form-control"> 
                        <option>-- Pilih Perbaikan --</option>
                        <option>Ganti Senar</option>
                        <option>Perbaikan Frame</option>
                   </select>
                   <label for="lastName">Jenis Senar</label>
                   <select class="form-control">
                        <option>-- Pilih Senar --</option>
                        <option>BG 66</option>
                        <option>Lining Boost</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-md-12 ">
                                <!-- Coupon Code Input -->
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Coupon Code" aria-label="Coupon Code">
                                    <div class="input-group-append">
                                        <button class="btn btn-apply" type="button">Apply Code</button>
                                    </div>
                                </div>
                    
                                <!-- Cart Summary Box -->
                                <div class="cart-summary">
                                    <h5>Cart Summary</h5>
                                    <div class="summary-item">
                                        <span>Sub Total</span>
                                        <span>120.000</span>
                                    </div>
                                    <hr>
                                    <div class="summary-item grand-total">
                                        <span>Grand Total</span>
                                        <span>120.000</span>
                                    </div>
                                </div>
                    
                                <!-- Update and Checkout Buttons -->
                                <div class="d-flex justify-content-between mt-4">
                                    <button class="btn btn-outline-danger btn-update">Update Cart</button>
                                    <button class="btn btn-danger">Checkout</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

</section>
@endsection