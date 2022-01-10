

<div id="tooplate_header_wrapper">
<div id="tooplate_header" style="background-image: url('/images/tooplate_header.jpg'); width: 100%;">

        <div id="tooplate_menu">
            <ul style="display: flex; justify-content: space-between; padding-left: 57px;">
                <li><a href="about.html">About Us</a></li>

                @if(auth()->user())

                <li><a href="{{route('website.user.profile')}}">User Profile</a></li>
                <!-- <li><a href="contact.html">Employee</a></li> -->
                <li><a href="{{route('website.show.problem')}}">City Corporation Problem</a></li>
                <li><a href="{{route('website.show.user.feedback')}}">User Feedback</a></li>
                <li><a href="#">Feeedback of Complation Task</a></li>
                @endif

                <!-- <li><a href="contact.html">Tax</a></li> -->
                <li><a href="{{route('website.employee.registration')}}">Employee Registration</a></li>
                @if(auth()->user())
                <li><a href="{{route('user.logout')}}">Logout</a></li>
                @else
                <li><a href="{{route('user.registration')}}">User Registration</a></li>
                <li><a href="{{route('user.login')}}">Login</a></li>
                @endif









            </ul>    	
        </div> <!-- end of tooplate_menu -->

    	<div id="site_title"><h1><a rel="nofollow" href="http://www.tooplate.com">Free Website Templates</a></h1></div>
        
    </div> <!-- end of header -->
</div> <!-- end of header wrapper -->