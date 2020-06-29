@extends('layouts.user_default')

@section('content')
<!-- Start Volunteer-form Area -->
<section class="Volunteer-form-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-9">
                <div class="title text-center">
                    <h1 class="mb-20">Want to help? Become a Volunteer</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit, sed do eiusmod tempor.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <form class="col-lg-9" action="{{ route('home.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="first-name">Jenis Kucing</label>
                    <input 
                        type="text"
                        name="jenis_kucing" 
                        value="{{ old('jenis_kucing') }}"
                        class="form-control" 
                        placeholder="Jenis Kucing">
                        @error('jenis_kucing') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                {{-- jenis_kelamin--}}
                <div class="form-group">
                    <label for="jenis_kelamin" class="form-control-label">Jenis Kelamin</label>
        
                    <br/>
        
                    <label>
                        <input 
                            type="radio"
                            name="jenis_kelamin" 
                            value="Jantan"
                            class="form-control @error('jenis_kelamin') is-invalid @enderror"/> Jantan
                    </label>
        
                    &nbsp;
        
                    <label>
                        <input
                            type="radio" 
                            name="jenis_kelamin"                           
                            value="Betina" 
                            class="form-control @error('jenis_kelamin') is-invalid @enderror" /> Betina
                    </label>
                    @error('jenis_kelamin') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea 
                        name="deskripsi"
                        class="form-control @error('deskripsi') is-invalid @enderror"
                        id="deskripsi"
                        rows="5"placeholder="Write message">
                    </textarea>
                </div>
                {{-- photo
                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input 
                    type="file"
                    name="photo" 
                    value="{{ old('photo') }}"
                    accept="image/*"
                    class="form-control-file @error('photo') is-invalid @enderror"
                    id="photo" required>
                </div> --}}
        
                <button type="submit" class="primary-btn float-right">Next</button>
            </form>
        </div>
    </div>
</section>
<!-- End Volunteer-form Area -->
@endsection