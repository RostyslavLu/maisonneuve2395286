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
                    <input type="text" class="form-control" name="titre" id="titre" placeholder="Title">
                  </div>
                  <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" name="message" id="message" rows="8" placeholder="Your message"></textarea>
                  </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="titre_fr" class="form-label">Title</label>
                    <input type="text" class="form-control" name="titre_fr" id="titre_fr" placeholder="Titre">
                  </div>
                  <div class="mb-3">
                    <label for="message_fr" class="form-label">Message</label>
                    <textarea class="form-control" name="message_fr" id="message_fr" rows="8" placeholder="Votre message"></textarea>
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
            <input type="submit" value="@lang('lang.forum_btn_add')" class="btn btn-success">
        </div>
    </form>
</main>

@endsection
