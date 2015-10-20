@extends('app')

@section('content')

@include('partials.grouptab')

<div class="container">
  <h2>{{ trans('messages.members_of_this_group') }}</h2>



    <table class="table table-hover">
      <tr>
        <th>{{ trans('messages.name') }}</th>
        <th>{{ trans('messages.registration_time') }}</th>
      </tr>

      @foreach( $users as $user )
      <tr>
        <td>
          <a href="{{ action('UserController@show', $user->id) }}">{{ $user->name }}</a>
        </td>


        <td>
          <a href="{{ action('UserController@show', $user->id) }}">{{ $user->created_at->diffForHumans() }}</a>
        </td>



      </tr>
      @endforeach
    </table>

    {!! $users->render() !!}


  </div>




  @endsection