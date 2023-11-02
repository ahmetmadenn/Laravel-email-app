@extends('master')
@section('title')
Toplu Mail Uygulaması
@endsection
@section('css')

@endsection
@section('main')


<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">

      <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
        <div class="col">
                <div class="card radius-10 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0">Toplam Siparişler</p>
                                <h5 class="mb-0">900</h5>
                            </div>
                            <div class="ms-auto">	<i class='bx bx-cart font-30'></i>
                            </div>
                        </div>
                    </div>
                    <div class="" id="chart1"></div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0">Toplam Gelir</p>
                                <h5 class="mb-0">₺52,945</h5>
                            </div>
                            <div class="ms-auto">	<i class='bx bx-wallet font-30'></i>
                            </div>
                        </div>
                    </div>
                    <div class="" id="chart2"></div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0">Toplam Kullanıcı Sayısı</p>
                                <h5 class="mb-0">50.5K</h5>
                            </div>
                            <div class="ms-auto">	<i class='bx bx-group font-30'></i>
                            </div>
                        </div>
                    </div>
                    <div class="" id="chart3"></div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0">Yorumlar</p>
                                <h5 class="mb-0">600</h5>
                            </div>
                            <div class="ms-auto">	<i class='bx bx-chat font-30'></i>
                            </div>
                        </div>
                    </div>
                    <div class="" id="chart4"></div>
                </div>
            </div>
      </div><!--end row-->


      <div class="row">
        <div class="col-12 col-xl-8 d-flex">
          <div class="card radius-10 w-100">
                <div class="card-body">
                    <div class="" id="chart5"></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4 d-flex">
          <div class="card radius-10 w-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-1">Satış Hedefi</h5>
                            </div>
                            <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
                            </div>
                        </div>
                    <div class="mt-4" id="chart6"></div>
                    <div class="d-flex align-items-center">
                            <div>
                                <h2 class="mb-0">2248</h2>
                                <p class="mb-0">/2,800 hedef</p>
                            </div>
                            <div class="ms-auto d-flex align-items-center border radius-10 px-2">
                              <i class='bx bxs-checkbox font-22 me-1 text-primary'></i><span>Pazarlama Satışları</span>
                            </div>
                      </div>
                </div>
            </div>
        </div>
      </div><!--end row-->


      <div class="row row-cols-1 row-cols-xl-2">
        <div class="col d-flex">
            <div class="card radius-10 w-100">
                <div class="card-body">
                    <div class="" id="chart7"></div>
                </div>
            </div>
        </div>
        <div class="col d-flex">
            <div class="card radius-10 w-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="mb-1">Satış Raporu</h5>
                        </div>
                        <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
                        </div>
                    </div>
                    <div class="" id="chart8"></div>
                </div>
            </div>
        </div>
      </div><!--end row-->

      <div class="row">
        <div class="col-12 col-xl-4 col-xxl-3 d-flex">
            <div class="card radius-10 w-100 overflow-hidden">
                <div class="card-body">
                    <p class="mb-1">Genel Satış Performansı</p>
                    <div class="">
                        <h2 class="mb-0">₺84,126.5</h2>
                        <p class="mb-0 text-success">+2.5% vs geçen ay </p>
                    </div>
                </div>
                <div class="" id="chart9"></div>
            </div>
        </div>
        <div class="col-12 col-xl-8 col-xxl-9 d-flex">
            <div class="card w-100 radius-10">
                <div class="row g-0">
                  <div class="col-md-4 border-end">
                    <div class="card-body">
                      <h5 class="card-title">En İyi Satış Lokasyonları</h5>
                      <h2 class="mt-4 mb-1">25.860 <i class="flag-icon flag-icon-us rounded"></i></h2>
                      <p class="mb-0 text-secondary">ABD'deki En Çok Müşterilerimiz</p>
                    </div>
                    <ul class="list-group mt-4 list-group-flush">
                        <li class="list-group-item d-flex align-items-center">
                          <i class='bx bxs-circle me-1 text-success'></i>
                          <span>Cüsseli</span>
                          <strong class="ms-auto">18.4k</strong>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                          <i class='bx bxs-circle me-1 text-danger'></i>
                          <span>Büyük</span>
                          <strong class="ms-auto">6.9k</strong>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                          <i class='bx bxs-circle me-1 text-primary'></i>
                          <span>Orta</span>
                          <strong class="ms-auto">5.4k</strong>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                          <i class='bx bxs-circle me-1 text-warning'></i>
                          <span>Küçük</span>
                          <strong class="ms-auto">875</strong>
                        </li>
                    </ul>
                  </div>
                  <div class="col-md-8">
                      <div class="p-3">
                        <div class="" id="geographic-map"></div>
                      </div>
                  </div>
                </div>
              </div>
        </div>
      </div><!--end row-->

       <div class="row">
         <div class="col-12 col-xl-4 d-flex">
            <div class="card radius-10 w-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="mb-0">Yeni Müşteriler</h5>
                        </div>
                        <div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
                        </div>
                    </div>
                </div>
                <div class="customers-list p-3 mb-3">
                    <div class="customers-list-item d-flex align-items-center border-top border-bottom p-2 cursor-pointer">
                        <div class="">
                            <img src="assets/images/avatars/avatar-1.png" class="rounded-circle" width="46" height="46" alt="" />
                        </div>
                        <div class="ms-2">
                            <h6 class="mb-1 font-14">Emy Jackson</h6>
                            <p class="mb-0 font-13 text-secondary">emy_jac@xyz.com</p>
                        </div>
                        <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
                            <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone' ></i></a>
                            <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
                        </div>
                    </div>
                    <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                        <div class="">
                            <img src="assets/images/avatars/avatar-2.png" class="rounded-circle" width="46" height="46" alt="" />
                        </div>
                        <div class="ms-2">
                            <h6 class="mb-1 font-14">Martin Hughes</h6>
                            <p class="mb-0 font-13 text-secondary">martin.hug@xyz.com</p>
                        </div>
                        <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
                            <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone' ></i></a>
                            <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
                        </div>
                    </div>
                    <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                        <div class="">
                            <img src="assets/images/avatars/avatar-3.png" class="rounded-circle" width="46" height="46" alt="" />
                        </div>
                        <div class="ms-2">
                            <h6 class="mb-1 font-14">Laura Madison</h6>
                            <p class="mb-0 font-13 text-secondary">laura_01@xyz.com</p>
                        </div>
                        <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
                            <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone' ></i></a>
                            <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
                        </div>
                    </div>
                    <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                        <div class="">
                            <img src="assets/images/avatars/avatar-4.png" class="rounded-circle" width="46" height="46" alt="" />
                        </div>
                        <div class="ms-2">
                            <h6 class="mb-1 font-14">Shoan Stephen</h6>
                            <p class="mb-0 font-13 text-secondary">s.stephen@xyz.com</p>
                        </div>
                        <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
                            <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone' ></i></a>
                            <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
                        </div>
                    </div>
                    <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                        <div class="">
                            <img src="assets/images/avatars/avatar-5.png" class="rounded-circle" width="46" height="46" alt="" />
                        </div>
                        <div class="ms-2">
                            <h6 class="mb-1 font-14">Keate Medona</h6>
                            <p class="mb-0 font-13 text-secondary">Keate@xyz.com</p>
                        </div>
                        <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
                            <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone' ></i></a>
                            <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
                        </div>
                    </div>
                    <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                        <div class="">
                            <img src="assets/images/avatars/avatar-6.png" class="rounded-circle" width="46" height="46" alt="" />
                        </div>
                        <div class="ms-2">
                            <h6 class="mb-1 font-14">Paul Benn</h6>
                            <p class="mb-0 font-13 text-secondary">pauly.b@xyz.com</p>
                        </div>
                        <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
                            <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone' ></i></a>
                            <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
                        </div>
                    </div>
                    <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                        <div class="">
                            <img src="assets/images/avatars/avatar-7.png" class="rounded-circle" width="46" height="46" alt="" />
                        </div>
                        <div class="ms-2">
                            <h6 class="mb-1 font-14">Winslet Maya</h6>
                            <p class="mb-0 font-13 text-secondary">winslet_02@xyz.com</p>
                        </div>
                        <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
                            <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone' ></i></a>
                            <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
                        </div>
                    </div>
                    <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                        <div class="">
                            <img src="assets/images/avatars/avatar-8.png" class="rounded-circle" width="46" height="46" alt="" />
                        </div>
                        <div class="ms-2">
                            <h6 class="mb-1 font-14">Bruno Bernard</h6>
                            <p class="mb-0 font-13 text-secondary">bruno.b@xyz.com</p>
                        </div>
                        <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
                            <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone' ></i></a>
                            <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
                        </div>
                    </div>
                    <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                        <div class="">
                            <img src="assets/images/avatars/avatar-9.png" class="rounded-circle" width="46" height="46" alt="" />
                        </div>
                        <div class="ms-2">
                            <h6 class="mb-1 font-14">Merlyn Dona</h6>
                            <p class="mb-0 font-13 text-secondary">merlyn.d@xyz.com</p>
                        </div>
                        <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
                            <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone' ></i></a>
                            <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
                        </div>
                    </div>
                    <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                        <div class="">
                            <img src="assets/images/avatars/avatar-10.png" class="rounded-circle" width="46" height="46" alt="" />
                        </div>
                        <div class="ms-2">
                            <h6 class="mb-1 font-14">Alister Campel</h6>
                            <p class="mb-0 font-13 text-secondary">alister_42@xyz.com</p>
                        </div>
                        <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
                            <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone' ></i></a>
                            <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
                        </div>
                    </div>
                </div>
            </div>
         </div>
         <div class="col-12 col-xl-4 d-flex">
            <div class="card radius-10 w-100 overflow-hidden">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="mb-0">Mağaza Metrikleri</h5>
                        </div>
                        <div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
                        </div>
                    </div>
                </div>

                <div class="store-metrics p-3 mb-3">

                    <div class="card mt-3 radius-10 border shadow-none">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Toplam Ürünler</p>
                                    <h4 class="mb-0">856</h4>
                                </div>
                                <div class="widgets-icons bg-light-primary text-primary ms-auto"><i class='bx bxs-shopping-bag' ></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card radius-10 border shadow-none">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Toplam Müşteri</p>
                                    <h4 class="mb-0">45,241</h4>
                                </div>
                                <div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bxs-group' ></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card radius-10 border shadow-none">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Toplam Kategori</p>
                                    <h4 class="mb-0">98</h4>
                                </div>
                                <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-category' ></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card radius-10 border shadow-none">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Toplam Siparişler</p>
                                    <h4 class="mb-0">124</h4>
                                </div>
                                <div class="widgets-icons bg-light-info text-info ms-auto"><i class='bx bxs-cart-add' ></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card radius-10 border shadow-none mb-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Toplam Satıcılar</p>
                                    <h4 class="mb-0">55</h4>
                                </div>
                                <div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bxs-user-account' ></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>

         <div class="col-12 col-xl-4 d-flex">
            <div class="card radius-10 w-100 ">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="mb-1">En Popüler Ürünler</h5>
                        </div>
                        <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
                        </div>
                    </div>
                </div>

                <div class="product-list p-3 mb-3">

                     <div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
                        <div class="product-img me-2">
                             <img src="assets/images/products/01.png" alt="product img">
                          </div>
                        <div class="">
                            <h6 class="mb-0 font-14">Siyah Destekli Sandalye</h6>
                            <p class="mb-0">148 Satış</p>
                        </div>
                        <div class="ms-auto">
                            <h6 class="mb-0">$246.24</h6>
                        </div>
                      </div>

                      <div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
                        <div class="product-img me-2">
                             <img src="assets/images/products/03.png" alt="product img">
                          </div>
                        <div class="">
                            <h6 class="mb-0 font-14">Kırmızı Tekli Kanepe</h6>
                            <p class="mb-0">122 Satış</p>
                        </div>
                        <div class="ms-auto">
                            <h6 class="mb-0">$328.14</h6>
                        </div>
                      </div>

                      <div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
                        <div class="product-img me-2">
                             <img src="assets/images/products/04.png" alt="product img">
                          </div>
                        <div class="">
                            <h6 class="mb-0 font-14">Pembe Yuvarlak Kanepe</h6>
                            <p class="mb-0">105 Satış</p>
                        </div>
                        <div class="ms-auto">
                            <h6 class="mb-0">$124.35</h6>
                        </div>
                      </div>

                      <div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
                        <div class="product-img me-2">
                             <img src="assets/images/products/05.png" alt="product img">
                          </div>
                        <div class="">
                            <h6 class="mb-0 font-14">Kahverengi Tekli Masa</h6>
                            <p class="mb-0">201 Satış</p>
                        </div>
                        <div class="ms-auto">
                            <h6 class="mb-0">$158.34</h6>
                        </div>
                      </div>

                      <div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
                        <div class="product-img me-2">
                             <img src="assets/images/products/06.png" alt="product img">
                          </div>
                        <div class="">
                            <h6 class="mb-0 font-14">Gri Uzun Sandalye</h6>
                            <p class="mb-0">146 Satış</p>
                        </div>
                        <div class="ms-auto">
                            <h6 class="mb-0">158.24</h6>
                        </div>
                      </div>

                      <div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
                        <div class="product-img me-2">
                             <img src="assets/images/products/07.png" alt="product img">
                          </div>
                        <div class="">
                            <h6 class="mb-0 font-14">Güzel Kanepe</h6>
                            <p class="mb-0">210 Satış</p>
                        </div>
                        <div class="ms-auto">
                            <h6 class="mb-0">$520.24</h6>
                        </div>
                      </div>

                      <div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
                        <div class="product-img me-2">
                             <img src="assets/images/products/08.png" alt="product img">
                          </div>
                        <div class="">
                            <h6 class="mb-0 font-14">Gri Standlı Masa</h6>
                            <p class="mb-0">115 Satış</p>
                        </div>
                        <div class="ms-auto">
                            <h6 class="mb-0">$345.24</h6>
                        </div>
                      </div>

                      <div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
                        <div class="product-img me-2">
                             <img src="assets/images/products/09.png" alt="product img">
                          </div>
                        <div class="">
                            <h6 class="mb-0 font-14">Kahverengi Tek Kişilik Masa</h6>
                            <p class="mb-0">116 Satış</p>
                        </div>
                        <div class="ms-auto">
                            <h6 class="mb-0">$126.24</h6>
                        </div>
                      </div>

                      <div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
                        <div class="product-img me-2">
                             <img src="assets/images/products/10.png" alt="product img">
                          </div>
                        <div class="">
                            <h6 class="mb-0 font-14">Dört Ayaklı Sandalye</h6>
                            <p class="mb-0">154 Satış</p>
                        </div>
                        <div class="ms-auto">
                            <h6 class="mb-0">$425.24</h6>
                        </div>
                      </div>

                      <div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
                        <div class="product-img me-2">
                             <img src="assets/images/products/11.png" alt="product img">
                          </div>
                        <div class="">
                            <h6 class="mb-0 font-14">Mavi Işık Tişört</h6>
                            <p class="mb-0">186 Satış</p>
                        </div>
                        <div class="ms-auto">
                            <h6 class="mb-0">$149.34</h6>
                        </div>
                      </div>

                </div>
            </div>
         </div>
        </div><!--end row-->


        <div class="row">
            <div class="col">
                <div class="card radius-10 mb-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-1">Son Siparişler</h5>
                            </div>
                            <div class="ms-auto">
                                <a href="javscript:;" class="btn btn-primary btn-sm radius-30">View All Products</a>
                            </div>
                        </div>

                       <div class="table-responsive mt-3">
                           <table class="table align-middle mb-0">
                               <thead class="table-light">
                                   <tr>
                                    <th>İzleme Kimliği</th>
                                    <th>Ürün Adı</th>
                                    <th>Tarih</th>
                                    <th>Durum</th>
                                    <th>Fiyat</th>
                                    <th>İşlemler</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr>
                                       <td>#55879</td>
                                       <td>
                                        <div class="d-flex align-items-center">
                                            <div class="recent-product-img">
                                                <img src="assets/images/products/15.png" alt="">
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="mb-1 font-14">Açık Kırmızı Tişört</h6>
                                            </div>
                                        </div>
                                       </td>
                                       <td>22 Haziran 2023</td>
                                       <td class=""><span class="badge bg-light-success text-success w-100">Tamamlanmış</span></td>
                                       <td>#149.25</td>
                                       <td>
                                        <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                            <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                       </td>
                                   </tr>
                                   <tr>
                                    <td>#88379</td>
                                    <td>
                                     <div class="d-flex align-items-center">
                                         <div class="recent-product-img">
                                             <img src="assets/images/products/16.png" alt="">
                                         </div>
                                         <div class="ms-2">
                                             <h6 class="mb-1 font-14">Gri Kulaklık/h6>
                                         </div>
                                     </div>
                                    </td>
                                    <td>22 Haziran, 2023</td>
                                    <td class=""><span class="badge bg-light-danger text-danger w-100">Tamamlanmamış</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                            <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#68823</td>
                                    <td>
                                     <div class="d-flex align-items-center">
                                         <div class="recent-product-img">
                                             <img src="assets/images/products/19.png" alt="">
                                         </div>
                                         <div class="ms-2">
                                             <h6 class="mb-1 font-14">Gri Kol Saati</h6>
                                         </div>
                                     </div>
                                    </td>
                                    <td>22 Haziran 2023</td>
                                    <td class=""><span class="badge bg-light-warning text-warning w-100">Askıda olması</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                            <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#54869</td>
                                    <td>
                                     <div class="d-flex align-items-center">
                                         <div class="recent-product-img">
                                             <img src="assets/images/products/07.png" alt="">
                                         </div>
                                         <div class="ms-2">
                                             <h6 class="mb-1 font-14">Kahverengi Kanepe</h6>
                                         </div>
                                     </div>
                                    </td>
                                    <td>22 Haziran 2023</td>
                                    <td class=""><span class="badge bg-light-success text-success w-100">Tamamlanmış</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                            <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#22536</td>
                                    <td>
                                     <div class="d-flex align-items-center">
                                         <div class="recent-product-img">
                                             <img src="assets/images/products/17.png" alt="">
                                         </div>
                                         <div class="ms-2">
                                             <h6 class="mb-1 font-14">Siyah iPhone 14 Pro Max</h6>
                                         </div>
                                     </div>
                                    </td>
                                    <td>22 Haziran 2023</td>
                                    <td class=""><span class="badge bg-light-success text-success w-100">Tamamlanmış</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                            <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#25796</td>
                                    <td>
                                     <div class="d-flex align-items-center">
                                         <div class="recent-product-img">
                                             <img src="assets/images/products/14.png" alt="">
                                         </div>
                                         <div class="ms-2">
                                             <h6 class="mb-1 font-14">Erkek Yeşil Tişört</h6>
                                         </div>
                                     </div>
                                    </td>
                                    <td>22 Haziran 2023</td>
                                    <td class=""><span class="badge bg-light-warning text-warning w-100">Askıda olması</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                            <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#98754</td>
                                    <td>
                                     <div class="d-flex align-items-center">
                                         <div class="recent-product-img">
                                             <img src="assets/images/products/08.png" alt="">
                                         </div>
                                         <div class="ms-2">
                                             <h6 class="mb-1 font-14">Gri Standlı Masa</h6>
                                         </div>
                                     </div>
                                    </td>
                                    <td>22 Haziran 2023</td>
                                    <td class=""><span class="badge bg-light-danger text-danger w-100">Tamamlanmamış</span></td>
                                    <td>#149.25</td>
                                    <td>
                                        <div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                            <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                               </tbody>
                           </table>
                       </div>

                    </div>
                </div>
            </div>
        </div><!--end row-->

    </div>
</div>
<!--end page wrapper -->
@endsection
@section('js')


@endsection
