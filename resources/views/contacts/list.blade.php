@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Contact</th>
                        <th class="text-center">E-mail</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($contacts ?? '' as $contact)
                    <tr>
                        <td class="text-center">{{$contact->id}}</td>
                        <td class="text-left"><a href="{{route('web.contacts.view', $contact->id)}}">{{$contact->name}}</a></td>
                        <td class="text-center">{{$contact->contact}}</td>
                        <td class="text-left">{{$contact->email}}</td>
                    </tr>
                @empty
                    <tr><td colspan="5" class="text-center">No record found.</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
