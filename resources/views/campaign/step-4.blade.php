@extends('layouts.adder-app')

@section('content')
<div class="page-wrapper">
   <p class="page-name">{{ $page_name }}</p>
   <form action="" method="" class="campaign-form">
      <div class="campaign-summary-wrapper">
         <p class="heading">Campaign Summary</p>
         <p class="description">Please review your campaign details below</p>
         <div action="" method="" class="campaign-summary-form">
            <div class="start-date">
               <label class="label" for="start-date">Start Date</label>
               <input type="text" name="start-date" id="start-date" value="08/02/2018">
            </div>
            <div class="duration">
               <label class="label" for="duration">Duration</label>
               <input type="text" name="duration" id="duration" value="90 Days (3 Months)">
            </div>
            <div class="location-area">
               <label class="label" for="">Location Area</label>
               <div class="location"></div>
            </div>
            <div class="city-chosen">
               <label class="label" for="city-chosen">City Chosen</label>
               <input type="text" name="city-chosen" id="city-chosen" value="Lexington">
            </div>
            <div class="special-details">
               <label class="label" for="specials-details">Special Details</label>
               <textarea name="special-details" id="special-details" cols="30" rows="15"></textarea>
            </div>
            <div class="artwork-uploaded">
               <label for="" class="label">Uploaded Artwork</label>
               <div class="artwork">
                     <p class="text">Artwork is previewed here</p>
               </div>
            </div>
            <div class="artwork-location">
               <label for="" class="label">Artwork Location</label>
               <div class="artwork">
                     <p class="text">Artwork location is previewed here</p>
               </div>
            </div>
         </div>
      </div>
   </form>
</div>
@endsection