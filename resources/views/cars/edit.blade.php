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
                   
                         
                   <form method="post" action="{{route('cars.update', $car->id)}}">    
<!--                    Jeigu i action nenurodau jokio route, Car vistiek prisideda i duombaze -- nezinau kodel                           -->
         @csrf
         @method('PUT')

            <!-- Name -->
            <div>
                <x-label for="reg_number"  >Reg.Number</x-label>
 
                <x-input id="reg_number" class="block mt-1 w-full" type="text" name="reg_number" :value="$car->reg_number"  />
            </div>
               <div>
                <x-label for="brand"  >Brand</x-label>

                <x-input id="brand" class="block mt-1 w-full" type="text" name="brand"  :value="$car->brand" />
            </div>
               <div>
                <x-label for="model"  >Model</x-label>

                <x-input id="model" class="block mt-1 w-full" type="text" name="model" :value="$car->model"  />
            </div>
               <div>
                <x-label for="owner_id"  >Owner ID</x-label>

              <select name="owner_id" class="block mt-1 w-full">
              @foreach ($owners as $owner)
              
              <option value="{{$owner->id}}" @if ($car->owner_id==$owner->id) selected @endif >{{$owner->name}}</option>
              
              @endforeach
              </select>
            </div>
            <div class="mt-4"> <x-button>     Edit       </x-button></div>
           
            
            </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
