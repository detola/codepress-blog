@extends('layouts.admin')

@section('content')

@include('includes.session-message')

<!-- Partials -->
<div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">All Users</h4>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                      #
                    </th>
                    <th>
                      User
                    </th>
                    <th>
                      Full name
                    </th>
                    <th>
                      Email
                    </th>
                    <th>
                      Role
                    </th>
                    <th>
                      Status
                    </th>
                    <th>
                      Created
                    </th>
                    <th>
                      Updated
                    </th>
                  </tr>
                </thead>
                <tbody>
                    @if ($users)

                    @foreach ($users as $user)

                    <tr>
                            <td>
                                {{$user->id}}
                            </td>
                            <td class="py-1">
                              <img src="{{$user->photo ? $user->photo->path : '/images/default.png'}}" alt="image" />
                            </td>
                            <td>
                                <a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a>
                            </td>
                            <td>
                                {{$user->email}}
                            </td>
                            <td>
                              {{$user->role->name}}
                            </td>
                            <td>
                                @if ($user->is_active == 1)
                                    <label class="badge badge-success">Active</label>                     
                                @else
                                    <label class="badge badge-warning">Not Active</label>
                                @endif
                            </td>
                            <td>
                                {{$user->created_at->diffForHumans()}}
                            </td>
                            <td>
                                {{$user->updated_at->diffForHumans()}}
                            </td>
                          </tr>
                        
                    @endforeach
                        
                    @endif
                  
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

<!-- End Partials -->
    
@endsection