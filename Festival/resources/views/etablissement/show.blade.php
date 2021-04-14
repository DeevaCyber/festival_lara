@include('include.debut')

<table class='styled-table' width='60%' cellspacing='0' cellpadding='0' align='center'>
  <thead>
    <td>Informations sur l'établissement</td>
  </thead>
  <tbody>
  <td>
      <strong>Nom:</strong> {{$etablissement->nomEtab}}
      <br>
      <strong>Adresse:</strong> {{$etablissement->adrueEtab}}
      <br>
      <strong>Code postal:</strong> {{$etablissement->cpEtab}}
      <br>
      <strong>Ville:</strong> {{$etablissement->villeEtab}}
      <br>
      <strong>Téléphone:</strong> {{$etablissement->telEtab}}
      <br>
      <strong>Courriel:</strong> {{$etablissement->mailEtab}}
      <br>
      <strong>Nom du responsable:</strong> {{$etablissement->nomResponsable}}
      <br>
      <strong>Prénom du responsable:</strong> {{$etablissement->prenomResponsable}}
      <br>
      <strong>Nombre de chambres:</strong> {{$etablissement->nbChambresOffertes}}
  </td>
  </tbody>
</table>

@include('include.fin')
