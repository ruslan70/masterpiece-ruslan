@extends ('layouts/master')

@section('aboutme')
    <div class="postDetailsBox">
        <img src="{{ asset('img/logo-name.png') }}" class="img-fluid rounded mx-auto d-block m-2" alt="Responsive image">

        <h2 class="title_header"><strong> About me </strong></h2>
        <h3 class="wir"><strong><i><ins>Ruslan</ins></i></strong></h3>
        <p class="pMain">Ich bin ein Mensch, der grosse Ideen hat.<br>
            Ich will gemeinsam mit meinen LeserenInnen
            Gedanken in erstklassige digitale Lösungen verwandeln.
        </p>
        <h3 class="wir_1"><strong>Meine Trainers und MitarbeiterInnen beschreiben mich als : </strong></h3>
        <div class="container-fluid mt-4">
            <div class="row">

                <div class="col p-3"><ins>1. SELBSTBEWUSST</ins>
                    Ich trete als selbstbewusste und seriöse Experte auf, um meinen Kunden Rückhalt zu geben.</div>

                <div class="col p-3"><ins>2. WERTSCHÄTZEND </ins><br>
                    <p class="tex">Ich wertschätze die Geschäftsbeziehungen zu meiner Kunden, weil mein Erfolg davon
                        abhängt.
                </div>

                <div class="col p-3">
                    <ins>3. INTELLIGENT </ins><br>Ich bin  in der Lage komplexe Probleme zu verstehen und die richtigen
                    Lösungen zu finden.
                </div>
                <h2 class="title-Wichtig"><strong> Das ist mir wichtig </strong></h2>
                <div class="row">
                    <div class="col-sm-4 p-3  text-white"><i class='fas fa-angle-double-right'
                            style='font-size:48px;color:red'></i></div>
                    <div class="col-sm-8 p-3 text-white"><strong> ICH LERNE KONTINUIERLICH</strong> <br>
                        Über Geschäftsmodelle, Daten, Technologien und Methoden. Ich teile mein Wissen und erkenne meine Fehler,
                        so dass ich  daraus lerne.</div>
                    <div class="col-sm-4 p-3  text-white"><i class='fas fa-angle-double-right'
                            style='font-size:48px;color:red'></i></div>
                    <div class="col-sm-8 p-3 text-white"><strong>WIR SIND MACHER</strong><br>
                        Ich löse Probleme und rede nicht nur davon.</div>
                    <div class="col-sm-4 p-3  text-white"><i class='fas fa-angle-double-right'
                            style='font-size:48px;color:red'></i></div>
                    <div class="col-sm-8 p-3 text-white"><strong>ICH BIN FOKUSSIERT</strong><br>
                        Ich konzentriere mich auf das Wichtige und bringe meien Projekte somit zum Erfolg.</div>
                    <h2 class="title-Wichtig"><strong>Meine Technologien</strong></h2>
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