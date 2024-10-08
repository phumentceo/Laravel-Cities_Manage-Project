@extends('Dashboard.components.master')
@section('contents')
<div class="top mt-3 border-bottom p-3">
    <h5>DASHBOARD / <span>CITY MANAGEMENT</span></h5>
</div>

<div class=" d-flex justify-content-between align-items-center pt-3 pb-3">
    <h3>All City</h3>
    <a href="{{ route('city.create') }}" class=" btn btn-primary ">new city</a>
</div>
@include('Dashboard.message.modals')
<table class=" table table-bordered">
    <tr class=" table-dark text-center">
        <th>CITY ID</th>
        <th>CITY IMAGE</th>
        <th>CITY NAME</th>
        <th>ACTION</th>
    </tr>
    
        @foreach ($cities as $city )
            <tr class=" text-center align-middle">
                <td>CITY-{{ $city->id }}</td>
                <td>
                    <img style="width: 100px; height: 60px;" src="{{ asset('uploads/'.$city->image) }}" alt="">
                </td>
                <td>{{ $city->name }}</td>
                <td>
                    <a onclick="DetailCity({{ $city->id }})" data-bs-toggle="modal" data-bs-target="#exampleModal" class=" btn btn-sm rounded-0 btn-info">View</a>
                    <a href="{{ route('city.edit',$city->id) }}" class=" btn btn-sm rounded-0 btn-primary">Edit</a>
                    <a href="{{ route('city.destroy',$city->id) }}" onclick="return confirm('Are you sure you want to delete this?')" class=" btn btn-sm rounded-0 btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
</table>
<div class="show-page">
    {{ $cities->links() }}
</div>
@endsection
@section('scripts')
<script>
    const DetailCity = (id) => {
        $.ajax({
            type: "POST",
            url: "{{ route('city.detail') }}",
            data: {
                city : id
            },
            dataType: "json",
            success: function (response) {
                if(response.status == 200){
                   let data = response.data;
                   let districts = response.data.districts;
                   $('.districts').html('');
                   if(data.name.indexOf("ទីក្រុង") > -1){
                     $(".show-dis h3").html(data.name + "មានខណ្ឌដូចខាងក្រោម ៖ ");
                   }else{
                     $(".show-dis h3").html(data.name + "មានក្រុងនិងស្រុកដូចខាងក្រោម ៖ ");
                   }
                  
                   $('.city-image').attr('src',`{{ asset('uploads/${data.image}') }}`);
                   $.each(districts, function (key,value) { 
                      $('.districts').append(`
                         <li class="${ (value.name.indexOf("ក្រុង") > -1) ? 'text-danger' : '' }">${value.name}</li>
                      `);
                   });
                }
            }
        });
    }

    $(document).on('input','.search-city', function () {
        let input = $('.search-city').val();
        if(input.length <= 0){
            window.location.href = "{{ route('city.list') }}"
        }
        
    });
</script>
@endsection