@extends('template.pasang-template-admin')
@section('content')
<style>
    /* Sembunyikan input file default */
    /* .custom-file-input {
        cursor: pointer;
        display: none;
        position: absolute;
        top: 300px;
        left: 750px;
        width: 10%;
        border: 1px solid black;
    } */

    /* Styling untuk tombol custom */
    /* .custom-file-label {
        display: inline-block;
        padding: 10px 20px;
        background-color: #470B77;
        color: black;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        text-align: center;
        border: none;
        display: none;
    } */



    /* Untuk menampilkan nama file yang dipilih */
    /* .file-name {
        margin-top: 10px;
        font-size: 14px;
        color: #555;
    } */
</style>
<header class="main-header">
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top bg-white pl-30"
        style="border-bottom-left-radius: 40px; border-bottom-right-radius: 40px;">
        <!-- Sidebar toggle button-->
        <div class="navbar-custom-menu w-100">
            <ul class="nav navbar-nav d-flex w-100 align-items-center">
                <!-- Notifications -->
                <li class="pt-15 d-flex" >
                    <h3 class="ml-3 fw-bold">< </h3> <!-- Margin left for left spacing -->
                    <h3 class="ml-3 fw-bold">Create School</h3> <!-- Margin left for left spacing -->
                </li>
                <li class="ml-auto"> <!-- Pushes user account to the right -->
                    <!-- User Account-->
                    <li class="dropdown user user-menu">
                        <a href="#" class="waves-effect waves-light rounded dropdown-toggle p-0" data-toggle="dropdown"
                            title="User">
                            <img src="../images/avatar/1.jpg" alt="" class="mr-3" style="width:40px; height:40px;"> <!-- Margin right for space before image -->
                        </a>
                        <ul class="dropdown-menu animated flipInX">
                            <li class="user-body">
                                <a class="dropdown-item" href="#"><i class="ti-user text-muted mr-2"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="ti-wallet text-muted mr-2"></i> My Wallet</a>
                                <a class="dropdown-item" href="#"><i class="ti-settings text-muted mr-2"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="ti-lock text-muted mr-2"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="content-wrapper" style="margin-top:-20px; ">
    <div class="container-full">
        <section class="content">   
            <div class="container" >              
                <div class="content w-100">
                    <div class="profile p-5 bg-white" style="border-radius: 50px;" >
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <label for="nisn" class="ms-2">Nisn</label>
                                            <input class="form-control mt-2 border-0" style="border-radius: 12px; background-color: #F6F6F6;" type="number" name="nisn" id="nisn">
                                        </div>
                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="col-md-12" style="margin-top: -20px;">
                                                    <img src="../images/avatar/1.jpg" class=" rounded-circle ms-5" style="background-color: #F6F6F6; border: 1px solid #d0d0d0;"  width="80px"  alt="">
                                                    <label class="custom-file-label ms-4 fw-bold" for="file-input">Add Photo</label>
                                                    <input type="file" id="file-input" class="custom-file-input" accept="image/*">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" style="margin-top: -28px;">
                                    <label for="nama" class="ms-2">Nama Lengkap</label>
                                    <input type="text" class="form-control mt-2 border-0" style="border-radius: 12px; background-color: #F6F6F6;" name="" id="nama">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label for="date">Tanggal Lahir</label>
                                    <input type="date" name="" class="form-control mt-2 border-0" style="border-radius: 12px; background-color: #F6F6F6;" id="date">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label for="alamat" class="ms-2">Alamat</label>
                                    <textarea name="" class="form-control mt-2 border-0" style="border-radius: 12px; background-color: #F6F6F6;" id="alamat" rows="4"></textarea>
                                </div>
                                <div class="col-md-12 mt-2" >
                                    <label for="npsn" class="ms-2">NPSN</label>
                                    <input type="text" class="form-control mt-2 border-0" style="border-radius: 12px; background-color: #F6F6F6;" name="" id="npsn">
                                </div>
                                <div class="col-md-12 mt-5">
                                    <a href="" class="btn btn-secondary ps-5 pe-5" style="border-radius: 20px;">Cancel</a>
                                    <button class="btn ps-5 pe-5 text-white " style="background-color: #AD66E5; border-radius: 20px;" type="submit">Edit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        
        </section>
    </div>
</div>
@endsection
