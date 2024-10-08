@extends('Dashboard.components.master')
@section('contents')
<div class="top mt-3 border-bottom p-3">
    <h5>DASHBOARD / <span>CITY MANAGEMENT</span></h5>
</div>

<div class="d-flex justify-content-between align-items-center pt-3 pb-3">
    <h5>UPDATE CITY</h5>
    <a href="{{ route('city.list') }}" class="btn btn-danger">back</a>
</div>

<form action="{{ route('city.create') }}" class="shadow p-5" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-3">
        <label class="text-light">ខេត្ត</label>
        <select  name="city" id="mySelectCities" class="form-select shadow-none" multiple="multiple"
            style="width: 100%;">
            @foreach ($cities as $city )
              <option value="{{ $city->id }}">{{ $city->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group mb-3">
        <label class="text-light">ស្រុក</label>
        <select name="destrict[]" id="mySelectDestrict" class="form-select shadow-none" multiple="multiple"
            style="width: 100%;">
            @foreach ($districts as $district )
              <option value="{{ $district->id }}">{{ $district->name }}</option>
            @endforeach 
        </select>
    </div>


    <div class="form-group mb-3">
        <label class="text-light">រូបភាព</label>
        <input type="file" name="image" class="form-control shadow-none">
    </div>

    <div class="form-button">
        <button type="submit" class="btn btn-success">Update</button>
        <button type="reset" class="btn btn-danger rounded">Reset</button>
    </div>
</form>
@endsection
@section('scripts')
<script>  
    
        $('#mySelectDestrict').select2({  
            placeholder: 'Select options',  
            allowClear: true,  
            tags: true, 
        }); 
          
        $('#mySelectCities').select2({  
            placeholder: 'Select options',  
            allowClear: true,  
            tags: true,  
        });

        const show = () => {
            let url = window.location.href;
            let id = url.split('/').pop() 
            
            if(id !== null){
                $.ajax({
                    type: "POST",
                    url: "{{ route('city.get') }}",
                    data: {
                        city : id
                    },
                    dataType: "json",
                    success: function (response) {
                        if(response.status == 200){
                            let data = response.data;
                            let districts = response.data.districts;
                            let city = [data.id];
                            let allDistricts = [];
                            $.each(districts, function (key,value) { 
                                allDistricts.push(value.id);
                            });

                            $('#mySelectCities').val(city).trigger('change');
                            $('#mySelectDestrict').val(allDistricts).trigger('change');

                        }
                    }
                });
            }

           
        }

        show();

       
    
</script>    
@endsection