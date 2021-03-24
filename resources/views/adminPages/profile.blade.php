@section('title', 'Admin - Profile')
@section('location', 'Profile')
@extends('dashboard.admin')

@section('main_body')
    <div class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-success">
                        <h5 class="title text-light"> Profile Details</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col pl-1">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" disabled="" placeholder="First Name" value="First Name">
                                    </div>
                                </div>
                                <div class="col pl-1">
                                    <div class="form-group">
                                        <label>Middle Name</label>
                                        <input type="email" class="form-control" disabled="" placeholder="Middle Name" value="Middle Name">
                                    </div>
                                </div>
                                <div class="col pl-1">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="email" class="form-control" disabled="" placeholder="Last Name" value="Last Name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col pl-1">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" disabled="" placeholder="Username" value="michael23">
                                    </div>
                                </div>
                                <div class="col pl-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" disabled="" placeholder="agent@agent.com">
                                    </div>
                                </div>
                                <div class="col pl-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mobile Number</label>
                                        <input type="email" class="form-control" disabled="" placeholder="090-5322-4345">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col pl-1">
                                    <div class="form-group">
                                        <label> Contact Address</label>
                                        <input type="text" class="form-control" disabled="" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="text" class="form-control" disabled="" placeholder="City" value="Enugu">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" class="form-control" disabled="" placeholder="Country" value="Nigeria">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Postal Code</label>
                                        <input type="number" class="form-control" disabled="" placeholder="ZIP Code">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col pl-1">
                                    <div class="form-group">
                                        <label>About Me</label>
                                        <textarea rows="4" cols="80" class="form-control" disabled="" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="image">
                        <img src="../assets/img/bg5.jpg" alt="...">
                    </div>
                    <div class="card-body">
                        <div class="author">
                            <a href="#">
                                <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">
                                <h5 class="title">Mike Andrew</h5>
                            </a>
                            <p class="description">
                                michael24
                            </p>
                        </div>
                        <p class="description text-center">
                            "Lamborghini Mercy <br>
                            Your chick she so thirsty <br>
                            I'm in that two seat Lambo"
                        </p>
                    </div>
                    <hr>
                    <div class="button-container">
                        <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                            <i class="fab fa-facebook-f"></i>
                        </button>
                        <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                            <i class="fab fa-twitter"></i>
                        </button>
                        <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                            <i class="fab fa-google-plus-g"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection