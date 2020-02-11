@extends('layouts.main')

@section('content')
<main>
    <section>
        <div id="jumbo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="jumbotron">
                            <h1 class="text-uppercase">Diventa <strong>sviluppatore web</strong></h1>
                            <p class="lead font-weight-bold">Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</p>
                            <ul>
                                <li><strong>6 mesi</strong> di corso intensivo online in diretta</li>
                                <li><strong>Nessuna competenza</strong> di programmazione richiesta</li>
                                <li>Siamo certi del tuo successo, altrimenti <strong>ti rimborsiamo</strong></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="jumbotron">
                            <div id="bool-img">
                                <img src="https://www.boolean.careers/images/homepage/pc-black-gif.gif" alt="boolean img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="percentuali">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <h2>98%</h2>
                        <p>La percentuale dei nostri studenti che ora lavora come web developer, oltre la metà a tempo indeterminato.</p>
                    </div>
                    <div class="col-lg-4">
                        <h2>€ 23.000</h2>
                        <p>Lo stipendio medio lordo di partenza degli studenti assunti dalle nostre aziende partner.</p>
                    </div>
                    <div class="col-lg-4">
                        <h2>#1</h2>
                        <p>Siamo il primo istituto online in Italia per indice di gradimento e risultati conseguiti.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
