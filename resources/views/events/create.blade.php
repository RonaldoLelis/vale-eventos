@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie o seu evento</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
            </div>
            <div class="form-group">
                <label for="date">Data do Evento:</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="form-group">
                <label for="title">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
            </div>
            <div class="form-group">
                <label for="title">O evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Descrição:</label>
                <textarea name="description" id="description" class="form-control"
                    placeholder="O que vai acontecer no evento?"></textarea>
            </div>
            <div class="form-row">
                <label for="title"><strong>Adicione itens de infraestrutura:</strong></label>
            </div>
            <div class="form-row">
                <div class="col-md-3 mb-3">

                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Palco"> Palco
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Estacionamento"> Estacionamento
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Cerveja grátis"> Cerveja Grátis
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Open Food"> Open Food
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Brindes"> Brindes
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Vagas de Emprego"> Vagas de Emprego
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Recrutadores"> Recrutadores
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Sorteios"> Sorteios
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3 offset-md-3">
                        <label for="image">Imagem do Evento:</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>
                    <div class="col-md-3 offset-md-3">
                        <input type="submit" class="btn btn-primary" value="Criar Evento">
                    </div>
                </div>
            </div>

        </form>
    </div>

@endsection
