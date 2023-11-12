<div class="section-top-border">
<h3 class="mb-30">Liste des livres</h3>
<div class="progress-table-wrap">
<div class="progress-table">
<div class="table-head">
<div class="country">Livre</div>
<div class="visit">Auteur</div>
<div class="visit">Prix</div>
<div class="percentage">Actions</div>
</div>
@foreach ($books as $book)
<div class="table-row">
<div class="country"> <img src="{{$book->cover}}" style="width:
8.5vw;" alt="cover">{{$book->designation}}</div>
<div class="visit">{{$book->auteur}}</div>
<div class="visit">{{$book->prix}}</div>
<div class="percentage">
<div class="progress" style="height: 5vh;">
<a href="book/{{$book->id}}/edit" class="genric-btn
primary circle arrow">Modifier<span class="lnr lnr-arrow-right"></span></a>
<form action="{{ route('book.destroy', $book->id) }}"
method="POST">
@csrf
@method('delete')
<input type="submit" value="Supprimer"
class="genric-btn danger circle arrow">
</form>
</div>
</div>
</div>
@endforeach
</div>
</div>
</div>
