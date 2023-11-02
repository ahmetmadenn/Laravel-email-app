@extends('master')
@section('title')
Toplu Mail Tanımlama - Toplu Mail Uygulaması
@endsection
@section('css')

@endsection
@section('main')
	<!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Yeni Müşteri</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('index')  }}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Yeni Mail Oluştur</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->
            @if ($errors->any())
               @foreach ( $errors->all() as $hatalar )
                   <div class="alert alert-danger">{{ $hatalar }}</div>
                       {{ $hatalar }}
               @endforeach
            @endif
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>

            @endif
            <form action="{{ route('mail-olustur-post') }}" method="post">
                @csrf
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-0 text-uppercase">Yeni Mail Oluştur</h6>
                                <hr/>
                            <input class="form-control form-control-lg mb-3" type="text" name="baslik" placeholder="Müşteri Adı / Firma Adı" aria-label=".form-control-lg example">
							<textarea id="mytextarea" name="metin"></textarea>
                            <select class="form-control form-control-lg mb-3" name="tema" aria-label=".form-control-lg example">
                            <option value="1">Şablon 1</option>
                            <option value="2">Şablon 2</option>
                            <option value="3">Şablon 3</option>
                            </select>

                            <input class="btn btn-success mb-3" type="submit" name="ilet"value="YENİ MAİL OLUŞTUR" aria-label=".form-control-lg example">

                        </div>


                </div>
            </div>
        </form>
            <!--end row-->
        </div>
    </div>
    <!--end page wrapper -->

@endsection
@section('js')
<script src='https://cdn.tiny.cloud/1/vdqx2klew412up5bcbpwivg1th6nrh3murc6maz8bukgos4v/tinymce/5/tinymce.min.js' referrerpolicy="origin">
</script>
<script>
    tinymce.init({
      selector: '#mytextarea'
    });
</script>

@endsection
