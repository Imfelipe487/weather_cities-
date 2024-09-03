@extends('welcome')

@section('contenido')

<form action="{{route('information')}}" method="POST">
    @csrf
    <label for="cars">Selecciona la ciudad que quieres visitar</label>
    <select class="form-select" aria-label="Default select example" name="pais" id="cities" onchange="updateHiddenFields()">
        <option selected>Selecciona una ciudad</option>
        @foreach ($var as $item)
            <option value="{{ $item->city }}" data-simbol="{{ $item->simbol }}" data-id="{{ $item->id }}">{{ $item->city }}</option>
        @endforeach
    </select>

    <!-- Campos ocultos que serán actualizados con la selección -->
    <input type="hidden" id="simbolo" name="simbolo">
    <input type="hidden" id="city_id" name="id">

    <div class="input-group mb-3">
        <span class="input-group-text">$</span>
        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="precio">
        <span class="input-group-text">.00</span>
    </div>

    <button class="btn btn-outline-dark">Enviar</button> 

</form>

<script>
    function updateHiddenFields() {
        var select = document.getElementById('cities');
        var simbol = select.options[select.selectedIndex].getAttribute('data-simbol');
        var id = select.options[select.selectedIndex].getAttribute('data-id');

        document.getElementById('simbolo').value = simbol;
        document.getElementById('city_id').value = id;
    }
</script>
</form>



@stop