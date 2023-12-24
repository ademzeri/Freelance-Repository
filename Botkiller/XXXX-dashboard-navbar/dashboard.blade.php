@extends('layouts.default')
@section('content')
<div class="p-6">
<div class="alert alert-danger alert-dismissible fade show">
   <div class="flex flecx-col">
      <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
         <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
         <line x1="15" y1="9" x2="9" y2="15"></line>
         <line x1="9" y1="9" x2="15" y2="15"></line>
      </svg>
      <strong class="mr-2">Whoops! </strong> Your Killbot active period has expired. Immediately Extend Your Killbot Active Period to get full facilities from Killbot.
   </div>
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
   </button>
</div>
<div class="row">
   <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
      <div class="widget-stat card bg-success">
         <div class="card-body p-4">
            <div class="media">
               <span class="me-3">
               <i class="fa-solid fa-face-smile"></i>
               </span>
               <div class="media-body text-white text-end">
                  <p class="mb-1">Real visitors</p>
                  <h3 class="text-white">250</h3>
                  <small>76% Increase in 20 Days</small>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
      <div class="widget-stat card bg-danger">
         <div class="card-body  p-4">
            <div class="media">
               <span class="me-3">
               <i class="fa-solid fa-robot"></i>
               </span>
               <div class="media-body text-white text-end">
                  <p class="mb-1">BOTS</p>
                  <h3 class="text-white">50</h3>
                  <small>21% Decrease in 20 Days</small>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
      <div class="widget-stat card bg-secondary">
         <div class="card-body p-4">
            <div class="media">
               <span class="me-3">
               <i class="fa-solid fa-square-poll-vertical"></i>
               </span>
               <div class="media-body text-white">
                  <p class="mb-1">Total visitors</p>
                  <h3 class="text-white">300</h3>
                  <small>76% Increase in 20 Days</small>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
   <div class="widget-stat card bg-info">
      <div class="card-body p-4">
         <div class="media">
            <span class="me-3">
            <i class="fa-solid fa-link"></i>
            </span>
            <div class="media-body text-white text-end">
               <p class="mb-1">Total Shortcuts</p>
               <h3 class="text-white">21</h3>
            </div>
         </div>
      </div>
   </div>
</div>
</div>

@endsection