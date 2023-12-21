@extends('layouts.main')

@section('title', 'Editar Evento ' . $event->title)

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Editando o seu evento: {{ $event->title }} </h1>
        <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" value="{{ $event->title }}">
            </div>
            <div class="form-group">
                <label for="date">Data do Evento:</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ $event->date->format('Y-m-d') }}">
            </div>
            <div class="form-group">
                <label for="title">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento" value="{{ $event->city }}">
            </div>
            <div class="form-group">
                <label for="title">O evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1" {{ $event->private == 1 ? "selected='selected'" : "" }}>Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Descrição:</label>
                <textarea name="description" id="description" class="form-control"
                    placeholder="O que vai acontecer no evento?"> {{ $event->description }} </textarea>
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
                        <img src="/img/events/{{ $event->image}}" alt="{{ $event->title }}" class="img-preview">
                    </div>
                    <div class="col-md-3 offset-md-3">
                        <input type="submit" class="btn btn-primary" value="Editar Evento">
                    </div>
                </div>
            </div>

        </form>
    </div>

@endsection
