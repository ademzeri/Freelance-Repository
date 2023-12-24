@extends('layouts.default')

@section('content')
<div class="">
    <!-- Alert Section -->
    <div class="alert-section pt-3 px-4">
        <div class="alert alert-danger alert-dismissible fade show">
            <div class="d-flex flex-row">
                <!-- SVG Icon -->
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                    <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                    <line x1="15" y1="9" x2="9" y2="15"></line>
                    <line x1="9" y1="9" x2="15" y2="15"></line>
                </svg>
                <p class="inline"><strong>Alert! </strong> Alert! Blocker type 'No Blocked' will cause all bots to access your site.</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
        </div>
    </div>

    <!-- Form Section -->
    <div class="form-section px-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Condition</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Device Allowed Dropdown -->
                        <div class="col-md-12 col-xl-2 col-xxl-2 mb-3">
                            <label class="form-label">Device allowed</label>
                            <div class="input-group w-full" data-placement="bottom" data-align="top" data-autobtn-close="true">
                                <select name="" id="" class="form-control input-default">
                                    <option value="">ALL DEVICE</option>
                                    <option value="">MOBILE ONLY</option>
                                    <option value="">DESKTOP ONLY</option>
                                </select>
                            </div>
                        </div>

                        <!-- Blocker Type Dropdown -->
                        <div class="col-md-12 col-xl-2 col-xxl-2 mb-3">
                            <label class="form-label">Blocker type</label>
                            <div class="input-group w-full" data-placement="bottom" data-align="top" data-autobtn-close="true">
                                <select name="" id="" class="form-control input-default">
                                    <option value="">NO BLOCKED</option>
                                    <option value="">BLOCK TYPE IP PROXY</option>
                                    <option value="">BLOCK TYPE IP NON-ISP + PROXY</option>
                                </select>
                            </div>
                        </div>

                        <!-- Blocker Level Dropdown -->
                        <div class="col-md-12 col-xl-2 col-xxl-2 mb-3">
                            <label class="form-label">Blocker Level</label>
                            <div class="input-group w-full" data-placement="bottom" data-align="top" data-autobtn-close="true">
                                <select name="" id="" class="form-control input-default">
                                    <option value="">LOW</option>
                                    <option value="">MEDIUM</option>
                                    <option value="">VERY SENSITIVE</option>
                                </select>
                            </div>
                        </div>

                        <!-- Country Dropdown -->
                        <div class="col-md-12 col-xl-2 col-xxl-2 mb-3">
                            <label class="form-label">COUNTRY</label>
                            <div class="input-group w-full" data-placement="bottom" data-align="top" data-autobtn-close="true">
                                <select name="" id="" class="form-control input-default">
                                    <!-- List of countries -->
                                    <option value="Afghanistan">Afghanistan</option>
                                    <!-- Add more options here -->
                                </select>
                            </div>
                        </div>

                        <!-- Firewall Dropdown and Update Button -->
                        <div class="col-md-12 col-xl-2 col-xxl-2 mb-3 d-flex align-items-end">
                            <button type="button" class="bg-primary w-100 rounded-2 py-2 mb-1 px-button border-transparent text-white">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Buttons Section -->
    <div class="btns-section d-flex flex-row justify-content-center justify-content-lg-start gap-2 pb-2 px-4 mx-2">
        <!-- Button 1: BOT TYPE -->
        <button class="bg-button-red text-white px-4 py-1-5 rounded-2">
            <a href="#" class="d-flex flex-row gap-1 align-items-center">
                <i class="fa-solid fa-circle-info text-white"></i>
                <span class="text-white">BOT TYPE</span>
            </a>
        </button>

        <!-- Button 2: TUTORIAL -->
        <button class="bg-button-orange text-white px-4 py-1-5 rounded-2">
            <a href="#" class="flex flex-row gap-1 align-items-center">
                <i class="fa-solid fa-link text-white"></i>
                <span class="text-white">TUTORIAL</span>
            </a>
        </button>
    </div>

    <!-- Blocker Statistics -->
    <div class="static my-2">
        <div class="page-titles d-flex flex-lg-row flex-column gap-lg-0 gap-2 justify-content-between border border-secondary mx-4 py-3 align-items-center">
            <div class="mb-lg-0">
                <h5 class="dark:text-white text-black h6">Blocker Statistics</h5>
                <p>Last Update: Wed, 18 Oct 2023 - 07:42:43 PM</p>
            </div>

            <!-- Statistics Table -->
            <table class="table-fixed text-center">
                <thead>
                    <tr>
                        <th class="pr-1 p-lg-2 px-2">Real visitors</th>
                        <th class="pr-1 p-lg-2 px-2">Bots</th>
                        <th class="pr-1 p-lg-2 px-2">Total Visitor</th>
                    </tr>
                </thead>
                <tbody class="dark:text-white text-black h5">
                    <tr>
                        <td class="pr-1 p-lg-2 px-2">129</td>
                        <td class="pr-1 p-lg-2 px-2">38</td>
                        <td class="pr-1 p-lg-2 px-2">167</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Data Table -->
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Data</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div id="example_wrapper" class="dataTables_wrapper">
                        <table id="example" class="display dataTable w-full" style="min-width: 845px" aria-describedby="example_info">
                            <thead>
                                <tr class="font-weight-normal h-6">
                                    <th class="fw-normal sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending">CREATED</th>
                                    <th class="fw-normal sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1">IP ADDRESS</th>
                                    <th class="fw-normal sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1">ISP / HOSTNAME</th>
                                    <th class="fw-normal sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1">COUNTRY</th>
                                    <th class="fw-normal sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1">DEVICE USERAGENT</th>
                                    <th class="fw-normal sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1">REQUEST URL</th>
                                    <th class="fw-normal sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1">THREAT</th>
                                    <th class="fw-normal sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1">TYPE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Data rows go here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
