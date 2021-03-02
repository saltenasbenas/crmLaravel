<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
             
             @if  ($errors->any())
             <div class="p-6 bg-white border-b border-gray-200 mb-2">
             		
             		<ul>
             		
             		@foreach ($errors->all() as $error)
             			<li> {{$error}}</li>
             		@endforeach
             		</ul>
             
             </div>
             @endif
             
             
             
             
             
             <div class="p-6 bg-white border-b border-gray-200">
                   <table class="w-full" border="1"> 
                   
                         
                   <form method="POST" action="{{route('cars.store')}}">    
<!--                    Jeigu i action nenurodau jokio route, Car vistiek prisideda i duombaze -- nezinau kodel                           -->
         @csrf



            <!-- Name -->
            <div>
                <x-label for="reg_number"  >Reg.Number</x-label>  

                <input id="reg_number" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 @error('reg_number') error @enderror"  type="text" name="reg_number" value="{{Request::old('reg_number')}}"  />
            </div>
               <div>
                <x-label for="brand"  >Brand</x-label>

                <input id="brand" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 @error('brand') error @enderror" type="text" name="brand"  value="{{Request::old('brand')}}" />
            </div>
               <div>
                <x-label for="model"  >Model</x-label>

                <input id="model" class=" block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 @error('model') error @enderror" type="text" name="model"  value="{{Request::old('model')}}" />
            </div>
               <div>
                <x-label for="owner_id"  >Owner ID</x-label>

              <select name="owner_id" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
              @foreach ($owners as $owner)
              
              <option value="{{$owner->id}}">{{$owner->name}}</option>
              
              @endforeach
              </select>
            </div>
            <div class="mt-4"> <x-button>     Add New Car       </x-button></div>
           
            
            </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
