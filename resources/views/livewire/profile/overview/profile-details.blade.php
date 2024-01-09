

<div class="card-body p-9">
    <!--begin::Row-->
    <div class="row mb-7">
       <!--begin::Label-->
       <label class="col-lg-4 fw-semibold text-muted">Full Name</label>
       <!--end::Label-->
       <!--begin::Col-->
       <div class="col-lg-8">
          <span class="fw-bold fs-6 text-gray-800">{{$user->full_name}}</span>
       </div>
       <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Input group-->
    <div class="row mb-7">
       <!--begin::Label-->
       <label class="col-lg-4 fw-semibold text-muted">Company</label>
       <!--end::Label-->
       <!--begin::Col-->
       <div class="col-lg-8 fv-row">
          <span class="fw-semibold text-gray-800 fs-6">Legacy.Live</span>
       </div>
       <!--end::Col-->
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="row mb-7">
       <!--begin::Label-->
       <label class="col-lg-4 fw-semibold text-muted">
       Contact Phone
       <span class="ms-1" data-bs-toggle="tooltip" title="Phone number must be active">
       <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                </span>
       </label>
       <!--end::Label-->
       <!--begin::Col-->
       <div class="col-lg-8 d-flex align-items-center">
          <span class="fw-bold fs-6 text-gray-800 me-2">{{$user->cell}}</span>
       </div>
       <!--end::Col-->
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="row mb-7">
       <!--begin::Label-->
       <label class="col-lg-4 fw-semibold text-muted">Email</label>
       <!--end::Label-->
       <!--begin::Col-->
       <div class="col-lg-8">
          <a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary">{{$user->email}}</a>
          @if ($user->email_verified_at)
            <span class="badge badge-success">Verified</span>
          @endif
       </div>
       <!--end::Col-->
    </div>
    <!--end::Input group-->
    @if ($user->address)
        <!--begin::Input group-->
        <div class="row mb-7">
        <!--begin::Label-->
        <label class="col-lg-4 fw-semibold text-muted">
            Country
            <span class="ms-1" data-bs-toggle="tooltip" title="Country of origination">
                <i class="ki-duotone ki-information fs-7">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                </i>
            </span>
        </label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-8">
            <span class="fw-bold fs-6 text-gray-800">{{$user->address->country->name}}</span>
        </div>
        <!--end::Col-->
        </div>
        <!--end::Input group-->
    @endif

    @if ($user->roles->count() > 0)
    <!--begin::Input group-->
    <div class="row mb-7">
       <!--begin::Label-->
       <label class="col-lg-4 fw-semibold text-muted">Roles</label>
       <!--end::Label-->
       <!--begin::Col-->
       <div class="col-lg-8">
          <span class="fw-bold fs-6 text-gray-800">
            @foreach ($user->roles as $role)
                {{$role->name}}
                @if (!$loop->last) , @endif
            @endforeach
        </span>
       </div>
       <!--end::Col-->
    </div>
    @endif
    <!--end::Input group-->
    {{-- <!--begin::Notice-->
    <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed  p-6">
        <!--begin::Icon-->
        <i class="ki-duotone ki-information fs-2tx text-warning me-4">
            <span class="path1"></span>
            <span class="path2"></span>
            <span class="path3"></span>
        </i>
        <!--end::Icon-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-stack flex-grow-1 ">
            <!--begin::Content-->
            <div class=" fw-semibold">
                <h4 class="text-gray-900 fw-bold">We need your attention!</h4>
                <div class="fs-6 text-gray-700 ">Your payment was declined. To start using tools, please <a class="fw-bold" href="/../demo1/account/billing.html">Add Payment Method</a>.</div>
            </div>
            <!--end::Content-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Notice--> --}}
 </div>
