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
    <form action="{{route('etablissement.update',$etablissement->id)}}" method="post">
      @csrf
      @method('PUT')
      <strong>Nom:</strong>
      <input type="text" name="nomEtab" placeholder="Nom" value="{{ $etablissement->nomEtab }}"><br>
      <strong>Adresse:</strong>
      <input type="text" name="adrueEtab" placeholder="Adresse" value="{{ $etablissement->adrueEtab }}"><br>
      <strong>Code postal:</strong>
      <input type="tel" name="cpEtab" placeholder="Code postal" value="{{ $etablissement->cpEtab }}"><br>
      <strong>Ville:</strong>
      <input type="text" name="villeEtab" placeholder="Ville" value="{{ $etablissement->villeEtab }}"><br>
      <strong>Téléphone:</strong>
      <input type="tel" name="telEtab" placeholder="Téléphone" value="{{ $etablissement->telEtab }}"><br>
      <strong>Courriel:</strong>
      <input type="text" name="mailEtab" placeholder="Courriel" value="{{ $etablissement->mailEtab }}"><br>
      <strong>Nom du responsable:</strong>
      <input type="text" name="nomResponsable" placeholder="Nom du responsable" value="{{ $etablissement->nomResponsable }}"><br>
      <strong>Prénom du responsable:</strong>
      <input type="text" name="prenomResponsable" placeholder="Prenom du responsable" value="{{ $etablissement->prenomResponsable }}"><br>
      <strong>Nombre de chambres:</strong>
      <input type="number" name="nbChambresOffertes" placeholder="Nombre de chambres" value="{{ $etablissement->nbChambresOffertes }}"><br>
      <br>
      <button type="submit">Envoyer</button>
    </form>
  </td>
  </tbody>
</table>

@include('include.fin')
