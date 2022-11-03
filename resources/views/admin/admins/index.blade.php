@extends('layouts.admin')

@section('admins')
active
@endsection

@section('title')
Administrateurs
@endsection

@section('content')
<!-- End Navbar -->
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Les administrateurs</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nom & prénom(s)</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                           Rôle</th>
                                    <th class="text-secondary opacity-7"></th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($admins as $admin)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                @if($admin->profil != null) 
                                                    <img src="{{ asset('storage/' . $admin->profil) }}" class="avatar avatar-sm me-3" alt="user1">
                                                @else
                                                    <img src="admin/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                                                @endif
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $admin->prenom }} {{ $admin->nom }}</h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    {{ $admin->email }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $admin->role }}</p>
                                    </td>
                                    <td class="align-middle">
                                        @if($admin->role == "user")
                                        <a href="{{ route('admin.role', $admin->id) }}" class="btn btn-secondary text-light font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                            Nommer rédacteur
                                        </a>
                                        @elseif($admin->role == "redacteur")
                                        <a href="{{ route('admin.role', $admin->id) }}" class="btn btn-secondary text-light font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                            Nommer administrateur
                                        </a>
                                        @else
                                            <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                Est déjà administrateur
                                            </a>
                                        @endif
                                    </td>
                                    <td class="">
                                        @if($admin->active == true)
                                            <a href="{{ route('admin.activate', $admin->id) }}" class="btn btn-tertiary text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                Désactiver
                                            </a>
                                        @else
                                            <a href="{{ route('admin.activate', $admin->id) }}" class="btn btn-tertiary text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                Activer
                                            </a>
                                        @endif

                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4">Aucun admin pour le moment</td>
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
