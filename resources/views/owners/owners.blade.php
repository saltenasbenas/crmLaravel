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
                
                <a href="{{route('owners.create')}}">New Owner</a>
                   <table class="w-full" border="1">                                     
                   	<tbody>
				<tr>
					<td>Name</td>
					<td>Surname</td>
					<td>From_date</td>
					<td>To_date</td>
				</tr> 
				
			</tbody>
                   
                   <tbody>
                   @foreach ($owners as $owner)
                   
                       <tr>
                       	<td>{{$owner->name}}</td>
                       	<td>{{$owner->surname}}</td>
                        <td>{{$owner->from_date}}</td>
                        <td>{{$owner->to_date}}</td>
                      	<td>
                      	
                      	<a href="{{route('owners.edit', $owner->id)}}">Edit Owner |</a>
                      	<a href="{{route('owners.delete', $owner->id)}}">Delete Owner</a>
                     

                      	
                      	</td>
                       </tr>
                   @endforeach
                   </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
