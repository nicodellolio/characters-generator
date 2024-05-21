@extends('layouts.app')

@section('title')
Items
@endsection

@section('content')
<div class="container pt-5">

    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Thumb</th>
                    <th scope="col">Name</th>
                    <th scope="col">Attack</th>
                    <th scope="col">Defense</th>
                    <th scope="col">Speed</th>
                    <th scope="col">Description</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($characters as $character)
                <tr class="fs-5">
                    <td class="">
                        <img width=100 src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrrnDeX8xR_cK2_hrsXFJg7aVAABUEX6862RQmdVD2kg&s"
                        alt="">
                    </td>
                    <td scope="row">{{$character->name}}</td>
                    <td>{{$character->attack}}</td>
                    <td>{{$character->defense}}</td>
                    <td>{{$character->speed}}</td>
                    <td>{{$character->description}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection