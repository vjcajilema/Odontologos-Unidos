@extends('layouts.app', ['title' => __('Listado Odontologos')])

@section('content')
    @include('layouts.headers.cards')
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row justify-content-center">
        <div class=" col ">
          <div class="card">
            <div class="card-header bg-transparent">
              <h3 class="mb-0">Especialidades</h3>
            </div>
            <div class="mailbox-controls with-border"> 
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#add_especialidad">

                  <i class="fas fa-plus"></i> Nueva Especialidad
                </a>
                @include('admin.especialidad.Modal.add_especialidad')
            </div>

            <div class="card-body">
              <div class="row icon-examples">
                  
                  <div class="table-responsive">
			        <table class="table table-striped table-sm">
			          <thead>
			            <tr>
			              <th>#</th>
			              <th>nombres</th>
						  <th>descripción</th>
                          <th>estado</th>

			            </tr>
			          </thead>
					 
			    		  <tbody>
                  @forelse($especialidades as $key => $ep)
                    <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $ep->nombre }}</td>
                    <td> {{$ep->descripcion}}</td>
                    @if($ep->estado==0)
                      <td> Inactivo</td>
                    @else
                      <td> Inactivo</td>
                    @endif
                    
                    <td>
                        <a href="{{ route('especialidad.edit', $ep['id']) }}">
                          <i  class="fas fa-eye"></i>
                          Ver
                        </a>

                      </td>



                    </tr>
                  @empty
                    <tr>
                      <td colspan="7">No hay especialidades registrados</td>
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