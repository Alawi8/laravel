 @extends('../layouts/app')
 @section('content')
     <!-- Create fut Form -->
     <h1>create new futs</h1>

     <form class=" w-25" action="{{ route('fut.store') }}" method="POST">
         @csrf
         <input class="w-100 form-control " type="text" name="title" placeholder="enter title"
             class="@error('title') is-invalid @enderror"><br>
         @error('title')
             <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <input class="form-control w-100" class=" @error('title') is-invalid @enderror" type="text" name="body"
             placeholder="enter body"><br>
         @error('title')
             <div class="alert alert-danger">{{ $message }}</div>
         @enderror

         <button class="btn btn-secondary" type="submit">submit </button>

     </form>
 @endsection
