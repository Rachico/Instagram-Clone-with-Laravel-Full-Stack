@extends('layouts.app')

@section('content')


    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2 data-aos="fade-up">Un devis gratuit, une réponse rapide</h2>

            </div>


            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
                <div class="col-xl-9 col-lg-12 mt-4">
                    <form action="/costs" method="post" role="form" class="php-email-form">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input
                                    type="text"
                                    name="name"
                                    class="form-control"
                                    id="name"
                                    placeholder="Votre Nom"
                                    required
                                    value="{{ Auth::user()->name ?? '' }}">
                                @error('name')

                                <strong>{{ $message }}</strong>

                                @enderror
                            </div>
                            <div class="col-md-6 form-group">
                                <input
                                    type="email"
                                    class="form-control"
                                    name="email"
                                    id="email"
                                    placeholder="Votre Email"
                                    required
                                    value="{{ Auth::user()->email ?? ''}}">
                                @error('email')

                                <strong>{{ $message }}</strong>

                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea
                                class="form-control"
                                name="description"
                                id="description"
                                rows="7"
                                required
                                placeholder="Description"></textarea>
                            @error('description')

                            <strong>{{ $message }}</strong>

                            @enderror
                        </div>

                        <div class="text-center">
                            <button class="btn" type="submit">
                                Envoyer
                            </button>

                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section>


@endsection
