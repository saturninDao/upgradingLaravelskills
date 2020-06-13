
<html>  
  <head>  
    <title>Messagerie</title>  
  </head>  
  <body>  
  
    <h1>Messagerie</h1>  
  
    <h2>Liste des messages</h2>  
  
    @if (!count($messages))  
      <p>Aucun message pour l’instant.</p>  
    @else  
      <table>  
      <thead>  
        <tr>  
          <th>Date</th>  
          <th>Auteur</th>  
          <th>Texte</th>  
        </tr>  
      </thead>  
      <tbody>  
  
      @foreach($messages as $message)  
        <tr>  
          <td>{{ $message->created_at->toDateTimeString() }}</td> 
          <td>{{ $message->author_name }}</td>  
          <td>{{ $message->content }}</td>  
        </tr>  
      @endforeach  
  
      <tbody>  
    </table>  
  @endif  
  
  <h2>Poster un nouveau message</h2>  

    @if ($errors->any())  
    <div class="alert alert-danger">  
      <strong>  
        Oups. Nous n’avons pas pu enregistrer votre  
        demande pour la raison suivante :  
      </strong>  
      <ul class="list-unstyled">  
        @foreach ($errors->all() as $error)  
          <li>{{ $error }}</li>  
        @endforeach  
      </ul>  
    </div>  
  @endif  
  
  <form method="post">  
    {{ csrf_field() }}  
  
    <label for="author_name">Pseudo : </label>  
    <input name="author_name" id="author_name" type="text">  
    <br>  
  
    <label for="content">Message : </label>  
    <textarea name="content" id="content"></textarea>  
    <br>  
  
    <input type="submit" value="Envoyer le message">  
  
  </form>  
</body>  
  
</html>