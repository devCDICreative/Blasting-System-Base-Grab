<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLoket" aria-expanded="true" aria-controls="collapseLoket">
    <i class="fas fa-fw fa-cog"></i>
    <span>Loket</span>
  </a>
  <div id="collapseLoket" class="collapse" aria-labelledby="headingLoket" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Loket Guests</h6>

      @if(auth()->user()->userHasRole('Receptionist') )
      <a class="collapse-item" href="{{route('loket-guest.create')}}">Generate Guests</a>
      <a class="collapse-item" href="{{route('loket-guest.index')}}">View All Loket Guests</a>
    
      @endif

    </div>
  </div>
</li>