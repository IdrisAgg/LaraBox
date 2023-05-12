@extends('layout.app')
@section('title')
créer resto
@endsection

@section('content')
<div class="">

<?php
foreach($selection as $select)
{
?>
<p><?= $select->name ?> <a href="suppSelection/{{$select->id}}" class="btn btn-primary">Supp</a></p>

<?php
}
?>
</div>
@endsection
