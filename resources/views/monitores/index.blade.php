@extends('main')

@section('content')

<table class="table table-sm table-striped table-hover datatable-monitores">

  <thead>
    <tr>
      <th scope="col">Nº USP</th>
      <th scope="col">Nome</th>
    </tr>
  </thead>

  <tbody>
    @foreach($monitores as $key => $value)
    <tr>
        <td>{{ $key }}</td>
        <td>
          <!-- <img style="width: 80px; float: left;" src="data:image/png;base64, {{-- \Uspdev\Wsfoto::obter($key) --}}" alt="foto"> -->
          {{ $value }}
        </td>
    </tr>
    @endforeach
  </tbody>

</table>

@endsection

@section('javascripts_bottom')
@parent
<script>
    $(document).ready(function() {
        // DataTables
        var table = $('.datatable-monitores').DataTable({
            dom: '<t>'
            , ordering: true
            , order: ['1', 'asc'] /* ordenando por nome asc */
            , language: {
                url: 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json'
            }
            , paging: true
            , lengthChange: true
            , searching: true
            , info: true
            , autoWidth: true
            , lengthMenu: [
                [10, 25, 50, 100, -1]
                , ['10 linhas', '25 linhas', '50 linhas', '100 linhas', 'Mostar todos']
            ]
            , pageLength: -1
            , buttons: [
                'excelHtml5'
                , 'csvHtml5'
            ]
        });
    });
</script>
@endsection