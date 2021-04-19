@include('include.debut')

<table class='styled-table' width='60%' cellspacing='0' cellpadding='0' align='center'>
  <thead>
    <td>Informations sur l'attribution n°{{$attribution -> id}}</td>
  </thead>
  <tbody>
  <td>
    @foreach($etab as $etabs)
      <strong>Nom de l'établissement:</strong> {{$etabs -> nomEtab}}
      <br>
    @endforeach

    @foreach($equipe as $equipes)
      <strong>Nom de l'équipe:</strong> {{$equipes -> nomEquipe}}
      <br>
    @endforeach
  </td>
  </tbody>
</table>

@include('include.fin')
