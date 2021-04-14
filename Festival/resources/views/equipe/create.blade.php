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
    <td>Entrez les informations du nouvel établissement</td>
  </thead>
  <tbody>
    <td>
    <form action="{{route('equipe.store')}}" method="post">
      @csrf
      <strong>Nom:</strong>
      <input type="text" name="nomEquipe" placeholder="Nom"><br>
      <strong>Responsable:</strong>
      <input type="text" name="responsableEquipe" placeholder="Responsable"><br>
      <strong>Nombre de membres:</strong>
      <input type="number" name="nombreMembreEquipe" placeholder="Nombre de membres"><br>
      <strong>Pays:</strong>
      <input type="text" name="paysEquipe" placeholder="Pays"><br>
      <button type="submit">Envoyer</button>
    </form>
  </td>
  </tbody>
</table>

@include('include.fin')
