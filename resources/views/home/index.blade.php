@extends('layouts.frontend')
@section('icon')
   <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-backpack" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 18v-6a6 6 0 0 1 6 -6h2a6 6 0 0 1 6 6v6a3 3 0 0 1 -3 3h-8a3 3 0 0 1 -3 -3z"></path>   <path d="M10 6v-1a2 2 0 1 1 4 0v1"></path>   <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4"></path>   <path d="M11 10h2"></path></svg>
@endsection
@section('title','Welcome')
@section('master')

<div class="row row-deck row-cards">
    <div class="col-12">
        <div class="row row-cards">
            <div class="col-12">
            <div class="card">
                <div class="card-body rounded">
                <div class="row align-items-center">
                    <input type="hidden" id="lokasi">
                    <div class="webcam-capture">
                    </div>
                    <button id="takeabsen" class="btn btn-primary my-2">
                        <ion-icon name="camera-outline"></ion-icon>
                        Absen Masuk
                </button>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="row row-cards">
            <div class="col-12">
            <div class="card">
                <div class="card-body rounded">
                <div class="row align-items-center">
                  <div id="map"></div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>

<style>
    .webcam-capture,
    .webcam-capture video{
        display: inline-block;
        width: 100% !important;
        margin: auto;
        height: auto !important;
        border-radius: 15px;
    }

    #map{
        height: 180px;
        }
</style>

@endsection

@push('mystyle')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>
@endpush

@push('myscript')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js"></script>
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script>
    var notifikasi_in = document.getElementById('notifikasi_in')
    var notifikasi_out = document.getElementById('notifikasi_out')
    var radius = document.getElementById('radius')
    Webcam.set({
        height:480,
        widht:640,
        image_format:'jpeg',
        jpeg_quality:80,
    });

    Webcam.attach('.webcam-capture');

    var lokasi = document.getElementById('lokasi');
        if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
        }

function successCallback(position){
    lokasi.value = position.coords.latitude +","+ position.coords.longitude;
    var map = L.map('map').setView([position.coords.latitude, position.coords.longitude],18);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {maxZoom: 19, attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'}).addTo(map);

    var marker = L.marker([position.coords.latitude, position.coords.longitude]).addTo(map);
    var circle = L.circle([-1.4510862330048337, 122.37980866211892], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 20000000000000
    }).addTo(map);

}

function errorCallback(){

}

</script>
<script>
$("#takeabsen").click(function(e){
    Webcam.snap(function(uri){
        image = uri;
    });
    var lokasi = $("#lokasi").val();
    $.ajax({
        type: 'POST',
        url: '/presensi',
        data:{
            _token:"{{csrf_token()}}",
            image: image,
            lokasi: lokasi
        },
        cache:false,
        success:function(respond){
            var status = respond.split("|");
            if(status[0] == "success"){
                if(status[2] == 'in'){
                    notifikasi_in.play();
                }else{
                    notifikasi_out.play();
                }
                Swal.fire({
                    title: 'Success',
                    text: status[1],
                    icon: status[0],
                    })
                    setTimeout("location.href='/'", 2000)
            }else{
                if(status[2] == 'radius'){
                    radius.play();
                }
                Swal.fire({
                    title: 'Error !',
                    text: status[1],
                    icon: status[0],
                    })
            }
        }
    });
});

</script>
@endpush