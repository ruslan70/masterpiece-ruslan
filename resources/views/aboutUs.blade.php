@extends ('layouts/master')

@section('aboutus')
    <div class="postDetailsBox">
        <img src="{{ asset('img/nav_logo.png') }}" class="img-fluid rounded mx-auto d-block m-2" alt="Responsive image">

        <h2 class="title_header"><strong> About us </strong></h2>
        <h3 class="wir"><strong><i><ins>Ruslan, Beni, Sven, Nina, Ajoub, Julian</ins></i></strong></h3>
        <p class="pMain">Wir sind die kleine Gruppe von Menschen die grosse Ideen haben.<br>
            Wir wollen gemeinsam unseren
            Gedanken in erstklassige digitale Lösungen verwandeln.
        </p>
        <h3 class="wir_1"><strong>Unsere Teammitglieder beschreiben sich als : </strong></h3>
        <div class="container-fluid mt-4">
            <div class="row">

                <div class="col p-3"><ins>1. SELBSTBEWUSST</ins>
                    Wir treten als selbstbewusste und seriöse Experten auf, um unseren Kunden Rückhalt zu geben.</div>

                <div class="col p-3"><ins>2. WERTSCHÄTZEND </ins><br>
                    <p class="tex">tWir wertschätzen die Geschäftsbeziehungen zu unseren Kunden, weil unser Erfolg davon
                        abhängt.
                </div>

                <div class="col p-3">
                    <ins>3. INTELLIGENT </ins><br>Wir sind in der Lage komplexe Probleme zu verstehen und die richtigen
                    Lösungen zu finden.
                </div>
                <h2 class="title-Wichtig"><strong> Das ist uns wichtig </strong></h2>
                <div class="row">
                    <div class="col-sm-4 p-3  text-white"><i class='fas fa-angle-double-right'
                            style='font-size:48px;color:red'></i></div>
                    <div class="col-sm-8 p-3 text-white"><strong> WIR LERNEN KONTINUIERLICH</strong> <br>
                        Über Geschäftsmodelle, Daten, Technologien und Methoden. Wir teilen unserer Wissen und unsere Fehler
                        im Team, so dass wir gemeinsam lernen.</div>
                    <div class="col-sm-4 p-3  text-white"><i class='fas fa-angle-double-right'
                            style='font-size:48px;color:red'></i></div>
                    <div class="col-sm-8 p-3 text-white"><strong>WIR SIND MACHER</strong><br>
                        Wir lösen Probleme und reden nicht nur davon.</div>
                    <div class="col-sm-4 p-3  text-white"><i class='fas fa-angle-double-right'
                            style='font-size:48px;color:red'></i></div>
                    <div class="col-sm-8 p-3 text-white"><strong>WIR SIND FOKUSSIERT</strong><br>
                        Wir konzentrieren uns auf das Wichtige und bringen unsere Projekte somit zum Erfolg.</div>
                    <h2 class="title-Wichtig"><strong>Unsere Technologien</strong></h2>
                    <div class="row">
                        <div class="col-sm-4"><i class='fab fa-laravel' style='font-size:48px;color:red'></i></div>
                        <div class="col-sm-4"><i class='fab fa-node-js' style='font-size:48px;color:red'></i></div>
                        <div class="col-sm-4"><i class='fab fa-docker' style='font-size:48px;color:red'></i></div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection