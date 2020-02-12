@extends('layouts.main')

@section('content')
<main>
    <section>
        <div class="jumbo j-faq">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="jumbotron">
                            <h1>Domande frequenti</h1>
                            <p>Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando? <a href="#">Contattaci</a> e saremo felici di darti una mano.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 bool-faqs before">
                    <h2>Prima del corso</h2>
                    <ul>
                        <li>Chi può fare il corso Boolean?<i class="fas fa-plus float-right"></i></li>
                        <li>Che competenze devo avere per iniziare il corso?<i class="fas fa-plus float-right"></i></li>
                        <li>In cosa consiste il processo di selezione?<i class="fas fa-plus float-right"></i></li>
                        <li>Posso seguire il corso mentre lavoro o studio?<i class="fas fa-plus float-right"></i></li>
                        <li>Di cosa ho bisogno per seguire il corso?<i class="fas fa-plus float-right"></i></li>
                        <li>Questo corso è una valida alternativa alla laurea?<i class="fas fa-plus float-right"></i></li>
                        <li>Quanto costa il corso?<i class="fas fa-plus float-right"></i></li>
                    </ul>
                </div>
                <div class="col-lg-6 bool-faqs after">
                    <h2>Dopo il corso</h2>
                    <ul>
                        <li>Ho la certezza di essere assunto?<i class="fas fa-plus float-right"></i></li>
                        <li>Terminato il corso, sono supportato nella ricerca del lavoro?<i class="fas fa-plus float-right"></i></li>
                        <li>Quanti dei vostri ex allievi hanno ricevuto offerte di lavoro?<i class="fas fa-plus float-right"></i></li>
                        <li>Posso fare lo sviluppatore freelance al termine del corso?<i class="fas fa-plus float-right"></i></li>
                        <li>Troverò un lavoro nella mia città?<i class="fas fa-plus float-right"></i></li>
                        <li>Questo corso è una valida alternativa alla laurea?<i class="fas fa-plus float-right"></i></li>
                        <li>Che tipo di attestato rilasciate?<i class="fas fa-plus float-right"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
