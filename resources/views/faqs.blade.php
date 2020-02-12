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
                    @foreach ($faq_list_bef as $faqs)
                        <h3>{{ $faqs['domanda'] }}<i class="fas fa-plus float-right active"></i><i class="fas fa-minus float-right"></i>
                        </h3>
                        <p>{{ $faqs['risposta'] }}</p>
                    @endforeach
                </div>
                <div class="col-lg-6 bool-faqs after">
                    <h2>Dopo il corso</h2>
                    @foreach ($faq_list_aft as $faqs)
                        <h3>{{ $faqs['domanda'] }}<i class="fas fa-plus float-right active"></i><i class="fas fa-minus float-right"></i>
                        </h3>
                        <p>{{ $faqs['risposta'] }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
