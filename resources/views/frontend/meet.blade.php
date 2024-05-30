@extends('frontend.include.layout')

@section('title', 'Meet | GTech Digital')
@section('description', 'Contact GTech for your upcoming project via phone, email or filling up the contact form. Phone- 0203 598 5956, 0330 380 1000, Email - info@gtechdigital.co.uk')

@section('content')
    
    <div class="meet-main">
        <!-- Calendly inline widget begin -->
        <div class="calendly-inline-widget" data-url="https://calendly.com/admin-dkr8/30min?primary_color=ff000b" style="min-width:320px;height:700px;"></div>
        <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
        <!-- Calendly inline widget end -->
    </div>

@endsection
