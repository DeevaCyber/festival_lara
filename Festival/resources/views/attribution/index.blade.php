@include('include.debut')
<div>
      <a href="{{ route('attribution.create') }}">Création d'une nouvelle attribution</a>
</div>

<table class='styled-table' width='60%' cellspacing='0' cellpadding='0' align='center'>
        <thead>
            <th>Attribution n°</th>
            <th width="280px">Action</th>
        </thead>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>
                <form action="{{ route('attribution.destroy',$value->id) }}" method="POST">
                    <a href="{{ route('attribution.show',$value->id) }}"><img src="{{asset('images/voir.png')}}" width="50" height="50"/></a>
                    <a href="{{ route('attribution.edit',$value->id) }}"><img src="{{asset('images/modifier.png')}}"width="50" height="50"/></a>
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
