@include('include.debut')

<table class='styled-table' width='60%' cellspacing='0' cellpadding='0' align='center'>
  <thead>
    <td>Informations sur l'attribution</td>
  </thead>
  <tbody>
  <td>
      <strong>Nom de l'établissement:</strong> {{$etab}}
      <br>
      <strong>Nom de l'équipe:</strong> {{$equipe}}
      <br>
  </td>
  </tbody>
</table>

@include('include.fin')
