@extends('components/layout') 

@section('contents') 

<section class="px-32">
     
<form class="mx-auto mt-3" action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
  @csrf   {{-- important this is token in laravel and selfly --}}
    <div class="mb-3">
      <label for="" class="form-label block mb-3 text-base font-bold text-gray-900 dark:text-dark">FILE UPLOAD mantap</label>
      <input type="file" id="" class="form-control  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-200 dark:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-2" name="file"/>
    </div>
    
    <div>
      <button type="submit" class="text-white bg-blue-100 hover:bg-blue-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 mt-3">Submit</button>
    </div>
  </form>
</section>

  
  
@endsection











































{{-- @if ()

@elseif ()    

@endif

@for ()
    
@endfor

@foreach ()
    
@endforeach --}}
