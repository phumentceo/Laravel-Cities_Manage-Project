<div class="header d-flex justify-content-between align-items-center p-2">  
    <img src="{{ asset('uploads/logo.jpg') }}" alt=""  style="width:70px;height: 70px; margin-left: 20px; border-radius: 50%;">  
    <form  method="GET">
        <input value="{{ Request::get('search') }}" type="search" name="search" class="search-city w-100 form-control shadow-none" placeholder="search here....">
    </form>
</div>