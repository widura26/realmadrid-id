@extends('_layouts.app')

@section('content')
    <section class="py-5">
        <div class="container" style="border-radius: 20px;">
            <div class="row my-5">
                <div class="col-md-6 mt-md-0 mt-4">
                    <p>Selamat! Kamu telah menjadi member Heker Indonesia <br>Berikut member card-mu :</p>
                    <div class="card">
                        <div class="card-header d-flex justify-content-start">
                            <p class="member mb-0 ms-3 d-flex align-item-center" style="letter-spacing: 1px; font-family: 'Hacked'; font-size: 25px">
                                MEMBER CARD
                            </p>
                        </div>
                        <div class="card-body">
                            <h2><b>{{ $User->name }}</b></h2>
                            <p class="text-secondary mb-0">{{ $User->email }}</p>
                            <hr class="text-secondary">
                            <small class="text-seconadry mb-0">Bergabung sejak <b>{{ $User->created_at }}</b></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection