@extends('layouts.subDashbaord')

@section('content')


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Frogetor - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by mannatthemes" name="description" />
        <meta content="Mannatthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">

            <h4 class="mt-0 header-title">Graduate</h4>

            <div class="table-responsive">
                <table class="table table-bordered mb-0 table-centered">
                    <thead>
                        
                    <tr>
                        <th>Graduate ID</th>
                        <th>Names</th>
                        <th>Mother's Name</th>
                        <th>Father's Name</th>
                        <th>guardian_phone</th>
                        <th>Causes</th>
                        <th>Level Of drugs</th>
                        <th>District</th>
                        <th>Setor</th>
                        <th>Village</th>
                        <th>Cell</th>
                        <th>Entry</th>
                        <th>Release</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($graduates as $graduate)
                        
                    
                            
                        
                    <tr>
                        <td>{{$graduate->graduate_id}}</td>
                        <td>{{$graduate->names}}</td>
                        <td>{{$graduate->mother_phone}}</td>
                        <td>{{$graduate->father_phone}}</td>
                        <td>{{$graduate->guardian_phone}}</td>
                        <td>{{$graduate->cause}}</td>
                        <td>{{$graduate->level_of_drugs}}</td>
                        <td>{{$graduate->districts_id}}</td>
                        <td>{{$graduate->sector}}</td>
                        <td>{{$graduate->village}}</td>
                        <td>{{$graduate->cell}}</td>
                        <td>{{$graduate->entry_time}}</td>
                        <td>{{$graduate->release_time}}</td>
                        <td>
                            <div class="dropdown d-inline-block float-right">
                                <a class="nav-link dropdown-toggle arrow-none" id="dLabel8" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel8">
                                    <a class="dropdown-item" href="{{Route ('graduates.create')}}">Create Graduate</a>
                                    <a class="dropdown-item" href="{{Route ('graduates.create', $graduate->id)}}">Edit Graduate</a>
                                    
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        @empty
                        
                        @endforelse
                    </tbody>
                </table><!--end /table-->
            </div><!--end /tableresponsive-->
        </div><!--end card-body-->
    </div><!--end card-->
</div> <!-- end col -->
</div> <!-- end row -->

    </body>

</html>
    
@endsection