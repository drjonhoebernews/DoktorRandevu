@extends('admin.layout.adminapp')
@section('css')

@endsection
@section('content')

    <!-- doctors-dashboard -->
    <section class="doctors-dashboard bg-color-3">
        <div class="left-panel">
            <div class="profile-box">
                <div class="upper-box">
                    <figure class="profile-image"><img src="assets/images/resource/profile-2.png" alt=""></figure>
                    <div class="title-box centred">
                        <div class="inner">
                            <h3>Dr. Rex Allen</h3>
                            <p>MDS - Periodontology</p>
                        </div>
                    </div>
                </div>
                <div class="profile-info">
                    <ul class="list clearfix">
                        <li><a href="/admin" class="current"><i class="fas fa-columns"></i>Dashboard</a></li>
                        <li><a href="#"><i class="fas fa-calendar-alt"></i>Appointments</a></li>
                        <li><a href="#"><i class="fas fa-wheelchair"></i>My Patients</a></li>
                        <li><a href="#"><i class="fas fa-plus-circle"></i>Add Listing</a></li>
                        <li><a href="#"><i class="fas fa-clock"></i>Schedule Timing</a></li>
                        <li><a href="#"><i class="fas fa-star"></i>Reviews</a></li>
                        <li><a href="#"><i class="fas fa-comments"></i>Messages</a><span>20</span></li>
                        <li><a href="#"><i class="fas fa-user"></i>My Profile</a></li>
                        <li><a href="#"><i class="fas fa-unlock-alt"></i>Change Password</a></li>
                        <li><a href="#"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="right-panel">
            <div class="content-container">
                <div class="outer-container">
                    <div class="feature-content">
                        <div class="row clearfix">
                            <div class="col-xl-4 col-lg-12 col-md-12 feature-block">
                                <div class="feature-block-two">
                                    <div class="inner-box">
                                        <div class="pattern">
                                            <div class="pattern-1" style="background-image: url(assets/images/shape/shape-79.png);"></div>
                                            <div class="pattern-2" style="background-image: url(assets/images/shape/shape-80.png);"></div>
                                        </div>
                                        <div class="icon-box"><i class="icon-Dashboard-1"></i></div>
                                        <h3>2375</h3>
                                        <h5>Total Patients</h5>
                                        <p>Lorem ipsum dolor  amet eiusmod tempor.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-12 col-md-12 feature-block">
                                <div class="feature-block-two">
                                    <div class="inner-box">
                                        <div class="pattern">
                                            <div class="pattern-1" style="background-image: url(assets/images/shape/shape-81.png);"></div>
                                            <div class="pattern-2" style="background-image: url(assets/images/shape/shape-82.png);"></div>
                                        </div>
                                        <div class="icon-box"><i class="icon-Dashboard-2"></i></div>
                                        <h3>320</h3>
                                        <h5>Total Staffs</h5>
                                        <p>Lorem ipsum dolor  amet eiusmod tempor.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-12 col-md-12 feature-block">
                                <div class="feature-block-two">
                                    <div class="inner-box">
                                        <div class="pattern">
                                            <div class="pattern-1" style="background-image: url(assets/images/shape/shape-83.png);"></div>
                                            <div class="pattern-2" style="background-image: url(assets/images/shape/shape-84.png);"></div>
                                        </div>
                                        <div class="icon-box"><i class="icon-Dashboard-3"></i></div>
                                        <h3>275</h3>
                                        <h5>New Appointments</h5>
                                        <p>Lorem ipsum dolor  amet eiusmod tempor.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="doctors-appointment">
                        <div class="title-box">
                            <h3 class="centred">DOKTOR LİSTESİ</h3>
                        </div>
                        <div class="doctors-list">
                            <div class="table-outer">
                                <table class="doctors-table">
                                    <thead class="table-header">
                                    <tr>
                                        <th>Doktor ADI / SOYADI</th>
                                        <th>Türü</th>
                                        <th>Oluşturma</th>
                                        <th>Güncelleme</th>
                                        <th>&nbsp;</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($docktors as $key => $docktor)
                                        <tr>
                                            <td>
                                                <div class="name-box">
                                                    <figure class="image"><img src="assets/images/resource/dashboard-doc-1.png" alt=""></figure>
                                                    <h5>{{$docktor->adinfo}}</h5>
                                                    <span class="designation">{{$docktor->uzmanlik}}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p>{{$docktor->created_at}}</p>
{{--                                                <span class="time">10:30AM</span>--}}
                                            </td>
                                            <td>
                                                <p>{{$docktor->updated_at}}</p>
                                            </td>
                                            <td>
                                                <a href="{{route('admin.doctor',$docktor->id)}}">
                                                    <span class="accept"><i class="fas fa-edit"></i></span>
                                                </a>
                                            </td>
                                            <td>
                                                <span class="cancel"><i class="fas fa-times"></i></span>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 centred">
                        <ul class="pagination">
                            <li class="page-item {{ $docktors->previousPageUrl() ? '' : 'disabled' }}">
                                <a class="page-link" href="{{ $docktors->previousPageUrl() }}" tabindex="-1" aria-disabled="{{ $docktors->previousPageUrl() ? 'false' : 'true' }}">Önceki</a>
                            </li>

                            @if ($docktors->currentPage() > 3)
                                <li class="page-item"><a class="page-link" href="{{ $docktors->url(1) }}">1</a></li>
                            @endif

                            @if ($docktors->currentPage() > 4)
                                <li class="page-item disabled"><span class="page-link">...</span></li>
                            @endif

                            @foreach (range(1, $docktors->lastPage()) as $page)
                                @if ($page >= $docktors->currentPage() - 2 && $page <= $docktors->currentPage() + 2)
                                    <li class="page-item {{ $page == $docktors->currentPage() ? 'active' : '' }}"><a class="page-link" href="{{ $docktors->url($page) }}">{{ $page }}</a></li>
                                @endif
                            @endforeach

                            @if ($docktors->currentPage() < $docktors->lastPage() - 3)
                                <li class="page-item disabled"><span class="page-link">...</span></li>
                            @endif

                            @if ($docktors->currentPage() < $docktors->lastPage() - 2)
                                <li class="page-item"><a class="page-link" href="{{ $docktors->url($docktors->lastPage()) }}">{{ $docktors->lastPage() }}</a></li>
                            @endif

                            <li class="page-item {{ $docktors->nextPageUrl() ? '' : 'disabled' }}">
                                <a class="page-link" href="{{ $docktors->nextPageUrl() }}" aria-disabled="{{ $docktors->nextPageUrl() ? 'false' : 'true' }}">Sonraki</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- doctors-dashboard -->

@endsection
@section('js')

@endsection
