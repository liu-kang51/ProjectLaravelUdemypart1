@extends('components/layout') 

@section('contents') 

<section>
     
<form class="max-w-xl mx-auto mt-3" action="{{ route('contact.submit') }}" method="POST">

    @if ($errors->any())
      @foreach ($errors->all() as $error)
      <div class="bg-red-100 rounded mb-2"> {{ $error }} </div>
      @endforeach
    @endif


  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  @csrf   {{-- important this is token in laravel and selfly --}}
    <div class="mb-3">
      <label for="" class="form-label block mb-3 text-base font-bold text-gray-900 dark:text-dark">Name</label>
      <input type="text" id="" class="form-control  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-200 dark:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-2" name="name" value="{{ old('name') }}" />

      <label for="" class="form-label block mb-3 text-base font-bold text-gray-900 dark:text-dark">Email</label>
      <input type="email" id="" class="form-control  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-200 dark:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" name="email" value="{{ old('email') }}" />

      <label for="" class="form-label block mb-2 text-base font-bold text-gray-900 dark:text-dark">Subject</label>
      <input type="text" id="" class="form-control  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-200 dark:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" name="subject" value="{{ old('subject') }}" />
      
      <label for="" class="form-label block mb-2 text-base font-bold text-gray-900 dark:text-dark">Message</label>
      <textarea type="text" id="" class="form-control  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block dark:bg-gray-200 dark:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500 w-full" placeholder="" name="message" >{{ old('message') }}</textarea>
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
