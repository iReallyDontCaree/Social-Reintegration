@extends('layouts.subDashbaord')

@section('content')



<form action="{{ route('graduates.store') }}" method="POST">
    @csrf

    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <title>Reconnect</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta content="A premium admin dashboard template by mannatthemes" name="description" />
            <meta content="Mannatthemes" name="author" />
    
            <!-- App favicon -->
            <link rel="shortcut icon" href="assets/images/favicon.ico">
    
            <!-- App css -->
            <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
            <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
            <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
            <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    
        </head>
    
        <body class="account-body">
    
            <!-- Log In page -->
            <div class="row vh-100">
                <div class="col-lg-3  pr-0">
                    <div class="card mb-0 shadow-none">
                        <div class="card-body">
                            
                            <div class="px-3">
                                
                                
                                <form method="POST" class="form-horizontal my-4" action="{{ route('register') }}">
                                    @csrf
        
                                    <div class="form-group">
                                        <label for="username">Names</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                            </div>
                                            <input id="names" type="text" class="form-control @error('names') is-invalid @enderror" name="names" value="{{ old('names') }}" required autocomplete="names" autofocus>
                                            
                                            @error('names')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                        </div>                                    
                                    </div>


                                    <div class="form-group">
                                        <label for="username">mother phone</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                            </div>
                                            <input id="mother_phone" type="number" class="form-control @error('mother_phone') is-invalid @enderror" name="mother_phone" value="{{ old('mother_phone') }}" required autocomplete="mother_phone" autofocus>
                                            
                                            @error('mother_phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                        </div>                                    
                                    </div>

                                    <div class="form-group">
                                        <label for="username">Father's name</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                            </div>
                                            <input id="father_name" type="number" class="form-control @error('father_name') is-invalid @enderror" name="father_phone" value="{{ old('father_phone') }}" required autocomplete="father_name" autofocus>
                                            
                                            @error('father_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                        </div>                                    
                                    </div>

                                    <div class="form-group">
                                        <label for="username">guardian phone</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                            </div>
                                            <input id="guardian_phone" type="text" class="form-control @error('guardian_phone') is-invalid @enderror" name="guardian_phone" value="{{ old('guardian_phone') }}" required autocomplete="guardian_phone" autofocus>
                                            
                                            @error('guardian_phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                        </div>                                    
                                    </div>

                                    <div class="form-group">
                                        <label for="username">cause</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                            </div>
                                            <input id="cause" type="text" class="form-control @error('cause') is-invalid @enderror" name="cause" value="{{ old('cause') }}" required autocomplete="cause" autofocus>
                                            
                                            @error('cause')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                        </div>                                    
                                    </div>


                                    <div class="form-group">
                                        <label for="username">level of drugs</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                            </div>
                                            <input id="level_of_drugs" type="text" class="form-control @error('level_of_drugs') is-invalid @enderror" name="level_of_drugs" value="{{ old('level_of_drugs') }}" required autocomplete="names" autofocus>
                                            
                                            @error('level_of_drugs')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                        </div>                                    
                                    </div>



                                    <div class="form-group">
                                        <select name="districts_id" >
                                            @foreach (App\Models\District::all() as $data)
                                        <option value="{{$data->id}}">{{$data->district_name}}</option>
                                                
                                            @endforeach
                                        </select>
                                        </div>                                    
                                    </div>
    

                                    <div class="form-group">
                                        <select name="sectors_id" >
                                            @foreach (App\Models\Sector::all() as $data)
                                        <option value="{{$data->id}}">{{$data->sector_name}}</option>
                                                
                                            @endforeach
                                        </select>
                                        </div>                                    
                                    </div>
    

                                    <div class="form-group">
                                        <select name="villages_id" >
                                            @foreach (App\Models\Village::all() as $data)
                                        <option value="{{$data->id}}">{{$data->village_name}}</option>
                                                
                                            @endforeach
                                        </select>
                                        </div>                                    
                                    </div>
    


                                    <div class="form-group">
                                        <select name="cells_id" >
                                            @foreach (App\Models\Cell::all() as $data)
                                        <option value="{{$data->id}}">{{$data->cell_name}}</option>
                                                
                                            @endforeach
                                        </select>
                                        </div>                                    
                                    </div>
    



                                    <div class="form-group">
                                        <label for="username">entry time</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                            </div>
                                            <input id="entry_time" type="date" class="form-control @error('entry_time') is-invalid @enderror" name="entry_time" value="{{ old('names') }}" required autocomplete="entry_time" autofocus>
                                            
                                            @error('entry_time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                        </div>                                    
                                    </div>

                                    <div class="form-group">
                                        <label for="username">release time</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                            </div>
                                            <input id="release_time" type="date" class="form-control @error('release_time') is-invalid @enderror" name="release_time" value="{{ old('release_time') }}" required autocomplete="release_time" autofocus>
                                            
                                            @error('release_time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                        </div>                                    
                                    </div>


                                    
                                    
        
                                    
        
                                    <div class="form-group mb-0 row">
                                        <div class="col-12 mt-2">
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Register <i class="fas fa-sign-in-alt ml-1"></i></button>
                                        </div>
                                    </div>                            
                                </form>
    
                            </div>
                           
            </div>
            <!-- End Log In page -->
    
            <!-- jQuery  -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/bootstrap.bundle.min.js"></script>
            <script src="assets/js/metisMenu.min.js"></script>
            <script src="assets/js/waves.min.js"></script>
            <script src="assets/js/jquery.slimscroll.min.js"></script>
    
            <!-- App js -->
            <script src="assets/js/app.js"></script>
    
        </body>
    </html>