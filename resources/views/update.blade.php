<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets/css/form.css')}}" rel="stylesheet" type="text/css">

    <title>Update Pendaftaran</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
  
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
</head>
update database
<body>
    <form action="{{route ('editAccount', $edit['id'] )}}" class="align-center card m-lg-5 p-xl-5 ml-20 w-25 shadow-lg" method="post">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">name</label>
            <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">SMP</label>
            <input type="text" name="asal_smp" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
                <label for="exampleFormControlSelect1" class="form-label">Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin" id="exampleFormControlSelect1">
                  <option>L</option>
                  <option>P</option>
                </select>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlSelect1" class="form-label">Minat Jurusan</label>
            <select class="form-control" name="minat_jurusan" id="exampleFormControlSelect1">
              <option>PPLG</option>
              <option>DKV</option>
              <option>TJKT</option>
            </select>
          </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</body>

