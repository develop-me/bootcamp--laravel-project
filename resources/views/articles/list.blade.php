@extends("app")

@section("content")
    @include("articles/_parts/list", [
        "articles" => $articles,
    ])
@endsection
