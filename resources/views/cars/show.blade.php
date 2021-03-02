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
                
                <a href="{{route('cars.show', $car->id)}}">Car Information</a>
                   <table class="w-full" border="1">                                     
                   	<tbody>
				<tr>
					<td>Reg. Number</td>
					<td>Brand</td>
					<td>Model</td>
					<td>Owner Name</td>
				</tr> 
				
			</tbody>
                   
                   <tbody>
                 
                   
                       <tr>
                       	<td>{{$car->reg_number}}</td>
                       	<td>{{$car->brand}}</td>
                        <td>{{$car->model}}</td>
                        <td>{{$car->owner->name}}</td>
                      	<td>
                      	
                      	<a href="{{route('cars.edit', $car->id)}}">Edit Car |</a>
                      	<a href="{{route('cars.delete', $car->id)}}">Delete Car</a>
                     
<!--                       	<form action="{{route('cars.destroy', $car->id)}}" method="post"> -->
<!--                       	@csrf -->
<!--                       	@method('DELETE') -->
<!--                       <input type="submit" value="Delete"> -->
<!--                       	</form> -->
                      	
                      	</td>
                       </tr>
                
                   </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
