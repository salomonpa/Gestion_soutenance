@extends('layouts.mainlayout')
@section('content')
<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">

           <div class="text-center">
            <p>LISTE DES SOUTENANCES</p>
        </div>
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">Numero</th>
                  <th scope="col">Date</th>
                  <th scope="col">Heure</th>
                  <th scope="col">Statut</th>
                  <th scope="col">Jury</th>
                  <th scope="col">Salles</th>
                  <th scope="col">Demande</th>
                  <th scope="col">Utilisateur</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Brandon Jacob</td>
                  <td>Designer</td>
                  <td>28</td>
                  <td>2016-05-25</td>
                  <td>Gestion des ressources humaines</td>
                  <td>2016-05-25</td>
                  <td>2016-05-25</td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Bridie Kessler</td>
                  <td>Developer</td>
                  <td>35</td>
                  <td>2014-12-05</td>
                  <td>Informatique</td>
                  <td>Informatique</td>
                  <td>Informatique</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Ashleigh Langosh</td>
                  <td>Finance</td>
                  <td>45</td>
                  <td>2011-08-12</td>
                  <td>Communication Marketing</td>
                  <td>Communication Marketing</td>
                  <td>Audit-transport</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Angus Grady</td>
                  <td>HR</td>
                  <td>34</td>
                  <td>2012-06-11</td>
                  <td>Informatique</td>
                  <td>Informatique</td>
                  <td>Informatique</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Raheem Lehner</td>
                  <td>Dynamic Division Officer</td>
                  <td>47</td>
                  <td>2011-04-19</td>
                  <td>Audit-transport</td>
                  <td>Audit-transport</td>
                  <td>Audit-transport</td>
                  
                </tr>
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

@endsection