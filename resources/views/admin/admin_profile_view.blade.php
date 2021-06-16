@extends('admin.admin_master')
@section('content')

<main class="app-content">
    <div class="row user">
        <div class="col-md-12">
            <div class="profile">
                <div class="info"><img class="user-img"
                        src="{{ (!empty($adminData->profile_photo_path)) ? url('upload/admin_images/'.$adminData->profile_photo_path):url('upload/no_image.jpg') }}">
                    <h4>{{$adminData->name}}</h4>
                    <p>FrontEnd Developer</p>
                </div>
                <div class="cover-image"></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="tile p-0">
                <ul class="nav flex-column nav-tabs user-tabs">
                    <li class="nav-item"><a class="nav-link active" href="#user-timeline" data-toggle="tab">Perfil</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#user-settings" data-toggle="tab">Configuración</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#user-settings" data-toggle="tab">Usuario</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="tab-content">
                <div class="tab-pane active" id="user-timeline">
                    <div class="timeline-post">
                        <div class="post-media"><a href="#"><img
                                    src="{{ (!empty($adminData->profile_photo_path)) ? url('upload/admin_images/'.$adminData->profile_photo_path):url('upload/no_image.jpg') }}" style="width:50px; height:50px"></a>
                            <div class="content">
                                <h5>Nombre: <a href="">{{ $adminData->name }}</a></h5>
                                <p class="text-muted"><small>2 January at 9:30</small></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p><b>Correo electrónico:</b> {{ $adminData->email }}</p>
                            </div>
                            <div class="col-md-6">
                                <p><b>Ubicación:</b> {{ $adminData->address }}</p>
                            </div>
                            <div class="col-md-6">
                                <p><b>Teléfono:</b> {{ $adminData->phone }}</p>
                            </div>
                            <div class="col-md-6">
                                <p><b>Redes Sociales:</b>
                                    <a class="mr-2" href="{{ $adminData->facebook }}" target="__blank"><i class="fa fa-lg fa-facebook"></i></a>
                                    <a class="mr-2" href="{{ $adminData->twitter }}" target="__blank"><i class="fa fa-lg fa-twitter"></i></a>
                                    <a class="mr-2" href="{{ $adminData->instagram }}" target="__blank"><i class="fa fa-lg fa-instagram"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="user-settings">
                    <div class="tile user-settings">
                        <h4 class="line-head">Settings</h4>
                        <form>
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <label>First Name</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="col-md-4">
                                    <label>Last Name</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 mb-4">
                                    <label>Email</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-8 mb-4">
                                    <label>Mobile No</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-8 mb-4">
                                    <label>Office Phone</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-8 mb-4">
                                    <label>Home Phone</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="row mb-10">
                                <div class="col-md-12">
                                    <button class="btn btn-primary" type="button"><i
                                            class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
