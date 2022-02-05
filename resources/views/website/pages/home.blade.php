@extends('website.master')
@section('content')



<!-- <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60">
                        <h3>Our Packages</h3>
                        <p>A Healthy Food, For A Wealthy Mood!</p>
                    </div>
                </div>
            </div> -->
            
<br><br>
<br><br>
<center>
            <h2>Fair Solution To Complex Problems</h2>
</center>

    <div class="service_area" style="margin-top: 150px;">
        <div class="container">
            
            <div class="row">
                
                <div class="col-lg-4">
                    <div class="single_service">
                        
                        <p><img src="{{url('bpic/electricity-2.jpg')}}" alt="" height="200px" width="270px" ></p>
                        <h2></h2>
                        <p class="h5"></p>
                        <p class="h5, font-weight-bold" style="color:red"></p>
                        <a class="btn btn-warning" href="{{route('website.view.electricity')}}" role="button">View Details</a>

                        
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single_service">
                        
                        <p><img src="{{url('bpic/water.jpg')}}" alt="" height="200px" width="270px" ></p>
                        <h2></h2>
                        <p class="h5"></p>
                        <p class="h5, font-weight-bold" style="color:red"></p>
                        <a class="btn btn-warning" href="{{route('website.view.water')}}" role="button">View Details</a>

                        
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single_service">
                        
                        <p><img src="{{url('bpic/street.jpg')}}" alt="" height="200px" width="270px" ></p>
                        <h2></h2>
                        <p class="h5"></p>
                        <p class="h5, font-weight-bold" style="color:red"></p>
                        <a class="btn btn-warning" href="{{route('website.view.street')}}" role="button">View Details</a>

                        
                    </div>
                </div>
              
            </div>
        </div>
    </div> 




    <div class="service_area" style="margin-top: 150px;">
        <div class="container">
            
            <div class="row">
                
                <div class="col-lg-4">
                    <div class="single_service">
                        
                        <p><img src="{{url('bpic/mosquito.jpeg')}}" alt="" height="200px" width="270px" ></p>
                        <h2></h2>
                        <p class="h5"></p>
                        <p class="h5, font-weight-bold" style="color:red"></p>
                        <a class="btn btn-warning" href="{{route('website.view.mosquito')}}" role="button">View Details</a>

                        
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single_service">
                        
                        <p><img src="{{url('bpic/waterlogging.jpg')}}" alt="" height="200px" width="270px" ></p>
                        <h2></h2>
                        <p class="h5"></p>
                        <p class="h5, font-weight-bold" style="color:red"></p>
                        <a class="btn btn-warning" href="{{route('website.view.waterlogging')}}" role="button">View Details</a>

                        
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single_service">
                        
                        <p><img src="{{url('bpic/garbage.jpg')}}" alt="" height="200px" width="270px" ></p>
                        <h2></h2>
                        <p class="h5"></p>
                        <p class="h5, font-weight-bold" style="color:red"></p>
                        <a class="btn btn-warning" href="{{route('website.view.garbage')}}" role="button">View Details</a>

                        
                    </div>
                </div>
              
            </div>
        </div>
    </div> 




    <div class="service_area" style="margin-top: 150px;">
        <div class="container">
            
            <div class="row">
                
                <div class="col-lg-4">
                    <div class="single_service">
                        
                        <p><img src="{{url('bpic/gas.jpg')}}" alt="" height="200px" width="270px" ></p>
                        <h2></h2>
                        <p class="h5"></p>
                        <p class="h5, font-weight-bold" style="color:red"></p>
                        <a class="btn btn-warning" href="{{route('website.view.gas')}}" role="button">View Details</a>

                        
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single_service">
                        
                        <p><img src="{{url('bpic/sewer.jpg')}}" alt="" height="200px" width="270px" ></p>
                        <h2></h2>
                        <p class="h5"></p>
                        <p class="h5, font-weight-bold" style="color:red"></p>
                        <a class="btn btn-warning" href="{{route('website.view.sewage')}}" role="button">View Details</a>

                        
                    </div>
                </div>

 @endsection