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
<p><?= $select->name ?> </p>

<?php
}
?>
</div>
