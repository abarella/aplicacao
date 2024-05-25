@extends('adminlte::page')
@section('title', 'Projeto 1')
@section('content_header')
    <h5 class="m-0 text-blue">BETO2</h5>
    <input type="datetime-local" class='form-control' id='v1' name='v1'>

    <div class="icheck-primary">
        <input type="checkbox" id="checkbox1">
        <label for="checkbox1">
            Checkbox Label
        </label>
    </div>

    {{-- <div class="info-box bg-gradient-warning">
        <span class="info-box-icon"><i class="far fa-copy"></i></span>
        <div class="info-box-content">
            <span class="info-box-text">Uploads</span>
            <span class="info-box-number">13,648</span>
        </div>
    </div> --}}
@stop

@push('js')
    <script>
        function salvar() {
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "Seu trabalho foi salvo",
                showConfirmButton: false,
                timer: 1500
            });
        }



        function salvar1(tipo, mensagem) {
            var Toast = Swal.mixin({
                toast: true,
                position: 'center',
                showConfirmButton: false,
                timer: 3000
            });
            Toast.fire({
                icon: tipo,
                animation: true,
                title: mensagem + '  ' + tipo,
                text : "corpo da mensagem",
			          heading: 'Custom styles',
			          bgColor: '#2ecc71',
		            textColor: '#fff',
            })
        }


    </script>
@endpush


@section('content')

    <input type='button' onclick='salvar()' value='salvar Swal' /></button>
    <button type="button" class="btn btn-success swalDefaultSuccess"></button>
    <button type="button" class="btn btn-danger swalDefaultError"></button>
    <button type="button" class='btn btn-default' onclick="salvar1('success','mensagem')"  value='teste'>teste</button>

        @stop
