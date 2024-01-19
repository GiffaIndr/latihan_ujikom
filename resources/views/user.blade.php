@extends('layout.dashboard')

<div class="container" style="margin-right: 12px; background-color:rgb(0, 0, 0);">

<div class="card m-5 shadow p-3" style="border: none;">
    
   
    
<table style="border-radius: 30%" class="table table-striped table-dark">
   
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">NAMA</th>
        <th scope="col">ROMBEL</th>
        <th scope="col">RAYON</th>
        <th scope="col">TELEPON</th>
        <th scope="col">ACTION</th>
      </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
      <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$user->nama}}</td>
        <td>{{ $user->asal_smp}}</td>
        <td>{{$user->jenis_kelamin}}</td>
        <td>{{$user->minat_jurusan}}</td>
        <td class=" "> <form  action="{{route('delete', $user->id)}}" method="post">
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-danger">delete</button>
        </form>

        <a href="{{route('userEdit', $user['id'])}}" class="btn btn-primary">edit</a>
      </td>
      </tr>
      @endforeach
    </tbody>
    <div class="mt-1 p-5 " style="font-weight: 600;">Jumlah yang mendaftar <div  style="font-weight: bold; font-size: 30px;"> {{ $users->count()}} <hr></div></div></div>
    
  </table>
      
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>