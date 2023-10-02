LISTE JURY                                                                                                                                                                                                                                      @extends('layouts.mainlayout')

@section('content')
<div class="text-center">
    <h1>Liste des membres du jury</h1>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">N°</th>
        <th scope="col">Enseignant</th>
        <th scope="col"></th>Directeur de memoire
        <th scope="col">Maitre de stage</th>
        <th scope="col">Président de Jury</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    @foreach ($jury as $jur)
              <tr>
                  <td>{{ $jur->id }}</td>
                  <td>{{ $jur->enseignant->nom  }} {{ $jur->enseignant->prenom }}</td>
                  <td>{{ $jur->directeurmemoire->nom}} {{ $jur->directeurmemoire->prenom}}</td>
                  <td>{{ $jur->maitrestage->nom}} {{ $jur->maitrestage->prenom}}</td>
                  <td>{{ $jur->presidentj->nom}} {{ $jur->presidentj->prenom}}</td>

                  {{-- <img src="{{asset('storage') . '/' . $etud->image}}" class="" alt="..."> --}}
                  <td>
                    <a href="{{ route('jury.edit', $jur->id) }}" class="btn btn-info"><i  class="bi bi-pencil-square" title="modifier"></i></a>
                    <a href="{{ route('jury.destroy', $jur->id ) }}" class="btn btn-danger"><i class="bi bi-trash" title="supprimer"></i></a>
                    <a href="{{ url('jury/' .$ens->id) }}" class="btn btn-danger"> <i class="bi bi-trash"></i></a>                   
                 
                  </td>
              </tr>
          @endforeach
  </table>

@endsection