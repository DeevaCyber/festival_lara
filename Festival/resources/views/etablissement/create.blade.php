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
    <form action="{{route('etablissement.store')}}" method="post">
      @csrf
      <strong>Nom:</strong>
      <input type="text" name="nomEtab" placeholder="Nom"><br>
      <strong>Adresse:</strong>
      <input type="text" name="adrueEtab" placeholder="Adresse"><br>
      <strong>Code postal:</strong>
      <input type="tel" name="cpEtab" placeholder="Code postal"><br>
      <strong>Ville:</strong>
      <input type="text" name="villeEtab" placeholder="Ville"><br>
      <strong>Téléphone:</strong>
      <input type="tel" name="telEtab" placeholder="Téléphone"><br>
      <strong>Courriel:</strong>
      <input type="text" name="mailEtab" placeholder="Courriel"><br>
      <strong>Nom du responsable:</strong>
      <input type="text" name="nomResponsable" placeholder="Nom du responsable"><br>
      <strong>Prénom du responsable:</strong>
      <input type="text" name="prenomResponsable" placeholder="Prenom du responsable"><br>
      <strong>Nombre de chambres:</strong>
      <input type="number" name="nbChambresOffertes" placeholder="Nombre de chambres"><br>
      <br>
      <button type="submit">Envoyer</button>
    </form>
  </td>
  </tbody>
</table>

@include('include.fin')
