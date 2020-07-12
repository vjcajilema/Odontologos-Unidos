@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row justify-content-center">
        <div class=" col ">
          <div class="card">
            <div class="card-header bg-transparent">
              <h3 class="mb-0">Odontologos</h3>
            </div>
            <div class="card-body">
              <div class="row icon-examples">
                  
                  <div class="table-responsive">
			        <table class="table table-striped table-sm">
			          <thead>
			            <tr>
			              <th>#</th>
			              <th>nombres</th>
						  <th>apellidos</th>
                          <th>cédula</th>
                          <th>correo</th>
                          <th>estado</th>

			            </tr>
			          </thead>
					 
			    		  <tbody>
                  @forelse($odontologos as $key => $od)
                    <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $od->nombres }}</td>
                      <td>{{ $od->apellidos }}</td>
                    <td> {{$od->cedula}}</td>
                    <td> {{$od->email}}</td>
                    <td> {{$od->estado}}</td>
                    <td>
                        <a >
                          <i class="fas fa-eye"></i>
                          Ver
                        </a>

                      </td>



                    </tr>
                  @empty
                    <tr>
                      <td colspan="7">No hay sliders registrados</td>
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
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
        <div class="copyright text-center text-xl-left text-muted">
            &copy; {{ now()->year }} <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a> &amp;
            <a href="https://www.updivision.com" class="font-weight-bold ml-1" target="_blank">Updivision</a>
        </div>
          </div>
        </div>
      </footer>
    </div>
  </div>

  @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('vendor/chart.js/dist/Chart.extension.js') }}"></script>
@endpush