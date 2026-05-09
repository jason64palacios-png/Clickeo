@extends('layouts.app')

@section('content')

<style>

    .gallery-title{
        text-align:center;
        font-size:40px;
        font-weight:bold;
        margin-bottom:40px;
    }

    /* GRID AUTOMÁTICO */
    .insta-grid{
        column-count:4;
        column-gap:15px;
    }

    @media(max-width:992px){
        .insta-grid{
            column-count:3;
        }
    }

    @media(max-width:768px){
        .insta-grid{
            column-count:2;
        }
    }

    @media(max-width:500px){
        .insta-grid{
            column-count:1;
        }
    }

    /* TARJETAS */
    .insta-item{
        position:relative;
        margin-bottom:15px;
        overflow:hidden;
        border-radius:18px;
        cursor:pointer;
        break-inside:avoid;
        box-shadow:0 5px 20px rgba(0,0,0,0.15);
        transition:0.3s;
        background:#eee;
    }

    .insta-item img{
        width:100%;
        height:auto;
        display:block;
        transition:0.4s;
    }

    .insta-item:hover img{
        transform:scale(1.05);
    }

    .insta-item:hover{
        transform:translateY(-5px);
    }

    /* OVERLAY */
    .overlay{
        position:absolute;
        inset:0;
        background:rgba(0,0,0,0.2);
        opacity:0;
        transition:0.3s;
    }

    .insta-item:hover .overlay{
        opacity:1;
    }

    /* MODAL */
    .modal-img{
        display:none;
        position:fixed;
        z-index:999;
        left:0;
        top:0;
        width:100%;
        height:100%;
        background:rgba(0,0,0,0.9);
        justify-content:center;
        align-items:center;
    }

    .modal-img img{
        max-width:90%;
        max-height:90%;
        border-radius:15px;
    }

    .close{
        position:absolute;
        top:20px;
        right:35px;
        color:white;
        font-size:45px;
        cursor:pointer;
    }

</style>

<div class="container my-5">

    <h1 class="gallery-title">
        📸 Galería
    </h1>

    <div class="insta-grid">

        @for ($i = 1; $i <= 45; $i++)

            <div class="insta-item"
                 onclick="openModal('{{ asset('Fotografias/' . $i . '.jpg') }}')">

                <img src="{{ asset('Fotografias/' . $i . '.jpg') }}"
                     alt="Foto {{ $i }}">

                <div class="overlay"></div>

            </div>

        @endfor

    </div>

</div>

<!-- MODAL -->
<div class="modal-img" id="imgModal" onclick="closeModal()">

    <span class="close">&times;</span>

    <img id="modalImage">

</div>

<script>

    function openModal(src){

        document.getElementById('imgModal').style.display = 'flex';

        document.getElementById('modalImage').src = src;

    }

    function closeModal(){

        document.getElementById('imgModal').style.display = 'none';

    }

</script>

@endsection
