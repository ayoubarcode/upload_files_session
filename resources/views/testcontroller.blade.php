<form action="{{ url('controller') }}" method="POST">
@csrf

NOM : <input type="text" name="nom" id="">
PRENOM : <input type="text" name="prenom" id="">
<button type="submit">envoyer</button>

@isset($nom)
    <b> {{ $nom }} </b>
@endisset

@isset($prenom)
    <b> {{ $prenom}} </b>
@endisset

</form>