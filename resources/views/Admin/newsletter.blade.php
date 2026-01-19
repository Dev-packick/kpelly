@extends('layouts.admin')

@section('content')
<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a>ABONNES NEWSLETTER</a></li>
            </ol>
        </div>

        <!-- Formulaire pour envoyer la newsletter -->
        <div class="row">
            <div class="col-12">
                <form action="{{ route('ENVOYERNEWSLETTER') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary mb-3">Envoyer la Newsletter à tous les abonnés</button>
                </form>
            </div>
        </div>

        <!-- row -->
        <div class="row">
            <!-- listes abonnés début -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tous les abonnés</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead style="background:#d2d1d1">
                                    <tr>
                                        <th><strong>E-MAILS</strong></th>
                                        <th><strong>DATE D'INSCRIPTION</strong></th>
                                        <th><strong>ACTION</strong></th>
                                    </tr>
                                </thead>
                                <tbody style="background:#fbfbfb">
                                    @forelse ($newsletter as $newsletter)
                                    <tr>
                                        <td><a href="javascript:void(0);">{{$newsletter->email}}</a></td>
                                        <td>{{ $newsletter->created_at->translatedFormat('d F Y')}}</td>
                                        <td>
                                            <div class="d-flex">
                                                <!-- Opens the user's email client -->
                                                <a href="mailto:{{ $newsletter->email }}" class="btn btn-success shadow btn-xs sharp me-1">
                                                    <i class="fas fa-message"></i>
                                                </a>

                                                <div class="remove">
                                                    <button class="btn btn-sm btn-danger btn-xs sharp" onclick="confirmDelete('{{ $newsletter->id }}')">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    <form id="form-{{ $newsletter->id }}" action="{{ route('DELETENEWSLETTER', $newsletter->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="3" class="text-center">Aucun Abonné Newsletter.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- listes abonnés fin -->
        </div>
    </div>
</div>
<!--**********************************
    Content body end
***********************************-->
@endsection

@section('scripts')
<script>
    function confirmDelete(NewsletterId) {
        Swal.fire({
            title: 'Êtes-vous sûr?',
            text: 'Cette action est irréversible!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Oui, supprimer!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Si l'utilisateur confirme, soumettre le formulaire de suppression
                document.getElementById('form-' + NewsletterId).submit();
            }
        });
    }
</script>

@if(Session::has('success'))
<script>
    toastr.success("{{ Session::get('success') }}", "Succès", {
        positionClass: "toast-top-right",
        closeButton: true,
        progressBar: true,
        timeOut: 5000,
        extendedTimeOut: 2000,
        tapToDismiss: false, // Optionnel : empêche la fermeture en cliquant sur la notification
    });
</script>
@endif
@endsection
