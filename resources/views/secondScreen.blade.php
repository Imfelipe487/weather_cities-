@extends('welcome')

@section('contenido')

<section class="section">
    <div class="show-weather">
        <h1>Clima de {{ $clima['name'] }}</h1>
        <img src="http://openweathermap.org/img/wn/{{ $clima['icon'] }}@2x.png" alt="Icono del clima">
        <p class="temp">{{ $clima['temp_celsius'] }}°C</p>
        <p>{{$clima['clima']}}</p>
        <div class="tasa">
            <label for="">tasa de cambio: </label><p>{{$precio['rate']}}</p>
        </div>
        <div class="conversion">
            <p>{{$precio['precio']}}</p><p>{{$precio['moneda']}}</p>
            <button class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#redirectModal">COMPRAR</button>
        </div>

        <div class="modal fade" id="redirectModal" tabindex="-1" aria-labelledby="redirectModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="redirectModalLabel" style="color: black">Redirigiendo...</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="color: black">
                        Haz click para elegir más ciudades.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    var redirectModal = new bootstrap.Modal(document.getElementById('redirectModal'));
    document.querySelector('.btn-secondary').addEventListener('click', function () {
            redirectModal.show();
            setTimeout(function () {    
                window.location.href = "{{ route('index') }}";
            }, 2000); 
        });
    }); 
</script>

@stop