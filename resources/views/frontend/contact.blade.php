@extends('layouts.frontend')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            {{-- Contact Info Card --}}
            <div class="card shadow border-0 mb-4">
                <div class="card-body p-5">

                    <h2 class="fw-bold mb-3 text-center">Contact Us</h2>
                    <p class="text-muted text-center mb-4">
                        We’d love to hear from you. Reach out to us or visit our location.
                    </p>

                    <div class="row text-center mb-4">
                        <div class="col-md-6 mb-3">
                            <div class="p-3 border rounded h-100">
                                <h6 class="fw-semibold mb-1">Email</h6>
                                <p class="mb-0 text-muted">info@rugsgallerie.com</p>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="p-3 border rounded h-100">
                                <h6 class="fw-semibold mb-1">Phone</h6>
                                <p class="mb-0 text-muted">+91 8826631573</p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <a href="{{ url('/inquiry') }}" class="btn btn-dark px-4">
                            Send Inquiry
                        </a>
                    </div>

                </div>
            </div>

            {{-- Google Map Section --}}
            <div class="card shadow border-0">
                <div class="card-body p-0">

                    <div class="ratio ratio-16x9">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28835.563438347126!2d82.54775021735199!3d25.38989641556137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398fde0eeba498d3%3A0xfabbe137e48d4bf4!2sBhadohi%20Nagar%20Palika%2C%20Uttar%20Pradesh%20221401!5e0!3m2!1sen!2sin!4v1770641905853!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
					<div class="text-center my-3">
						<a
						href="https://www.google.com/maps/dir/?api=1&destination=20.5937,78.9629"
						target="_blank"
						class="btn btn-outline-dark px-4">
						📍 Get Directions
						</a>
					</div>


                </div>
            </div>

        </div>
    </div>
</div>
{{-- WhatsApp Button (Contact Page Only) --}}
<a
    href="https://wa.me/910000000000?text=Hello%20Rugs%20Gallerie,%20I%20would%20like%20to%20make%20an%20inquiry."
    target="_blank"
    class="whatsapp-float">
    <img
        src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg"
        alt="WhatsApp"
        width="50">
</a>

<style>
.whatsapp-float {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 9999;
}
.whatsapp-float img {
    border-radius: 50%;
    box-shadow: 0 4px 12px rgba(0,0,0,0.3);
}
</style>

@endsection
