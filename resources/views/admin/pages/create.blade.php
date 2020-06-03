@php
$categories = [
    [
        'id' => 1,
        'name'=>'lorem'
    ],
    [
        'id' => 2,
        'name'=>'ipsum'
    ],
    [
        'id' => 3,
        'name'=>'dolor'
    ],
    [
        'id' => 4,
        'name'=>'sit'
    ],
    [
        'id' => 5,
        'name'=>'AMEN'
    ]
];
$tags = [
    [
        'id' => 1,
        'name'=>'Tag 1'
    ],
    [
        'id' => 2,
        'name'=>'Tag 2'
    ],
    [
        'id' => 3,
        'name'=>'Tag 3'
    ],
    [
        'id' => 4,
        'name'=>'Tag 4'
    ],
    [
        'id' => 5,
        'name'=>'Tag 5'
    ]
];
$photos = [
    [
        'id' => 1,
        'title'=>'Lorem',
        'path'=> 'images/nomefoto.jpg'
    ],
    [
        'id' => 2,
        'title'=>'Ipsim',
        'path'=> 'images/nomefoto.jpg'
    ],
    [
        'id' => 3,
        'title'=>'Eccetera',
        'path'=> 'images/nomefoto.jpg'
    ],
    [
        'id' => 4,
        'title'=>'prova',
        'path'=> 'images/nomefoto.jpg'
    ],
    [
        'id' => 5,
        'title'=>'check',
        'path'=> 'images/nomefoto.jpg'
    ]
];
@endphp
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="{{route('admin.pages.index')}}">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <h2>Inserisci una nuova pagina</h2>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form class="" method="post">
                                @csrf
                                @method('post')
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="inserisci un Titolo">
                                    @error ('title')
                                    <small class="form-text text">Errore</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="summary">Summary</label>
                                    <input type="text" class="form-control" id="summary" placeholder="inserisci il sommario">
                                    @error ('summary')
                                    <small class="form-text text">Errore</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select name="category" class="custom-select" id="category">
                                        @foreach ($categories as $category)
                                            <option value="{{$category['id']}}">{{$category['name']}}</option>
                                        @endforeach
                                    </select>
                                    @error ('category')
                                    <small class="form-text text">Errore</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="body">Body</label>
                                    <textarea class="form-control" name="body" id="body"  rows="10"></textarea>
                                    @error ('body')
                                        <small class="form-text text">Errore</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <fieldset>
                                        <legend>Tags</legend>
                                    @foreach ($tags as $tag)
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="tags[]" id="tag{{$tag['id']}}" value="{{$tag['id']}}">
                                            <label class="form-check-label" for='tag1'>{{$tag['name']}}</label>
                                        </div>
                                    @endforeach
                                    @error ('tags')
                                        <small class="form-text text">Errore</small>
                                    @enderror
                                    </fieldset>
                                </div>
                                <div class="form-group">
                                    <fieldset>
                                        <legend>Photos</legend>
                                    @foreach ($photos as $photo)
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="photos[]" id="photo{{$photo['id']}}" value="{{$photo['id']}}">
                                            <label class="form-check-label" for='photo{{$photo['id']}}'>{{$photo['title']}} <img src="{{$photo['path']}}" alt=""> </label>
                                        </div>
                                    @endforeach
                                    @error ('photos')
                                        <small class="form-text text">Errore</small>
                                    @enderror
                                    </fieldset>
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" value="Salva">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
