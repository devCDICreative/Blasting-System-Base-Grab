<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGuests" aria-expanded="true" aria-controls="collapseGuests">
    <i class="fas fa-fw fa-cog"></i>
    <span>Guests</span>
  </a>
  <div id="collapseGuests" class="collapse" aria-labelledby="headingGuests" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Guests</h6>

      @if(auth()->user()->userHasRole('Receptionist') )
      <a class="collapse-item" href="{{route('guest.create')}}">Create a Guest</a>
      <a class="collapse-item" href="{{route('guest.index')}}">View All Guests</a>
      <a class="collapse-item" href="{{route('guest.qr.check','start')}}">Scan Guest</a>
      @elseif(auth()->user()->userHasRole('Officer-Gate'))
      <a class="collapse-item" href="{{route('guest.qr.check','start')}}">Scan Guest</a>
      @endif

    </div>
  </div>
</li>

