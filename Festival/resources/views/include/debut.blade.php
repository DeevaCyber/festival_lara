<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<!-- TITRE ET MENUS -->
<html lang="fr">
<head>
<title>Festival</title>
<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="{{asset('css/app.css')}}" rel="stylesheet">

</head>
<div class="navbar">
  <a href="{{route('home.index')}}">Home</a>
  <a href="{{route('etablissement.index')}}">Liste des établissements</a>
  <a href="{{route('equipe.index')}}">Liste des équipes</a>
  <a href="consultationAttributions.php">Liste des attributions</a>
</div>
<div class="main">
<!--  Tableau contenant le titre et le logo-->
  <table width="100%" cellpadding="0" cellspacing="0">
   <tr>
      <td class="titre" align="center">
      <img src="{{asset('images/Logo.png')}}" alt="Logo du site" id="Logo"/>
      <br>
      <span id="texteNiveau2" class="texteNiveau2">
      H&eacute;bergement des participants</span><br>&nbsp;
      </td>
    </tr>
  </table>
</div>
