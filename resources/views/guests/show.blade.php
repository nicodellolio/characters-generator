@extends('layouts.app')

@section('content')
    <div class="container g-4 pt-5">

        <div class="card px-2 pb-2 pt-4">
            <div class="card-img-top text-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrrnDeX8xR_cK2_hrsXFJg7aVAABUEX6862RQmdVD2kg&s"
                    alt="">
            </div>
            <div class="card-title fs-3 fw-bold text-center text-primary">
                {{ $item->name }}
            </div>
            {{-- <div class="card-subtitle">{{$items->slug}}</div> --}}
            <div class="card-subtitle">Type: {{ $item->type }}</div>
            <div class="card-subtitle">Category: {{ $item->category }}</div>
            <card class="body">
            </card>
            <div class="card-footer bg-secondary d-flex justify-content-between text-light fw-bold">
                <div class="cost bg-success">
                    {{ $item['cost'] }}
                </div>
                <div class="damage_dice">
                    {{ $item->damage_dice }}
                </div>
            </div>
        </div>

    </div>
@endsection
