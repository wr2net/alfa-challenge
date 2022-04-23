@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 text-right text-bold">
            <p>
                <a href="{{route('web.contacts.create')}}" class="text-right"><i class="fa fa-plus-circle btn btn-success"></i></a>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Contact</th>
                        <th class="text-center">E-mail</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($contacts ?? '' as $contact)
                    <tr>
                        <td class="text-center">{{$contact->id}}</td>
                        <td class="text-left"><a href="{{route('web.contacts.view', $contact->id)}}">{{$contact->name}}</a></td>
                        <td class="text-center">{{$contact->contact}}</td>
                        <td class="text-left">{{$contact->email}}</td>
                        <td class="text-center">
                            <a href="{{route('web.contacts.edit', $contact->id)}}">
                                <button class="btn btn-primary">
                                    <i class="fa fa-edit"></i>
                                </button>
                            </a>&nbsp;&nbsp;
                            <a href="{{route('web.contacts.delete', $contact->id)}}">
                                <button onclick="confirm('Are you sure you want to remove the registry?')" type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5" class="text-center">No record found.</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
