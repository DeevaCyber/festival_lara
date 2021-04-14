@include('include.debut')
<div>
      <a href="{{ route('equipe.create') }}">Création d'une nouvelle équipe</a>
</div>

<table class='styled-table' width='60%' cellspacing='0' cellpadding='0' align='center'>
        <thead>
            <th>Nom équipe</th>
            <th width="280px">Action</th>
        </thead>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ $value->nomEquipe }}</td>
            <td>
                <form action="{{ route('equipe.destroy',$value->id) }}" method="POST">
                    <a href="{{ route('equipe.show',$value->id) }}"><img src="{{asset('images/voir.png')}}" width="50" height="50"/></a>
                    <a href="{{ route('equipe.edit',$value->id) }}"><img src="{{asset('images/modifier.png')}}"width="50" height="50"/></a>
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
