 {{--  --}}
 <table class="table table-dark table-striped table-hover">
     <thead>
         <tr>
             <th class="align-middle">ID</th>
             <th class="align-middle">Name</th>
             <th class="align-middle">Email</th>
             <th class="align-middle">Active Status</th>
         </tr>
     </thead>
     <tbody>
         @foreach ($users as $user)
             @if ($user->role != 'admin')
                 <tr>
                     <td class="align-middle">{{ $user->id }}</td>
                     <td class="align-middle">{{ $user->name }}</td>
                     <td class="align-middle">{{ $user->email }}</td>
                     <td class="align-middle">
                         <form style="margin:0; padding:0; decoration:none; background:none" method="post"
                             action="{{ route('update.active.status', ['encryptedUserId' => encrypt($user->id)]) }}">
                             @csrf
                             <button type="submit" style=""
                                 class="btn btn-{{ $user->active_status == 1 ? 'danger' : 'primary' }}">
                                 {{ $user->active_status == 1 ? 'Disable' : 'Enable' }}
                             </button>
                         </form>
                     </td>
                 </tr>
             @endif
         @endforeach
     </tbody>
 </table>
