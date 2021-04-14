@include('include.debut')

@if ($errors->any())
    <div>
        <strong>ALERTE!</strong> Erreur lors de la mise à jour.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<table class='styled-table' width='60%' cellspacing='0' cellpadding='0' align='center'>
  <thead>
    <td>Mettez à jour l'établissement</td>
  </thead>
  <tbody>
    <td>
    <form action="{{route('equipe.update',$equipe->id)}}" method="post">
      @csrf
      @method('PUT')
      <strong>Nom:</strong>
      <input type="text" name="nomEquipe" placeholder="Nom" value="{{ $equipe->nomEquipe }}"><br>
      <strong>Responsable:</strong>
      <input type="text" name="responsableEquipe" placeholder="Responsable" value="{{ $equipe->responsableEquipe }}"><br>
      <strong>Nombre de membres:</strong>
      <input type="number" name="nombreMembreEquipe" placeholder="Nombre de membres" value="{{ $equipe->nombreMembreEquipe }}"><br>
      <strong>Pays:</strong>
      <input type="text" name="paysEquipe" placeholder="Pays" value="{{ $equipe->paysEquipe }}"><br>
      <br>
      <button type="submit">Envoyer</button>
    </form>
  </td>
  </tbody>
</table>

@include('include.fin')
