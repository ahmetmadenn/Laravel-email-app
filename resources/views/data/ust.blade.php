<!--start header wrapper-->
<div class="header-wrapper">
    <!--start header -->
    <header>
        <div class="topbar d-flex align-items-center">
            <nav class="navbar navbar-expand">
                <div class="topbar-logo-header">
                    <div class="">
                        <img src="{{ asset('/') }}assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                    </div>
                    <div class="">
                        <h4 class="logo-text">E-Mail Gönder</h4>
                    </div>
                </div>
                <div class="mobile-toggle-menu"><i class='bx bx-menu'></i></div>
                <div class="top-menu-left d-none d-lg-block ps-3">

                 </div>
                <div class="search-bar flex-grow-1">
                    <div class="position-relative search-bar-box">
                        <input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
                        <span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
                    </div>
                </div>
                <div class="top-menu ms-auto">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item mobile-search-icon">
                            <a class="nav-link" href="#">	<i class='bx bx-search'></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">	<i class='bx bx-category'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <div class="row row-cols-3 g-3 p-3">
                                    <div class="col text-center">
                                        <div class="app-box mx-auto bg-gradient-cosmic text-white"><i class='bx bx-group'></i>
                                        </div>
                                        <div class="app-title">Takımlar</div>
                                    </div>
                                    <div class="col text-center">
                                        <div class="app-box mx-auto bg-gradient-burning text-white"><i class='bx bx-atom'></i>
                                        </div>
                                        <div class="app-title">Projeler</div>
                                    </div>
                                    <div class="col text-center">
                                        <div class="app-box mx-auto bg-gradient-lush text-white"><i class='bx bx-shield'></i>
                                        </div>
                                        <div class="app-title">Görevler</div>
                                    </div>
                                    <div class="col text-center">
                                        <div class="app-box mx-auto bg-gradient-kyoto text-dark"><i class='bx bx-notification'></i>
                                        </div>
                                        <div class="app-title">Akışlar</div>
                                    </div>
                                    <div class="col text-center">
                                        <div class="app-box mx-auto bg-gradient-blues text-dark"><i class='bx bx-file'></i>
                                        </div>
                                        <div class="app-title">Dosyalar</div>
                                    </div>
                                    <div class="col text-center">
                                        <div class="app-box mx-auto bg-gradient-moonlit text-white"><i class='bx bx-filter-alt'></i>
                                        </div>
                                        <div class="app-title">Uyarılar</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">7</span>
                                <i class='bx bx-bell'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:;">
                                    <div class="msg-header">
                                        <p class="msg-header-title">Bildirimler</p>
                                        <p class="msg-header-clear ms-auto">Tümünü okundu olarak işaretler</p>
                                    </div>
                                </a>
                                <div class="header-notifications-list">
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Yeni Müşteriler<span class="msg-time float-end">14 Saniye
                                            Önce</span></h6>
                                                <p class="msg-info">5 yeni kullanıcı kaydoldu</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-danger text-danger"><i class="bx bx-cart-alt"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Yeni Siparişler <span class="msg-time float-end">2 dakika
                                            önce</span></h6>
                                                <p class="msg-info">Yeni siparişler aldınız</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-success text-success"><i class="bx bx-file"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">24 PDF Dosyası<span class="msg-time float-end">19 dakika
                                            önce</span></h6>
                                                <p class="msg-info">Oluşturulan PDF Dosyaları</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-warning text-warning"><i class="bx bx-send"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Zaman Tepkisi <span class="msg-time float-end">28 dakika
                                            önce</span></h6>
                                                <p class="msg-info">5,1 dakikalık ortalama yanıt süresi</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-info text-info"><i class="bx bx-home-circle"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Yeni Ürün Onaylandı<span
                                            class="msg-time float-end">2 saat  önce</span></h6>
                                                <p class="msg-info">Yeni ürününüz onaylandı</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-danger text-danger"><i class="bx bx-message-detail"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Yeni Yorumlar <span class="msg-time float-end">4 saat
                                             önce</span></h6>
                                                <p class="msg-info">Yeni müşteri yorumları alındı</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-success text-success"><i class='bx bx-check-square'></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Ürününüz gönderildi <span class="msg-time float-end">5 saat
                                             önce</span></h6>
                                                <p class="msg-info">Öğeniz başarıyla gönderildi</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-primary text-primary"><i class='bx bx-user-pin'></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Yeni 24 yazar<span class="msg-time float-end">1 gün
                                             önce</span></h6>
                                                <p class="msg-info">Geçen hafta 24 yeni yazar katıldı</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-warning text-warning"><i class='bx bx-door-open'></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Savunma Uyarıları <span class="msg-time float-end">2 hafta
                                             önce</span></h6>
                                                <p class="msg-info">4 hafta boyunca %45 daha az uyarı</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a href="javascript:;">
                                    <div class="text-center msg-footer">Tüm Bildirimleri Görüntüle</div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
                                <i class='bx bx-comment'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:;">
                                    <div class="msg-header">
                                        <p class="msg-header-title">Mesajlar</p>
                                        <p class="msg-header-clear ms-auto">Tümünü okundu olarak işaretler</p>
                                    </div>
                                </a>
                                <div class="header-message-list">
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Daisy Anderson <span class="msg-time float-end">5 saniye
                                             önce</span></h6>
                                                <p class="msg-info">Loremin standart parçası</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="assets/images/avatars/avatar-2.png" class="msg-avatar" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Ahmet Maden <span class="msg-time float-end">14
                                            saniye  önce</span></h6>
                                                <p class="msg-info">Birçok masaüstü yayıncılık paketi</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="assets/images/avatars/avatar-3.png" class="msg-avatar" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Oscar Garner <span class="msg-time float-end">8 dakika önce</span></h6>
                                                <p class="msg-info">Çeşitli versiyonlar geliştirildi</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="assets/images/avatars/avatar-4.png" class="msg-avatar" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Katherine Pechon <span class="msg-time float-end">15
                                            dakika  önce</span></h6>
                                                <p class="msg-info">Bunu ilk gerçek jeneratör yapıyoruz</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="assets/images/avatars/avatar-5.png" class="msg-avatar" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Amelia Doe <span class="msg-time float-end">22 dakika
                                             önce</span></h6>
                                                <p class="msg-info">Duis veya Irure azarlamada acı çekiyor</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="assets/images/avatars/avatar-6.png" class="msg-avatar" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Cristina Jhons <span class="msg-time float-end">2 saat
                                             önce</span></h6>
                                                <p class="msg-info">Pasaj bilinmeyen bir kişiye atfediliyor</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="assets/images/avatars/avatar-7.png" class="msg-avatar" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">James Caviness <span class="msg-time float-end">4 saat
                                             önce</span></h6>
                                                <p class="msg-info">Lorem kullanmanın amacı</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="assets/images/avatars/avatar-8.png" class="msg-avatar" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Peter Costanzo <span class="msg-time float-end">6 saat
                                             önce</span></h6>
                                                <p class="msg-info">1960'lı yıllarda popüler hale geldi</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="assets/images/avatars/avatar-9.png" class="msg-avatar" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">David Buckley <span class="msg-time float-end">2 saat
                                             önce</span></h6>
                                                <p class="msg-info">Çeşitli versiyonlar geliştirildi</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="assets/images/avatars/avatar-10.png" class="msg-avatar" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Thomas Wheeler <span class="msg-time float-end">2 gün
                                             önce</span></h6>
                                                <p class="msg-info">Bir geçit kullanacaksanız</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="assets/images/avatars/avatar-11.png" class="msg-avatar" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Johnny Seitz <span class="msg-time float-end">5 gün
                                             önce</span></h6>
                                                <p class="msg-info">Tüm Lorem Ipsum oluşturucuları</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a href="javascript:;">
                                    <div class="text-center msg-footer">Tüm Mesajları Görüntüle</div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="user-box dropdown">
                    <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar">
                        <div class="user-info ps-3">
                            <p class="user-name mb-0">Ahmet Maden</p>
                            <p class="designattion mb-0">Software Developer</p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profil</span></a>
                        </li>
                        <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>Ayarlar</span></a>
                        </li>
                        <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-home-circle'></i><span>Gösterge Paneli</span></a>
                        </li>
                        <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-dollar-circle'></i><span>Kazanç</span></a>
                        </li>
                        <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-download'></i><span>İndirilenler</span></a>
                        </li>
                        <li>
                            <div class="dropdown-divider mb-0"></div>
                        </li>
                        <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-log-out-circle'></i><span>Çıkış Yap</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--end header -->
    <!--navigation-->
    <div class="nav-container">
        <div class="mobile-topbar-header">
            <div>
                <img src="{{ asset('/') }}assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
            </div>
            <div>
                <h4 class="logo-text">E-mail Gönder</h4>
            </div>
            <div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
            </div>
        </div>
        <nav class="topbar-nav">
            <ul class="metismenu" id="menu">
                <li>
                    <a href="{{ route('index') }}" >

                        <div class="menu-title">Anasayfa</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bx bx-category"></i>
                        </div>
                        <div class="menu-title">Müşteriler</div>
                    </a>
                    <ul>
                        <li> <a href="{{ route('musteri-liste') }}"><i class="bx bx-right-arrow-alt"></i>Müşteri Listesi</a>
                        </li>
                        <li> <a href="{{ route('musteri-ekle') }}"><i class="bx bx-right-arrow-alt"></i>Yeni Müşteri</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                        </div>
                        <div class="menu-title">Mail Yönetimi</div>
                    </a>
                    <ul>
                        <li> <a href="{{ route('toplu-mail-olusturma') }}"><i class="bx bx-right-arrow-alt"></i>Toplu Mail Oluşturma</a>
                        </li>
                        <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Mail Oluşturma</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <div class="menu-title">API Bilgileri</div>
                    </a>
                </li>


            </ul>
        </nav>
    </div>
    <!--end navigation-->
   </div>
   <!--end header wrapper-->
