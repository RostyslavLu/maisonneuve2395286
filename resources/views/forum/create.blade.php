@extends('layouts.layout')
@section('content')

<main class="container col-xl-10 col-xxl-8 px-4 py-5 flex-fill">
    <form method="post">
        @csrf
        <div class="row">
            @if($errors->has('titre'))
            <span class="alert alert-danger">
                {{ $errors->first('titre') }}
            </span>
            @endif
            @if($errors->has('message'))
            <span class="alert alert-danger">
                {{ $errors->first('message') }}
            </span>
            @endif
            @if($errors->has('titre_en'))
            <span class="alert alert-danger">
                {{ $errors->first('titre_en') }}
            </span>
            @endif
            @if($errors->has('message_en'))
            <span class="alert alert-danger">
                {{ $errors->first('message_en') }}
            </span>
            @endif

            <div class="col">
                <div class="mb-3">
                    <label for="titre" class="form-label">Titre</label>
                    <input type="text" class="form-control" name="titre" id="titre" placeholder="Titre">
                  </div>
                  <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" name="message" id="message" rows="3" placeholder="Votre message"></textarea>
                  </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="titre" class="form-label">Title</label>
                    <input type="text" class="form-control" name="titre_en" id="titre" placeholder="Titre">
                  </div>
                  <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" name="message_en" id="message" rows="3" placeholder="Your message"></textarea>
                  </div>
            </div>
        </div>
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="category_id">
                @foreach ($categories as $categorie)
                    <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                @endforeach
              </select>
        </div>
        <div class="mb-3">
            <input type="submit" value="Sauvegarder" class="btn btn-success">
        </div>
    </form>
</main>

@endsection