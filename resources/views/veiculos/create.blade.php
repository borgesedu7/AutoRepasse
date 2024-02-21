<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Veiculo</title>
</head>
<body>
    <h1>Cadastro de Veículo</h1>

    <form action="{{url("store")}}" method="post">

        @csrf

        {{-- Veiculo --}}
        <label>Veiculo:</label>
        <input type="text" name="veiculo">

        {{-- Ano/Modelo --}}
        <label>Ano/Modelo:</label>
        <input type="text" name="ano_modelo">

        {{-- Placa --}}
        <label>Placa:</label>
        <input type="text" name="placa">

        {{-- Renavam --}}
        <label>Renavam:</label>
        <input type="text" name="renavam">

        {{-- Cor --}}
        <label>Cor:</label>
        <input type="text" name="cor">

        {{-- Chassi --}}
        <label>Chassi:</label>
        <input type="text" name="chassi">

        {{-- Codigo de Segurança CRV --}}
        <label>Codigo Seg. CRV:</label>
        <input type="text" name="cod_seg_crv">

        {{-- Codigo de Segurança CLA --}}
        <label>Codigo Seg. CLA:</label>
        <input type="text" name="cod_seg_cla">

        {{-- CRV --}}
        <label>CRV:</label>
        <input type="text" name="crv">

        {{-- ATPVE --}}
        <label>ATPVE:</label>
        <input type="text" name="atpve">

        <button>Adicionar Veículo</button>

    </form>

    <a href="{{url('index')}}">Voltar</a>
</body>
</html>