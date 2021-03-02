<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <table class="w-full" border="1"> 
                   
                         
                   <form method="post" action="{{route('owners.update', $owner->id)}}">    
                                           
          @csrf
         @method('PUT')
        
         

            <!-- Name -->
            <div>
                <x-label for="name"  >Name</x-label>
 
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$owner->name"  />
            </div>
               <div>
                <x-label for="surname"  >Surname</x-label>

                <x-input id="surname" class="block mt-1 w-full" type="text" name="surname"  :value="$owner->surname" />
            </div>
               <div>
                <x-label for="from_date"  >From_date</x-label>

                <x-input id="from_date" class="block mt-1 w-full" type="date" name="from_date" :value="$owner->from_date"  />
            </div>
               <div>
                <x-label for="to_date"  >To_date </x-label>
				<x-input id="to_date" class="block mt-1 w-full" type="date" name="to_date" :value="$owner->to_date"  />
            
            </div>
            <div class="mt-4"> <x-button>     Edit       </x-button></div>
           
            
            </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
