@extends('theme.sb-admin.default')
@section('content')

	<div class="container-fluid">

	    <!-- Page Heading -->
	    <div class="row">
	        <div class="col-lg-12">
	            <h1 class="page-header">
	                Dashboard <small>Exam Overview</small>
	            </h1>
	            <ol class="breadcrumb">
	                <li class="active">
	                    <i class="fa fa-dashboard"></i> Dashboard
	                </li>
	            </ol>
	        </div>
	    </div>
	    <!-- /.row -->
	    <div class="row">
	        <div class="col-lg-12">
	        	<div>
				    <a style="margin: 19px;" href="{{ route('lyrics.index')}}" class="btn btn-primary">Go To Song List</a>
				</div> 
	        	<pre>
A. Basic PHP Coding Exam

Using the following frameworks:
1. Bootstrap 3
2. jQuery
3. Laravel 5

And using the following template:
https://startbootstrap.com/template-overviews/sb-admin/ (Please use download link for Bootstrap 3 version)

Please create a simple CMS admin that will allow users to Manage a database of songs lyrics.

1. We’d like the admin to be password protected using Laravel’s built-in auth system.
2. Unauthenticated users should redirect to the login page.
3. Authenticated users should have the option to:
   a. Create a new song lyrics entry, that will allow the user to add a title, an artist, and the song lyrics.
   b. Edit an existing lyrics entry, and update the values for their title, artist and song lyrics.
   c. Delete a song lyrics page.
   d. List all song lyrics available in the database with details on the title, the artisa, and when it was created.
4. Please include database migrations, and seeders.
5. All web pages should be responsive.
6. List of song lyrics from #3 should use Datatables https://blackrockdigital.github.io/startbootstrap-sb-admin/tables.html

Please send us a Github link with your code so that we can close and review. And let us know roughly how long it took you to create the application.

	        	</pre>
	    	</div>
	    </div>
	    <!-- /.row -->

	</div>
	<!-- /.container-fluid -->

@endsection