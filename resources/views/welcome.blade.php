@extends('layouts.app')

@section('content')
    
    <div class="container" style="height: 100vh; padding-top: 20%;">

        <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xs-8">
                <h2>Laravel Multiple Auth & Bootstrap 4 Beta</h2>
                <hr class="bg-white">
                <h5>Present by</h5>
                <p>Darkterminal, Trojan302, fscodexxx from Betta Dev Indonesia</p>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xs-4">
                <h4><i class="fa fa-wifi"></i> User Status</h4>
                @component('components.who')
                @endcomponent
            </div>
        </div>

    </div>

@endsection