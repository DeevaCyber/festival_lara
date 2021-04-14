@include('include.debut')

<table class='styled-table' width='60%' cellspacing='0' cellpadding='0' align='center'>
  <thead>
    <td>Informations sur l'établissement</td>
  </thead>
  <tbody>
  <td>
      <strong>Nom:</strong> {{$equipe->nomEquipe}}
      <br>
      <strong>Responsable:</strong> {{$equipe->responsableEquipe}}
      <br>
      <strong>Nombre de membres:</strong> {{$equipe->nombreMembreEquipe}}
      <br>
      <strong>Pays:</strong> {{$equipe->paysEquipe}}
      <br>
  </td>
  </tbody>
</table>

@include('include.fin')
