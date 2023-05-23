@extends('layout.app')
@section('title')
créer resto
@endsection

@section('content')
<form action="{{route('plat.store')}}" method="POST">
                @csrf

                <div class="d-flex justify-content-center">
                    <div class="card w-50 text-center">
                        <h5 class="card-header bg-dark text-white">Plat</h5>
                        <div class="card-body">
                        <div class=" ">
                            <label class="form-label mx-2" for=""><strong><u>Gras du bouillon</u></strong></label>
                        </div>

                        <div class="d-flex justify-content-center form-check">
                            <input class="form-check-input mx-2" type="radio" value="Peu" name="gras" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Peu
                            </label>
                            <input class="form-check-input mx-2" type="radio" value="Moyen" name="gras" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Moyen
                            </label>
                            <input class="form-check-input mx-2" type="radio" value="Beaucoup" name="gras" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault3">
                                Beaucoup
                            </label>
                        </div>

                            <hr class=" mt-5"> 

                        <div class="d-flex justify-content-center mt-4">
                            <label class="form-label mx-2" for=""><strong><u>Force du piment</u></strong></label>
                        </div>
                        
                        <div class="d-flex justify-content-center form-check">
                            <input class="form-check-input mx-2" type="radio" value="Faible" name="lvlPiment" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Faible
                            </label>
                            <input class="form-check-input mx-2" type="radio" value="Moyen" name="lvlPiment" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Moyen
                            </label>
                            <input class="form-check-input mx-2" type="radio" value="Fort" name="lvlPiment" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault3">
                                Fort
                            </label>
                            <input class="form-check-input mx-2" type="radio" value="Très fort" name="lvlPiment" id="flexRadioDefault4">
                            <label class="form-check-label" for="flexRadioDefault4">
                                Très fort
                        </div>

                        <div class="d-flex justify-content-center mt-2">
                            <button type="submit" class="btn btn-primary px-4 mt-2">Ajouter</button>
                        </div>                
                        </div>
                    </div>
                </div>

                

                
            </form>
@endsection

