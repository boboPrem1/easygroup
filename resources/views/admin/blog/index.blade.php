@extends('layouts.admin')

@section('articles')
active
@endsection

@section('title')
Articles
@endsection

@section('content')
<!-- End Navbar -->
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Les articles</h6>
                    <a href="{{ route('article.create') }}"><button class="btn btn-primary">Ajouter</button></a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Auteur</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Titre</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($articles as $article)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                            @if($article->administrateur->profil != null) 
                                                    <img src="{{ asset('storage/' . $article->administrateur->profil) }}" class="avatar avatar-sm me-3" alt="user1">
                                                @else
                                                    <img src="admin/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                                                @endif
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $article->administrateur->prenom }}</h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    {{ $article->administrateur->email }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $article->titre }}</p>
                                    </td>
                                    <td class="align-middle">
                                        <a href="{{ route('article.edit', $article->id) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                            Editer
                                        </a>
                                    </td>
                                    <td class="align-middle">
                                        <form action="{{route('article.deleting', $article->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" style="border: none;" value="Supprimer" />
                                        </form>

                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="2">Aucun article pour le moment</td>
                                </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
