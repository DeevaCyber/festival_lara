@include('include.debut')

@if ($errors->any())
    <div>
        <strong>ALERTE!</strong> Erreur lors de la création.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<table class='styled-table' width='60%' cellspacing='0' cellpadding='0' align='center'>
  <thead>
    <td>Entrez les informations de la nouvelle attribution </td>
  </thead>
  <tbody>
    <td>
    <form action="{{route('attribution.store')}}" method="post">
      @csrf
      <strong>Etablissement:</strong>
      <select name="etablissements_id">
        @if ($etab->count())
          @foreach($etab as $etabs)
            <option value={{ $etabs->id }}" >{{ $etabs->nomEtab }}</option>
          @endforeach
        @endif
      </select>
      <br>
      <strong>Equipe:</strong>
      <select name="equipes_id">
        @if ($equipe->count())
          @foreach($equipe as $equipes)
            <option value={{ $equipes->id }}">{{ $equipes->nomEquipe }}</option>
          @endforeach
        @endif
      </select>
      <br>
      <button type="submit">Envoyer</button>
    </form>
  </td>
  </tbody>
</table>

@include('include.fin')
