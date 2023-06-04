@extends('adminlayout.adminlayout')
@section('content')
    <div class="container">
        <p style="font-size:25px">Bienvenue {{Auth::User()->name}} sur votre panel d'administration.Vous pourrez a partir de cette page gerer tout 
            les aspects relatifs à votre restaurant.</p>
            <p style="font-size:25px">Le menu du haut vous renseigne sur vos informations et vous donne la possiblité de vous deconnecter en cliquant sur votre nom</p>
            <p style="font-size:25px">Le menu à votre gauche vous permet d'enregistrer votre restaurant, d'y ajouter des photos, des repas et de gerer les demandes de reservation à l'endroit de votre restaurant.</p>
        
    </div>
    @endsection