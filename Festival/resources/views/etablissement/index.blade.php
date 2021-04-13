@include('include.debut')
<div>
      <a href="{{ route('etablissement.create') }}">Création d'un nouveau établissement</a>
</div>

<table class='styled-table' width='60%' cellspacing='0' cellpadding='0' align='center'>
        <tr>
            <th>Nom établissement</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ $value->nomEtab }}</td>
            <td>
                <form action="{{ route('etablissement.destroy',$value->id) }}" method="POST">
                    <a href="{{ route('etablissement.show',$value->id) }}"><img src="{{asset('images/voir.png')}}" width="50" height="50"/></a>
                    <a href="{{ route('etablissement.edit',$value->id) }}"><img src="{{asset('images/modifier.png')}}"width="50" height="50"/></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><img src="{{asset('images/supprimer.png')}}" width="50" height="50"/></button>
                </form>

            </td>
        </tr>
        @endforeach
</table>
{!! $data->links() !!}

@include('include.fin')
