@extends('layouts.mainlayout')
@section('content')


@if (session('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif




<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">

           <div class="text-center">
            <p>LISTE DES SALLES</p>
        </div>
            <!-- Table with stripped rows -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">N</th>
                  <th scope="col">Libelle</th>
                
                 
                  
                </tr>
              </thead>
              <tbody>
                <tbody>
                  @foreach ($salle as $sa )
                  <tr>
                    <td>{{ $sa->id }}</td>
                    <td>{{ $sa->libelle }}</td>
                    
                   
                   

                    <td>          
                      <a href="{{ route('salles.show', $sa->id ) }}" class="btn btn-success"><i class="bi bi-eye" title="détails"></i></a>
                      <a href="{{ route('salles.edit', $sa->id ) }}" class="btn btn-info"><i class="bi bi-pencil-square" title="modifier"></i></a>
                      <a href="{{ url('supprimer-salle/'.$sa->id) }}" class="btn btn-danger"> <i class="bi bi-trash"></i></a>                   
                  </td>
                   
            
                  @endforeach
              
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

@endsection